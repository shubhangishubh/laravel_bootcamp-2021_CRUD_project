@extends('layouts/auth')

@section('auth_layout')

<div class="container">
    <div class="row">
        <div class="col-12 py-5">
            <div class="card mx-auto my-5" style="width: 32rem;">
                <div class="card-body">
                    <h2 class="display-4 mb-2">Login</h2>
                    {{-- Login Form --}}
                    <form method="post" action="{{route('login')}}">
                        @csrf
                        <div class="form-group py-2">
                            <label for="Email">Email address</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Enter email"
                                value="{{old('email')}}">
                            @error('email')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group py-2">
                            <label for="Password">Password</label>
                            <input type="password" class="form-control" id="password" name="password"
                                placeholder="Password" value="{{old('password')}}">
                            @error('Password')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group form-check py-2">
                            <input type="checkbox" class="form-check-input" id="rememberme" name="rememberme"
                                value="yes">
                            <label class="form-check-label" for="exampleCheck1">Remember me</label>
                        </div>
                        <button type="submit" class="btn btn-primary">Login</button>
                        <a href="{{route('register')}}" class="float-end">Create Account</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
