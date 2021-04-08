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
                        Stress urinary incontinence can be caused by the stretching and weakening of the ligaments, nerves, and pelvic floor muscles that normally work together to support the bladder and keep the urethra closed.
                    </p>
                    <p>
                        Stress urinary incontinence can make patients feel highly self-conscious and embarrassed. Additionally, skin that comes in contact with urine often becomes irritated, so patients much always take precautions such as using incontinence pads. This can take a toll on self-confidence.
                    </p>
                    <p>
                        IncontiLase is a specialized laser therapy to help treat moderate urinary incontinence. The Er. YAG laser treatment repairs tighten vaginal tissue and support the bladder. The non-ablative lasers will heat the target tissue without decimating them like other procedures. The process effectively signals your body to produce more collagen, which will gently resurface.
                    </p>
                    <p>
                        For a majority of patients, a single session is sufficient to alleviate mild or even moderate stress urinary incontinence. If needed, the treatment may be repeated after one month. No special pre-op preparations or post-op precautions are necessary. After treatment, you may immediately return to your normal activities. The procedure is non-surgical and virtually painless. Recovery is extremely quick without the need for the use of analgesics or antibiotics, patients can immediately resume their normal activities after their IncontiLase treatments.
                    </p>

                </div>
                <div id="w-node-_8449cbd9-7126-ef1b-e7ee-a76cd55e5dd1-b826d78f" class="grid-image-block-2 padding-left">
                    <figure style="max-width: 1200pxpx;" class="w-richtext-align-fullwidth w-richtext-figure-type-image">
                        <iframe width="100%" height="300" class="yt" src="//www.youtube.com/embed/P3SnLZUeWC8?wmode=transparent&amp;modestbranding=1&amp;showinfo=0&amp;autohide=1&amp;rel=0&amp;iv_load_policy=3" frameborder="0" allowfullscreen=""></iframe>
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
