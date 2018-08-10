<?php get_header(); ?>

    <section class="title-internal">
        <h1>Fale conosco</h1>
    </section>

    <section class="about">
        <div class="grid-contact">
            <div class="info-contact">
                <h3>Nosso endereço</h3>
                <address>
                    <?php the_field('endereco', 'options'); ?>
                    <br>Curitiba/PR
                </address>
                <h3>Horário de atendimento</h3>
                <p>Segunda à Sexta-feira das 9h às 18h</p>
                <h3>Contato</h3>
                <div class="phones">
                    <div class="phone">
                        <i class="fa fa-phone"></i>
                        <span><?php the_field('telefone', 'options');?></span>
                    </div>
                    <div class="phone">
                        <i class="fa fa-whatsapp"></i>
                        <span><?php the_field('whatsapp', 'options');?></span>
                    </div>
                </div>
            </div>

            <form class="form-contact js-form" action="<?php echo admin_url('admin-ajax.php') ?>" method="post" data-form-ajax="true">
                <input type="hidden" name="action" value="form_contact">
                <label>Nome</label>
                <input type="text" name="nome" required>
                <label>E-mail</label>
                <input type="email" name="email" required>
                <label>Telefone</label>
                <input type="text" name="telefone">
                <label>Mensagem</label>
                <textarea name="mensagem" required></textarea>
                <button type="submit">Enviar</button>
            </form>
        </div>
    </section>

    <?php get_template_part( 'inc/newsletter' ); ?>

<?php get_footer(); ?>