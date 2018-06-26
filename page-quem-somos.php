<?php 
get_header();
the_post();
$equipe = new WP_Query(['post_type' => 'equipe']);Z
?>

    <section class="title-internal">
        <h1>Somos a Beauty Lounge Estética</h1>
    </section>

    <section class="about">
        <div class="box-text">
            <?php the_content();?>
        </div>
        <section class="team">
            <h2 class="ui-title">Nossa equipe</h2>
            <div class="grid">
            <?php while($equipe->have_posts()): $equipe->the_post();?>
                <div class="item">
                    <figure>
                        <img src="<?php echo get_the_post_thumbnail_url('full');?>" alt="<?php echo get_the_title();?>">
                    </figure>
                    <?php the_title('<h3>','</h3>');?>
                    <span><?php the_field('funcao');?></span>
                </div>
            <?php endwhile;?>
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