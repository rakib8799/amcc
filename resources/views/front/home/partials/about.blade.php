@isset($about)    
<div class="mt-5 pt-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="full-section">
                    @isset($about->photo)
                    <div class="row d-flex align-items-center g-5 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                            <img src="{{ asset('public/uploads/'.$about->photo) }}" alt="About image" class="img-fluid" style="object-fit: contain;">
                        </div>
                        <div class="col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="inner">
                                <h3>About Us</h3>
                                <h2 class="text-primary">{{ $about->heading }}</h2>
                                @php
                                    $maxLength = 500;
                                    $text = $about->text;
                                @endphp
                                @if(strlen($text) > $maxLength) 
                                    <p>
                                        {!! substr($text, 0, $maxLength) . '...' !!}
                                    </p>
                                    @else
                                    <p>{!! $about->text !!}</p>
                                @endif
                                <div class="mt-4 wow fadeInUp" data-wow-delay="0.1s">
                                    <a href="{{ route('about.us') }}" class="btn-style">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endisset
                </div>
            </div>
        </div>
    </div>
</div>
@endisset
