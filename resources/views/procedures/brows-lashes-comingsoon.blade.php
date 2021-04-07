@extends('partials.master')
@section('title', 'Brows + Lashes')
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
                    <a href="/services/brows-lashes-all" class="subnavigation-link">All</a>
                    <div class="w-dyn-list">
                        <div role="list" class="subnavigation-collection-list w-dyn-items">
                            <div role="listitem" class="w-dyn-item">
                                <a href="/services/brows-lashes" aria-current="page" class="subnavigation-link">Brow + Lashes</a>
                            </div>
                            <div role="listitem" class="w-dyn-item">
                                <a href="/services/brows-lashes-comingsoon" class="subnavigation-link w--current">Coming Soon</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="padding-top-9em"></div>
                <figure style="max-width: 600px;" class="centered w-richtext-align-fullwidth w-richtext-figure-type-image">
                    <div><img src="/img/brow-3.png" loading="lazy" alt="" /></div>
                </figure>
            </div>
            <div>
                <div class="padding-top-9em">
                    <div class="big-title">BROW MICROBLADING / NANO TATTOOING * COMING SOON*</div>
                    <br>
                    <p>Nano Brow is a semi-permant tattoo technique designed for those who are eager to improve the look of their brows, but without having that penciled-on result that many alternatives can achieve. This treatment utilizes a special Nano Needle that draws on each individual hair so it emulates real eyebrow hair. This is what makes it look so natural.</p>
                    <p>Microblading is a semi-permanent tattoo technique used to create the illusion of fuller brows and to improve the shape and symmetry.</p>
                </div>
                <div class="padding-top-9em">
                    <div class="big-title">LASH EXENTION * COMING SOON*</div>
                    <br>
                    <p>A lash extension treatment involves applying individual synthetic lashes onto each natural eyelash to add extra length and volume. They're perfect for holidays, a big event or just perfect lashes every day.</p>
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
