

<div class="section overflow-hidden">
    <div class="container">
        <div class="heading-wrapper centered"><h2>Products</h2></div>
    </div>
    <div class="container no-padding-mobile">

        <div
            data-w-id="427564db-ebd8-80f8-6943-f23298b3211d"
            class="horizontal-scroll-section">

            {{-- skinceuticals --}}
            @if(url()->current() != url('products/skinceuticals'))
            <div class="horizontal-scroll-block">
                <a href="/products/zo-skin-health">
                    <div class="horizontal-scroll-image">
                        <img
                            src="/img/products-skinsceuticals.png"
                            loading="lazy"
                            sizes="(max-width: 479px) 68vw, (max-width: 991px) 36vw, (max-width: 1439px) 34vw, 100vw"
                            srcset="
                                /img/products-skinsceuticals.png 800w,
                                /img/products-skinsceuticals.png        801w
                            "
                            alt=""
                        />
                    </div>
                    <div class="horizontal-scroll-content">
                        <h5>Skinceuticals</h5>
                    </div>
                </a>

            </div>
            @endif;

            {{-- Colorescience --}}
            @if(url()->current() != url('products/colorescience'))
            <div class="horizontal-scroll-block">
                <a href="/products/colorescience">
                    <div class="horizontal-scroll-image">
                        <img
                            src="/img/products-colorescience.png"
                            loading="lazy"
                            sizes="(max-width: 479px) 68vw, (max-width: 991px) 36vw, (max-width: 1439px) 34vw, 100vw"
                            srcset="
                                /img/products-colorescience.png 800w,
                                /img/products-colorescience.png        801w
                            "
                            alt=""
                        />
                    </div>
                    <div class="horizontal-scroll-content">
                        <h5>Colorescience</h5>
                    </div>
                </a>

            </div>
            @endif

            {{-- Zo Skin Health --}}
            @if(url()->current() != url('products/zo-skin-health'))
            <div class="horizontal-scroll-block">
                <a href="/products/zo-skin-health">
                    <div class="horizontal-scroll-image">
                        <img
                            src="/img/products-zoskinhealth.png"
                            loading="lazy"
                            sizes="(max-width: 479px) 68vw, (max-width: 991px) 36vw, (max-width: 1439px) 34vw, 100vw"
                            srcset="
                                /img/products-zoskinhealth.png 800w,
                                /img/products-zoskinhealth.png        801w
                            "
                            alt=""
                        />
                    </div>
                    <div class="horizontal-scroll-content"><h5>Zo Skin Health</h5></div>
                </a>
            </div>
            @endif

            {{-- envypillows --}}
            @if(url()->current() != url('products/envy-pillows'))
            <div class="horizontal-scroll-block">
                <a href="/products/colorescience">
                    <div class="horizontal-scroll-image">
                        <img
                            src="/img/products-envypillows.png"
                            loading="lazy"
                            sizes="(max-width: 479px) 68vw, (max-width: 991px) 36vw, (max-width: 1439px) 34vw, 100vw"
                            srcset="
                                /img/products-envypillows.png 800w,
                                /img/products-envypillows.png        801w
                            "
                            alt=""
                        />
                    </div>
                    <div class="horizontal-scroll-content"><h5>Envy Pillows</h5></div>
                </a>
            </div>
            @endif

            {{-- eyenvy --}}
            @if(url()->current() != url('products/eyenvy'))
            <div class="horizontal-scroll-block">
                <a href="/products/eyenvy">
                    <div class="horizontal-scroll-image">
                        <img
                            src="/img/products-eyenvy.png"
                            loading="lazy"
                            sizes="(max-width: 479px) 68vw, (max-width: 991px) 36vw, (max-width: 1439px) 34vw, 100vw"
                            srcset="
                                /img/products-eyenvy.png 800w,
                                /img/products-eyenvy.png        801w
                            "
                            alt=""
                        />
                    </div>
                    <div class="horizontal-scroll-content"><h5>Eyevy</h5></div>
                </a>
            </div>
            @endif

            {{-- teoxane-cosmeceuticals --}}
            @if(url()->current() != url('products/teoxane-cosmeceuticals'))
            <div class="horizontal-scroll-block">
                <a href="/products/teoxane-cosmeceuticals">
                    <div class="horizontal-scroll-image">
                        <img
                            src="/img/products-teo.png"
                            loading="lazy"
                            sizes="(max-width: 479px) 68vw, (max-width: 991px) 36vw, (max-width: 1439px) 34vw, 100vw"
                            srcset="
                                /img/products-teo.png 800w,
                                /img/products-teo.png        801w
                            "
                            alt=""
                        />
                    </div>
                    <div class="horizontal-scroll-content"><h5>Teoxane Cosmeceuticals</h5></div>
                </a>
            </div>
            @endif


        </div>
    </div>
    <div class="container">
        <div class="heading-wrapper-centered no-padding-bottom">
            <div class="margin-top-3-5em">
                <div class="button-wrapper">
                    <a href="/products" class="button w-button">View All Products</a>
                </div>
            </div>
        </div>
    </div>
</div>
