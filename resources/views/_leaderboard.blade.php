<div class="col-md-5">
    <div class="card">
        <div class="card-header">Leaderboard</div>
        <ul class="list-group list-group-flush">
            @foreach(\App\House::all()->sortByDesc('points') as $house)
                <li class="list-group-item">{{ $house->name }} <span class="badge badge-success float-right">{{ $house->points }}</span></li>
            @endforeach
        </ul>
    </div>
</div>
