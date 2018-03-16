<?php get_header() ?>

    <div class="ale_sermons_page">
    <div class="wrapper">
    <h2 class="page-title"><?php _e('Sermons', 'aletheme') ?></h2>

        <?php
        $args = array(
            'numberposts' => 1,
            'post_type' => 'sermons',
            'post_status' => 'publish'
        );

        $result = wp_get_recent_posts($args);

        foreach( $result as $p ){ ?>

        <div class="first">
            <div class="first_sermons">
                    <div class="next_sermons">
                        <span>Next sermony:</span>

                        <h3><?php echo $p['post_title'];?> </h3>

                        <p><?php echo $p['post_excerpt']; ?></p>
                    </div>
                        <div class="sermons-dig">
                            <?php echo get_the_post_thumbnail($post->ID, 'sermons-diglist');?>
                        </div>

                </div>
            </div>
        <?php } ?>

        <div class="sermons_list">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <article class="item_sermons">
                    <?php echo get_the_post_thumbnail($post->ID, 'sermons-list');?>
                    <h3>
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </h3>
                    <span class="sermons_date">
                            <?php echo get_the_date();?>
                    </span>
                </article>
            <?php endwhile; endif; ?>
        </div>


        <!--            pagination-->
        <?php global $wp_query;
        if ($wp_query->max_num_pages>1){
            ?>
            <div class="pagination">
                <div class="left_arrow">
                    <?php
                    if (get_previous_posts_link()){
                        echo get_previous_posts_link('<i class="fa fa-angle-left" aria-hidden="true"></i>');
                    } else {
                        echo '<i class="fa fa-angle-left" aria-hidden="true"></i>';
                    } ?>
                </div>
                <div class="paginate_items">
                    <?php ale_page_links(); ?>
                </div>
                <div class="right_arrow">
                    <?php  if (get_next_posts_link()){
                        echo get_next_posts_link('<i class="fa fa-angle-right" aria-hidden="true"></i>');
                    } else {
                        echo '<i class="fa fa-angle-right" aria-hidden="true"></i>';
                    } ?>
                </div>
            </div>
        <?php } ?>

    </div>
    </div>



<?php get_footer() ?>