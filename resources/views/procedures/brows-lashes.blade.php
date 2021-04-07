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
                                <a href="/services/brows-lashes" aria-current="page" class="subnavigation-link w--current">Brow + Lashes</a>
                            </div>
                            <div role="listitem" class="w-dyn-item">
                                <a href="/services/brows-lashes-comingsoon" class="subnavigation-link">Coming Soon</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <div>
                <div class="padding-top-9em"></div>
                <figure style="max-width: 600px;" class="centered w-richtext-align-fullwidth w-richtext-figure-type-image">
                    <div><img src="/img/brow-1.png" loading="lazy" alt="" /></div>
                </figure>
            </div>
            <div>
                <div class="padding-top-9em">
                    <div class="big-title">BROW & LASH TINTING</div>
                    <br>
                    <p>An eyelash tint consists of adding a special dye to your eyelashes, giving you weeks of dark, full lashes without the assistance of mascara. You recline in a salon chair and a technician applies the dye to your lashes while you keep your eyes closed for about 10 minutes. It's a quick, relatively painless process.</p>
                    <p>Eyebrow tinting is the process of applying semi-permanent dye to enhance, shape, and define your brows.</p>
                </div>
                <div class="padding-top-9em">
                    <div class="big-title">BROW LAMINATION</div>
                    <br>
                    <p>Brow lamination is a two-step eyebrow perming treatment that involves correcting the brow shape by setting the hairs in place using a chemical solution. In the first step, a cream is applied that breaks down bonds in the eyebrow hairs so they can be manipulated into a new position.</p>
                </div>
                <div class="padding-top-9em">
                    <div class="big-title">LASH LIFT</div>
                    <br>
                    <p>The lash lift mimics the effect of an eyelash curler. It makes your lashes bend upwards, leaving them looking longer, and your eyes more open and bright</p>
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
