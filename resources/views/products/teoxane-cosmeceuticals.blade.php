@extends('partials.master')
@section('title', 'Teoxane Cosmeceuticals')
@section('page', '5fa686c7b73fbb4dd28a52dd')

@section('content')
    <div data-w-id="97c46752-95df-daf3-0ac5-bf245db4b665" class="section no-padding-top-mobile">
        <div class="container no-padding-mobile">
            <div class="product-description-wrapper">
                <div class="product-description-images-wrapper">
                    <img
                        loading="lazy"
                        src="/img/teo_1.png"
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
                            /img/teo_2.png   500w,
                            /img/teo_2.png   800w,
                            /img/teo_2.png 1080w,
                            /img/teo_2.png         1256w
                        "
                        class="product-description-image mobile-none"
                    />
                    <img
                        loading="lazy"
                        src="/img/teo_3.png"
                        alt=""
                        sizes="(max-width: 479px) 100vw, (max-width: 767px) 47vw, (max-width: 991px) 45vw, (max-width: 1439px) 44vw, 100vw"
                        srcset="
                            /img/teo_3.png 1080w,
                            /img/teo_3.png         1256w
                        "
                        class="product-description-image mobile-none"
                    />
                </div>
                <div class="product-description-content-wrapper">
                    <div class="w-dyn-list">
                        <div role="list" class="w-dyn-items">
                            <div role="listitem" class="w-dyn-item">
                                {{-- <div class="small-all-caps">ANTI-AGING. ANTI-INFLAMMATORY. ANTI-SUPERBUGS. SMOOTH</div> --}}
                            </div>
                        </div>
                    </div>
                    <h3 class="product-title">@yield('title')</h3>

                    <p>
                        Balancing the codes of premium skincare with the rigor of medical science, Teoxane Cosmeceuticals is an innovative skincare line perfectly adapted and complementary to advanced aesthetic procedures.
                    </p>
                    <p class="product-subtitle">
                        Why choose our products?
                    </p>

                    <p>
                        These days, most of us want to look and feel healthy and young for as long as possible. Using the right skincare products is a key part of achieving this. But how do you find the right products optimized for your own specific needs and skin conditions? Even planning an effective beauty routine is a challenge. You almost have to be an expert yourself, knowing which products work together, how they benefit specific skin conditions, and the order in which to use them.
                    </p >

                    <br>
                    <p>
                        TEOXANE Laboratories specialize in the design and manufacturing of hyaluronic acid-based dermal fillers. As one of the recognized market leaders in aesthetic medicine, we have now extended the benefits of our unique, RHA resilient hyaluronic acid®, produced through a patented process, into a complete anti-ageing skincare regimen.
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
                        src="/img/teo_1.png"
                        alt=""
                        sizes="(max-width: 479px) 93vw, 100vw"
                        srcset="
                            /img/teo_1.png   500w,
                            /img/teo_1.png   800w,
                            /img/teo_1.png 1080w,
                            /img/teo_1.png         1256w
                        "
                        class="product-description-image"
                    />
                    <img
                        loading="lazy"
                        src="/img/teo_3.png"
                        alt=""
                        sizes="(max-width: 479px) 93vw, 100vw"
                        srcset="
                            /img/teo_3.png 1080w,
                            /img/teo_3.png         1256w
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
