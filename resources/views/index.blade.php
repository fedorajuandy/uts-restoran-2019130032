@extends('layouts.master')

@section('title', 'Home')

@section('cover')
<div class="d-flex align-items-center justify-content-center">
    <img src="{{ asset('/img/brand-logo.png') }}">
</div>
@endsection

@section('content')
{{-- brief introduction of restaurant --}}
<div class="container min-vh-100 py-5">
    <div class="row">
        I NEED DILUC
    </div>
</div>

{{-- brief introduction of food --}}
<div class="container min-vh-100 py-5">
    <div class="row">
        I NEED KAEYA
    </div>
</div>
@endsection
