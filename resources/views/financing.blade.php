@extends('partials.master')
@section('title', 'Financing')
@section('page', '5fa686c7b73fbb4dd28a52dd')

@section('content')

    <div class="section no-padding-bottom">
        <div class="container">
            <div class="heading-wrapper-centered">
                <div class="contact-info-wrapper">
                    <div id="w-node-b2551c3a-8701-fea8-c6df-cdb1726c253b-d48e3962" class="contact-info">
                        <h4>@yield('title')</h4>
                    </div>
                </div>
                <br>
                <p class="medium-width centered">Need Financing? We have options!</p>
            </div>
            <div class="inner-spacing">
                <div class="w-dyn-list">
                    <div class="blog-list w-dyn-items" role="list">
                        <div role="listitem" class="financing-item w-dyn-item">
                            <a class="w-inline-block">
                                <div class="blog-image-wrapper">
                                    <img loading="lazy" src="/img/financing-1.png" alt="" />
                                </div>
                                <div class="heading-wrapper-centered">
                                    <div class="">
                                        <div style="position: relative; display: inline-block;">
                                            <a href="/" target="_blank" rel="noopener noreferrer" class="button w-button">APPLY ONLINE</a>
                                        </div>
                                    </div>
                                    <div style="padding-top:10px;">
                                        <div class="small-all-caps">or call: 1-800-270-9290</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div role="listitem" class="financing-item w-dyn-item">
                            <a class="w-inline-block">
                                <div class="blog-image-wrapper">
                                    <img loading="lazy" src="/img/financing-2.png" alt="" />
                                </div>
                                <div class="heading-wrapper-centered">
                                    <div class="">
                                        <div style="position: relative; display: inline-block;">
                                            <a href="/" target="_blank" rel="noopener noreferrer" class="button w-button">APPLY ONLINE</a>
                                        </div>
                                    </div>
                                    <div style="padding-top:10px;">
                                        <div class="small-all-caps">or call: 1-800-270-9290</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
