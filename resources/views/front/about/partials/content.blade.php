<div class="my-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="full-section">
                    <div class="row g-4 d-flex align-items-center justify-content-center">
                        @foreach ($aboutSections as $aboutSection)
                            <div class="col-12 wow fadeInUp" data-wow-delay="0.1s">
                                @isset($aboutSection->heading)
                                <h1 class="section-title bg-white text-primary fw-bolder px-3">{{ $aboutSection->heading }}</h1>
                                @endisset
                                {!! $aboutSection->text !!}
                            </div>
                            @isset($aboutSection->photo)
                            <div class="col-12 wow fadeInUp mb-4" data-wow-delay="0.1s">
                                <img src="{{ asset('public/uploads/'.$aboutSection->photo) }}" alt="about image" class="img-fluid" style="object-fit: cover; width: 100%; min-height: 30vh;">
                            </div>
                            @endisset
                        @endforeach
                        <section>
                            <!--@include('front.home.partials.service')-->
                            <div>
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
                        </section>
                        <div class="col-12 wow fadeInUp" data-wow-delay="0.1s">
                            <p class="fw-bold">Get Involved</p>
                            <p>Whether you’re interested in attending a festival, volunteering, or participating in our programs, we’d love to have you with us. At <strong>AMCC</strong>, there’s always an opportunity to connect and contribute to the community. Together, we can continue building a welcoming and vibrant future for all.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>