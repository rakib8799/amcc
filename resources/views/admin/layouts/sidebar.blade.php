<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ route('admin.dashboard') }}">Admin Panel</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{ route('admin.dashboard') }}"></a>
        </div>

        <ul class="sidebar-menu">
            <li class="{{ Request::is('admin/dashboard') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin.dashboard') }}"><i class="fas fa-tachometer-fast"></i> <span>Dashboard</span></a></li>

            <li class="{{ Request::is('admin/settings*') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin.settings.index') }}"><i class="fas fa-cogs"></i> <span>Settings</span></a></li>

            <li class="{{ Request::is('admin/sliders*') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin.sliders.index') }}"><i class="fas fa-sliders"></i> <span>Sliders</span></a></li>

            <li class="nav-item dropdown {{ Request::is('admin/abouts*') ? 'active' : '' }}">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-info-circle"></i><span>Abouts</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ Request::is('admin/abouts/about-category') || Request::is('admin/abouts/about-category/*') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin.about-category.index') }}"><i class="fas fa-angle-right"></i> Category</a></li>
                    <li class="{{ Request::is('admin/abouts/about') || Request::is('admin/abouts/about/*') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin.about.index') }}"><i class="fas fa-angle-right"></i> About</a></li>
                </ul>
            </li>

            <li class="{{ Request::is('admin/facilities*') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin.facilities.index') }}"><i class="fas fa-concierge-bell"></i> <span>Services</span></a></li>

            <li class="{{ Request::is('admin/appeals*') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin.appeals.index') }}"><i class="fas fa-tasks"></i> <span>Activities</span></a></li>

            <li class="{{ Request::is('admin/users*') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin.users.index') }}"><i class="fas fa-user"></i> <span>Users</span></a></li>

            <li class="nav-item dropdown {{ Request::is('admin/gallery/photos*') ? 'active' : '' }}">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-images"></i><span>Photo Gallery</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ Request::is('admin/gallery/photos/photo-category') || Request::is('admin/gallery/photos/photo-category/*') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin.gallery.photo-category.index') }}"><i class="fas fa-angle-right"></i> Category</a></li>
                    <li class="{{ Request::is('admin/gallery/photos/photo') || Request::is('admin/gallery/photos/photo/*') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin.gallery.photo.index') }}"><i class="fas fa-angle-right"></i> Photo</a></li>
                </ul>
            </li>

            <li class="nav-item dropdown {{ Request::is('admin/gallery/videos*') ? 'active' : '' }}">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-film"></i><span>Video Gallery</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ Request::is('admin/gallery/videos/video-category') || Request::is('admin/gallery/videos/video-category/*') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin.gallery.video-category.index') }}"><i class="fas fa-angle-right"></i> Category</a></li>
                    <li class="{{ Request::is('admin/gallery/videos/video') || Request::is('admin/gallery/videos/video/*') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin.gallery.video.index') }}"><i class="fas fa-angle-right"></i> Video</a></li>
                </ul>
            </li>
        </ul>
    </aside>
</div>
