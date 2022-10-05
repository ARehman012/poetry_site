@extends('master')
@section('title')
Poetry With Waqas Butt
@endsection
@section('main_content')
    {{-- Header carousel --}}
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('assets/images/slide1.jpg') }}" class="d-block w-100" alt="image_slide_1">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('assets/images/slide2.png') }}" class="d-block w-100" alt="image_slide_2">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('assets/images/slide3.jpg') }}" class="d-block w-100" alt="image_slide_3">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    {{-- images start  --}}
    <div class="container">
        <h3 class="mt-5 text-center">Poetry With Waqas Butt</h3>
        <div class="row mb-5">
            @foreach ($users as $user)
                <div class="col-lg-4 col-md-6 col-sm-12 mt-3">
                    <div class="card">
                        <img src="images/{{ $user->imageSrc }}" class="card-img-top" alt="image" style="height: 190px;">
                        <div class="card-body">
                            <p class="card-text">{{ $user->imageCaption }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
