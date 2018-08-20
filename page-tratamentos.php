<?php
get_header();
$posts = new WP_Query(['post_type' => 'tratamentos', 'posts_per_page' => 150, 'orderby' => 'title', 'order' => 'ASC']);
?>

    <section class="title-internal">
        <?php the_title('<h1>', '</h1>');?>
    </section>

    <section class="about">
        <div class="container">
            <div class="grid-treatments-internal">
                <div class="filter filter-shuffle">
                    <form class="search-form">
                        <input type="text" placeholder="Pesquisar" class="shuffle-search">
                    </form>
                    <button class="filter-category" data-group="tratamentos-faciais">Tratamentos faciais</button>
                    <button class="filter-category" data-group="tratamentos-corporais">Tratamentos corporais</button>
                </div>

                <div class="treatments-internal" id="grid-treatments">
                <?php while($posts->have_posts()): $posts->the_post(); $cat = get_the_category();;?>
                    <div class="treatment" data-groups='<?php echo json_encode([$cat[0]->slug]);?>' data-title="<?php echo get_the_title();?>">
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
                <?php endwhile;?>
                </div>
            </div>
        </div>
    </section>

    <?php get_template_part( 'inc/newsletter' ); ?>

<?php get_footer(); ?>