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
                <div class="col-md-5 col-lg-4 order-md-last">
                    <h4 class="d-flex justify-content-between align-items-center mb-3">
                        <span class="text-primary">Your Announcement</span>
                    </h4>
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Accordion Item #1
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Accordion Item #2
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Accordion Item #3
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                </div>
                            </div>
                        </div>
                    </div>
                    {{--                    <ul class="list-group mb-3">--}}
                    {{--                        <li class="list-group-item d-flex justify-content-between lh-sm">--}}
                    {{--                            <div>--}}
                    {{--                                <h6 class="my-0">Title</h6>--}}
                    {{--                                <small class="text-muted">Your comment</small>--}}
                    {{--                            </div>--}}
                    {{--                            <span class="text-muted">Importance</span>--}}
                    {{--                        </li>--}}
                    {{--                        <li class="list-group-item d-flex justify-content-between lh-sm">--}}
                    {{--                            <div>--}}
                    {{--                                <h6 class="my-0">Title</h6>--}}
                    {{--                                <small class="text-muted">Your comment</small>--}}
                    {{--                            </div>--}}
                    {{--                            <span class="text-muted">Importance</span>--}}
                    {{--                        </li>--}}
                    {{--                        <li class="list-group-item d-flex justify-content-between lh-sm">--}}
                    {{--                            <div>--}}
                    {{--                                <h6 class="my-0">Title</h6>--}}
                    {{--                                <small class="text-muted">Your comment</small>--}}
                    {{--                            </div>--}}
                    {{--                            <span class="text-muted">Importance</span>--}}
                    {{--                        </li>--}}
                    {{--                        <li class="list-group-item d-flex justify-content-between">--}}
                    {{--                            <span>Total number</span>--}}
                    {{--                            <strong>3</strong>--}}
                    {{--                        </li>--}}
                    {{--                    </ul>--}}
                    <p class="d-flex justify-content-between align-items-center mb-3">Total Number: 0</p>
                </div>

                <div class="col-md-7 col-lg-8">
                    <form class="needs-validation" novalidate>
                        <div class="row g-3">
                            <div class="col-sm-6">
                                <label for="firstName" class="form-label">First name</label>
                                <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
                                <div class="invalid-feedback">
                                    Valid first name is required.
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <label for="lastName" class="form-label">Last name</label>
                                <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
                                <div class="invalid-feedback">
                                    Valid last name is required.
                                </div>
                            </div>

                            <div class="col-12">
                                <label for="username" class="form-label">Username</label>
                                <div class="input-group has-validation">
                                    <input type="text" class="form-control" id="username" placeholder="Username" required>
                                    <div class="invalid-feedback">
                                        Your username is required.
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" placeholder="you@example.com">
                                <div class="invalid-feedback">
                                    Please enter a valid email address.
                                </div>
                            </div>

                            <div class="col-12">
                                <label for="address" class="form-label">Phone Number</label>
                                <input type="text" class="form-control" id="address" placeholder="+9989" required>
                                <div class="invalid-feedback">
                                    Please enter your Phone Number
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <label for="birthdate" class="form-label">Date of Birth </label>
                                <input type="text" class="form-control" id="birthdate" placeholder="||-||-||||">
                                <small class="text-muted">Example: 09-09-1999</small>
                                <div class="invalid-feedback">
                                    Valid date in valid form required.
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <label for="passport" class="form-label">Passport Number</label>
                                <input type="text" class="form-control" id="passport" placeholder="" value="" required>
                                <div class="invalid-feedback">
                                    Valid passport number is required.
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <label for="City" class="form-label">City</label>
                                <input type="text" class="form-control" id="City" placeholder="Tashkent?" value="" required>
                                <div class="invalid-feedback">
                                    Valid city is required.
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <label for="postal code" class="form-label">Postal Code</label>
                                <input type="text" class="form-control" id="postal code" placeholder="" value="" required>
                                <div class="invalid-feedback">
                                    Valid postal code is required.
                                </div>
                            </div>
                        </div>
                        <hr class="my-4">
                        <button class="w-100 btn btn-primary btn-lg" type="submit">Continue to checkout</button>
                    </form>
                </div>
            </div>
        </main>


        <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
        <script src="form-validation.js"></script>
    </div>

    {{--    <main class="px-3">--}}
    {{--        <h1>enin</h1>--}}
    {{--        <p class="lead">there will be board I found the mistake</p>--}}
    {{--    </main>--}}

@endsection
