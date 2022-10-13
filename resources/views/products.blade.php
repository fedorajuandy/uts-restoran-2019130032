@extends('layouts.master')

@section('title', 'Menus')

@section('cover')
<h1 class="display-1 color-dutchwhite">Menus</h1>
@endsection

@section('content')
{{-- top picks --}}
<div class="container min-vh-100 py-5">
    <h1 class="display-4 text-center mb-5">Top Picks of the Month</h1>
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
<div class="container min-vh-100 py-5">
    <h1 class="text-center display-4 mb-5">Menu list</h1>
    <ul class="nav justify-content-center nav-tabs mb-5" id="menuTab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="breakfast-tab" data-toggle="tab" href="#breakfast" role="tab" aria-controls="breakfast" aria-selected="true">Breakfast</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="meals-tab" data-toggle="tab" href="#meals" role="tab" aria-controls="meals" aria-selected="false">Dinner/Lunch</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="desserts-tab" data-toggle="tab" href="#desserts" role="tab" aria-controls="desserts" aria-selected="false">desserts</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="beverages-tab" data-toggle="tab" href="#beverages" role="tab" aria-controls="beverages" aria-selected="false">beverages</a>
        </li>
    </ul>

    <div class="album">
        <div class="tab-content" id="menuTabContent">
            <div class="tab-pane fade show active" id="breakfast" role="tabpanel" aria-labelledby="breakfast-tab">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-3">
                    @forelse ($breakfast as $key => $bf)
                        <div class="col mb-3">
                            <div class="card shadow-sm bg-dutchwhite">
                                <img src="{{ $bf['url'] }}" class="card-cover" alt="food/drink image">
                                <div class="card-body">
                                    <h5 class="card-title color-bistre"><?= $bf['name'] ?></h5>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <h4 class="card-text color-bistre">Rp{{ $bf['price'] }}.00</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="col">
                            <div class="card shadow-sm bg-dutchwhite">
                                <img src="https://source.unsplash.com/fnztlIb52gU" class="card-cover" alt="empty plage image">
                                <div class="card-body">
                                    <h5 class="card-title color-bistre">Nothing</h5>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <h4 class="card-text color-bistre">Rp0.00</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforelse
                </div>
            </div>
            <div class="tab-pane fade" id="meals" role="tabpanel" aria-labelledby="meals-tab">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-3">
                    @forelse ($meals as $key => $meal)
                        <div class="col mb-3">
                            <div class="card shadow-sm bg-dutchwhite">
                                <img src="{{ $meal['url'] }}" class="card-cover" alt="food/drink image">
                                <div class="card-body">
                                    <h5 class="card-title color-bistre"><?= $meal['name'] ?></h5>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <h4 class="card-text color-bistre">Rp{{ $meal['price'] }}.00</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="col">
                            <div class="card shadow-sm bg-dutchwhite">
                                <img src="https://source.unsplash.com/fnztlIb52gU" class="card-cover" alt="empty plage image">
                                <div class="card-body">
                                    <h5 class="card-title color-bistre">Nothing</h5>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <h4 class="card-text color-bistre">Rp0.00</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforelse
                </div>
            </div>
            <div class="tab-pane fade" id="desserts" role="tabpanel" aria-labelledby="breakfast-tab">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-3">
                    @forelse ($desserts as $key => $dessert)
                        <div class="col mb-3">
                            <div class="card shadow-sm bg-dutchwhite">
                                <img src="{{ $dessert['url'] }}" class="card-cover" alt="food/drink image">
                                <div class="card-body">
                                    <h5 class="card-title color-bistre"><?= $dessert['name'] ?></h5>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <h4 class="card-text color-bistre">Rp{{ $dessert['price'] }}.00</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="col">
                            <div class="card shadow-sm bg-dutchwhite">
                                <img src="https://source.unsplash.com/fnztlIb52gU" class="card-cover" alt="empty plage image">
                                <div class="card-body">
                                    <h5 class="card-title color-bistre">Nothing</h5>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <h4 class="card-text color-bistre">Rp0.00</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforelse
                </div>
            </div>
            <div class="tab-pane fade" id="beverages" role="tabpanel" aria-labelledby="beverages-tab">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-3">
                    @forelse ($beverages as $key => $beverage)
                        <div class="col mb-3">
                            <div class="card shadow-sm bg-dutchwhite">
                                <img src="{{ $beverage['url'] }}" class="card-cover" alt="food/drink image">
                                <div class="card-body">
                                    <h5 class="card-title color-bistre"><?= $beverage['name'] ?></h5>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <h4 class="card-text color-bistre">Rp{{ $beverage['price'] }}.00</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="col">
                            <div class="card shadow-sm bg-dutchwhite">
                                <img src="https://source.unsplash.com/fnztlIb52gU" class="card-cover" alt="empty plage image">
                                <div class="card-body">
                                    <h5 class="card-title color-bistre">Nothing</h5>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <h4 class="card-text color-bistre">Rp0.00</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
