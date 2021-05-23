
    @extends('board.master_board')
    @section('content')
    @include('board.partials_board.nav_bar_board')

    <main class="form-signin">
        <style>
            *{
                font-family: 'Montserrat', sans-serif;
            }
            #unique_id_for_container{
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
        <form method="post" style="margin-left: 250px; margin-top:100px">
            @include('partials_global.info')
            @csrf
            <div id="unique_id_for_container" class="container-fluid container border" style="margin-bottom: 300px">
                <h1 class="h3 mb-3 fw-normal text-center"></h1>
                <img class="" src="{{ asset('img/login_logo.png') }}" alt="enin" style="display: inline-block; margin-bottom: 10px  ">
                <div class="form-floating " style="margin-bottom: 15px; width: 200px">
                    <input type="text" class="form-control" id="floatingInput" name="name" value="{{old('name')}}" required>
                    <label for="floatingInput text-black-50">New Category</label>
                    @error('name')
                    <div class="alert-danger"> {{ $message }}</div>
                    @enderror
                </div>

                <div>
                    <button class="register btn btn-lg btn-secondary text-center"  type="submit" style="" >
                        Add Category
                    </button>
                </div>
            </div>
        </form>
        </div>
    </main>
@endsection
