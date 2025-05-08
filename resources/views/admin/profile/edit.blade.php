@extends('admin.layouts.app')

@section('main_content')
<div class="main-content">
    <section class="section">
            <div class="section-header">
                <h1>Edit Profile</h1>
            </div>

            <div class="section-body">
                <div class="row">
                    @include('admin.profile.partials.update-profile-information-form')        
                    @include('admin.profile.partials.update-password-form')
                </div>
            </div>
    </section>
</div>
@endsection