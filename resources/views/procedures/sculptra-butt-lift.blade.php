@extends('partials.master')
@section('title', "Sculptra Butt Lift")
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

    <div class="section no-top-padding">
        <div class="container">
            <div class="w-layout-grid grid-2-column">
                <div id="w-node-c6f28ec5-e2b7-2034-7b7a-104e024c9d1b-b826d78f" class="grid-content">
                    <p>
                        Enhance and re-sculpt the curves of your buttocks without the challenge of exercise or surgery. Feel confident with Sculptra butt lift to have a rounder, more contoured butt without increasing your muscle mass. The butt lift procedure consists of a series of Sculptra injections to stimulate collagen production in the deeper layers of your skin. These painless injections use poly-L-lactic acid to stimulate the growth of collagen and thickens the skin. Over time, the patient will notice a visible volume difference in the buttocks. Typically requires 3 treatments, 1 months apart.
                    </p>
                    <p>
                        Since collagen is the protein that gives your skin its structure and shape, Sculptra injections fill out the area beneath your butt promoting a more curved shape that looks natural and fits with your body type.
                        Recovery after a Sculptra butt lift is minimal. It can take 4 to 6 months for the results to become apparent, as the injection works to slowly boost your body’s collagen production.
                    </p>
                </div>
                <div id="w-node-_8449cbd9-7126-ef1b-e7ee-a76cd55e5dd1-b826d78f" class="grid-image-block-2 padding-left">
                    <img
                        src="/img/btt-lift.png"
                        loading="lazy"
                        width="500"
                        sizes="(max-width: 479px) 97vw, (max-width: 767px) 100vw, (max-width: 1439px) 563.5391845703125px, 100vw"
                        alt=""
                    />
                </div>
            </div>
            @include('partials.book-btn')

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
