<?php get_header();?>
    <div class="container blog_cont">
    <div class="wrapper">
    <h2 class="page-title" ><?php _e('Blog', 'aletheme') ?></h2>


        <?php
        $i = 0;

        if (have_posts()) : while (have_posts()) : the_post(); ?>
            <article class="blog_section">
                <div class="img_blog_item">
                    <a href="<?php the_permalink() ?>">
                    <?php if ( $i == 0 ){
                        echo get_the_post_thumbnail($post->ID, 'img_blog_big');
                    } else {
                        echo get_the_post_thumbnail($post->ID, 'img_blog_small');
                    }
                    $i++;
                    ?>
                    </a>
                </div>
                <span class="blog_item_cat">
                    <?php echo  the_category('', '', ''); ?>
                </span>
                <h3>
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </h3>
                <div class="blog_item_content">
                    <?php the_content(); ?>
                </div>
                <span class="blog_item_comments"><i class="fa fa-comments" aria-hidden="true"></i>
                    <?php comments_number( '0' ); ?>
                </span>
                <span class="">
                    <?php echo get_the_date('d F Y');?>
                </span>
            </article>
        <?php endwhile; endif; ?>


    </div>
    </div>
<!--    <!-- Content -->
<!--    <div class="blog-center-align">-->
<!---->
<!--    -->
<!---->
<!--        <!-- Filters Here -->
<!--        <ul class="blog-filter-line">-->
<!--            <li>--><?php //_e('Filter By','aletheme'); ?><!--:</li>-->
<!--            <li>-->
<!--                <a class="filter-caption"><p>--><?php //_e('Author','aletheme'); ?><!--</p><span></span></a>-->
<!--                <ul>-->
<!---->
<!--                    --><?php
//                    $args = array(
//                        'orderby'       => 'name',
//                        'order'         => 'ASC',
//                        'number'        => null,
//                        'optioncount'   => false,
//                        'exclude_admin' => false,
//                        'show_fullname' => false,
//                        'hide_empty'    => true,
//                        'echo'          => true,
//                        'style'         => 'list',
//                        'html'          => true );
//
//                    wp_list_authors($args); ?>
<!--                </ul>-->
<!---->
<!--            </li>-->
<!---->
<!--            <li>-->
<!--                <a class="filter-caption"><p>--><?php //_e('Category','aletheme'); ?><!--</p><span></span></a>-->
<!--                <ul>-->
<!--                    --><?php
//                    $args = array(
//                        'show_option_all'    => '',
//                        'orderby'            => 'name',
//                        'order'              => 'ASC',
//                        'style'              => 'list',
//                        'show_count'         => 0,
//                        'hide_empty'         => 1,
//                        'use_desc_for_title' => 1,
//                        'child_of'           => 0,
//                        'feed'               => '',
//                        'feed_type'          => '',
//                        'feed_image'         => '',
//                        'exclude'            => '',
//                        'exclude_tree'       => '',
//                        'include'            => '',
//                        'hierarchical'       => 1,
//                        'title_li'           => '',
//                        'show_option_none'   => __('No categories','aletheme'),
//                        'number'             => null,
//                        'echo'               => 1,
//                        'depth'              => 0,
//                        'current_category'   => 0,
//                        'pad_counts'         => 0,
//                        'taxonomy'           => 'category',
//                        'walker'             => null
//                    );
//                    wp_list_categories($args); ?>
<!--                </ul>-->
<!--            </li>-->
<!---->
<!--            <li>-->
<!--                <a class="filter-caption"><p>--><?php //_e('Tags','aletheme'); ?><!--</p><span></span></a>-->
<!--                --><?php
//                $tags = get_tags();
//                $html = '<ul>';
//                foreach ( $tags as $tag ) {
//                    $tag_link = get_tag_link( $tag->term_id );
//
//                    $html .= "<li><a href='{$tag_link}' title='{$tag->name} Tag' class='{$tag->slug}'>";
//                    $html .= "{$tag->name}</a></li>";
//                }
//                $html .= '</ul>';
//                echo $html;
//                ?>
<!--            </li>-->
<!---->
<!--        </ul>-->
<!---->
<!--        -->
<!---->
<!--        <!-- Blog Nav  -->
<!--        <div class="blog-nav">-->
<!--            <span class="left">--><?php //echo get_previous_posts_link(__('&lt; Newer Posts','aletheme')); ?><!--</span>-->
<!--            <span class="right">--><?php //echo get_next_posts_link(__('Older Posts &gt;','aletheme')); ?><!--</span>-->
<!--            <div class="center">--><?php //_e('page','aletheme'); ?><!-- --><?php //echo $paged; ?><!-- --><?php //_e('of','aletheme'); ?><!-- --><?php //echo $wp_query->max_num_pages; ?><!--</div>-->
<!--        </div>-->
<!---->
<!---->
<!---->
<!--    </div>-->
<?php get_footer(); ?>