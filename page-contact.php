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
                    <form id="contact-form" class="form-info">
                        <input type="text" name="from_name" placeholder="Votre nom" required>
                        <input type="email" name="from_email" placeholder="Votre mail" required>
                        <textarea name="message" placeholder="Votre message" cols="30" rows="10" required></textarea>
                        <button type="submit" class="form-send">Envoyer</button>
                    </form>
                    <p id="form-status"></p>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js"></script>
    <script>
        (function() {
            emailjs.init('E4spg6jnnpF7vsk8-');

            document.getElementById('contact-form').addEventListener('submit', function(e) {
                e.preventDefault();

                var btn = this.querySelector('.form-send');
                var status = document.getElementById('form-status');
                btn.disabled = true;
                btn.textContent = 'Envoi en cours...';

                var now = new Date();
                var time = now.toLocaleDateString('fr-BE') + ' ' + now.toLocaleTimeString('fr-BE');

                emailjs.send('service_7rs93lq', 'template_zahug6n', {
                    from_name: this.from_name.value,
                    from_email: this.from_email.value,
                    message: this.message.value,
                    time: time
                }).then(function() {
                    status.textContent = 'Message envoyé avec succès !';
                    status.style.color = 'green';
                    btn.textContent = 'Envoyer';
                    btn.disabled = false;
                    document.getElementById('contact-form').reset();
                }, function() {
                    status.textContent = 'Erreur lors de l\'envoi. Veuillez réessayer.';
                    status.style.color = 'red';
                    btn.textContent = 'Envoyer';
                    btn.disabled = false;
                });
            });
        })();
    </script>


    <!-- End of page -->

<?php get_template_part("partials/footer") ?>
