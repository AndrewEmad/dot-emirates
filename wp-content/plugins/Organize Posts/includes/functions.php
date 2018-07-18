<?php
    function get_block_posts($block_id){
        global $wpdb,$table_prefix;
        $result = $wpdb->get_results(
            'SELECT '.$table_prefix.'posts.*,`Order` FROM '.
            $table_prefix.'posts INNER JOIN '.$table_prefix.RELATION_TABLE_NAME.
            ' ON '.$table_prefix.'posts.ID = '.$table_prefix.RELATION_TABLE_NAME.'.PostID WHERE BlockID = '.$block_id." ORDER BY `Order`"
        );
        return $result;
    }
?>