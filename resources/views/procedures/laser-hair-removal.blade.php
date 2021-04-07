@extends('partials.master')
@section('title', "Laser Hair Removal")
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
                        Our FRAC3® Hair Removal is a state-of-the-art high-performance technology safe and effective for all skin types for reducing hair.
                        It uses an innovative ND:YAG laser energy that selectively absorbs deeper levels of the dermis to effectively target the hair follicles with a combination of selective and homogenous photothermolysis.
                    </p>
                    <p>
                        The success of hair reduction treatments depends largely on a patient’s skin and hair type, as well as the skills and treatment insight of the practitioner. Most patients can expect a significant reduction in unwanted hair, and any future hair growth will usually be thinner and lighter, and thus much less pronounced than before.
                        You can easily treat large areas such as the legs, back and chest quickly and efficiently, making laser treatments one of the most cost-effective solutions for long-term hair reduction. Fotona's high peak-power laser pulses provide the speed and efficiency needed to uniformly cover large areas.
                    </p>
                    <p>
                        The success of your treatments depends on the number and consistency of your visits as well as the thickness and color of your hair. Finer hair and dark-skinned clients may require more treatments.
                    </p>
                    @include('partials.book-btn')
                </div>
                <div id="w-node-_8449cbd9-7126-ef1b-e7ee-a76cd55e5dd1-b826d78f" class="grid-image-block-2 padding-left">
                    <figure style="max-width: 1200px;" class="w-richtext-align-fullwidth w-richtext-figure-type-image">
                        <iframe width="100%" height="500" src="https://www.youtube.com/embed/xlT7YV3KrQE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
