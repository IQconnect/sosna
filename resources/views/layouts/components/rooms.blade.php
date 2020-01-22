@php
    $rooms = $data['rooms'];
    $title = $data['title'];
@endphp

<section class="rooms">
    <div class="container">
        <header class="rooms__header">
            <h2 class="rooms__title title">
                {!! $title !!}
            </h2>
        </header>
        <div class="rooms__wrapper">
        @foreach ($rooms as $room)
            <a class="rooms__col" href="{{ $room->guid }}">
                @include('blocks.room', ['room' => $room])
            </a>
        @endforeach
        </div>    
    </div>
    @if($imageBg)
        {!! image($imageBg['id'], 'full', 'rooms__image flex__image--bg') !!}
    @endif
</section>