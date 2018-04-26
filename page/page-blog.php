<?php /* Template Name: Blog */?>
<?php get_header();?>

<div class="container-fluid landing blog">
  <div class="container text-center">
    <i style="font-size: 4em;" class="fa fa-clipboard"></i>
    <h1 style="font-size: 7em;">Blog</h1>
  </div>
</div>
<div class="container">
  <div class="row">
  <?php if(have_posts()):while(have_posts()):the_post(); ?>
    <div class="skill-box-wrap">
      <div class="skill-icon-box">
        <i style="font-size: 2em;" class="text-right fa fa-<?php the_field('icon');?>"></i>
      </div>
      <div class="skill-text-box">
        <h3><small></small><?php the_title();?></h3>
        <h6><?php the_content(); ?></h6>
      </div>
    </div>
  <?php endwhile;endif;wp_reset_postdata();?>
  </div>
</div>
<?php get_footer();?>
