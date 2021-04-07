@extends('partials.master')
@section('title', 'Add-ons')
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
                    <div><img src="/img/mani-addon.png" loading="lazy" alt="" /></div>
                </figure>
            </div>
            <div>
                <div class="padding-top-9em">
                    <div class="big-title">PARAFFIN</div>
                    <br>
                    <p>Cosmetically, paraffin wax is often applied to the hands and feet. The wax is a natural emollient, helping make skin supple and soft. When applied to the skin, it adds luxurious moisture and continues to boost the moisture levels of the skin after the treatment is complete. It can also help open pores and remove dead skin cells.</p>
                </div>
                <div class="padding-top-9em">
                    <div class="big-title">POLISH REMOVAL</div>
                </div>
                <div class="padding-top-9em">
                    <div class="big-title">NAIL DESIGNS AVAILABLE</div>
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
