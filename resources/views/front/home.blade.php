@extends('layouts.front')
@section('title', 'Home')

@section('content')

<section>
    <div class="container banner">
        <div class="row vh-100">
            <div class="col-md-6 d-flex align-items-center">
                <div class="content">
                    <p class="display-1">Home Banner</p>
                    <a href="/login" class="btn btn-primary btn-lg">Sign In</a>
                </div>
            </div>
            <div class="col-md-6 d-none d-md-block">
                <img src="/images/banner.png" alt="Banner" class="d-inline-block align-text-top">
            </div>
        </div>


    </div>
</section>
@endsection