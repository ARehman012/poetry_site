@extends('master')
@section('title')
    Add Image - Poetry With Waqas Butt
@endsection
<style>
    .form-control:focus {
        color: #495057;
        background-color: #fff;
        border-color: #80bdff;
        outline: 0;
        box-shadow: 0 0 0 0.1rem #665842 !important;
    }

    .form-control {
        line-height: 1 !important;
    }
</style>
@section('main_content')
    <h4 class="mt-5 text-center">Add Image</h4>
    <div class="row">
        <div class="col-lg-6 col-md-8 col-sm-10 mx-auto">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form method="POST" action="{{ route('save.image') }}" class="mb-5" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Choose Image</label>
                    <input type="file" class="form-control" placeholder="Chhose File" name="imageFile"
                        accept="image/*">
                    <small class="form-text text-muted">Please choose image files only.</small>
                </div>

                <div class="form-group">
                    <label>Image Caption</label>
                    <input type="text" class="form-control" placeholder="Enter Image Caption"
                        name="imageCaption">
                </div>
                <button type="submit" class="btn btn" style="background-color: #7F6E52; color: #fff">Upload Image</button>
            </form>
        </div>
    </div>
@endsection
