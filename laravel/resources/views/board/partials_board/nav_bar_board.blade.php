<style>

</style>
<header class="mb-auto">
    <div>
{{--<<<<<<< HEAD--}}
        <div class="container">
            <header class="nav navbar-1 nav-masthead justify-content-center d-flex flex-auto flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 sticky-top" style="height: 50px">

                <a href="/" class="align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none " style="width: 50px">
                    <div class="navbar-brand navbar-expand-md img-fluid float-md-start mb-0" href="#">
                        <img class="img-navbar" src="{{ asset('img/navbarlogo.png') }}" alt="enin" style="">
                    </div>
                </a>

                <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0 nav-el" style="">
                    <li class="nav-item">
                        <a class="nav-link nav-link px-2 link-dark
                    @if(Route::current()->getName() == 'board.board')
                            active
                    @endif
                            " href="{{ route('board.board') }}">Board</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link px-2 link-dark
                    @if(Route::current()->getName() == 'board.announce')
                            active
                    @endif
                            " href="{{ route('board.announce') }}">Announce</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link px-2 link-dark
                    @if(Route::current()->getName() == 'board.contact')
                            active
                    @endif
                            " href="{{ route('board.contact') }}">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link px-2 link-dark
                    @if(Route::current()->getName() == 'board.profile')
                            active
                    @endif
                            "href="{{ route('board.profile') }}"> {{ \Illuminate\Support\Facades\Auth::user()->firstName }} {{ \Illuminate\Support\Facades\Auth::user()->lastName }}
                        </a> &nbsp; &nbsp;
                    </li>
                </ul>

                <div class="col-md-3 text-end px-2 link-dark col-12 col-md-auto mb-2 justify-content-center mb-md-0 logout-btn" style="margin-bottom: 30px !important; margin-left: -240px">
                    <form action="{{ route('logout') }}" method="post">
                        @csrf
                        <input type="submit" class="btn button-logout nav-masthead justify-content-center float-md-end" value="Log out" style="">
                    </form>
                </div>

            </header>
        </div>
{{--=======--}}
{{--        <h3 class="float-md-start mb-0">enin</h3>--}}
{{--        <nav class="nav nav-masthead justify-content-center float-md-end">--}}
{{--            <a class="nav-link--}}
{{--            @if(Route::current()->getName() == 'board.board')--}}
{{--                active--}}
{{--            @endif--}}
{{--            " href="{{ route('board.board') }}">Board</a>--}}
{{--            <a class="nav-link--}}
{{--            @if(Route::current()->getName() == 'board.announce')--}}
{{--                active--}}
{{--            @endif--}}
{{--            " href="{{ route('board.announce') }}">Announce</a>--}}
{{--            <a class="nav-link--}}
{{--            @if(Route::current()->getName() == 'board.contact')--}}
{{--                active--}}
{{--            @endif--}}
{{--            " href="{{ route('board.contact') }}">Contact</a>--}}
{{--            <a class="nav-link--}}
{{--            @if(Route::current()->getName() == 'board.profile')--}}
{{--                active--}}
{{--            @endif--}}
{{--            " href="{{ route('board.profile') }}"> {{ \Illuminate\Support\Facades\Auth::user()->firstName }} {{ \Illuminate\Support\Facades\Auth::user()->lastName }} </a> &nbsp; &nbsp;--}}
{{--            <form action="{{ route('logout') }}" method="post">--}}
{{--                @csrf--}}
{{--                <input type="submit" class="nav-link-style-clone" value="Log out">--}}
{{--            </form>--}}
{{--        </nav>--}}
    </div>
</header>
<header class="mb-auto">
    <div>

    </div>
</header>


