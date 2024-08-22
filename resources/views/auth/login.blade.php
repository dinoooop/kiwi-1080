@extends('layouts.blank')
@section('title', 'Home')

@section('content')
<div class="bg-image">
    <div class="login-form">
        <form method="post" action="{{ route('login') }}">
            <h2 class="mb-4">LOGIN</h2>
            @csrf
            <p>No account? <a href="/register">Register</a></p>

            @error('error')
                <div class="alert alert-danger" role="alert">{{ $message }}</div>
            @enderror

            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="Enter your email" required>
            </div>
            
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="password" placeholder="Enter your password" required>
            </div>
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">SUBMIT</button>
            </div>
            <div class="my-3">
                <p>Back to <a href="/">Home</a></p>
            </div>


        </form>
    </div>
</div>
@endsection