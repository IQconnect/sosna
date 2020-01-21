@php
    $flex = $data;
    $content = $flex['content'];
    $image = $flex['img1'];
    $imageBg = $flex['img2'];
@endphp

<section class="flex" data-aos="zoom-in-left" data-aos-duration="400">
    <div class="container">
        <div class="flex__wrapper">
            <div class="flex__col flex__col--content" data-aos="fade-right" data-aos-duration="500">
                {!! $content !!}
            </div>
            {{-- <div class="flex__col" data-aos="fade-left"
            data-aos-offset="200"
            data-aos-duration="1000">
                @if($image)
                    {!! image($image['id'], 'full', 'flex__image') !!}
                @endif
            </div> --}}
        </div>
    </div>
    @if($imageBg)
        {!! image($imageBg['id'], 'full', 'flex__image flex__image--bg') !!}
    @endif
</section>