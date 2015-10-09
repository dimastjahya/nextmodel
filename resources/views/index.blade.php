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
      <a class="navbar-brand" href="http://www.bootply.com" target="ext"><b>NEXT MODEL</b></a>
      <a class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="glyphicon glyphicon-chevron-down"></span>
      </a>
    </div>
      <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav">  
          
        </ul>
        <ul class="nav navbar-right navbar-nav">
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-search"></i></a>
            <ul class="dropdown-menu" style="padding:12px;">
                <form class="form-inline">
     				<button type="submit" class="btn btn-default pull-right"><i class="glyphicon glyphicon-search"></i></button><input type="text" class="form-control pull-left" placeholder="Search">
                </form>
             </ul>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-user"></i> <i class="glyphicon glyphicon-chevron-down"></i></a>
            <ul class="dropdown-menu">
              <li><a href="#">Login</a></li>
              <li><a href="#">Profile</a></li>
              <li class="divider"></li>
              <li><a href="#">About</a></li>
             </ul>
          </li>
        </ul>
      </div>
    </div>
</nav><!-- /.navbar -->

<div class="container">
    <div class="col-md-12">
         <h1>The Next Models</h1>

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
    
    <div class="card-block">
      <ul class="nav nav-tabs">
        <li class="nav-item">
          <a href="#login" class="nav-link text-success active" role="tab" data-toggle="tab">Login</a>
        </li>
        <li class="nav-item">
          <a href="#register" class="nav-link" role="tab" data-toggle="tab">Register</a>
        </li>
      </ul>
      <div class="tab-content">
        <br>
        <div role="tabpanel" class="tab-pane active fade in" id="login">
          <form method="POST" action="/auth/login">
          {!! csrf_field() !!}
            <div class="clearfix"></div>
            <fieldset class="form-group">
              <input type="text" class="form-control" id="username" placeholder="Username/Email" name="email" value="{{ old('email') }}">
            </fieldset>
            <fieldset class="form-group">
              <input type="password" class="form-control" id="password" placeholder="Password" name="password" >
            </fieldset>
            <button class="btn btn-primary pull-right" type="submit">Login!</button>
          </form>
          <a href="#" class="pull-left text-info">Reset Password</a>
          <br>
          <a href="#" class="pull-left text-danger">Delete my account</a>
          <div class="clearfix"></div>
        </div>
        
        <div role="tabpanel" class="tab-pane fade" id="register">
           <form method="POST" action="/auth/register">
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
        </div>
        	</fieldset>
            <button class="btn btn-primary pull-right" type="submit">Register</button>
          </form>
          <div class="clearfix"></div>
        </div>
      </div>
    </div>
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