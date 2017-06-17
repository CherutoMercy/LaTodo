@extends('layouts.app')

@section('content')
    <style>
        body {
            background-image: url("https://i.kinja-img.com/gawker-media/image/upload/s--mkkE8O1S--/c_scale,fl_progressive,q_80,w_800/1884e9zof7czzjpg.jpg");
            background-color: #cccccc;
            height: 620px;
            margin-top: 0px;
        }
    </style>
</head>
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