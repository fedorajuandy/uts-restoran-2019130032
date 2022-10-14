@extends('layouts.master')

@section('title', 'About')

@section('cover')
<h1 class="display-4 color-dutchwhite">About</h1>
@endsection

@section('content')
{{-- vision, mision --}}
<div class="container-fluid min-vh-100 d-flex align-items-center bg-image">
    <div class="container">
        <div class="row">
            @forelse ($goals as $key => $goal)
                <div class="col-md-6 col-sm-12">
                    <div class="card bg-dutchwhite color-bistre shadow-sm">
                        <div class="card-header text-center">
                            <h1 class="display-5 mb-0">{{ $goal['title'] }}</h1>
                        </div>
                        <div class="card-body">
                            <ul>
                                <li><p class="card-text mb-3">{{ $goal['li1'] }}</p></li>
                                <li><p class="card-text mb-3">{{ $goal['li2'] }}</p></li>
                                <li><p class="card-text mb-3">{{ $goal['li3'] }}</p></li>
                            </ul>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12">
                    <div class="card bg-cinereous shadow-sm">
                        <div class="card-header text-center">
                            <h1 class="display-5 mb-0">Goals</h1>
                        </div>
                        <div class="card-body">
                            <ul>
                                <li><p class="card-text mb-5">Nothing</p></li>
                            </ul>
                        </div>
                    </div>
                </div>
            @endforelse
        </div>
    </div>
</div>

{{-- brief history --}}
<div class="container min-vh-100 py-5">
    <div class="row">
        <div class="col-md-5 col-sm-12">
            <img src="https://source.unsplash.com/u2Lp8tXIcjw/510x650" class="img-fluid">
        </div>
        <div class="col-md-7 col-sm-12 color-white">
            <h1 class="display-4 text-center border-top border-bottom py-3 mb-5">History</h1>
            <p class="lead">ATOZ was built on 1999 when Edward, Steph, and Anna decided it was good to make their (impulse) dream came true.</p>
        </div>
    </div>
</div>

{{-- feels --}}
<div class="container min-vh-100 py-5">
    <div class="row">
        <div class="col-md-7 col-sm-12 pb-3 color-white">
            <h1 class="display-4 text-center border-top border-bottom py-3 mb-5">Feels</h1>
            <p class="lead text-justify">This place has a friendly atmosphere where working is best when everyone gets along with each other.</p>
        </div>
        <div class="col-md-5 col-sm-12">
            <img src="https://source.unsplash.com/Y5bvRlcCx8k/510x650" class="img-fluid">
        </div>
    </div>
</div>

{{-- contact information --}}
<div class="container-fluid min-vh-100 d-flex align-items-center py-3" id="contact">
    <div class="container">
        <div class="card bg-dutchwhite shadow-sm">
            <div class="card-header text-center">
                <h1 class="display-5 mb-0">Contact Us</h1>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        @forelse ($cardcontents as $key => $cardcontent)
                            <div class="col-12">
                                <h5 class="card-title">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi {{ $cardcontent['path'] }} pr-1" viewBox="0 0 16 16">
                                        <path d="{{ $cardcontent['path'] }}"/>
                                    </svg>
                                    {{ $cardcontent['title'] }}
                                </h5>
                                <p class="card-text mb-5">{{ $cardcontent['text'] }}</p>
                            </div>
                        @empty
                            <div class="col-12">
                                <h5 class="card-title">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi smiley pr-1" viewBox="0 0 16 16">
                                        <path d="smiley"/>
                                    </svg>
                                    Ooops...
                                </h5>
                                <p class="card-text mb-3">Something went wrong...</p>
                            </div>
                        @endforelse
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <form class="needs-validation" novalidate="">
                            <div class="col-12">
                                <label for="email" class="form-label ps-0">Email</label>
                                <input type="email" class="form-control" id="email" placeholder="name@example.com" required>
                                <div class="invalid-feedback">
                                    Please enter a valid email.
                                </div>
                            </div>
                            <div class="col-12 pt-3">
                                <label for="message" class="form-label ps-0">Message</label>
                                <textarea class="form-control" id="message" rows="3" placeholder="What do you want to talk about?" required></textarea>
                                <div class="invalid-feedback">
                                    Please enter a message, we cannot read mind :(
                                </div>
                            </div>
                            <div class="col-12 pt-3">
                                <button type="submit" class="btn btn-outline-dark ">Send</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
