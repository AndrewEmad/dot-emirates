<?php get_header(); ?>



	<div class="mainContent">
		<div class="gridContainer">
		<div class="oneSection">
			<div class="myrow clearfix">
		<?php 
		$first_section = new WP_Query(array(
			'post_type' 			=> 'post',
			'posts_per_page'		=> 3
		));
		
		if ( $first_section->have_posts() ) {
		 	while ( $first_section->have_posts() ) {
				$first_section->the_post();
					?>
						
								<div class="<?php echo ($first_section->current_post == 0)? 'mycol-lg-6':'mycol-lg-3 mycol-sm-6' ?>">
									<div class="mainPost <?php if($first_section->current_post == 0){ echo 'big';} ?>">
										<div class="top">
											<div class="img"><img src="<?php echo get_field('source_logo'); ?>" alt=""></div>
											<div class="data">
												<div class="source"><?php echo get_field('source_name'); ?></div>
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
													$post_categories = get_the_category();
													if ($post_categories) {
														foreach($post_categories as $cat) {
															echo $cat->name . ' '; 
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
			'post_type' 			=> 'post',
			'posts_per_page'		=> 3,
			'offset'				=>3
		));
		if ( $second_section->have_posts() ) {
		 	while ( $second_section->have_posts() ) {
				$second_section->the_post();
					?>
						
								<div class="<?php echo ($second_section->current_post == 0)? 'mycol-lg-6':'mycol-lg-3 mycol-sm-6' ?>">
									<div class="mainPost small">
									<div class="top">
											<div class="img"><img src="<?php echo get_field('source_logo'); ?>" alt=""></div>
											<div class="data">
												<div class="source"><?php echo get_field('source_name'); ?></div>
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
													$post_categories = get_the_category();
													if ($post_categories) {
														foreach($post_categories as $cat) {
															echo $cat->name . ' '; 
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
	<?php 
		$wide_section = new WP_Query(array(
			'post_type' 		=> 'post',
			'posts_per_page'	=> 1,
			'offset'			=> 6
		));
		if ( $wide_section->have_posts() ) {
				$wide_section->the_post();?>
			<div class="widePost">
				<a href="<?php echo get_permalink() ?>" class="avatar"><img src="<?php echo get_the_post_thumbnail_url(); ?>" class="bgCover" alt=""></a>
				<div class="content">
					<div class="in clearfix">
					<div class="top">
						<div class="img"><img src="<?php echo get_field('source_logo'); ?>" alt=""></div>
						<div class="data">
							<div class="source"><?php echo get_field('source_name'); ?></div>
							<div><?php echo get_the_date()?></div>
						</div>
					</div>
						<h3 class="title"><a href="<?php echo get_permalink() ?>"><?php echo get_the_title() ?></a></h3>
						<div class="mainSocial pullLeft">
							<a href="#"><i class="icon-telegram"></i></a>
							<a href="https://twitter.com/share?ref_src=twsrc%5Etfw"><i class="icon-twitter"></i></a>
							<a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo get_the_permalink() ?>&t=<?php echo get_the_title() ?>"><i class="icon-facebook"></i></a>
						</div>
					</div>
				</div>
			</div>
			<?php } ?>
			<hr>

	<div class="oneSection">
		<div class="myrow clearfix">
	<?php 
		$third_section = new WP_Query(array(
			'post_type' 		=> 'post',
			'posts_per_page'	=> 4,
			'offset'			=> 7
		));
		if ( $third_section->have_posts() ) {
		 	while ( $third_section->have_posts() ) {
				$third_section->the_post();
					?>
						
								<div class="mycol-lg-3 mycol-sm-6">
									<div class="mainPost small">
									<div class="top">
											<div class="img"><img src="<?php echo get_field('source_logo'); ?>" alt=""></div>
											<div class="data">
												<div class="source"><?php echo get_field('source_name'); ?></div>
												<div><?php echo get_the_date()?></div>
											</div>
										</div>
										<div class="content">
											<h3 class="title"><a href="<?php echo get_permalink() ?>"><?php echo get_the_title() ?></a></h3>
											<div class="description"><div class="in"><?php echo get_the_excerpt() ?></div></div>
											<div class="sectionAndSocial clearfix">
												<div class="section">
												<?php
													$post_categories = get_the_category();
													if ($post_categories) {
														foreach($post_categories as $cat) {
															echo $cat->name . ' '; 
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

	<hr />

	<div class="oneSection">
		<div class="myrow clearfix">
	<?php 
		$fourth_section = new WP_Query(array(
			'post_type' 		=> 'post',
			'posts_per_page'	=> 2,
			'offset'			=> 11
		));
		if ( $fourth_section->have_posts() ) {
		 	while ( $fourth_section->have_posts() ) {
				$fourth_section->the_post();
					?>
						
								<div class="mycol-lg-6">
									<div class="mainPost small">
									<div class="top">
											<div class="img"><img src="<?php echo get_field('source_logo'); ?>" alt=""></div>
											<div class="data">
												<div class="source"><?php echo get_field('source_name'); ?></div>
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
													$post_categories = get_the_category();
													if ($post_categories) {
														foreach($post_categories as $cat) {
															echo $cat->name . ' '; 
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
		$fifth_section = new WP_Query(array(
			'post_type' 		=> 'post',
			'posts_per_page'	=> 4,
			'offset'			=> 13
		));
		if ( $fifth_section->have_posts() ) {
		 	while ( $fifth_section->have_posts() ) {
				$fifth_section->the_post();
					?>
						
								<div class="mycol-lg-3 mycol-sm-6">
									<div class="mainPost">
									<div class="top">
											<div class="img"><img src="<?php echo get_field('source_logo'); ?>" alt=""></div>
											<div class="data">
												<div class="source"><?php echo get_field('source_name'); ?></div>
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
													$post_categories = get_the_category();
													if ($post_categories) {
														foreach($post_categories as $cat) {
															echo $cat->name . ' '; 
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

	<?php 
		$video_section = new WP_Query(array(
			'post_type' 		=> 'videos',
			'posts_per_page'	=> 1
		));
		if ( $video_section->have_posts() ) {
				$video_section->the_post();?>
			<div class="widePost">
				<a href="<?php echo get_permalink() ?>" class="avatar"><img src="<?php echo get_the_post_thumbnail_url(); ?>" class="bgCover" alt=""></a>
				<div class="content">
					<div class="in clearfix">
					<div class="top">
						<div class="img"><img src="<?php echo get_field('source_logo'); ?>" alt=""></div>
						<div class="data">
							<div class="source"><?php echo get_field('source_name'); ?></div>
							<div><?php echo get_the_date()?></div>
						</div>
					</div>
						<h3 class="title"><a href="<?php echo get_permalink() ?>"><?php echo get_the_title() ?></a></h3>
						<div class="mainSocial pullLeft">
							<a href="#"><i class="icon-telegram"></i></a>
							<a href="https://twitter.com/share?ref_src=twsrc%5Etfw"><i class="icon-twitter"></i></a>
							<a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo get_the_permalink() ?>&t=<?php echo get_the_title() ?>"><i class="icon-facebook"></i></a>
						</div>
						<div class="playIcon"><i class="icon-arrow-dir-right"></i></div>

					</div>
				</div>
			</div>
			<?php } ?>
			<hr>

	<div class="oneSection">
		<div class="myrow clearfix">
	<?php 
		$last_section = new WP_Query(array(
			'post_type' 		=> 'post',
			'posts_per_page'	=> 2,
			'offset'			=> 17
		));
		if ( $last_section->have_posts() ) {
		 	while ( $last_section->have_posts() ) {
				$last_section->the_post();
					?>
						
								<div class="mycol-lg-6">
									<div class="mainPost big">
									<div class="top">
											<div class="img"><img src="<?php echo get_field('source_logo'); ?>" alt=""></div>
											<div class="data">
												<div class="source"><?php echo get_field('source_name'); ?></div>
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
													$post_categories = get_the_category();
													if ($post_categories) {
														foreach($post_categories as $cat) {
															echo $cat->name . ' '; 
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
			 <?php 
			 	$page_count = ceil(($last_section->max_num_pages*2-19)/2);
				 if($page_count > 0)
				 {?>
				<div class="textCentered mainPadding" id="load-more" data-max-page="<?php echo $page_count ?>">المزيد...<a href="#"></a></div>
				<?php } ?>
	
		</div>
	</div>


<?php get_footer(); ?>
