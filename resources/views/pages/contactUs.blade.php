@extends('layouts/app')

@section('application_layout')


<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card mx-auto my-5" style="width: 32rem;">
                <div class="card-body">
                    <h2 class="display-4  mb-2">Contact Us</h2>
                    {{-- Contact Us--}}
                    <form method="post" action="{{route('contactUs')}}">
                      @csrf

                        <div class="form-group py-2">
                            <label for="fullName">Full Name</label>
                            <input type="text" class="form-control" id="name" name="name"
                              placeholder="Full Name" value="{{old('name')}}">

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
                            <label for="Country">Country</label>
                            <input type="text" class="form-control" id="country" name="country"
                                placeholder="Country Name"  value="{{old('country')}}">
                                @error('country')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                        </div>
                        <div class="form-group py-2">
                          <label for="confirmPassword">Company</label>
                          <input type="text" class="form-control" id="company" name="company"
                              placeholder="Company Detail"  value="{{old('company')}}">
                              @error('company')
                              <span class="text-danger">{{ $message }}</span>
                              @enderror
                      </div>

                        <button type="submit" class="btn btn-primary">Submit</button>

                </div>
            </div>
        </div>
    </div>
</div>



@endsection