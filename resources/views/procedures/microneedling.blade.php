@extends('partials.master')
@section('title', 'Microneedling')
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
                                    <img src="/img/facials-5.png" alt="">
                                </div>
                                <div class="team-slide-content-wrapper">
                                    <div class="small-all-caps">PRP MICRONEEDLING</div>
                                    <p>Microneedling with plasma-rich platelets (PRP) is a cosmetic treatment that stimulates collagen production by rolling fine needles over the skin and applying platelets, which are one of the components of blood.</p>
                                    <p>The Beauty Booster Delivery Device offers precise depth and accurate dosing for a quick and effective treatment with minimal pain and downtime for patients. The 9 points multi-needle tip and vacuum tip reduces discomfort. The treatment can be completely customized with a wide range of applications to target dehydrated skin, fine lines, and wrinkles. </p>
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
                                    <img src="/img/facials-4.png" alt="">
                                </div>
                                <div class="team-slide-content-wrapper">
                                    <div class="small-all-caps">SKINPEN MICRONEEDLING</div>
                                    <p>This collagen induction therapy treatment creates controlled micro-injuries that stimulate your body’s natural wound healing process, while minimizing cellular damage. The result is that your skin structure remains intact but you have a beautiful remodeling effect on your scar tissue, which can help reveal rejuvenated skin. Commonly used to treat acne scars, pigmentation, dull skin, large pores.</p>
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