@extends('master')

@section('upload')

<h2>Video file upload</h2>
<form class="form-horizontal" role="form" method="POST" action="{{ url('upload') }}" enctype="multipart/form-data">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">

	<!-- TITLE -->
	<div class="row">
	<label for="title" class="col-md-4 control-label"><pre>Title:</pre></label>
        <div class="col-md-6">
            <input id="title" type="text" class="form-control" name="title" required autofocus placeholder="Title of your work">
        </div>
        </div>

    <!-- DESCRIPTION -->
    <div class="row">
    <label for="textarea" class="col-md-4 control-label"><pre>Description:</pre></label>
	    <div class="col-md-6">
			<textarea id="tiny" name="textarea"></textarea>

		</div>
		</div>
	<hr>

	<!-- SOURCE -->
	<div class="row">
	<p>Paste your Youtube or Vimeo full embed link: </p>
	<label for="embed" class="col-md-4 control-label"><pre>Embed:</pre></label>
	<textarea name="embed"></textarea>
	</div>
	<hr>

	<input type="submit" class="btn btn-sucess" id="usrnav"> <h4>Submit your work!</h4>
</form>

@stop

