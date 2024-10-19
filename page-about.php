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

        <!-- INTRO -->
    <section class="aboutintro py-10 lg:py-20 shadow-effect">
      <div class="container">
        <div
          class="aboutintro__wrapper text-center grid gap-3 lg:gap-5 max-w-[1100px] mx-auto"
         >

        <?php $intro = new WP_Query(array(
            'post_type' => 'About',
            'posts_per_page' => -1,
            'meta_key' => 'Groupings',
            'meta_value' => 'Intro'
        ))?>

        <?php if($intro->have_posts()) : while($intro->have_posts()) : ($intro->the_post())?>

          <h3 class="line-text">Hello Sissy!</h3>
          <h3 class="decorative lg:text-[70px] lg:leading-[75px] text-[40px] leading-[45px] text-primary"><?php the_title()?></h3>
          <p class="lg:w-[85%] w-full mx-auto">
            <?php echo get_the_content()?>
          </p>

        <?php endwhile;
        else : 
            echo "No more posts :(";
        endif;
        wp_reset_postdata();
        ?>

        </div>
      </div>
    </section>

    <!-- MOTTO -->
        <?php 
        $motto = new WP_Query(array(
            'post_type' => 'About',
            'posts_per_page' => 1,
            'meta_key' => 'Groupings',
            'meta_value' => 'Motto'
        ));

        if($motto->have_posts()) : while($motto->have_posts()) : ($motto->the_post())?>
        
     <section
        class="aboutMotto h-[160px] w-full bg-cover bg-center grid items-center lg:h-[40vh] md:h-[25vh] py-10 lg:py-20"
            style="background-position: center; background-image: url('<?php $featured_image_url = get_the_post_thumbnail_url(get_the_ID()); 
                if ($featured_image_url) {
                    echo esc_url($featured_image_url);
                }
            ?>');">
        
        <div class="container">
            <div class="aboutMotto__wrapper text-center text-white lg:pt-[2rem]">
            <h4
                class="italic font-bold text-shadow leading-[20px] lg:leading-[30px] w-[80%] ml-[20%]"
            >
            <?php echo get_the_content()?>
            </h4>
            </div>
        </div>
    </section>
        <?php endwhile;
        else : 
            echo "No more posts :(";
        endif;
        wp_reset_postdata();
        ?>


    <!-- DREAM -->
    <section class="aboutDream py-10 lg:py-20 bg-secondary">
      <div class="container">
        <?php 
        $dream = new WP_Query(array(
            'post_type' => 'About',
            'posts_per_page' => 1,
            'meta_key' => 'Groupings',
            'meta_value' => 'Dream'
        ));

        if($dream->have_posts()) : while($dream->have_posts()) : ($dream->the_post())?>

        <div
          class="aboutDream__wrapper lg:flex md:flex md:justify-center items-center lg:justify-center gap-10"
         >
          <img
            src="<?php $featured_image_url = get_the_post_thumbnail_url(get_the_ID()); 
            if ($featured_image_url) {
                echo esc_url($featured_image_url);
            }
            ?>"
            alt=""
            class="hidden md:block lg:block lg:h-[30rem] md:h-[15rem]"
          />
        <?php echo get_the_content()?>
        </div>

        <?php endwhile;
        else : 
            echo "No more posts :(";
        endif;
        wp_reset_postdata();
        ?>
      </div>
    </section>

        <!-- TRAVEL -->
    <section class="aboutTravel py-10 lg:py-20">
      <div class="container">
        <div
          class="aboutTravel__wrapper flex flex-col items-center lg:flex-row lg:justify-evenly text-center"
        >
          <h3
            class="decorative lg:text-[70px] lg:leading-[75px] text-[40px] leading-[45px] text-primary"
          >
            Countries I've explored<br class="hidden lg:block" />—and more
            coming soon!
          </h3>
          <div class="aboutTravel__all grid justify-center text-cente gap-5">
            <div class="aboutTravel__countries">
              <h4 class="italic font-semibold">Asia</h4>

            
        
              <div class="aboutTravel__flags">
                <?php 
                $flags = new WP_Query(array(
                    'post_type' => 'Flags',
                    'posts_per_page' => -1,
                    'meta_key' => 'Groupings',
                    'meta_value' => 'Asia'
                ));

                if($flags->have_posts()) : while($flags->have_posts()) : ($flags->the_post())?>
                
                <?php if(has_post_thumbnail()) {the_post_thumbnail();}?>
                
                <?php endwhile;
                else : 
                    echo "No more posts :(";
                endif;
                wp_reset_postdata();
                ?>
              </div>

            
            </div>
            <div class="aboutTravel__countries">
              <h4 class="italic font-semibold">North America</h4>
              <div class="aboutTravel__flags">
                <img src="../img/usa-flag.png" alt="" />
                <img src="../img/mexico-flag.png" alt="" />
                <img src="../img/bahamas-flag.png" alt="" />
                <img src="../img/jamaica-flag.png" alt="" />
                <img src="../img/puertorico-flag.png" alt="" />
                <img src="../img/cayman-flag.png" alt="" />
                <img src="../img/canada-flag.png" alt="" />
                <img src="../img/belize-flag.png" alt="" />
                <img src="../img/honduras-flag.png" alt="" />
                <img src="../img/dominican-flag.png" alt="" />
                <img src="../img/haiti-flag.png" alt="" />
              </div>
            </div>
            <div class="aboutTravel__countries">
              <h4 class="italic font-semibold">Europe</h4>
              <div class="aboutTravel__flags">
                <img src="../img/portugal-flag.png" alt="" />
                <img src="../img/spain-flag.png" alt="" />
                <img src="../img/france-flag.png" alt="" />
                <img src="../img/italy-flag.png" alt="" />
                <img src="../img/germany-flag.png" alt="" />
                <img src="../img/uk-flag.png" alt="" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <!-- CTA -->
    <section
      class="CTA bg-[url('../img/CTA.png')] bg-cover bg-no-repeat bg-center py-14 lg:py-24"
     >
      <div class="container">
        <div
          class="CTA__wrapper grid justify-items-center items-center gap-1 lg:gap-2"
        >
          <span
            class="decorative text-primary text-center lg:text-[55px] lg:leading-[55px] md:text-[40px] md:leading-[40px] text-3xl font-bold"
          >
            Make it happen!
          </span>
          <p>Let's start planning your American.</p>
          <a class="btn bg-prmry mt-3 lg:mt-10" href="./services.html#order"
            >Inquire Now</a
          >
        </div>
      </div>
    </section>


<?php get_footer()?>