@extends('partials.master')
@section('title', 'Zo Skin Health')
@section('page', '5fa686c7b73fbb4dd28a52dd')

@section('content')
    <div data-w-id="97c46752-95df-daf3-0ac5-bf245db4b665" class="section no-padding-top-mobile">
        <div class="container no-padding-mobile">
            <div class="product-description-wrapper">
                <div class="product-description-images-wrapper">
                    <img
                        loading="lazy"
                        data-wf-sku-bindings="%5B%7B%22from%22%3A%22f_main_image_4dr%22%2C%22to%22%3A%22src%22%7D%5D"
                        src="/img/zoskinhealth_1.png"
                        alt=""
                        sizes="(max-width: 479px) 100vw, (max-width: 767px) 47vw, (max-width: 991px) 45vw, (max-width: 1439px) 44vw, 100vw"
                        class="product-description-image main"
                    />
                    <img
                        loading="lazy"
                        src="/img/zoskinhealth_2.png"
                        alt=""
                        sizes="(max-width: 479px) 100vw, (max-width: 767px) 47vw, (max-width: 991px) 45vw, (max-width: 1439px) 44vw, 100vw"
                        srcset="
                            /img/zoskinhealth_2.png   500w,
                            /img/zoskinhealth_2.png  800w,
                            /img/zoskinhealth_2.png 1080w,
                            /img/zoskinhealth_2.png         1256w
                        "
                        class="product-description-image mobile-none"
                    />
                    <img
                        loading="lazy"
                        src="/img/zoskinhealth_3.png"
                        alt=""
                        sizes="(max-width: 479px) 100vw, (max-width: 767px) 47vw, (max-width: 991px) 45vw, (max-width: 1439px) 44vw, 100vw"
                        srcset="
                            /img/zoskinhealth_3.png 1080w,
                            /img/zoskinhealth_3.png 1256w
                        "
                        class="product-description-image mobile-none"
                    />
                </div>
                <div class="product-description-content-wrapper">
                    <div class="w-dyn-list">
                        <div role="list" class="w-dyn-items">
                            <div role="listitem" class="w-dyn-item">
                                {{-- <div class="small-all-caps">ADVANCED SKINCARE BACKED BY SCIENCE</div> --}}
                            </div>
                        </div>
                    </div>
                    <h3 class="product-title">@yield('title')</h3>
                    <p>
                        ZO Skin Health Inc. was created to provide physicians and patients with the world’s most innovative and effective skin health solutions. Founded by a world-renowned skincare expert dermatologist Dr. Zein Obagi, the concept of conceiving skin as science became revolutionary to the development of skincare products that create and maintain healthy skin.                     </p>
                    <p>
                        Founded by Dr. Obagi in 2007, ZO Skin Health, Inc. was created to provide physicians and patients with the world’s most innovative and effective skin health solutions. As Medical Director of ZO Skin Health, Dr. Obagi has created products with technologically advanced ingredients and even more effective formulations, designated into two categories: ZO® Skin Health and ZO® Medical. ZO® Skin Health products maintain the results of therapeutic treatments and provide effective daily skincare and protection from the environment, while ZO® Medical products have been optimized to treat a range of skin disorders and chronic conditions.                    </p>
                    <p>
                        Whether you are looking for prevention or daily skincare rituals, or your skin needs therapeutic and maintenance protocols, ZO Skin Health has the products to optimize your skin health.
                    </p>
                    <p>
                        Learn more about Zo Skin Health <a href="https://zoskinhealth.com/" target="_blank" rel="noopener noreferrer">here</a> .
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
                        src="/img/zoskinhealth_1.png"
                        alt=""
                        sizes="(max-width: 479px) 93vw, 100vw"
                        srcset="
                            /img/zoskinhealth_1.png  500w,
                            /img/zoskinhealth_1.png  800w,
                            /img/zoskinhealth_1.png 1080w,
                            /img/zoskinhealth_1.png 1256w
                        "
                        class="product-description-image"
                    />
                    <img
                        loading="lazy"
                        src="/img/zoskinhealth_2.png"
                        alt=""
                        sizes="(max-width: 479px) 93vw, 100vw"
                        srcset="
                            /img/zoskinhealth_2.png 1080w,
                            /img/zoskinhealth_2.png 1256w
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
