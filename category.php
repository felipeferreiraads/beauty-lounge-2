<?php 
get_header(); 
$categories = get_categories();
?>

    <section class="title-internal">
        <h1>Blog</h1>
    </section>

    <section class="blog">
        <div class="container">
            <div class="grid-blog">
                <div class="posts-internal">
                <?php while(have_posts()): the_post(); $cat = get_the_category();?>
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
                            <li><a href="#">Officia nulla proident Lorem eu sunt laborum laboris in.</a></li>
                            <li><a href="#">Officia nulla proident Lorem eu sunt laborum laboris in.</a></li>
                            <li><a href="#">Officia nulla proident Lorem eu sunt laborum laboris in.</a></li>
                            <li><a href="#">Officia nulla proident Lorem eu sunt laborum laboris in.</a></li>
                            <li><a href="#">Officia nulla proident Lorem eu sunt laborum laboris in.</a></li>
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