<?php
require_once('social.php');
$info=<<<EOD
<div class="general_info d-flex flex-xl-column flex-md-row flex-column">
<div>
    <div class="general_info_image">
        <div class="background_image" style="background-image:url(images/smith.jpg)"></div>
        <div class="header_button_2">
            <a href="#">Available for freelance work</a>
            <div class="d-flex flex-column align-items-center justify-content-center"><img src="images/download.png" alt=""></div>
        </div>
    </div>
</div>
<div class="general_info_content">
    <div class="general_info_content_inner mCustomScrollbar" data-mcs-theme="minimal-dark">
        <div class="general_info_title">General Information</div>
        <ul class="general_info_list">
            <li class="d-flex flex-row align-items-center justify-content-start">
                <div class="general_info_icon d-flex flex-column align-items-start justify-content-center"><img src="images/icon_1.png" alt=""></div>
                <div class="general_info_text">Name: <span>S.n. Ahad</span></div>
            </li>
            <li class="d-flex flex-row align-items-center justify-content-start">
                <div class="general_info_icon d-flex flex-column align-items-start justify-content-center"></div>
                <div class="general_info_text">Location: <span>Dhaka Bangladesh</span></div>
            </li>
            <li class="d-flex flex-row align-items-center justify-content-start">
                <div class="general_info_icon d-flex flex-column align-items-start justify-content-center"><img src="images/icon_2.png" alt=""></div>
                <div class="general_info_text">Date of Birth: <span>November 06</span></div>
            </li>
            <li class="d-flex flex-row align-items-center justify-content-start">
                <div class="general_info_icon d-flex flex-column align-items-start justify-content-center"><img src="images/icon_3.png" alt=""></div>
                <div class="general_info_text"><a href="mailto:hello@iamahad.com?subject=Job_Inquiry">hello@iamahad.com</a></div>
            </li>
        </ul>

        <!-- Social -->
        $social
    </div>
</div>
</div>
EOD;
?>