@extends('partials.master')
@section('title', "Naturopathic Medicine")
@section('page', '5fa686c7b73fbb4dd28a52dd')

@section('content')

    <div class="section padding-top-9em">
        <div class="w-container">
            <div class="contact-info-wrapper">
                <div id="w-node-b2551c3a-8701-fea8-c6df-cdb1726c253b-d48e3962" class="contact-info">
                    <h4>@yield('title')</h4>
                </div>
            </div>
            {{-- <div class="subnavigation">
                <div class="subnavigation-wrapper">
                    <a href="/services/brows-lashes-all" class="subnavigation-link w--current">All</a>
                    <div class="w-dyn-list">
                        <div role="list" class="subnavigation-collection-list w-dyn-items">
                            <div role="listitem" class="w-dyn-item">
                                <a href="/services/brows-lashes" aria-current="page" class="subnavigation-link">Brow + Lashes</a>
                            </div>
                            <div role="listitem" class="w-dyn-item">
                                <a href="/services/brows-lashes-comingsoon" class="subnavigation-link">Coming Soon</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}



            {{-- Add images and sub img --}}
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
