<?php get_header(); ?>
	<div class="mainContent">
		<div class="gridContainer">
		<?php 
		
		if ( have_posts() ) {
			$count = 0;
		 	while ( have_posts() ) {
				the_post();

				//First Section
				if(wp_count_posts() >= 3 ){
					?>
						<div class="oneSection">
							<div class="myrow clearfix">
								<div class="<?php echo ($count == 0)? 'mycol-lg-6':'mycol-lg-3 mycol-sm-6' ?>">
									<div class="mainPost <?php if($count == 0){echo 'big';} ?>">
										<div class="top">
											<div class="img"><img src="<?php echo get_the_post_thumbnail_url(); ?>" alt=""></div>
											<div class="data">
												<div class="source"><?php the_title() ?></div>
												<div>منذ دقيقة</div>
											</div>
										</div>
										<a href="#" class="avatar"><img src="images/1.jpg" class="bgCover" alt=""></a>
										<div class="content">
											<h3 class="title"><a href="#">الصندوق الذي يتحكم في ما تبقى من الإمبراطورية الصندوق الذي يتحكم في ما تبقى من الإمبراطورية</a></h3>
											<div class="description"><div class="in">ولي العهد محمد بن زايد آل نهيان هو ابن مؤسس أبو ظبي ورئيس مجلس إدارة الصندوق. تصوير: بازوكي محمد / رويترز منذ إنشائها في عام 2002 ، لم يكن لدى أحدث صناديق الثروة السيادية الثلاثة التابعة لحكومة أبوظبي - مبادلة - مكتب خارج الأراضي</div></div>
											<div class="sectionAndSocial clearfix">
												<div class="section">العالم</div>
												<div class="mainSocial pullLeft">
													<a href="#"><i class="icon-telegram"></i></a>
													<a href="#"><i class="icon-twitter"></i></a>
													<a href="#"><i class="icon-facebook"></i></a>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="mycol-lg-3 mycol-sm-6">
									<div class="mainPost">
										<div class="top">
											<div class="img"><img src="images/source.jpg" alt=""></div>
											<div class="data">
												<div class="source">الإمارات اليوم</div>
												<div>منذ دقيقة</div>
											</div>
										</div>
										<a href="#" class="avatar"><img src="images/2.jpg" class="bgCover" alt=""></a>
										<div class="content">
											<h3 class="title"><a href="#">الصندوق الذي يتحكم في ما تبقى من الإمبراطورية</a></h3>
											<div class="description"><div class="in">ولي العهد محمد بن زايد آل نهيان هو ابن مؤسس أبو ظبي ورئيس مجلس إدارة الصندوق. تصوير: بازوكي محمد / رويترز منذ إنشائها في عام 2002 ، لم يكن لدى أحدث صناديق الثروة السيادية الثلاثة التابعة لحكومة أبوظبي - مبادلة - مكتب خارج الأراضي</div></div>
											<div class="sectionAndSocial clearfix">
												<div class="section">العالم</div>
												<div class="mainSocial pullLeft">
													<a href="#"><i class="icon-telegram"></i></a>
													<a href="#"><i class="icon-twitter"></i></a>
													<a href="#"><i class="icon-facebook"></i></a>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="mycol-lg-3 mycol-sm-6">
									<div class="mainPost">
										<div class="top">
											<div class="img"><img src="images/source.jpg" alt=""></div>
											<div class="data">
												<div class="source">الإمارات اليوم</div>
												<div>منذ دقيقة</div>
											</div>
										</div>
										<a href="#" class="avatar"><img src="images/2.jpg" class="bgCover" alt=""></a>
										<div class="content">
											<h3 class="title"><a href="#">الصندوق الذي يتحكم في ما تبقى من الإمبراطورية</a></h3>
											<div class="description"><div class="in">ولي العهد محمد بن زايد آل نهيان هو ابن مؤسس أبو ظبي ورئيس مجلس إدارة الصندوق. تصوير: بازوكي محمد / رويترز منذ إنشائها في عام 2002 ، لم يكن لدى أحدث صناديق الثروة السيادية الثلاثة التابعة لحكومة أبوظبي - مبادلة - مكتب خارج الأراضي</div></div>
											<div class="sectionAndSocial clearfix">
												<div class="section">العالم</div>
												<div class="mainSocial pullLeft">
													<a href="#"><i class="icon-telegram"></i></a>
													<a href="#"><i class="icon-twitter"></i></a>
													<a href="#"><i class="icon-facebook"></i></a>
												</div>
											</div>
										</div>
									</div>
								</div>

							</div>
						</div>

					<?php
				}




				$count+=1;
			} 
		 }
		 
?>



			
			<hr>
			
			<div class="oneSection">
				<div class="myrow clearfix">

					<div class="mycol-lg-6">
						<div class="mainPost small">
							<div class="top">
								<div class="img"><img src="images/source.jpg" alt=""></div>
								<div class="data">
									<div class="source">الإمارات اليوم</div>
									<div>منذ دقيقة</div>
								</div>
							</div>
							<a href="#" class="avatar"><img src="images/1.jpg" class="bgCover" alt=""></a>
							<div class="content">
								<h3 class="title"><a href="#">الصندوق الذي يتحكم في ما تبقى من الإمبراطورية الصندوق الذي يتحكم في ما تبقى من الإمبراطورية</a></h3>
								<div class="description"><div class="in">ولي العهد محمد بن زايد آل نهيان هو ابن مؤسس أبو ظبي ورئيس مجلس إدارة الصندوق. تصوير: بازوكي محمد / رويترز منذ إنشائها في عام 2002 ، لم يكن لدى أحدث صناديق الثروة السيادية الثلاثة التابعة لحكومة أبوظبي - مبادلة - مكتب خارج الأراضي</div></div>
								<div class="sectionAndSocial clearfix">
									<div class="section">العالم</div>
									<div class="mainSocial pullLeft">
										<a href="#"><i class="icon-telegram"></i></a>
										<a href="#"><i class="icon-twitter"></i></a>
										<a href="#"><i class="icon-facebook"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="mycol-lg-3 mycol-sm-6">
						<div class="mainPost small">
							<div class="top">
								<div class="img"><img src="images/source.jpg" alt=""></div>
								<div class="data">
									<div class="source">الإمارات اليوم</div>
									<div>منذ دقيقة</div>
								</div>
							</div>
							<div class="content">
								<h3 class="title"><a href="#">الصندوق الذي يتحكم في ما تبقى من الإمبراطورية</a></h3>
								<div class="description"><div class="in">ولي العهد محمد بن زايد آل نهيان هو ابن مؤسس أبو ظبي ورئيس مجلس إدارة الصندوق. تصوير: بازوكي محمد / رويترز منذ إنشائها في عام 2002 ، لم يكن لدى أحدث صناديق الثروة السيادية الثلاثة التابعة لحكومة أبوظبي - مبادلة - مكتب خارج الأراضي</div></div>
								<div class="sectionAndSocial clearfix">
									<div class="section">العالم</div>
									<div class="mainSocial pullLeft">
										<a href="#"><i class="icon-telegram"></i></a>
										<a href="#"><i class="icon-twitter"></i></a>
										<a href="#"><i class="icon-facebook"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="mycol-lg-3 mycol-sm-6">
						<div class="mainPost small">
							<div class="top">
								<div class="img"><img src="images/source.jpg" alt=""></div>
								<div class="data">
									<div class="source">الإمارات اليوم</div>
									<div>منذ دقيقة</div>
								</div>
							</div>
							<div class="content">
								<h3 class="title"><a href="#">الصندوق الذي يتحكم في ما تبقى من الإمبراطورية</a></h3>
								<div class="description"><div class="in">ولي العهد محمد بن زايد آل نهيان هو ابن مؤسس أبو ظبي ورئيس مجلس إدارة الصندوق. تصوير: بازوكي محمد / رويترز منذ إنشائها في عام 2002 ، لم يكن لدى أحدث صناديق الثروة السيادية الثلاثة التابعة لحكومة أبوظبي - مبادلة - مكتب خارج الأراضي</div></div>
								<div class="sectionAndSocial clearfix">
									<div class="section">العالم</div>
									<div class="mainSocial pullLeft">
										<a href="#"><i class="icon-telegram"></i></a>
										<a href="#"><i class="icon-twitter"></i></a>
										<a href="#"><i class="icon-facebook"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
			
			<hr>
			
			<div class="widePost">
				<a href="#" class="avatar"><img src="images/3.jpg" class="bgCover" alt=""></a>
				<div class="content">
					<div class="in clearfix">
						<div class="top">
							<div class="img"><img src="images/source.jpg" alt=""></div>
							<div class="data">
								<div class="source">الإمارات اليوم</div>
								<div>منذ دقيقة</div>
							</div>
						</div>
						<h3 class="title"><a href="#">الصندوق الذي يتحكم في ما تبقى من الإمبراطورية الصندوق الذي يتحكم في ما تبقى من الإمبراطورية الصندوق الذي يتحكم في ما تبقى من الإمبراطورية</a></h3>
						<div class="mainSocial pullLeft">
							<a href="#"><i class="icon-telegram"></i></a>
							<a href="#"><i class="icon-twitter"></i></a>
							<a href="#"><i class="icon-facebook"></i></a>
						</div>
					</div>
				</div>
			</div>
			
			<hr>
			
			<div class="oneSection">
				<div class="myrow clearfix">

					<div class="mycol-lg-3 mycol-sm-6">
						<div class="mainPost small">
							<div class="top">
								<div class="img"><img src="images/source.jpg" alt=""></div>
								<div class="data">
									<div class="source">الإمارات اليوم</div>
									<div>منذ دقيقة</div>
								</div>
							</div>
							<div class="content">
								<h3 class="title"><a href="#">الصندوق الذي يتحكم في ما تبقى من الإمبراطورية</a></h3>
								<div class="description"><div class="in">ولي العهد محمد بن زايد آل نهيان هو ابن مؤسس أبو ظبي ورئيس مجلس إدارة الصندوق. تصوير: بازوكي محمد / رويترز منذ إنشائها في عام 2002 ، لم يكن لدى أحدث صناديق الثروة السيادية الثلاثة التابعة لحكومة أبوظبي - مبادلة - مكتب خارج الأراضي</div></div>
								<div class="sectionAndSocial clearfix">
									<div class="section">العالم</div>
									<div class="mainSocial pullLeft">
										<a href="#"><i class="icon-telegram"></i></a>
										<a href="#"><i class="icon-twitter"></i></a>
										<a href="#"><i class="icon-facebook"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="mycol-lg-3 mycol-sm-6">
						<div class="mainPost small">
							<div class="top">
								<div class="img"><img src="images/source.jpg" alt=""></div>
								<div class="data">
									<div class="source">الإمارات اليوم</div>
									<div>منذ دقيقة</div>
								</div>
							</div>
							<div class="content">
								<h3 class="title"><a href="#">الصندوق الذي يتحكم في ما تبقى من الإمبراطورية</a></h3>
								<div class="description"><div class="in">ولي العهد محمد بن زايد آل نهيان هو ابن مؤسس أبو ظبي ورئيس مجلس إدارة الصندوق. تصوير: بازوكي محمد / رويترز منذ إنشائها في عام 2002 ، لم يكن لدى أحدث صناديق الثروة السيادية الثلاثة التابعة لحكومة أبوظبي - مبادلة - مكتب خارج الأراضي</div></div>
								<div class="sectionAndSocial clearfix">
									<div class="section">العالم</div>
									<div class="mainSocial pullLeft">
										<a href="#"><i class="icon-telegram"></i></a>
										<a href="#"><i class="icon-twitter"></i></a>
										<a href="#"><i class="icon-facebook"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					
					<div class="mycol-lg-3 mycol-sm-6">
						<div class="mainPost small">
							<div class="top">
								<div class="img"><img src="images/source.jpg" alt=""></div>
								<div class="data">
									<div class="source">الإمارات اليوم</div>
									<div>منذ دقيقة</div>
								</div>
							</div>
							<div class="content">
								<h3 class="title"><a href="#">الصندوق الذي يتحكم في ما تبقى من الإمبراطورية</a></h3>
								<div class="description"><div class="in">ولي العهد محمد بن زايد آل نهيان هو ابن مؤسس أبو ظبي ورئيس مجلس إدارة الصندوق. تصوير: بازوكي محمد / رويترز منذ إنشائها في عام 2002 ، لم يكن لدى أحدث صناديق الثروة السيادية الثلاثة التابعة لحكومة أبوظبي - مبادلة - مكتب خارج الأراضي</div></div>
								<div class="sectionAndSocial clearfix">
									<div class="section">العالم</div>
									<div class="mainSocial pullLeft">
										<a href="#"><i class="icon-telegram"></i></a>
										<a href="#"><i class="icon-twitter"></i></a>
										<a href="#"><i class="icon-facebook"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					
					<div class="mycol-lg-3 mycol-sm-6">
						<div class="mainPost small">
							<div class="top">
								<div class="img"><img src="images/source.jpg" alt=""></div>
								<div class="data">
									<div class="source">الإمارات اليوم</div>
									<div>منذ دقيقة</div>
								</div>
							</div>
							<div class="content">
								<h3 class="title"><a href="#">الصندوق الذي يتحكم في ما تبقى من الإمبراطورية</a></h3>
								<div class="description"><div class="in">ولي العهد محمد بن زايد آل نهيان هو ابن مؤسس أبو ظبي ورئيس مجلس إدارة الصندوق. تصوير: بازوكي محمد / رويترز منذ إنشائها في عام 2002 ، لم يكن لدى أحدث صناديق الثروة السيادية الثلاثة التابعة لحكومة أبوظبي - مبادلة - مكتب خارج الأراضي</div></div>
								<div class="sectionAndSocial clearfix">
									<div class="section">العالم</div>
									<div class="mainSocial pullLeft">
										<a href="#"><i class="icon-telegram"></i></a>
										<a href="#"><i class="icon-twitter"></i></a>
										<a href="#"><i class="icon-facebook"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
			
			<hr>
			
			<div class="oneSection">
				<div class="myrow clearfix">

					<div class="mycol-lg-6">
						<div class="mainPost small">
							<div class="top">
								<div class="img"><img src="images/source.jpg" alt=""></div>
								<div class="data">
									<div class="source">الإمارات اليوم</div>
									<div>منذ دقيقة</div>
								</div>
							</div>
							<a href="#" class="avatar"><img src="images/1.jpg" class="bgCover" alt=""></a>
							<div class="content">
								<h3 class="title"><a href="#">الصندوق الذي يتحكم في ما تبقى من الإمبراطورية الصندوق الذي يتحكم في ما تبقى من الإمبراطورية</a></h3>
								<div class="description"><div class="in">ولي العهد محمد بن زايد آل نهيان هو ابن مؤسس أبو ظبي ورئيس مجلس إدارة الصندوق. تصوير: بازوكي محمد / رويترز منذ إنشائها في عام 2002 ، لم يكن لدى أحدث صناديق الثروة السيادية الثلاثة التابعة لحكومة أبوظبي - مبادلة - مكتب خارج الأراضي</div></div>
								<div class="sectionAndSocial clearfix">
									<div class="section">العالم</div>
									<div class="mainSocial pullLeft">
										<a href="#"><i class="icon-telegram"></i></a>
										<a href="#"><i class="icon-twitter"></i></a>
										<a href="#"><i class="icon-facebook"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="mycol-lg-6">
						<div class="mainPost small">
							<div class="top">
								<div class="img"><img src="images/source.jpg" alt=""></div>
								<div class="data">
									<div class="source">الإمارات اليوم</div>
									<div>منذ دقيقة</div>
								</div>
							</div>
							<a href="#" class="avatar"><img src="images/1.jpg" class="bgCover" alt=""></a>
							<div class="content">
								<h3 class="title"><a href="#">الصندوق الذي يتحكم في ما تبقى من الإمبراطورية الصندوق الذي يتحكم في ما تبقى من الإمبراطورية</a></h3>
								<div class="description"><div class="in">ولي العهد محمد بن زايد آل نهيان هو ابن مؤسس أبو ظبي ورئيس مجلس إدارة الصندوق. تصوير: بازوكي محمد / رويترز منذ إنشائها في عام 2002 ، لم يكن لدى أحدث صناديق الثروة السيادية الثلاثة التابعة لحكومة أبوظبي - مبادلة - مكتب خارج الأراضي</div></div>
								<div class="sectionAndSocial clearfix">
									<div class="section">العالم</div>
									<div class="mainSocial pullLeft">
										<a href="#"><i class="icon-telegram"></i></a>
										<a href="#"><i class="icon-twitter"></i></a>
										<a href="#"><i class="icon-facebook"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
			
			<hr>
			
			<div class="oneSection">
				<div class="myrow clearfix">

					<div class="mycol-lg-3 mycol-sm-6">
						<div class="mainPost">
							<div class="top">
								<div class="img"><img src="images/source.jpg" alt=""></div>
								<div class="data">
									<div class="source">الإمارات اليوم</div>
									<div>منذ دقيقة</div>
								</div>
							</div>
							<a href="#" class="avatar"><img src="images/2.jpg" class="bgCover" alt=""></a>
							<div class="content">
								<h3 class="title"><a href="#">الصندوق الذي يتحكم في ما تبقى من الإمبراطورية</a></h3>
								<div class="description"><div class="in">ولي العهد محمد بن زايد آل نهيان هو ابن مؤسس أبو ظبي ورئيس مجلس إدارة الصندوق. تصوير: بازوكي محمد / رويترز منذ إنشائها في عام 2002 ، لم يكن لدى أحدث صناديق الثروة السيادية الثلاثة التابعة لحكومة أبوظبي - مبادلة - مكتب خارج الأراضي</div></div>
								<div class="sectionAndSocial clearfix">
									<div class="section">العالم</div>
									<div class="mainSocial pullLeft">
										<a href="#"><i class="icon-telegram"></i></a>
										<a href="#"><i class="icon-twitter"></i></a>
										<a href="#"><i class="icon-facebook"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="mycol-lg-3 mycol-sm-6">
						<div class="mainPost">
							<div class="top">
								<div class="img"><img src="images/source.jpg" alt=""></div>
								<div class="data">
									<div class="source">الإمارات اليوم</div>
									<div>منذ دقيقة</div>
								</div>
							</div>
							<a href="#" class="avatar"><img src="images/2.jpg" class="bgCover" alt=""></a>
							<div class="content">
								<h3 class="title"><a href="#">الصندوق الذي يتحكم في ما تبقى من الإمبراطورية</a></h3>
								<div class="description"><div class="in">ولي العهد محمد بن زايد آل نهيان هو ابن مؤسس أبو ظبي ورئيس مجلس إدارة الصندوق. تصوير: بازوكي محمد / رويترز منذ إنشائها في عام 2002 ، لم يكن لدى أحدث صناديق الثروة السيادية الثلاثة التابعة لحكومة أبوظبي - مبادلة - مكتب خارج الأراضي</div></div>
								<div class="sectionAndSocial clearfix">
									<div class="section">العالم</div>
									<div class="mainSocial pullLeft">
										<a href="#"><i class="icon-telegram"></i></a>
										<a href="#"><i class="icon-twitter"></i></a>
										<a href="#"><i class="icon-facebook"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					
					<div class="mycol-lg-3 mycol-sm-6">
						<div class="mainPost">
							<div class="top">
								<div class="img"><img src="images/source.jpg" alt=""></div>
								<div class="data">
									<div class="source">الإمارات اليوم</div>
									<div>منذ دقيقة</div>
								</div>
							</div>
							<a href="#" class="avatar"><img src="images/2.jpg" class="bgCover" alt=""></a>
							<div class="content">
								<h3 class="title"><a href="#">الصندوق الذي يتحكم في ما تبقى من الإمبراطورية</a></h3>
								<div class="description"><div class="in">ولي العهد محمد بن زايد آل نهيان هو ابن مؤسس أبو ظبي ورئيس مجلس إدارة الصندوق. تصوير: بازوكي محمد / رويترز منذ إنشائها في عام 2002 ، لم يكن لدى أحدث صناديق الثروة السيادية الثلاثة التابعة لحكومة أبوظبي - مبادلة - مكتب خارج الأراضي</div></div>
								<div class="sectionAndSocial clearfix">
									<div class="section">العالم</div>
									<div class="mainSocial pullLeft">
										<a href="#"><i class="icon-telegram"></i></a>
										<a href="#"><i class="icon-twitter"></i></a>
										<a href="#"><i class="icon-facebook"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					
					<div class="mycol-lg-3 mycol-sm-6">
						<div class="mainPost">
							<div class="top">
								<div class="img"><img src="images/source.jpg" alt=""></div>
								<div class="data">
									<div class="source">الإمارات اليوم</div>
									<div>منذ دقيقة</div>
								</div>
							</div>
							<a href="#" class="avatar"><img src="images/2.jpg" class="bgCover" alt=""></a>
							<div class="content">
								<h3 class="title"><a href="#">الصندوق الذي يتحكم في ما تبقى من الإمبراطورية</a></h3>
								<div class="description"><div class="in">ولي العهد محمد بن زايد آل نهيان هو ابن مؤسس أبو ظبي ورئيس مجلس إدارة الصندوق. تصوير: بازوكي محمد / رويترز منذ إنشائها في عام 2002 ، لم يكن لدى أحدث صناديق الثروة السيادية الثلاثة التابعة لحكومة أبوظبي - مبادلة - مكتب خارج الأراضي</div></div>
								<div class="sectionAndSocial clearfix">
									<div class="section">العالم</div>
									<div class="mainSocial pullLeft">
										<a href="#"><i class="icon-telegram"></i></a>
										<a href="#"><i class="icon-twitter"></i></a>
										<a href="#"><i class="icon-facebook"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
			
			<hr>
			
			<div class="widePost">
				<a href="#" class="avatar"><img src="images/4.jpg" class="bgCover" alt=""></a>
				<div class="content">
					<div class="in clearfix">
						<div class="top">
							<div class="img"><img src="images/source.jpg" alt=""></div>
							<div class="data">
								<div class="source">الإمارات اليوم</div>
								<div>منذ دقيقة</div>
							</div>
						</div>
						<h3 class="title"><a href="#">الصندوق الذي يتحكم في ما تبقى من الإمبراطورية الصندوق الذي يتحكم في ما تبقى من الإمبراطورية الصندوق الذي يتحكم في ما تبقى من الإمبراطورية</a></h3>
						<div class="mainSocial pullLeft">
							<a href="#"><i class="icon-telegram"></i></a>
							<a href="#"><i class="icon-twitter"></i></a>
							<a href="#"><i class="icon-facebook"></i></a>
						</div>
					</div>
					<div class="playIcon"><i class="icon-arrow-dir-right"></i></div>
				</div>
			</div>
			
			<hr>
			
			<div class="oneSection">
				<div class="myrow clearfix">

					<div class="mycol-lg-6">
						<div class="mainPost big">
							<div class="top">
								<div class="img"><img src="images/source.jpg" alt=""></div>
								<div class="data">
									<div class="source">الإمارات اليوم</div>
									<div>منذ دقيقة</div>
								</div>
							</div>
							<a href="#" class="avatar"><img src="images/1.jpg" class="bgCover" alt=""></a>
							<div class="content">
								<h3 class="title"><a href="#">الصندوق الذي يتحكم في ما تبقى من الإمبراطورية الصندوق الذي يتحكم في ما تبقى من الإمبراطورية</a></h3>
								<div class="description"><div class="in">ولي العهد محمد بن زايد آل نهيان هو ابن مؤسس أبو ظبي ورئيس مجلس إدارة الصندوق. تصوير: بازوكي محمد / رويترز منذ إنشائها في عام 2002 ، لم يكن لدى أحدث صناديق الثروة السيادية الثلاثة التابعة لحكومة أبوظبي - مبادلة - مكتب خارج الأراضي</div></div>
								<div class="sectionAndSocial clearfix">
									<div class="section">العالم</div>
									<div class="mainSocial pullLeft">
										<a href="#"><i class="icon-telegram"></i></a>
										<a href="#"><i class="icon-twitter"></i></a>
										<a href="#"><i class="icon-facebook"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="mycol-lg-6">
						<div class="mainPost big">
							<div class="top">
								<div class="img"><img src="images/source.jpg" alt=""></div>
								<div class="data">
									<div class="source">الإمارات اليوم</div>
									<div>منذ دقيقة</div>
								</div>
							</div>
							<a href="#" class="avatar"><img src="images/1.jpg" class="bgCover" alt=""></a>
							<div class="content">
								<h3 class="title"><a href="#">الصندوق الذي يتحكم في ما تبقى من الإمبراطورية الصندوق الذي يتحكم في ما تبقى من الإمبراطورية</a></h3>
								<div class="description"><div class="in">ولي العهد محمد بن زايد آل نهيان هو ابن مؤسس أبو ظبي ورئيس مجلس إدارة الصندوق. تصوير: بازوكي محمد / رويترز منذ إنشائها في عام 2002 ، لم يكن لدى أحدث صناديق الثروة السيادية الثلاثة التابعة لحكومة أبوظبي - مبادلة - مكتب خارج الأراضي</div></div>
								<div class="sectionAndSocial clearfix">
									<div class="section">العالم</div>
									<div class="mainSocial pullLeft">
										<a href="#"><i class="icon-telegram"></i></a>
										<a href="#"><i class="icon-twitter"></i></a>
										<a href="#"><i class="icon-facebook"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
			
			<hr>
			
			<div class="textCentered mainPadding"><a href="#">المزيد ...</a></div>

		</div>
	</div>


<?php get_footer(); ?>
