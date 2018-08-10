<?php
get_header();
the_post();
$tecnico = new WP_Query(['post_type' => 'equipe', 'orderby' => 'title', 'order' => 'ASC', 'category_name' => 'tecnico']);
$adm = new WP_Query(['post_type' => 'equipe', 'orderby' => 'title', 'order' => 'ASC', 'category_name' =>'administrativo']);
?>

    <section class="title-internal">
        <h1>Somos a Beauty Lounge Estética</h1>
    </section>

    <section class="about">
        <div class="box-text">
            <?php the_content();?>
        </div>
        <section class="team">
            <h2 class="ui-title">Equipe Técnica</h2>
            <div class="grid">
            <?php while($tecnico->have_posts()): $tecnico->the_post();?>
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
            <h2 class="ui-title" style="margin-top: 50px">Equipe Administrativa</h2>
            <div class="grid">
            <?php while($adm->have_posts()): $adm->the_post();?>
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