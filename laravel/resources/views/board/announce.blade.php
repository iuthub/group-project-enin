@extends('board.master_board')

@section('content')
    @include('board.partials_board.nav_bar_board')
    <style>

    </style>
    <div>

        <div class="section-title announce">
            <h2 class="text-center" style="color: #22863a">Make announcement</h2>
            <p>Everybody would know</p>

            @if(session('info'))
                <x-alert type="success">
                    {{ session('info') }}
                </x-alert>
            @endif

            @if($errors->any())
                @foreach($errors->all() as $error)
                    <x-alert type="danger">
                        {{ $error }}
                    </x-alert>
                @endforeach
            @endif

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
                            <label for="exampleFormControlSelect1">Categories</label>
                            <select class="form-control" id="exampleFormControlSelect1" name="categories[]">
                                <option>Education</option>
                                <option>Work</option>
                                <option>News</option>
                                <option>Emergency</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 form-group mt-md-0">
                        <div class="form-group mt-3">
                            <label for="exampleFormControlSelect1">Importance</label>
                            <select class="form-control" id="exampleFormControlSelect1" name="importance">
                                <option>Very Important</option>
                                <option>Neutral</option>
                                <option>Fairly Important</option>
                            </select>
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
