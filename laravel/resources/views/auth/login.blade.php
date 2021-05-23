
@section('content')
    @extends('board.master_board')

    <main class="form-signin">
        <style>
            *{
                font-family: 'Montserrat', sans-serif;
            }
.container{
    align-content: center;
    max-width: 600px;
    border-inline-width: 10px;
    -webkit-box-align: center;
    border-radius: 15px;
    align-items: center;
    margin: 0 0 10px;
    display: flex;
    position: relative;
    flex-direction: column;

}
        </style>
        <form action="{{ route('login') }}" method="post" style="margin-left: 250px; margin-top:100px">
            @csrf
<div class="container-fluid container border" style="margin-bottom: 300px">
            <h1 class="h3 mb-3 fw-normal text-center"></h1>
    <img class="" src="{{ asset('img/login_logo.png') }}" alt="enin" style="display: inline-block; margin-bottom: 10px  ">
            <div class="form-floating " style="margin-bottom: 15px; width: 200px">
                <input type="email" class="form-control" id="floatingInput" name="email" value="{{ old('email') }}" >
                <label for="floatingInput text-black-50">Email address</label>
                @error('email')
                <div class="alert-danger"> {{ $message }}</div>
                @enderror

            </div>
            <div class="form-floating" style="margin-bottom: 15px; width: 200px">
                <input type="password" class="form-control" id="floatingPassword" name="password" value="{{ old('password') }}" >
                <label class="text-black-50" for="floatingPassword">Password</label>
            </div>
            <button class="w-25 btn btn-lg btn-primary text-center" type="submit" style="margin-bottom: 15px; width: 200px">Login</button>
            <div>
                <hr>
            </div>
            <div>
                <p class="text-center " style="size: 10px; color:white ">
                    If you don't have an account, please push the Register button
                </p>
            </div>
            <button class="register btn btn-lg btn-secondary text-center"  type="button" style="" >
                <a href="{{ route('password.request') }}">Forgot password</a> &nbsp; &nbsp;
                <a href="{{ route('register') }}"style="color: white; text-decoration: none;">
                    Register
                </a>
            </button>
        </form>
        </div>
    </main>
@endsection
