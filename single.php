<?php 
get_header();
$cat = get_the_category();
the_post();
?>

    <section class="title-blog">
        <span class="category"><?php echo $cat[0]->name;?></span>
        <?php the_title('<h1>','</h1>');?>
        <div class="share">
            <span class="text">Compartilhe</span>
            <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo get_the_permalink();?>" class="share"><span class="fa fa-facebook"></span></a>
            <a href="https://twitter.com/home?status=<?php echo get_the_permalink();?>" class="share"><span class="fa fa-twitter"></span></a>
            <a href="https://api.whatsapp.com/send?text=<?php echo get_the_permalink();?>" data-action="share/whatsapp/share" target="_blank"><span class="fa fa-whatsapp"></span></a>
        </div>
    </section>

    <section class="single">
        <div class="box-text">
            <?php the_content();?>
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