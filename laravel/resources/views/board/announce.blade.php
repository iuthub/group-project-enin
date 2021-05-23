@extends('board.master_board')

@section('content')
    @include('board.partials_board.nav_bar_board')
    <div>

        <div class="section-title announce">
            <h2 class="text-center" style="color: #22863a">Make announcement</h2>
            <p>Everybody would know</p>

            @include('partials_global.info')

            <form action="{{ route('add') }}" method="post" role="form" class="" data-aos="">
                @csrf
                <div class="row">
                    <div class="col-md-6 form-group">
                        <input type="text" class="form-control" name="title" id="title" placeholder="Title" value="{{ old('title') }}">
                    </div>
                    <div class="col-md-6 form-group mt-3 mt-md-0">
                        <input type="text" class="form-control" name="comment" id="comment" placeholder="Your Comment" value="{{ old('comment') }}">
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-6 form-group mt-md-0">
                        <div class="form-group mt-3">
                            <div class="accordion-item bg-dark">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"  aria-expanded="false" data-bs-target="#collapseButton2">
                                        Categories
                                    </button>
                                </h2>
                                <div class="collapse" id="collapseButton2">
                                    <div class="accordion-body">
                                        <ol class="list-unstyled">
                                            @foreach($categories as $category)
                                            <li> <strong><input class="form-check-input" type="checkbox" value="{{$category->id}}" name="categories[]">{{$category->name}}</strong> </li>
                                            @endforeach
                                        </ol>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 form-group mt-md-0">
                        <div class="form-group mt-3">
                            <div class="accordion-item bg-dark">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"  aria-expanded="false" data-bs-target="#collapseButton1">
                                        Importance
                                    </button>
                                </h2>
                                <div class="collapse" id="collapseButton1">
                                    <div class="accordion-body">
                                        <ol class="list-unstyled">
                                            <li> <strong>
                                                <input class="form-check-input" type="radio" name="importance" value="Very Important">
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Very Important
                                                </label>
                                                </strong>
                                            </li>
                                            <li> <strong>
                                                <input class="form-check-input" type="radio" name="importance" value="Neutral">
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Neutral
                                                </label>
                                                </strong>
                                            </li>
                                            <li> <strong>
                                                <input class="form-check-input" type="radio" name="importance" value="Fairly Important">
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Fairly Important
                                                </label>
                                                </strong>
                                            </li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="form-group mt-3">
                    <textarea class="form-control" name="content" rows="5" placeholder="Your announcement" value="{{ old('content') }}"></textarea>
                </div>
                <div class="my-3">
                    <div class="loading">Loading</div>
                    <div class="error-message"></div>
                    <div class="sent-message">Your message has been sent. Thank you!</div>
                </div>
                <button class="btn button-announce btn-lg btn-secondary fw-bold text-center border-white bg-black button " >Announce</button>
                <input type="submit" value="Announce" style="display: none">
            </form>
        </div>
    </div>
@endsection
