<header class="mb-auto">
    <div>
        <div class="navbar-brand navbar-expand-md img-fluid float-md-start mb-0" href="#">
            <img class="" src="{{ asset('img/navbarlogo.png') }}" alt="enin" style="display: inline-block;">
        </div>
        <nav class="nav nav-masthead justify-content-center float-md-end">
            <a class="nav-link
                @if(Route::current()->getName() == 'landing.home')
                active
                @endif
                " href="{{ route('landing.home') }}">Home</a>
            <a class="nav-link
                @if(Route::current()->getName() == 'landing.features')
                active
                @endif
                " href="{{ route('landing.features') }}">Features</a>
            <a class="nav-link
                @if(Route::current()->getName() == 'landing.contact')
                active
                @endif
                " href="{{ route('landing.contact') }}">Contact</a>
        </nav>
    </div>
</header>
