@extends('partials.master')
@section('title', 'Facials')
@section('page', '5fa686c7b73fbb4dd28a52dd')

@section('content')

    <div class="section padding-top-6em no-bottom-padding">
        <div class="container">
            <div class="heading-wrapper-centered">
                <div class="contact-info-wrapper">
                    <div id="w-node-b2551c3a-8701-fea8-c6df-cdb1726c253b-d48e3962" class="contact-info">
                        <h4>@yield('title')</h4>
                    </div>
                </div>
                <div class="subnavigation">
                    <div class="subnavigation-wrapper">
                        <div class="w-dyn-list">
                            <div role="list" class="subnavigation-collection-list w-dyn-items">
                                <div role="listitem" class="w-dyn-item">
                                    <a href="/services/bela-md-facial" aria-current="page" class="subnavigation-link w--current">BELA MD</a>
                                </div>
                                <div role="listitem" class="w-dyn-item">
                                    <a href="/services/alumier-glow-peel" aria-current="page" class="subnavigation-link">Alumier Glow Peel</a>
                                </div>
                                <div role="listitem" class="w-dyn-item">
                                    <a href="/services/signature-luxury-facial" class="subnavigation-link">Signature Luxury Facial</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section">
        <div class="container">
            <div class="w-layout-grid grid-2-column">
                <div id="w-node-c6f28ec5-e2b7-2034-7b7a-104e024c9d1b-b826d78f" class="grid-content">
                    <p>Result-driven technology in serum infusion and diamond microdermabrasion. This advanced medical facial combines diamond microdermabrasion, extraction, bio-infusion serum penetration, antioxidant boost with hydrogen water infusion, microcurrent electrical neuromuscular stimulation to tone and boost circulation, and electroporation for enhanced serum delivery deep into the skin. The bio-infusion serums can be customized to treat various skin concerns such as: dry, dehydrated skin, fine lines & wrinkles, acne & congestion, pigmentation, tone & texture, fatigue, premature & aging skin.</p>
                    @include('partials.book-btn')
                </div>
                <div id="w-node-_8449cbd9-7126-ef1b-e7ee-a76cd55e5dd1-b826d78f" class="grid-image-block-2 padding-left">
                    <figure style="max-width: 1200px;" class="w-richtext-align-fullwidth w-richtext-figure-type-image">
                        <iframe width="100%" height="300" class="yt" src="//www.youtube.com/embed/iw-kB_lQTfQ?wmode=transparent&amp;modestbranding=1&amp;showinfo=0&amp;autohide=1&amp;rel=0&amp;iv_load_policy=3" frameborder="0" allowfullscreen=""></iframe>
                    </figure>
                </div>
            </div>
        </div>
    </div>
    @include('partials.book-btn')
    {{-- services --}}
    @include('partials.services')

    {{-- instagram --}}
    @include('partials.instagram')

    {{-- gift card --}}
    @include('partials.giftcard')


@endsection
