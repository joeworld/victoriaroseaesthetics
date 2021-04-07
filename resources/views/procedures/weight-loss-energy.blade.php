@extends('partials.master')
@section('title', "Weight Loss & Energy Shot")
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
                        <div class="padding-top-9em"></div>
                        <figure style="max-width: 600px;" class="centered w-richtext-align-fullwidth w-richtext-figure-type-image">
                            <div><img src="/img/lipo-b.png" loading="lazy" alt="" /></div>
                        </figure>
                    </div>
                    <div>
                        <div class="padding-top-9em">
                            <div class="big-title">LIPO-B</div>
                            <br>
                            <p>Lipo-B is an injection of vitamins, minerals and amino acids that are essential for your health and health of your liver. Your liver is the organ responsible for removing fat and toxins from your body, so if it is healthier, it will work better for you. Lipo-B injection ensures your body receives all necessary nutrients to keep you at your energetic best. Many of these nutrients are not absorbable by mouth and need to be taken by injection. Injections are safe, effective and an easy way to keep your body well-balanced.
                                Vitamin B12 Lipotropic injections help increase your energy as well as contribute to the success of your weight loss plan.</p>
                            <p>Vitamin B12 – Regulates the formation of red blood cells and helps in the utilization of iron, preventing anemia. It is an important component of the body system because it is required for proper digestion, absorption and synthesis of foods, protein synthesis, and the metabolism of carbohydrates and fats. Vitamin B12 is also necessary for a healthy nervous system. Results work best when received in combination with health diet and exercise.</p>

                            <p>Possible Side Effects and Contraindications of B12: A vitamin B12 shot is safe and generally has no negative side effects, even in higher doses. Some redness and/or swelling at the injection site may occur as with any injection. This should start to get better within forty-eight (48) hours. In rare cases, B12 can cause diarrhea, peripheral vascular thrombosis, itching, rash, hives, sensitivity to cobalt and/or cobalamin is a contraindication.</p>

                            <p>People with chronic liver and/or kidney dysfunction should not take frequent B12 injections. Interactions with drugs: Chloramphenicol can block the red blood cell producing properties of B12. (Chloramphenicol is an antibiotic useful for the treatment of a number of bacterial infections.) Drugs that decrease or reduce the natural absorption of B12: antibiotics, cobalt irradiation, colchicine, colestipol, H2-blockers, metformin, nicotine, birth control pills, potassium chloride, proton pump inhibitors such as Prevacid, Losec, Aciphex, Pantaloc, and Zidovudine.</p>

                            <p>B12 is contraindicated in Leber’s disease, a hereditary optic nerve atrophic condition.</p>
                            <p>The injections include the following naturally occurring vitamins, amino acids and minerals:</p>

                            <br>
                            <ul>
                                <li>Methionine – An antioxidant amino acid that neutralizes free radicals. It aids in breaking down fat, removing heavy metals from the body, and helps with digestion. It is one of the important amino acids that increase energy and lean muscle mass.</li>
                                <li>Inositol – A vitamin that is vital for metabolism of fat and cholesterol. It prevents hardening of the arteries; it has also been shown to help in the treatment of depression and anxiety.</li>
                                <li>Choline – Plays a major role in cardiovascular health, in addition to minimizing excess fat in the liver through its fat and cholesterol metabolic properties. It aids in hormone production.</li>
                            </ul>

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
