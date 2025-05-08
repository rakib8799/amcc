<div class="page-top" style="background-image: url({{ isset($globalBanner->about_who) ? asset('public/uploads/'.$globalBanner->about_who) : asset('public/uploads/'.$globalSettings->banner) }})">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>About</h2>
                <div class="breadcrumb-container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item active">About</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>
