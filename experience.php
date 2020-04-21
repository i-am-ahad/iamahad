<?php
     $page = 'four';      
	 require_once('header.php');
	 require_once('info.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Experience - iamahad</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="vCard template project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.2/bootstrap.min.css">
<link href="plugins/font-awesome-5.13.0/css/all.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/mCustomScrollbar/jquery.mCustomScrollbar.css">
<link rel="stylesheet" type="text/css" href="styles/experience.css">
<link rel="stylesheet" type="text/css" href="styles/experience_responsive.css">
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
					<div class="main_subtitle">What I am good at</div>
					<div class="main_title">My Experience</div>
				</div>
				<div class="main_content_scroll mCustomScrollbar" data-mcs-theme="minimal-dark">
					
					<!-- Experience -->

					<div class="experience">
						
						<!-- Experience Item -->
						<div class="exp_item d-flex flex-md-row flex-column align-items-start justify-content-start">
							<div><div class="exp_time">2016-Present</div></div>
							<div class="exp_content">
								<div class="exp_title_container">
									<div class="exp_title">Freelance Developer</div>
									<div class="exp_subtitle">Fiverr, Freelancer.com</div>
								</div>
								<div class="exp_text">
									<p>Work from home is my motto from a very long time. Working in this two marketplace since the beginning. Working in web design, web development, mobile apps and linux scripts projects.</p>
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

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap-4.1.2/popper.js"></script>
<script src="styles/bootstrap-4.1.2/bootstrap.min.js"></script>
<script src="plugins/mCustomScrollbar/jquery.mCustomScrollbar.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/experience.js"></script>
</body>
</html>