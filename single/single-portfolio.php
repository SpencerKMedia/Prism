<?php
/*
 * Template Name: Portfolio Article
 * Template Post Type: post
 */

 get_header();
 if(have_posts()):while(have_posts()):the_post(); ?>
<div style="margin-top: 75px;"></div>
<div class="container-fluid single-portfolio-header" style="background-image: url('<?php the_post_thumbnail_url();?>');">
  <h1><?php the_title();?></h1>

</div>
<div class="container"style="margin-bottom: 100px;">
  <!-- <h6>
    <?php
    // foreach((get_the_category()) as $category){
    //     echo $category->name;
    //     }
    ?>
  </h6> -->
  <!-- <h5><?php //the_author();?></h5> -->
  <div class="col-md-12">
    <h3>Case Study: <em style="font-weight: 500;"><?php the_title(); ?></em><small> | Created By: <?php the_author();?> | Category: <?php foreach((get_the_category()) as $category){echo $category->name . ' ';}?></small></h3>
  </div>
  <?php the_content(); ?>
</div>

<?php
endwhile;endif;wp_reset_postdata();
get_footer(); ?>
