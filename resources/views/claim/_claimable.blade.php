<div class="col-md-10">
    <div class="row">
        @foreach(\App\Event::whereDate('claimable_at', '<', \Carbon\Carbon::now())->get() as $event)
            <div class="col-sm-4 mb-3">
                <div class="card">
                    <img class="card-img-top" src="{{ asset('img/' . $event->image . '.png') }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $event->name }}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">{{ $event->location }}</h6>
                        <p class="card-text text-justify">{!! $event->description !!}</p>
                    </div>
                    <div class="card-footer">
                        <h6 class="mb-0">Claim from {{ $event->claimable_at->format('m/d/Y') }} <span class="badge badge-success float-right">{{ $event->points }} points</span></h6>
                    </div>
                    <div class="card-footer">
                        @if (Auth::user()->claims()->where('event_id', $event->id)->first() === null)
                            <a class="btn btn-primary btn-sm btn-block" href="{{ route('claim.show', $event)}}" role="button">Prove attendance & claim points</a>
                        @else
                            <a class="btn btn-primary btn-sm btn-block disabled" href="#" role="button">Points for this event already claimed!</a>
                        @endif
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
