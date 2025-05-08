@isset($facilities)    
<div class="mt-5 pt-5">
    <div class="container">
        <div class="row g-4">
            <div class="text-center">
                <h2 class="text-primary display-5 fw-bolder wow fadeInUp" data-wow-delay="0.1s">Supporting the Community</h2>
            </div>
            @foreach ($facilities as $facility)                
                <div class="col-md-3 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item shadow p-4 d-flex justify-content-center align-items-center text-center" style="height: 40vh;">
                        <div class="text">
                            <i class="{{ $facility->icon }} display-3 mb-3 text-primary"></i>
                            <h4 style="min-height: 5vh;" class="mb-2">{{ $facility->heading }}</h4>
                            <div style="min-height: 10vh;">
                                {!! $facility->short_description !!}
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endisset
