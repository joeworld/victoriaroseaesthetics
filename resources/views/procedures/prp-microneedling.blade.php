@extends('partials.master')
@section('title', 'Microneedling')
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
                                    <a href="/services/prp-microneedling" aria-current="page" class="subnavigation-link w--current">PRP Microneedling</a>
                                </div>
                                <div role="listitem" class="w-dyn-item">
                                    <a href="/services/skinpen-microneedling" aria-current="page" class="subnavigation-link">Skinpen Microneedling</a>
                                </div>
                                <div role="listitem" class="w-dyn-item">
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
                    <p>Microneedling with plasma-rich platelets (PRP) is a cosmetic treatment that stimulates collagen production by rolling fine needles over the skin and applying platelets, which are one of the components of blood.</p>
                    <p>The Beauty Booster Delivery Device offers precise depth and accurate dosing for a quick and effective treatment with minimal pain and downtime for patients. The 9 points multi-needle tip and vacuum tip reduces discomfort. The treatment can be completely customized with a wide range of applications to target dehydrated skin, fine lines, and wrinkles. </p>

                    @include('partials.book-btn')
                </div>
                <div id="w-node-_8449cbd9-7126-ef1b-e7ee-a76cd55e5dd1-b826d78f" class="grid-image-block-2 padding-left">
                    <div class="team-slide-image-wrapper-2">
                        <img src="/img/facials-5.png" alt="">
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
