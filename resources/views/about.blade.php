@extends('layouts.master')

@section('title', 'About')

@section('cover')
<h1 class="display-4 color-dutchwhite">About</h1>
@endsection

@section('content')
{{-- vision, mision --}}
<div class="container-fluid min-vh-100 py-5 d-flex align-items-center">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="display-5 text-center border-top border-bottom py-3 mb-5 color-white">Goals</h1>
            </div>
            @forelse ($goals as $key => $goal)
                <div class="col-md-6 col-sm-12 mb-3">
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
                <div class="col-12 mb-3">
                    <div class="card bg-dutchwhite color-bistre shadow-sm">
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
        <div class="col-md-5 col-sm-12 pb-3">
            <img src="https://source.unsplash.com/u2Lp8tXIcjw/510x650" class="img-fluid">
        </div>
        <div class="col-md-7 col-sm-12 pb-3 color-white">
            <h1 class="display-5 text-center border-top border-bottom py-3 mb-5">History</h1>
            <p class="lead">ATOZ was built on 1999 when Edward, Stephen, and Anna decided it was good to make their (impulse) dream came true. Starting from a small cafe-like restaurant, they started to build what is now known as a casual restaurant where people can eat in peace.</p>
            <p class="lead">ATOZ was firstly named in 2000. While going a year without any specific name but just mentioned the place's location, Anna thought that the place would be nice if they can provide more than simply food. Humans have more needs than physical only, so at first Edward mentioned comfort and happiness. Then soon the conversation strayed far from it and they found humans' have many needs. Rather than covering too much thing, they agreed to name the place "from A to Z" as ATOZ; can be seen as everything yet not everything since it is just A to Z.</p>
            <p class="lead">Years passed and now their business has succeeded as one of the most popular and sought place to eat in Unlocated City.</p>
        </div>
    </div>
</div>

{{-- teamwork --}}
<div class="container min-vh-100 py-5">
    <div class="row">
        <div class="col-md-7 col-sm-12 pb-3 color-white">
            <h1 class="display-5 text-center border-top border-bottom py-3 mb-5">Teamwork</h1>
            <p class="lead">This place has a friendly atmosphere where working is best when everyone gets along with each other. Founded by three close friends, the three of them intend to maintain both professionality and closeness among the staffs.</p>
        </div>
        <div class="col-md-5 col-sm-12 pb-3">
            <img src="https://source.unsplash.com/Y5bvRlcCx8k/510x650" class="img-fluid">
        </div>
    </div>
</div>

{{-- contact information --}}
<div class="container-fluid min-vh-100 d-flex align-items-center py-5">
    <div class="container">
        <div class="card bg-dutchwhite color-bistre shadow-sm">
            <div class="card-header text-center">
                <h1 class="display-5 mb-0">Contact Us</h1>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6 col-sm-12 mb-3">
                        @forelse ($cardcontents as $key => $cardcontent)
                            <div class="col-12 mb-4">
                                <h5 class="card-title">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi {{ $cardcontent['path'] }} pr-1" viewBox="0 0 16 16">
                                        <path d="{{ $cardcontent['path'] }}"/>
                                    </svg>
                                    {{ $cardcontent['title'] }}
                                </h5>
                                <p class="card-text">{{ $cardcontent['text'] }}</p>
                            </div>
                        @empty
                            <div class="col-12 mb-4">
                                <h5 class="card-title">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-emoji-frown" viewBox="0 0 16 16">
                                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                        <path d="M4.285 12.433a.5.5 0 0 0 .683-.183A3.498 3.498 0 0 1 8 10.5c1.295 0 2.426.703 3.032 1.75a.5.5 0 0 0 .866-.5A4.498 4.498 0 0 0 8 9.5a4.5 4.5 0 0 0-3.898 2.25.5.5 0 0 0 .183.683zM7 6.5C7 7.328 6.552 8 6 8s-1-.672-1-1.5S5.448 5 6 5s1 .672 1 1.5zm4 0c0 .828-.448 1.5-1 1.5s-1-.672-1-1.5S9.448 5 10 5s1 .672 1 1.5z"/>
                                    </svg>
                                    Ooops...
                                </h5>
                                <p class="card-text">Something went wrong.</p>
                            </div>
                        @endforelse
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <form class="needs-validation" novalidate="">
                            <div class="col-12 mb-3">
                                <label for="email" class="form-label ps-0">Email</label>
                                <input type="email" class="form-control" id="email" placeholder="name@example.com" required>
                                <div class="invalid-feedback">
                                    Please enter a valid email address.
                                </div>
                            </div>
                            <div class="col-12 mb-3">
                                <label for="message" class="form-label ps-0">Message</label>
                                <textarea class="form-control" id="message" rows="3" placeholder="What do you want to talk about?" required></textarea>
                                <div class="invalid-feedback">
                                    Please enter a message. We cannot read mind :(
                                </div>
                            </div>
                            <div class="col-12 mb-3">
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
