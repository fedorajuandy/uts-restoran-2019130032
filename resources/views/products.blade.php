@extends('layouts.master')

@section('title', 'Menus')

@section('cover')
<h1 class="display-1 color-dutchwhite">Menus</h1>
@endsection

@section('content')
{{-- top picks --}}
<div class="container min-vh-100 py-5">
    <h1 class="display-4 text-center border-top border-bottom py-3 mb-5">Top Picks of the Month</h1>
    <div id="carouselTopPicks" class="carousel carousel-dark slide" data-ride="carousel">
        <div class="carousel-indicators">
            @forelse ($carousels as $key => $carousel)
                <li data-target="#carouselIndicators" data-slide-to="{{ $key }}" class="{{ $key==0? 'active':'' }}"></li>
            @empty
                <li data-target="#carouselIndicators" data-slide-to="0" class="active">
            @endforelse
        </div>
        <div class="carousel-inner">
            @forelse ($carousels as $key => $carousel)
                <div class="carousel-item {{ $key==0? 'active':'' }}" data-interval="5000">
                    <img src="{{ $carousel['url'] }}" class="d-block w-100 img-fluid" alt="top pick image">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>{{ $carousel['title'] }}</h5>
                        <p>{{ $carousel['name'] }}</p>
                    </div>
                </div>
            @empty
                <div class="carousel-item active">
                    <img src="https://source.unsplash.com/fnztlIb52gU" alt="empty plate image" class="d-block w-100 img-fluid">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Nothing's here</h5>
                    </div>
                </div>
            @endforelse
        </div>
        <a class="carousel-control-prev" role="button" href="#carouselTopPicks" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" role="button" href="#carouselTopPicks" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>

{{-- menus --}}
<div class="container min-vh-100 d-flex align-items-center py-5">

</div>
@endsection
