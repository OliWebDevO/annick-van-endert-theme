<?php get_template_part("partials/header") ?>

<?php get_template_part("partials/navigation") ?> 
        <div class="hero-page"></div>
        <div class="title-page">
            <h2>News</h2>
        </div>
    </header>

    <!-- Start of page -->

    <div class="wrapper">
            <!-- News -->
                <div class="news-container">
                    <!-- News Column -->
                    <div class="news-main-container">
                        <div class="news_posts">
                            <!-- Loop PHP Debut-->
                            <?php
                            $loop = new WP_Query( array( 
                                'post_type' => 'news', // Va rechercher le type de contenu “job”
                                'category_name' => $current_slug = add_query_arg(array(), $wp->request), // Va rechercher le type de contenu “job”
                                'posts_per_page' => -1, // Affiche tout sans limite
                                'order' => 'ASC', // Chronologique ou pas (DESC)
                                    ));?>
                            <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                            <!-- Ce qui doit être "bouclé" -->

                            <!-- News Post -->
                            <div class="news_post">
                                <div class="news_post_image">
                                    <img src="<?php the_post_thumbnail_url(); ?>" alt="">
                                </div>
                                <div class="news_post_top">
                                    <div class="news_post_date_container">
                                        <div class="news_post_date">
                                            <div class="date_day"><?php the_field('jour');?></div>
                                            <div><?php the_field('mois');?></div>
                                        </div>
                                    </div>
                                    <div class="news_post_title_container">
                                        <div class="news_post_title">
                                            <a href="<?php the_permalink()?>"><h2><?php the_title(); ?></h2></a>
                                        </div>
                                        <div class="news_post_meta">
                                            <span class="news_post_author"><a href="#"><?php the_category(' | ') ; ?></a></span>
                                            <!-- <span>|</span>
                                            <span class="news_post_comments"><a href="#">3 Comments</a></span> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="news_post_text">
                                    <p><?php the_excerpt(); ?></p>
                                </div>
                                <div class="news_post_button btn-1">
                                    <a href="<?php the_permalink()?>">Read More</a>
                                </div>
                            </div>

                            <?php endwhile;
                            wp_reset_query();
                            ?>
                            <!-- Loop PHP Fin--> 
                             
                        </div>

                        <!-- Page Nav -->

                        <!-- <div class="news_page_nav">
                            <ul>
                                <li class="active text-center trans_200"><a href="#">01</a></li>
                                <li class="text-center trans_200"><a href="#">02</a></li>
                                <li class="text-center trans_200"><a href="#">03</a></li>
                            </ul>
                        </div> -->

                    </div>

                    <!-- Sidebar -->

                    <div class="news-side-container">
                            <!-- Archive -->
                            <div class="sidebar_section">
                                <div class="sidebar_section_title">
                                    <h3>NEWS // Catégories</h3>
                                </div>
                                <?php
                                $categories = get_categories( array(
                                    'orderby' => 'name',
                                    'order'   => 'ASC'
                                ) );

                                foreach( $categories as $category ) {
                                echo '<ul class="sidebar_list">
                                    <li class="sidebar_list_item">
                                        <a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a></li>
                                   
                                </ul>';   
                                } 
                                ?>
                            </div>

                            <!-- Artists Posts -->

                            <div class="sidebar_section">
                                <div class="sidebar_section_title">
                                    <h3>NEWS // Annick</h3>
                                </div>
                                
                                <div class="latest_posts">
                                    <!-- Loop PHP Debut-->
                                    <?php
                                    $loop = new WP_Query( array( 
                                        'post_type' => 'news', // Va rechercher le type de contenu “job”
                                        'category_name' => 'annick', // Va rechercher le type de contenu “job”
                                        'posts_per_page' => 5, // Affiche tout sans limite
                                        'order' => 'ASC', // Chronologique ou pas (DESC)
                                            ));?>
                                    <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                                    <!-- Ce qui doit être "bouclé" -->

                                    <!-- Latest Post -->
                                    <div class="latest_post">
                                        <div class="latest_post_image">
                                            <img class="latest_post_image" src="<?php the_post_thumbnail_url(); ?>">
                                        </div>
                                        <div class="latest_post_title">
                                            <a href="<?php the_permalink()?>"><?php the_title(); ?></a>
                                        </div>
                                        <div class="latest_post_meta">
                                            <span class="latest_post_author">
                                                <a href="#"><?php the_category(' | ') ; ?></a>
                                            </span>
                                        </div>
                                    </div>
                                     <?php endwhile;
                                    wp_reset_query();
                                    ?>
                                    <!-- Loop PHP Fin-->             
                                </div>
                                    
                            </div>

                            <!-- General News Posts -->

                            <div class="sidebar_section">
                                <div class="sidebar_section_title">
                                    <h3>NEWS // Général</h3>
                                </div>
                                <div class="latest_posts">
                                    
                                     <!-- Loop PHP Debut-->
                                     <?php
                                    $loop = new WP_Query( array( 
                                        'post_type' => 'news', // Va rechercher le type de contenu “job”
                                        'category_name' => 'general', // Va rechercher le type de contenu “job”
                                        'posts_per_page' => 5, // Affiche tout sans limite
                                        'order' => 'ASC', // Chronologique ou pas (DESC)
                                            ));?>
                                    <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                                    <!-- Ce qui doit être "bouclé" -->

                                    <!-- Latest Post -->
                                    <div class="latest_post">
                                        <div class="latest_post_image">
                                            <img class="latest_post_image" src="<?php the_post_thumbnail_url(); ?>">
                                        </div>
                                        <div class="latest_post_title">
                                            <a href="<?php the_permalink()?>"><?php the_title(); ?></a>
                                        </div>
                                        <div class="latest_post_meta">
                                            <span class="latest_post_author">
                                                <a href="#"><?php the_category(' | ') ; ?></a>
                                            </span>
                                        </div>
                                    </div>
                                     <?php endwhile;
                                    wp_reset_query();
                                    ?>
                                    <!-- Loop PHP Fin-->                                                              
                                </div>
                                    
                            </div>
                            <!-- Tags -->

                        <!--<div class="sidebar_section">
                                <div class="sidebar_section_title">
                                    <h3>Tags</h3>
                                </div>
                                <div class="tags d-flex flex-row flex-wrap">
                                    <div class="tag"><a href="#">Course</a></div>
                                    <div class="tag"><a href="#">Design</a></div>
                                    <div class="tag"><a href="#">FAQ</a></div>
                                    <div class="tag"><a href="#">Teachers</a></div>
                                    <div class="tag"><a href="#">School</a></div>
                                    <div class="tag"><a href="#">Graduate</a></div>
                                </div>
                            </div> -->
                        </div>
                 </div>
        </div>

    <!-- End of page -->

<?php get_template_part("partials/footer") ?>
