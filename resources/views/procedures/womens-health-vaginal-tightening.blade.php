@extends('partials.master')
@section('title', "Women's Health")
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
                                    <a href="/services/womens-health-prp-o-shot" aria-current="page" class="subnavigation-link">PRP O-SHOT</a>
                                </div>
                                <div role="listitem" class="w-dyn-item">
                                    <a href="/services/womens-health-vaginal-tightening" aria-current="page" class="subnavigation-link w--current">Vaginal Tightening</a>
                                </div>
                                <div role="listitem" class="w-dyn-item">
                                    <a href="/services/womens-health-stress-urinary-incontinence" class="subnavigation-link">Stress Urinary Incontinence</a>
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
                    <p>
                        Innovations in laser technology have produced a unique vaginal tightening treatment that is painless, non-invasive, and non-surgical. It emits infrared light and does not break the skin, allowing for a much more targeted, precise, and effective treatment with little to no risk of scarring, bleeding, or infection. Because er: YAG lasers are safe and relatively gentle, they are administered in several other medical applications.
                    </p>
                    <p>
                        For women who want to improve the look and feel of their vaginal area but are reluctant to undergo surgery, IntimaLase™ non-surgical vaginal tightening provides most of the benefits and almost none of the risk of traditional vaginoplasty. Patients can expect a tighter vaginal canal, with more muscle tone and control, which can restore the sensitivity lost as a result of reduced friction during intercourse.
                    </p>
                    <p>
                        Most patients report almost no discomfort, other than a warming sensation, eliminating the need for even local anesthesia.
                    </p>
                    <p>
                        Non-surgical laser vaginal tightening requires no pre or post-operative care, and patients can return to their daily activities immediately following the procedure.
                    </p>
                </div>
                <div id="w-node-_8449cbd9-7126-ef1b-e7ee-a76cd55e5dd1-b826d78f" class="grid-image-block-2 padding-left">
                    <figure style="max-width: 1200px;" class="w-richtext-align-fullwidth w-richtext-figure-type-image">
                        <iframe width="100%" height="300" class="yt" src="//www.youtube.com/embed/9Uf0Z7J2QbI?wmode=transparent&amp;modestbranding=1&amp;showinfo=0&amp;autohide=1&amp;rel=0&amp;iv_load_policy=3" frameborder="0" allowfullscreen=""></iframe>
                    </figure>
                    @include('partials.book-btn')
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
