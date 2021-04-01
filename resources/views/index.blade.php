@extends('partials.master')
@section('title', 'Home')
@section('page', '5fa686c7b73fbb4dd28a52dd')

@section('content')

        {{-- banner --}}
        <div class="hero3 section padding-3-5em">
            <div class="hero3-content-wrapper">
                <div>
                    <h1 class="handwritten large-home">Graceful. Rejuvenation. Lavish Beautification</h1>
                    <p class="small-width">Victoria Rose Aesthetics is a Medical Spa & Wellness Clinic dedicated to offering a five-star luxury experience that will help you live your best life and age gracefully with the wellness and confidence that comes from natural-looking, beautiful results.</p>
                    <div class="margin-top-3-5em">
                        <div class="button-wrapper">
                            <a href="https://victoriacyr.myaestheticrecord.com/book/appointments/wg5Y0GWLknpmb9VZ9Kv4lNBAojMaJQ/clinics" class="button w-button">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero3-image-wrapper">
                <img
                    src="/img/20200207_Branding_050.png"
                    loading="lazy"
                    width="599"
                    sizes="(max-width: 479px) 93vw, (max-width: 767px) 43vw, (max-width: 991px) 44vw, 43vw"
                    srcset="
                        /img/20200207_Branding_050.png   500w,
                        /img/20200207_Branding_050.png   800w,
                        /img/20200207_Branding_050.png 1080w,
                        /img/20200207_Branding_050.png         1198w
                    "
                    alt=""
                    class="hero3-main-image"
                />
            </div>
        </div>

        {{-- about victoria --}}
        <div class="section section padding-3-5em">
            <div class="container">
                <div class="heading-wrapper-centered padding-bottom-3-5em">
                    <h2 >Hey there!</h2>
                    <p class="medium-width centered">I’m Vicky, Owner of Victoria Rose Aesthetics. <br/><br/>You are here because, like me, you value professionalism and high-quality products and services. You want a cosmetic expert who brings experience, confidence and attention to detail to every service and treatment.</p>
                    <div class="margin-top-3-5em">
                        <div class="button-wrapper">
                            <a href="/about" class="button w-button">Meet Victoria</a>
                        </div>
                    </div>
                </div>
                <div class="overlap-image-wrapper">
                    <img src="/img/arrow-4.svg" loading="lazy" width="240" alt="" class="pattern top-right" />
                    <img
                        src="/img/VictoriaCyr.png"
                        sizes="(max-width: 479px) 93vw, (max-width: 767px) 96vw, (max-width: 991px) 94vw, (max-width: 1439px) 90vw, 100vw"
                        srcset="
                            /img/VictoriaCyr.png 1080w,
                            /img/VictoriaCyr.png 1600w,
                            /img/VictoriaCyr.png         2000w
                        "
                        alt=""
                        class="overlap-image"
                    />
                </div>
            </div>
        </div>

        {{-- services --}}
        @include('partials.services')

        {{-- products --}}
        @include('partials.products')

        {{-- blog --}}
        {{-- <div class="section padding-bottom-3-5em">
            <div class="container">
                <div class="heading-wrapper"><h2>Latest from our blog</h2></div>
            </div>
            <div class="container no-padding-mobile">
                <div class="w-dyn-list">
                    <div role="list" class="grid-3-column w-dyn-items">

                        <div role="listitem" class="grid-item w-dyn-item">
                            <a href="#" class="grid-link-block w-inline-block">
                                <div class="grid-image-wrapper">
                                    <img loading="lazy" src="/img/blog-1.png" alt="" class="grid-image" />
                                </div>
                                <div class="grid-content-wrapper">
                                    <div class="small-all-caps">Signs of Aging through the Years</div>
                                </div>
                            </a>
                        </div>
                        <div role="listitem" class="grid-item w-dyn-item">
                            <a href="#" class="grid-link-block w-inline-block">
                                <div class="grid-image-wrapper">
                                    <img loading="lazy" src="/img/blog-2.png" alt="" class="grid-image" />
                                </div>
                                <div class="grid-content-wrapper">
                                    <div class="small-all-caps">Real Men Believe in Brotox</div>
                                </div>
                            </a>
                        </div>
                        <div role="listitem" class="grid-item w-dyn-item">
                            <a href="#" class="grid-link-block w-inline-block">
                                <div class="grid-image-wrapper">
                                    <img loading="lazy" src="/img/blog-3.png" alt="" class="grid-image" />
                                </div>
                                <div class="grid-content-wrapper">
                                    <div class="small-all-caps">Why are Anti-Wrinkle Injections so Popular?</div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}

        {{-- instagram --}}
        @include('partials.instagram')

        {{-- gift card --}}
        @include('partials.giftcard')


@endsection
