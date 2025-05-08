@extends('front.layouts.app')

@section('main_content')
    <section>
        @include('front.gallery.partials.topbar')
    </section>

    <section>
        @include('front.gallery.partials.content')
    </section>
@endsection
