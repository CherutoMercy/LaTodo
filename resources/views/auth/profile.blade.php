@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
<form action="{{ url('/register') }}" method="post">
       {!! csrf_field() !!}
    <fieldset>
        <h1 class="center">Signup Details</h1>
        <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
            <label class="col-md-3" for="name">Name (required):</label>
            <div class="col-md-8">
            <input type="text" id="name" name="name" value="{{ old('name') }}" aria-describedby="name-format" class="form-control">
                @if ($errors->has('name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}"> 
            <label class="col-md-3" for="email">Email (required):</label>
            <div class="col-md-8">
            <input type="email" id="email" name="email" value="{{ old('email') }}" class="form-control">
                 @if ($errors->has('email'))
                     <span class="help-block">
                         <strong>{{ $errors->first('email') }}</strong>
                     </span>
                 @endif
            </div>
        </div>
            <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
             </div>
    </fieldset>
</form>
        </div>
    </div>
</div>
@endsection
