@extends('layouts.app')

@section('content')
<div class="index">
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="pan center">
  <a href="{{ url('/register') }}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true"><b>Get Started</b></a>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
