<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		
		<meta name="viewport" content="width=devvice-width, initial-scale=1">
		
		<!-- bootstrap and jquery links -->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
		<link rel="stylesheet" type="text/css" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
		
		<!-- default stylesheet for each page -->
		<link rel="stylesheet" href="../css\template.css" type="text/css">
		<link rel="stylesheet" href="../css\contact.css" type="text/css">
		
		
	</head>
	
	<body>
	
		<!-- header & navbar -->
		<?php
			$path = $_SERVER['DOCUMENT_ROOT'];
			$path .= "/includes/header.php";
			include_once($path);
		?>

		<!--navbar -->
		<?php
			$path = $_SERVER['DOCUMENT_ROOT'];
			$path .= "/includes/nav.php";
			include_once($path);
		?>
		
		
		<!-- body -->
		<div id="body">
			
			<div class="container" id="map">
				<div class="row">
					<div class="col-xs-6">
						<h1>Our Location</h1>
						<p>	235-2323 32nd Avenue NE</br>
							Calgary, AB T2E 6Z3</p>
					</div>
					<div class="col-xs-6">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2506.512538773095!2d-114.0085688842247!3d51.080547949643375!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x537164e0c3b2c821%3A0x364978c39c1b8b48!2s2323+32+Ave+NE%2C+Calgary%2C+AB+T2E%2C+Canada!5e0!3m2!1sen!2sus!4v1467149329003" 
						width="100%" height="300" frameborder="0" style="border:0" 
						allowfullscreen>
					</iframe>
					</div>
				</div>
			</div>
			
			
			<h1 id="profile-title"> EXECUTIVE PARTNERS </h1>

			<div class="contact-profile top">
				<div class="row">
					<div class="col-xs-3">
						<img src="../images\members\art.jpg" class="img-circle" alt="Arturo Adviento" >
					</div>
					<div class="col-xs-6">
						<h2>Arturo Adviento</h2>
						<p>Phone: 403-607-6402 </br>
						Email: artadviento@gmail.com<p>
						
					</div>
				</div>
			</div>
			
			<div class="contact-profile">
				<div class="row">
					<div class="col-xs-3">
						<img src="../images\members\jun.jpg" class="img-circle" alt="Jun Cruz" >
					</div>
					
					<div class="col-xs-6">
						<h2>Jun Cruz</h2>
						<p>Phone: 403-651-7407 </br>
						Email: ecjuncruz@acmgroup.ca<p>
					</div>
				</div>
			</div>
			
			<div class="contact-profile bottom">
				<div class="row">
					<div class="col-xs-3">
						<img src="../images\members\alma.jpg" class="img-circle" alt="Alma Domingo" >
					</div>
					<div class="col-xs-6">
						<h2>Alma Domingo</h2>
						<p>Phone: 403-875-2031 </br>
						Email: alma.mingo@gmail.com<p>
					</div>
				</div>
			</div>
			
		</div>
		<!-- footer -->
		<div id="footer">
			<div class="footer-element">
				<h3>Contact Us</h3>
			</div>
			<div class="footer-element">
				<h3>Products & Services</h3>
			</div>
			<div class="footer-element">
				<h3>About Us</h3>
			</div>
		</div>
		
	</body>
	
	
</html>