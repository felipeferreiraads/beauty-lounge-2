<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Beauty Lounge Estética</title>
    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_template_directory_uri();?>assets/img/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_template_directory_uri();?>assets/img//apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri();?>assets/img//apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_template_directory_uri();?>assets/img//apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri();?>assets/img//apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_template_directory_uri();?>assets/img//apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_template_directory_uri();?>assets/img//apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_template_directory_uri();?>assets/img//apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri();?>assets/img//apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="<?php echo get_template_directory_uri();?>assets/img//android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri();?>assets/img//favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php echo get_template_directory_uri();?>assets/img//favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri();?>assets/img//favicon-16x16.png">
    <link rel="manifest" href="<?php echo get_template_directory_uri();?>assets/img//manifest.json">
    <meta name="msapplication-TileColor" content="#c83d8c">
    <meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri();?>assets/img//ms-icon-144x144.png">
    <meta name="theme-color" content="#c83d8c">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans|Signika:400,600,700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo get_template_directory_uri();?>/assets/css/style.min.css" />
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
                            <span>(41) 3029-2922</span>
                        </div>
                        <div class="phone">
                            <i class="fa fa-whatsapp"></i>
                            <span>(41) 99153-2922</span>
                        </div>
                    </div>
                    <nav class="ui-menu">
                        <ul>
                            <li><a href="<?php echo site_url('/');?>">Home</a></li>
                            <li><a href="<?php echo site_url('/quem-somos/');?>">Quem Somos</a></li>
                            <li><a href="<?php echo site_url('/tratamentos/');?>">Tratamentos</a></li>
                            <li><a href="#">Loja</a></li>
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
            <li><a href="#">Loja</a></li>
            <li><a href="<?php echo site_url('/blog/');?>">Blog</a></li>
            <li><a href="<?php echo site_url('/contato/');?>">Contato</a></li>
        </ul>

        <div class="social-links">
            <a href="https://www.facebook.com/fluentbee/" target="_blank"><span class="fa fa-facebook"></span></a>
            <a href="https://www.instagram.com/fluentbee/" target="_blank"><span class="fa fa-instagram"></span></a>
            <a href="https://www.youtube.com/channel/UCIEdtAMdoNreaQCO8a6XAjQ" target="_blank"><span class="fa fa-youtube-play"></span></a>
        </div>
    </nav>

	<div class="overlay-menu"></div>