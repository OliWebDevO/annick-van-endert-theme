<?php get_template_part("partials/header") ?>

<?php get_template_part("partials/navigation") ?> 

        <div class="hero-page"></div>
        <div class="title-page">
            <h2>A propos</h2>
        </div>

    </header>
    <!-- Start of page -->

    <div class="wrapper">
            <!-- Loop PHP Debut-->
            <?php
            $loop = new WP_Query( array( 
                'post_type' => 'a-propos', // Va rechercher le type de contenu “job”
                'posts_per_page' => 1, // Affiche tout sans limite 
                'offset' => 0, // Commence la boucle après avoir "passé" les 3 premiers
                'order' => 'ASC', // Chronologique ou pas (DESC)
                    ));?>
            <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
            <!-- Ce qui doit être "bouclé" -->
            <div class="about-box" id="annick">       
                <div class="">
                    <div class="grid-imgs">
                        <img class="grid-img-1 wow animate__fadeInDown" data-wow-delay="0.1s" src="<?php the_field('petite_photo_haut');?>" alt="">                             
                        <img class="grid-img-2 wow animate__fadeInUp" data-wow-delay="0.3s" src="<?php the_field('petite_photo_bas');?>" alt="">   
                        <img class="grid-img-3 wow animate__fadeInRight" data-wow-delay="0.5s" src="<?php the_field('grande_photo_droite');?>" alt="">   
                    </div>
                </div>
                <div class="s1-txt wow animate__fadeInRight" data-wow-delay="0.3s">
                    <h3 class="h3">
                    <?php the_field('sous_titre');?>
                    </h3>
                    <h2 class="h2">
                    <?php the_title(); ?>
                    </h2>
                    <p class="paragraph">
                    <?php the_excerpt(); ?>
                    </p>
                </div>
            </div>
            <?php endwhile;
            wp_reset_query();
            ?>
            <!-- Loop PHP Fin-->

            <!-- Loop PHP Debut-->
             <?php
            $loop = new WP_Query( array( 
                'post_type' => 'a-propos', // Va rechercher le type de contenu “job”
                'posts_per_page' => 0, // Affiche tout sans limite 
                'offset' => 1, // Commence la boucle après avoir "passé" les 3 premiers
                'order' => 'ASC', // Chronologique ou pas (DESC)
                    ));?>
            <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
            <!-- Ce qui doit être "bouclé" -->
            <div class="about-box artscenic-about" id="artsenic">
              	<div class="about-mobile" >
                    <div class="grid-imgs">
                            <img class="grid-img-1 wow animate__fadeInDown" data-wow-delay="0.1s" src="<?php the_field('petite_photo_haut');?>" alt="">                             
                            <img class="grid-img-2 wow animate__fadeInUp" data-wow-delay="0.3s" src="<?php the_field('petite_photo_bas');?>" alt="">   
                            <img class="grid-img-3 wow animate__fadeInRight" data-wow-delay="0.5s" src="<?php the_field('grande_photo_droite');?>" alt="">   
                    </div>
                </div>
                <div class="s1-txt s2 wow animate__fadeInLeft" data-wow-delay="0.3s">
                    <h3 class="h3">
                    <?php the_field('sous_titre');?>
                    </h3>
                    <h2 class="h2">
                    <?php the_title(); ?>
                    </h2>
                    <p class="paragraph">
                    <?php the_excerpt(); ?>
                    </p>
                </div>
                <div class="about-desktop" >
                    <div class="grid-imgs">
                            <img class="grid-img-1 wow animate__fadeInDown" data-wow-delay="0.1s" src="<?php the_field('petite_photo_haut');?>" alt="">                             
                            <img class="grid-img-2 wow animate__fadeInUp" data-wow-delay="0.3s" src="<?php the_field('petite_photo_bas');?>" alt="">   
                            <img class="grid-img-3 wow animate__fadeInRight" data-wow-delay="0.5s" src="<?php the_field('grande_photo_droite');?>" alt="">   
                    </div>
                </div>
            </div>
            <?php endwhile;
            wp_reset_query();
            ?>
            <!-- Loop PHP Fin-->
        </div>

    <!-- End of page -->

    <?php get_template_part("partials/footer") ?>
