@php
    $hero = $data['hero'];
    $sygnet = option('sygnet');
    $movie = $data['movie'];
@endphp

@if($hero)
<section class="hero @if(!is_front_page()) hero--small @endif" hero data-aos="fade-in">
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
    <div  class="hero__scene hero__scene--movie" data-depth="0.6">
        <video class="hero__image" playsinline="" autoplay="" muted="" loop="">
            <source src="{{ $movie['url'] }}" type="video/mp4">
        </video>
    </div>
    @endif

    @if(is_front_page())
    <div class="hero__scene hero__scene--sygnet" data-depth="0.1">
        <h1>
            {!! image($sygnet['id'], 'full', 'hero__sygnet') !!}
        </h1>
    </div>
    @else 
    <div class="hero__scene hero__scene--title" data-depth="0.1">
        <h1 class="hero__title extra-title">
            {{ get_the_title() }}
        </h1>
    </div>
    @endif
</section>
@endif
