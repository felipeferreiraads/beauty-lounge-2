<?php get_header();?>

    <section class="title-internal">
        <h1>Somos a Beauty Lounge Estética</h1>
    </section>

    <section class="about">
        <div class="box-text">
            <p>Enim do pariatur adipisicing officia veniam incididunt exercitation dolore elit ex ea labore sunt ea. Commodo laborum in cupidatat qui. Irure quis et id proident magna officia ex elit incididunt sunt culpa. Voluptate minim proident amet fugiat voluptate exercitation veniam velit minim adipisicing ex aliquip consectetur. Ipsum Lorem ut commodo est qui irure do veniam consequat eiusmod non consectetur. Ea commodo non eu ad ipsum eiusmod ea non consectetur fugiat velit reprehenderit minim enim.</p>
        </div>            
        <div class="carousel">
            <img src="<?php echo get_template_directory_uri();?>/assets/img/clinica.jpg" alt="Clinica">
            <img src="<?php echo get_template_directory_uri();?>/assets/img/clinica.jpg" alt="Clinica">
        </div>
        <div class="box-text">
            <p>Veniam ea consectetur dolore cupidatat nisi sint cupidatat pariatur. Exercitation laboris consectetur reprehenderit aliquip. Irure in ullamco pariatur magna minim enim. In est nostrud aliquip consectetur laboris dolor sit duis ut officia. Nisi commodo minim minim ipsum labore nulla irure. Cupidatat eu est et nulla irure quis consectetur excepteur deserunt mollit magna.</p>
        </div>

        <section class="team">
            <h2 class="ui-title">Nossa equipe</h2>
            <div class="grid">
                <div class="item">
                    <figure>
                        <img src="<?php echo get_template_directory_uri();?>/assets/img/doctor.jpg" alt="Equipe">
                    </figure>
                    <h3>Nome do Profissional</h3>
                    <span>Função</span>
                </div>
                <div class="item">
                    <figure>
                        <img src="<?php echo get_template_directory_uri();?>/assets/img/doctor.jpg" alt="Equipe">
                    </figure>
                    <h3>Nome do Profissional</h3>
                    <span>Função</span>
                </div>
                <div class="item">
                    <figure>
                        <img src="<?php echo get_template_directory_uri();?>/assets/img/doctor.jpg" alt="Equipe">
                    </figure>
                    <h3>Nome do Profissional</h3>
                    <span>Função</span>
                </div>
                <div class="item">
                    <figure>
                        <img src="<?php echo get_template_directory_uri();?>/assets/img/doctor.jpg" alt="Equipe">
                    </figure>
                    <h3>Nome do Profissional</h3>
                    <span>Função</span>
                </div>
            </div>
        </section>
    </section>

    <section class="newsletter">
        <div class="grid">
            <div class="left">
                <img src="<?php echo get_template_directory_uri();?>/assets/img/logo-news.png" alt="Assine nossa newsletter" />
            </div>
            <div class="right">
                <h2>Assine nossa newsletter<br />
                    e fique por dentro das nossas promoções e novidades!                    
                </h2>
                <form>
                    <input type="email" name="email" placeholder="Seu e-mail">
                    <button>Enviar</button>
                </form>
            </div>
        </div>
    </section>

<?php get_footer(); ?>