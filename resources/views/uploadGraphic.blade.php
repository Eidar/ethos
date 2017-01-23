@extends('master')

@section('upload')

<h2>Graphic file upload</h2>
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
    <label for="description" class="col-md-4 control-label"><pre>Description:</pre></label>
	    <div class="col-md-6">
			<textarea name="description"></textarea>
		</div>
		</div>
	<hr>

	<!-- SOURCE -->
	<div class="row">
	 <label for="graphic" class="col-md-4 control-label">Upload graphic:</label>
	    <div class="col-md-6">
	        <label class="btn btn-default btn-file">
			Browse <input type="file" class="file" name="graphic">
			</label>
	    </div>
	   </div>
	  <hr>

	<input type="submit" class="btn btn-sucess" id="usrnav"> <h4>Submit your work!</h4>
</form>

@stop

