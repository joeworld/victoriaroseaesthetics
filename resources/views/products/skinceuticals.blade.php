@extends('partials.master')
@section('title', 'SkinCeuticals')
@section('page', '5fa686c7b73fbb4dd28a52dd')

@section('content')
    <div data-w-id="97c46752-95df-daf3-0ac5-bf245db4b665" class="section no-padding-top-mobile">
        <div class="container no-padding-mobile">
            <div class="product-description-wrapper">
                <div class="product-description-images-wrapper">
                    <img
                        loading="lazy"
                        src="/img/skinsceuticals_1.png"
                        alt=""
                        sizes="(max-width: 479px) 100vw, (max-width: 767px) 47vw, (max-width: 991px) 45vw, (max-width: 1439px) 44vw, 100vw"
                        class="product-description-image main"
                    />
                    <img
                        loading="lazy"
                        src="/img/skinsceuticals_2.png"
                        alt=""
                        sizes="(max-width: 479px) 100vw, (max-width: 767px) 47vw, (max-width: 991px) 45vw, (max-width: 1439px) 44vw, 100vw"
                        srcset="
                            /img/skinsceuticals_2.png   500w,
                            /img/skinsceuticals_2.png   800w,
                            /img/skinsceuticals_2.png 1080w,
                            /img/skinsceuticals_2.png         1256w
                        "
                        class="product-description-image mobile-none"
                    />
                    <img
                        loading="lazy"
                        src="/img/skinsceuticals_3.png"
                        alt=""
                        sizes="(max-width: 479px) 100vw, (max-width: 767px) 47vw, (max-width: 991px) 45vw, (max-width: 1439px) 44vw, 100vw"
                        srcset="
                            /img/skinsceuticals_3.png 1080w,
                            /img/skinsceuticals_3.png         1256w
                        "
                        class="product-description-image mobile-none"
                    />
                </div>
                <div class="product-description-content-wrapper">
                    <h3 class="product-title">@yield('title')</h3>
                    <div class="w-dyn-list">
                        <div role="list" class="w-dyn-items">
                            <div role="listitem" class="w-dyn-item">
                                <div class="small-all-caps">ADVANCED SKINCARE BACKED BY SCIENCE</div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <p>
                        Our mission is to improve skin health. Dedicated to this purpose, we make one simple promise—to provide advanced skincare backed by science.
                    </p>
                    <p>
                        Born from decades of skin cancer research that led to pivotal breakthroughs in antioxidants, our high potency formulas are concentrated in pure actives and proven to penetrate optimally into skin.
                    </p>
                    <p>
                        Made in the USA, our clinical skincare is used by dermatologists, plastic surgeons, and medi-spas for daily homecare and to complement aesthetic procedures. We formulate to correct signs of aging, protect healthy skin, and prevent future damage.
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
                        src="/img/skinsceuticals_1.png"
                        alt=""
                        sizes="(max-width: 479px) 93vw, 100vw"
                        srcset="
                            /img/skinsceuticals_1.png   500w,
                            /img/skinsceuticals_1.png   800w,
                            /img/skinsceuticals_1.png 1080w,
                            /img/skinsceuticals_1.png         1256w
                        "
                        class="product-description-image"
                    />
                    <img
                        loading="lazy"
                        src="/img/skinsceuticals_2.png"
                        alt=""
                        sizes="(max-width: 479px) 93vw, 100vw"
                        srcset="
                            /img/skinsceuticals_2.png 1080w,
                            /img/skinsceuticals_2.png        1256w
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
