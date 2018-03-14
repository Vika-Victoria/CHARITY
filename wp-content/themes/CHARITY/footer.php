    <!-- Footer -->
<footer class="main_footer <?php if (!is_page_template('page-home.php') and !is_page_template('template-about.php')){echo 'border_top_footer'; } ?>">
    <div class="top_footer">
        <div class="wrapper">
            <div class="footer_logo footer_iner" >
                <?php if (ale_get_option('footerlogo')){?>
                    <a href="<?php echo home_url("/")?>" class="logo_link"><img src="<?php echo ale_get_option('footerlogo'); ?>"></a>
                <?php } ?>
            </div>
            <div class="menu_info footer_iner">
                <h5><?php _e('Information', 'alethemes'); ?></h5>
                <?php
                if ( has_nav_menu( 'footer_menu' ) ) {
                    wp_nav_menu(array(
                        'theme_location'=> 'footer_menu',
                        'menu'			=> 'Footer Menu',
                        'menu_class'	=> 'footermenu cf',
                        'walker'		=> new Aletheme_Nav_Walker(),
                        'container'		=> '',
                    ));
                }
                ?>
            </div>
            <div class="contact footer_iner">
                <h5><?php _e('Contacts', 'alethemes'); ?></h5>
                <?php if (ale_get_option('footer_phone')){ ?>
                    <div class="footer_phone">
                        <?php echo ale_get_option('footer_phone')?>
                    </div>
                <?php }?>

                <?php if (ale_get_option('footer_address')){ ?>
                    <div class="footer_address">
                        <?php echo ale_get_option('footer_address')?>
                    </div>
                <?php }?>

                <?php if (ale_get_option('footer_email')){ ?>
                    <div class="footer_email">
                        <a href="mailto:<?php echo ale_get_option('footer_email')?>"><?php echo ale_get_option('footer_email')?></a>
                    </div>
                <?php }?>
            </div>
            <div class="twitter footer_iner">
                <i class="fa fa-twitter-square" aria-hidden="true"></i><span>@iglesia</span>
                <p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this over 200 Latin words, combined with a handful of model sentence structures..</p>
            </div>
        </div>
    </div>
    <div class="bottom_footer">
        <div class="wrapper">
        <div class="copyrights">
            <?php if (ale_get_option('copyrights')) : ?>
                <?php echo ale_get_option('copyrights'); ?>
            <?php else: ?>
                &copy; <?php _e('2017 ALL RIGHTS RESERVED', 'aletheme')?>
            <?php endif; ?>
        </div>

        <div class="footer_social">
            <?php if (ale_get_option('fb')) { ?><a href="<?php echo ale_get_option('fb'); ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a><?php } ?>
            <?php if (ale_get_option('twi')) { ?><a href="<?php echo ale_get_option('twi'); ?>"><i class="fa fa-twitter-square" aria-hidden="true"></i></a><?php } ?>
            <?php if (ale_get_option('insta')) { ?><a href="<?php echo ale_get_option('insta'); ?>"><i class="fa fa-instagram" aria-hidden="true"></i></a><?php } ?>
            <?php if (ale_get_option('yb')) { ?><a href="<?php echo ale_get_option('yb'); ?>"><i class="fa fa-youtube" aria-hidden="true"></i></a><?php } ?>
        </div>
        </div>
    </div>
</footer>


    <!-- Scripts -->
    <?php wp_footer(); ?>
</body>
</html>