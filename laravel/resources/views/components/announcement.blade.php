<div class="col-md-6">
    <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
            <strong class="d-inline-block mb-2 text-success">{{ $announcement->importance }}</strong>
            <h3 class="mb-0">{{ $announcement->title }}</h3>
            <div class="mb-1 text-muted">{{ $announcement->comment }}</div>
            <p class="card-text mb-auto">{{ $announcement->categories()->get()->map(function ($x){return $x->name;})->join(', ') }}</p>
            <p class="card-text mb-auto">{{ $announcement->content }}</p>
            <a href="{{ route('profileForeign', ['id'=>$announcement->user_id]) }}" class="stretched-link">{{ $announcement->user()->get()->map(function ($x){return $x->username;}) }}</a>
        </div>
    </div>
</div>

