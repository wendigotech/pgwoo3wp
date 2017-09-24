<!doctype html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Pinegrow Web Editor">
        <!-- Bootstrap core CSS -->
        <!-- Custom styles for this template -->
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
        <?php wp_head(); ?>
    </head>
    <body class="<?php echo implode(' ', get_body_class()); ?>">
        <div class="site-container">
            <header id="masthead" class="site-header">
                <nav class="navbar navbar-default navbar-fixed-top navbar-custom">
                    <div class="container">
                        <!--Brand and toggle get grouped for better mobile display-->
                        <div class="navbar-header page-scroll">
                            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                <span class="sr-only"><?php _e( 'Toggle navigation', 'pgwoo3' ); ?></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand navbar-custom-brand navbar-shrink" href="#page-top" img="img" resposive=""><?php _e( 'Harold Pine', 'pgwoo3' ); ?> </a>
                        </div>
                        <!--Collect the nav links, forms, and other content for toggling-->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav navbar-right">
                                <li class="hidden">
                                    <a href="#page-top"></a>
                                </li>
                                <li class="page-scroll">
                                    <a href="#portfolio"><?php _e( 'Portfolio', 'pgwoo3' ); ?></a>
                                </li>
                                <li class="page-scroll">
                                    <a href="#about"><?php _e( 'About', 'pgwoo3' ); ?></a>
                                </li>
                                <li class="page-scroll">
                                    <a href="#contact"><?php _e( 'Contact', 'pgwoo3' ); ?></a>
                                </li>
                            </ul>
                        </div>
                        <!--/.navbar-collapse-->
                    </div>
                    <!--/.container-fluid-->
                </nav>
                <div class="container-fluid breadcrumbs-section" id="more">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="breadcrumbs-cnt">
                                <?php get_template_part( 'assets/breadcrumbs/breadcrumb' ); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <?php if ( is_singular() ) : ?>
                    <?php wp_enqueue_script( 'comment-reply' ); ?>
                <?php endif; ?>
            </header>
            <div class="hero jumbotron">
                <div class="hero-content">
                    <video loop autoplay muted poster="<?php echo get_template_directory_uri(); ?>/videos/video_background.jpg" class="hero-video" src="videos/video_background.mp4">
                        <source src="<?php echo get_template_directory_uri(); ?>/videos/video_background.mp4" type="video/mp4" />
                        <source src="<?php echo get_template_directory_uri(); ?>/videos/video_background.ogg" type="video/ogg" />
                        <source src="<?php echo get_template_directory_uri(); ?>/videos/video_background.webm" type="video/webm" />
                        <?php _e( 'Your browser does not support the HTML5 video tag.', 'pgwoo3' ); ?>
                    </video>
                    <div class="hero-text">
                        <h1><?php bloginfo( 'name' ); ?></h1>
                        <p><?php bloginfo( 'description' ); ?></p>
                        <a class="btn btn-primary btn-lg btn-outline" href="#more"><?php _e( 'Read More', 'pgwoo3' ); ?></a>
                    </div>
                </div>
            </div>
            <main class="site-inner site-content">