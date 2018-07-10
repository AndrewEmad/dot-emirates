<?php
get_header();
?>


    <div class="inContent">
    <div class="gridContainer">

    <div class="aboutPages">

    <div class="top textCentered">
        <img src="<?php echo get_template_directory_uri() ?>/assets/images/callus.png" alt="">
        <div>إتصل بنا</div>
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
<?php
$page = get_page_by_title( 'contactus' );
?>
   <div class="mrgBtm clearfix">
        <div class="myrow clearfix">
            <div class="mycol-lg-6">
                <form action="#" class="mrgBtm-lg">
                    <div class="myrow clearfix">
                        <div class="mycol-lg-12">
                            <select class="formItem mrgBtm">
                                <option value="0">اتصل بنا</option>
                                <option value="1">اتصل بنا</option>
                                <option value="2">اتصل بنا</option>
                                <option value="3">اتصل بنا</option>
                            </select>
                        </div>
                        <div class="mycol-sm-6">
                            <input type="text" class="formItem mrgBtm" placeholder="الإسم">
                        </div>
                        <div class="mycol-sm-6">
                            <input type="text" class="formItem mrgBtm" placeholder="البريد الإلكتروني">
                        </div>
                        <div class="mycol-sm-6">
                            <input type="text" class="formItem mrgBtm" placeholder="الهاتف الجوال">
                        </div>
                        <div class="mycol-sm-6">
                            <input type="text" class="formItem mrgBtm" placeholder="المكان">
                        </div>
                        <div class="mycol-lg-12">
                            <textarea class="formItem textarea mrgBtm" placeholder="الرسالة"></textarea>
                            <input type="submit" class="formItem submit" value="إرسال">
                        </div>
                    </div>
                </form>
            </div>
            <div class="mycol-lg-6 ">
                <div class="mrgBtm-lg">
                    <div class="brand-color mrgBtm-md">للتواصل والمعلومات</div>
                    <a href="#"><?php echo get_post_meta(get_the_ID(), 'info-email', TRUE);?></a>
                </div>
                <div class="mrgBtm-lg">
                    <div class="brand-color mrgBtm-md">للشئون التحريرية</div>
                    <a href="#"><?php echo get_post_meta(get_the_ID(), 'writing-email', TRUE);?></a>
                </div>
                <div class="mrgBtm-lg">
                    <div class="brand-color mrgBtm-md">للإعلانات</div>
                    <a href="#"><?php echo get_post_meta(get_the_ID(), 'ads-email', TRUE);?></a>
                </div>
            </div>
        </div>
    </div>
<?php include('about-footer.php') ?>