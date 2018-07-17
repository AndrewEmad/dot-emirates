<?php
function get_blocks_table($blocks){
    ?>

    <table id="blocks" class="table table-striped table-bordered">
        <thead>
        <tr>
            <th>Block Name</th>
            <th>Date</th>
            <th>Number of posts</th>

        </tr>
        </thead>
        <tbody>
        <?php foreach($blocks as $block){ ?>

            <tr>
                <td><a href="<?php echo admin_url()."/admin.php?page=op_menu&&block_id=".$block->ID ?>"><?php echo $block->Name ?></a></td>
                <td><?php echo $block->Date ?></td>
                <td><?php echo $block->post_count ?></td>
            </tr>

        <?php } ?>
        </tbody>
        <tfoot>
        <tr>
            <th>Block Name</th>
            <th>Date</th>
            <th>Number of posts</th>

        </tr>
        </tfoot>
    </table>

    <?php
}

function get_menu_page_header(){
    ?>
    <div class="header row">
        <div class="col-6">
            <h1> Organize Posts</h1>
            <h6>Organize your posts in blocks</h6>
        </div>
        <div class="col-6" style="text-align:right">

            <!-- Button trigger modal -->
            <button type="button" id="op-add-block" class="btn btn-primary" data-toggle="modal" data-target="#addBlock">
                Add Block
            </button>

        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="addBlock" tabindex="-1" role="dialog" aria-labelledby="addBlock" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addBlock">Add New Block</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="admin-post.php" method="post">
                    <div class="modal-body">
                        <input type="hidden" name="action" value="op_add_block" />
                        <?php wp_nonce_field('op_verify_block'); ?>
                        <input type="text" name = "op_block_name" class="form-control" id="block-name" placeholder="Enter the block name here..."/>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" id="btn-add-block">Add</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php
}

function get_menu_page($blocks){
    ?>
    <div class="container">

        <?php
            get_menu_page_header();
            get_blocks_table($blocks);
        ?>
    </div>

    <?php
}


function get_edit_block_page($block){

    global $wpdb,$table_prefix;
    $result = $wpdb->get_results(
        'SELECT '.$table_prefix.'posts.* FROM '.
        $table_prefix.'posts INNER JOIN '.$table_prefix.RELATION_TABLE_NAME.
        ' ON '.$table_prefix.'posts.ID = '.$table_prefix.RELATION_TABLE_NAME.'.PostID WHERE BlockID = '.$block->ID
        );

    ?>
    <div class="container">
        <div class="header row">
            <div class="col-6">
                <h1> Organize Posts</h1>
                <h6>Organize your posts in blocks</h6>
            </div>
            <div class="col-6" style="text-align:right">

                <button type="button" id="op-save-block" class="btn btn-primary">
                    Save
                </button>

            </div>
        </div>
        <div class="row">
            <div class="col-8 block-title"><span>Block: </span><span><?php echo $block->Name ?></span></div>
            <div class="col-4">
                <input type="text" placeholder="Search for posts to add ..." class="form-control" id="op_post_search" />
                <div class="results">

                </div>

            </div>
        </div>
        <div class="content">
            <div class="row">
                <div class="col-md-1 col-2">
                    <div class="number">1</div>
                    <div class="number">2</div>
                    <div class="number">3</div>
                    <div class="number">4</div>
                    <div class="number">5</div>
                    <div class="number">6</div>
                    <div class="number">7</div>
                    <div class="number">8</div>
                    <div class="number">9</div>
                    <div class="number">10</div>
                </div>
                <div class="col-md-11 col-10">
                    <div id="sortable" class="sortable">
                    <?php foreach($result as $post){?>
                        <div class="portlet" id="<?php echo $post->ID ?>"
                             data-index = "1" data-oldindex = "1" data-newindex = "1">
                            <div class="row">
                                <div class="post-id"><?php echo $post->ID ?></div>
                                <img class="img col-md-1 col-2" src="<?php echo get_the_post_thumbnail_url($post->ID) ?>" />
                                <div class="post-content col-md-11 col-10">
                                    <div class="portlet-header"><?php echo $post->post_title ?></div>
                                    <div class="portlet-content"><?php echo $post->post_content ?></div>
                                </div>
                            </div>
                        </div>
                        <?php }?>
                    </div>
                </div>
            </div>
        </div>


    </div>

    <?php
}

?>