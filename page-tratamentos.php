<?php
get_header();
$posts = new WP_Query(['post_type' => 'tratamentos']);
?>

    <section class="title-internal">
        <?php the_title('<h1>', '</h1>');?>
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
                <?php while($posts->have_posts()): $posts->the_post(); $cata = get_the_category();?>
                    <div class="grid-brick" data-group=['<?php echo strtolower(str_replace(' ', '-',$cat[0]->name));?>']>
                        <div class="treatment">
                            <figure>
                                <img src="<?php echo get_the_post_thumbnail_url();?>" alt="<?php echo get_the_title();?>">
                            </figure>
                            <div class="info">
                                <?php the_title('<h3>', '</h3>');?>
                                <?php the_excerpt();?>
                            </div>
                            <a href="<?php the_permalink();?>" class="ui-button know-more">
                                <span class="text">Saiba mais</span>
                                <span class="icon">
                                    <i class="fa fa-plus"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                <?php endwhile;?>
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