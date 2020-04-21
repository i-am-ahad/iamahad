<?php
     $page = 'three';      
	 require_once('header.php');
	 require_once('info.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Services - iamahad</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="vCard template project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.2/bootstrap.min.css">
<link href="plugins/font-awesome-5.13.0/css/all.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/mCustomScrollbar/jquery.mCustomScrollbar.css">
<link rel="stylesheet" type="text/css" href="styles/services.css">
<link rel="stylesheet" type="text/css" href="styles/services_responsive.css">
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
					<div class="main_subtitle">What can I do</div>
					<div class="main_title">My Services</div>
				</div>
				<div class="main_content_scroll mCustomScrollbar" data-mcs-theme="minimal-dark">
					
					<!-- Services -->

					<div class="services">
						<div class="services_container d-flex flex-row flex-wrap align-items-start justify-content-start">

							<!-- Service -->
							<div class="service">
								<div class="service_title_container d-flex flex-row align-items-center justify-content-start">
									<div><div class="service_icon"><img src="images/icon_10.png" alt=""></div></div>
									<div class="service_title">Fast coding service</div>
								</div>
								<div class="service_text">
									<p>Fast development of web application, desktop software or mobile apps. Communication through slack is much preferable.</p>
								</div>
							</div>

							<!-- Service -->
							<div class="service">
								<div class="service_title_container d-flex flex-row align-items-center justify-content-start">
									<div><div class="service_icon"><img src="images/icon_11.png" alt=""></div></div>
									<div class="service_title">Documentations</div>
								</div>
								<div class="service_text">
									<p>A good documentation is always best for a continuous development. Even it is a little bit monotonous.</p>
								</div>
							</div>

							<!-- Service -->
							<div class="service">
								<div class="service_title_container d-flex flex-row align-items-center justify-content-start">
									<div><div class="service_icon"><img src="images/icon_12.png" alt=""></div></div>
									<div class="service_title">Online presentations</div>
								</div>
								<div class="service_text">
									<p>A good presentation is very much preferable to start a new project and convince clients.</p>
								</div>
							</div>

							<!-- Service -->
							<div class="service">
								<div class="service_title_container d-flex flex-row align-items-center justify-content-start">
									<div><div class="service_icon"><img src="images/icon_13.png" alt=""></div></div>
									<div class="service_title">Online shops</div>
								</div>
								<div class="service_text">
									<p>Need a online shop to manage your inventory and sales? I'm good to go. Ask for any types of web application or desktop software.</p>
								</div>
							</div>

							<!-- Service -->
							<div class="service">
								<div class="service_title_container d-flex flex-row align-items-center justify-content-start">
									<div><div class="service_icon"><img src="images/icon_14.png" alt=""></div></div>
									<div class="service_title">P2P Desktop Sharing</div>
								</div>
								<div class="service_text">
									<p>Facing problems with your application or need to understand the timeline of any project? Contact me.</p>
								</div>
							</div>

							<!-- Service -->
							<div class="service">
								<div class="service_title_container d-flex flex-row align-items-center justify-content-start">
									<div><div class="service_icon"><img src="images/icon_15.png" alt=""></div></div>
									<div class="service_title">Design Mockup (UI/UX)</div>
								</div>
								<div class="service_text">
									<p>Development is very hard without a good design. I can design an applicaton for best User Experience.</p>
								</div>
							</div>

						</div>
						
						<!-- Quote Button -->
						<div class="services_button"><a href="#">Ask for a Quote</a></div>

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
<script src="js/services.js"></script>
</body>
</html>