<?php
function query_ordered_posts($args){
    $posts = $GLOBALS['wp_query'] = new WP_Query();
    $args['rp_order'] = 1; 
    $GLOBALS['wp_query']->query($args);
    return $posts;
}

?>