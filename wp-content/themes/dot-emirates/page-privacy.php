<?php include('about-header.php') ?>
<?php
$page = get_page_by_title( 'privacy' );
$content = apply_filters('the_content', $page->post_content);
echo $content;
?>
<?php include('about-footer.php') ?>