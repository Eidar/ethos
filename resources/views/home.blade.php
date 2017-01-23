@extends('master')

@section('content')
<div class="container">


<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6" id="avatar"><img src="img/avatars/{{ $avatar }}"></div>
<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3" id="info">
    <h1>{{ Auth::user()->name }} {{ $lstname }}</h1>
      <div class="btn-group-vertical">
      <a href="#" class="btn btn-sucess" id="usrnav">MESSAGE</a>
      <a href="{{ url('profile') }}" class="btn btn-sucess" id="usrnav">INFO</a>
    </div>
</div>
<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3" id="info2">
    <p>Score: </p> 
    <h3>{{ $score }}</h3>
    <p>Country: {{ $country }}</p>
    <p>Place: {{ $place }}</p>
    </div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"><h5>ABOUT</h5>
  <p>{{ $about }}</p>
</div>

<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"><h5>UPLOAD</h5></div>
<div class="btn-group btn-group-justified">
  <a href="/uploadtext" class="btn btn-sucess" id="upload">Text</a>
  <a href="/uploadvideo" class="btn btn-sucess" id="upload">Video</a>
  <a href="/uploadgraphic" class="btn btn-sucess" id="upload">Graphic</a>
  <a href="/uploadmusic" class="btn btn-sucess" id="upload">Music</a>
</div>

<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4"></div>
<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4"></div>

</div>

@endsection
