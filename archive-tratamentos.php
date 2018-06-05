<?php 
get_header(); 
$categories = get_the_category();
?>

    <section class="title-internal">
        <h1>Tratamentos</h1>
    </section>

    <section class="about">
        <div class="container">
            <div class="grid-treatments-internal">
                <div class="filter">
                    <form class="search-form">
                        <input type="text" placeholder="Pesquisar">
                    </form>
                    <a href="#" class="category">Tratamentos faciais</a>
                    <a href="#" class="category">Tratamentos corporais</a>
                </div>

                <div class="treatments-internal">
                    <div class="treatment">
                        <figure>
                            <img src="<?php echo get_template_directory_uri();?>/assets/img/botox.jpg" alt="Botox">
                        </figure>
                        <div class="info">
                            <h3>Botox</h3>
                            <p>Consectetur qui proident elit ea minim cillum minim anim aliquip Lorem.</p>
                        </div>
                        <a href="#" class="ui-button know-more">
                            <span class="text">Saiba mais</span>
                            <span class="icon">
                                <i class="fa fa-plus"></i>
                            </span>
                        </a>
                    </div>
                    <div class="treatment">
                        <figure>
                            <img src="<?php echo get_template_directory_uri();?>/assets/img/botox.jpg" alt="Botox">
                        </figure>
                        <div class="info">
                            <h3>Botox</h3>
                            <p>Consectetur qui proident elit ea minim cillum minim anim aliquip Lorem.</p>
                        </div>
                        <a href="#" class="ui-button know-more">
                            <span class="text">Saiba mais</span>
                            <span class="icon">
                                <i class="fa fa-plus"></i>
                            </span>
                        </a>
                    </div>
                    <div class="treatment">
                        <figure>
                            <img src="<?php echo get_template_directory_uri();?>/assets/img/botox.jpg" alt="Botox">
                        </figure>
                        <div class="info">
                            <h3>Botox</h3>
                            <p>Consectetur qui proident elit ea minim cillum minim anim aliquip Lorem.</p>
                        </div>
                        <a href="#" class="ui-button know-more">
                            <span class="text">Saiba mais</span>
                            <span class="icon">
                                <i class="fa fa-plus"></i>
                            </span>
                        </a>
                    </div>
                    <div class="treatment">
                        <figure>
                            <img src="<?php echo get_template_directory_uri();?>/assets/img/botox.jpg" alt="Botox">
                        </figure>
                        <div class="info">
                            <h3>Botox</h3>
                            <p>Consectetur qui proident elit ea minim cillum minim anim aliquip Lorem.</p>
                        </div>
                        <a href="#" class="ui-button know-more">
                            <span class="text">Saiba mais</span>
                            <span class="icon">
                                <i class="fa fa-plus"></i>
                            </span>
                        </a>
                    </div>
                    <div class="treatment">
                        <figure>
                            <img src="<?php echo get_template_directory_uri();?>/assets/img/botox.jpg" alt="Botox">
                        </figure>
                        <div class="info">
                            <h3>Botox</h3>
                            <p>Consectetur qui proident elit ea minim cillum minim anim aliquip Lorem.</p>
                        </div>
                        <a href="#" class="ui-button know-more">
                            <span class="text">Saiba mais</span>
                            <span class="icon">
                                <i class="fa fa-plus"></i>
                            </span>
                        </a>
                    </div>
                    <div class="treatment">
                        <figure>
                            <img src="<?php echo get_template_directory_uri();?>/assets/img/botox.jpg" alt="Botox">
                        </figure>
                        <div class="info">
                            <h3>Botox</h3>
                            <p>Consectetur qui proident elit ea minim cillum minim anim aliquip Lorem.</p>
                        </div>
                        <a href="#" class="ui-button know-more">
                            <span class="text">Saiba mais</span>
                            <span class="icon">
                                <i class="fa fa-plus"></i>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="newsletter">
        <div class="grid">
            <div class="left">
                <img src="<?php echo get_template_directory_uri();?>/assets/img/logo-news.png" alt="Assine nossa newsletter" />
            </div>
            <div class="right">
                <h2>Assine nossa newsletter
                    <br /> e fique por dentro das nossas promoções e novidades!
                </h2>
                <form>
                    <input type="email" name="email" placeholder="Seu e-mail">
                    <button>Enviar</button>
                </form>
            </div>
        </div>
    </section>

<?php get_footer(); ?>