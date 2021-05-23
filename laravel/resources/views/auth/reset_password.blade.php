@extends('auth.master_auth')

@section('content')
    <main class="form-signin">
        <form action="{{ route('password.update') }}" method="post">
            @include('partials_global.info')
            @csrf
            {{--        <img class="mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">--}}

            <h1 class="h3 mb-3 fw-normal">Update Password</h1>
            <input type="hidden" name="token" value="{{ $request->route('token') }}">

            <div class="form-floating">
                <input type="email" class="form-control" id="floatingInput" name="email" value="{{ $request->email }}" >
                <label for="floatingInput">Email address</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" name="password" >
                <label for="floatingPassword">Password</label>
                @error('password')
                <div class="alert-danger"> {{ $message }}</div>
                @enderror
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="floatingPasswordConfirmation" name="password_confirmation" >
                <label for="floatingPasswordConfirmation">Password Confirmation</label>
                @error('password_confirmation')
                <div class="alert-danger"> {{ $message }}</div>
                @enderror
            </div>
            <a href="{{ route('login') }}">Login</a>
            <button class="w-100 btn btn-lg btn-primary" type="submit">Update</button>

        </form>
    </main>
@endsection
