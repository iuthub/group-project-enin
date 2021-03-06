@extends('moderator.master_moderator')

@section('content')
    @include('board.partials_board.nav_bar_board')

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
