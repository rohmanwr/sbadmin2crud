@extends('layouts.app')
@section('content')
<div class="row justify-content-center">
    <div class="col-lg-5">
        <div class="card shadow-lg my-5">
            <div class="card-body p-5">
                <h1 class="h4 text-center text-gray-900 mb-4">Forgot Password</h1>
                @if (session('status'))
                <div class="alert alert-success">{{ session('status') }}</div>
                @endif
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">@foreach ($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul>
                </div>
                @endif
                <form method="POST" action="{{ route('password.email') }}">
                    @csrf
                    <input type="email" name="email" class="form-control mb-3" placeholder="Email" required>
                    <button type="submit" class="btn btn-primary btn-block">Reset Password</button>
                </form>
                <div class="text-center mt-3">
                    <a href="{{ route('login') }}">Back to Login</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection