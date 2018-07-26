<?php
get_header();
the_post();
$equipe = new WP_Query(['post_type' => 'equipe', 'orderby' => 'title', 'order' => 'ASC']);
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
                        <img src="<?php the_field('primeira');?>" alt="<?php echo get_the_title();?>" class="first">
                        <img src="<?php the_field('segunda');?>" alt="<?php echo get_the_title();?>" class="second">
                    </figure>
                    <?php the_title('<h3>','</h3>');?>
                    <span><?php the_field('funcao');?></span>
                </div>
            <?php endwhile;?>
            </div>
        </section>
    </section>

    <?php get_template_part( 'inc/newsletter' ); ?>

<?php get_footer(); ?>