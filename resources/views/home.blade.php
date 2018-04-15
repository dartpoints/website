@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center mb-4">
        <div class="col-md-5">
            <div class="card">
                <div class="card-header">Leaderboard</div>

                  <table class="table card-body mb-0">
                    <tbody>
                      @foreach(\App\House::all()->sortByDesc('points') as $house)
                      <tr>
                        <td>{{ $loop->index + 1 }}</td>
                        <td>{{ $house->name }}</td>
                        <td>{{ $house->points }}</td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>

            </div>
        </div>

        <div class="col-md-5">
            <div class="card">
                <div class="card-header">Your Dartpoint Profile</div>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item">Hey, <strong>{{ Auth::user()->name }}</strong>. Welcome to Dartpoints!</li>
                    <li class="list-group-item">You are currently registered as a <strong>{{ Auth::user()->house->name }}</strong> resident.</li>
                    <li class="list-group-item">You have <strong>{{ Auth::user()->points }} Dartpoints</strong>. Attend events and get more points!</li>
                    <li class="list-group-item">Claiming Dartpoints will count towards your <strong>house's rank</strong>.</li>
                    <li class="list-group-item">You can also <strong>redeem your points</strong> at our many partners!</li>
                    <li class="list-group-item">Visit our landing page to <strong>find out more</strong> about Dartpoints.</li>
                  </ul>
            </div>
        </div>
      </div>

      <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Your Dartpoint Profile</div>

                <div class="card-body">
                    You are logged in, {{ Auth::user()->name }}!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
