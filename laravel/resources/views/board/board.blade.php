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

        <div class="row mb-2">
            @foreach($announcements as $announcement)
                <x-announcement :announcement="$announcement"></x-announcement>
            @endforeach
        </div>

        <div class="row g-5">
            <div class="col-md-8">
                <h3 class="pb-4 mb-4 border-bottom">
                    From the Firehose
                </h3>


                <h3>Example table</h3>
                <p>And don't forget about tables in these posts:</p>
                <table class="table">
                    <thead>
                    <tr>
                        <th>Username</th>
                        <th>Announcement</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Alice</td>
                        <td>10</td>
                    </tr>
                    <tr>
                        <td>Bob</td>
                        <td>4</td>
                    </tr>
                    <tr>
                        <td>Charlie</td>
                        <td>7</td>
                    </tr>
                    </tbody>
                    <tfoot>
                    <tr>
                        <td>Totals</td>
                        <td>21</td>
                    </tr>
                    </tfoot>
                </table>

                <nav class="blog-pagination" aria-label="Pagination">
                    <a class="btn btn-outline-primary" href="#">Older</a>
                    <a class="btn btn-outline-secondary disabled" href="#" tabindex="-1" aria-disabled="true">Newer</a>
                </nav>

            </div>


            <div class="col-md-4">
                <div class="position-sticky" style="top: 2rem;">
                    <div class="p-4">
                        <p class="lead">Users</p>
                        <ol class="list-unstyled mb-0">
                            <li><a href="#">User 1</a></li>
                            <li><a href="#">User 2</a></li>
                            <li><a href="#">January 2021</a></li>
                            <li><a href="#">December 2020</a></li>

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
