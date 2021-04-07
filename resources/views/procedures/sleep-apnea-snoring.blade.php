
@extends('partials.master')
@section('title', "Sleep Apnea + Snoring")
@section('page', '5fa686c7b73fbb4dd28a52dd')

@section('content')

    <div class="section no-bottom-padding">
        <div class="container">
            <div class="heading-wrapper-centered">
                <div class="contact-info-wrapper">
                    <div id="w-node-b2551c3a-8701-fea8-c6df-cdb1726c253b-d48e3962" class="contact-info">
                        <h4>@yield('title')</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section">
        <div class="container">
            <div class="w-layout-grid grid-2-column">
                <div id="w-node-c6f28ec5-e2b7-2034-7b7a-104e024c9d1b-b826d78f" class="grid-content">
                    <div class="big-title">WHAT’S SLEEP APNEA?</div>
                    <br>
                    <p>Sleep apnea is a potentially serious sleep disorder in which breathing repeatedly stops and starts. If you snore loudly and feel tired even after a full night's sleep, you might have sleep apnea. The main types of sleep apnea are: Obstructive sleep apnea, the more common form that occurs when throat muscles relax.</p>

                    <div>
                        <div class="big-title">SNORING?</div>
                        <br>
                        <p>The sound can come through the nose, mouth or a combination of the two and can occur during any stage of sleep. Those who sleep on their backs are more likely to snore. It may also occur when throat muscles relax from use of alcohol or other depressants. Congestion from a cold or allergies may also lead to temporary snoring.</p>
                    </div>
                    <div>
                        <div class="big-title">FONTANA NightLase® </div>
                        <br>
                        <p>The NightLase therapy is a non-invasive, laser treatment for increasing the quality of a patient’s sleep by reducing the effects of sleep apnea and decreasing the amplitude of snoring. This is accomplished through a gentle, tightening effect on lax tissue in the oral mucosa tissue.</p>
                    </div>
                    @include('partials.book-btn')
                </div>
                <div id="w-node-_8449cbd9-7126-ef1b-e7ee-a76cd55e5dd1-b826d78f" class="grid-image-block-2 padding-left">
                    <figure style="max-width: 1200px;" class="w-richtext-align-fullwidth w-richtext-figure-type-image">
                        <iframe width="100%" height="600" src="https://www.youtube.com/embed/Md5KW6BvAig" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </figure>
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
