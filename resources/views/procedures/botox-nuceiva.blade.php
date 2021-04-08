@extends('partials.master')
@section('title', 'Botox/Nuceiva')
@section('page', '5fa686c7b73fbb4dd28a52dd')

@section('content')

    <div class="section padding-top-6em">
        <div class="w-container">
            <div class="contact-info-wrapper">
                <div id="w-node-b2551c3a-8701-fea8-c6df-cdb1726c253b-d48e3962" class="contact-info">
                    <h4>@yield('title')</h4>
                </div>
            </div>
            <div>
                <div class="padding-top-6em">
                    <div class="big-title">ANTI-WRINKLE INJECTIONS</div>
                    <br>
                    <p>Over time we all develop habitual facial expressions that form lines and then wrinkles in our skin. Neuromodulators (i.e. Botox, Nuceiva) are a treatment for wrinkles caused by repeated movements. The most commonly treated areas include:- Lines around the eyes, known as crow’s feet, caused by squinting or smiling- The horizontal lines across the forehead caused by raising the eyebrows- The lines and folding of the skin between the eyebrows (glabella) caused by frowning- The downward turning of the mouth (DAO)These actions are considered minor when thought of as a one-time gesture because skin, especially when young, is elastic in nature. However, like water flowing through a canyon, over time these gestures cause expressions to become wrinkles, and the elasticity in our skin fades, resulting in permanent features of the face that we associate with advancing age.Botox is a safe procedure that produces a more rested, smooth and younger version of you. </p>
                </div>
            </div>

        </div>

    </div>
    <div class="section">
        <div class="container w-dyn-list">
            <div class="blog-list w-dyn-items" role="list">
                <div role="listitem" class="procedure-item w-dyn-item">
                    <a class="blog-link-block w-inline-block">
                        <div class="">
                            <img loading="lazy" src="/img/botox_hiw.png" alt="" />
                        </div>
                        <div class="heading-wrapper-centered">
                            <div class="abouttheprocedure">
                                <br>
                                <p>When treated with Botox/Nuceiva, a tiny amount of the neuromodulator product is injected into one or more of the dozens of muscles that control facial expression. The Botox/Nuceiva works to relax the muscles by blocking the nerve impulse from reaching that specific area, causing the muscle to relax and the wrinkles to fade.</p>
                                <p>The purified protein will work its way into the nerves in the treated areas and you will begin to feel and see some changes in about 3 days. The full effect will be apparent after 2 weeks.</p>
                                <p>Over time the treated muscles can "learn" not to make the facial expression that caused the wrinkle, resulting in a long-lasting effect.</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div role="listitem" class="procedure-item w-dyn-item">
                    <a class="blog-link-block w-inline-block">
                        <div class="">
                            <img loading="lazy" src="/img/botox_at.png" alt="" />
                        </div>
                        <div class="heading-wrapper-centered">
                            <div class="abouttheprocedure">
                                <br>
                                <p>After treatment, you may experience swelling, redness, pain, itching, discoloration and tenderness at the injection site. This will typically last for a couple of hours. The use of Tylenol (acetaminophen) is permitted. Additionally, although rare, red or swollen small bumps may occur for 2-3 days. If needed, you may apply makeup after 6 hours of treatment, using very minimal pressure on your skin.</p>
                                <p>You can maximize and protect your results from Botox by exercising the areas treated for the first hour, remaining upright (no laying down or bending over) and avoid rubbing/touching your face for a minimum of 4 hours. For 24 hours after treatment, refrain from strenuous physical activity, hot tubs/sauna, facials, alcohol, aspirin, or other over-the-counter anti-inflammatory medications or supplements.</p>
                                <p>We would love to see you for a <a href="https://victoriacyr.myaestheticrecord.com/book/appointments/wg5Y0GWLknpmb9VZ9Kv4lNBAojMaJQ/clinics" target="_blank">two week follow up assessment</a> especially if this is your first Botox/Nuceiva treatment with us. This will ensure that we are able to see how your facial muscles react to your treatment. For medical reasons, your results will be photographed and documented in your confidential patient file. </p>
                                <p>Botox/Nuceiva is a temporary procedure and at first, you may find that your treatment results will last approximately 3-4 months. Over time the results of each treatment may last longer than 4 months.</p>
                                <p>Botox/Nuceiva is injected to treat fine lines and wrinkles, however, it also helps prevent them from developing — while Botox/Nuceiva is in place, make an effort to notice which muscles are not moving, for example, the lines between the eyebrows. This gives you the opportunity to change your wrinkle forming habits.</p>
                            </div>
                        </div>
                    </a>
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
