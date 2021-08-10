@php
    //dddx($rows->last()->linkable()->get());
    $tag = $rows->last();
@endphp
@foreach($rows->last()->products()->get() as $product)
    <div>Tag: {{ $tag->title }}</div>
    <div>{{ $product->title }}</div>
@endforeach