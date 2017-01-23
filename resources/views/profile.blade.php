@extends('master')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Profile Info Edit</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('editprofile') }}" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        
                        <div class="form-group">

                        	<!-- NAME -->
                            <label for="name" class="col-md-4 control-label">Name</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus placeholder="Enter your name">
                            </div>

                            <!-- SURNAME -->
                            <label for="lstname" class="col-md-4 control-label">Last name</label>
                            <div class="col-md-6">
                                <input id="lstname" type="text" class="form-control" name="lstname" value="{{ old('lstname') }}" required autofocus placeholder="Enter your last name">
                            </div>

                            <!-- DATE OF BIRTH -->
                            <label for="datepicker" class="col-md-4 control-label">Date of Birth</label>
                            <div class="col-md-6">
                                <input id="datepicker" type="text" class="form-control" name="surname" value="{{ old('dob') }}" required autofocus placeholder="MM/DD/YYYY">
                            </div>

                            <!--COUNTRY-->
                            <label for="country" class="col-md-4 control-label">Country</label>
                            <div class="col-md-6">
                                <input id="country" type="text" class="form-control" name="country" value="{{ old('country') }}" required autofocus placeholder="Name of the country you live in">
                            </div>

							<!--PLACE-->
                            <label for="place" class="col-md-4 control-label">Place</label>
                            <div class="col-md-6">
                                <input id="place" type="text" class="form-control" name="place" value="{{ old('place') }}" required autofocus placeholder="Name of the place you live in">
                            </div>

                            <!--AVATAR-->
                            <label for="avatar" class="col-md-4 control-label">Avatar</label>
                            <div class="col-md-6">
                                <label class="btn btn-default btn-file">
    							Browse <input type="file" class="file" name="avatar">
								</label>
                            </div>

                            <!--ABOUT-->
                            <label for="about" class="col-md-4 control-label">About</label>
                            <div class="col-md-6">
                            	<textarea class="form-control" rows="5" id="about"></textarea>
                            </div>

                            <!--SUBMIT-->
                            <div class="col-md-10 text-center">
                            <input type="submit" class="btn btn-sucess" id="usrnav">SUBMIT</a>
                        	</div>

                        </div>


                    </form>
                </div>
            </div>
        </div>
    </div>
</div>





@stop
