@php
    $movie = $data['movie'];
    $img1 =  $data['img1'];
    $img2 =  $data['img2'];
@endphp

@if($movie)
<section class="movie" movie data-aos="fade-in-up">
    {{-- @foreach ($hero as $img)
        {!! image($img['id'], 'full', 'hero__image') !!}
    @endforeach --}}

    <div  class="movie__scene" data-depth="0.13">
        {!! image($img1['id'], 'full', 'movie__image') !!}
    </div>
    <div  class="movie__scene" data-depth="0.11">
        {!! image($img2['id'], 'full', 'movie__image') !!}
    </div>
    <div class="movie__scene movie__scene--sygnet" data-depth="0.1">
        <a class="movie__link" href="{{ $movie}} " data-fancybox >
            <span class="movie__icon fas fa-play-circle"></span>
            Zobacz piękno tego miejsca
        </a>
    </div>
</section>
@endif
