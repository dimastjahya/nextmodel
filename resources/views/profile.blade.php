@extends('layout.header')

@section('main_content')

<header class="masthead">
  <div class="container">
    <div class="row">
       <div class="col-md-6">
        <div class="well pull-left">
          <img src="<?php echo asset('images/NEXTmodels.jpg') ?>">        
        </div>
      </div>
     
    </div>
  </div>
</header>

<!-- Begin Body -->
<div class="container">
	<div class="no-gutter row">
      		<!-- left side column -->
  			<div class="col-md-2">
              	<div class="panel panel-default" id="sidebar">
                <div class="panel-heading" style="background-color:#888;color:#fff;">Sidebar</div> 
                <div class="panel-body">
      			<ul class="nav nav-stacked">
                    <li><a href="auth/register">Profile</a></li>
          			<li><a href="gallery/list">Gallery</a></li>
                  	<li><a href="#">Agency</a></li>
          			<li><a href="#">Event</a></li>
                  
				</ul>
                <!--/acc-->
                  
                  <hr>

                <div class="col col-span-12">
                  <i class="icon-2x icon-facebook"></i>&nbsp;
                  <i class="icon-2x icon-twitter"></i>&nbsp;
                  <i class="icon-2x icon-linkedin"></i>&nbsp;
                  <i class="icon-2x icon-pinterest"></i>
                </div>
                
                </div><!--/panel body-->
              </div><!--/panel-->
      		</div><!--/end left column-->
      			
      		<!--mid column-->
      		<div class="col-md-3">
              <div class="panel" id="midCol">
                <div class="panel-heading" style="background-color:#555;color:#eee;"><?php echo Auth::user()->tipe ?></div> 
                <div class="panel-body">
                  
                  <img class="img-responsive" src="<?php echo asset('images/'.Auth::user()->photo) ?>" width="500px" height="500px" >
                  
                  <div class="well">
                         <h3> {{$model->fullname}} </h3>
                          <p> {{$model->location}} </p>
                          <p> {{$model->email}} </p>
                          <p> {{$model->phone}} </p>
                         
                  </div>
                  
                  <hr>
                  
                  <h3>Top Model</h3>
                  
                  <h5><a href="#"><i class="glyphicon glyphicon-user"></i> John Chapman</a></h5>
                  <h5><a href="#"><i class="glyphicon glyphicon-user"></i> Max Axleton</a></h5>
                  <h5><a href="#"><i class="glyphicon glyphicon-user"></i> Devin Skelly</a></h5>
                  <h5><a href="#"><i class="glyphicon glyphicon-user"></i> Katie Kowalski</a></h5>
                  <h5><a href="#"><i class="glyphicon glyphicon-user"></i> Amet Deberge</a></h5>
                
                  <hr>  
                  
                  <iframe width="300" height="200" src="https://www.youtube.com/embed/2-MBfn8XjIU" frameborder="0" allowfullscreen></iframe>
                  <h3>Top Photos</h3>
                  <div class="media">
                    <a class="pull-left" href="#">
                      <img class="media-object" src="<?php echo asset('images/hyurin.jpg' )?>" width="80px" height="80px" >
                    </a>
                    <div class="media-body">
                      <h5 class="media-heading"><a href="/tagged/modal" target="ext" class="pull-right"><i class="glyphicon glyphicon-share"></i></a> <a href="#"><strong>Hyurin</strong></a></h5>
                      <small>Examples using the Bootstrap modal.</small><br>
                      <span class="badge">87</span>
                    </div>
                  </div>
                  <div class="media">
                    <a class="pull-left" href="#">
                      <img class="media-object" src="<?php echo asset('images/celsea_olivia.jpg' )?>" width="80px" height="80px" >
                    </a>
                    <div class="media-body">
                      <h5 class="media-heading"><a href="/tagged/slider" target="ext" class="pull-right"><i class="glyphicon glyphicon-share"></i></a> <a href="#"><strong>Chealsea Olivia</strong></a></h5>
                      <small>How to use the Bootstrap slider.</small><br>
                      <span class="badge">322</span>
                    </div>
                  </div>
                  <div class="media">
                    <a class="pull-left" href="#">
                       <img class="media-object" src="<?php echo asset('images/eli.jpg' )?>" width="80px" height="80px" >
                    </a>
                    <div class="media-body">
                      <h5 class="media-heading"><a href="/tagged/typography" target="ext" class="pull-right"><i class="glyphicon glyphicon-share"></i></a> <a href="#"><strong>Eli Sugigi</strong></a></h5>
                      <small>See the various textual elements and options.</small><br>
                      <span class="badge">44</span>
                    </div>
                  </div>
                  <div class="media">
                    <a class="pull-left" href="#">
                      <img class="media-object" src="<?php echo asset('images/kimberly.jpg' )?>" width="80px" height="80px" >
                    </a>
                    <div class="media-body">
                      <h5 class="media-heading"><a href="/tagged/media" target="ext" class="pull-right"><i class="glyphicon glyphicon-share"></i></a> <a href="#"><strong>kimberly Rider</strong></a></h5>
                      <small>Use @media queries to get the layout you want.</small><br>
                      <span class="badge">119</span>
                    </div>
                 </div>
                  
               </div> 
               </div><!--/panel-->
      		</div><!--/end mid column-->
      		
      		<!-- right content column-->
      		<div class="col-md-7" id="content">
            	<div class="panel">
    			<div class="panel-heading" style="background-color:#111;color:#fff;">Top Stories</div>   
              	<div class="panel-body">
                  
                  <div class="row">
                  <div class="col-md-8">
                    <h3>Story</h3>
                      <form method="POST" action="pesan">
                       {!! csrf_field() !!}
                      <textarea id="yourMessage" name="pesan" class="form-control" rows="6"></textarea>
                       <input type="hidden" name="name" value="{{$model->fullname}}">
                       <input type="hidden" name="user_id" value="<?php echo Auth::user()->id ?>">
                      <br><br>
                      <button type="submit" class="btn btn-default btn-lg">Send</button>
                      </form>
                  </div> 
                  <div class="col col-sm-4">
                    <a href="#"><img src="<?php echo asset('images/tokopedia.jpg') ?>" class="img-responsive" width="300px" height="120px"></a>
                    <div class="text-muted"><small>Diskon 90%</small></div>
                    <p>
                    untuk produk fashion dan gedget.
                    </p>
                    <hr>
                    <a href="#"><img src="<?php echo asset('images/lasada.jpg') ?>" class="img-responsive" width="300px" height="120px"></a>
                    <div class="text-muted"><small>cash back 10%</small></div>
                    <p>
                    untuk produk tas, sepatu dan blazer.
                    </p>
                  </div>   
                </div>
                 
                  <hr>
                   
                  @if (count($pesans))
                  @foreach ($pesans as $pesan)
                  <div class="well">
                   <div class="media">
                   <?php 
                   $photo = App\user::where('id','=', $pesan->user_id )->first(); 
                   ?>
                    <a class="pull-left" href="#">
                      <img class="media-object" src="<?php echo asset('images/'.$photo->photo) ?>" width="80" hight="80">
                    </a> 
                    <div class="media-body">
                      <h5 class="media-heading"><a href="/tagged/modal" target="ext" class="pull-right"><i class="glyphicon glyphicon-share"></i></a> <a href="#"><strong>{{$pesan->name}}</strong></a></h5>
                      <h6>{{$pesan->updated_at}}</h6>
                      <small>{{$pesan->pesan}}</small><br>
                      
                    </div>
                  </div>
                   </div>
                  
                 
                  @endforeach
                   @endif
                  Media Queries is a CSS3 module allowing content rendering to adapt to conditions such as screen resolution (e.g. smartphone vs. high definition screen). It became a W3C recommended standard in June 2012.[1] and is a cornerstone technology of Responsive Web Design.
                  
                  <hr>
                  
                  <div class="well text-center"> 
                    <h1>Centered Text</h1>
                    This was a 2.x challenge that seems a little easier in 3.
                    <br><br>
                    <div style="font-size:70pt">
                      <i class="glyphicon glyphicon-4x glyphicon-camera"></i>
                      <i class="glyphicon glyphicon-4x glyphicon-camera"></i>
                      <i class="glyphicon glyphicon-4x glyphicon-camera"></i>
                    </div>
                    
                  </div>
                  
                  <hr>
                  
                  <h2>CSS3</h2>
                  <img src="//placehold.it/150x100/EEEEEE" class="img-responsive pull-right">
                  To understand the RWD approach, you must first understand CSS - the basis of responsive design. CSS enables the developer to use percentage-based (AKA fluid or proportion-based) grids, CSS3 media queries. The web site then adapts to multiple devices (desktop, laptop, tablet, smartphone) and display conditions such as browser size and screen resolution.
  
                  <br><br>
                  <button class="btn btn-default">More</button>
                  
                  <hr>
                  
                   <div class="row">
                    <div class="col-md-6">
                      <img src="/assets/example/bg_smartphones.jpg" class="img-responsive">
                      
                    </div> 
                    <div class="col-md-6">
                      <h1>There is still a lot to be said about the Responsive Web.</h1>
                    </div>   
                  </div>
                  
                  <hr>
                
                  <h2>Responsive Text</h2>
                  Have you ever seen large text blocks overflow their container, or get cut-off? One way to handle this is to ensure
                  the text content wraps inside the container. But the more "responsive" way is to scale font-sizes accordingly as the size of the viewing area
                  (viewport) changes. Creators of <a href="http://fittextjs.com/">FitText</a> have mastered this in the form of a plugin.
                
                  <hr>
                  
                  
                  <div class="well"> 
                    <h1>Well..</h1>
                    Does anyone know why <a href="#">@mdo</a> or <a href="#">@fat</a> would name this element a "well"?
                  </div>
  
                  <hr>
                  
                  <h2>Responsive Images</h2>
                  The sizing "grid" is not the only aspect of responsive design. Making images and media object scale correctly is another consideration for responsive developers.
                  <span class="hidden-sm">Go ahead and shrink your browser's width to see how the HTML elements and images respond as the width of the viewport changes.</span>
                                
                  <h1><a href="#"><i class="glyphicon glyphicon-user"></i> <i class="glyphicon glyphicon-chevron-down"></i></a></h1>
                
                  <hr>
                  
                  Bootstrap 3 is the latest "Mobile-first" release of the Bootstrap framework that offers a starter foundation for Web designers and developers.
                  Bootstrap consists of a CSS and JavaScript library. To use Bootstrap, you simply include (reference) in the HTML of your Web page. There is also a CDN for 
                  Bootstrap that serves pages faster.
                  
                  <hr>
                  
                  This theme was made at Bootply. Bootply is a HTML, JavaScript and CSS editor app built just for Bootstrap. Bootply enables developers to easily apply the Bootstrap Framework to their projects using a beautiful hand-coding interface. The browser-based Bootply editor lets developers select and paste Bootstrap friendly code snippets. Bootply can be used to test, manage and share any Bootstrap code, from small snippets to entire Bootstrap-ready themes. Find it at http://bootply.com
                  
                  <hr>
                  
                  <div class="row">
                    <div class="col-md-3 col-sm-6 col-6">
                      <a href="#"><img src="//placehold.it/600X200/EDEDED" class="img-responsive"></a>
                    </div>
                    <div class="col-md-3 col-sm-6 col-6">
                      <a href="#"><img src="//placehold.it/600X200/DDDDDD" class="img-responsive"></a>
                    </div>
                    <div class="col-md-3 col-sm-6 col-6">
                      <a href="#"><img src="//placehold.it/600X200/555555/EEE" class="img-responsive"></a>
                    </div>
                    <div class="col-md-3 col-sm-6 col-6">
                      <a href="#"><img src="//placehold.it/600X200/F3F3F3" class="img-responsive"></a>
                    </div>
                  </div>
                  <br>
                  <div class="row">
                    <div class="col-md-3 col-sm-6 col-6">
                      <a href="#"><img src="//placehold.it/600X200/999999/DDD" class="img-responsive"></a>
                    </div>
                    <div class="col-md-3 col-sm-6 col-6">
                      <a href="#"><img src="//placehold.it/600X200/CCCCCC" class="img-responsive"></a>
                    </div>
                    <div class="col-md-3 col-sm-6 col-6">
                      <a href="#"><img src="//placehold.it/600X200/EDEDED" class="img-responsive"></a>
                    </div>
                    <div class="col-md-3 col-sm-6 col-6">
                      <a href="#"><img src="//placehold.it/600X200/E0E0E0" class="img-responsive"></a>
                    </div>
                  </div>
                  
                  <hr>
                  <h4><a href="http://bootply.com/69913">Edit on Bootply</a></h4>
                  <hr>
             	
                  </div><!--/panel-body-->
                </div><!--/panel-->
              	<!--/end right column-->
      	</div> 
  	</div>
</div>
@stop