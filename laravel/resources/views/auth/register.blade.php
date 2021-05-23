@extends('board.master_board')
@section('content')

<div class="container">
    <main>
        <div class="py-3 text-center">
            <h2>Please Register</h2>
            <p class="lead">I don't know there will be information</p>
        </div>

        <hr class="my-4">
        <div class="col-lg-12">
            <form class="needs-validation" action="{{ route('register') }}" method="post">
                @csrf
                <div class="row g-3">
                    <div class="col-sm-6">
                        <label for="firstName" class="form-label">First name</label>
                        <input type="text" class="form-control" id="firstName" name="firstName" value="{{ old('firstName') }}">
                        @error('firstName')
                        <div class="alert-danger"> {{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-sm-6">
                        <label for="lastName" class="form-label">Last name</label>
                        <input type="text" class="form-control" id="lastName" name="lastName" value="{{old('lastName')}}" >
                        @error('lastName')
                        <div class="alert-danger"> {{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-12">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username" name="username" value="{{old('username')}}" placeholder="Username" >
                        @error('username')
                        <div class="alert-danger"> {{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-12">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" value="{{old('email')}}" placeholder="you@example.com">
                        @error('email')
                        <div class="alert-danger"> {{ $message }}</div>
                        @enderror
                    </div>


                    <div class="col-sm-6">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password">
                        @error('password')
                        <div class="alert-danger"> {{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-sm-6">
                        <label for="password_confirmation" class="form-label">Confirm Password:</label>
                        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
                        @error('password_confirmation')
                        <div class="alert-danger"> {{ $message }}</div>
                        @enderror
                    </div>


                    <div class="col-12">
                        <label for="Phone number" class="form-label">Phone number</label>
                        <input type="text" class="form-control" id="Phone number" name="phoneNumber" value="{{old('phoneNumber')}}" placeholder="+9989" >
                        @error('phoneNumber')
                        <div class="alert-danger"> {{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-sm-6">
                        <label for="birthdate" class="form-label">Date of Birth </label>
                        <input type="text" class="form-control" id="birthdate" name="birthdate" value="{{old('birthdate')}}" placeholder="||-||-||||">
                        <small class="text-muted">Example: 09-09-1999</small>
                        @error('birthdate')
                        <div class="alert-danger"> {{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-sm-6">
                        <label for="passport" class="form-label">Passport Number</label>
                        <input type="text" class="form-control" id="passport" name="passport" value="{{old('passport')}}" placeholder="" >
                        <small class="text-muted">Example: AA1234567</small>
                        @error('passport')
                        <div class="alert-danger"> {{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-sm-6">
                        <label for="City" class="form-label">City</label>
                        <input type="text" class="form-control" id="City" name="city" value="{{old('city')}}" placeholder="Tashkent?">
                        @error('city')
                        <div class="alert-danger"> {{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-sm-6">
                        <label for="postal code" class="form-label">Postal Code</label>
                        <input type="text" class="form-control" id="postal code" name="postalCode" value="{{old('postalCode')}}" placeholder="">
                        @error('postalCode')
                        <div class="alert-danger"> {{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <hr class="my-4">
                <a href="{{ route('login') }}">Login</a>
                <button class="w-100 btn btn-primary btn-lg" type="submit">Register</button>
            </form>
        </div>
    </main>
</div>
@endsection
