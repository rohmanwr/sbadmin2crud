@extends('layouts.app')
@section('content')
<div class="row justify-content-center">
    <div class="col-lg-6">
        <div class="card shadow-lg my-5">
            <div class="card-body p-5">
                <h1 class="h4 text-center text-gray-900 mb-4">Register</h1>
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">@foreach ($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul>
                </div>
                @endif
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <input type="text" name="name" class="form-control mb-3" placeholder="Full Name" required>
                    <input type="email" name="email" class="form-control mb-3" placeholder="Email" required>
                    <input type="password" name="password" class="form-control mb-3" placeholder="Password" required>
                    <input type="password" name="password_confirmation" class="form-control mb-3" placeholder="Confirm Password" required>
                    <button type="submit" class="btn btn-primary btn-block">Register</button>
                </form>
                <div class="text-center mt-3">
                    <a href="{{ route('login') }}">Already have an account? Login!</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection