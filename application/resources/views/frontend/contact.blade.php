{% extends 'school/base.html' %}


{% block content %}
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
										<p id="mytypeit">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate quos atque veniam incidunt eos, modi fuga saepe, officiis ipsum ratione accusantium nisi placeat soluta esse fugiat? Et sunt iure similique exercitationem, adipisci, optio..</p>
										<ul>
											<li><span><i class="fa fa-home"></i></span> <strong>Address:</strong>Buddhanagar, Ktm , Nepal</li>
											<li><span><i class="fa fa-phone"></i></span> <strong>Phone:</strong>+977-1-XXXXXX/44XXXXXX</li>
											<li><span><i class="fa fa-fax"></i></span> <strong>Website:</strong>www.hilarioush.edu.np</li>
											<li><span><i class="fa fa-envelope"></i></span> <strong>Email:</strong>info@youremail.com</li>
										</ul>
									</div>
								</div>
								<div class="col-md-6">
									<div class="contact-img">
										<img src="images/myimg3.jpg" alt="" class="m-t-85">
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
										
										<div class="col-md-4" ><a href="http://placehold.it/1000x800" title=""><img src="images/contact-sidebar/1%20(5).jpg" alt="" /></a></div>
										<div class="col-md-4" ><a href="http://placehold.it/1000x800" title=""><img src="images/contact-sidebar/1%20(2).jpg" alt="" /></a></div>
										<div class="col-md-4" ><a href="http://placehold.it/1000x800" title=""><img src="images/contact-sidebar/1%20(3).jpg" alt="" /></a></div>
										<div class="col-md-4" ><a href="http://placehold.it/1000x800" title=""><img src="images/contact-sidebar/1%20(4).jpg" alt="" /></a></div>
										<div class="col-md-4" ><a href="http://placehold.it/1000x800" title=""><img src="images/contact-sidebar/1%20(5).jpg" alt="" /></a></div>
										<div class="col-md-4" ><a href="http://placehold.it/1000x800" title=""><img src="images/contact-sidebar/1%20(5).jpg" alt="" /></a></div>
									</div>
								</div>
							</div><!-- Widget -->	
							                    
                                                    <div class="title">
							<h4>Send Us Message</h4>
						</div>
						<div class="comment-form center">
<!--							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enm minim veniam, quis nostrud exercitation ullamco.</p>-->
							<div id="message"></div>
							<form class="input-fields" method="post" action="http://themes.webinane.com/hotel-room/contact.php" name="contactform" id="contactform">
								<div class="row">
									<div class="col-md-12"><input id="name" name="name" type="text" placeholder="Complete Name *"></div>
									<div class="col-md-12"><input id="email" name="email" type="email" placeholder="Email Address *"></div>
									<div class="col-md-12"><input type="text" placeholder="Website"></div>
									<div class="col-md-12"><textarea id="comments" name="comments" placeholder="Enter Your Message"></textarea></div>
									<div class="col-md-12"><button id="submit" class="book-now submit" type="submit">Submit Now</button></div>
								</div>												
							</form>
						</div>
						
														
							
							
						</div>
					</aside>
				</div>
			</div>
		</div>
	</section>
    
    
    
   {% endblock %}