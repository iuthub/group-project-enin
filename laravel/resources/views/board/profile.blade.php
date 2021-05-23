@extends('board.master_board')

@section('content')
    @include('board.partials_board.nav_bar_board')

    <div class="Section_Title green-text">
        <h2 class="green-text">
            <span class="text-center" style="color: #22863a">Your profile</span>
        </h2>
        <p class="lead">I don't know there will be information</p>
    </div>

    <div class="container">
        <main>
            <hr class="my-4">
            <div class="row g-5">
                {{-- The info about Announcements  --}}
                <div class="col-md-8 col-lg-6 order-md-last">
                    <h4 class=" justify-content-between align-items-center mb-3">
                        <span class="text-center " style="color: #22863a">Your Announcement</span>
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
                                        <li> <strong >Your comment: </strong> </li>
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
                    <form class="needs-validation" novalidate>
                        <div class="row g-3">
                            <div class="col-sm-6">
                                <label for="firstName" class="form-label">First name</label>
                                <input type="text" class="form-control" id="firstName" placeholder="FirstName" value="" required>
                                <div class="invalid-feedback">
                                    Valid first name is required.
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <label for="lastName" class="form-label">Last name</label>
                                <input type="text" class="form-control" id="lastName" placeholder="LastName" value="" required>
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
                                <input type="text" class="form-control" id="birthdate" placeholder="MM-DD-YYYY">
                                <div class="invalid-feedback">
                                    Valid date in valid form required.
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <label for="passport" class="form-label">Passport Number</label>
                                <input type="text" class="form-control" id="passport" placeholder="AA1234567" value="" required>
                                <div class="invalid-feedback">
                                    Valid passport number is required.
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <label for="City" class="form-label">City</label>
                                <input type="text" class="form-control" id="City" placeholder="CityName" value="" required>
                                <div class="invalid-feedback">
                                    Valid city is required.
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <label for="postal code" class="form-label">Postal Code</label>
                                <input type="text" class="form-control" id="postal code" placeholder="100XX" value="" required>
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

    </div>
@endsection

@section("footer")

@endsection
