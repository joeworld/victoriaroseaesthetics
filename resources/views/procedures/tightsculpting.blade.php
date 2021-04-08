@extends('partials.master')
@section('title', "TightSculpting")
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
                        Fotona TightSculpting® is a unique dual-wavelength, non-invasive laser treatment for sculpting and skin tightening on all body areas. The exclusive delivery modes are used in concert for hyperthermic adipocyte destruction and collagen remodeling with exceptional results. The procedure is a fast, safe and effective.
                    </p>
                    @include('partials.book-btn')
                </div>
                <div id="w-node-_8449cbd9-7126-ef1b-e7ee-a76cd55e5dd1-b826d78f" class="grid-image-block-2 padding-left">
                    <figure style="max-width: 1200px;" class="w-richtext-align-fullwidth w-richtext-figure-type-image">
                        <iframe width="100%" height="500" src="https://www.youtube.com/embed/34kXtFrSaQM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
