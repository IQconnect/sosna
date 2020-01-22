@php
    $hero = $data['hero'];
    $sygnet = option('sygnet');
    $movie = $data['movie'];
@endphp

@if($hero)
<section class="hero" hero data-aos="fade-in">
    {{-- @foreach ($hero as $img)
        {!! image($img['id'], 'full', 'hero__image') !!}
    @endforeach --}}

    <div  class="hero__scene" data-depth="0.13">
        {!! image($hero[1]['id'], 'full', 'hero__image') !!}
    </div>
    <div  class="hero__scene" data-depth="0.11">
        {!! image($hero[0]['id'], 'full', 'hero__image') !!}
    </div>
    @if ($movie)
    <div  class="hero__scene" data-depth="0.6">
        <video class="hero__image" playsinline="" autoplay="" muted="" loop="">
            <source src="{{ $movie['url'] }}" type="video/mp4">
        </video>
    </div>
    @endif
    <div class="hero__scene hero__scene--sygnet" data-depth="0.1">
        {!! image($sygnet['id'], 'full', 'hero__sygnet') !!}
    </div>
</section>
@endif