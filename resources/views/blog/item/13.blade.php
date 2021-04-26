@extends('partials.master')
@section('title', 'Together Again and it Feels so Good!')
@section('page', '5fa686c7b73fbb4dd28a52dd')

@section('content')

<section class="blog-items">
    <div class="container">
        <div class="blog-date">
            <p class="text-align-center">MAY 15, 2020</p>
        </div>
        <div class="blog-title">
            <h2 class="handwritten">Together Again and it Feels so Good!</h2>
        </div>
        <p>
            I am so excited to see the doors of our clinic open up and welcome back clients and invite new ones to 
            our rejuvenating escape! I have missed you during this time and will be so thrilled to see you!
        </p>

        <p>
            My top priority has always been to bring an unparalleled safe experience of healing and rejuvenation to 
            my patients, and this resolve is stronger now than ever before. Victoria Rose Aesthetics has been hard
            at work to raise the bar even further in hygiene and sanitation areas. I care about you and want our practice, 
            including every step of the treatment process, to ensure that you feel safe. My goal is to have your needs 
            met safely in accordance with government guidelines.
        </p>

        <p>
            Here are the tangible ways we have ramped up efforts to guarantee patient and employee safety:
        </p>
        
        <div class="blog-subtitle">
            <h4>
                LOOKING FORWARD TO YOUR TREATMENT
            </h4>
            <p>
                You will be required to complete a  Pre-screening COVID assessment form online a minimum of 
                48 hours before the appointment.
            </p>
            <p>
                Clients will be asked to reschedule the appointment if any of these criteria exist.
            </p>
            <ul>
                <li>Fever</li>
                <li>Body ache</li>
                <li>Cough or any URTI</li>
                <li>Recent travelling</li>
                <li>Close contacts with any COVID positive patient  </li>
                <li>Diarrhea or GI infection symptoms</li>
                <li>All patients with immune deficiency</li>
            </ul>
        </div>
        
        <div class="blog-subtitle">
            <h4>
                STAGGERED BOOKINGS
            </h4>
            <p>Rest assured, the room and clinic will be sanitized in-between each appointment.</p>
            <p>
                All bookings will be staggered with enough time between clients so that no two patients will 
                arrive at the same time in the clinic. This measure will not only allow us time to build our 
                relationships but also give time for staff to sanitize the room before the following client’s 
                arrival thoroughly.
            </p>
        </div>
        
        <div class="blog-subtitle">
            <h4>COME SOLO</h4>
            <p>
                To  uphold the guidelines for social distancing, friends or family members of patients are not 
                going to be allowed in the waiting or treatment area. If they accompany you to your appointment, 
                they should remain in the parking lot area until they return.
            </p>
        </div>

        <div class="blog-subtitle">
            <h4>
                WHEN YOU ARRIVE
            </h4>
            <p>
            Upon arrival at our clinic, you will call the clinic from the parking lot to notify us of your arrival. 
            We will advise you as to when it is safe for you to enter the building. Please do not enter the clinic 
            until we give you the green light. When you enter the clinic;
            </p>
            <ul>
                <li>Sanitize your hands, and wear a mask covering or face mask.</li>
                <li>
                    Leave all your personal items in your car, and only bring in to the clinic what you can fit in your pockets. 
                    Please do not bring in any food,beverages, coats, purses or shopping bags. Phones are permitted but must remain 
                    in your pocket.
                </li>
                <li>
                    I will be wearing a mask, gloves, and eye protection/face shield during treatments as an enhanced safety measure.
                </li>
                <li>
                    You will have a contact-free temperature-check conducted. Provided there is no indication of illness,
                    you will then be directed into the treatment room.
                </li>
            </ul>
        </div>

        <div class="blog-subtitle">
            <h4>
                WHEN TO STAY HOME
            </h4>
            <p>
                While we are as excited as you are to get into our clinic, our goal is to keep our patient and employees 
                safe so will ask all patients to:
            </p>
            <ul>
                <li>
                    Refrain from visiting the clinic if you or a household member have a fever, COVID-19 symptoms or 
                    an infectious illness.
                </li>
                <li>
                    Refrain from visiting the clinic if you are under an isolation or quarantine order/directive.
                </li>                
            </ul>
        </div>

        <div class="blog-subtitle">
            <h4>
                OTHER FINAL THOUGHTS
            </h4>
            <ul>
                <li>
                    Respect the clinic’s sanitation and hygiene standards and processes posted within the clinic and shared by 
                    employees.
                </li>
                <li>
                    Please understand that we have the right to refuse clients treatment should we feel that any of the 
                    above criteria are not being met
                </li>                
            </ul>
        </div>

        <p>
            To <a href="#">book</a> a treatment, please email us at info@victoriaroseaesthetics.ca or call us at (416)567-8940
        </p>

        <p>
            At <a href="#">Victoria Rose Aesthetics</a>, our passion is serving you. We look forward to resuming operations and providing 
            the highest quality care to our patients once again.
        </p>

        <p>
            We will get through this together! 
        </p>

        <h6 class="small-all-caps text-align-center" style="margin-top:2em;">
            I AM EXCITED TO RETURN!
        </h6>
        

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
