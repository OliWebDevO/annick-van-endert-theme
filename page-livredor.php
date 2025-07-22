<?php get_template_part("partials/header") ?>

<?php get_template_part("partials/navigation") ?> 
  
        <div class="hero-page"></div>
        <div class="title-page">
            <h2>Livre d'or</h2>
        </div>
    </header>

    <!-- Start of page -->
        <div class="wrapper wrapper-testimonial">
            <div class="">

                <!-- Loop PHP Debut-->
                <?php
                $loop = new WP_Query( array( 
                    'post_type' => 'livre-dor', // Va rechercher le type de contenu “job”
                    'posts_per_page' => -1, // Affiche tout sans limite 
                    'order' => 'ASC', // Chronologique ou pas (DESC)
                        ));?>
                <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                <!-- Ce qui doit être "bouclé" -->
                <div class="testimony wow animate__fadeInUp" data-wow-delay="0.1s">
                    <div class="info-testi">
                        <h3 class="h3"><?php the_title(); ?></h3>
                        <h3 class="h3 h3-2"><?php the_field('jour');?> <?php the_field('mois');?></h3>
                    </div>
                    <svg class="svg svg1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 320" fill="#FFF"><path d="M82.87 129.48S77.32 98.96 114.31 74c-12.95 0-89.7 30.52-89.7 113.74 0 33.09 27.59 59.73 61.01 58.19 29.85-1.37 54.07-25.6 55.44-55.45 1.54-33.41-25.1-61-58.19-61zm154.26 0S231.58 98.96 268.57 74c-12.95 0-89.7 30.52-89.7 113.74 0 33.09 27.58 59.73 61.01 58.19 29.85-1.37 54.07-25.6 55.44-55.45 1.54-33.41-25.1-61-58.19-61z"></path></svg>
                    
                    <?php the_excerpt();?>
                    
                    <svg class="svg svg2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 320" fill="#FFF"><path d="M239.64 74.01c-32.16-.89-59.56 23.76-61.9 55.85-2.59 35.43 25.38 64.97 60.26 64.97 0 0 0 15.82-10.97 34.02-5.9 9.79 4.91 21.1 15.04 15.8 30.22-15.81 62.45-48.71 56.36-110.25-3.24-32.64-26.45-59.5-58.79-60.39zm-156.74 0c-32.16-.89-59.56 23.76-61.9 55.85-2.59 35.43 25.38 64.97 60.26 64.97 0 0 0 15.82-10.97 34.02-5.9 9.79 4.91 21.1 15.04 15.8 30.22-15.81 62.45-48.71 56.36-110.25-3.25-32.64-26.45-59.5-58.79-60.39z"></path></svg>
                </div>
                <?php endwhile;
                wp_reset_query();
                ?>
                <!-- Loop PHP Fin-->
            </div>
        </div>

    <!-- End of page -->

<?php get_template_part("partials/footer") ?>
