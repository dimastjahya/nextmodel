<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>Bootstrap 3 Template / Theme - Bootable</title>
		<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href="<?php echo asset('css/bootstrap.min.css') ?>" rel="stylesheet">
		<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css" rel="stylesheet">
		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<link href="<?php echo asset('css/styles.css') ?>" rel="stylesheet">
	</head>
	<body>
<nav class="navbar navbar-static">
   <div class="container">
    <div class="navbar-header">
        <div class="navbar-brand"><img src="<?php echo asset('images/NEXTmodels.jpg') ?>"></div>
    </div>
    <!-- DROPDOWN LOGIN STARTS HERE  -->
    <ul id="signInDropdown" class="nav navbar-nav navbar-right">
      <li class="dropdown">
        <button type="button" id="dropdownMenu1" data-toggle="dropdown" class="btn btn-default navbar-btn dropdown-toggle"><i class="glyphicon glyphicon-user color-blue"></i> Login <span class="caret"></span></button>
      <ul class="dropdown-menu">
        <li>
          <form class="navbar-form form" role="form" method="POST" action="/auth/login">
          {!! csrf_field() !!}
            <div class="form-group">
              <div class="input-group">
              	<span class="input-group-addon"><i class="glyphicon glyphicon-envelope color-blue"></i></span>
                <!--EMAIL ADDRESS-->
                <input id="emailInput" placeholder="email address" class="form-control" type="email" oninvalid="setCustomValidity('Please enter a valid email address!')" onchange="try{setCustomValidity('')}catch(e){}" required="" name="email" value="{{ old('email') }}">
              </div>
            </div>    <br><br>     
            <div class="form-group">
              <div class="input-group">
              	<span class="input-group-addon"><i class="glyphicon glyphicon-lock color-blue"></i></span>
                <!--PASSWORD--> 
              	<input id="passwordInput" placeholder="password" class="form-control" type="password" oninvalid="setCustomValidity('Please enter a password!')" onchange="try{setCustomValidity('')}catch(e){}" required="" name="password">
              </div>
            </div>
            <!--  BASIC ERROR MESSAGE-->
            <div class="form-group">
            	<label class="error-message color-red">*Email &amp; password don't match!</label>
            </div>
           
            <div class="form-group">
              <!--BUTTON--> 
              <button type="submit" class="btn btn-primary form-control">Login</button></div>
            <div class="form-group">
              <!--RESET PASSWORD LINK-->
              <span class="pull-right"><a href="#">Forgot Password?</a></span></div>
          </form>
        </li>
      </ul>
      </li>
    </ul>
    <!-- DROPDOWN LOGIN ENDS HERE  -->
    </div>
</nav><!-- /.navbar -->

<div class="container">
    <div class="col-md-12"><br><br>
       <br>

        <div class="well">
            <div id="myCarousel" class="carousel slide">
                
                <!-- Carousel items -->
                <div class="carousel-inner">
                    <div class="item active">
                        <div class="row">
                            <div class="col-sm-3"><a href="#x"><img src="<?php echo asset('images/chelsea_islan.jpg') ?>" alt="Image" class="img-responsive"></a>
                            </div>
                            <div class="col-sm-3"><a href="#x"><img src="<?php echo asset('images/eli.jpg') ?>" alt="Image" class="img-responsive"></a>
                            </div>
                            <div class="col-sm-3"><a href="#x"><img src="<?php echo asset('images/irish.jpg') ?>" alt="Image" class="img-responsive"></a>
                            </div>
                            <div class="col-sm-3"><a href="#x"><img src="<?php echo asset('images/pevita.jpg') ?>" alt="Image" class="img-responsive"></a>
                            </div>
                        </div>
                        <!--/row-->
                    </div>
                    <!--/item-->
                    <div class="item">
                        <div class="row">
                            <div class="col-sm-3"><a href="#x" class="thumbnail"><img src="<?php echo asset('images/sandradewi.jpg') ?>" alt="Image" class="img-responsive"></a>
                            </div>
                            <div class="col-sm-3"><a href="#x" class="thumbnail"><img src="<?php echo asset('images/julie.jpg') ?>" alt="Image" class="img-responsive"></a>
                            </div>
                            <div class="col-sm-3"><a href="#x" class="thumbnail"><img src="<?php echo asset('images/hyurin.jpg') ?>" alt="Image" class="img-responsive"></a>
                            </div>
                            <div class="col-sm-3"><a href="#x" class="thumbnail"><img src="<?php echo asset('images/jesika_mila.jpg') ?>" alt="Image" class="img-responsive"></a>
                            </div>
                        </div>
                        <!--/row-->
                    </div>
                    <!--/item-->
                    <div class="item">
                        <div class="row">
                            <div class="col-sm-3"><a href="#x" class="thumbnail"><img src="<?php echo asset('images/jodha.jpg') ?>" alt="Image" class="img-responsive"></a>
                            </div>
                            <div class="col-sm-3"><a href="#x" class="thumbnail"><img src="<?php echo asset('images/asmiranda.jpg') ?>" alt="Image" class="img-responsive"></a>
                            </div>
                            <div class="col-sm-3"><a href="#x" class="thumbnail"><img src="<?php echo asset('images/celsea_olivia.jpg') ?>" alt="Image" class="img-responsive"></a>
                            </div>
                            <div class="col-sm-3"><a href="#x" class="thumbnail"><img src="<?php echo asset('images/chiki.jpg') ?>" alt="Image" class="img-responsive"></a>
                            </div>
                        </div>
                        <!--/row-->
                    </div>
                    <!--/item-->
                </div>
                <!--/carousel-inner--> <a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a>

                <a class="right carousel-control" href="#myCarousel" data-slide="next">›</a>
            </div>
            <!--/myCarousel-->
        </div>
        <!--/well-->
    </div>
</div>

<div id="background"></div>

<div class="container">

  <div id="login-wrapper" class="card card-default">
       <h3>Register</h3>

           <form method="POST" class="register_form" action="/auth/register">
          {!! csrf_field() !!}
            <div class="clearfix"></div>
            <fieldset class="form-group">
              <input type="text" class="form-control" id="username" placeholder="Username" name="name" value="{{ old('name') }}">
            </fieldset>
            <fieldset class="form-group">
              <input type="email" class="form-control" id="email" placeholder="Email" name="email" value="{{ old('email') }}">
            </fieldset>
            <fieldset class="form-group">
              <input type="password" class="form-control" id="password" placeholder="Password" name="password" >
            </fieldset>
            <fieldset class="form-group">
              <input type="password" class="form-control" id="password" placeholder=" Confirm Password " name="password_confirmation" >
            </fieldset>
            <fieldset class="form-group">
            <div class="btn-group" data-toggle="buttons">
			<label class="btn btn-default">
				<input name="tipe" value="agency" type="radio">Agency
			</label>
			<label class="btn btn-default">
				<input name="tipe" value="model"  type="radio">Model
			</label>
        
        	</fieldset>
            <button class="btn btn-primary pull-right" type="submit">Register</button>
          </form>
           
          <div class="clearfix"></div>

  </div>
 
</div>
 

<footer>
  <div class="container">
  	<div class="row">
      <div class="col-md-12 text-right"><h5>©Company 2014</h5></div>
    </div>
  </div>
</footer>


	<!-- script references -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
		<script src="<?php echo asset('js/bootstrap.min.js') ?>"></script>
		<script src="<?php echo asset('js/scripts.js') ?>"></script>
	</body>
</html>