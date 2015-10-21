<!DOCTYPE html>
<html lang="<?php echo get_html_lang(); ?>">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php if ( $description = option('description')): ?>
        <meta name="description" content="<?php echo $description; ?>" />
    <?php endif; ?>

    <!-- Will build the page <title> -->
    <?php
        if (isset($title)) { $titleParts[] = strip_formatting($title); }
        $titleParts[] = option('site_title');
    ?>
    <title><?php echo implode(' &middot; ', $titleParts); ?></title>
        <link href='https://fonts.googleapis.com/css?family=Droid+Serif' rel='stylesheet' type='text/css'>

    <?php echo auto_discovery_link_tags(); ?>

    <!-- Will fire plugins that need to include their own files in <head> -->
    <?php fire_plugin_hook('public_head', array('view'=>$this)); ?>


    <!-- Need to add custom and third-party CSS files? Include them here -->
    <?php 
        queue_css_file('lib/bootstrap.min');
        queue_css_file('style');\
        queue_css_file('bootstrap-theme');
        echo head_css();
    ?>

    <!-- Need more JavaScript files? Include them here -->
    <?php 
        queue_js_file('lib/bootstrap.min');
        queue_js_file('globals');
        echo head_js(); 
    ?>
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<?php echo body_tag(array('id' => @$bodyid, 'class' => @$bodyclass)); ?>
    <?php fire_plugin_hook('public_body', array('view'=>$this)); ?>
<!--     <header>
        <div class="container">
            <?php fire_plugin_hook('public_header', array('view'=>$this)); ?>
            <h1 class="site-title text-center"><?php echo link_to_home_page(theme_logo()); ?></h1>
        </div>

        <nav class="navbar navbar-default" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#primary-navigation">
                        <span class="sr-only">Menu</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>

                <div class="collapse navbar-collapse" id="primary-navigation">
                    <?php echo public_nav_main_bootstrap(); ?>

                    <form class="navbar-form navbar-right" role="search" action="<?php echo public_url(''); ?>search">
                        <?php echo search_form(array('show_advanced' => false)); ?>
                    </form>
                </div>
            </div>
        </nav>
    </header>      -->   
        <header id="header-main">
      <div class="stripe-slope"></div>
      <div class="container">
      <div class="row">
          <div class="col-lg-5 col-md-3 col-xs-5">
            <a href="index.html"><img src="img/logo.png"></a>
          </div>

          <div class="col-lg-7 col-md-9 col-xs-12 fyv-nav-wrap">
            
            <nav class="navbar navbar-default">
              <button  class="navbar-toggle collapsed" data-toggle="collapse" aria-expanded="false" aria-controls="navbar" data-target="#main-nav-wrap">menu</button>
              <nav id="main-nav-wrap" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                  <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                      Hartford Voices <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                      <li><a href="exhibit-landing.html">Joe Bun Keo</a></li>
                      <li><a href="exhibit-landing.html">Joel Salisbury</a></li>                    
                    </ul>
                  </li>
                  <li><a href="#">Find Your Voice</a></li>
                  <li><a href="#">Collections</a></li>
                  <li><a href="#">About</a></li>
                </ul>
              </nav>
            </nav>
          </div>
        </div>
      </div>
    </header>
  
        <?php fire_plugin_hook('public_content_top', array('view'=>$this)); ?>
