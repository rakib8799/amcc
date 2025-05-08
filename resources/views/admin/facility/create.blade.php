@extends('admin.layouts.app')

@section('main_content')
<div class="main-content">
    <section class="section">
        <div class="section-header d-flex justify-content-between">
            <h1>{{ isset($facility) ? 'Edit' : 'Create' }} Service</h1>
            <div>
                <a href="{{ route('admin.facilities.index') }}" class="btn btn-primary"><i class="fas fa-plus"></i> View All</a>
            </div>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ isset($facility) ? route('admin.facilities.update', $facility->id) : route('admin.facilities.store') }}" method="post">
                                @csrf
                                @isset($facility)
                                    @method('put')
                                @endisset
                                <div class="form-group mb-3">
                                    <label for="icon">Icon <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="icon" id="icon" placeholder="Please enter icon" value="{{ isset($facility) ? $facility->icon : old('icon') }}">

                                    @if ($errors->has('icon'))
                                        <span class="text-danger">{{ $errors->first('icon') }}</span>
                                    @endif
                                </div>
                                <div class="form-group mb-3">
                                    <label for="heading">Heading <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="heading" id="heading" placeholder="Please enter heading" value="{{ isset($facility) ? $facility->heading : old('heading') }}">

                                    @if ($errors->has('heading'))
                                        <span class="text-danger">{{ $errors->first('heading') }}</span>
                                    @endif
                                </div>
                                <div class="form-group mb-3">
                                    <label for="short_description">Short description <span class="text-danger">*</span></label>
                                    <textarea name="short_description" id="short_description" placeholder="Please enter short description" class="form-control h_100" cols="30" rows="10">{{ isset($facility) ? $facility->short_description : old('short_description') }}</textarea>

                                    @if ($errors->has('short_description'))
                                        <span class="text-danger">{{ $errors->first('short_description') }}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">{{ isset($facility) ? 'Update' : 'Submit' }}</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection