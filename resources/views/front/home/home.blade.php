@extends('front.layouts.app')

@section('main_content')
    <section>
        @include('front.home.partials.hero-banner')
    </section>
    {{-- <section>
        @include('front.home.partials.feature')
    </section> --}}
    <section id="about">
        @include('front.home.partials.about')
    </section>
    <section id="activities">
        @include('front.home.partials.appeals')
    </section>
    <!--<section id="festivals">-->
    <!--    @include('front.home.partials.festival')-->
    <!--</section>-->
    
    <section id="gallery">
        @include('front.gallery.partials.content')
    </section>

    
    <section id="services">
        @include('front.home.partials.service')
    </section>

    <section>
        @include('front.home.partials.get-involved')
    </section>
@endsection