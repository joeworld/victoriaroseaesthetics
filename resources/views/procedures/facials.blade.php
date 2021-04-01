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
            {{-- <div class="subnavigation">
                <div class="subnavigation-wrapper">
                    <a href="/services/brows-lashes-all" class="subnavigation-link">All</a>
                    <div class="w-dyn-list">
                        <div role="list" class="subnavigation-collection-list w-dyn-items">
                            <div role="listitem" class="w-dyn-item">
                                <a href="/services/brows-lashes" aria-current="page" class="subnavigation-link w--current">Brow + Lashes</a>
                            </div>
                            <div role="listitem" class="w-dyn-item">
                                <a href="/services/brows-lashes-comingsoon" class="subnavigation-link">Coming Soon</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}



            {{-- Add images and sub img --}}
            <div>
                <div class="padding-top-9em">
                    <div class="big-title">SIGNATURE LUXURY FACIAL</div>
                    <br>
                    <p>The ultimate luxury facial customized to your specific concerns. Starting with a cleanse, deep exfoliation, extractions, custom Hydrojelly mask treatment, custom serum infusion, cooling globe massage, and lymphatic drainage with gua sha. </p>
                </div>
                <div class="padding-top-9em">
                    <div class="big-title">ALUMIER GLOW PEEL</div>
                    <br>
                    <p>With a variety of custom peels to choose from, each with a unique complex of ingredients, your cosmetic professional can customize your program of treatments to target your specific skin concerns whether it be optimum skin health & aging, pigmentation, acne, rosacea and more.</p>
                </div>
                <div class="padding-top-9em">
                    <div class="big-title">BELAMD FACIAL</div>
                    <br>
                    <p>Result-driven technology in serum infusion and diamond microdermabrasion. This advanced medical facial combines diamond microdermabrasion, extraction, bio-infusion serum penetration, antioxidant boost with hydrogen water infusion, microcurrent electrical neuromuscular stimulation to tone and boost circulation, and electroporation for enhanced serum delivery deep into the skin. The bio-infusion serums can be customized to treat various skin concerns such as: dry, dehydrated skin, fine lines & wrinkles, acne & congestion, pigmentation, tone & texture, fatigue, premature & aging skin.</p>
                </div>
                <div class="padding-top-9em">
                    <div class="big-title">SKINPEN MICRONEEDLING</div>
                    <br>
                    <p>This collagen induction therapy treatment creates controlled micro-injuries that stimulate your body’s natural wound healing process, while minimizing cellular damage. The result is that your skin structure remains intact but you have a beautiful remodeling effect on your scar tissue, which can help reveal rejuvenated skin. Commonly used to treat acne scars, pigmentation, dull skin, large pores.</p>
                </div>
            </div>

        </div>

    </div>
    {{-- <div class="section">
        <div class="container w-dyn-list">
            <div class="blog-list w-dyn-items" role="list">
                <div role="listitem" class="procedure-item w-dyn-item">
                    <a class="blog-link-block w-inline-block">
                        <div class="">
                            <img loading="lazy" src="/img/brow_hiw.png" alt="" />
                        </div>
                    </a>
                </div>
                <div role="listitem" class="procedure-item w-dyn-item">
                    <a class="blog-link-block w-inline-block">
                        <div class="">
                            <img loading="lazy" src="/img/brow_at.png" alt="" />
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="heading-wrapper-centered">
            <div class="margin-top-3-5em">
                <div style="opacity: 1;" class="button-wrapper">
                    <a href="https://victoriacyr.myaestheticrecord.com/book/appointments/wg5Y0GWLknpmb9VZ9Kv4lNBAojMaJQ/clinics" target="_blank" rel="noopener noreferrer" class="button w-button">BOOK PROCEDURE</a>
                </div>
            </div>
        </div>
    </div> --}}
    {{-- services --}}
    @include('partials.services')

    {{-- instagram --}}
    @include('partials.instagram')

    {{-- gift card --}}
    @include('partials.giftcard')


@endsection
