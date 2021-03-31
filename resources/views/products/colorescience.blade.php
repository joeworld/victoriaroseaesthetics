@extends('partials.master')
@section('title', 'Colorescience')
@section('page', '5fa686c7b73fbb4dd28a52dd')

@section('content')
    <div data-w-id="97c46752-95df-daf3-0ac5-bf245db4b665" class="section no-padding-top-mobile">
        <div class="container no-padding-mobile">
            <div class="product-description-wrapper">
                <div class="product-description-images-wrapper">
                    <img
                        loading="lazy"
                        src="/img/colorescience_1.png"
                        alt=""
                        sizes="(max-width: 479px) 100vw, (max-width: 767px) 47vw, (max-width: 991px) 45vw, (max-width: 1439px) 44vw, 100vw"
                        class="product-description-image main"
                    />
                    <img
                        loading="lazy"
                        src="/img/skinsceuticals_1.png"
                        alt=""
                        sizes="(max-width: 479px) 100vw, (max-width: 767px) 47vw, (max-width: 991px) 45vw, (max-width: 1439px) 44vw, 100vw"
                        srcset="
                            /img/colorescience_2.png   500w,
                            /img/colorescience_2.png   800w,
                            /img/colorescience_2.png 1080w,
                            /img/colorescience_2.png         1256w
                        "
                        class="product-description-image mobile-none"
                    />
                    <img
                        loading="lazy"
                        src="/img/colorescience_3.png"
                        alt=""
                        sizes="(max-width: 479px) 100vw, (max-width: 767px) 47vw, (max-width: 991px) 45vw, (max-width: 1439px) 44vw, 100vw"
                        srcset="
                            /img/colorescience_3.png 1080w,
                            /img/colorescience_3.png         1256w
                        "
                        class="product-description-image mobile-none"
                    />
                </div>
                <div class="product-description-content-wrapper">
                    <div class="w-dyn-list">
                        <div role="list" class="w-dyn-items">
                            <div role="listitem" class="w-dyn-item">
                                <div class="small-all-caps">Immediate radiance, lasting results</div>
                            </div>
                        </div>
                    </div>
                    <h3 class="product-title">@yield('title')</h3>
                    <p>
                        Originally crafted for vulnerable skin, Colorescience® health-forward ingredient formulas have already improved millions of lives by providing confidence and reassurance to women of all ages, skin types, and concerns. Some benefits of Colorescience products include:                     </p>
                    <p>
                        -Helps prevent up to 90% of skin aging<br>
                        -The application can be alone or over makeup<br>
                        -Offers Immediate on the go protection<br>
                        -Essentially no chemical active ingredients<br>
                        -Dermatologist recommended<br>
                        -Recommended for daily use by the Skin Cancer Foundation
                    </p>
                    <p>
                        Trusted, recommended, and personally used by thousands of physicians; our uncompromising products offer 365-day protection against UV rays and other environmental stressors.
                    </p>
                    <p>
                        Blendable and breathable, this line features custom-refined minerals and nutrient-rich ingredients—everything your skin needs to age well, nothing it doesn’t. Colorescience® sets the standard for beautiful, healthy skincare.
                    </p>
                    <div class="padding-top-9em">
                        <a href="/contact">
                            <div class="w-commerce-commerceaddtocartbutton button full-width">
                                Contact</div>
                        </a>

                    </div>

                </div>
                <div class="product-description-images-mobile">
                    <img
                        loading="lazy"
                        src="/img/colorescience_1.png"
                        alt=""
                        sizes="(max-width: 479px) 93vw, 100vw"
                        srcset="
                            /img/colorescience_1.png   500w,
                            /img/colorescience_1.png   800w,
                            /img/colorescience_1.png 1080w,
                            /img/colorescience_1.png         1256w
                        "
                        class="product-description-image"
                    />
                    <img
                        loading="lazy"
                        src="/img/colorescience_3.png"
                        alt=""
                        sizes="(max-width: 479px) 93vw, 100vw"
                        srcset="
                            /img/colorescience_3.png 1080w,
                            /img/colorescience_3.png         1256w
                        "
                        class="product-description-image"
                    />
                </div>
            </div>
        </div>
    </div>
    {{-- products --}}
    @include('partials.products')
    {{-- instagram --}}
    @include('partials.instagram')
    {{-- gift card --}}
    @include('partials.giftcard')
@endsection
