@extends('partials.master')
@section('title', 'About')
@section('page', '5fa686c7b73fbb4dd28a52dd')

@section('content')

    <div class="section padding-top-9em">
        <div class="contact-info-wrapper">
            <div class="vertical-divider-line"></div>
            <div class="w-layout-grid grid-2-column">
                <div id="w-node-b2551c3a-8701-fea8-c6df-cdb1726c253b-d48e3962" class="contact-info">
                    <img loading="lazy" alt="" class="contact-info-icon" />
                    <div class="small-all-caps">e-mail us</div>
                    <a href="#" class="big-link">info@victoriaroseaesthetics.ca</a>
                </div>
                <div id="w-node-a2ba6d66-caa4-9212-fec4-7870f289575c-d48e3962" class="contact-info">
                    <img  loading="lazy" alt="" class="contact-info-icon" />
                    <div class="small-all-caps">Call us</div>
                    <a href="#" class="big-link">905-903-3300</a>
                </div>
            </div>
        </div>
    </div>
    <div class="section">
        <div class="container">
            <div class="inner-spacing">
                <div class="heading-wrapper medium-width"><h3>If you have any question fill out the form. We’ll get back to you shortly.</h3></div>
                <div class="w-layout-grid grid-2-column">
                    <div id="w-node-e3c51108-8889-3962-1315-f8e215833210-d48e3962" class="contact-form-grid">
                        <div class="w-form">
                            <form id="email-form" name="email-form" data-name="Email Form">
                                <div class="form-input">
                                    <label for="name">Name &amp;&nbsp;Surname</label><input type="text" class="text-field w-input" maxlength="256" name="name" data-name="" placeholder="" id="name" required="" />
                                </div>
                                <div class="form-input">
                                    <label for="Name-3">Email</label><input type="email" class="text-field w-input" maxlength="256" name="Name" data-name="Name" placeholder="" id="Name" required="" />
                                </div>
                                <div class="form-input"><label for="Phone">Phone Number</label><input type="tel" class="text-field w-input" maxlength="256" name="Phone" data-name="Phone" placeholder="" id="Phone" /></div>
                                <div class="form-input">
                                    <label for="Message">Message</label><textarea placeholder="" maxlength="5000" id="Message" name="Message" data-name="Message" required="" class="textarea w-input"></textarea>
                                </div>
                                <div class="margin-top-3-5em">
                                    <div class="button-wrapper">
                                        <input type="submit" value="Send Message" data-wait="Sending..." class="form-button w-button" />
                                    </div>
                                </div>
                            </form>
                            <div class="success-message w-form-done"><div>Thank you! Your submission has been received!</div></div>
                            <div class="error-message w-form-fail"><div>Oops! Something went wrong while submitting the form.</div></div>
                        </div>
                    </div>
                    <div class="contact-image-grid">
                        {{-- <img src="/img/victoria+rose+aesthetics.jpeg" loading="lazy" alt="" class="contact-image" width="208.5" /> --}}
                        <img src="/img/victoria+rose+aesthetics.jpeg" loading="lazy" alt="" class="contact-image" width="408.5" />
                    </div>
                </div>
            </div>
        </div>
    </div>





    {{-- instagram --}}
    @include('partials.instagram')

    {{-- gift card --}}
    @include('partials.giftcard')

@endsection
