@php
    $foods = $data['food'];
    $title = $data['title'];
@endphp

<section class="foods">
    <div class="container">
        <header class="foods__header">
            <h2 class="foods__title title">
                {!! $title !!}
            </h2>
        </header>
        <div class="foods__wrapper">
        @foreach ($foods as $food)
            <a class="foods__col" href="{{ $food->guid }}">
                @include('blocks.food', ['food' => $food])
            </a>
        @endforeach
        </div>    
    </div>
</section>