<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="description" content="{{ isset($globalSettings->seo_short_description) ? $globalSettings->seo_short_description : 'The Australian Multicultural Community Centre (AMCC) promotes diversity and inclusion through festivals, social welfare programs, and community activities. We offer food distribution, emergency support, and cultural events like the Victoria Spring Festival, fostering unity in Australia.' }}">
        <meta name="keywords" content="{{ isset($globalSettings->seo_keywords) ? implode(', ', $globalSettings->seo_keywords) : 'Australian Multicultural Community Centre, AMCC, Multicultural festivals Australia, Victoria Spring Festival 2024, Diversity and inclusion programs, Social welfare services Australia, Community support programs, Food pack distribution, Emergency assistance bushfires floods, Homeless support services, Cultural events Melton, Volunteer opportunities Australia, Domestic violence awareness programs, Cybercrime prevention programs, Community recreation activities, Multicultural events Melbourne, Family fun days Melton, Social services Melton, Community engagement Australia, Multicultural community hub' }}">
        <meta name="author" content="{{ isset($globalSettings->seo_company_name) ? $globalSettings->seo_company_name : 'Australian Multicultural Community Centre - AMCC' }}">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>{{ isset($globalSettings->seo_title) ? $globalSettings->seo_title : 'Australian Multicultural Community Centre - AMCC' }}</title>
        <meta name="robots" content="index, follow">

        <link rel="icon" type="image/x-icon" href="{{ isset($globalSettings->favicon) ? asset('public/uploads/'.$globalSettings->favicon) : asset('public/uploads/favicon.png') }}">

        @include('front.layouts.styles')

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

        @stack('styles')
    </head>
    <body>
        @include('front.layouts.spinner')

        @include('front.layouts.nav')

        @yield('main_content')

        <div class="footer mt-5 pt-5">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3">
                        <h2 class="heading text-center">Important Sections</h2>
                        <div class="item pb-3 d-flex justify-content-center">
                            <ul class="useful-links">
                                <li><a href="{{ route('home') }}#about"><i class="fas fa-angle-right"></i> About</a></li>
                                <li><a href="{{ route('home') }}#services"><i class="fas fa-angle-right"></i> Services</a></li>
                                <li><a href="{{ route('home') }}#activities"><i class="fas fa-angle-right"></i> Activities</a></li>
                                <li><a href="{{ route('home') }}#festivals"><i class="fas fa-angle-right"></i> Festival</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <h2 class="heading text-center">Useful Links</h2>
                        <div class="item pb-3 d-flex justify-content-center">
                            <ul class="useful-links">
                                <li><a href="{{ route('home') }}"><i class="fas fa-angle-right"></i> Home</a></li>
                                <li><a href="{{ route('about.us') }}"><i class="fas fa-angle-right"></i> About Us</a></li>
                                <li><a href="{{ route('contact.index') }}"><i class="fas fa-angle-right"></i> Contact Us</a></li>
                                <li><a href="{{ route('gallery.photo') }}"><i class="fas fa-angle-right"></i> Photo Gallery</a></li>
                                <li><a href="{{ route('gallery.video') }}"><i class="fas fa-angle-right"></i> Video Gallery</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <h2 class="heading text-center">Contact</h2>
                        <div class="item pb-3">
                            <div class="list-item d-flex justify-content-center">
                                <div class="left">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <div class="right text-center">
                                <!--@isset($globalSettings->footer_address)-->
                                <!--    {{ $globalSettings->footer_address }}-->
                                <!--@endisset-->
                                    <span>100 Rees Road, Melton South-3338</span></br>
                                    <span>Victoria, Australia</span>
                                </div>
                            </div>
                            <div class="list-item d-flex justify-content-center align-items-center">
                                <div class="left">
                                    <i class="fas fa-phone"></i>
                                </div>
                                <div class="right">
                                <!--@isset($globalSettings->footer_phone)-->
                                    <span>+61 423 989 051,</span></br> 
                                    <span>+61 426 262 862,</span></br>
                                    <span>+61 3 9123 6302</span>
                                <!--@endisset-->
                                </div>
                            </div>
                            <div class="list-item d-flex justify-content-center">
                                <div class="left">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <div class="right">
                                    @isset($globalSettings->footer_email)
                                        {{ $globalSettings->footer_email }}
                                    @endisset
                                </div>
                            </div>
                            <!--<div class="list-item d-flex justify-content-center">-->
                            <!--    <div class="left">-->
                            <!--        <i class="fas fa-address-card"></i>-->
                            <!--    </div>-->
                            <!--    <div class="right">-->
                            <!--        ABN: 1742 668 1463-->
                            <!--    </div>-->
                            <!--</div>-->
                            <ul class="social d-flex justify-content-center mt-4">
                                @isset($globalSettings->facebook)
                                <li><a href="{{ $globalSettings->facebook }}"><i class="fab fa-facebook-f"></i></a></li>
                                @endisset

                                @isset($globalSettings->twitter)
                                <li><a href="{{ $globalSettings->twitter }}"><i class="fab fa-twitter"></i></a></li>
                                @endisset

                                @isset($globalSettings->youtube)
                                <li><a href="{{ $globalSettings->youtube }}"><i class="fab fa-youtube"></i></a></li>
                                @endisset

                                @isset($globalSettings->linkedin)
                                <li><a href="{{ $globalSettings->linkedin }}"><i class="fab fa-linkedin-in"></i></a></li>
                                @endisset

                                @isset($globalSettings->instagram)
                                <li><a href="{{ $globalSettings->instagram }}"><i class="fab fa-instagram"></i></a></li>
                                @endisset
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 d-flex justify-content-center">
                        <!--<h2 class="heading text-center">Donate</h2>-->
                        <div class="item pb-3">
                            <h2 class="text-center fs-6">Australian Charities and Not-for-profits Commission (ACNC) Registered Organization</h2>
                            <div class="list-item d-flex justify-content-center">
                                <!--<div class="left">-->
                                <!--    <i class="fas fa-address-card"></i>-->
                                <!--</div>-->
                                <div>
                                    ABN: 1742 668 1463
                                </div>
                            </div>
                            <div class="d-flex justify-content-center">
                                <img class="img-fluid pt-3 m-auto" src="{{ asset('public/uploads/amcc_registered.png') }}" alt="img">
                            </div>
                            <!--<p class="pt-4 text-center">Any donation made to our charity is 100% tax deductible.</p>-->
                            <div class="pt-4 d-flex align-items-center justify-content-center text-center">
                                <a href="{{ route('donate.index') }}" class="donate btn-donate donate-btn {{ Route::is('donate*') ? 'active' : '' }} fs-6">Donate</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="copyright">
                            @Copyright - {{ now()->year }}, {{ $globalSettings->copyright }}
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="scroll-top">
            <i class="fas fa-angle-up"></i>
        </div>
        
        <!--<div class="scroll-container">-->
    <!--<div class="scroll-top donate-btn">-->
    <!--    <button class="btn-donate">Donate</button>-->
    <!--</div>-->
<!--    <div class="scroll-top angle-up">-->
<!--        <i class="fas fa-angle-up"></i>-->
<!--    </div>-->
<!--</div>-->

        @include('front.layouts.scripts')

        @stack('scripts')
    </body>
</html>
