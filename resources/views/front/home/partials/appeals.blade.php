@isset($appeals)                
<div class="blog mt-5 pt-5">
    <div class="container">
        <div class="row g-5 d-flex justify-content-center">
            <div class="text-center">
                {{-- <h5 class="section-title bg-white text-start pe-3">Appeals</h5> --}}
                <h2 class="text-primary display-5 fw-bolder wow fadeInUp" data-wow-delay="0.1s">Activities</h2>
            </div>
            @foreach ($appeals as $appeal)                
                <div class="col-md-3 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="item appeal-item" style="height: 48vh;">
                        <div class="photo mb-4">
                            <img src="{{ asset('public/uploads/'. $appeal->photo) }}" alt="appeal photo" class="img-fluid" style="object-fit: cover; width: 100%;  height: auto; aspect-ratio: 5 / 3;">
                        </div>
                        <div class="text">
                            <h5 class="text-primary">{!! $appeal->name !!}</h5>
                            <div style="min-height: 20vh;">
                                @php
                                    $maxLength = 500;
                                    $description = $appeal->description;
                                @endphp
                                @if(strlen($description) > $maxLength) 
                                    <div>
                                        {!! substr($description, 0, $maxLength) . '...' !!}
                                    </div>
                                    @else
                                    <div>{!! $appeal->description !!}</div>
                                @endif
                            </div>
                        </div>
                        {{-- <div class="mt-3">
                            <a href="{{ route('appeals.show', $appeal->slug) }}" class="btn-style">Read More</a>
                        </div> --}}
                    </div>
                </div>
            @endforeach

            {{-- <div class="text-center mt-4">
                <a href="{{ route('appeals.index') }}" class="btn-style" style="border-radius: 30px 30px;">
                    Other Appeals
                </a>
            </div> --}}
        </div>
    </div>
</div>
@endisset