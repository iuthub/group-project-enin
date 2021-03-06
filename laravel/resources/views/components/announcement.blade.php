<div class="col-md-6" id="main_{{$announcement->id}}">
    <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        @if(\Illuminate\Support\Facades\Auth::user()->can('isModerator'))
        <div class="">
            <div class="powers btn-moderator">
                <div class="powers-drag-handle" title="Delete announcement">
                    <button id="modify_{{$announcement->id}}" class="btn-moderator ">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                             class="bi bi-arrow-up" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                  d="M8 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L7.5 2.707V14.5a.5.5 0 0 0 .5.5z"/>
                        </svg>
                    </button>
                    <a href="{{route('profileForeign', $announcement->user->id)}}"  id="edit_{{$announcement->id}}" class="btn-moderator" style=" " >
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-pen" viewBox="0 0 16 16">
                            <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z"/>
                        </svg>
                    </a>
                    <button id="approve_{{$announcement->id}}" class="btn-moderator" >
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-check-square" viewBox="0 0 16 16">
                            <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                            <path d="M10.97 4.97a.75.75 0 0 1 1.071 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.235.235 0 0 1 .02-.022z"/>
                        </svg>
                    </button>
                    <button id="delete_{{$announcement->id}}" class="btn-moderator" >
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                             class="bi bi-x-square button button-medium mini-button settings-nub"
                             viewBox="0 0 16 16">
                            <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                            <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        @endif
        {{--        @endif--}}
        <div class="col p-4 d-flex flex-column position-static">
            <strong class="d-inline-block mb-2 text-success">{{ $announcement->importance }}</strong>
            <h3 class="mb-0">{{ $announcement->title }}</h3>
            <div class="mb-1 text-muted">{{ $announcement->comment }}</div>
            <p class="card-text mb-auto">{{ $announcement->categories()->get()->map(function ($x){return $x->name;})->join(', ') }}</p>
            <p class="card-text mb-auto">{{ $announcement->content }}</p>
            <a href="{{ route('profileForeign', ['id'=>$announcement->user_id]) }}"
               class="">{{ $announcement->user()->get()->map(function ($x){return $x->username;}) }}</a>
            @if($announcement->is_approved == false)
                <h6 class="mb-0 approve-btn" id="is_approved_{{$announcement->id}}" style="color: red;">Waiting for moderator approval!</h6>
            @endif
        </div>
    </div>
</div>
<script>
    var csrf = "{{csrf_token()}}";
    $('#delete_{{$announcement->id}}').click(function () {
        let child = $("#main_{{$announcement->id}}");
        child.remove();
        console.log("{{$token}}");
        $.ajax({
            url: '{{route('board.delete', $announcement->id)}}',

            headers: {
                'X-CSRF-TOKEN': csrf,
            },
            dataType: 'json',
            success: function (data) {
                console.log(data);
                alert("You are successfully deleted {{$announcement->title}}");
            },
        })
    })
    $('#modify_{{$announcement->id}}').click(function () {
        console.log("asdsad");
        let parent = $('#main_announcment_container');
        var child = parent.find('.col-md-6').first();
        $("#main_{{$announcement->id}}").first().insertBefore(child);
        $.ajax({
            url: '{{route('board.reorder', $announcement->id)}}',
            headers: {
                'X-CSRF-TOKEN': csrf,
            },
            dataType: 'json',
            success: function (data) {
                console.log(data);
                alert("You successfully inserted {{$announcement->title}} to the top");
            },
        });
    })
    $('#approve_{{$announcement->id}}').click(function () {
        $('#is_approved_{{$announcement->id}}').remove();
        $.ajax({
            url: '{{route('board.approve', $announcement->id)}}',
            headers: {
                'X-CSRF-TOKEN': csrf,
            },
            dataType: 'json',
            success: function (data) {
                console.log(data);
                alert("You approved announcement");
            },
        });
    })
</script>
