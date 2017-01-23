@extends('master')


@section('sidebar-up')
  <h3 class="text-muted">Popular</h3>
  <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
  <p><a class="btn btn-lg btn-success" href="#" role="button">Sign up today</a></p>
@stop



@section('uploadres')

@foreach($uploads as $upload)

<div class="col-md-4">
<h2>{{ $upload->title }}</h2>
  <div class="col-md-10">{{ $upload-> source }}</div>
</div>



@endforeach

@stop
