@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Home Page') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}

                    <br>
                    <br>
                    <p>{{ __('Welcome, ') }} <strong>{{ Auth::user()->name }}</strong>!</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
