@php
    $image = option('mapka');
@endphp

@if ($image)
<a class="mini-map" href="{{ $image['url'] }}" data-fancybox>
    <h3 class="mini-map__title subtitle">
        Mapa ośrodka
    </h3>
    {!! image($image['ID'], 'full', 'mini-map__image') !!}
</a>
@endif
