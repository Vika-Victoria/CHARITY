<?php get_header(); ?>
    <!-- Content -->
    <div class="container contact">
        <div class="wrapper">
            <h2 class="page-title" ><?php _e('Gallery', 'aletheme') ?></h2>

                <div class="page_content gallery-page cf">
<!--                    --><?php //global $query_string; query_posts($query_string.'&posts_per_page=6');?>
                    <?php
                    $i = 0;


                    if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <div class="gallery-post">
                            <a href="<?php the_permalink(); ?>">

                                <?php
                                if ($i == 2){
                                    echo get_the_post_thumbnail($post->ID, 'gallery-vertical');
                                } elseif ($i == 7){
                                    echo get_the_post_thumbnail($post->ID, 'gallery-bigkvadrat');
                                } else{
                                echo get_the_post_thumbnail($post->ID, 'gallery-kvadrat'); }
                                $i++;
                                ?>

                                <span class="mask">
                                    <span class="arrow">
                                        <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                    </span>
                                </span>

                            </a>
                        </div>
                       <?php endwhile;  endif;  ?>
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



<?php get_footer(); ?>