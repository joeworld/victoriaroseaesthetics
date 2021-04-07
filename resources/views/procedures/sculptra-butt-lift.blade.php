@extends('partials.master')
@section('title', "Sculptra Butt Lift")
@section('page', '5fa686c7b73fbb4dd28a52dd')

@section('content')

    <div class="section padding-top-9em">
        <div class="section">
            <div class="container">
                <div class="heading-wrapper-centered">
                    <div class="contact-info-wrapper">
                        <div id="w-node-b2551c3a-8701-fea8-c6df-cdb1726c253b-d48e3962" class="contact-info">
                            <h4>@yield('title')</h4>
                        </div>
                    </div>
                    <div>
                        <div class="padding-top-6em">
                            <p>
                                Enhance and re-sculpt the curves of your buttocks without the challenge of exercise or surgery. Feel confident with Sculptra butt lift to have a rounder, more contoured butt without increasing your muscle mass.
                                Sculptra butt lift uses a dermal filler injection to stimulate collagen production in the deeper layers of your skin. These painless injections use poly-L-lactic acid to stimulate the growth of collagen and thickens the skin.  Over time, the patient will notice a visible volume difference in the buttocks.
                            </p>
                            <p>
                                Since collagen is the protein that gives your skin its structure and shape, Sculptra injections fill out the area beneath your butt promoting a more curved shape that looks natural and fits with your body type.
                                Recovery after a Sculptra butt lift is minimal. It can take 4 to 6 months for the results to become apparent, as the injection works to slowly boost your body’s collagen production.
                            </p>
                            <div>
                                <div class="padding-top-9em"></div>
                                <figure style="max-width: 1200pxpx;" class="w-richtext-align-fullwidth w-richtext-figure-type-image">
                                    <div><img src="/img/btt-lift.png" loading="lazy" alt="" /></div>
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('partials.book-btn')
    </div>
    {{-- services --}}
    @include('partials.services')

    {{-- instagram --}}
    @include('partials.instagram')

    {{-- gift card --}}
    @include('partials.giftcard')


@endsection
