<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>Bootstrap 3 Template / Theme - Bootable</title>
		<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href="<?php echo asset('css/bootstrap.min.css') ?>" rel="stylesheet">
		<link href="https://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css" rel="stylesheet">
		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<link href="<?php echo asset('css/styles.css') ?>" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.2.0/min/dropzone.min.css">

        <title>Timber</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?php echo asset('css/bootstrap.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo asset('css/font-awesome.css') ?>">
    <link rel='stylesheet' id='camera-css'  href="<?php echo asset('css/camera.css') ?>" type='text/css' media='all'>
    <link rel="stylesheet" type="text/css" href="<?php echo asset('css/slicknav.css') ?>">
    <link rel="stylesheet" href="<?php echo asset('css/prettyPhoto.css') ?>" type="text/css" media="screen" title="prettyPhoto main stylesheet" charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="<?php echo asset('css/style.css') ?>">
    
    
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.8.3.min.js"></script>

    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700|Open+Sans:700' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="<?php echo asset('js/jquery.mobile.customized.min.js') ?>"></script>
    <script type="text/javascript" src="<?php echo asset('js/jquery.easing.1.3.js') ?>"></script> 
    <script type="text/javascript" src="<?php echo asset('js/camera.min.js') ?>"></script>
    <script type="text/javascript" src="<?php echo asset('js/myscript.js') ?>"></script>
    <script type="text/javascript" src="<?php echo asset('js/sorting.js') ?>"></script>
    <script type="text/javascript" src="<?php echo asset('js/jquery.isotope.js') ?>" ></script>
    <script type="text/javascript" src="<?php echo asset('js/jquery.nav.js') ?>"></script>
     <script src="<?php echo asset('/js/jquery.prettyPhoto.js') ?>" type="text/javascript" charset="utf-8"></script>
  <script src="<?php echo asset('/js/bootstrap.min.js') ?>"></script>
  <script src="<?php echo asset('/js/jquery.slicknav.js') ?>"></script>

     <script>
       jQuery(function(){
           jQuery('#camera_wrap_1').camera({
           transPeriod: 500,
           time: 3000,
           height: '490px',
           thumbnails: false,
           pagination: true,
           playPause: false,
           loader: false,
           navigation: false,
           hover: false
         });
      });
     </script>
    

	</head>
	<body>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.2.0/min/dropzone.min.js"></script>
  <body>
<nav class="navbar navbar-static">
   <div class="container">
    <div class="navbar-header">
      <div class="navbar-brand"></div>
      <a class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="glyphicon glyphicon-chevron-down"></span>
      </a>
    </div>
      <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav">  
          <li><a href="home">Beranda</a></li>
          <li><a href="home">Profile</a></li> 
          <li class="dropdown">
            <!-- <a href="#" class="dropdown-toggle" data-toggle="dropdown">Channels</a>
            <ul class="dropdown-menu">
              <li><a href="#">Sub-link</a></li>
              <li><a href="#">Sub-link</a></li>
              <li><a href="#">Sub-link</a></li>
              <li><a href="#">Sub-link</a></li>
              
            </ul> -->
          </li>
        </ul>
        <ul class="nav navbar-right navbar-nav">
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-search"></i></a>
            <ul class="dropdown-menu" style="padding:10px;">
                <form class="form-inline">
            <button type="submit" class="btn btn-default pull-right"><i class="glyphicon glyphicon-search"></i></button><input type="text" class="form-control pull-left" placeholder="Search">
                </form>
             </ul> 
          </li>
          <li class="dropdown">
            <a href="login/logout" class="dropdown-toggle" data-toggle="dropdown"><?php echo Auth::user()->name ?></a>
            <ul class="dropdown-menu">
              <li><a href="#">Edit Account</a></li>
              <li><a href="#">Bantuan</a></li>
              <li><a href="#">Setting</a></li>
              <li><a href="login/logout">Log out</a></li>
              
            </ul>
          </li>
        </ul>
      </div>
    </div>
</nav><!-- /.navbar -->

@yield('main_content')

<footer>
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-right"><h5>©Company 2014</h5></div>
    </div>
  </div>
</footer>


  <!-- script references -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
    <script src="<?php echo asset('js/bootstrap.min.js') ?>"></script>
    <script src="<?php echo asset('js/scripts.js') ?>"></script>
  </body>
</html>
