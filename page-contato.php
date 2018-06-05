<?php get_header(); ?>

    <section class="title-internal">
        <h1>Fale conosco</h1>
    </section>

    <section class="about">
        <div class="grid-contact">
            <div class="info-contact">
                <h3>Nosso endereço</h3>
                <address>
                    Rua Ebano Pereira, 44
                    <br> Centro - Curitiba/PR
                </address>
                <h3>Horário de atendimento</h3>
                <p>Segunda à Sexta-feira das 9h às 18h</p>
                <h3>Contato</h3>
                <div class="phones">
                    <div class="phone">
                        <i class="fa fa-phone"></i>
                        <span>(41) 3029-2922</span>
                    </div>
                    <div class="phone">
                        <i class="fa fa-whatsapp"></i>
                        <span>(41) 99153-2922</span>
                    </div>
                </div>
            </div>

            <form class="form-contact">
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