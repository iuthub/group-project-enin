@extends('board.master_board')

    @section('content')
    @include('board.partials_board.nav_bar_board')
<div class="Section Title">
    <h2> Profile {{ $foreignUser->firstName }} {{ $foreignUser->lastName }}</h2>
    <p class="lead">I don't know there will be information</p>
</div>
    @if(\Illuminate\Support\Facades\Auth::user()->cannot('isModerator'))
    <script type="text/javascript">
        $(document).ready(function () {
            $('input').attr('disabled', 'disabled');
            $('#log_out').removeAttr('disabled');
        });
    </script>
    @endif
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
                                    <li> <strong>Category: </strong> {{ $announcement->categories->map(function ($x){return $x->name;})->join(', ') }} </li>
                                    <li> <strong>Importance: </strong> {{ $announcement->importance }} </li>
                                </ol>
                                {{$announcement->content}}
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <p class="d-flex justify-content-between align-items-center mb-3">Total Number: {{ $foreignUserAnnouncement->count() }}</p>
            </div>

            {{-- The end of info about Announcements --}}

            <div class="col-md-7 col-lg-6">
                <form method="post" class="needs-validation" >
                    @csrf
                    <div class="row g-3">

                        <div class="col-12">
                            <label for="username" class="form-label">Username</label>
                            <div class="input-group has-validation">
                                <input type="text" name="username" class="form-control" id="username" value="{{ $foreignUser->username }}" required >
                                @error('username')
                                <div class="alert-danger"> {{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-12">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" id="email" value="{{ $foreignUser->email }}"  required>
                            @error('email')
                            <div class="alert-danger"> {{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-12">
                            <label for="address" class="form-label">Phone Number</label>
                            <input type="text" name="phoneNumber" class="form-control" id="address" value="{{ $foreignUser->phoneNumber }}"  required>
                            @error('phoneNumber')
                            <div class="alert-danger">Phone has to be in format: +998-91-1669982</div>
                            @enderror
                        </div>

                        <div class="col-sm-6">
                            <label for="birthdate" class="form-label">Date of Birth </label>
                            <input type="text" name="birthdate" class="form-control" id="birthdate" value="{{ $foreignUser->birthdate }}"  required>
                            @error('birthdate')
                            <div class="alert-danger"> {{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-sm-6">
                            <label for="passport" class="form-label">Passport Number</label>
                            <input type="text" name="passport" class="form-control" id="passport" value="{{ $foreignUser->passport }}" required >
                            @error('passport')
                            <div class="alert-danger"> {{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-sm-6">
                            <label for="City" class="form-label">City</label>
                            <input type="text" name="city" class="form-control" id="city" value="{{ $foreignUser->city }}" required >
                            @error('city')
                            <div class="alert-danger"> {{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-sm-6">
                            <label for="postal code" class="form-label">Postal Code</label>
                            <input type="text" name="postalCode" class="form-control" id="postalCode" value="{{ $foreignUser->postalCode }}" required>
                            @error('postalCode')
                            <div class="alert-danger"> {{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <hr class="my-4">
                    @if(\Illuminate\Support\Facades\Auth::user()->can('isModerator'))

                    <input type="submit" id="input_submit" style="display: none"/>
                    <button class="w-100 btn btn-primary btn-lg" id="submit_button" type="button">Edit</button>
                    @endif
                </form>
            </div>
        </div>
    </main>

</div>

        <script>
            $("#submit_button").click(function (){
                let email = $('#email');
                let passport = $('#passport');
                let city = $('#city');
                let postCode = $("#postalCode");
                let checkSubmit = true;
                let postCode_pattern = /^([a-zA-Z]){1}([0-9][0-9]|[0-9]|[a-zA-Z][0-9][a-zA-Z]|[a-zA-Z][0-9][0-9]|[a-zA-Z][0-9]){1}([        ])([0-9][a-zA-z][a-zA-z]){1}$/i;
                let passport_pattern = /^[A-Z][0-9]{8}$/i;
                let email_pattern = /^\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b$/i;
                let city_pattern = /^[a-zA-Z]+(?:[\s-][a-zA-Z]+)*$/i;
                checkSubmit = checkInpit(email_pattern, email);
                console.log(`email ${checkSubmit}`);
                // checkSubmit = checkSubmit ? checkInpit(passport_pattern, passport): checkSubmit;
                console.log(`passport ${checkSubmit}`);
                // checkSubmit = checkSubmit ? checkInpit(city_pattern, city): checkSubmit;
                console.log(`city ${checkSubmit}`);
                // checkSubmit = checkSubmit ? checkInpit(postCode_pattern, postCode): checkSubmit;
                if (checkSubmit) {
                    $('#input_submit').click();
                }
                else {
                    alert('please fix errors');
                }
            });

            function checkInpit(pattern, input) {
                if(!pattern.test(input.val())){
                    input.addClass('alert-danger');
                    return false;
                }
                else {
                    input.removeClass('alert-danger');
                    return true;
                }
            }

        </script>

@endsection
