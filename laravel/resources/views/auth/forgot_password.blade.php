@extends('auth.master_auth')

@section('content')
    <main class="form-signin">
        <form action="{{ route('password.email') }}" method="post">
            @csrf
            {{--        <img class="mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">--}}

            <h1 class="h3 mb-3 fw-normal">Forgot Password</h1>

            <div class="form-floating">
                <input type="email" class="form-control" id="floatingInput" name="email" value="{{ old('email') }}" >
                <label for="floatingInput">Email address</label>
                @include('partials_global.info')
            </div>

            <a href="{{ route('login') }}">Login</a>
            <button class="w-100 btn btn-lg btn-primary" type="submit">Send Reset Link</button>
        </form>
    </main>
@endsection
