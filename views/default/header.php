<?php global $categories, $cities; ?>
<!DOCTYPE html>
<html>
  <head>
    <title><?php _e($seo_title); ?></title>
    <meta name="author" content="<?php _e(APP_AUTHOR); ?>">
    <meta name="description" content="<?php _e($seo_desc); ?>">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

    <!-- Bootstrap -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php _e(THEME_ASSETS); ?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php _e(THEME_ASSETS); ?>css/theme.css" rel="stylesheet">
    
    <!-- From Stack Theme -->
    <link href="<?php _e(THEME_ASSETS); ?>css/stack/stack-interface.css" rel="stylesheet" type="text/css" media="all" />
    <link href="<?php _e(THEME_ASSETS); ?>css/stack/socicon.css" rel="stylesheet" type="text/css" media="all" />
    <link href="<?php _e(THEME_ASSETS); ?>css/stack/lightbox.min.css" rel="stylesheet" type="text/css" media="all" />
    <link href="<?php _e(THEME_ASSETS); ?>css/stack/flickity.css" rel="stylesheet" type="text/css" media="all" />
    <link href="<?php _e(THEME_ASSETS); ?>css/stack/iconsmind.css" rel="stylesheet" type="text/css" media="all" />
    <link href="<?php _e(THEME_ASSETS); ?>css/stack/jquery.steps.css" rel="stylesheet" type="text/css" media="all" />
    <link href="<?php _e(THEME_ASSETS); ?>css/stack/theme.css" rel="stylesheet" type="text/css" media="all" />
    <link href="<?php _e(THEME_ASSETS); ?>css/stack/custom.css" rel="stylesheet" type="text/css" media="all" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:200,300,400,400i,500,600,700%7CMerriweather:300,300i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  
    <link rel="shortcut icon" href="<?php _e(THEME_ASSETS);; ?>ico/favicon.png">
    <!-- Open Graph -->
    <meta property="og:title" content="<?php _e($seo_title); ?>" />
    <meta property="og:url" content="<?php _e($seo_url); ?>" />
    <?php if (isset($job) && $job->logo != ''): ?>
    <meta property="og:image" content="<?php _e(ASSET_URL . "images/thumb_{$job->logo}"); ?>" />
    <?php endif; ?>
    <meta property="og:description" content="<?php _e($seo_desc); ?>" />
    <meta property="og:site_name" content="<?php _e($seo_title); ?>" />

    <link rel="canonical" href="<?php _e($seo_url); ?>" />
    <link rel="shortlink" href="<?php _e($seo_url); ?>" />

    <?php if (isset($markdown)): ?>
        <link href="<?php _e(ASSET_URL); ?>bootstrap-markdown/css/bootstrap-markdown.min.css" rel="stylesheet">
    <?php endif; ?>
  </head>
  <body>
        <div class="nav-container ">
            <div class="bar bar--sm visible-xs">
                <div class="container">
                    <div class="row">
                        <div class="col-3 col-md-2">
                            <a class="navbar-brand" href="<?php _e(BASE_URL); ?>"><?php _e(APP_NAME); ?></a>

                        </div>
                        <div class="col-9 col-md-10 text-right">
                            <a href="#" class="hamburger-toggle" data-toggle-class="#menu1;hidden-xs">
                                <i class="icon icon--sm stack-interface stack-menu"></i>
                            </a>
                        </div>
                    </div>
                    <!--end of row-->
                </div>
                <!--end of container-->
            </div>
            <!--end bar-->
            <nav id="menu1" class="bar bar--sm bar-1 hidden-xs bg--secondary">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5 hidden-xs">
                            <div class="bar__module">
                                <a class="navbar-brand" href="<?php _e(BASE_URL); ?>"><?php _e(APP_NAME); ?></a>
                            </div>
                            <!--end module-->
                        </div>
                        <div class="col-lg-7 col-md-12 text-right text-left-xs text-left-sm">
                            <div class="bar__module">
                                <ul class="menu-horizontal text-left">
                                    <li>
                                        <a href="">Home</span>
                                    </li>
                                    <li>
                                        <a href="">All Jobs</span>
                                    </li>
                                    <li>
                                        <a href="">FAQ</span>
                                    </li>
                                    <li>
                                        <a href="">Resources</span>
                                    </li>
                                    <li>
                                        <a href="">How to post</span>
                                    </li>
                                   
                                </ul>
                            </div>
                            <!--end module-->
                            <div class="bar__module">
                                <a class="btn btn--sm btn--primary type--uppercase" href="#">
                                    <span class="btn__text">
                                        Post a Job
                                    </span>
                                </a>
                            </div>
                            <!--end module-->
                        </div>
                    </div>
                    <!--end of row-->
                </div>
                <!--end of container-->
            </nav>
            <!--end bar-->
        </div>

        <div class="main-container theme-showcase">

     