@extends('partials.master')
@section('title', 'Real Men Believe in Brotox')
@section('page', '5fa686c7b73fbb4dd28a52dd')

@section('content')

<section class="blog-items">
    <div class="container">
        <div class="blog-date">
            <p class="text-align-center">JULY 20, 2020</p>
        </div>
        <div class="blog-title">
            <h2 class="handwritten">Real Men Believe in Brotox</h2>
        </div>
        <p>
            In my last <a href="#">blog about the most popular treatment</a> we do in cosmetic aesthetics, we explain why Botox and Neurotoxins are such a hype!
        </p>
        
        <div class="blog-subtitle">
            <h4>
                MEN DO IT TOO! 
            </h4>
            <p>
                Well, I am over the moon with how many men are taking the plunge to try it out! This procedure for men is 
                surging! It is so prevalent in fact that it has been nicknamed Brotox, a new trend that, after being 
                endorsed by women for years, has become an increasingly popular procedure. 
            </p>
        </div>
        
        <div class="blog-subtitle">
            <h4>
                AND THE RESULTS ARE... WELL,LET’S JUST SAY...
            </h4>
            <ul>
                <li class="small-all-caps">HOT AND HANDSOME</li>
                <li class="small-all-caps">DISTINGUISHED WITHOUT THE DEEP LINES</li>
                <li class="small-all-caps">CHARMING COMPLEXION WITHOUT DULLNESS</li>
                <li class="small-all-caps">SUBTLE BUT SPECTACULAR</li>
            </ul>
        </div>

        <h4>
            WOWSER! GUYS LOVE IT.AND THE GIRLS LOVE IT ON THE GUYS TOO!
        </h4>
        <p>
            Men are jumping on the Brotox train (Nuceiva at our clinic :)) and it is becoming a mainstream procedure 
            that the male gender is loving. Men wantto turn back the clock too, and these tiny injections, which are 
            minimally invasive, can make a massive difference to enhancing a youthful appearance amongst men.
        </p>
        <p>
            There are several reasons why Neurotoxins are gaining popularity with men,including workplace competitiveness 
            and perceived ageism or social media pressures. However, the most exciting aspect of this popularity is the 
            nudge from women and their desire to still look good for their significant other or their single-man status. 
            Men accused of using old photos on dating sites andInstagram or Linked In are now choosing to have an aesthetic 
            procedure done instead.
        </p>
        <p>
            Research shows that men also notice themselves aging in photos and are sensitive to comments, similar to women.
        </p>

        <div class="blog-subtitle">
            <p>
                Reducing facial wrinkles is slightly different for men than women. The most common areas of the 
                face where men can benefit from Neurotoxins to minimize wrinkles is: 
            </p>
            <ul>
                <li>The corners of the eyes (aka crow’s feet)</li>
                <li>Between the eyebrows (aka frown lines)</li>
                <li>On the forehead</li>
                <li>Around the mouth (laugh lines)</li>
            </ul>
        </div>

        <p>
            However, men often will also choose a Neurotoxin treatment to address excessive sweating, lazy eyes, 
            headaches, neck spasms (involuntary tightening of a muscle) or other health conditions.
        </p>

        <p>
            There has been less stigmatization about cosmetic aesthetics for women and men in recent years, so 
            choosing a professional who will understand your need for confidentiality and respect your privacy 
            is so important. More and more, millennials are starting to look at medical aesthetics as regular 
            maintenance as one ages.
        </p>

        <p>
            In the end, men want to look more attractive, appear less stressed and more rested. Men, just like 
            women, have a desire to exude confidence.
        </p>

        <h6 class="small-all-caps">
            EVERYONE WILL NOTICE YOU, BUT NO ONE WILL KNOW WHAT YOU DID.
        </h6>

        <p class="text-align-center" style="margin-top:2em;">
            <a href="#">SIGN A BRO UP!</a>
        </p>
        

    </div>
</section>

<!-- Other content  -->
<div class="container">
    <div class="d-flex other-content">
        <a href="/blog/11" class="float-left">PREVIOUS</a>
        <a href="/blog/13" class="float-right">NEXT</a>
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
