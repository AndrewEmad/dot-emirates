<?php $opts = get_option('de_opts') ?>

<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">

<title><?php bloginfo('name') ?></title>

<?php wp_head(); ?>
<!-- <link rel="shortcut icon" href="images/favicon.ico" /> -->

</head>
<body class="">

	<header id="header">
	
		<div class="top ">
			<div class="gridContainer clearfix">
                <h1 class="logo pullRight"><img src="<?php echo $opts['logo'] ?>" alt=""></h1>
				<div class="leftArea pullLeft">
				
					<div class="one search">
						<div class="icon"><i class="icon-search"></i></div>
					</div>
					<div class="one mainSocial">
						<a href="http://<?php echo $opts['telegram'] ?>"><i class="icon-telegram"></i></a>
						<a href="http://<?php echo $opts['twitter'] ?>"><i class="icon-twitter"></i></a>
						<a href="http://<?php echo $opts['facebook'] ?>"><i class="icon-facebook"></i></a>
					</div>
					<div class="one widgets clearfix">
                        <a href="<?php echo home_url( '/widgets/' )?>">
                            <div class="oneWidget">
                                <span class="icon"><i class="icon-economy"></i></span>
                            </div>
                        </a>
						<a href="<?php echo home_url( '/widgets/' )?>">
                            <div class="oneWidget">
							    <span class="icon"><i class="icon-weather"></i></span>
						    </div>
                        </a>
                        <a href="<?php echo home_url( '/widgets/' )?>">
                            <div class="oneWidget">
                                <span class="icon"><i class="icon-pray"></i></span>
                            </div>
                        </a>
                        <a href="<?php echo home_url( '/widgets/' )?>">
                            <div class="oneWidget">
                                <span class="icon"><i class="icon-currencies"></i></span>
                            </div>
                        </a>
                        <a href="<?php echo home_url( '/widgets/' )?>">
                            <div class="oneWidget">
                                <span class="icon"><i class="icon-gas"></i></span>
                            </div>
                        </a>
					</div>
					<div class="one"><a href="#">EN</a></div>

					
				</div>
			</div>
		</div>
		
		<nav id="navigation">
			<div class="gridContainer clearfix">
				<div class="menuIcon"><div><span></span><span></span><span></span></div><span class="text">القائمة</span></div>
				<div class="theMenu relative">

					<?php wp_nav_menu(array(
					        'theme-location'             => 'primary',
                            'container'                  => false

                    )) ?>


                    <div class="seeMore" onClick="sliceMenu()"><i class="icon-arrow-right"></i> <span>المزيد</span><span class="back">الرجوع</span></div>
				</div>
				
			</div>
		</nav>
		
	</header>