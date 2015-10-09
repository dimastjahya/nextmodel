@extends('layout.header')

@section('main_content')
 <h1>Profile Model</h1>
<form class="form" action="profile" method="post">
{!! csrf_field() !!}
<div class="col-xs-6">
	<div class="form-group">
	<label><h4>Real name</h4></label>
	<input type="text" class="form-control" name="fullname" placeholder="Do you have a name?">
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
	<div class="form-group">
	<label><h4>Model</h4></label>
	<input type="checkbox" name="model" value="1" class="unique"> Print Model
	<input type="checkbox" name="model" value="2" class="unique"> Catwalk Model
	<input type="checkbox" name="model" value="3" class="unique"> Commercial Model
	<input type="checkbox" name="model" value="4" class="unique"> Glamour Model
	<input type="checkbox" name="model" value="5" class="unique"> Fitness Model
	<input type="checkbox" name="model" value="6" class="unique"> Size plus Model
	</div>
	<div class="form-group">
	<label><h4>Category</h4></label>
	<div class="btn-group" data-toggle="buttons">
			<label class="btn btn-default">
				<input name="category" value="man" type="radio">Man
			</label>
			<label class="btn btn-default">
				<input name="category" value="woman" type="radio">Woman
			</label>
			<label class="btn btn-default">
				<input name="category" value="boy" type="radio">Boy
			</label>
			<label class="btn btn-default">
				<input name="category" value="girl" type="radio">Girl
			</label>
        </div>
	</div>
	<div class="form-group">
	<label><h4>Weight</h4></label>
	<input type="text" class="form-control" name="weight" placeholder="" required="required" > 
	<label><h4>Height</h4></label>
	<input type="text" class="form-control" name="height" placeholder="" required="required">
	<input type="hidden" class="form-control" name="id_model"  value="<?php echo Auth::user()->id ?>" >
	</div>
	<div class="form-group">
        <label for="fileSelect" class="col-sm-2 control-label"> Profile's Photo</label>
        <div class="col-sm-10">
          <input id="fileSelect" type="file" name="photo">
        </div>
     </div> 
     <label></label>
	<div class="form-group"><label></label><button class="btn btn-lg btn-success" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Save</button> <button class="btn btn-lg" type="reset"><i class="glyphicon glyphicon-repeat"></i> Reset</button></div></div></form>

@stop