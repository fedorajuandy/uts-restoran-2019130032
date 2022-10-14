@extends('layouts.master')

@section('title', 'Testimonials')

@section('cover')
<h1 class="display-4 color-dutchwhite">Testimonials</h1>
@endsection

@section('content')
{{-- testimonies --}}
<div class="container min-vh-100 py-5">
    <div class="card-columns">
        @forelse ($cards as $key => $card)
            <div class="card p-3 bg-{{ $card['color'] }}">
                <blockquote class="blockquote mb-0 card-body">
                    <p class="color-{{ $card['color'] == 'richblack' ? 'white' : ($card['color'] == 'cinereous' ? 'dutchwhite' : 'bistre') }}">{{ $card['words'] }}</p>
                    <footer class="blockquote-footer">
                        <small class="color-{{ $card['color'] == 'richblack' ? 'white' : ($card['color'] == 'cinereous' ? 'dutchwhite' : 'bistre') }}">{{ $card['name'] }}</small>
                    </footer>
                </blockquote>
            </div>
        @empty
            <div class="card p-3 bg-dutchwhite">
                <blockquote class="blockquote mb-0 card-body">
                    <p class="color-bistre">No one has made their opinion known yet :(</p>
                    <footer class="blockquote-footer">
                        <small class="text-muted">Nobody</small>
                    </footer>
                </blockquote>
            </div>
        @endforelse
    </div>
</div>
@endsection
