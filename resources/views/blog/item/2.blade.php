@extends('partials.master')
@section('title', 'Benefits of a Good Skin Care Routine')
@section('page', '5fa686c7b73fbb4dd28a52dd')

@section('content')

<section class="blog-items">
    <div class="container">
        <div class="blog-date">
            <p class="text-align-center">FEBRUARY 9, 2020</p>
        </div>
        <div class="blog-title">
            <h2 class="handwritten">Benefits of a Good Skin Care Routine</h2>
        </div>
        <h6>I REGRET TAKING CARE OF MY SKIN. SAID NO ONE EVER</h6>
        <p>
            Let’s face it! As much as treating your skin to a treatment or procedure that can be done in a clinic,
            the results are going to be significantly enhanced and go a whole lot further when you implement a great
            skincare routine at home. 
        </p>
        <p>
            All this rejuvenating beautification that you are considering taking on with lavish aesthetics treatments
            will last longer, be complemented further and exponentially accelerate and optimize the effects of all your
            efforts with a high-quality skincare regime!
        </p>
        <p>
            Not sure where to get started when there are so many products out there?Here are some simple steps to get
            you on the path of creating habits that your skin will thank you for the rest of your life!
        </p>
        <div class="blog-subtitle">
            <h4 class="handwritten">
                1. Find a Trusted Professional!
            </h4>
            <p>
                Get yourself a trusted cosmetic professional who can make a plan with you. Just like a fitness trainer
                or a healthy eating coach, investing in your skin can benefit from professional advice that will address 
                the areas that trouble you. It is so easy to build up all those bathroom drawers with endless products
                but one great product is better than a variety. Get the best bang for your buck that will not be too 
                overwhelming
            </p>
        </div>
        
        <div class="blog-subtitle">
            <h4 class="handwritten">
                2. De-clutter the Bathroom
            </h4>
            <p>
                If you are really committed to investing in your skin, it will be easier by minimizing the products and
                focusing on just the one routine you have planned out with your trusted professional. Toss anything that
                compromises or doesn’t enhance your new committed routine.
            </p>
        </div>
        
        <div class="blog-subtitle">
            <h4 class="handwritten">
                3. Start Simple! 
            </h4>
            <p>
                Many top-quality skincare companies recognize that the cost and criteria to get someone started may be too 
                time-consuming or financially daunting. Many companies offer a starter skincare kit that will save you 
                money but optimize your results without too much commitment in terms of time or money. Bundles are a great 
                incentive for getting started.
            </p>
        </div>

        <div class="blog-subtitle">
            <h4 class="handwritten">
                4. Commit to Baby Steps!
            </h4>
            <p>
                If you are going to run a 10 km run this summer, you better ease into it! No one, especially you, wants
                to quit your new routine so commit to a short amount of time both the start and end of the day. Then, 
                once you start to see the unbelievable difference in your skin, you will be inspired and motivated to 
                grow your process and keep up with the routine. 
            </p>
        </div>

        <div class="blog-subtitle">
            <h4 class="handwritten">
                5. Set up a Skincare Shrine!
            </h4>
            <p>
                Starting a skin care regiment is more difficult to skip when it is staring at it every day by your 
                bathroom mirror. Display your beautiful new products as a reminder to use it, and that you deserve it! 
            </p>
        </div>

        <p>
            It takes 21 days to create a habit - and even less to start seeing and feeling the results in your skin
            with a top-quality skincare routine. Are you ready to develop a new habit? 
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
