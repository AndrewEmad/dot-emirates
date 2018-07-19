<?php

function get_blocks_table($blocks)
{
    ?>

    <table id="blocks" class="table table-striped table-bordered">
        <thead>
        <tr>
            <th class="text-center">Block Name</th>
            <th class="text-center">Date</th>
            <th class="text-center">Number of posts</th>
            <th class="text-center">Remove</th>

        </tr>
        </thead>
        <tbody>
        <?php foreach ($blocks as $block) { ?>

            <tr>
                <td class="text-center"><a href="<?php

                    echo admin_url() . "edit.php?page=" . $_GET['page'] . "&block_id=" . $block->ID
                        . (isset($_GET['post_type']) ? "&post_type=" . $_GET['post_type'] : "");

                    ?>"><?php echo $block->Name ?></a></td>
                <td class="text-center"><?php echo (new DateTime($block->Date))->format('d/m/Y') ?></td>
                <td class="text-center"><?php echo $block->post_count ?></td>
                <td class="block-remove">
                    <form action='<?php echo  "admin-post.php?page=" . $_GET['page']
                        . (isset($_GET['post_type']) ? "&post_type=" . $_GET['post_type'] : "")?>' method="post">

                        <input type="hidden" name="action" value="op_remove_block"/>
                        <input type="hidden" name="id" value="<?php echo $block->ID ?>"/>
                        <?php wp_nonce_field('op_verify_block'); ?>
                        <button type="submit" class="btn btn-danger">x</button>

                    </form>
                </td>
            </tr>

        <?php } ?>
        </tbody>
        <tfoot>
        <tr>
            <th class="text-center">Block Name</th>
            <th class="text-center">Date</th>
            <th class="text-center">Number of posts</th>
            <th class="text-center">Remove</th>
        </tr>
        </tfoot>
    </table>

    <?php
}

function get_menu_page_header()
{
    ?>
    <div class="header row">
        <div class="col-6">
            <h1 class="op-title"> Organize Posts</h1>
            <h6>Organize your posts in blocks</h6>
        </div>
        <div class="col-6" style="text-align:right">

            <!-- Button trigger modal -->
            <button type="button" id="op-add-block" class="btn-op btn btn-primary" data-toggle="modal"
                    data-target="#addBlock">
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
                <form action='<?php echo  "admin-post.php?page=" . $_GET['page']
                        . (isset($_GET['post_type']) ? "&post_type=" . $_GET['post_type'] : "")?>' method="post">
                    <div class="modal-body">
                        <input type="hidden" name="action" value="op_add_block"/>
                        <?php wp_nonce_field('op_verify_block'); ?>
                        <input type="text" name="op_block_name" class="form-control" id="block-name"
                               placeholder="Enter the block name here..." required/>
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

function get_menu_page($blocks)
{
    ?>
    <div class="container">

        <?php
        get_menu_page_header();
        get_blocks_table($blocks);
        ?>
    </div>

    <?php
}


function get_edit_block_page($block)
{
    $post_type = (isset($_GET['post_type']) ? "'" . $_GET['post_type'] . "'" : "'post'");
    $result = get_block_posts($block->ID, $post_type);

    ?>
    <div class="alert alert-success" style="display:none">Saved!</div>
    <div class="container">
        <div class="header row">
            <div class="col-6">
                <input type="text" id='block-name' value="<?php echo $block->Name ?>" class="op-title form-control" />
                <table class="block-data">
                    <tr>
                        <td class="key">Date:</td>
                        <td><?php echo (new DateTime($block->Date))->format('d/m/Y') ?></td>
                    </tr>
                    <tr>
                        <td class="key">Slug:</td>
                        <td><?php echo $block->Slug ?></td>
                    </tr>
                </table>
            </div>
            <div class="col-6" style="text-align:right">

                <button type="button" id="op-save-block" class="btn btn-primary">
                    Save
                </button>

            </div>
        </div>
        <div class="row">
            <div class="col-md-8 col-6">
                <input type="text" placeholder="Search for posts to add ..." class="form-control" id="op_post_search"/>
                <div class="results" style="display: none"></div>
                <div id="sortable" class="sortable" data-block-id="<?php echo $block->ID ?>">
                    <?php if(sizeof($result) == 0){ ?><div class="no-posts">No posts to show</div><?php } ?>
                    <?php foreach ($result as $post) { ?>
                        <div class="portlet" id="<?php echo $post->ID ?>"
                             data-index="<?php echo $post->Order ?>" data-newindex="<?php echo $post->Order ?>">
                            <div class="row">
                                <div class="post-id"><?php echo $post->ID ?></div>
                                <img class="img col-2" src="<?php echo get_the_post_thumbnail_url($post->ID) ?>"/>
                                <div class="post-content col-10">
                                    <div class="portlet-header"><span
                                                class="title"><?php echo mb_substr($post->post_title, 0, 120) ?></span><span
                                                class="portlet-close">x</span></div>
                                    <div class="portlet-content"><?php echo mb_substr($post->post_content, 0, 250) ?></div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <div class="col-md-4 col-6">
                <div class="card" id="featured-image">
                    <div class="card-header">
                        Featured Image
                    </div>
                    <div class="card-body">
                        <div class="img">
                            <img class="featured-img" src="<?php echo get_block_thumbnail_url($block->ID) ?>" data-id= '<?php echo $block->FeaturedImgID ?>' onerror="this.style.display='none'"/>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="#">Set Featured Image</a>
                    </div>
                </div>
            </div>


        </div>
    </div>

   <?php
}

?>