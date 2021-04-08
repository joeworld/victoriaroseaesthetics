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
                                    <a href="/services/bela-md-facial" aria-current="page" class="subnavigation-link">BELA MD</a>
                                </div>
                                <div role="listitem" class="w-dyn-item">
                                    <a href="/services/alumier-glow-peel" aria-current="page" class="subnavigation-link">Alumier Glow Peel</a>
                                </div>
                                <div role="listitem" class="w-dyn-item">
                                    <a href="/services/signature-luxury-facial" class="subnavigation-link w--current">Signature Luxury Facial</a>
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
                    <p>The ultimate luxury facial customized to your specific concerns. Starting with a cleanse, deep exfoliation, extractions, custom Hydrojelly mask treatment, custom serum infusion, cooling globe massage, and lymphatic drainage with gua sha. </p>
                    @include('partials.book-btn')
                </div>
                <div id="w-node-_8449cbd9-7126-ef1b-e7ee-a76cd55e5dd1-b826d78f" class="grid-image-block-2 padding-left">
                    <div class="team-slide-image-wrapper-2">
                        <img src="/img/facials-1.png" alt="">
                    </div>
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
