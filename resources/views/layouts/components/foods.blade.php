@php
    $foods = $data['food'];
    $title = $data['title'];
@endphp

<section class="foods">
    <div class="container">
        <header class="foods__header" data-aos="fade-in">
            <h2 class="foods__title title">
                {!! $title !!}
            </h2>
        </header>
        <div class="foods__wrapper" data-aos="flip-down">
        @foreach ($foods as $food)
            <a class="foods__col" href="{{ get_permalink($food->ID) }}">
                @include('blocks.food', ['food' => $food])
            </a>
        @endforeach
        </div>    
    </div>
</section>