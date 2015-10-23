@extends('layout.header')

@section('main_content')
			

<div class="container">
<div class="row">
			<!-- filter_block -->
			<h1>{{$gallery->name}}</h1>

			<a href ="{{url('gallery/list')}}" class= "btn-primary"> back</a>
			
			<form action="{{url('image/upload')}}" 
			class="dropzone" id="addImages">
			{!! csrf_field() !!}
			<input type="hidden" name="gallery_id" value="{{$gallery->id}}">
			</form>
		<br><br>
		
		@if (count($images)) 
			<div class="portfolio_block columns3   pretty" data-animated="fadeIn">	
					 @foreach ($images as $image)
					<div class="element col-sm-4   gall branding">
						<a class="plS" href="images/prettyPhotoImages/pic1.jpg" rel="prettyPhoto[gallery2]">
							<img class="img-responsive picsGall" src="<?php echo asset('/gallery/images/'.$image->file_name) ?>" alt="pic1 Gallery"/>
						</a>
						<div class="view project_descr ">
							<h3><a href="#">{{$image->file_name}}</a></h3>
							<ul>
								<li><i class="fa fa-eye"></i>215</li>
								<li><a class="heart" href="#"><i class="fa-heart-o"></i>14</a></li>
							</ul>
						</div>
					</div>
			 @endforeach
                 	
					
					
			
		</div>
			  @endif	
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
    @stop

@stop
