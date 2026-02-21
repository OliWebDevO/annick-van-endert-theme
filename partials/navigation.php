
<body>
    <div class="preloader"><div class="preloader-spinner"></div></div>
    <header>
        <div class="top-bar">
            <div class="breadcrumb">
                <a class="link" href="<?php bloginfo("url")?>">Accueil</a>
                <a class="link" href="<?php bloginfo("url")?>/gallery">Séries de tableaux</a> 
                <a class="link" href="<?php bloginfo("url")?>/galleryartsenic">Artsenic</a>
                <a class="link" href="<?php bloginfo("url")?>/contact">Contact</a>
              	<!--<?php
                  if ( function_exists('yoast_breadcrumb') ) {
                    yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
                  }
                  ?>-->
            </div>
            <div class="follow">
                <div class="f-text">
                    Suivez moi : 
                </div>
              	<!-- Loop PHP Debut-->
                <?php
                  $loop = new WP_Query( array( 
                      'post_type' => 'info', // Va rechercher le type de contenu “job”
                      'posts_per_page' => -1, // Affiche tout sans limite 
                      'order' => 'ASC', // Chronologique ou pas (DESC)
                        ));?>
                <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                <!-- Ce qui doit être "bouclé" -->
                <div class="f-social">
                    <a class="btn-lg-square text-primary border-end rounded-0" href="<?php the_field('facebook');?>"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn-lg-square text-primary pe-0" href="<?php the_field('instagram');?>"><i class="fab fa-instagram"></i></a>
                </div>
                <?php endwhile;
                wp_reset_query();
                ?>
                <!-- Loop PHP Fin-->
            </div>
        </div>
        <nav>
            <div class="n-logo">
                <a href="<?php bloginfo("url")?>">
                    <!-- <h1>Annick</h1>-->
                  	<img src="<?php bloginfo("template_url")?>/img/LogoAnnickOrange.png" alt="logo" class="logo">
                </a>
            </div>
            <div class="burger">
                <div class="bline"></div>
                <div class="bline"></div>
                <div class="bline"></div>
            </div>
            <div class="n-nav">
                <ul class="main-menu">
                    <li class="main-li">
                        <a class="link" href="<?php bloginfo("url")?>">Accueil</a>
                    </li>
                    <li class="main-li">
                        <a class="link" href="<?php bloginfo("url")?>/about">A propos</a>
                        <ul class="sub-menu">
                            <li>
                                <a class="link" href="<?php bloginfo("url")?>/about#annick">Annick</a>
                            </li>
                            <li>
                                <a  class="link" href="<?php bloginfo("url")?>/about#artsenic">Artsenic</a>
                            </li>
                        </ul>
                    </li>
                    <li class="main-li">
                        <a class="link" href="<?php bloginfo("url")?>/gallery">Galerie</a>
                        <ul class="sub-menu">
                            <li>
                                <a class="link" href="<?php bloginfo("url")?>/gallery">Annick</a>
                            </li>
                            <li>
                                <a class="link" href="<?php bloginfo("url")?>/galleryartsenic">Artsenic</a>
                            </li>
                        </ul>
                    </li>
                    <li class="main-li">
                        <a class="link" href="<?php bloginfo("url")?>/news">News</a>
                    </li>
                    <li class="main-li">
                        <a class="link" href="<?php bloginfo("url")?>/livredor">Livre d'or</a>
                    </li>
                    <li class="main-li">
                        <a class="link" href="<?php bloginfo("url")?>/contact">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- <div class="n-contact">
                <div class="n-phone flex-shrink-0 btn-lg-square border border-light rounded-circle">
                    <i class="fa fa-phone text-primary"></i>
                </div>
                <div class="n-details">
                    <div class="n-me">
                        <a href="<?php bloginfo("url")?>/contact">Me contacter</a>
                    </div>
                    <div class="n-mail">
                        <a href="">Annickvanendert@hotmail.com</a>
                    </div>
                </div>
            </div> -->
            <div class="n-contact">
                <div class="n-phone flex-shrink-0 btn-lg-square border border-light rounded-circle">
                    <a href="<?php bloginfo("url")?>/contact"><i class="fa-solid fa-envelope text-primary"></i></a>
                </div>
            </div>
        </nav>
        <div class="b-nav">
            <div class="burger">
                <div class="bline"></div>
                <div class="bline"></div>
                <div class="bline"></div>
            </div>
            <ul class="main-menu">
                    <li class="main-li">
                        <a class="link" href="<?php bloginfo("url")?>">Accueil</a>
                    </li>
                    <li class="main-li">
                        <a class="link" href="<?php bloginfo("url")?>/about">A propos</a>
                        <ul class="sub-menu">
                            <li>
                                <a class="link" href="<?php bloginfo("url")?>/about#annick">Annick</a>
                            </li>
                            <li>
                                <a  class="link" href="<?php bloginfo("url")?>/about#artsenic">Artsenic</a>
                            </li>
                        </ul>
                    </li>
                    <li class="main-li">
                        <a class="link" href="<?php bloginfo("url")?>/gallery">Galerie</a>
                        <ul class="sub-menu">
                            <li>
                                <a class="link" href="<?php bloginfo("url")?>/gallery">Annick</a>
                            </li>
                            <li>
                                <a class="link" href="<?php bloginfo("url")?>/galleryartsenic">Artsenic</a>
                            </li>
                        </ul>
                    </li>
                    <li class="main-li">
                        <a class="link" href="<?php bloginfo("url")?>/news">News</a>
                    </li>
                    <li class="main-li">
                        <a class="link" href="<?php bloginfo("url")?>/livredor">Livre d'or</a>
                    </li>
                    <li class="main-li">
                        <a class="link" href="<?php bloginfo("url")?>/contact">Contact</a>
                    </li>
                </ul>
        </div>
        
