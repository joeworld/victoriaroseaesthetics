@extends('partials.master')
@section('title', 'Envy Pillows')
@section('page', '5fa686c7b73fbb4dd28a52dd')

@section('content')
    <div data-w-id="97c46752-95df-daf3-0ac5-bf245db4b665" class="section no-padding-top-mobile">
        <div class="container no-padding-mobile">
            <div class="product-description-wrapper">
                <div class="product-description-images-wrapper">
                    <img
                        loading="lazy"
                        src="/img/envy_1.png"
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
                            /img/envy_2.png   500w,
                            /img/envy_2.png   800w,
                            /img/envy_2.png 1080w,
                            /img/envy_2.png         1256w
                        "
                        class="product-description-image mobile-none"
                    />
                    <img
                        loading="lazy"
                        src="/img/envy_3.png"
                        alt=""
                        sizes="(max-width: 479px) 100vw, (max-width: 767px) 47vw, (max-width: 991px) 45vw, (max-width: 1439px) 44vw, 100vw"
                        srcset="
                            /img/envy_3.png 1080w,
                            /img/envy_3.png         1256w
                        "
                        class="product-description-image mobile-none"
                    />
                </div>
                <div class="product-description-content-wrapper">
                    <div class="w-dyn-list">
                        <div role="list" class="w-dyn-items">
                            <div role="listitem" class="w-dyn-item">
                                <div class="small-all-caps">ANTI-AGING. ANTI-INFLAMMATORY. ANTI-SUPERBUGS. SMOOTH</div>
                            </div>
                        </div>
                    </div>
                    <h3 class="product-title">@yield('title')</h3>

                    <p>
                        This Top-of -the-line pillow comes with all the bells and whistles. Like our complete line of enVy™ pillows. it has the patented “OFF-Your-Face” designed memory foam. The COPPER + SILK has our 100% Mulberry SILK (Oeko-Tex Certified against harmful substances) plus our specialty eco-friendly TENCEL fabric Liner which is infused with COPPER powered by CuTEC™ . This performance fabric has been tested and shown to be: Antimicrobial (including MRSA kill within 24hrs), Anti-inflammatory, Collagen Boosting and has Anti-oxidant properties which are proven to improve skin texture and tone. Learn more about the Benefits of Copper here!
                    </p>

                    <p>
                        Experience the ONLY Fully Loaded Therapeutic Pillow with the Anti-Aging Edge.Copper + Silk + Patented enVy™ Design
                    </p >

                    <br>
                    <p>
                        Each enVy Copper + Silk Pillow comes with:
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
                        src="/img/envy_1.png"
                        alt=""
                        sizes="(max-width: 479px) 93vw, 100vw"
                        srcset="
                            /img/envy_1.png   500w,
                            /img/envy_1.png   800w,
                            /img/envy_1.png 1080w,
                            /img/envy_1.png         1256w
                        "
                        class="product-description-image"
                    />
                    <img
                        loading="lazy"
                        src="/img/envy_3.png"
                        alt=""
                        sizes="(max-width: 479px) 93vw, 100vw"
                        srcset="
                            /img/envy_3.png 1080w,
                            /img/envy_3.png         1256w
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
