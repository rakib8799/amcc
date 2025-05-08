@extends('front.layouts.app')

@section('main_content')
<div class="page-top" style="background-image: url({{ asset('public/uploads/slider_photo-1729186032.jpg') }})">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Contact</h2>
                <div class="breadcrumb-container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item active">Contact</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="mt-5">
    <!-- Location Start -->
    <div class="container">
        <div class="row g-4 d-flex justify-content-center">
            <div class="col">
                <h4>Get in Touch with AMCC</h4>
                <p>We’d love to hear from you! Whether you have questions about our festivals, community programs, or how to get involved, feel free to reach out.</p>
                <!--<div class="d-flex align-items-center justify-content-center">-->
                <!--    <img src="{{ asset('public/uploads/' . $globalSettings->map_1_country_photo) }}" alt="" class="img-fluid">-->
                <!--</div>-->
                <div class="my-5">
                    <div class="d-flex">
                        <div class="left">
                            <i class="text-primary fas fa-map-marker-alt"></i>
                        </div>
                        <div class="right ms-3">
                            <p>100 Rees Road, Melton South-3338, Victoria, Australia</p>
                        </div>
                    </div>
                    
                    <div class="d-flex">
                        <div class="left">
                            <i class="text-primary fas fa-phone"></i>
                        </div>
                        <div class="right ms-3">
                            <p>+61 423 989 051, +61 426 262 862, +61(03) 9123 6302</p>
                        </div>
                    </div>
                    
                    <div class="d-flex">
                        <div class="left">
                            <i class="text-primary fas fa-envelope"></i>
                        </div>
                        <div class="right ms-3">
                            <p>info@amcc.org.au</p>
                        </div>
                    </div>
                    
                    <div class="d-flex">
                        <div class="left">
                            <i class="text-primary fas fa-clock"></i>
                        </div>
                        <div class="right ms-3">
                            <p>Monday to Friday: 9:00 AM – 5:00 PM</p>
                        </div>
                    </div>
                </div>
                
                <div class="footer mt-5" style="background: white; color: black;">
                    <p style="color: black;">Follow us on social media to stay updated on our upcoming events and activities:</p>
                    <ul class="social d-flex mt-4">
                        @isset($globalSettings->facebook)
                        <li><a href="{{ $globalSettings->facebook }}"><i class="fab fa-facebook-f"></i></a></li>
                        @endisset

                        @isset($globalSettings->instagram)
                        <li><a href="{{ $globalSettings->instagram }}"><i class="fab fa-instagram"></i></a></li>
                        @endisset
                    </ul>
                </div>
            </div>
            <!--<div class="col-md-6">-->
            <!--    <h4 class="text-center">Office in {{ $globalSettings->map_2_country_name }}</h4>-->
            <!--    <div class="d-flex align-items-center justify-content-center">-->
            <!--        <img src="{{ asset('public/uploads/' . $globalSettings->map_2_country_photo) }}" alt="" class="img-fluid">-->
            <!--    </div>-->
            <!--    <div class="my-3">-->
            <!--        <div class="d-flex">-->
            <!--            <div class="left">-->
            <!--                <i class="text-primary fas fa-map-marker-alt"></i>-->
            <!--            </div>-->
            <!--            <div class="right ms-3">-->
            <!--                {{ $globalSettings->contact_address_2 }}-->
            <!--            </div>-->
            <!--        </div>-->
            <!--        <div class="d-flex">-->
            <!--            <div class="left">-->
            <!--                <i class="text-primary fas fa-phone"></i>-->
            <!--            </div>-->
            <!--            <div class="right ms-3">{{ $globalSettings->contact_phone_2 }}</div>-->
            <!--        </div>-->
            <!--        <div class="d-flex">-->
            <!--            <div class="left">-->
            <!--                <i class="text-primary fas fa-envelope"></i>-->
            <!--            </div>-->
            <!--            <div class="right ms-3">{{ $globalSettings->contact_email_2 }}</div>-->
            <!--        </div>-->
            <!--    </div>-->
            <!--    {!! $globalSettings->map_2 !!}-->
            <!--</div>-->
        </div>
    </div>
</div>

<!--<div class="mt-4 mb-5">-->
<!--    <div class="container">-->
<!--        <div class="row">-->
<!--            {{-- @if($globalSettings->map_1 == '')-->
<!--            @php $column = 12; @endphp-->
<!--            @else-->
<!--            @php $column = 6; @endphp-->
<!--            @endif --}}-->
<!--            <h4 class="mb-2">Submit us a message</h4>-->
<!--            <div class="col-12">-->
<!--                <div class="contact-form">-->
<!--                    <form action="{{ route('contact.send-message') }}" method="post">-->
<!--                        @csrf-->
<!--                        <div class="mb-3">-->
<!--                            <label for="name" class="form-label">Name <span class="text-danger">*</span></label>-->
<!--                            <input name="name" type="text" id="name" class="form-control @error('name') is-invalid @enderror" placeholder="Please enter your name">-->
<!--                            <span class="text-danger">@error('name') {{ $message }} @enderror</span>-->
<!--                        </div>-->
<!--                        <div class="mb-3">-->
<!--                            <label for="email" class="form-label">Email Address <span class="text-danger">*</span></label>-->
<!--                            <input name="email" type="email" id="email" class="form-control @error('email') is-invalid @enderror" placeholder="Please enter your email">-->
<!--                            <span class="text-danger">@error('email') {{ $message }} @enderror</span>-->
<!--                        </div>-->
<!--                        <div class="mb-3">-->
<!--                            <label for="message" class="form-label">Message <span class="text-danger">*</span></label>-->
<!--                            <textarea name="message" class="form-control @error('message') is-invalid @enderror" id="message" rows="3" placeholder="Please enter your message"></textarea>-->
<!--                            <span class="text-danger">@error('message') {{ $message }} @enderror</span>-->
<!--                        </div>-->
<!--                        <div>-->
<!--                            <button type="submit" class="btn-style">-->
<!--                                Send Message-->
<!--                            </button>-->
<!--                        </div>-->
<!--                    </form>-->
<!--                </div>-->
<!--            </div>-->

<!--            {{-- @if($globalSettings->map_1 != '')-->
<!--            <div class="col-lg-6 col-12">-->
<!--                <div class="map">-->
<!--                    {!! $globalSettings->map_1 !!}-->
<!--                </div>-->
<!--            </div>-->
<!--            @endif --}}-->

<!--        </div>-->
<!--    </div>-->
<!--</div>-->
@endsection
