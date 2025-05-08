@extends('front.layouts.app')

@section('main_content')
    <section>
        @include('front.about.partials.topbar')
    </section>
    <section>
        @include('front.about.partials.content')
    </section>
    {{-- <section>
        @include('front.home.partials.income')
    </section>
    <section>
        @include('front.home.partials.executive')
    </section>
    <section class="mt-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="text-center">
            <h6 class="section-title bg-white text-center px-3">Activities</h6>
            <h1 class="text-primary">Our Activities</h1>
        </div>
        @include('front.gallery.partials.content')
    </section>
    <section>
        <div class="my-5">
            <div class="container">
                <div class="row g-4 d-flex justify-content-center">
                    <div class="text-center">
                        <h6 class="section-title bg-white text-center px-3">Achievements</h6>
                        <h1 class="text-primary">Our Achievements</h1>
                    </div>
                    @php
                        $previousCategory = null;
                    @endphp
        
                    @foreach ($achievementPhotos as $photo) --}}
                        {{-- @if ($previousCategory != $photo->photoCategory->name)
                            <div class="col-12">
                                <h2 class="photo-gallery-heading pt_30">{{ $photo->photoCategory->name }}</h2>
                            </div>
                            @php
                                $previousCategory = $photo->photoCategory->name;
                            @endphp
                        @endif --}}
        
                        {{-- <div class="col-md-4">
                            <div class="photo-gallery-item mb_25">
                                <div class="photo-gallery-item-bg"></div>
                                <a href="{{ asset('uploads/'.$photo->photo) }}" class="magnific" title="{{ $photo->photoCategory->name }}">
                                    <img src="{{ asset('uploads/'.$photo->photo) }}" class="img-fluid" style="object-fit: contain; width: 100%; height: 25vh;">
                                    <div class="plus-icon"><i class="fas fa-search-plus"></i></div>
                                </a>
                            </div>
                        </div>
                    @endforeach
        
                </div>
            </div>
        </div>
    </section>
    <section>
        @include('front.home.partials.service')
    </section>
    <section>
        @include('front.home.partials.executive')
    </section>
    <section>
        @include('front.about.partials.counter')
    </section>
    <section class="mb-5">
        @include('front.home.partials.feature')
    </section> --}}
@endsection
