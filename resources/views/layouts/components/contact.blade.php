<section class="section contact">
    <div class="container">
        <header class="contact__header">
            <h2 class="contact__title title"  hero data-aos="fade-in">
                Kontakt
            </h2>
        </header>
        <div class="contact__wrapper">
            <div class="contact__item" hero data-aos="fade-in">
                <div class="contact__icon">
                <i class="fas fa-map-marker-alt"></i>
                </div>
                <div>
                <h3 class="contact__label text">
                    {!! option('address') !!}
                </h3>
                </div>
            </div>
            <div class="contact__item" hero data-aos="fade-in">
                <div class="contact__icon contact__icon--phone">
                    <i class="fas fa-phone"></i>
                    </div>
                    <div>
                    <h3 class="contact__label text">
                        @php
                            $phone = option('phone');
                            $phone  = explode('<br>', $phone);
                        @endphp
                        <a class="contact__link" href="tel:{{ str_replace(' ','', $phone[0]) }}">
                        {!! $phone[0] !!}
                        </a>
                        <br>
                        <a class="contact__link" href="tel:{{ str_replace(' ','', $phone[1]) }}">
                            {!! $phone[1] !!}
                        </a>
                    </h3>
                </div>
            </div>
            <div class="contact__item" hero data-aos="fade-in">
                <div class="contact__icon">
                <i class="fas fa-envelope"></i>
                </div>
                <div>
                <h3 class="contact__label text">
                    <a class="contact__link" href="mailto:{{ option('email') }}">
                    {{ option('email') }}
                    </a>
                </h3>
                </div>
            </div>
        </div>
    </div>
</section>