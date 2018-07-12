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
	
	<div class="top">
		<div class="gridContainer relative clearfix">
			<h1 class="logo pullRight"><img src="<?php echo $opts['logo'] ?>" alt=""></h1>
			<div class="leftArea pullLeft">
			
				<div class="one search">
					<?php get_search_form() ?>
					</div>
					
				</div>
				<div class="one mainSocial">
					<a href="http://<?php echo $opts['telegram'] ?>"><i class="icon-telegram"></i></a>
					<a href="http://<?php echo $opts['twitter'] ?>"><i class="icon-twitter"></i></a>
					<a href="http://<?php echo $opts['facebook'] ?>"><i class="icon-facebook"></i></a>
				</div>
				<div class="one widgets relative clearfix">
					<div class="oneWidget">
						<span class="icon"><i class="icon-economy"></i></span>
						<div class="oneWidgetIn markets">
			
							<div class="theTitle">
								<i class="icon-economy"></i><span>الأسواق</span>
							</div>
							<hr>
							<div class="h-padding">
								<div class="tabs">
									<a href="#">DFMGI</a>
									<a href="#" class="active">ADI</a>
								</div>
								<div>
									<div class="font-4 v-padding ltrDir clearfix">
										<span class="pullLeft">4,519.58</span>
										<span class="pullRight brand-color">-0.09% -4</span>
									</div>
									<div class="graph"></div>
									<div class="font-medium tableDis tradingNums">
										<div class="oneCell">
											<div>حجم التداول</div>
											<div class="brand-color">381,870,534</div>
										</div>
										<div class="oneCell">
											<div>قيمة التداول</div>
											<div class="brand-color">381,870,534</div>
										</div>
										<div class="oneCell">
											<div>عدد العمليات</div>
											<div class="brand-color">381,870,534</div>
										</div>
									</div>
									<div class="dataBar clearfix">
										<div class="one" style="width: 40%;">
											<div>20</div>
											<div class="thebar"></div>
											<div>رابحه</div>
										</div>
										<div class="one" style="width: 20%;">
											<div>10</div>
											<div class="thebar"></div>
											<div>ثابته</div>
										</div>
										<div class="one" style="width: 40%;">
											<div>20</div>
											<div class="thebar"></div>
											<div>خاسره</div>
										</div>
									</div>
									<div class="brand-bg smallPadding textCentered white-color">الشركات المتداوله <span>83</span></div>
									<div class="mainPadding brand-color textCentered font-2 fontBold">الشركات الاكثر</div>
									<div class="tabs tabs2">
										<a href="#" class="active">ربحًا</a>
										<a href="#">خسارة</a>
										<a href="#">قيمة</a>
										<a href="#">كمية</a>
									</div>
									<div class="allCompanies">
										<div class="one tableDis">
											<div class="oneCell">اسمنت الاتحاد</div>
											<div class="oneCell">20</div>
											<div class="oneCell"><i class="icon-arrow-dir-up"></i></div>
										</div>
										<div class="one tableDis">
											<div class="oneCell">اسمنت الاتحاد</div>
											<div class="oneCell">20</div>
											<div class="oneCell"><i class="icon-arrow-dir-up"></i></div>
										</div>
										<div class="one tableDis">
											<div class="oneCell">اسمنت الاتحاد</div>
											<div class="oneCell">20</div>
											<div class="oneCell"><i class="icon-arrow-dir-up"></i></div>
										</div>
										<div class="one tableDis">
											<div class="oneCell">اسمنت الاتحاد</div>
											<div class="oneCell">20</div>
											<div class="oneCell"><i class="icon-arrow-dir-up"></i></div>
										</div><div class="one tableDis">
											<div class="oneCell">اسمنت الاتحاد</div>
											<div class="oneCell">20</div>
											<div class="oneCell"><i class="icon-arrow-dir-up"></i></div>
										</div>
									</div>
								</div>
							</div>

						</div>
					</div>
					<div class="oneWidget">
						<span class="icon"><i class="icon-weather"></i></span>
						<div class="oneWidgetIn weather">
							<div class="theTitle">
								<i class="icon-weather"></i> <span>الطقس</span>
							</div>
							<hr>
							<div class="mainPadding">
								<div class="tableDis">
									<div class="oneCell"><img src="images/widgets/weather.png" alt=""></div>
									<div class="oneCell brand-color textCentered dataTop">
										<div>المغرب</div>
										<div class="number"><div class="inlineBlock relative">26 <span>o</span></div></div>
										<div class="font-small">غالبا مشمش</div>
									</div>
									<div class="oneCell brand-color textCentered dataTop">
										<div>الخميس</div>
										<div class="number">15</div>
										<div class="font-small">مارس ٢٠١٦</div>
									</div>
								</div>
							</div>
							<div class="brand-bg hourlyWeater">
								<div class="flexslider downPosition">
									<ul class="slides">
										<li>
											<div class="one">
												<div class="avatar"><img src="images/widgets/weather2.png" alt=""></div>
												<div class="data">
													<div class="time">9 AM</div>
													<div class="number"><div class="inlineBlock relative">26 <span>o</span></div></div>
												</div>
											</div>

										</li>
										<li>
											<div class="one">
												<div class="avatar"><img src="images/widgets/weather2.png" alt=""></div>
												<div class="data">
													<div class="time">10 AM</div>
													<div class="number"><div class="inlineBlock relative">26 <span>o</span></div></div>
												</div>
											</div>

										</li>
										<li>
											<div class="one">
												<div class="avatar"><img src="images/widgets/weather2.png" alt=""></div>
												<div class="data">
													<div class="time">11 AM</div>
													<div class="number"><div class="inlineBlock relative">26 <span>o</span></div></div>
												</div>
											</div>

										</li>
										<li>
											<div class="one">
												<div class="avatar"><img src="images/widgets/weather2.png" alt=""></div>
												<div class="data">
													<div class="time">12 PM</div>
													<div class="number"><div class="inlineBlock relative">26 <span>o</span></div></div>
												</div>
											</div>

										</li>
										<li>
											<div class="one">
												<div class="avatar"><img src="images/widgets/weather2.png" alt=""></div>
												<div class="data">
													<div class="time">1 PM</div>
													<div class="number"><div class="inlineBlock relative">26 <span>o</span></div></div>
												</div>
											</div>

										</li>
									</ul>
								</div>
							</div>
							<div class="content">
								<div class="one mainPadding">
									<div class="tableDis">
										<div class="oneCell">الخميس</div>
										<div class="oneCell"><img src="images/widgets/weather.png" alt=""></div>
										<div class="oneCell number"><div class="inlineBlock relative">26 <span>o</span></div></div>
										<div class="oneCell number"><div class="inlineBlock relative">16 <span>o</span></div></div>
									</div>
								</div>
								<div class="one mainPadding">
									<div class="tableDis">
										<div class="oneCell">الجمعه</div>
										<div class="oneCell"><img src="images/widgets/weather.png" alt=""></div>
										<div class="oneCell number"><div class="inlineBlock relative">26 <span>o</span></div></div>
										<div class="oneCell number"><div class="inlineBlock relative">16 <span>o</span></div></div>
									</div>
								</div>
								<div class="one mainPadding">
									<div class="tableDis">
										<div class="oneCell">السبت</div>
										<div class="oneCell"><img src="images/widgets/weather.png" alt=""></div>
										<div class="oneCell number"><div class="inlineBlock relative">26 <span>o</span></div></div>
										<div class="oneCell number"><div class="inlineBlock relative">16 <span>o</span></div></div>
									</div>
								</div>
								<div class="one mainPadding">
									<div class="tableDis">
										<div class="oneCell">الاحد</div>
										<div class="oneCell"><img src="images/widgets/weather.png" alt=""></div>
										<div class="oneCell number"><div class="inlineBlock relative">26 <span>o</span></div></div>
										<div class="oneCell number"><div class="inlineBlock relative">16 <span>o</span></div></div>
									</div>
								</div>
								<div class="one mainPadding">
									<div class="tableDis">
										<div class="oneCell">الاتنين</div>
										<div class="oneCell"><img src="images/widgets/weather.png" alt=""></div>
										<div class="oneCell number"><div class="inlineBlock relative">26 <span>o</span></div></div>
										<div class="oneCell number"><div class="inlineBlock relative">16 <span>o</span></div></div>
									</div>
								</div>
								<div class="one mainPadding">
									<div class="tableDis">
										<div class="oneCell">الثلاثاء</div>
										<div class="oneCell"><img src="images/widgets/weather.png" alt=""></div>
										<div class="oneCell number"><div class="inlineBlock relative">26 <span>o</span></div></div>
										<div class="oneCell number"><div class="inlineBlock relative">16 <span>o</span></div></div>
									</div>
								</div>
								<div class="one mainPadding">
									<div class="tableDis">
										<div class="oneCell">الاربعاء</div>
										<div class="oneCell"><img src="images/widgets/weather.png" alt=""></div>
										<div class="oneCell number"><div class="inlineBlock relative">26 <span>o</span></div></div>
										<div class="oneCell number"><div class="inlineBlock relative">16 <span>o</span></div></div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="oneWidget">
						<span class="icon"><i class="icon-pray"></i></span>
						<div class="oneWidgetIn weather">
							<div class="theTitle">
								<i class="icon-pray"></i> <span>مواقيت الصلاة</span>
							</div>
							<hr>
							<div class="mainPadding">
								<div class="tableDis">
									<div class="oneCell"><img src="images/widgets/weather.png" alt=""></div>
									<div class="oneCell brand-color textCentered dataTop">
										<div>المغرب</div>
										<div class="number"><div class="inlineBlock relative">26 <span>o</span></div></div>
										<div class="font-small">الظهر</div>
									</div>
									<div class="oneCell brand-color textCentered dataTop">
										<div>الخميس</div>
										<div class="number">15</div>
										<div class="font-small">مارس ٢٠١٦</div>
									</div>
								</div>
							</div>
							<hr>
							<div class="content">
								<div class="one mainPadding">
									<div class="tableDis">
										<div class="oneCell">الفجر</div>
										<div class="oneCell"><img src="images/widgets/weather.png" alt=""></div>
										<div class="oneCell number"><div class="inlineBlock relative">12:33</div></div>
									</div>
								</div>
								<div class="one mainPadding">
									<div class="tableDis">
										<div class="oneCell">الفجر</div>
										<div class="oneCell"><img src="images/widgets/weather.png" alt=""></div>
										<div class="oneCell number"><div class="inlineBlock relative">12:33</div></div>
									</div>
								</div>
								<div class="one mainPadding">
									<div class="tableDis">
										<div class="oneCell">الفجر</div>
										<div class="oneCell"><img src="images/widgets/weather.png" alt=""></div>
										<div class="oneCell number"><div class="inlineBlock relative">12:33</div></div>
									</div>
								</div>
								<div class="one mainPadding">
									<div class="tableDis">
										<div class="oneCell">الفجر</div>
										<div class="oneCell"><img src="images/widgets/weather.png" alt=""></div>
										<div class="oneCell number"><div class="inlineBlock relative">12:33</div></div>
									</div>
								</div>
								<div class="one mainPadding">
									<div class="tableDis">
										<div class="oneCell">الفجر</div>
										<div class="oneCell"><img src="images/widgets/weather.png" alt=""></div>
										<div class="oneCell number"><div class="inlineBlock relative">12:33</div></div>
									</div>
								</div>
								<div class="one mainPadding">
									<div class="tableDis">
										<div class="oneCell">الفجر</div>
										<div class="oneCell"><img src="images/widgets/weather.png" alt=""></div>
										<div class="oneCell number"><div class="inlineBlock relative">12:33</div></div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="oneWidget">
						<span class="icon"><i class="icon-currencies"></i></span>
						<div class="oneWidgetIn convertCurr">
							<div class="theTitle"><i class="icon-currencies"></i> <span>محول العملات</span></div>
							<div class="content">
								<div class="one">
									<div class="tableDis">
										<div class="oneCell"><img src="images/widgets/flag.png" alt=""></div>
										<div class="oneCell">درهم إماراتي</div>
										<div class="oneCell">1،444</div>
									</div>
								</div>
								<div class="one">
									<div class="tableDis">
										<div class="oneCell"><img src="images/widgets/flag.png" alt=""></div>
										<div class="oneCell">درهم إماراتي</div>
										<div class="oneCell">1،444</div>
									</div>
								</div>
								<div class="one">
									<div class="tableDis">
										<div class="oneCell"><img src="images/widgets/flag.png" alt=""></div>
										<div class="oneCell">درهم إماراتي</div>
										<div class="oneCell">1،444</div>
									</div>
								</div>
								<div class="one">
									<div class="tableDis">
										<div class="oneCell"><img src="images/widgets/flag.png" alt=""></div>
										<div class="oneCell">درهم إماراتي</div>
										<div class="oneCell">1،444</div>
									</div>
								</div>
								<div class="one">
									<div class="tableDis">
										<div class="oneCell"><img src="images/widgets/flag.png" alt=""></div>
										<div class="oneCell">درهم إماراتي</div>
										<div class="oneCell">1،444</div>
									</div>
								</div>
								<div class="one">
									<div class="tableDis">
										<div class="oneCell"><img src="images/widgets/flag.png" alt=""></div>
										<div class="oneCell">درهم إماراتي</div>
										<div class="oneCell">1،444</div>
									</div>
								</div>
								<div class="one">
									<div class="tableDis">
										<div class="oneCell"><img src="images/widgets/flag.png" alt=""></div>
										<div class="oneCell">درهم إماراتي</div>
										<div class="oneCell">1،444</div>
									</div>
								</div>
								<div class="one">
									<div class="tableDis">
										<div class="oneCell"><img src="images/widgets/flag.png" alt=""></div>
										<div class="oneCell">درهم إماراتي</div>
										<div class="oneCell">1،444</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="oneWidget">
						<span class="icon"><i class="icon-gas"></i></span>
						<div class="oneWidgetIn fuelPrice mrgBtm">
							<div class="theTitle">
								<i class="icon-gas"></i> <span>أسعار الوقود</span>
							</div>
							<hr>
							<div class="content mainPadding">
								<div class="one">
									<div class="tableDis">
										<div class="oneCell"><img src="images/widgets/gas.png" alt=""></div>
										<div class="oneCell"><span class="font-4 brand-color">جازولين</span></div>
										<div class="oneCell">سوبر 98 <br> 2.5</div>
									</div>
								</div>
								<div class="one">
									<div class="tableDis">
										<div class="oneCell"><img src="images/widgets/gas.png" alt=""></div>
										<div class="oneCell"><span class="font-4 brand-color">جازولين</span></div>
										<div class="oneCell">سوبر 95 <br> 2.3</div>
									</div>
								</div>
								<div class="one">
									<div class="tableDis">
										<div class="oneCell"><img src="images/widgets/gas.png" alt=""></div>
										<div class="oneCell"><span class="font-4 brand-color">جازولين</span></div>
										<div class="oneCell">بلس <br> 2.0</div>
									</div>
								</div>
								<div class="one">
									<div class="tableDis">
										<div class="oneCell"><img src="images/widgets/gas.png" alt=""></div>
										<div class="oneCell"><span class="font-4 brand-color">ديزل</span></div>
										<div class="oneCell">2.0</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="one"><a href="#">EN</a></div>
				
			</div>
			<div class="menuIcon"><div><span></span><span></span><span></span></div></div>
		</div>
	</div>
	
	<nav id="navigation">
		<div class="gridContainer clearfix">
			<div class="theMenu relative">
			<?php wp_nav_menu(array(
					        'theme-location'             => 'primary',
							'container'                  => false,
							'walker'					=> new WPDocs_Walker_Nav_Menu()

                    )) ?>
				<div class="seeMore" onClick="sliceMenu()"><i class="icon-arrow-right"></i> <span>المزيد</span><span class="back">الرجوع</span></div>
			</div>
			
		</div>
	</nav>
	
</header>

<div class="mobileNav">
	<div class="search">
		<div class="gridContainer">
			<form action="#">
				<span class="icon"><i class="icon-search"></i></span>
				<input type="text" placeholder="بحث" class="formItem">
				<input type="submit" value="">
			</form>
		</div>
	</div>
	<div class="widgets">
		<div class="gridContainer">
			<div class="icons clearfix">
				<div class="one"><i class="icon-gas"></i></div>
				<div class="one"><i class="icon-currencies"></i></div>
				<div class="one"><i class="icon-pray"></i></div>
				<div class="one"><i class="icon-weather"></i></div>
				<div class="one"><i class="icon-economy"></i></div>
			</div>
			<div class="theWidget">
				<div class="oneItem">
					<div class="oneWidgetIn fuelPrice">
						<div class="theTitle">
							<i class="icon-gas"></i> <span>أسعار الوقود</span>
						</div>
						<hr>
						<div class="content mainPadding">
							<div class="one">
								<div class="tableDis">
									<div class="oneCell"><img src="images/widgets/gas.png" alt=""></div>
									<div class="oneCell"><span class="font-4 brand-color">جازولين</span></div>
									<div class="oneCell">سوبر 98 <br> 2.5</div>
								</div>
							</div>
							<div class="one">
								<div class="tableDis">
									<div class="oneCell"><img src="images/widgets/gas.png" alt=""></div>
									<div class="oneCell"><span class="font-4 brand-color">جازولين</span></div>
									<div class="oneCell">سوبر 95 <br> 2.3</div>
								</div>
							</div>
							<div class="one">
								<div class="tableDis">
									<div class="oneCell"><img src="images/widgets/gas.png" alt=""></div>
									<div class="oneCell"><span class="font-4 brand-color">جازولين</span></div>
									<div class="oneCell">بلس <br> 2.0</div>
								</div>
							</div>
							<div class="one">
								<div class="tableDis">
									<div class="oneCell"><img src="images/widgets/gas.png" alt=""></div>
									<div class="oneCell"><span class="font-4 brand-color">ديزل</span></div>
									<div class="oneCell">2.0</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="oneItem">
					<div class="oneWidgetIn convertCurr">
						<div class="theTitle"><i class="icon-currencies"></i> <span>محول العملات</span></div>
						<div class="content">
							<div class="one">
								<div class="tableDis">
									<div class="oneCell"><img src="images/widgets/flag.png" alt=""></div>
									<div class="oneCell">درهم إماراتي</div>
									<div class="oneCell">1،444</div>
								</div>
							</div>
							<div class="one">
								<div class="tableDis">
									<div class="oneCell"><img src="images/widgets/flag.png" alt=""></div>
									<div class="oneCell">درهم إماراتي</div>
									<div class="oneCell">1،444</div>
								</div>
							</div>
							<div class="one">
								<div class="tableDis">
									<div class="oneCell"><img src="images/widgets/flag.png" alt=""></div>
									<div class="oneCell">درهم إماراتي</div>
									<div class="oneCell">1،444</div>
								</div>
							</div>
							<div class="one">
								<div class="tableDis">
									<div class="oneCell"><img src="images/widgets/flag.png" alt=""></div>
									<div class="oneCell">درهم إماراتي</div>
									<div class="oneCell">1،444</div>
								</div>
							</div>
							<div class="one">
								<div class="tableDis">
									<div class="oneCell"><img src="images/widgets/flag.png" alt=""></div>
									<div class="oneCell">درهم إماراتي</div>
									<div class="oneCell">1،444</div>
								</div>
							</div>
							<div class="one">
								<div class="tableDis">
									<div class="oneCell"><img src="images/widgets/flag.png" alt=""></div>
									<div class="oneCell">درهم إماراتي</div>
									<div class="oneCell">1،444</div>
								</div>
							</div>
							<div class="one">
								<div class="tableDis">
									<div class="oneCell"><img src="images/widgets/flag.png" alt=""></div>
									<div class="oneCell">درهم إماراتي</div>
									<div class="oneCell">1،444</div>
								</div>
							</div>
							<div class="one">
								<div class="tableDis">
									<div class="oneCell"><img src="images/widgets/flag.png" alt=""></div>
									<div class="oneCell">درهم إماراتي</div>
									<div class="oneCell">1،444</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="oneItem">
					<div class="oneWidgetIn weather">
						<div class="theTitle">
							<i class="icon-pray"></i> <span>مواقيت الصلاة</span>
						</div>
						<hr>
						<div class="mainPadding">
							<div class="tableDis">
								<div class="oneCell"><img src="images/widgets/weather.png" alt=""></div>
								<div class="oneCell brand-color textCentered dataTop">
									<div>المغرب</div>
									<div class="number"><div class="inlineBlock relative">26 <span>o</span></div></div>
									<div class="font-small">الظهر</div>
								</div>
								<div class="oneCell brand-color textCentered dataTop">
									<div>الخميس</div>
									<div class="number">15</div>
									<div class="font-small">مارس ٢٠١٦</div>
								</div>
							</div>
						</div>
						<hr>
						<div class="content">
							<div class="one mainPadding">
								<div class="tableDis">
									<div class="oneCell">الفجر</div>
									<div class="oneCell"><img src="images/widgets/weather.png" alt=""></div>
									<div class="oneCell number"><div class="inlineBlock relative">12:33</div></div>
								</div>
							</div>
							<div class="one mainPadding">
								<div class="tableDis">
									<div class="oneCell">الفجر</div>
									<div class="oneCell"><img src="images/widgets/weather.png" alt=""></div>
									<div class="oneCell number"><div class="inlineBlock relative">12:33</div></div>
								</div>
							</div>
							<div class="one mainPadding">
								<div class="tableDis">
									<div class="oneCell">الفجر</div>
									<div class="oneCell"><img src="images/widgets/weather.png" alt=""></div>
									<div class="oneCell number"><div class="inlineBlock relative">12:33</div></div>
								</div>
							</div>
							<div class="one mainPadding">
								<div class="tableDis">
									<div class="oneCell">الفجر</div>
									<div class="oneCell"><img src="images/widgets/weather.png" alt=""></div>
									<div class="oneCell number"><div class="inlineBlock relative">12:33</div></div>
								</div>
							</div>
							<div class="one mainPadding">
								<div class="tableDis">
									<div class="oneCell">الفجر</div>
									<div class="oneCell"><img src="images/widgets/weather.png" alt=""></div>
									<div class="oneCell number"><div class="inlineBlock relative">12:33</div></div>
								</div>
							</div>
							<div class="one mainPadding">
								<div class="tableDis">
									<div class="oneCell">الفجر</div>
									<div class="oneCell"><img src="images/widgets/weather.png" alt=""></div>
									<div class="oneCell number"><div class="inlineBlock relative">12:33</div></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="oneItem">
					<div class="oneWidgetIn weather">
						<div class="theTitle">
							<i class="icon-weather"></i> <span>الطقس</span>
						</div>
						<hr>
						<div class="mainPadding">
							<div class="tableDis">
								<div class="oneCell"><img src="images/widgets/weather.png" alt=""></div>
								<div class="oneCell brand-color textCentered dataTop">
									<div>المغرب</div>
									<div class="number"><div class="inlineBlock relative">26 <span>o</span></div></div>
									<div class="font-small">غالبا مشمش</div>
								</div>
								<div class="oneCell brand-color textCentered dataTop">
									<div>الخميس</div>
									<div class="number">15</div>
									<div class="font-small">مارس ٢٠١٦</div>
								</div>
							</div>
						</div>
						<div class="brand-bg hourlyWeater">
							<div class="flexslider downPosition">
								<ul class="slides">
									<li>
										<div class="one">
											<div class="avatar"><img src="images/widgets/weather2.png" alt=""></div>
											<div class="data">
												<div class="time">9 AM</div>
												<div class="number"><div class="inlineBlock relative">26 <span>o</span></div></div>
											</div>
										</div>

									</li>
									<li>
										<div class="one">
											<div class="avatar"><img src="images/widgets/weather2.png" alt=""></div>
											<div class="data">
												<div class="time">10 AM</div>
												<div class="number"><div class="inlineBlock relative">26 <span>o</span></div></div>
											</div>
										</div>

									</li>
									<li>
										<div class="one">
											<div class="avatar"><img src="images/widgets/weather2.png" alt=""></div>
											<div class="data">
												<div class="time">11 AM</div>
												<div class="number"><div class="inlineBlock relative">26 <span>o</span></div></div>
											</div>
										</div>

									</li>
									<li>
										<div class="one">
											<div class="avatar"><img src="images/widgets/weather2.png" alt=""></div>
											<div class="data">
												<div class="time">12 PM</div>
												<div class="number"><div class="inlineBlock relative">26 <span>o</span></div></div>
											</div>
										</div>

									</li>
									<li>
										<div class="one">
											<div class="avatar"><img src="images/widgets/weather2.png" alt=""></div>
											<div class="data">
												<div class="time">1 PM</div>
												<div class="number"><div class="inlineBlock relative">26 <span>o</span></div></div>
											</div>
										</div>

									</li>
								</ul>
							</div>
						</div>
						<div class="content">
							<div class="one mainPadding">
								<div class="tableDis">
									<div class="oneCell">الخميس</div>
									<div class="oneCell"><img src="images/widgets/weather.png" alt=""></div>
									<div class="oneCell number"><div class="inlineBlock relative">26 <span>o</span></div></div>
									<div class="oneCell number"><div class="inlineBlock relative">16 <span>o</span></div></div>
								</div>
							</div>
							<div class="one mainPadding">
								<div class="tableDis">
									<div class="oneCell">الجمعه</div>
									<div class="oneCell"><img src="images/widgets/weather.png" alt=""></div>
									<div class="oneCell number"><div class="inlineBlock relative">26 <span>o</span></div></div>
									<div class="oneCell number"><div class="inlineBlock relative">16 <span>o</span></div></div>
								</div>
							</div>
							<div class="one mainPadding">
								<div class="tableDis">
									<div class="oneCell">السبت</div>
									<div class="oneCell"><img src="images/widgets/weather.png" alt=""></div>
									<div class="oneCell number"><div class="inlineBlock relative">26 <span>o</span></div></div>
									<div class="oneCell number"><div class="inlineBlock relative">16 <span>o</span></div></div>
								</div>
							</div>
							<div class="one mainPadding">
								<div class="tableDis">
									<div class="oneCell">الاحد</div>
									<div class="oneCell"><img src="images/widgets/weather.png" alt=""></div>
									<div class="oneCell number"><div class="inlineBlock relative">26 <span>o</span></div></div>
									<div class="oneCell number"><div class="inlineBlock relative">16 <span>o</span></div></div>
								</div>
							</div>
							<div class="one mainPadding">
								<div class="tableDis">
									<div class="oneCell">الاتنين</div>
									<div class="oneCell"><img src="images/widgets/weather.png" alt=""></div>
									<div class="oneCell number"><div class="inlineBlock relative">26 <span>o</span></div></div>
									<div class="oneCell number"><div class="inlineBlock relative">16 <span>o</span></div></div>
								</div>
							</div>
							<div class="one mainPadding">
								<div class="tableDis">
									<div class="oneCell">الثلاثاء</div>
									<div class="oneCell"><img src="images/widgets/weather.png" alt=""></div>
									<div class="oneCell number"><div class="inlineBlock relative">26 <span>o</span></div></div>
									<div class="oneCell number"><div class="inlineBlock relative">16 <span>o</span></div></div>
								</div>
							</div>
							<div class="one mainPadding">
								<div class="tableDis">
									<div class="oneCell">الاربعاء</div>
									<div class="oneCell"><img src="images/widgets/weather.png" alt=""></div>
									<div class="oneCell number"><div class="inlineBlock relative">26 <span>o</span></div></div>
									<div class="oneCell number"><div class="inlineBlock relative">16 <span>o</span></div></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="oneItem">
					<div class="oneWidgetIn markets">
			
						<div class="theTitle">
							<i class="icon-economy"></i><span>الأسواق</span>
						</div>
						<hr>
						<div class="h-padding">
							<div class="tabs">
								<a href="#">DFMGI</a>
								<a href="#" class="active">ADI</a>
							</div>
							<div>
								<div class="font-4 v-padding ltrDir clearfix">
									<span class="pullLeft">4,519.58</span>
									<span class="pullRight brand-color">-0.09% -4</span>
								</div>
								<div class="graph"></div>
								<div class="font-medium tableDis tradingNums">
									<div class="oneCell">
										<div>حجم التداول</div>
										<div class="brand-color">381,870,534</div>
									</div>
									<div class="oneCell">
										<div>قيمة التداول</div>
										<div class="brand-color">381,870,534</div>
									</div>
									<div class="oneCell">
										<div>عدد العمليات</div>
										<div class="brand-color">381,870,534</div>
									</div>
								</div>
								<div class="dataBar clearfix">
									<div class="one" style="width: 40%;">
										<div>20</div>
										<div class="thebar"></div>
										<div>رابحه</div>
									</div>
									<div class="one" style="width: 20%;">
										<div>10</div>
										<div class="thebar"></div>
										<div>ثابته</div>
									</div>
									<div class="one" style="width: 40%;">
										<div>20</div>
										<div class="thebar"></div>
										<div>خاسره</div>
									</div>
								</div>
								<div class="brand-bg smallPadding textCentered white-color">الشركات المتداوله <span>83</span></div>
								<div class="mainPadding brand-color textCentered font-2 fontBold">الشركات الاكثر</div>
								<div class="tabs tabs2">
									<a href="#" class="active">ربحًا</a>
									<a href="#">خسارة</a>
									<a href="#">قيمة</a>
									<a href="#">كمية</a>
								</div>
								<div class="allCompanies">
									<div class="one tableDis">
										<div class="oneCell">اسمنت الاتحاد</div>
										<div class="oneCell">20</div>
										<div class="oneCell"><i class="icon-arrow-dir-up"></i></div>
									</div>
									<div class="one tableDis">
										<div class="oneCell">اسمنت الاتحاد</div>
										<div class="oneCell">20</div>
										<div class="oneCell"><i class="icon-arrow-dir-up"></i></div>
									</div>
									<div class="one tableDis">
										<div class="oneCell">اسمنت الاتحاد</div>
										<div class="oneCell">20</div>
										<div class="oneCell"><i class="icon-arrow-dir-up"></i></div>
									</div>
									<div class="one tableDis">
										<div class="oneCell">اسمنت الاتحاد</div>
										<div class="oneCell">20</div>
										<div class="oneCell"><i class="icon-arrow-dir-up"></i></div>
									</div><div class="one tableDis">
										<div class="oneCell">اسمنت الاتحاد</div>
										<div class="oneCell">20</div>
										<div class="oneCell"><i class="icon-arrow-dir-up"></i></div>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="gridContainer">
		<ul class="theMenu">
		<?php wp_nav_menu(array(
					        'theme-location'             => 'primary',
                            'container'                  => false

                    )) ?>

		</ul>
	</div>
	<div class="mainSocial textCentered">
		<a href="http://<?php echo $opts['telegram'] ?>"><i class="icon-telegram"></i></a>
		<a href="http://<?php echo $opts['twitter'] ?>"><i class="icon-twitter"></i></a>
		<a href="http://<?php echo $opts['facebook'] ?>"><i class="icon-facebook"></i></a>
	</div>
</div>












	