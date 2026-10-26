@extends('layouts.admin')

@section('title', 'Studio | Login')
@section('app-class', 'app-full-height app-without-header')

@section('content')
<div class="login">
    <div class="login-content">
        <form action="{{ url('/admin') }}" method="POST" name="login_form">
            @csrf
            <h1 class="text-center">Sign In</h1>
            <div class="text-muted text-center mb-4">
                For your protection, please verify your identity.
            </div>
            <div class="mb-3">
                <label class="form-label">Email Address</label>
                <input type="text" class="form-control form-control-lg fs-15px" placeholder="username@address.com">
            </div>
            <div class="mb-3">
                <div class="d-flex">
                    <label class="form-label">Password</label>
                    <a href="#" class="ms-auto text-muted">Forgot password?</a>
                </div>
                <input type="password" class="form-control form-control-lg fs-15px" placeholder="Enter your password">
            </div>
            <div class="mb-3">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="customCheck1">
                    <label class="form-check-label fw-500" for="customCheck1">Remember me</label>
                </div>
            </div>
            <button type="submit" class="btn btn-theme btn-lg d-block w-100 fw-500 mb-3">Sign In</button>
        </form>
    </div>
</div>
@endsection
