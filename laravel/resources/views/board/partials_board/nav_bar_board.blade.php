<header class="mb-auto">
    <div>
        <h3 class="float-md-start mb-0">enin</h3>
        <nav class="nav nav-masthead justify-content-center float-md-end">
            <a class="nav-link
            @if(Route::current()->getName() == 'board.board')
                active
            @endif
            " href="{{ route('board.board') }}">Board</a>
            <a class="nav-link
            @if(Route::current()->getName() == 'board.announce')
                active
            @endif
            " href="{{ route('board.announce') }}">Announce</a>
            <a class="nav-link
            @if(Route::current()->getName() == 'board.contact')
                active
            @endif
            " href="{{ route('board.contact') }}">Contact</a>
            <a class="nav-link
            @if(Route::current()->getName() == 'board.profile')
                active
            @endif
            " href="{{ route('board.profile') }}"> {{ \Illuminate\Support\Facades\Auth::user()->firstName }} {{ \Illuminate\Support\Facades\Auth::user()->lastName }} </a> &nbsp; &nbsp;

            <form action="{{ route('logout') }}" method="post">
                @csrf
                <input type="submit" class="nav-link-style-clone" value="Log out">
            </form>
        </nav>
    </div>
</header>


