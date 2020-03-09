@php
    $rooms = $data['rooms'];
    $title = $data['title'];
    $content = $data['content'];
@endphp

<section class="rooms">
    <div class="container">
        <header class="rooms__header" data-aos="fade-in">
            <h2 class="rooms__title title">
                {!! $title !!}
                @if($content)
                <br>
                <br>
                {{ $content }}
                @endif
            </h2>
        </header>
        <div class="rooms__wrapper" data-aos="flip-down">
        @foreach ($rooms as $room)
            <a class="rooms__col" href="{{ get_permalink($room->ID) }}">
                @include('blocks.room', ['room' => $room])
            </a>
        @endforeach
        </div>    
    </div>
    @if($imageBg)
        {!! image($imageBg['id'], 'full', 'rooms__image flex__image--bg') !!}
    @endif
</section>