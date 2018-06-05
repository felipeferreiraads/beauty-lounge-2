<?php
get_header();
$cat = get_the_category();
global $post;
?>

    <section class="title-blog">
        <span class="category"><?php echo $cat[0]->name;?></span>
        <?php the_title('<h1>','</h1>');?>
        <a href="#" class="buy">Comprar na loja online</a>
    </section>

    <section class="single">
        <div class="box-text">
            <?php echo apply_filters( 'the_content', $post->post_content );?>
        </div>
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