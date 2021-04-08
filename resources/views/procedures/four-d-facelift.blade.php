@extends('partials.master')
@section('title', "4D Facelift")
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
                        Fotona4D® is a groundbreaking non-surgical face lifting procedure resulting in a rejuvenated, natural-looking appearance.                     </p>
                    <p>
                        Advantages of Fotona4D®:
                    </p>
                    <ul>
                        <li>Tightening and volumization without the need for fillers or toxins</li>
                        <li>A full lifting treatment from the inside out</li>
                        <li>Immediate rejuvenation, tightening and glow</li>
                        <li>Improved skin complexion</li>
                        <li>Little or no downtime</li>
                        <li>No surgery, needles or anesthesia</li>
                    </ul>

                    @include('partials.book-btn')
                </div>
                <div id="w-node-_8449cbd9-7126-ef1b-e7ee-a76cd55e5dd1-b826d78f" class="grid-image-block-2 padding-left">
                    <figure style="max-width: 1200px;" class="w-richtext-align-fullwidth w-richtext-figure-type-image">
                        <iframe width="100%" height="500" src="https://www.youtube.com/embed/WCrkCPuYqNA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
