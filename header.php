<?php 
$one = ($page == 'one') ? 'class="active"' : '';
$two = ($page == 'two') ? 'class="active"' : '';
$three = ($page == 'three') ? 'class="active"' : '';
$four = ($page == 'four') ? 'class="active"' : '';
$five = ($page == 'five') ? 'class="active"' : '';
$six = ($page == 'six') ? 'class="active"' : '';
$seven = ($page == 'seven') ? 'class="active"' : '';
$eight = ($page == 'eight') ? 'class="active"' : '';

$head = <<<EOD
    <header class="header">
    <div class="header_content d-flex flex-row align-items-center justify-content-start">
        <div class="logo">iamahad<span>.</span>com</div>
        <div class="main_nav d-flex flex-row align-items-end justify-content-start">
            <ul class="d-flex flex-row align-items-center justify-content-start">
                <li $one><a href="index.php">About</a></li>
                <li $two><a href="skills.php">Skills</a></li>
                <li $three><a href="services.php">Services</a></li>
                <li $four><a href="experience.php">Experience</a></li>
                <li $five><a href="education.php">Education</a></li>
                <li $six><a href="portfolio.php">Portfolio</a></li>
                <li $seven><a href="testimonials.php">Testimonials</a></li>
                <li $eight><a href="contact.php">Contact</a></li>
            </ul>
            <div class="header_button ml-auto">
                <a href="#">Available for freelance work</a>
                <div class="d-flex flex-column align-items-center justify-content-center"><img src="images/download.png" alt=""></div>
            </div>
        </div>
        <!-- Menu -->
    <div class="menu">
    <div class="menu_content d-flex flex-row align-items-start justify-content-end">
        <div class="hamburger ml-auto">menu</div>
        <div class="menu_nav text-right">
            <ul>
                <li><a href="about.php">About</a></li>
                <li><a href="skills.php">Skills</a></li>
                <li><a href="services.php">Services</a></li>
                <li><a href="experience.php">Experience</a></li>
                <li><a href="education.php">Education</a></li>
                <li><a href="portfolio.php">Portfolio</a></li>
                <li><a href="testimonials.php">Testimonials</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </div>
    </div>
    </div>
    </div>
    </header>
EOD;
?>