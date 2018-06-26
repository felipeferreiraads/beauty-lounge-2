<?php
get_header();
$banners_desktop = get_field('banners_desktop', 'options');
$banners_mobile = get_field('banners_mobile', 'options');
$treatments = new WP_Query(['post_type' => 'tratamentos', 'category_name' => 'destaques']);
$posts = new WP_Query(['post_type' => 'post', 'posts_per_page' => 3]);
$quem_somos = get_page_by_path('quem-somos');
?>

    <section class="banner">
        <div class="carousel">
        <?php foreach($banners_desktop as $banner):?>
            <img src="<?php echo $banner['url']?>" alt="<?php echo $banner['caption'];?>">
        <?php endforeach;?>
        </div>
        <div class="carousel-mobile">
        <?php foreach($banners_mobile as $banner):?>
            <img src="<?php echo $banner['url']?>" alt="<?php echo $banner['caption'];?>">
        <?php endforeach;?>
        </div>
    </section>

    <section class="treatments">
        <div class="container">
            <div class="grid-treatments">
                <h2 class="ui-title">Conheça nossos tratamentos</h2>
                <p class="subtitle">Ea do cillum cillum occaecat est dolor aute ea amet occaecat magna cupidatat aute ullamco.</p>
                <div class="carousel">
                <?php while($treatments->have_posts()): $treatments->the_post();?>
                    <div class="treatment">
                        <figure>
                            <img src="<?php echo get_the_post_thumbnail_url();?>" alt="<?php echo get_the_title();?>">
                        </figure>
                        <div class="info">
                            <?php the_title('<h3>','</h3>');?>
                            <?php the_excerpt();?>
                        </div>
                        <a href="<?php the_permalink();?>" class="ui-button know-more">
                            <span class="text">Saiba mais</span>
                            <span class="icon"><i class="fa fa-plus"></i></span>
                        </a>
                    </div>
                <?php endwhile;?>
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
                    <?php echo apply_filters('the_content', get_field('quem_somos', $quem_somos->ID));?>
                </div>
                <div class="right">
                    <h2>Últimas do blog</h2>
                    <?php while($posts->have_posts()): $posts->the_post(); $cat = get_the_category();?>
                    <a href="<?php the_permalink();?>" class="post">
                        <figure class="thumbnail">
                            <img src="<?php echo get_the_post_thumbnail_url();?>" alt="<?php echo get_the_title();?>">
                        </figure>
                        <div class="info">
                            <span class="category"><?php echo $cat[0]->name;?></span>
                            <?php the_title('<h3>','</h3>');?>
                        </div>
                    </a>
                    <?php endwhile;?>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>