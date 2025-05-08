@extends('front.layouts.app')

@section('main_content')
<div class="page-top" style="background-image: url({{ asset('public/uploads/slider_photo-1729186032.jpg') }})">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb-container">
                    <h2>Donate</h2>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item active">Donate</a></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="my-5 pb-5">
    <div class="container">
        <div class="row d-flex justify-content-center shadow p-4">
            <div class="col">
                <div>
                <h1 class="text-center text-primary fw-bolder mb-4">AMCC Bank Account Details</h1>
                <p><b>Name:</b> AMCC</p>
                <p><b>BSB:</b> 083-004</p>
                <p><b>Account:</b> 30-588-7511</p>
                <p><b>Branch:</b> Melton</p>
                <p><b>Bank Name:</b> NAB</p>
                <p>(Or)</p>
                <p><b>PayID:</b> amcc.vic@gmail.com</p>
                </div>
            </div>
        </div>
        
    </div>
        @include('front.home.partials.appeals')
</div>
@endsection
