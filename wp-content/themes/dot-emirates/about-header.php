<?php
get_header();


?>


<div class="inContent">
    <div class="gridContainer">

        <div class="aboutPages">

            <div class="top textCentered">
                <img src="<?php echo get_template_directory_uri()?>/assets/images/logo2.png" alt="">
                <div>عن دوت إمارات</div>
            </div>

            <div class="tabs textCentered">
                <div class="current">عن دوت إمارات <i class="icon-arrow-down"></i></div>
                <div class="in">
                    <a href="<?php echo home_url( '/terms/' )?>">شروط وأحكام</a>
                    <a href="<?php echo home_url( '/privacy/' )?>">إتفاقية الخصوصية</a>
                    <a href="<?php echo home_url( '/agreements/' )?>">إتفاقية ملفات الإوتباط</a>
                    <a href="<?php echo home_url( '/faq/' )?>">الأسئلة الشائعة</a>
                    <a href="<?php echo home_url( '/contactus/' )?>">إتصل بنا</a>
                </div>
            </div>

            <div class="content clearfix">