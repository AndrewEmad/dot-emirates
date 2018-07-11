<?php get_header(); ?>
	
	<div class="mainContent">
		<div class="gridContainer">

		<div class="detailsPage">
				
				<div class="avatar"><img src="<?php echo get_the_post_thumbnail_url() ?>" alt=""></div>
				<div class="sourceTop">
					<div class="img"><img src="<?php echo get_avatar_url(get_the_author_meta('ID')); ?>" alt=""></div>
					<div class="data">
						<div class="source"><?php echo get_the_author_meta('first_name').' '.get_the_author_meta('last_name') ?></div>
						<div><?php echo get_the_date() ?></div>
					</div>
				</div>
				<h1>
					<?php echo get_the_title() ?>
				</h1>
				<div class="theDetails">
					<?php echo get_the_content() ?>
				</div>
				<div class="clearfix">
				<div class="mainSocial pullLeft">
					<a href="#"><i class="icon-telegram"></i></a>
					<a href="https://twitter.com/share?ref_src=twsrc%5Etfw"><i class="icon-twitter"></i></a>
					<a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo get_the_permalink() ?>&t=<?php echo get_the_title() ?>"><i class="icon-facebook"></i></a>
				</div>
				</div>
				
			</div>
			
			<hr>
			
			<div class="moreNewsTitle mainPadding textCentered">
				<div>المزيد من</div>
				<h2 class="title">المقاﻻت</h2>
			</div>

		<div class="oneSection">
			<div class="myrow clearfix">
		<?php 
		$first_section = new WP_Query(array(
			'post_type' 	  		=> 'articles',
			'posts_per_page'		=> 3
		));
		
		if ( $first_section->have_posts() ) {
		 	while ( $first_section->have_posts() ) {
				$first_section->the_post();
					?>
								<div class="<?php echo ($first_section->current_post == 0)? 'mycol-lg-6':'mycol-lg-3 mycol-sm-6' ?>">
									<div class="mainPost <?php if($first_section->current_post == 0){ echo 'big';} ?>">
										<div class="top">
											<div class="img"><img src="<?php echo get_avatar_url(get_the_author_meta('ID')); ?>" alt=""></div>
											<div class="data">
												<div class="source"><?php echo get_the_author_meta('first_name').' '.get_the_author_meta('last_name')?></div>
												<div><?php echo get_the_date()?></div>
											</div>
										</div>
										<a href="<?php echo get_permalink() ?>" class="avatar"><img src="<?php echo get_the_post_thumbnail_url(); ?>" class="bgCover" alt=""></a>
										<div class="content">
											<h3 class="title"><a href="<?php echo get_permalink() ?>"><?php echo get_the_title() ?></a></h3>
											<div class="description"><div class="in"><?php echo get_the_excerpt() ?></div></div>
											<div class="sectionAndSocial clearfix">
												<div class="section">
												<?php
													$posttags = get_the_tags();
													if ($posttags) {
														foreach($posttags as $tag) {
															echo $tag->name . ' '; 
														}
													}
												?>
												</div>
												<div class="mainSocial pullLeft">
													<a href="#"><i class="icon-telegram"></i></a>
													<a href="https://twitter.com/share?ref_src=twsrc%5Etfw"><i class="icon-twitter"></i></a>
													<a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo get_the_permalink() ?>&t=<?php echo get_the_title() ?>"><i class="icon-facebook"></i></a>
												</div>
											</div>
										</div>
									</div>
								</div>
								
					<?php
			} 
		 }
		 
	?>
		</div>
	</div>
	<hr>
	<div class="oneSection">
		<div class="myrow clearfix">
	<?php 
		$second_section = new WP_Query(array(
			'post_type' 		=> 'articles',
			'posts_per_page'	=> 3,
			'offset'			=> 3
		));
		if ( $second_section->have_posts() ) {
		 	while ( $second_section->have_posts() ) {
				$second_section->the_post();
					?>
						
								<div class="<?php echo ($second_section->current_post == 0)? 'mycol-lg-6':'mycol-lg-3 mycol-sm-6' ?>">
									<div class="mainPost small">
										<div class="top">
											<div class="img"><img src="<?php echo get_avatar_url(get_the_author_meta('ID')); ?>" alt=""></div>
											<div class="data">
												<div class="source"><?php echo get_the_author_meta('first_name').' '.get_the_author_meta('last_name') ?></div>
												<div><?php echo get_the_date()?></div>
											</div>
										</div>
			 							<?php if($second_section->current_post == 0){ ?><a href="<?php echo get_permalink() ?>" class="avatar"><img src="<?php echo get_the_post_thumbnail_url(); ?>" class="bgCover" alt=""></a><?php } ?>
										<div class="content">
											<h3 class="title"><a href="<?php echo get_permalink() ?>"><?php echo get_the_title() ?></a></h3>
											<div class="description"><div class="in"><?php echo get_the_excerpt() ?></div></div>
											<div class="sectionAndSocial clearfix">
												<div class="section">
												<?php
													$posttags = get_the_tags();
													if ($posttags) {
														foreach($posttags as $tag) {
															echo $tag->name . ' '; 
														}
													}
												?>
												</div>
												<div class="mainSocial pullLeft">
													<a href="#"><i class="icon-telegram"></i></a>
													<a href="https://twitter.com/share?ref_src=twsrc%5Etfw"><i class="icon-twitter"></i></a>
													<a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo get_the_permalink() ?>&t=<?php echo get_the_title() ?>"><i class="icon-facebook"></i></a>
												</div>
											</div>
										</div>
									</div>
								</div>

					<?php
			} 
		 }
		 
	?>

		</div>
	</div>




		</div>
	</div>


<?php get_footer(); ?>
