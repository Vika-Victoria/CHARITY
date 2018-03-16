<?php get_header(); ?>

    <div class="container single_gallery">
        <div class="wrapper">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <div class="inner_wrapper">
                    <h2 class="post_title"><?php the_title(); ?></h2>
                    <div class="excerpt">
                        <?php the_excerpt(); ?>
                    </div>
                    <div class="post_info">
                        <div class="author">
                            <i class="fa fa-user" aria-hidden="true"></i><?php echo the_author_posts_link(); ?>
                        </div>
                        <div class="post_date">
                            <i class="fa fa-clock-o" aria-hidden="true"></i><?php echo get_the_date(); ?>
                        </div>
                    </div>
                </div>
                <div class="sermons_img">
                    <?php if (get_the_post_thumbnail()){echo get_the_post_thumbnail();} ?>
                </div>
                <div class="post_content">
                    <?php the_content(); ?>
                </div>
            <?php endwhile;  endif;  ?>

            <?php comments_template(); ?>
        </div>
    </div>


<?php get_footer(); ?>