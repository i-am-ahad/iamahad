<?php
     $page = 'two';      
	 require_once('header.php');
	 require_once('info.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Skills - iamahad</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="vCard template project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.2/bootstrap.min.css">
<link href="plugins/font-awesome-5.13.0/css/all.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/mCustomScrollbar/jquery.mCustomScrollbar.css">
<link rel="stylesheet" type="text/css" href="styles/skills.css">
<link rel="stylesheet" type="text/css" href="styles/skills_responsive.css">
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
					<div class="main_title">My Skills</div>
				</div>
				<div class="main_content_scroll mCustomScrollbar" data-mcs-theme="minimal-dark">

					<!-- Skills Content -->
					<div class="skills">
						<div class="skills_text">
							<div class="container-fluid">
								<div class="row">
									<div class="col-xl-12">
										<p>Here are some lists of items I've learned so far.<br> I love to try new things. </p>
									</div>							
								</div>
							</div>
						</div>

						<!-- Progress Bars -->
						<div class="progress_bars">
							<div class="container-fluid">
								<div class="row">

									<!-- Progress Bar -->
									<div class="col-xl-4 col-lg-6 pb_col">
										<div class="pb_item">
											<div class="p_bar_title">Mobile App Development (Flutter)</div>
											<div id="skill_1_pbar" class="skill_bars" data-perc="0.70" data-name="skill_1_pbar" data-color-start="#79ccff" data-color-end="#9b74ff"></div>
										</div>
									</div>

									<!-- Progress Bar -->
									<div class="col-xl-4 col-lg-6 pb_col">
										<div class="pb_item">
											<div class="p_bar_title">Linux / UNIX</div>
											<div id="skill_2_pbar" class="skill_bars" data-perc="0.80" data-name="skill_2_pbar" data-color-start="#ff4646" data-color-end="#ff26d9"></div>
										</div>
									</div>

									<!-- Progress Bar -->
									<div class="col-xl-4 col-lg-6 pb_col">
										<div class="pb_item">
											<div class="p_bar_title">Frameworks (Laravel Wordpress Bootstrap)</div>
											<div id="skill_3_pbar" class="skill_bars" data-perc="0.75" data-name="skill_3_pbar" data-color-start="#0054ff" data-color-end="#ff23d3"></div>
										</div>
									</div>

									<!-- Progress Bar -->
									<div class="col-xl-4 col-lg-6 pb_col">
										<div class="pb_item">
											<div class="p_bar_title">Design / UI-UX (Photoshop Illustrator XD)</div>
											<div id="skill_4_pbar" class="skill_bars" data-perc="1.0" data-name="skill_4_pbar" data-color-start="#79ff7c" data-color-end="#ffbd4a"></div>
										</div>
									</div>

									<!-- Progress Bar -->
									<div class="col-xl-4 col-lg-6 pb_col">
										<div class="pb_item">
											<div class="p_bar_title">Languages (C C++ Python JAVA Dart)</div>
											<div id="skill_5_pbar" class="skill_bars" data-perc="0.90" data-name="skill_5_pbar" data-color-start="#79ff8f" data-color-end="#7b74ff"></div>
										</div>
									</div>

									<!-- Progress Bar -->
									<div class="col-xl-4 col-lg-6 pb_col">
										<div class="pb_item">
											<div class="p_bar_title">Web Development (HTML CSS JAVASCRIPT PHP)</div>
											<div id="skill_6_pbar" class="skill_bars" data-perc="0.80" data-name="skill_6_pbar" data-color-start="#ff2d72" data-color-end="#ffab79"></div>
										</div>
									</div>
									<!-- Progress Bar -->
									<div class="col-xl-4 col-lg-6 pb_col">
										<div class="pb_item">
											<div class="p_bar_title">VCS (Git Github)</div>
											<div id="skill_7_pbar" class="skill_bars" data-perc="0.85" data-name="skill_7_pbar" data-color-start="#9b74ff" data-color-end="#ffab79"></div>
										</div>
									</div>
									<!-- Progress Bar -->
									<div class="col-xl-4 col-lg-6 pb_col">
										<div class="pb_item">
											<div class="p_bar_title">Markup Language (MD YAML XML)</div>
											<div id="skill_8_pbar" class="skill_bars" data-perc="0.80" data-name="skill_8_pbar" data-color-start="#9b74ff" data-color-end="#ffab79"></div>
										</div>
									</div>
									<!-- Progress Bar -->
									<div class="col-xl-4 col-lg-6 pb_col">
										<div class="pb_item">
											<div class="p_bar_title">Google Cloud Service (GCS)</div>
											<div id="skill_9_pbar" class="skill_bars" data-perc="0.70" data-name="skill_9_pbar" data-color-start="#79ff8f" data-color-end="#ffab79"></div>
										</div>
									</div>
									<div class="col-xl-4 col-lg-6 pb_col">
										<div class="pb_item">
											<div class="p_bar_title">Database (SQL noSQL)</div>
											<div id="skill_10_pbar" class="skill_bars" data-perc="0.70" data-name="skill_10_pbar" data-color-start="#79ccff" data-color-end="#9b74ff"></div>
										</div>
									</div>

								</div>
							</div>
						</div>

						<!-- Milestones -->

						<div class="milestones clearfix">
							
							<!-- Milestone -->
							<div class="milestone text-center">
								<div class="milestone_icon"><img src="images/icon_6.png" alt=""></div>
								<div class="milestone_counter" data-end-value="6">0</div>
								<div class="milestone_text">Years of Experience</div>
							</div>

							<!-- Milestone -->
							<div class="milestone text-center">
								<div class="milestone_icon"><img src="images/icon_7.png" alt=""></div>
								<div class="milestone_counter" data-end-value="200" data-sign-before="+">0</div>
								<div class="milestone_text">Happy Clients</div>
							</div>

							<!-- Milestone -->
							<div class="milestone text-center">
								<div class="milestone_icon"><img src="images/icon_8.png" alt=""></div>
								<div class="milestone_counter" data-end-value="1" data-sign-after="k">0</div>
								<div class="milestone_text">Followers on FB</div>
							</div>

							<!-- Milestone -->
							<div class="milestone text-center">
								<div class="milestone_icon"><img src="images/icon_9.png" alt=""></div>
								<div class="milestone_counter" data-end-value="250">0</div>
								<div class="milestone_text">Finished Projects</div>
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
<script src="js/skills.js"></script>
</body>
</html>