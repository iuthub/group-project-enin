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
        <form action=" " method="post" style="margin-left: 250px; margin-top:100px">
            @csrf
            <div class="container-fluid container border" style="margin-bottom: 300px">
                <h1 class="h3 mb-3 fw-normal text-center"></h1>
                <img class="" src="{{ asset('img/login_logo.png') }}" alt="enin" style="display: inline-block; margin-bottom: 10px  ">
                <div class="form-floating " style="margin-bottom: 15px; width: 200px">
                    <input type="text" class="form-control" id="floatingInput" name="name" value="" >
                    <label for="floatingInput text-black-50">New Category</label>
                    @error('email')
                    <div class="alert-danger"> {{ $message }}</div>
                    @enderror

                </div>

                <div>
                    <button class="register btn btn-lg btn-secondary text-center"  type="button" style="" >

                        <a href="{{ route('register') }}"style="color: white; text-decoration: none;">
                            Add Category
                        </a>
                    </button>
                </div>
            </div>
        </form>
        </div>
    </main>
@endsection
