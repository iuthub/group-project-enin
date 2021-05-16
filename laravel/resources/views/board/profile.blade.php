@extends('board.master_board')

@section('content')
    @include('board.partials_board.nav_bar_board')

    <div class="Section Title">
        <h2>Your profile</h2>
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
                        <div class="accordion-item bg-dark align-content-lg-start">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Title of Announcement
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <ol class="list-unstyled">
                                        <li> <strong>Your comment: </strong> </li>
                                        <li> <strong>Category: </strong> </li>
                                        <li> <strong>Importance: </strong> </li>
                                    </ol>
                                    It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item bg-dark">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Title of Announcement
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <ol class="list-unstyled">
                                        <li> <strong>Your comment: </strong> </li>
                                        <li> <strong>Category: </strong> </li>
                                        <li> <strong>Importance: </strong> </li>
                                    </ol>
                                    It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables.
                                </div>
                            </div>
                        </div>
                    </div>
                    <p class="d-flex justify-content-between align-items-center mb-3">Total Number: 0</p>
                </div>
                {{-- The end of info about Announcements --}}

                <div class="col-md-7 col-lg-6">
                        <div class="row g-3">
                            <div class="col-sm-6">
                                <p>First name</p>
                                <p>Tair</p>
                            </div>

                            <div class="col-sm-6">
                                <p>Last Name</p>
                                <p>Djanibekov</p>
                            </div>

                            <div class="col-12">
                                <p>Username</p>
                                <p>enin</p>
                            </div>

                            <div class="col-12">
                                <p>Email</p>
                                <p>tair.djanibekov@gmail.com</p>
                            </div>

                            <div class="col-12">
                                <p>Phone number</p>
                                <p>+998909988409</p>
                            </div>

                            <div class="col-sm-6">
                                <p>Date of Birth</p>
                                <p>19-04-2001</p>
                            </div>

                            <div class="col-sm-6">
                                <p>Passport Number</p>
                                <p>AB99998999</p>
                            </div>

                            <div class="col-sm-6">
                                <p>City</p>
                                <p>Tashkent</p>
                            </div>

                            <div class="col-sm-6">
                                <p>Postal code</p>
                                <p>99999</p>
                            </div>
                        </div>
                        <hr class="my-4">
                        <button class="w-100 btn btn-primary btn-lg" type="submit">Edit</button>

                </div>
            </div>
        </main>

    </div>

@endsection
