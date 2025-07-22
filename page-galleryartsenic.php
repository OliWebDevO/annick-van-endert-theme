<?php get_template_part("partials/header") ?>

<?php get_template_part("partials/navigation") ?> 
  
        <div class="hero-page"></div>
        <div class="title-page">
            <h2>Galerie Artsenic</h2>
        </div>
    </header>

    <!-- Start of page -->

    <div class="gallery-section">
        <div class="wrapper">
            <div class="gallery-btns button-group filterizr-filter">
                <button class="btn-1 gal gal-big"><a href="<?php bloginfo("url")?>/gallery">Annick</a></button>
                <button class="btn-1 gal active gal-big"><a href="<?php bloginfo("url")?>/galleryartsenic">Artsenic</a></button>
            </div>
            <div class="gallery-btns2 g-btns-2 button-group filterizr-filter">
                <button class="btn-1 gal active" data-filter="*">Tout</button>
                <button class="btn-1 gal" data-filter="toile">Toiles</button>
                <button class="btn-1 gal" data-filter="dessin">Dessins</button>
                <button class="btn-1 gal" data-filter="sculpture">Sculptures</button>
                <button class="btn-1 gal" data-filter="divers">Divers</button>
            </div>
            <div class="gallery">
            <?php
                $loop = new WP_Query( array( 
                    'post_type' => 'oeuvre-artsenic', // Va rechercher le type de contenu “job”
                    'posts_per_page' => -1, // Affiche tout sans limite
                    'order' => 'ASC', // Chronologique ou pas (DESC)
                        ));?>
                <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                <!-- Ce qui doit être "bouclé" -->
                <div class='gal-cont-img filtr-item' data-filter="<?php the_field('type_doeuvre');?>">
                	<a href="<?php the_post_thumbnail_url(); ?>">
                      <img class="filtr-item" data-filter="<?php the_field('type_doeuvre');?>" src="<?php the_post_thumbnail_url(); ?>" alt="">
                      <div class='gal-titre'><?php the_excerpt(); ?></div>
                  	</a>
              	</div>
                <?php endwhile;
                wp_reset_query();
                ?>
            </div>
        </div>
    </div>

    <!-- End of page -->

<?php get_template_part("partials/footer") ?>
