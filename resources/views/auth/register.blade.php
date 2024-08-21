@extends('layouts.blank')
@section('title', 'Home')

@section('content')
<div class="bg-image">
    <div class="login-form">

        <form method="post" action="{{ route('register') }}">
            <h2 class="mb-4">SIGN UP</h2>
            <div class="my-3">Already have an account? <a href="/login">Login</a></div>

            @csrf

            @foreach (['email', 'password'] as $field)
            @error($field)
            <div class="alert alert-danger" role="alert">{{ $message }}</div>
            @break
            @enderror
            @endforeach


            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" class="form-control" id="name" placeholder="Enter your name" required>
            </div>
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
            <div class="my-3"><a href="/forgot-password">Forgot your password?</a></div>
            <div class="my-3">Back to <a href="/">Home</a> </div>
        </form>
    </div>
</div>
@endsection