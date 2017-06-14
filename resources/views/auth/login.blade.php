@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
<form action="{{ url('/login') }}" method="post">
       {!! csrf_field() !!}
    <fieldset>
        <h1 class="center">Login Details</h1>
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
        <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
            <label class="col-md-3" >Password:</label>
            <div class="col-md-8">
            <input type="password" id="password" name="password" class="validate form-control" value="">
                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>
        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">Login </button>

                                <a class="btn btn-link" href="{{ url('/password/reset') }}">Forgot Your Password?</a>
                            </div>
                        </div>
    </fieldset>
</form>
        </div>
    </div>
</div>
@endsection
