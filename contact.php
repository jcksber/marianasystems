<?php 
	$title = 'Mariana Systems - Contact';
	include('_header.php');

	include('_asset-nav.php');
?>

<section class="height-80 imagebg section-hero-1 bg--primary" data-overlay="7" style="padding:0; height: 80%; min-height: 310px;">
	<div class="background-image-holder">
		<img alt="image" src="img/home5.jpg" />
	</div>
	<div class="container pos-vertical-center" id="contact-push">
		<div class="row">
			<div class="col-sm-12" style="margin-top:3em;">
				<h1 style="margin-top: 20px;">
						Born in Chicago,
					<br class="hidden-xs" /> Engaged Globally
				</h1>
				<a href="services-listing.html" class="btn btn--white btn--transparent"></a>
			</div>
		</div>
	</div>
</section>
<section class="section-contact-1">
	<div class="container">
		<div class="row">
			<div class="col-md-5 col-md-offset-1 col-sm-6">
				<img alt="Image" src="img/contact1.jpg" />
				<address>
					Mariana Systems <br />
					200 W Monroe St #1330 <br />
					Chicago, IL, 60606<br />
				</address>
				<a href="mailto:hello@marianasystems.com"><h4>hello@marianasystems.com</h4></a>
				<h4>(312) 448-9750</h4>
			</div>
			<div class="col-md-5">
				<form class="form-email" data-success="Thanks, we'll be in touch shortly." data-error="Please fill all fields correctly.">
					<h6 class="text-center">Request A Demo</h6>
					<hr>
					<div class="form-body">
						<div class="col-md-6">
							<label>Name:</label>
							<input class="validate-required" type="text" name="name" placeholder="Type Your Name" />
						</div>
						<div class="col-md-6">
							<label>Email Address:</label>
							<input class="validate-required validate-email" type="email" name="email" placeholder="Type Your Email" />
						</div>
						<div class="col-sm-12">
							<label>Your Message:</label>
							<textarea class="validate-required" name="message" placeholder="Type your message" rows="4"></textarea>
						</div>
						<div class="text-center">
							<button type="submit" class="btn">
								<span class="btn__text">Send Your Inquiry</span>
							</button>
						</div>
					</div>
				</form>
			</div>
		</div><!--end of row-->
	</div><!--end of container-->
</section>
<section class="section-map">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-10 col-md-offset-1">
				<div class="map-container" data-maps-api-key="AIzaSyCfo_V3gmpPm1WzJEC9p_sRbgvyVbiO83M" data-address="200 W Monroe St #1330, Chicago, IL, 6060" data-marker-title="Partner"></div>
			</div>
		</div><!--end of row-->
	</div><!--end of container-->
</section>
<?php 
	include('_asset-footer.php'); 
	include('_footer.php');
?>