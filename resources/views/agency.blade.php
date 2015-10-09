@extends('layout.header')

@section('main_content')
 <h1>Profile Model</h1>
<form class="form" action="agency" method="post">
{!! csrf_field() !!}
<div class="col-xs-6">
	<div class="form-group">
	<label><h4>Real name</h4></label>
	<input type="text" class="form-control" name="name" placeholder="agency name">
	</div>
	<div class="form-group">
	<label><h4>Location</h4></label>
	<input type="text" class="form-control" name="location" placeholder="Your place in the world">
	</div>
	<div class="form-group">
	<label><h4>Phone</h4></label>
	<input type="text" class="form-control" name="phone" placeholder="Your place in the world">
	</div>
	<div class="form-group">
	<label><h4>Email</h4></label>
	<input type="email" class="form-control" name="email" value="<?php Auth::user()->email ?>" placeholder="<?php echo Auth::user()->email ?>" required="required">
	</div>
     <label></label>
	<div class="form-group"><label></label><button class="btn btn-lg btn-success" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Save</button> <button class="btn btn-lg" type="reset"><i class="glyphicon glyphicon-repeat"></i> Reset</button></div></div></form>

@stop