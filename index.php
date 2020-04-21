<?php
     $page = 'one';      
	 require_once('header.php');
	 require_once('info.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>About - iamahad</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="vCard template project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.2/bootstrap.min.css">
<link href="plugins/font-awesome-5.13.0/css/all.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/mCustomScrollbar/jquery.mCustomScrollbar.css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
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
					<div class="main_subtitle">Technology enthusiast</div>
					<div class="main_title">S.n. Ahad</div>
				</div>
				<div class="main_content_scroll mCustomScrollbar" data-mcs-theme="minimal-dark">
					<div class="about_content">
						<div class="about_title">Description</div>
						<div class="about_text">
							<p>Hello, welcome to my personal website. My full name is Mohammad Shiblee Noman Ahad. Ooh! That's a lots of words. Ahad is fine <i class="fas fa-grin-alt" aria-hidden="true"></i>. I'm a tech geek with lot's of ambitions. Love to solve problems. Very much patient, polite and eager to learn new things. Would love to help in technology and stuffs!<br> Coffee <i class="fas fa-mug-hot"></i> and Coding <i class="fas fa-code"></i> is my kind of drugs <i class="fas fa-cannabis"></i>.</p>
						</div>

						<!-- Loaders -->

						<div class="loaders clearfix">

							<!-- Loader -->
							<div class="loader_container">
								<div class="loader" data-perc="0.75"></div>
								<div class="loader_content text-center">
									<div class="loader_title">intuition</div>
									<div class="loader_subtitle">Yes, it is a gift.</div>
								</div>
							</div>
							
							<!-- Loader -->
							<div class="loader_container">
								<div class="loader" data-perc="0.83"></div>
								<div class="loader_content text-center">
									<div class="loader_title">creativity</div>
									<div class="loader_subtitle">Depends on your choice.</div>
								</div>
							</div>

							<!-- Loader -->
							<div class="loader_container">
								<div class="loader" data-perc="0.25"></div>
								<div class="loader_content text-center">
									<div class="loader_title">pure luck</div>
									<div class="loader_subtitle">Can't deny it.</div>
								</div>
							</div>

							<!-- Loader -->
							<div class="loader_container">
								<div class="loader" data-perc="0.95"></div>
								<div class="loader_content text-center">
									<div class="loader_title">awesomeness</div>
									<div class="loader_subtitle">That's my style of work.</div>
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
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/progressbar/progressbar.js"></script>
<script src="plugins/mCustomScrollbar/jquery.mCustomScrollbar.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/custom.js"></script>
</body>
</html>