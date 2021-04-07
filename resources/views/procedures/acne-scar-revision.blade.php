@extends('partials.master')
@section('title', "Acne Scar Revision")
@section('page', '5fa686c7b73fbb4dd28a52dd')

@section('content')

    <div class="section padding-top-9em">
        <div class="section">
            <div class="container">
                <div class="heading-wrapper-centered">
                    <div class="contact-info-wrapper">
                        <div id="w-node-b2551c3a-8701-fea8-c6df-cdb1726c253b-d48e3962" class="contact-info">
                            <h4>@yield('title')</h4>
                        </div>
                    </div>
                    <div>
                        <div class="padding-top-6em">
                            <p>
                                Active breakouts are frustrating, but scars acne can leave you feeling embarrassed and self conscience. Scars are formed when breakouts penetrates the skin deeply and damages the tissues beneath it.
                                Fontana offers an effective Nd:YAG laser treatment that is an effective painless solution to treat acne and the scars they cause. The laser light treatment safely permeates deep into the skin to target sebaceous glands to reduce the growth of new acne inflammation.
                            </p>
                            <p>
                                To reduce the appearance of acne scars, the device offers a laser treatment offers precision and tender resurfacing procedure with tan Er:YAG laser beam to eliminate scarred tissue and promote new collagen growth in the dermis.
                                The benefit of laser treatment shows fast results and is a safe simple procedure. ND: YAG acne laser treatment accelerates the healing process and revitalizes the skin.
                            </p>
                            <p>
                                The Er: Yag laser improves the skins texture and tone by precisely penetrating the skin and gently vaporizing microthin-layers of acne. Chemical peels or dermabraisons treatments can result in side have a higher chance of changing your skin colour, infection , more scarrring or even redness while laser treatment is a gentle and effective solution.
                            </p>
                            <p>
                                People who have undergone the acne scar treatment program can expect the results to be very long-lasting.
                            </p>
                            <div class="team-slide-image-wrapper-2 padding-top-6em">
                                <figure style="max-width: 1200px;" class="w-richtext-align-fullwidth w-richtext-figure-type-image">
                                    <iframe width="100%" height="500" src="https://www.youtube.com/embed/4r0ibP8b-F4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('partials.book-btn')
    </div>
    {{-- services --}}
    @include('partials.services')

    {{-- instagram --}}
    @include('partials.instagram')

    {{-- gift card --}}
    @include('partials.giftcard')


@endsection
