<div class="parrallax">
        <div class="parrallax-img"></div>
    </div>
    <button class="back-to-top"><i class="bi bi-arrow-up"></i></button>
    <footer>
        <div class="f-wrapper">
            <div class="f-contact">
              <!-- Loop PHP Debut-->
                <?php
                  $loop = new WP_Query( array( 
                      'post_type' => 'info', // Va rechercher le type de contenu “job”
                      'posts_per_page' => -1, // Affiche tout sans limite 
                      'order' => 'ASC', // Chronologique ou pas (DESC)
                        ));?>
                <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                <!-- Ce qui doit être "bouclé" -->
              	<div class="f-c">
                  <img src="<?php bloginfo("template_url")?>/img/LogoAnnickOrange.png" alt="logo" class="logo">
                  <h3 class="footer-h3">Annick Van Endert</h3>
                  <p><i class="fa fa-map-marker-alt me-3"></i><?php the_field('adresse');?></p>
                  <!-- <p><i class="fa fa-phone-alt me-3"></i><?php the_field('telephone');?></p> -->
                  <p><i class="fa fa-envelope me-3"></i><?php the_field('mail');?></p>
                </div>
                <div class="f-social">
                    <a href="<?php the_field('facebook');?>"><i class="fab fa-facebook-f"></i></a>
                    <a href="<?php the_field('instagram');?>"><i class="fa-brands fa-instagram"></i></a>
                </div>
              	<div class="f-c">
                  <p><span class='foo-orange'>Design & Conception</span> : <a class='link' href="https://www.olivervdb.com">Oliver Van Droogenbroeck</a></p>
                </div>
                <?php endwhile;
                wp_reset_query();
                ?>
                <!-- Loop PHP Fin-->
            </div>
            <div class="f-menu">
                <h3 class="footer-h3">Menu</h3>
                <ul>
                    <a class="link" href="<?php bloginfo("url")?>">
                        <li>Accueil</li>
                    </a>
                    <a class="link" href="<?php bloginfo("url")?>/about">
                        <li>A propos</li>
                    </a>
                    <a class="link" href="<?php bloginfo("url")?>/gallery">
                        <li>Gallerie</li>
                    </a>
                    <a class="link" href="<?php bloginfo("url")?>/news">
                        <li>News</li>
                    </a>
                    <a class="link" href="<?php bloginfo("url")?>/livredor">
                        <li>Livre d'or</li>
                    </a>
                    <a class="link" href="<?php bloginfo("url")?>/contact">
                        <li>Contact</li>
                    </a>
                </ul>
            </div>
            <div class="f-collection">
                <h3 class="footer-h3">Collections d'oeuvres</h3>
                <ul>
                    <a class="link" href="<?php bloginfo("url")?>/gallery">
                        <li>Annick</li>
                    </a>
                    <a class="link" href="<?php bloginfo("url")?>/galleryartsenic">
                        <li>Artsenic</li>
                    </a>
                </ul>
            </div>
            <div class="f-gallery">
                <h3 class="footer-h3">Galerie Photo</h3>
                <div class="f-img-box">
                    <a href="<?php bloginfo("url")?>/gallery"><img src=" <?php bloginfo("template_url")?>/img/motard1.jpg" alt=""></a>
                    <a href="<?php bloginfo("url")?>/gallery"><img src=" <?php bloginfo("template_url")?>/img/art1.jpeg" alt=""></a>
                    <a href="<?php bloginfo("url")?>/gallery"><img src=" <?php bloginfo("template_url")?>/img/projet1.jpeg" alt=""></a>
                    <a href="<?php bloginfo("url")?>/gallery"><img src=" <?php bloginfo("template_url")?>/img/projet2.jpeg" alt=""></a>
                    <a href="<?php bloginfo("url")?>/gallery"><img src=" <?php bloginfo("template_url")?>/img/art2.jpeg" alt=""></a>
                    <a href="<?php bloginfo("url")?>/gallery"><img src=" <?php bloginfo("template_url")?>/img/gallery4.jpeg" alt=""></a>
                </div>
            </div>
        </div>
    </footer>
    <script defer src="<?php bloginfo("template_url")?>/scripts/mainslider.js?<?php echo time(); ?>"></script>
	<script defer src="<?php bloginfo("template_url")?>/scripts/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="<?php bloginfo("template_url")?>/plugins/wow.js/dist/wow.min.js"></script>
    <script src="<?php bloginfo("template_url")?>/plugins/lenis.min.js"></script> 
	<script src="<?php bloginfo("template_url")?>/plugins/fashion-slider.js"></script>
    <script type="text/javascript" src="<?php bloginfo("template_url")?>/plugins/simple-lightbox.min.js"></script>


</body>

</html>