@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="col-md-10"><h5 class="ml-5">Past Dartpoint Eligible Events</h5></div>
        <hr />

        <div class="row justify-content-center">
            @include('claim._claimable')
        </div>

    </div>
@endsection
