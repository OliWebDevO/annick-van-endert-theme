<?php get_template_part("partials/header") ?>

<?php get_template_part("partials/navigation") ?> 
  
        <div class="hero-page"></div>
        <div class="title-page">
            <h2>Contact</h2>
        </div>
    </header>

    <!-- Start of page -->

    <!-- <section class="section-contact">
        <div class="wrapper">
            <div class="contact-box wow animate__fadeInUp" data-wow-delay="0.1s">
                <div class="contact-title">
                    <h3>Laissez moi un message</h3>
                </div>
                <div class="contact-form">
                    <form class="contact-form" action="">
                        <div class="form-info">
                            <input type="text" placeholder="Votre nom">
                            <input type="text" placeholder="Votre mail">
                            <textarea name="message" placeholder="Votre message" id="" cols="30" rows="10"></textarea>
                            <input class="form-send" type="submit" value="Envoyer"> 
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section> -->

    <section class="section-contact">
        <div class="wrapper">
            <div class="contact-box wow animate__fadeInUp" data-wow-delay="0.1s">
                <div class="contact-title">
                    <h3>Contactez moi</h3>
                </div>
                <div class="contact-form">
                        <div class="form-info">
                        <?php echo do_shortcode('[contact-form-7 id="d512f30" title="Formulaire de contact 1"]')?>
                        </div>
                </div>
            </div>
        </div>
    </section>


    <!-- End of page -->

<?php get_template_part("partials/footer") ?>
