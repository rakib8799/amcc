
    <div class="my-5">
        <div class="container">
            <div class="row g-4 d-flex justify-content-center">
                @php
                    $groupedPhotos = $photos->groupBy('photoCategory.name');
                @endphp

                @foreach ($groupedPhotos as $categoryName => $photosInCategory)
                    @php
                        $categoryLocation = $photosInCategory->first()->photoCategory->location ?? 'Location not specified';
                        $categoryDate = $photosInCategory->first()->photoCategory->date ?? 'Date not specified';
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
                            @if (!Route::is('gallery.photo'))
                        <div class="d-flex align-items-center justify-content-center text-center pb-3 wow fadeInUp text-center" data-wow-delay="0.1s">
        <a href="{{ route('gallery.photo') }}" class="donate btn-donate {{ Route::is('gallery.*') ? 'active' : '' }} fs-6">View in Gallery</a>
                        </div>
    @endif
                    </div>

                    @foreach ($photosInCategory as $photo)
                        <div class="col-md-3 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="photo-gallery-item mb_25">
                                <div class="photo-gallery-item-bg"></div>
                                <a href="{{ asset('public/uploads/'.$photo->photo) }}" class="magnific" title="{{ $categoryName }}">
                                    <img src="{{ asset('public/uploads/'.$photo->photo) }}">
                                    <div class="plus-icon"><i class="fas fa-search-plus"></i></div>
                                </a>
                            </div>
                        </div>
                    @endforeach
                @endforeach
            </div>
        </div>
    </div>
