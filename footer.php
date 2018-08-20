    <footer>
        <div class="grid-footer">
            <div class="top">
                <nav class="menu-footer">
                    <ul>
                        <li><a href="<?php echo site_url('/');?>">Home</a></li>
                        <li><a href="<?php echo site_url('/quem-somos/');?>">Quem Somos</a></li>
                        <li><a href="<?php echo site_url('/tratamentos/');?>">Tratamentos</a></li>
                    </ul>
                    <ul>
                        <li><a href="<?php echo site_url('/blog/');?>">Blog</a></li>
                        <li><a href="<?php echo site_url('/contato/');?>">Contato</a></li>
                    </ul>
                </nav>

                <div class="info">
                    <div class="address">
                        <address>
                            <?php the_field('endereco', 'options');?><br>
                            Centro - Curitiba/PR
                        </address>
                        <div class="social">
                            <a href="https://www.facebook.com/beautyesteticacwb/" target="_blank"><span class="fa fa-facebook"></span></a>
                            <a href="https://www.instagram.com/beautyloungeestetica/" target="_blank"><span class="fa fa-instagram"></span></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bottom">
                <p>&copy; Copyright 2018 - Beauty Lounge Estética</p>
                <img src="<?php echo get_template_directory_uri();?>/assets/img/logo-footer.jpg" alt="Beauty Lounge Estética">
            </div>
        </div>
    </footer>

    <a href="https://api.whatsapp.com/send?phone=5541991532922" target="_blank" class="whatsapp-fixed">
        <span class="fa fa-whatsapp"></span>
        <span class="tooltip">Entre em contato conosco pelo WhatsApp</span>
    </a>          

    <?php wp_footer(); ?>
    <script src="<?php echo get_template_directory_uri();?>/assets/js/bundle.min.js"></script>
</body>

</html>