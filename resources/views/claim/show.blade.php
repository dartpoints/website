@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-md-10"><h5 class="ml-5">Prove attendance & claim points: <small>{{ $event->name }}</small></h5></div>
        <hr />

        <div class="row justify-content-center col-md-6 offset-md-3">

            @if ($errors->any())
                <div class="alert alert-danger">
                    Your proof-of-attendance code is invalid - Please try again...
                </div>
            @endif


            <form class="col-lg-10" method="POST" action="{{ route('claim.create', $event) }}">
                @csrf
                <div class="form-group row">
                    <input name="code" type="text" class="form-control text-center" aria-label="Large" aria-describedby="inputGroup-sizing-sm" placeholder="Proof-of-attendance code" maxlength="20">
                </div>

                <div class="form-group row mb-0">
                    <button type="submit" class="btn btn-primary btn-block">
                        {{ __('Submit') }}
                    </button>
                </div>
            </form>
        </div>

    </div>
@endsection
