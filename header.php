<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1,  shrink-to-fit=no" />
    <title></title>
    <?php wp_head();?>
  </head>
  <body class="prism-body">
    <nav class="navbar navbar-fixed-top navbar-default" id="topnav">
      <div class="container navbar-container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-top-collapse" aria-expanded="false">
            <span class="sr-only">Toggle Navigation</span>
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

        <div class="collapse navbar-collapse" id="navbar-top-collapse">
          <?php
            wp_nav_menu( array(
              'theme_location'    => 'primary',
              'depth'             => 2,
              'container'         => null,
              'menu_class'        => 'nav navbar-nav navbar-right',
              'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
              'walker'            => new WP_Bootstrap_Navwalker())
            );
          ?>
        </div>
      </div>

    </nav>


  </body>
</html>
