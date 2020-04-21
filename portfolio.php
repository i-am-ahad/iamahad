<?php
     $page = 'six';      
	 require_once('header.php');
	 require_once('info.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Portfolio - iamahad</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="vCard template project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.2/bootstrap.min.css">
<link href="plugins/font-awesome-5.13.0/css/all.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/mCustomScrollbar/jquery.mCustomScrollbar.css">
<link rel="stylesheet" type="text/css" href="styles/portfolio.css">
<link rel="stylesheet" type="text/css" href="styles/portfolio_responsive.css">
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
					<div class="main_subtitle">My work showcase</div>
					<div class="main_title">My Portfolio</div>
				</div>

				<!-- Sorting -->
				<div class="portfolio_categories button-group filters-button-group">
					<ul>
						<li class="portfolio_category active is-checked" data-filter="*">All</li>
						<li class="portfolio_category" data-filter=".p_design">Design</li>
						<li class="portfolio_category" data-filter=".p_photography">Photography</li>
						<li class="portfolio_category" data-filter=".p_brand">Brand Identity</li>
					</ul>
				</div>

				<div class="main_content_scroll mCustomScrollbar" data-mcs-theme="minimal-dark">
					<div class="portfolio_grid grid clearfix">

						<!-- Portfolio Item -->
						<div class="grid-item portfolio_item p_design">
							<img src="images/portfolio_1.jpg" alt="">
							<div class="portfolio_item_content d-flex flex-column align-items-center justify-content-center">
								<div class="portfolio_item_title">Design</div>
								<div class="portfolio_item_link"><a href="#">See More</a></div>
							</div>
						</div>

						<!-- Portfolio Item -->
						<div class="grid-item portfolio_item p_photography">
							<img src="images/portfolio_2.jpg" alt="">
							<div class="portfolio_item_content d-flex flex-column align-items-center justify-content-center">
								<div class="portfolio_item_title">Photography</div>
								<div class="portfolio_item_link"><a href="#">See More</a></div>
							</div>
						</div>

						<!-- Portfolio Item -->
						<div class="grid-item portfolio_item p_brand">
							<img src="images/portfolio_3.jpg" alt="">
							<div class="portfolio_item_content d-flex flex-column align-items-center justify-content-center">
								<div class="portfolio_item_title">Brand Identity</div>
								<div class="portfolio_item_link"><a href="#">See More</a></div>
							</div>
						</div>

						<!-- Portfolio Item -->
						<div class="grid-item portfolio_item p_design">
							<img src="images/portfolio_4.jpg" alt="">
							<div class="portfolio_item_content d-flex flex-column align-items-center justify-content-center">
								<div class="portfolio_item_title">Design</div>
								<div class="portfolio_item_link"><a href="#">See More</a></div>
							</div>
						</div>

						<!-- Portfolio Item -->
						<div class="grid-item portfolio_item p_photography">
							<img src="images/portfolio_5.jpg" alt="">
							<div class="portfolio_item_content d-flex flex-column align-items-center justify-content-center">
								<div class="portfolio_item_title">Photography</div>
								<div class="portfolio_item_link"><a href="#">See More</a></div>
							</div>
						</div>

						<!-- Portfolio Item -->
						<div class="grid-item portfolio_item p_brand">
							<img src="images/portfolio_6.jpg" alt="">
							<div class="portfolio_item_content d-flex flex-column align-items-center justify-content-center">
								<div class="portfolio_item_title">Brand Identity</div>
								<div class="portfolio_item_link"><a href="#">See More</a></div>
							</div>
						</div>

						<!-- Portfolio Item -->
						<div class="grid-item portfolio_item p_brand">
							<img src="images/portfolio_6.jpg" alt="">
							<div class="portfolio_item_content d-flex flex-column align-items-center justify-content-center">
								<div class="portfolio_item_title">Brand Identity</div>
								<div class="portfolio_item_link"><a href="#">See More</a></div>
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
<script src="plugins/Isotope/isotope.pkgd.min.js"></script>
<script src="plugins/Isotope/fitcolumns.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/portfolio.js"></script>
</body>
</html>