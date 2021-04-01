@extends('partials.master')
@section('title', 'Pedi')
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
                                <a href="/services/mani-pedi" aria-current="page" class="subnavigation-link ">Mani</a>
                            </div>
                            <div role="listitem" class="w-dyn-item">
                                <a href="/services/mani-pedis" class="subnavigation-link w--current">Pedi</a>
                            </div>
                            <div role="listitem" class="w-dyn-item">
                                <a href="/services/mani-pedi-add-ons" class="subnavigation-link">Add-ons</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            {{-- Add images and sub img --}}
            <div>
                <div class="padding-top-9em">
                    <div class="big-title">DELUXE PEDICURE</div>
                    <br>
                    <p>Sea Salt Soak, Sugar Scrub, Mud Mask, Massage Butter, Hot Stone Foot Massage, Cuticle & Callus care, CND Vinylux Polish application.</p>
                </div>
                <div class="padding-top-9em">
                    <div class="big-title">BIOSEAWEED PEDICURE</div>
                    <br>
                    <p>Sugar Sea Salt Soak, Sugar Scrub, Mud Mask, Massage Butter, Hot Stone Foot Massage, Cuticle & Callus care, Bioseaweed LED Gel Polish application, Mud Masque, Massage Butter, Deluxe hand massage, Cuticle care, CND Vinylux Polish application.</p>
                </div>
            </div>
        </div>
    </div>
    @include('partials.coffee')
    {{-- <div class="section">
        <div class="container w-dyn-list">
            <div class="blog-list w-dyn-items" role="list">
                <div role="listitem" class="procedure-item w-dyn-item">
                    <a class="blog-link-block w-inline-block">
                        <div class="">
                            <img loading="lazy" src="/img/brow_hiw.png" alt="" />
                        </div>
                    </a>
                </div>
                <div role="listitem" class="procedure-item w-dyn-item">
                    <a class="blog-link-block w-inline-block">
                        <div class="">
                            <img loading="lazy" src="/img/brow_at.png" alt="" />
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="heading-wrapper-centered">
            <div class="margin-top-3-5em">
                <div style="opacity: 1;" class="button-wrapper">
                    <a href="https://victoriacyr.myaestheticrecord.com/book/appointments/wg5Y0GWLknpmb9VZ9Kv4lNBAojMaJQ/clinics" target="_blank" rel="noopener noreferrer" class="button w-button">BOOK PROCEDURE</a>
                </div>
            </div>
        </div>
    </div> --}}
    {{-- services --}}
    @include('partials.services')

    {{-- instagram --}}
    @include('partials.instagram')

    {{-- gift card --}}
    @include('partials.giftcard')


@endsection
