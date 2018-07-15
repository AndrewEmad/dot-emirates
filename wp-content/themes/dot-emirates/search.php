<?php get_header(); ?>

<div class="mainContent">
		<div class="gridContainer">
			
			<div class="sectionTitle textCentered">
                <div class="icon"><i class="icon-search2"></i></div>
                <?php if ($wp_query->found_posts == 0){?>
                    <h1 class="title2"> ﻻ توجد اخبار او مقاﻻت عن “<?php echo $_GET["s"] ?>"</h1>
                <?php 
                }
                else {?>
                <h1 class="title2">نتائج البحث عن “<?php echo $_GET["s"] ?>"</h1>
                <?php } ?>
			</div>
            <?php $count=0; while( $wp_query->current_post<$wp_query->found_posts-2 ) {?>
                
            <?php $cnt=0;
                if($wp_query->current_post<$wp_query->found_posts-2){?>
                    <div class="<?php echo ($count>0)?'hidden':'' ?> oneSection" data-count="<?php echo ($count>0)? $count:'' ?>">
                    <div class="myrow clearfix">
                    <?php while($wp_query->current_post<$wp_query->found_posts-2 && $cnt < 3){
                         the_post();
                        ?>
                        <div class="<?php echo ($cnt==0)? 'mycol-lg-6' : 'mycol-lg-3 mycol-sm-6' ?>">
                            <div class="mainPost <?php echo ($cnt==0)? 'big' : '' ?>">
                                <div class="<?php echo (get_post_type() == 'articles')? 'top':'writerTop' ?>">
                                    <?php if(get_post_type() == 'articles'){ ?>
                                    <div class="img"><img src="<?php echo get_avatar_url(get_the_author_meta('ID')); ?>"  alt=""></div>
                                    <span><?php echo get_the_author_meta('first_name').' '.get_the_author_meta('last_name') ?></span>
                                    <?php } else{?>
                                        <div class="img"><img src="<?php echo get_field('source_logo'); ?>" alt=""></div>
                                        <span><?php echo get_field('source_name'); ?></span>
                                    <?php } ?>
                                </div>
                                <a href="<?php echo get_permalink() ?>" class="avatar"><img src="<?php echo get_the_post_thumbnail_url(null, ($cnt == 0)? 'de_section_big' : 'de_section_small') ?>" class="bgCover" alt=""></a>
                                <div class="content">
                                    <h3 class="title"><a href="<?php echo get_permalink() ?>"><?php echo get_the_title( ) ?></a></h3>
                                    <div class="description"><div class="in"><?php echo get_the_content() ?></div></div>
                                    <div class="sectionAndSocial clearfix">
                                    <?php
                                        $post_categories = get_the_category();
                                        if ($post_categories) {
                                            foreach($post_categories as $cat) {
                                                echo $cat->name . ' '; 
                                            }
                                        }
                                    ?>
                                        <div class="mainSocial pullLeft">
                                            <a href="#"><i class="icon-telegram"></i></a>
                                            <a href="https://twitter.com/share?ref_src=twsrc%5Etfw"><i class="icon-twitter"></i></a>
                                            <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo get_the_permalink() ?>&t=<?php echo get_the_title() ?>"><i class="icon-facebook"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php $cnt++; } ?>

                    </div>
                </div>
                <?php } ?>		
			
                    
                <?php $cnt=0;
                if($wp_query->current_post<$wp_query->found_posts-2){?>
                    <hr class="<?php echo ($count>0)?'hidden':'' ?>" data-count="<?php echo ($count>0)? $count:'' ?>">
                    <div class="<?php echo ($count>0)?'hidden':'' ?> oneSection" data-count="<?php echo ($count>0)? $count:'' ?>">
                    <div class="myrow clearfix">
                    <?php while($wp_query->current_post<$wp_query->found_posts-2&& $cnt < 3){
                        the_post();

                        ?>
                        <div class="<?php echo ($cnt==0)? 'mycol-lg-6' : 'mycol-lg-3 mycol-sm-6' ?>">
                            <div class="mainPost small">
                                <div class="<?php echo (get_post_type() == 'articles')? 'top':'writerTop' ?>">
                                    <?php if(get_post_type() == 'articles'){ ?>
                                    <div class="img"><img src="<?php echo get_avatar_url(get_the_author_meta('ID')); ?>"  alt=""></div>
                                    <span><?php echo get_the_author_meta('first_name').' '.get_the_author_meta('last_name') ?></span>
                                    <?php } else{?>
                                        <div class="img"><img src="<?php echo get_field('source_logo'); ?>" alt=""></div>
                                        <span><?php echo get_field('source_name'); ?></span>
                                    <?php } ?>
                                </div>
                                <?php if($cnt == 0){ ?><a href="<?php echo get_permalink() ?>" class="avatar"><img src="<?php echo get_the_post_thumbnail_url(null, 'de_section_normal'); ?>" class="bgCover" alt=""></a><?php } ?>
                                <div class="content">
                                    <h3 class="title"><a href="<?php echo get_permalink() ?>"><?php echo get_the_title( ) ?></a></h3>
                                    <div class="description"><div class="in"><?php echo get_the_content() ?></div></div>
                                    <div class="sectionAndSocial clearfix">
                                    <?php
                                        $post_categories = get_the_category();
                                        if ($post_categories) {
                                            foreach($post_categories as $cat) {
                                                echo $cat->name . ' '; 
                                            }
                                        }
                                    ?>
                                        <div class="mainSocial pullLeft">
                                            <a href="#"><i class="icon-telegram"></i></a>
                                            <a href="https://twitter.com/share?ref_src=twsrc%5Etfw"><i class="icon-twitter"></i></a>
                                            <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo get_the_permalink() ?>&t=<?php echo get_the_title() ?>"><i class="icon-facebook"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php $cnt++; } ?>

                    </div>
                </div>
                        
                <hr class="<?php echo ($count>0)?'hidden':'' ?>" data-count="<?php echo ($count>0)? $count:'' ?>">
                <?php }
                $count++;    
            } ?>


				<?php if($wp_query->found_posts-2 > 6){ ?>	
				<div class="textCentered mainPadding" id="more"><a href="#">المزيد ...</a></div>
                <?php }?>
						
		</div>
	</div>
<script>
    var cls = 0,
        mx      = <?php echo $wp_query->found_posts-2 ?>;
    $("#more").on('click',function(e){
        e.preventDefault()
        cls+=1;
        $(".hidden[data-count='"+cls+"']").removeClass('hidden');
        if(cls*6+6>=mx){
            $(this).remove();
        }
    });
</script>

<?php get_footer(); ?>