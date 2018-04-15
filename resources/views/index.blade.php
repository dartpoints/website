@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center mb-5">
            @include('_leaderboard')

            @if (Auth::guest())
                @include('_about')
            @else
                @include('_profile')
            @endif
        </div>

        <div class="row">
        <div class="col-md-6"><h5 class="ml-5">Upcoming Dartpoint Eligible Events</h5></div>
        <div class="col-md-6">
            <a class="mr-5 btn btn-primary btn-sm float-right" href="{{ route('claim.index') }}" role="button">Claim points from past events</a>
        </div>
    </div>

        <hr />

        <div class="row justify-content-center">
            @include('_upcoming')
        </div>

    </div>
@endsection
