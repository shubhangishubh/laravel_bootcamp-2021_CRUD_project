@extends('layouts/auth')

@section('auth_layout')

<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card mx-auto my-5" style="width: 32rem;">
                <div class="card-body">
                 {{--   @if(Session::has('success'))
                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        {{Session::get('success')}}
                    </div>
                @elseif(Session::has('failed'))
                    <div class="alert alert-danger alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        {{Session::get('failed')}}
                    </div>
                @endif--}}
                    <h2 class="display-4  mb-2">Register</h2>
                    {{-- Register Form --}}
                    <form method="post" action="{{route('register')}}">
                      @csrf
                        <div class="form-group py-2">
                            <label for="fullName">Full Name</label>
                            <input type="text" class="form-control" id="fullName" name="fullName"
                              placeholder="Full Name" value="{{old('fullName')}}">

                                @error('name')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                        </div>
                        <div class="form-group py-2">
                          <label for="Email">Email address</label>
                          <input type="email" class="form-control" id="email" name="email"
                               placeholder="Enter email" value="{{old('email')}}">
                               @error('email')
                               <span class="text-danger">{{ $message }}</span>
                               @enderror

                      </div>
                      <div class="form-group py-2">
                        <label for="mobile">Mobile No.</label>
                        <input type="text" class="form-control" id="phone" name="phone"
                             placeholder="Enter mobile no." value="{{old('phone')}}">
                             @error('phone')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                    </div>
                        <div class="form-group py-2">
                            <label for="Password">Password</label>
                            <input type="password" class="form-control" id="password" name="password"
                                placeholder="Password">
                                @error('Password')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                        </div>
                        <div class="form-group py-2">
                          <label for="confirmPassword">Confirm Password</label>
                          <input type="password" class="form-control" id="confirmPassword" name="confirmPassword"
                              placeholder="Confirm Password">
                              @error('confirmPassword')
                              <span class="text-danger">{{ $message }}</span>
                              @enderror
                      </div>

                        <button type="submit" class="btn btn-primary">Register</button>
                        <a href="{{route('login')}}" class="float-end">Login to Account</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
