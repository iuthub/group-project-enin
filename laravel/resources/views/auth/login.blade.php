@extends('auth.master_auth')

@section('content')
    <main class="form-signin">
        <form action="{{ route('login') }}" method="post">
            @csrf
            {{--        <img class="mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">--}}

            <h1 class="h3 mb-3 fw-normal">Please log in</h1>

            <div class="form-floating">
                <input type="email" class="form-control" id="floatingInput" name="email" value="{{ old('email') }}" >
                <label for="floatingInput">Email address</label>
                @error('email')
                <div class="alert-danger"> {{ $message }}</div>
                @enderror
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" name="password" value="{{ old('password') }}" >
                <label for="floatingPassword">Password</label>
                @error('password')
                <div class="alert-danger"> {{ $message }}</div>
                @enderror
            </div>
            <a href="{{ route('password.request') }}">Forgot password</a> &nbsp; &nbsp;
            <a href="{{ route('register') }}">Register</a>
            <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
        </form>
    </main>
@endsection
