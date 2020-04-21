<?php
     $page = 'eight';      
	 require_once('header.php');
	 require_once('info.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Contact - iamahad</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="vCard template project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.2/bootstrap.min.css">
<link href="plugins/font-awesome-5.13.0/css/all.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/mCustomScrollbar/jquery.mCustomScrollbar.css">
<link rel="stylesheet" type="text/css" href="styles/contact.css">
<link rel="stylesheet" type="text/css" href="styles/contact_responsive.css">
<link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png">
<link rel="manifest" href="/site.webmanifest">
</head>
<body>

<div class="super_container">
	
	<!-- Header -->

	<?php echo $head?>

	<div class="content_container">
		<div class="main_content_outer d-flex flex-xl-row flex-column align-items-start justify-content-start">

			<!-- General Information -->
			
			<?php echo $info?>

			<!-- Main Content -->

			<div class="main_content">
				<div class="main_title_container d-flex flex-column align-items-start justify-content-end">
					<div class="main_subtitle">Connect with me</div>
					<div class="main_title">Contact me</div>
				</div>
				<div class="main_content_scroll mCustomScrollbar" data-mcs-theme="minimal-dark">
					
					<!-- Contact -->

					<div class="contact">
						<div class="container-fluid">
							<div class="row">
								
								<!-- Contact Form -->
								<div class="col-xl-6">
									<div class="contact_text">
										<p>Want to discuss about any new or ongoing project? Fill the form or send me an email. If you're individual you can send direct message in telegram or you can join discord channel</p>
									</div>
									<div class="contact_form_container">
										<form action="#" id="contact_form" class="contact_form clearfix">
											<div><input type="text" class="contact_input" placeholder="Name" required="required"></div>
											<div><input type="email" class="contact_input" placeholder="E-mail" required="required"></div>
											<input type="text" class="contact_input" placeholder="Subject" required="required">
											<textarea class="contact_input contact_textarea" placeholder="Message" required="required"></textarea>
											<button class="contact_button">Send Message</button>
										</form>
									</div>
								</div>

								<!-- Contact Map -->
								<div class="col-xl-6">
								<p>You can join the community</p><br>
								<iframe src="https://discordapp.com/widget?id=700777672741224478&theme=dark" width="350" height="500" allowtransparency="true" frameborder="0"></iframe>
										
										
									</div>
								</div>

							</div>
						</div>
					</div>
				</div>
					
			</div>
		</div>
<div align='center'>
			Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved
		</div>
		
	</div>
</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap-4.1.2/popper.js"></script>
<script src="styles/bootstrap-4.1.2/bootstrap.min.js"></script>
<script src="plugins/mCustomScrollbar/jquery.mCustomScrollbar.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
<script src="js/contact.js"></script>
</body>
</html>