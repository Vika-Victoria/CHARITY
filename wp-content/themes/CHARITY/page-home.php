<?php
/*
  * Template name: Home
  * */
get_header();?>

<section class="home-slider">
    <div class="flexslider homeslider">
        <ul class="slides">
            <?php $slider = ale_sliders_get_slider(ale_get_option('homesliderslug')); ?>
            <?php if($slider): ?>
            <?php foreach ($slider['slides'] as $slide): ?>
                <li>
                    <figure>
                        <?php if ($slide['image']): ?>
                            <img src="<?php echo $slide['image'] ?>" alt="<?php echo $slide['title']; ?>">
                        <?php endif; ?>
                        <?php if ($slide['title'] or $slide['description']){ ?>
                    <figcaption>
                      <?php if ($slide['title']){ echo '<span class="mainslidertitle">' . $slide['title'] . '</span>'; } ?><br>
                      <?php if ($slide['description']){ echo '<span class="mainsliderdesc">' .  $slide['description'] . '</span>'; } ?><br>
                      <?php if ($slide['url']){ echo '<a href="' . $slide['url'] . '" class="sliderlinkmore">' . ('Details') . '</a>'; } ?>
                    </figcaption>
                        <?php } ?>
                    </figure>
                </li>
            <?php endforeach;?>
            <?php endif; ?>
        </ul>
    </div>
</section>


<?php get_footer();

