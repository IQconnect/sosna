@php
    $gallery = $data['galeria']; 
    $type = $data['type']; 
    $rand = rand();
@endphp

<section class="gallery gallery--{{ $type }}">
    @if($type == 'small') <div class="container gallery__wrapper"> @endif
    @foreach ($gallery as $img)
        @if ($loop->index < 5 || $type == "small")
        <a href="{{ $img['url'] }}" class="gallery__link" data-aos="fade-up" data-fancybox="gallery-{{ $rand  }}">
            {!! image($img['ID'], 'medium', 'gallery__img') !!}
        </a>
        @else 
        <a href="{{ $img['url'] }}" class="gallery__link" hidden data-fancybox="gallery-{{ $rand  }}">
            {!! image($img['ID'], 'medium', 'gallery__img') !!}
        </a>
        @endif
    @endforeach
    @if($type == 'small') <div class="container"> @endif
</section>