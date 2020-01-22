@php
    $gallery = $data['galeria']; 
    $rand = rand();
@endphp

<section class="gallery">
    @foreach ($gallery as $img)
    @if ($loop->index < 5)
    <a href="{{ $img['url'] }}" class="gallery__link" data-fancybox="gallery-{{ $rand  }}">
        {!! image($img['ID'], 'full', 'gallery__img') !!}
    </a>
    @else 
    <a href="{{ $img['url'] }}" class="gallery__link" hidden data-fancybox="gallery-{{ $rand  }}">
        {!! image($img['ID'], 'full', 'gallery__img') !!}
    </a>
    @endif
    @endforeach
</section>