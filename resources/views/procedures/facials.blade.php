@extends('partials.master')
@section('title', 'Facials')
@section('page', '5fa686c7b73fbb4dd28a52dd')

@section('content')

    <div class="section padding-top-9em">
        <div class="w-container">
            <div class="contact-info-wrapper">
                <div id="w-node-b2551c3a-8701-fea8-c6df-cdb1726c253b-d48e3962" class="contact-info">
                    <h4>@yield('title')</h4>
                </div>
            </div>
            <div class="padding-top-6em">
                <div data-animation="outin" data-duration="500" data-infinite="1" class="team-slider w-slider" role="region" aria-label="carousel">
                    <div class="w-slider-mask" id="w-slider-mask-0">
                        <div class="team-slide w-slide" role="group" style="transform: translateX(0px); opacity: 1;">
                            <div class="w-layout-grid grid-2-column align-center">
                                <div class="team-slide-image-wrapper-2">
                                    <img src="/img/facials-1.png" alt="">
                                </div>
                                <div class="team-slide-content-wrapper">
                                    <div class="small-all-caps">SIGNATURE LUXURY FACIAL</div>
                                    <p>The ultimate luxury facial customized to your specific concerns. Starting with a cleanse, deep exfoliation, extractions, custom Hydrojelly mask treatment, custom serum infusion, cooling globe massage, and lymphatic drainage with gua sha. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div data-animation="outin" data-duration="500" data-infinite="1" class="team-slider w-slider" role="region" aria-label="carousel">
                    <div class="w-slider-mask" id="w-slider-mask-0">
                        <div class="team-slide w-slide" role="group" style="transform: translateX(0px); opacity: 1;">
                            <div class="w-layout-grid grid-2-column align-center">
                                <div class="team-slide-image-wrapper-2">
                                    <img src="/img/facials-2.png" alt="">
                                </div>
                                <div class="team-slide-content-wrapper">
                                    <div class="small-all-caps">ALUMIER GLOW PEEL</div>
                                    <p>With a variety of custom peels to choose from, each with a unique complex of ingredients, your cosmetic professional can customize your program of treatments to target your specific skin concerns whether it be optimum skin health & aging, pigmentation, acne, rosacea and more.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div data-animation="outin" data-duration="500" data-infinite="1" class="team-slider w-slider" role="region" aria-label="carousel">
                    <div class="w-slider-mask" id="w-slider-mask-0">
                        <div class="team-slide w-slide" role="group" style="transform: translateX(0px); opacity: 1;">
                            <div class="w-layout-grid grid-2-column align-center">
                                <div class="team-slide-image-wrapper-2">
                                    <figure style="max-width: 1200px;" class="w-richtext-align-fullwidth w-richtext-figure-type-image">
                                        <iframe width="100%" height="300" src="https://www.youtube.com/embed/iw-kB_lQTfQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    </figure>
                                </div>
                                <div class="team-slide-content-wrapper">
                                    <div class="small-all-caps">BELA MD FACIAL</div>
                                    <p>Result-driven technology in serum infusion and diamond microdermabrasion. This advanced medical facial combines diamond microdermabrasion, extraction, bio-infusion serum penetration, antioxidant boost with hydrogen water infusion, microcurrent electrical neuromuscular stimulation to tone and boost circulation, and electroporation for enhanced serum delivery deep into the skin. The bio-infusion serums can be customized to treat various skin concerns such as: dry, dehydrated skin, fine lines & wrinkles, acne & congestion, pigmentation, tone & texture, fatigue, premature & aging skin.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    @include('partials.book-btn')
    {{-- services --}}
    @include('partials.services')

    {{-- instagram --}}
    @include('partials.instagram')

    {{-- gift card --}}
    @include('partials.giftcard')


@endsection
