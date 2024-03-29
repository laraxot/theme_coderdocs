@extends('pub_theme::layouts.app', ['sidebar' => 1])
@section('content')
    @foreach ($rows as $key => $row)
        <article class="docs-article" id="section-1">
            <header class="docs-header">
                <h1 class="docs-heading">
                    <a href="{{ Panel::make()->get($row)->url() }}">{{ $row->title }}</a> <span
                        class="docs-time">Last updated: {{ $row->updated_at }}</span>
                </h1>
                <section class="docs-intro">
                    <p>{{ $row->subtitle }}</p>
                </section>
                <!--//docs-intro-->
            </header>
            @if (is_iterable($row->sons))
                @foreach ($row->sons as $son)
                    <section class="docs-section" id="item-1-1">
                        <h2 class="section-heading">
                            <a href="{{ Panel::make()->get($son)->url() }}">{{ $son->title }}</a>
                        </h2>
                        <p>{{ $son->subtitle }}</p>
                    </section>
                @endforeach
            @else
                <h3>[{{ get_class($row) }}] method [sons] is not iterable</h3>
            @endif
        </article>
    @endforeach
    {{-- @include($_layout->view_default.'.test.content') --}}
@endsection
