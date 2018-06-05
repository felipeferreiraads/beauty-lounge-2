<?php get_header();?>

    <section class="banner">
        <div class="carousel">
            <img src="<?php echo get_template_directory_uri();?>/assets/img/banner.jpg" alt="Banner">
            <img src="<?php echo get_template_directory_uri();?>/assets/img/banner.jpg" alt="Banner">
        </div>
        <div class="carousel-mobile">
            <img src="<?php echo get_template_directory_uri();?>/assets/img/banner-mobile.jpg" alt="Banner">
            <img src="<?php echo get_template_directory_uri();?>/assets/img/banner-mobile.jpg" alt="Banner">
        </div>
    </section>

    <section class="treatments">
        <div class="container">
            <div class="grid-treatments">
                <h2 class="ui-title">Conheça nossos tratamentos</h2>
                <p class="subtitle">Ea do cillum cillum occaecat est dolor aute ea amet occaecat magna cupidatat aute ullamco.</p>
                <div class="carousel">
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
                            <span class="icon"><i class="fa fa-plus"></i></span>
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
                            <span class="icon"><i class="fa fa-plus"></i></span>
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
                            <span class="icon"><i class="fa fa-plus"></i></span>
                        </a>
                    </div>
                </div>

                <div class="prev"><span class="fa fa-angle-left"></span></div>
                <div class="next"><span class="fa fa-angle-right"></span></div>
            </div>
            <a href="#" class="all">
                Conheça todos os nosso tratamentos
                <span>
                    <i class="fa fa-angle-right"></i>
                </span>
            </a>
        </div>
    </section>

    <section class="blog-home">
        <div class="container">
            <div class="grid-blog-home">
                <div class="left">
                    <h2>A Beauty Lounge Estética</h2>
                    <p>Sint sunt dolore est in anim cillum deserunt laboris et adipisicing. Ipsum sit do cillum consequat id voluptate ex tempor occaecat eiusmod excepteur duis minim qui. Non ipsum cillum nisi incididunt in culpa aute consequat mollit officia sunt fugiat elit. Reprehenderit anim irure aute ullamco elit.</p>
                    <p>Ea exercitation magna fugiat ipsum. Esse exercitation et eu voluptate sit adipisicing duis sint. Amet nulla esse qui dolor laboris tempor deserunt in magna esse duis culpa. Enim veniam laboris nostrud ea aute velit. In irure nisi cillum non aliqua exercitation duis exercitation ex labore nisi et. Culpa culpa dolore et exercitation eu dolore.</p>
                </div>
                <div class="right">
                    <h2>Últimas do blog</h2>
                    <a href="#" class="post">
                        <figure class="thumbnail">
                            <img src="<?php echo get_template_directory_uri();?>/assets/img/botox.jpg" alt="Post Title">
                        </figure>
                        <div class="info">
                            <span class="category">Categoria</span>
                            <h3>Nome do notícia com até 3 linhas de texto lorem on ipsum dolor sit amet</h3>
                        </div>
                    </a>
    
                    <a href="#" class="post">
                        <figure class="thumbnail">
                            <img src="<?php echo get_template_directory_uri();?>/assets/img/botox.jpg" alt="Post Title">
                        </figure>
                        <div class="info">
                            <span class="category">Categoria</span>
                            <h3>Nome do notícia com até 3 linhas de texto lorem on ipsum dolor sit amet</h3>
                        </div>
                    </a>
                    <a href="#" class="post">
                        <figure class="thumbnail">
                            <img src="<?php echo get_template_directory_uri();?>/assets/img/botox.jpg" alt="Post Title">
                        </figure>
                        <div class="info">
                            <span class="category">Categoria</span>
                            <h3>Nome do notícia com até 3 linhas de texto lorem on ipsum dolor sit amet</h3>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>