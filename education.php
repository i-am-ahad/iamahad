<?php
     $page = 'five';      
	 require_once('header.php');
	 require_once('info.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Education - iamahad</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="vCard template project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.2/bootstrap.min.css">
<link href="plugins/font-awesome-5.13.0/css/all.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/mCustomScrollbar/jquery.mCustomScrollbar.css">
<link rel="stylesheet" type="text/css" href="styles/education.css">
<link rel="stylesheet" type="text/css" href="styles/education_responsive.css">
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
					<div class="main_subtitle">Where did I studied</div>
					<div class="main_title">My Education</div>
				</div>
				<div class="main_content_scroll mCustomScrollbar" data-mcs-theme="minimal-dark">
					
					<!-- Education -->

					<div class="education">
						
						<!-- Education Item -->
						<div class="edu_item d-flex flex-lg-row flex-column align-items-start justfy-content-start">
							<div><div class="edu_year">Present</div></div>
							<div><div class="edu_image"><img src="images/edu_1.png" alt=""></div></div>
							<div class="edu_content">
								<div class="edu_title_container">
									<div class="edu_title">American International University Bangladesh</div>
									<div class="edu_subtitle">Computer Science and Engineering, Bachelor's</div>
								</div>
								<div class="edu_text">
									<p>Started my education in bachelor's degree in cse from 2017 to present. I choose my career path as an computer science engineer because of my passion about technology.</p>
								</div>
							</div>
						</div>

						<!-- Education Item -->
						<div class="edu_item d-flex flex-lg-row flex-column align-items-start justfy-content-start">
							<div><div class="edu_year">2016</div></div>
							<div><div class="edu_image"><img src="images/edu_2.png" alt=""></div></div>
							<div class="edu_content">
								<div class="edu_title_container">
									<div class="edu_title">Chittagong Cantonment Public Collage</div>
									<div class="edu_subtitle">Higher Secondary Certificate</div>
								</div>
								<div class="edu_text">
									<p>Completed my Higher Secondary Certificate exam in science and completed in 2016. Study Year (2014 - 2016).</p>
								</div>
							</div>
						</div>

						<!-- Education Item -->
						<div class="edu_item d-flex flex-lg-row flex-column align-items-start justfy-content-start">
							<div><div class="edu_year">2014</div></div>
							<div><div class="edu_image"><img src="images/edu_3.png" alt=""></div></div>
							<div class="edu_content">
								<div class="edu_title_container">
									<div class="edu_title">Nasirabad Govt. High School</div>
									<div class="edu_subtitle">Secondary School Certificate</div>
								</div>
								<div class="edu_text">
									<p>Completed my Secondary School Certificate exam in science and completed in 2014. Study Year (2012 - 2014).</p>
								</div>
							</div>
						</div>

						<!-- Education Item -->
						<div class="edu_item d-flex flex-lg-row flex-column align-items-start justfy-content-start">
							<div><div class="edu_year">2011</div></div>
							<div><div class="edu_image"><img src="images/edu_3.png" alt=""></div></div>
							<div class="edu_content">
								<div class="edu_title_container">
									<div class="edu_title">Nasirabad Govt. High School</div>
									<div class="edu_subtitle">Junior School Certificate</div>
								</div>
								<div class="edu_text">
									<p>Completed my Junior School Certificate exam in 2016. Study Year (2011).</p>
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
<script src="js/education.js"></script>
</body>
</html>