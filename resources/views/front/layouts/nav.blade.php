<!-- Navbar & Hero Start -->
<div class="container-fluid position-relative p-0">
    <nav class="navbar navbar-expand-lg navbar-light px-md-5 py-3 py-lg-0">
        <a href="{{ route('home') }}" class="navbar-brand p-0">
            <div class="d-flex align-items-center">
                <img src="{{ isset($globalSettings->logo_1) ? asset('public/uploads/'. $globalSettings->logo_1) : asset('public/uploads/logo-1.png') }}" alt="AMCC_logo" id="logo">
                <p class="ms-1 m-0 text-uppercase fw-bold fs-5 text-white company_name">{{ isset($globalSettings->seo_company_name) ? $globalSettings->seo_company_name : 'Australian Multicultural Community Centre' }}</p>
            </div>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="{{ route('home') }}" class="nav-item nav-link fw-bold {{ Route::is('home') ? 'active' : '' }} fs-6">Home</a>
                <a href="{{ route('about.us') }}" class="nav-item nav-link fw-bold {{ Route::is('about*') ? 'active' : '' }} fs-6">About</a>
                <a href="{{ route('contact.index') }}" class="nav-item nav-link fw-bold {{ Route::is('contact.index') ? 'active' : '' }} fs-6">Contact</a>
                <div class="nav-item dropdown position-relative">
                    <a href="#" id="galleryDropdown" class="nav-link dropdown-toggle fs-6">Gallery</a>
                    <ul class="dropdown-menu text-center">
                        <li><a href="{{ route('gallery.photo') }}" class="dropdown-item {{ Route::is('gallery.photo*') ? 'active' : '' }}">Photo</a></li>
                        <li><a href="{{ route('gallery.video') }}" class="dropdown-item {{ Route::is('gallery.video*') ? 'active' : '' }}">Video</a></li>
                    </ul>
                </div>


                <!--<div class="nav-item dropdown">-->
                <!--    <a href="#" class="nav-link dropdown-toggle {{ Route::is('gallery.*') ? 'active' : '' }} fs-6" data-bs-toggle="dropdown">Gallery</a>-->
                <!--    <div class="dropdown-menu m-0">-->
                <!--        <a href="{{ route('gallery.photo') }}" class="dropdown-item {{ Route::is('gallery.photo*') ? 'active' : '' }}">Photo</a>-->
                <!--        <a href="{{ route('gallery.video') }}" class="dropdown-item {{ Route::is('gallery.video*') ? 'active' : '' }}">Video</a>-->
                <!--    </div>-->
                <!--</div>-->
            </div>
            <div class="d-flex align-items-center justify-content-center text-center">
                <a href="{{ route('donate.index') }}" class="donate btn-donate {{ Route::is('donate*') ? 'active' : '' }} fs-6">Donate</a>
            </div>
        </div>
    </nav>
</div>
<!-- Navbar & Hero End -->


