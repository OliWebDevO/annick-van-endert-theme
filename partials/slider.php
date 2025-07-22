 
   <div class="app">
    <!-- Fashion slider container -->
    <div class="fashion-slider">
      <div class="swiper">
        <div class="swiper-wrapper">
          <!-- configure slide color with "data-slide-bg-color" attribute -->
          <!-- <div class="swiper-slide" data-slide-bg-color="#9FA051"> -->
      		   <?php
                    $loop = new WP_Query( array( 
                        'post_type' => 'slider', // Va rechercher le type de contenu “job”
                        'posts_per_page' => -1, // Affiche tout sans limite 
                        'order' => 'ASC', // Chronologique ou pas (DESC)
                            ));?>
                    <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                    <!-- Ce qui doit être "bouclé" -->
          <div class="swiper-slide" data-slide-bg-color="<?php the_field('opacite_slider');?>">
            <!-- slide title wrap -->
            <div class="fashion-slider-title" data-swiper-parallax="-130%">
              <!-- slide title text -->
              <a class='slidera' href="<?php bloginfo("url")?>/<?php the_field('identifiant_de_lopacite');?>">
                  <div class="fashion-slider-title-text"><?php the_title(); ?></div>
              </a>
            </div>
            <!-- slide image wrap -->
            <div class="fashion-slider-scale">
              <!-- slide image -->
              <!--<img src="<?php the_post_thumbnail_url(); ?>">-->
              <!--<img  class="mobile-img" src="<?php the_field('photo_slider_mobile');?>">-->
              <picture>
                  <source media="(min-width: 780px)" srcset="<?php the_post_thumbnail_url(); ?>">
                  <source media="(max-width: 780px)" srcset="<?php the_field('photo_slider_mobile');?>">
                  <img src="" alt="IfItDoesntMatchAnyMedia">
              </picture>
            </div>
          </div>
			  <?php endwhile;
              wp_reset_query();
              ?>

        </div>

        <!-- right/next navigation button -->
        <div class="fashion-slider-button-prev fashion-slider-button">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 350 160 90">
            <g class="fashion-slider-svg-wrap">
              <g class="fashion-slider-svg-circle-wrap">
                <circle cx="42" cy="42" r="40"></circle>
              </g>
              <path class="fashion-slider-svg-arrow" d="M.983,6.929,4.447,3.464.983,0,0,.983,2.482,3.464,0,5.946Z">
              </path>
              <path class="fashion-slider-svg-line" d="M80,0H0"></path>
            </g>
          </svg>
        </div>
        <!-- left/previous navigation button -->
        <div class="fashion-slider-button-next fashion-slider-button">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 350 160 90">
            <g class="fashion-slider-svg-wrap">
              <g class="fashion-slider-svg-circle-wrap">
                <circle cx="42" cy="42" r="40"></circle>
              </g>
              <path class="fashion-slider-svg-arrow" d="M.983,6.929,4.447,3.464.983,0,0,.983,2.482,3.464,0,5.946Z">
              </path>
              <path class="fashion-slider-svg-line" d="M80,0H0"></path>
            </g>
          </svg>
        </div>
      </div>
    </div>
  </div>



</header>