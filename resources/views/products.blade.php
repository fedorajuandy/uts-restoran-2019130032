@extends('layouts.master')

@section('title', 'Menu')

@section('content')
<h1 class="cover-heading">Hello!</h1>
{{-- cover --}}
<div class="container-fluid min-vh-100 d-flex align-items-center py-3">
    <div id="carouselGallery" class="carousel carousel-dark slide" data-ride="carousel">
        <div class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active" data-interval="10000">
                <img src="/img/latest_works.png" class="d-block w-100 img-fluid" alt="latest_work1">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Place is nice</h5>
                </div>
            </div>
            <div class="carousel-item" data-interval="2000">
                <img src="/img/latest_works.png" class="d-block w-100 img-fluid" alt="latest_work2">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Food is great</h5>
                </div>
            </div>
            <div class="carousel-item">
                <img src="/img/latest_works.png" class="d-block w-100 img-fluid" alt="latest_work3">
                <div class="carousel-caption d-none d-md-block">
                    <div class="text-bg-dark">
                        <h5>No, they are not free</h5>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-target="#carouselGallery" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-target="#carouselGallery" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </button>
    </div>
</div>

{{-- top pick --}}

{{-- idk, will think of it --}}

@endsection
