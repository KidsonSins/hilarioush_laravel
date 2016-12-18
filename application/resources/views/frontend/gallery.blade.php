@extends('layouts.master')

@section('content')
<!--

	<div class="pagetop">
		<div class="container">
			<h1>Gallery Style 2</h1>
			<ul>
				<li><a title="" href="#">Packeges</a></li>
				<li>Rooms Packeges</li>
			</ul>		
		</div>
	</div> Page Top 

-->

<div class="container">
</div>
	<section>
		<div class="block gray p-t-60">
			<div class="container">
    <h2 class="text-left">Gallery</h2>
				<div class="row">
					<div class="col-md-12 column">
						<div class="gallery-data">
							{{--<section id="options">--}}
								{{--<span>Category:</span>--}}
								{{--<div class="option-isotop">--}}
									{{--<ul id="filter" class="option-set filters-nav" data-option-key="filter">--}}
										{{--<li><a href="#" class="selected" data-option-value="*">All</a></li>--}}
										{{--<li><a href="#" data-option-value=".adventure">categ1</a></li>--}}
										{{--<li><a href="#" data-option-value=".horseriding">categ1</a></li>--}}
										{{--<li><a href="#" data-option-value=".tours">categ1</a></li>--}}
										{{--<li><a href="#" data-option-value=".specials">categ1</a></li>--}}
									{{--</ul>--}}
								{{--</div>--}}
							{{--</section><!-- FILTER BUTTONS -->--}}
							<div class="row">
								<div class="gallery gaps masonary lightbox">

									@foreach($galleryimages as $galleryimage)

									<div class="col-md-4 adventure">
										<div class="gallery-img">
											<img src="{{ asset('uploads/gallery/'.$galleryimage->path) }}" alt="" />
											<div class="gallery-overlay">
												<span>November 10, 2013</span>
												<h5>Volcano Adventure</h5>
												<a title="" href="{{ asset('uploads/gallery/'.$galleryimage->path) }}">+</a>
											</div>
										</div>
									</div>
									@endforeach

								</div>
							</div>
						</div><!-- gallery-data -->	
					</div>
				</div>
			</div>
		</div>
	</section>


@endsection