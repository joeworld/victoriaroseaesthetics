@extends('partials.master')
@section('title', "Skin Resurfacing")
@section('page', '5fa686c7b73fbb4dd28a52dd')

@section('content')
    <div class="section no-bottom-padding">
        <div class="container">
            <div class="heading-wrapper-centered">
                <div class="contact-info-wrapper">
                    <div id="w-node-b2551c3a-8701-fea8-c6df-cdb1726c253b-d48e3962" class="contact-info">
                        <h4>@yield('title')</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section">
        <div class="container">
            <div class="w-layout-grid grid-2-column">
                <div id="w-node-c6f28ec5-e2b7-2034-7b7a-104e024c9d1b-b826d78f" class="grid-content">
                    <p>
                        The TwinLight® Fractional Rejuvenation is the latest development in laser technology is scientifically proven to optimize the smoothness of your skin and give it a fresher, healthier look.
                    </p>
                    <p>
                        Skin resurfacing and rejuvenation treatments can be performed either in ablative modes with an Er: YAG laser or non-ablatively with an Nd: YAG laser, depending on the particular aesthetic outcome that the patient and practitioner wish to achieve. Ablative and non-ablative treatments can also be combined into a comprehensive anti-aging treatment, such as Fotona’s TwinLight® Fractional Rejuvenation system.
                        Past skin rejuvenation procedures treated large areas of skin, whether aged or not. Fotona’s revolutionary TwinLight® Fractional Rejuvenation process, the laser light precisely targets imperfections in the skin, leaving the surrounding healthy skin untouched. The heat from the laser energy also stimulates the production of new collagen in the dermis, and the surrounding, untreated skin helps to speed the rejuvenation process.
                    </p>
                    <p>
                        Treatments can extend from light touch-ups to deep collagen remodeling, ideal for patients who want drastic rejuvenation effects, but are not inclined towards aggressive surgical or chemical alternatives. This treatment is suitable for all skin types and tones, with minimal patient downtime.
                    </p>
                    @include('partials.book-btn')
                </div>
                <div id="w-node-_8449cbd9-7126-ef1b-e7ee-a76cd55e5dd1-b826d78f" class="grid-image-block-2 padding-left">
                    <figure style="max-width: 1200px;" class="w-richtext-align-fullwidth w-richtext-figure-type-image">
                        <iframe width="100%" height="500" src="https://www.youtube.com/embed/r_p5MhU7b84" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </figure>
                </div>
            </div>

        </div>
    </div>

    {{-- services --}}
    @include('partials.services')

    {{-- instagram --}}
    @include('partials.instagram')

    {{-- gift card --}}
    @include('partials.giftcard')


@endsection
