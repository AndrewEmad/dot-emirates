<?php get_header();
$category = get_category( get_query_var( 'cat' ) );
?>
	
	<div class="mainContent">
		<div class="gridContainer">

		<div class="sectionTitle textCentered">
			<div class="icon"><i class="<?php echo $category->description ?>"></i></div>
			<h1 class="title"><?php single_cat_title()?></h1>
			<div class="tags">
				<span>أخبار مميزة عن:</span>
				<a>أبوظبي</a>
				<a>دبي</a>
				<a>محمد بن زايد</a>
			</div>
		</div>

		
		<?php 
		
		$wide_section = new WP_Query(array(
			'post_type' 		=> 'post',
            'posts_per_page'	=> 1,
            'cat'            => $category->cat_ID
		));
	
		if ( $wide_section->have_posts() ) {
				$wide_section->the_post();?>
			<div class="widePost">
				<a href="<?php echo get_permalink() ?>" class="avatar"><img src="<?php echo get_the_post_thumbnail_url(null, 'de_section_wide'); ?>" class="bgCover" alt=""></a>
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
			<hr>
			<?php } ?>


		
		<?php 
		$first_section = new WP_Query(array(
			'post_type' 		=> 'post',
			'posts_per_page'		=> 3,
            'cat_id'                => get_the_category()[0]->cat_ID,
            'offset'                => 1,
            'cat'            => $category->cat_ID

		));
		
		if ( $first_section->have_posts() ) {?>
			<div class="oneSection">
			<div class="myrow clearfix">
		 	<?php while ( $first_section->have_posts() ) {
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
										<a href="<?php echo get_permalink() ?>" class="avatar"><img src="<?php echo get_the_post_thumbnail_url(null, ($first_section->current_post == 0)? 'de_section_big' : 'de_section_small'); ?>" class="bgCover" alt=""></a>
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
								
					<?php }?> 
		</div>
	</div>
	<hr>
	<?php }?>

	
	<?php 
		$second_section = new WP_Query(array(
			'post_type' 		=> 'post',
			'posts_per_page'	=> 3,
			'offset'			=> 4,
            'cat'            => $category->cat_ID
		));
		if ( $second_section->have_posts() ) {?>
			<div class="oneSection">
		<div class="myrow clearfix">
		 	<?php while ( $second_section->have_posts() ) {
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
			 <?php if($second_section->current_post == 0){ ?><a href="<?php echo get_permalink() ?>" class="avatar"><img src="<?php echo get_the_post_thumbnail_url(null, 'de_section_normal'); ?>" class="bgCover" alt=""></a><?php } ?>
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

					<?php }?> 
		</div>
	</div>
	<hr>
	<?php }?>


		<?php 
		$first_section = new WP_Query(array(
			'post_type' 		=> 'post',
			'posts_per_page'		=> 3,
			'offset'				=> 7,
            'cat'            => $category->cat_ID
		));
		
		if ( $first_section->have_posts() ) {?>
			<div class="oneSection">
			<div class="myrow clearfix">
		 	<?php while ( $first_section->have_posts() ) {
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
										<a href="<?php echo get_permalink() ?>" class="avatar"><img src="<?php echo get_the_post_thumbnail_url(null, ($first_section->current_post == 0)? 'de_section_big' : 'de_section_small'); ?>" class="bgCover" alt=""></a>
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
								
								<?php }?> 
		</div>
	</div>
	<hr>
	<?php }?>

	
	<?php 
		$second_section = new WP_Query(array(
			'post_type' 		=> 'post',
			'posts_per_page'	=> 3,
			'offset'			=> 10,
            'cat'            => $category->cat_ID
		));
		if ( $second_section->have_posts() ) {?>
			<div class="oneSection">
		<div class="myrow clearfix">
		 	<?php while ( $second_section->have_posts() ) {
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
			 <?php if($second_section->current_post == 0){ ?><a href="<?php echo get_permalink() ?>" class="avatar"><img src="<?php echo get_the_post_thumbnail_url(null, 'de_section_normal'); ?>" class="bgCover" alt=""></a><?php } ?>
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

					<?php }?> 
		</div>
	</div>
	<hr>
	<?php }?>


		</div>
	</div>


<?php get_footer(); ?>
