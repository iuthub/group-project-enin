@extends('board.master_board')
@section('content')
    @include('board.partials_board.nav_bar_board')
    @include('board.partials_board.additional_navbar')
    <div class="btn-group">
        <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Separated link</a>
        </div>
    </div>
    <main class="container mt-3">
        <div class="row mb-2" id="main_announcment_container">
            @foreach($announcements as $announcement)
                <x-announcement :announcement="$announcement" token="{{\Illuminate\Support\Facades\Auth::user()->auth_token}}"></x-announcement>
            @endforeach
        </div>
        <div class="row g-5">
            <div class="col-md-8">

                <h3>Statistics</h3>
                <p>The following table displays number of announcements for particular category</p>
                <table class="table">
                    <thead>
                    <tr>
                        <th>Category</th>
                        <th>Announcements quantity</th>
                    </tr>
                    </thead>
                    @foreach($categories as $category)
                        <x-category :category="$category"></x-category>
                    @endforeach
                    <tfoot>
                    <tr>
                        <td>Totals</td>
                        <td>{{ $announcements->count() }}</td>
                    </tr>
                    </tfoot>
                </table>
                <nav class="blog-pagination" aria-label="Pagination">
                    <a class="btn btn-outline-primary" href="#">Top</a>
                </nav>
            </div>
            <div class="col-md-4">
                <div class="position-sticky" style="top: 2rem;">
                    <div class="p-4">
                        <p class="lead">Users</p>
                        <ol class="list-unstyled mb-0">
                            @foreach($users as $user)
                                <x-user :user="$user"></x-user>
                            @endforeach
                        </ol>
                    </div>
                    <div class="p-4">
                        <p class="lead">Moderators</p>
                        <ol class="list-unstyled">
                            <li><a href="#">BigHead</a></li>
                            <li><a href="#">Twitter</a></li>
                            <li><a href="#">Facebook</a></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
