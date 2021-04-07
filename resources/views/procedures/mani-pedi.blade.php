@extends('partials.master')
@section('title', 'Mani')
@section('page', '5fa686c7b73fbb4dd28a52dd')

@section('content')

    <div class="section padding-top-9em">
        <div class="w-container">
            <div class="contact-info-wrapper">
                <div id="w-node-b2551c3a-8701-fea8-c6df-cdb1726c253b-d48e3962" class="contact-info">
                    <h4>@yield('title')</h4>
                </div>
            </div>
            <div class="subnavigation">
                <div class="subnavigation-wrapper">
                    <a href="/services/mani-pedi-all" class="subnavigation-link">All</a>
                    <div class="w-dyn-list">
                        <div role="list" class="subnavigation-collection-list w-dyn-items">
                            <div role="listitem" class="w-dyn-item">
                                <a href="/services/mani-pedi" aria-current="page" class="subnavigation-link w--current">Mani</a>
                            </div>
                            <div role="listitem" class="w-dyn-item">
                                <a href="/services/mani-pedis" class="subnavigation-link">Pedi</a>
                            </div>
                            <div role="listitem" class="w-dyn-item">
                                <a href="/services/mani-pedi-add-ons" class="subnavigation-link">Add-ons</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div>
                <div class="padding-top-9em"></div>
                <figure style="max-width: 600px;" class="centered w-richtext-align-fullwidth w-richtext-figure-type-image">
                    <div><img src="/img/mani-1.png" loading="lazy" alt="" /></div>
                </figure>
            </div>
            <div>
                <div class="padding-top-9em">
                    <div class="big-title">DELUXE  MANICURE</div>
                    <br>
                    <p>Sugar Scrub, Mud Masque, Massage Butter, Deluxe hand massage, Cuticle care, CND Vinylux Polish application.</p>
                </div>
                <div class="padding-top-9em">
                    <div class="big-title">BIOSEAWEED MANICURE</div>
                    <br>
                    <p>Sugar Scrub, Mud Masque, Massage Butter, Deluxe hand massage, Cuticle care, Bioseaweed LED Gel Polish application.</p>
                </div>
            </div>
        </div>
    </div>
    @include('partials.coffee')
    @include('partials.book-btn')
    {{-- services --}}
    @include('partials.services')

    {{-- instagram --}}
    @include('partials.instagram')

    {{-- gift card --}}
    @include('partials.giftcard')


@endsection
