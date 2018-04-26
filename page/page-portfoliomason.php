<?php /* Template Name: Portfolio - Mason Grid */?>
<?php get_header();?>
<div class="container-fluid landing case">
  <div class="container text-center">
    <i style="font-size: 4em;" class="fa fa-folder-open"></i>
    <h1 style="font-size: 7em;">Case Studies</h1>
  </div>
</div>
<div class="container-fluid mason-container">
  <?php
  $args = array('category_name'=>'port');
  $query = new WP_Query($args);
  ?>
  <?php if($query->have_posts()):while($query->have_posts()):$query->the_post();?>
  <div class="row mason-row">
    <a href="<?php the_permalink();?>"><div class="col-md-6 mason-image" style="background-image: url('<?php the_post_thumbnail_url();?>');">
    </div></a>
    <div class="col-md-6 mason-col">
        <h3><?php the_title();?></h3>
        <a href="<?php the_permalink();?>" class="btn btn-blue">Learn More</a>
    </div>
  </div>
  <?php endwhile; endif;wp_reset_postdata();?>
</div>
<?php get_footer();?>
