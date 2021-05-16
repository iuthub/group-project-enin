@extends('landing.master_landing')

@section('content')
    @include('landing.partials_landing.nav_bar_landing')

    <main class="px-3">
        <h1>enin</h1>
        <p class="lead">There will be information, may be even even dynamic ones, like information about the announcements, like quantities agaga</p>
        <p class="lead">
            <a href="{{route('board.board')}}" class="btn btn-lg btn-secondary fw-bold border-white bg-black">go inside</a>
        </p>
    </main>

@endsection
