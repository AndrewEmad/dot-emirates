<?php
    function get_block_posts($block_id, $post_type = 'post'){
        global $wpdb,$table_prefix;
        $result = $wpdb->get_results(
            'SELECT '.$table_prefix.'posts.*,`Order`,`Slug` FROM '.
            $table_prefix.'posts INNER JOIN '.$table_prefix.RELATION_TABLE_NAME.
            ' ON '.$table_prefix.'posts.ID = '.$table_prefix.RELATION_TABLE_NAME.'
            .PostID INNER JOIN '.$table_prefix.BLOCKS_TABLE_NAME.' ON BlockID = '.$table_prefix.BLOCKS_TABLE_NAME.'.ID WHERE (BlockID = '
            .$block_id." OR Slug = '".$block_id."') AND post_type = ".$post_type." ORDER BY `Order`"
        );
        return $result;
    }

    function get_block_thumbnail_url($block_id, $size = 'thumbnail',$icon = false){
        global $wpdb,$table_prefix;
        $result = $wpdb->get_results("SELECT FeaturedImgID FROM ".$table_prefix.BLOCKS_TABLE_NAME
            ." WHERE ID = ".$block_id." OR Slug = '".$block_id."'");
        if($result){
            return wp_get_attachment_image_url($result[0]->FeaturedImgID,$size,$icon);
        }
        return null;
    }
?>