@extends('landing.master_landing')

@section('content')
    @include('landing.partials_landing.nav_bar_landing')

    <main class="px-3">
        <style>
            .button {
                padding: 15px 25px;
                font-size: 24px;
                text-align: center;
                cursor: pointer;
                outline: none;
                color: #fff;
                background-color: #22863a;
                border: none;
                border-radius: 15px;
                box-shadow: 0 9px #999;
                width: 200px;
                margin-bottom: 80px ;
            }
            .button:hover {background-color: #3e8e41}
            .button:active {
                background-color: #3e8e41;
                box-shadow: 0 5px #666;
                transform: translateY(7px);
            }
        </style>
        <div class="" href="#">
            <img class="mainpagelogo" src="{{ asset('img/mainpagelogo.png') }}" alt="enin" style="">
        </div>
        <p class="lead text-center"">There will be information, may be even even dynamic ones, like information about the announcements, like quantities agaga</p>
        <p class="lead w-60">
            <a href="{{route('board.board')}}" class="btn btn-lg fw-bold bg-black button">go inside!</a>
        </p>
    </main>

@endsection
