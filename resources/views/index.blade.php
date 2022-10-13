@extends('layouts.master')

@section('title', 'Home')

@section('cover')
<img src="{{ asset('/img/brand-logo.svg') }}" class="img-fluid">
@endsection

@section('content')
{{-- brief introduction of restaurant --}}
<div class="container min-vh-100 py-5">
    <div class="row">
        <div class="col-md-7 col-sm-12 pb-3">
            <h1 class="display-4 text-center border-top border-bottom py-3 mb-5">ATOZ Restaurant</h1>
            <p class="lead text-justify">ATOZ or you can say "from A to Z" provides your needs from your physical body to your mind health. ATOZ offers comfort for you and your loved ones to eat in peaceful yet cheerful atmosphere.</p>
            <p class="">Location: <strong>1234 Nowhere Street, Unlocated City, Unknown</strong></p>
            <p class="">Open hour: <strong>Everyday from 10 a.m. to 10 p.m.</strong></p>
        </div>
        <div class="col-md-5 col-sm-12">
            <img src="https://source.unsplash.com/uB7q7aipU2o/510x650" class="img-fluid">
        </div>
    </div>
</div>

{{-- brief introduction of food --}}
<div class="container min-vh-100 py-5">
    <div class="row">
        <div class="col-md-5 col-sm-12">
            <img src="https://source.unsplash.com/u2Lp8tXIcjw/510x650" class="img-fluid">
        </div>
        <div class="col-md-7 col-sm-12">
            <h1 class="display-4 text-center border-top border-bottom py-3 mb-5">Food of Life</h1>
            <p class="lead">We serve both traditional and modern food to your liking. As the time passes and life goes by, more will be added...</p>
            <div class="btn-group mt-2 mb-1">
                <a href="{{ route('products') }}" type="button" class="btn btn-outline-light">View menu</a>
            </div>
        </div>
    </div>
</div>

{{-- chefs --}}
<div class="container min-vh-100 py-5">
    <div class="row">
        <div class="col-12">
            <h1 class="display-4 text-center border-top border-bottom py-3 mb-5">Our Reliable Staffs</h1>
        </div>
        <div class="album">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-3 flex justify-content-center">
                @forelse ($cards as $key => $card)
                    <div class="col mb-3">
                        <div class="card bg-dutchwhite shadow-sm">
                            <img src="{{ $card['url'] }}" class="card-img-top" alt="{{ $card['text'] }}'s' photo">
                            <div class="card-body">
                                <h5 class="card-title color-bistre">{{ $card['title'] }}</h5>
                                <p class="card-text color-bistre">{{ $card['text'] }}</p>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col mb-3">
                        <div class="card bg-dutchwhite">
                            <img src="https://source.unsplash.com/dLij9K4ObYY/100px180" class="card-img-top" alt="Nobody's photo">
                            <div class="card-body">
                                <h5 class="card-title color-bistre">Nobody E.</h5>
                                <p class="card-text color-bistre">An unknown entity that opperates in the background</p>
                            </div>
                        </div>
                    </div>
                @endforelse
            </div>
        </div>
    </div>
</div>
@endsection
