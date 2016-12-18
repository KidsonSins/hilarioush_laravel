@extends('layouts.master')

@section('content')
<!--
<div class="pagetop">
		<div class="container">
			<h1>Contact Us</h1>
			<ul>
				<li><a title="" href="#">Home</a></li>
				<li>Contact Us</li>
			</ul>		
		</div>
	</div>
-->

<section>
		<div class="block gray p-t-50 p-b-30">
			<div class="container">
			<h2 class="">Contact US</h2>
				<div class="row">
					<div class="col-md-8 column">
						<div class="map">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7066.068966237897!2d85.32533357315242!3d27.68532908174925!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb19bed80297ef%3A0xa88f57446083f344!2sBuddhanagar%2C+Kathmandu+44600!5e0!3m2!1sen!2snp!4v1460704228069"></iframe>
						</div>
						<div class="block-gap"></div>
						<div class="contact-content">
							<div class="row">
								<div class="col-md-6">
									<div class="address-sec">
										
										<h4>Get In Touch</h4>
										<p id="mytypeit">{{ $info->information }}</p>
										<ul>
											<li><span><i class="fa fa-home"></i></span> <strong>Address:</strong>{{ $info->address }}</li>
											<li><span><i class="fa fa-phone"></i></span> <strong>Phone:</strong>{{ $info->phone_no }}</li>
											<li><span><i class="fa fa-fax"></i></span> <strong>Website:</strong>{{ $info->website }}</li>
											<li><span><i class="fa fa-envelope"></i></span> <strong>Email:</strong>{{ $info->email }}</li>
										</ul>
									</div>
								</div>
								<div class="col-md-6">
									<div class="contact-img">
										<img src="{{ asset('uploads/'.$info->photo->path) }}" alt="" class="m-t-85">
									</div>
								</div>
							</div>
						</div>			
						<div class="block-gap"></div>

						
						
						
					</div>
					<aside class="col-md-4 column">
						<div class="sidebar">
							<!-- Widget -->
							
							<div class="widget">
								<div class="widget-title">
									<h4>Gallery</h4>
									<span>Hilarioush English boarding School</span>
								</div>
								<div class="gallery-widget lightbox">
									<div class="row">
										@foreach($galleryimages as $galleryimage)
											<div class="col-md-4" ><a href="{{ asset('uploads/gallery/'.$galleryimage->path) }}" title=""><img src="{{ asset('uploads/gallery/'.$galleryimage->path) }}" alt="" /></a></div>
										@endforeach
									</div>
								</div>
							</div><!-- Widget -->

							<div class="h_widget">

								<h1 class="heading-title h_font">National Anthem</h1>

								<p>सयौ थुंगा फूलका हामी एउटै माला नेपाली सर्वभौम भई फैलिएका मेची महाकाली || <br>

									प्रकृतिको कोटी कोटी सम्पदाको आचला वीरहरुका रगतले स्वोतन्त्र र अटल || <br>

									ज्ञानभूमि शान्तिभूमि तराई पहाड हिमाल अखण्ड यो प्यारो हाम्रो मातृभूमि नेपाल || <br>

									बहुल जाति भाषा धर्म सस्कृति छन् विसाल अग्रगामी राष्ट्र हाम्रो जय जय नेपाल || <br>
								</p>


							</div>


							
						</div>
					</aside>
				</div>
			</div>
		</div>
	</section>



@endsection