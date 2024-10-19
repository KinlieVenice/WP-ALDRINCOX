<?php get_header()?>

    <section class="banner" 
      style="background-position: center; background-image: url('<?php 
            $featured_image_url = get_the_post_thumbnail_url(get_the_ID()); 
            if ($featured_image_url) {
              echo esc_url($featured_image_url);
            }
        ?>');">
        <div class="container">
            <div class="banner__wrapper">
            <h2><?php the_title()?></h2>
            </div>
        </div>
    </section>



<?php get_footer()?>