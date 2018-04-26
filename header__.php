<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Spencer K Media | We're Your Creative Connection</title>
  <meta name="viewport" content="width=device-width, initial-scale=1,  shrink-to-fit=no">

  <?php wp_head();?>
</head>

<body>
  <nav class="navbar navbar-fixed-top" id="topnav">
    <div class="container navbar-container">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <?php
      if (!has_custom_logo()) {
          ?>
          <a class="navbar-brand" href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a>
          <?php
        }

        else{
           theme_prefix_the_custom_logo();
        }
        ?>
      </div>
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <?php
      wp_nav_menu( array(
            'theme_location'    => 'primary',
            'depth'             => 2,
            'container'         => null,
            'menu_class'        => 'nav navbar-nav',
            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
            'walker'            => new WP_Bootstrap_Navwalker())
        );
        ?>
        <?php
        wp_nav_menu( array(
              'theme_location'    => 'floating',
              'depth'             => 2,
              'container'         => null,
              'menu_class'        => 'nav navbar-nav navbar-right',
              'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
              'walker'            => new WP_Bootstrap_Navwalker())
          );
          ?>
      </div>
      <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
  </nav>
