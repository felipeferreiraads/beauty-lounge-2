<!DOCTYPE html>
<html>
<head>
    <?php wp_head(); ?>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri();?>/assets/img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri();?>/assets/img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri();?>/assets/img/favicon-16x16.png">
    <link rel="manifest" href="<?php echo get_template_directory_uri();?>/assets/img/site.webmanifest">
    <link rel="mask-icon" href="<?php echo get_template_directory_uri();?>/assets/img/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans|Signika:400,600,700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo get_template_directory_uri();?>/assets/css/style.min.css" />
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-123637463-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-123637463-1');
    </script>

</head>

<body>
    <header class="nav-down">
        <div class="container">
            <div class="grid-header">
                <div class="logo">
                    <a href="<?php echo site_url('/');?>">
                        <img src="<?php echo get_template_directory_uri();?>/assets/img/logo-header.png" alt="Beauty Lounge Estética">
                    </a>
                </div>

                <div class="right">
                    <div class="info">
                        <div class="search">
                            <i class="fa fa-search"></i>
                            <form action="/">
                                <input type="text" name="s" placeholder="Pesquisar">
                            </form>
                        </div>
                        <div class="phone">
                            <i class="fa fa-phone"></i>
                            <span><?php the_field('telefone', 'options');?></span>
                        </div>
                        <div class="phone">
                            <i class="fa fa-whatsapp"></i>
                            <span><?php the_field('whatsapp', 'options');?></span>
                        </div>
                    </div>
                    <nav class="ui-menu">
                        <ul>
                            <li><a href="<?php echo site_url('/');?>">Home</a></li>
                            <li><a href="<?php echo site_url('/quem-somos/');?>">Quem Somos</a></li>
                            <li><a href="<?php echo site_url('/tratamentos/');?>">Tratamentos</a></li>
                            <li><a href="<?php echo site_url('/blog/');?>">Blog</a></li>
                            <li><a href="<?php echo site_url('/contato/');?>">Contato</a></li>
                        </ul>
                    </nav>
                </div>

                <a href="#" class="open-menu">
                    <span class="fa fa-bars"></span>
                </a>
            </div>
        </div>
    </header>

    <nav class="menu-mobile">
        <a href="#" class="close-menu"><span class="fa fa-times"></span></a>
        <form action="#">
            <input type="text" name="s" placeholder="Pesquisar">
            <button type="submit"><span class="fa fa-search"></span></button>
        </form>

        <ul>
            <li><a href="<?php echo site_url('/');?>">Home</a></li>
            <li><a href="<?php echo site_url('/quem-somos/');?>">Quem somos</a></li>
            <li><a href="<?php echo site_url('/tratamentos/');?>">Tratamentos</a></li>
            <li><a href="<?php echo site_url('/blog/');?>">Blog</a></li>
            <li><a href="<?php echo site_url('/contato/');?>">Contato</a></li>
        </ul>

        <div class="social-links">
            <a href="https://www.facebook.com/beautyesteticacwb/" target="_blank"><span class="fa fa-facebook"></span></a>
            <a href="https://www.instagram.com/beautyloungeestetica/" target="_blank"><span class="fa fa-instagram"></span></a>
            <a href="https://www.youtube.com/channel/UClIhw2lf0qj-mCAe3KOQHEQ" target="_blank"><span class="fa fa-youtube-play"></span></a>
        </div>
    </nav>

	<div class="overlay-menu"></div>