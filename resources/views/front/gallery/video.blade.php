@extends('front.layouts.app')

@section('main_content')
<div class="page-top" style="background-image: url({{ asset('public/uploads/slider_photo-1729186032.jpg') }})">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Video Gallery</h2>
                <div class="breadcrumb-container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item active">Gallery</li>
                        <li class="breadcrumb-item active">Video</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="my-5">
    <div class="container">
        <div class="row g-4 d-flex justify-content-center">
            @php
                $groupedVideos = $videos->groupBy('videoCategory.name');
            @endphp

            @foreach ($groupedVideos as $categoryName => $videosInCategory)
            @php
                        $categoryLocation = $videosInCategory->first()->videoCategory->location ?? 'Location not specified';
                        $categoryDate = $videosInCategory->first()->videoCategory->date ?? 'Date not specified';
                    @endphp
                <div class="col-12 bg-primary text-white py-4 text-center">
                        <h2 class="display-5 fw-bolder wow fadeInUp text-center" data-wow-delay="0.1s">{{ $categoryName }}</h2>
                        <div class="row d-flex justify-content-center align-items-center wow fadeInUp text-center" data-wow-delay="0.1s">
                            <p class="text-white fs-5 col-12">
                                <i class="fas fa-map-marker-alt"></i> {{ $categoryLocation }}
                            </p>
                            <p class="text-white fs-5 col-12 wow fadeInUp text-center" data-wow-delay="0.1s">
                                <i class="fas fa-calendar-alt"></i> {{ $categoryDate }}
                            </p>
                        </div>
                            @if (!Route::is('gallery.video'))
                        <div class="d-flex align-items-center justify-content-center text-center pb-3 wow fadeInUp text-center" data-wow-delay="0.1s">
        <a href="{{ route('gallery.video') }}" class="donate btn-donate {{ Route::is('gallery.*') ? 'active' : '' }} fs-6">View in Gallery</a>
                        </div>
    @endif
                    </div>

                @foreach ($videosInCategory as $video)
                    <div class="col-md-3">
                        <div class="video-gallery-item mb-25">
                            <div class="responsive-video">
                                <iframe 
                                    class="i1" 
                                    src="https://www.facebook.com/plugins/video.php?href=https://www.facebook.com/video.php?v={{ $video->video_id }}" 
                                    frameborder="0" 
                                    allow="autoplay; clipboard-write; encrypted-media; picture-in-picture" 
                                    allowfullscreen>
                                </iframe>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endforeach
        </div>
    </div>
</div>

@endsection
