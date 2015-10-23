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
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo Auth::user()->name ?></a>
            <ul class="dropdown-menu">
              <li><a href="#">Edit Account</a></li>
              <li><a href="#">Bantuan</a></li>
              <li><a href="#">Setting</a></li>
              <li><a href="auth/logout">Log out</a></li>
              
            </ul>
          </li>
        </ul>
      </div>
    </div>
</nav><!-- /.navbar -->
    
    
    
    
       <div class="container">
		
		<div class="row">
		<h1>My Gallery</h1> <br><br><form method="POST" action="/galleryku/save">
			{!! csrf_field() !!}
						<h2><input type="text" class="col-md-6 col-xs-12 name" name='gallery_name' placeholder='Add Gallery *'/> </h2><input type="hidden" name="user_id" value="<?php echo Auth::user()->id ?>">
				<input type="hidden" name="publish" value="1">

				<button class="btn btn-lg btn-success" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Save</button>
			</form>
			<div id="options" class="col-md-12" style="text-align: center;">	
					<ul id="filter" class="option-set" data-option-key="filter">
						<li><a class="selected" href="#filter" data-option-value="*" class="current">All Works</a></li>

						<li><a href="#filter" data-option-value=".polygraphy">Polygraphy</a></li>
						<li><a href="#filter" data-option-value=".branding">Branding</a></li>
						<li><a href="#filter" data-option-value=".web">Web UI</a></li>
						<li><a href="#filter" data-option-value=".text_styles">Text Styles</a></li>
					</ul>
				</div>
		<br><br>
		  @if (count($galleries))
			<div class="portfolio_block columns3   pretty" data-animated="fadeIn">	
					@foreach ($galleries as $gallery)
					<div class="element col-sm-4   gall polygraphy">
						<a class="plS" href="<?php echo asset('/gallery/images/5624b7e731a1a1380270_10200847243051894_1327355991_n.jpg') ?>" rel="prettyPhoto[gallery2]">

							<img class="img-responsive picsGall" src="<?php echo asset('/gallery/images/5624b7e731a1a1380270_10200847243051894_1327355991_n.jpg') ?>" alt="pic1 Gallery"/>
						</a>
						<div class="view project_descr ">
							<h3><a href="{{url('galleryku/view/' .$gallery->id )}}">{{$gallery->name}}</a></h3>
							<ul>
								<li><i class="fa fa-eye"></i>215</li>
								<li><a class="heart" href="#"><i class="fa-heart-o"></i>14</a></li>
							</ul>
						</div>
					</div>
					@endforeach
					@endif
					
			</div>
			
			
				
					<div class="col-md-12 cBtn  lb" style="text-align: center;">
						<ul class="load_more_cont ">
							<li class="dowbload btn_load_more">
								<a href="javascript:void(0);" >
									<i class="fa fa-arrow-down"></i>Load More Projects
								</a>
							</li>
							<li class="buy">
								<a href="#">
									<i class="fa fa-shopping-cart"></i>Buy on Themeforest
								</a>
							</li>
						</ul>
					</div>
			
		</div>
			
			<script type="text/javascript">
				jQuery(window).load(function(){
					items_set = [
					
						{category : 'branding', lika_count : '77', view_count : '234', src : 'images/prettyPhotoImages/pic9.jpg', title : 'Foil Mini Badges', content : '' },
						
						{category : 'polygraphy', lika_count : '45', view_count : '100', src : 'images/prettyPhotoImages/pic7.jpg', title : 'Darko – Business Card Mock Up', content : '' },
						
						{category : 'text_styles', lika_count : '22', view_count : '140', src : 'images/prettyPhotoImages/pic8.jpg', title : 'Woody Poster Text Effect', content : '' }
						

					];
					jQuery('.portfolio_block').portfolio_addon({
						type : 1, // 2-4 columns simple portfolio
						load_count : 3,
						
						items : items_set
					});
					$('#container').isotope({
					  animationOptions: {
						 duration: 900,
						 queue: false
					   }
					});
				});
			</script>
		</div>
    </div>    
    
    <!--news start-->
    
    
		
		
	<script src="<?php echo asset('/js/jquery.prettyPhoto.js') ?>" type="text/javascript" charset="utf-8"></script>
	<script src="<?php echo asset('/js/bootstrap.min.js') ?>"></script>
	<script src="<?php echo asset('/js/jquery.slicknav.js') ?>"></script>
	<script>
			$(document).ready(function(){
			$(".bhide").click(function(){
				$(".hideObj").slideDown();
				$(this).hide(); //.attr()
				return false;
			});
			$(".bhide2").click(function(){
				$(".container.hideObj2").slideDown();
				$(this).hide(); // .attr()
				return false;
			});
				
			$('.heart').mouseover(function(){
					$(this).find('i').removeClass('fa-heart-o').addClass('fa-heart');
				}).mouseout(function(){
					$(this).find('i').removeClass('fa-heart').addClass('fa-heart-o');
				});
				
				function sdf_FTS(_number,_decimal,_separator)
				{
				var decimal=(typeof(_decimal)!='undefined')?_decimal:2;
				var separator=(typeof(_separator)!='undefined')?_separator:'';
				var r=parseFloat(_number)
				var exp10=Math.pow(10,decimal);
				r=Math.round(r*exp10)/exp10;
				rr=Number(r).toFixed(decimal).toString().split('.');
				b=rr[0].replace(/(\d{1,3}(?=(\d{3})+(?:\.\d|\b)))/g,"\$1"+separator);
				r=(rr[1]?b+'.'+rr[1]:b);

				return r;
}
				
			setTimeout(function(){
					$('#counter').text('0');
					$('#counter1').text('0');
					$('#counter2').text('0');
					setInterval(function(){
						
						var curval=parseInt($('#counter').text());
						var curval1=parseInt($('#counter1').text().replace(' ',''));
						var curval2=parseInt($('#counter2').text());
						if(curval<=707){
							$('#counter').text(curval+1);
						}
						if(curval1<=12280){
							$('#counter1').text(sdf_FTS((curval1+20),0,' '));
						}
						if(curval2<=245){
							$('#counter2').text(curval2+1);
						}
					}, 2);
					
				}, 500);
			});
	</script>
	<script type="text/javascript">
	jQuery(document).ready(function(){
		jQuery('#menu').slicknav();
		
	});
	</script>
	
	<script type="text/javascript">
    $(document).ready(function(){
       
        var $menu = $("#menuF");
            
        $(window).scroll(function(){
            if ( $(this).scrollTop() > 100 && $menu.hasClass("default") ){
                $menu.fadeOut('fast',function(){
                    $(this).removeClass("default")
                           .addClass("fixed transbg")
                           .fadeIn('fast');
                });
            } else if($(this).scrollTop() <= 100 && $menu.hasClass("fixed")) {
                $menu.fadeOut('fast',function(){
                    $(this).removeClass("fixed transbg")
                           .addClass("default")
                           .fadeIn('fast');
                });
            }
        });
	});
    //jQuery
	</script>
	<script>
		/*menu*/
		function calculateScroll() {
			var contentTop      =   [];
			var contentBottom   =   [];
			var winTop      =   $(window).scrollTop();
			var rangeTop    =   200;
			var rangeBottom =   500;
			$('.navmenu').find('a').each(function(){
				contentTop.push( $( $(this).attr('href') ).offset().top );
				contentBottom.push( $( $(this).attr('href') ).offset().top + $( $(this).attr('href') ).height() );
			})
			$.each( contentTop, function(i){
				if ( winTop > contentTop[i] - rangeTop && winTop < contentBottom[i] - rangeBottom ){
					$('.navmenu li')
					.removeClass('active')
					.eq(i).addClass('active');				
				}
			})
		};
		
		$(document).ready(function(){
			calculateScroll();
			$(window).scroll(function(event) {
				calculateScroll();
			});
			$('.navmenu ul li a').click(function() {  
				$('html, body').animate({scrollTop: $(this.hash).offset().top - 80}, 800);
				return false;
			});
		});		
	</script>	
	<script type="text/javascript" charset="utf-8">

		jQuery(document).ready(function(){
			jQuery(".pretty a[rel^='prettyPhoto']").prettyPhoto({animation_speed:'normal',theme:'light_square',slideshow:3000, autoplay_slideshow: true, social_tools: ''});
			
		});
	</script>
	</body>
	
</html>