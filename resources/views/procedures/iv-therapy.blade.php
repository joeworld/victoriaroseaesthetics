@extends('partials.master')
@section('title', "IV Therapy")
@section('page', '5fa686c7b73fbb4dd28a52dd')

@section('content')

    <div class="section padding-top-9em">
        <div class="w-container">
            <div class="contact-info-wrapper">
                <div id="w-node-b2551c3a-8701-fea8-c6df-cdb1726c253b-d48e3962" class="contact-info">
                    <h4>@yield('title')</h4>
                </div>
            </div>
            <div>
                <div class="padding-top-9em">
                    <div class="big-title">FARSK IV DRIPS</div>
                    <br>
                    <p>
                        Intravenous treatments allow patients immediate access to improved wellbeing because they are effective and fast-acting.
                    </p>
                    <p>
                        With IV drips, the body receives the vitamins and minerals by injecting the solution directly into the bloodstream; a process that bypasses the digestive system and allows clients to feel the positive effects instantly.
                    </p>
                    <p>All our products are vegan and cruelty-free.</p>

                </div>
            </div>
        </div>
    </div>
    <section>
        <div class="container">
            <div data-animation="outin" data-duration="500" data-infinite="1" class="team-slider w-slider" role="region" aria-label="carousel">
                <div class="w-slider-mask" id="w-slider-mask-0">
                    <div class="team-slide w-slide" role="group" style="transform: translateX(0px); opacity: 1;">
                        <div class="w-layout-grid grid-2-column align-center">
                            <div class="team-slide-image-wrapper">
                                <img src="/img/farsk-iv-immune.png" alt="">
                            </div>
                            <div class="team-slide-content-wrapper">
                                <div class="small-all-caps">IMMUNE IV DRIP</div>
                                <p>refine | illuminate | refresh</p>
                                <p>
                                    Vitamin C, Vitamin D, Zinc. Thiamine (Vitamin B1), Riboflavin (Vitamin B2), Niacinamide (Vitamin B3), d-Panthenol (pro-Vitamin B5), Pyridoxine (Vitamin B6), Biotin (Vitamin B7), Folic Acid (Vitamin B9), Cyanocobalamin (Vitamin B12), Vitamin A, Vitamin E, Levocarnitine, N-Acetylcysteine, Amino Acid Blend, Selenium, Magnesium.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div data-animation="outin" data-duration="500" data-infinite="1" class="team-slider w-slider" role="region" aria-label="carousel">
                <div class="w-slider-mask" id="w-slider-mask-0">
                    <div class="team-slide w-slide" role="group" style="transform: translateX(0px); opacity: 1;">
                        <div class="w-layout-grid grid-2-column align-center">
                            <div class="team-slide-image-wrapper">
                                <img src="/img/farsk-iv-radiance.png" alt="">
                            </div>
                            <div class="team-slide-content-wrapper">
                                <div class="small-all-caps">RADIANCE IV DRIP</div>
                                <p>refine | illuminate | refresh</p>
                                <p>
                                    Vitamin A, Vitamin E and Amino Acids. Vitamin C, Vitamin D, Thiamine (B1), Riboflavin (B2), Niacinamide (B3), Pyridoxine (B6), d-Panthneol (B5), Zinc, Selenium, L-Valine, L-Histidine, L-Isoleucine, L-Leucine, L-Phenylalanine, L- Threonine, L-Lysine, L-Methionine, L-Tryptophan, L-Alanine, Glycine, L-Arginine, L- Proline, L-Glutamic Acid, L-Serine, L-Aspartic Acid, L-Tyrosine.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div data-animation="outin" data-duration="500" data-infinite="1" class="team-slider w-slider" role="region" aria-label="carousel">
                <div class="w-slider-mask" id="w-slider-mask-0">
                    <div class="team-slide w-slide" role="group" style="transform: translateX(0px); opacity: 1;">
                        <div class="w-layout-grid grid-2-column align-center">
                            <div class="team-slide-image-wrapper">
                                <img src="/img/farsk-iv-energy.png" alt="">
                            </div>
                            <div class="team-slide-content-wrapper">
                                <div class="small-all-caps">ENERGY IV DRIP</div>
                                <p>energize | regenerate | strengthen</p>
                                <p>
                                    Magnesium, Vitamin B12 and Vitamin E. Thiamine (Vitamin B1), Riboflavin (Vitamin B2), Niacinamide (Vitamin B3), d-Panthenol (pro-Vitamin B5), Pyridoxine (Vitamin B6), Folic Acid (Vitamin B9), Ascorbic Acid (Vitamin C), Vitamin A, Vitamin D, Levocarnitine, Dextrose.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div data-animation="outin" data-duration="500" data-infinite="1" class="team-slider w-slider" role="region" aria-label="carousel">
                <div class="w-slider-mask" id="w-slider-mask-0">
                    <div class="team-slide w-slide" role="group" style="transform: translateX(0px); opacity: 1;">
                        <div class="w-layout-grid grid-2-column align-center">
                            <div class="team-slide-image-wrapper">
                                <img src="/img/farsk-iv-boost.png" alt="">
                            </div>
                            <div class="team-slide-content-wrapper">
                                <div class="small-all-caps">BOOST IV DRIP</div>
                                <p>hydrate | replenish | enhance</p>
                                <p>
                                    Thiamine (Vitamin B1), Niacinamide (Vitamin B3) and Vitamin D. Magnesium, Sodium, Potassium, Chloride, Phosphate, Gluconate, Acetate, Riboflavin (B2), d- Panthenol (Vitamin B2), Pyridoxine (Vitamin B6), Ascorbic Acid (Vitamin C), Vitamin A, Vitamin E.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    @include('partials.book-btn')
    {{-- services --}}
    @include('partials.services')

    {{-- instagram --}}
    @include('partials.instagram')

    {{-- gift card --}}
    @include('partials.giftcard')


@endsection
