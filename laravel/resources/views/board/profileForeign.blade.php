@extends('board.master_board')

    @section('content')
    @include('board.partials_board.nav_bar_board')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<div class="Section Title">
    <h2> Profile {{ $foreignUser->firstName }} {{ $foreignUser->lastName }}</h2>
    <p class="lead">I don't know there will be information</p>
</div>

<div class="container">
    <main>
        <hr class="my-4">
        <div class="row g-5">
            {{-- The info about Announcements  --}}
            <div class="col-md-8 col-lg-6 order-md-last">
                <h4 class="d-flex justify-content-between align-items-center mb-3">
                    <span class="text-primary">Your Announcement</span>
                </h4>
                <div class="accordion" id="accordionExample">
                    @foreach($foreignUserAnnouncement as $announcement)
                    <div class="accordion-item bg-dark">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"  aria-expanded="false" data-bs-target="#collapseButton_{{$loop->index}}" >
                                {{ $announcement->title }}
                            </button>
                        </h2>
                        <div class="collapse" id="collapseButton_{{$loop->index}}">
                            <div class="accordion-body">
                                <ol class="list-unstyled">
                                    <li> <strong >Your comment: </strong> {{ $announcement->comment }} </li>
                                    <li> <strong>Category: </strong> {{ $announcement->categories()->get()->map(function ($x){return $x->name;})->join(', ') }} </li>
                                    <li> <strong>Importance: </strong> {{ $announcement->importance }} </li>
                                </ol>
                                {{ $announcement->content }}
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <p class="d-flex justify-content-between align-items-center mb-3">Total Number: {{ $foreignUserAnnouncement->count() }}</p>
            </div>

            {{-- The end of info about Announcements --}}

            <div class="col-md-7 col-lg-6">
                <form class="needs-validation" novalidate>
                    <div class="row g-3">

                        <div class="col-12">
                            <label for="username" class="form-label">Username</label>
                            <div class="input-group has-validation">
                                <input type="text" class="form-control" id="username" value="{{ $foreignUser->username }}" disabled>
                            </div>
                        </div>

                        <div class="col-12">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" value="{{ $foreignUser->email }}" disabled>
                        </div>

                        <div class="col-12">
                            <label for="address" class="form-label">Phone Number</label>
                            <input type="text" class="form-control" id="address" value="{{ $foreignUser->phoneNumber }}" disabled>
                        </div>

                        <div class="col-sm-6">
                            <label for="birthdate" class="form-label">Date of Birth </label>
                            <input type="text" class="form-control" id="birthdate" value="{{ $foreignUser->birthdate }}" disabled>
                        </div>

                        <div class="col-sm-6">
                            <label for="passport" class="form-label">Passport Number</label>
                            <input type="text" class="form-control" id="passport" value="{{ $foreignUser->passportNumber }}" disabled>
                        </div>

                        <div class="col-sm-6">
                            <label for="City" class="form-label">City</label>
                            <input type="text" class="form-control" id="City" value="{{ $foreignUser->city }}" disabled>
                        </div>

                        <div class="col-sm-6">
                            <label for="postal code" class="form-label">Postal Code</label>
                            <input type="text" class="form-control" id="postal code" value="{{ $foreignUser->postalCode }}" disabled>
                        </div>
                    </div>

                    <hr class="my-4">
                    <button class="w-100 btn btn-primary btn-lg" type="submit">Continue to checkout</button>
                </form>
            </div>
        </div>
    </main>

</div>

@endsection
