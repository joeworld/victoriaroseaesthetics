@extends('partials.master')
@section('title', 'Should I get a Chemical Peel?')
@section('page', '5fa686c7b73fbb4dd28a52dd')

@section('content')

<section class="blog-items">
    <div class="container">
        <div class="blog-date">
            <p class="text-align-center">JANUARY 22, 2020</p>
        </div>
        <div class="blog-title">
            <h2 class="handwritten">Should I get a Chemical Peel?</h2>
        </div>
        <p>
        With so many different types of procedures to go with, I am often asked about what is going 
        to give the best results and bang for my buck in my clinic.
        </p>
        <h6>OFTEN, THE RESONATING ANSWER IS A CHEMICAL PEEL! </h6>
        <p>
            Facial peels have been used for decades to exfoliate and rejuvenate the skin. 
            Many people love to try a peel when they are first considering medical aesthetics because a peel is less 
            intimidating than some of the other injectable procedures that are offered and with the immediate results, 
            is often a game-changer in the enhanced feel and texture of our skin, a welcome boost in a short amount of 
            time, with minimal discomfort! A Chemical Peel is like exercise - Start with something comfortable! Considering 
            a peel may just be a great place to start with medical aesthetics.
        </p>
        

        <div class="blog-subtitle">
            <h6>
                IF YOU ARE WONDERING IF A CHEMICAL PEEL IS A GOOD OPTION FOR YOU, ASK YOURSELF THESE 3 QUESTIONS:
            </h6>
            <ol>
                <li>
                    Are you feeling like your skin has taken a beating from the sun exposure, blemishes 
                    or the tone and pigmentation of its colour and texture due to the natural impacts of aging?
                </li>
                <li>
                    When you look in the mirror, do you feel like your skin is dull and drab or is your skin colouring 
                    lacking a healthy glow that shines and evenness in colour?
                </li>
                <li>
                    If you book a chemical peel, are you ready to commit to protecting your skin from sun sensitivity 
                    for weeks after your treatment?
                </li>
            </ol>
        </div>
        
        <p>
            If you answered yes to any or all of those questions, you probably will see a marked difference and 
            improved skin colour and tone from a chemical peel.
        </p>

        <p>
            While facial masks and peels can be available over the counter to provide temporary skin improvement 
            and a feeling of softness that we long for, a chemical peel offers a more long term solution to that 
            same softness and smoothness we desire.
        </p>

        <p>
            At Victoria Rose Aesthetics, we offer two types of <a href="#">chemical peels</a> to suit your desires to improve and enhance 
            your skin. Rejuvenation of the skin with a peel yields a beautiful glow that you will feel inside and out! 
            The collagen that is produced will reduce fine lines and wrinkles, acne scarring blemishes,skin discolouration 
            and drabness.
        </p>

        <p>
            If you are wondering about a way to gently and yet significantly boost your facial skin attributes to a more youthful 
            and glowing look, a chemical peel may be your perfect answer.
        </p>

        <p>
            Want to know more about Chemical Peels? <a href="#">Let’s connect</a>
        </p>
        

    </div>
</section>

<div class="container">
    <div class="d-flex other-content">
        <a href="/blog/5" class="float-left">PREVIOUS</a>
        <a href="/blog/7" class="float-right">NEXT</a>
    </div>
</div>

<!-- Social share  -->
<section>
    <div class="container">
        <div class="d-flex">
            <div class="text-align-center share-link">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-tumblr"></i></a>
                <a href="#"><i class="fab fa-pinterest"></i></a>
                <a href="#"><i class="fas fa-heart"></i></a>
            </div>
        </div>
    </div>
</section>


    
    {{-- instagram --}}
    @include('partials.instagram')

    {{-- gift card --}}
    @include('partials.giftcard')

@endsection
