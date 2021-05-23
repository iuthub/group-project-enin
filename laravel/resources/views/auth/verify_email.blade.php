@extends('auth.master_auth')

@section('content')
    <main class="form-signin">
        <form action="{{ route('verification.send') }}" method="post">
            @csrf
            {{--        <img class="mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">--}}

            <h1 class="h3 mb-3 fw-normal">Verify Email</h1>
            <div class="alert-secondary"> You must verify your email now. Please, check your email.</div>
            @include('partials_global.info')
            <button class="w-100 btn btn-lg btn-primary" type="submit">Resend Email</button>
        </form>
    </main>
@endsection

