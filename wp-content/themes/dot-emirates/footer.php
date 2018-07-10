<?php
$opts = get_option("de_opts");
?>


<footer id="footer">
    <div class="gridContainer">

        <div class="one menu">
            <ul>
                <li><a href="<?php echo home_url( '/about/' )?>">عن دوت إمارات</a></li>
                <li><a href="<?php echo home_url( '/contactus/' )?>">إتصل بنا</a></li>
                <li><a href="<?php echo home_url( '/terms/' )?>">شروط وأحكام</a></li>
                <li><a href="#">أبلغ عن خطأ</a></li>
                <li><a href="<?php echo home_url( '/privacy/' )?>">إتفاقية الخصوصية</a></li>
                <li><a href="#">تصويبات وتوضيحات</a></li>
                <li><a href="<?php echo home_url( '/agreements/' )?>">إتفاقية ملفات الإوتباط</a></li>
                <li><a href="#">الشكاوي والإقتراحات</a></li>
                <li><a href="<?php echo home_url( '/faq/' )?>">الأسئلة الشائعة</a></li>
                <li><a href="#">خريطة الموقع</a></li>
            </ul>
        </div>
        <div class="one subscribe textCentered">
            <div class="logo"><img src="<?php echo $opts['logo'] ?>" alt=""></div>
            <div class="mainSocial">
                <a href="http://<?php echo $opts['telegram'] ?>"><i class="icon-telegram"></i></a>
                <a href="http://<?php echo $opts['twitter'] ?>"><i class="icon-twitter"></i></a>
                <a href="http://<?php echo $opts['facebook'] ?>"><i class="icon-facebook"></i></a>
            </div>
            <div class="verticalLine"></div>
            <div class="subscribeForm">
                <div class="title">القائمة البريدية</div>
                <form action="#">
                    <input type="emial" class="emailInp" placeholder="البريد الإلكتروني">
                    <input type="submit" value="إشتراك">
                </form>
            </div>
        </div>
        <div class="one applications">
            <div class="text">
                <div>حمل تطبيق  دوت إمارات </div>
                <div class="links">
                    <a href="http://<?php echo $opts['apple'] ?>"><i class="icon-apple"></i></a>
                    <a href="http://<?php echo $opts['android'] ?>"><i class="icon-android"></i></a>
                    <a href="http://<?php echo $opts['windows'] ?>"><i class="icon-windows"></i></a>
                </div>
            </div>
            <div class="img">
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/application.png" alt="">
            </div>
        </div>

    </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
