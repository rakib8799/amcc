<div class="slider">
    <div class="slide-carousel owl-carousel">
        @foreach($slider as $slide)
        <div class="item" style="background-image:url('{{ asset('public/uploads/'.$slide->photo) }}');">
            <div class="bg"></div>
            <div class="text">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="text-wrapper d-flex justify-content-center align-items-center text-center">
                                <div class="text-content">
                                    <h2 class="text-slider text-primary">{{ $slide->heading }}</h2>
                                    <span class="description-slider">
                                    {!! $slide->text !!}
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>