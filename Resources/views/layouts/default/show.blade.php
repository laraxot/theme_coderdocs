@extends('pub_theme::layouts.app')
@section('content')
    @php
    if (!is_object($row)) {
        dddx(['row' => $row]);
    }
    //ddd(get_class($row)); //Modules\Blog\Models\Article
    //ddd($row->ratings);
    //ddd($row->ratingObjectives);
    @endphp
    <article class="docs-article" id="section-1">
        <header class="docs-header">
            <h1 class="docs-heading">{{ $row->title }} <span class="docs-time">Last updated:
                    {{ $row->updated_at }}</span></h1>
            <p style="text-color:black;">
                {{-- {!! Panel::make()->get($row)->btnItemAction('rate') !!} --}}
            </p>

            <section class="docs-intro">
                <p>{{ $row->subtitle }}</p>
            </section>
            {!! $row->txt !!}
        </header>
        @if (method_exists($row, 'son'))
            @foreach ($row->sons as $son)
                <section class="docs-section" id="item-1-1">
                    <h2 class="section-heading">{{ $son->title }}</h2>
                    {!! $son->txt !!}
                </section>
            @endforeach
        @endif
    </article>

@endsection
