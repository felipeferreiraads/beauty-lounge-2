<?php 
get_header(); 
$posts = new WP_Query(['posts_per_page' => 10]);
$categories = get_categories([
    'exclude' => [1, 2, 3, 5, 6, 8]
]);
$most_viewed = pvc_get_most_viewed_posts(array('posts_per_page' => 5));
?>

    <section class="title-internal">
        <h1>Blog</h1>
    </section>

    <section class="blog">
        <div class="container">
            <div class="grid-blog">
                <div class="posts-internal">
                <?php while($posts->have_posts()): $posts->the_post(); $cat = get_the_category();?>
                    <a href="<?php the_permalink();?>" class="post">
                        <figure class="thumbnail">
                            <img src="<?php echo get_the_post_thumbnail_url();?>" alt="<?php echo get_the_title();?>">
                        </figure>
                        <div class="info">
                            <span class="category"><?php echo $cat[0]->name;?></span>
                            <?php the_title('<h3>','</h3>');?>
                            <?php the_excerpt();?>
                        </div>
                    </a>
                <?php endwhile;?>
                </div>

                <aside class="sidebar">
                    <div class="group">
                        <h2>Posts mais lidos</h2>
                        <ul>
                        <?php foreach($most_viewed as $post):?>
                            <li>
                                <a href="<?php echo the_permalink();?>">
                                    <?php echo get_the_title();?>
                                </a>
                            </li>
                        <?php endforeach;?>
                        </ul>
                    </div>
                    <div class="group">
                        <h2>Categorias</h2>
                        <ul>
                        <?php foreach($categories as $cat):?>
                            <li>
                                <a href="<?php echo esc_url( get_category_link( $cat->term_id ) ); ?>">
                                    <?php echo $cat->name;?>
                                </a>
                            </li>
                        <?php endforeach;?>
                        </ul>
                    </div>
                </aside>
            </div>
        </div>
    </section>

    <?php get_template_part( 'inc/newsletter' ); ?>

<?php get_footer(); ?>