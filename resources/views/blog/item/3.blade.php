@extends('partials.master')
@section('title', 'Your Skin is Thirsty')
@section('page', '5fa686c7b73fbb4dd28a52dd')

@section('content')

<section class="blog-items">
    <div class="container">
        <div class="blog-title">
            <h2 class="handwritten">Your Skin is Thirsty</h2>
        </div>
        <p>
            The fountain of youth truly does begin with the water we drink!  
        </p>
        <p>
            Are you drinking enough water?
        </p>
        <p>
            There are so many things outside of medical aesthetics that we can do to complement and enhance the health of our
            skin. But there really is nothing that compares to drinking water. 
        </p>
        <p>
            And the best part of that is that there is no cost to hydrating our bodies and skin with this amazing 
            resource! Staying hydrated is important for many reasons in our overall health, including digestion and 
            circulation. 
        </p>
        <p>
            But take note! Our skin loves it when we drink lots of water! Drinking water is one of the easiest and 
            best beauty treatments you can do.
        </p>
        <p>
            Our skin is an organ with a large percentage of its cells being made up of water. When we don’t get enough
            water, our skin can respond with dryness,tightness and accelerate signs of aging.
        </p>
        <p>
            And if you are not drinking a minimum of 8 glasses a day, your skin is thirsty! 
        </p>
        <p>
            Here are a few of the benefits of quenching your skin’s thirst! 
        </p>

        <div class="blog-subtitle">
            <h4 class="handwritten">
                Tighter Skin
            </h4>
            <p>
                Water actually works to tighten and improve the elasticity of the skin that may be sagging due to weight loss
                or aging. Drinking water helps your skin maintain moisture and can keep your skin fuller and plumper, which means
                fewer wrinkles and fine lines
            </p>
        </div>
        
        <div class="blog-subtitle">
            <h4 class="handwritten">
                Better Skin Texture
            </h4>
            <p>
                Healthier skin is going to be your result when you drink water. Water helps balance your PH balance that
                aids in clearing blemishes or minimizing acne.Water flushes toxins allowing your pores to shrink and that
                means less clogging and smaller pores. All that hydration allows for a better balance of oil and water 
                on the surface of the skin. If you have a skin condition such as psoriasis or eczema, water can be a 
                positive way to address flare-ups.
            </p>
        </div>
        
        <div class="blog-subtitle">
            <h4 class="handwritten">
                Healing is Accelerate
            </h4>
            <p>
                If you have had some extra exposure to the sun or have a sunburn, or you are experiencing dryness that 
                can lead to cracking and flaking, your skin is begging for water to help speed up the healing process! 
                Water may not be an alternative to Aloe Vera, but can help complement its effect in soothing your skin
                 and minimize the pain. Itchy skin can also happen with flaky, dry skin so water will minimize the 
                 potential cracks that add to the discomfort.
            </p>
        </div>

        <div class="blog-subtitle">
            <h4 class="handwritten">
                Enhance your Skin Care Regime
            </h4>
            <p>
                In my previous blog, we talk about the importance of a good skincare routine. If you are drinking water,
                your healthy skin is able to absorb all of those excellent moisturizers and creams. If you are not 
                drinking water, your well-invested skincare product’s effectiveness is impacted too. Drinking water helps
                balance the natural oils to address problem areas and optimize your skin’s ability to benefit from your
                products.
            </p>
        </div>

        <p>
            Making drinking water a habit has incredible benefits for your overall health and wellness. When you drink
            water, it works through your body’s system to target many areas. Your skin may be the most evident and 
            recognizable beneficiary of all.
        </p>

        <p>
            Isn’t your skin worth it? 
        </p>
    </div>
</section>

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
