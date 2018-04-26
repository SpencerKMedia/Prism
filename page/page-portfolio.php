<?php /* Template Name: Portfolio - Simple Grid */?>
<?php get_header();?>
<div class="container-fluid case-landing">
  <div class="container text-center">
    <i style="font-size: 4em;" class="fa fa-folder-open"></i>
    <h1 style="font-size: 7em;">Case Studies</h1>
  </div>
</div>
<div class="container">
  <div class="row text-center">
    <h3>Our projects from the whole spectrum!</h3>
  </div>
  <?php
  $args = array('category_name'=>'port');
  $query = new WP_Query($args);
  ?>
  <div class="row">
    <?php if($query->have_posts()):while($query->have_posts()):$query->the_post();?>
    <div class="col-md-4 case" style="background-image: url('<?php the_post_thumbnail_url();?>');">
      <div class="case-inner">
        <h3><?php the_title();?></h3>
        <a href="<?php the_permalink();?>" class="btn btn-white">Learn More</a>
      </div>
    </div>
    <?php endwhile; endif;wp_reset_postdata();?>
    <!-- <div class="col-md-4 case" style="background-image: url('https://images.pexels.com/photos/251225/pexels-photo-251225.jpeg');">
      <div class="case-inner">
        <h3>Coming Soon</h3>
        <a href="#" class="btn btn-white">Learn More</a>
      </div>
    </div>
    <div class="col-md-4 case" style="background-image: url('https://images.pexels.com/photos/326514/pexels-photo-326514.jpeg');">
      <div class="case-inner">
        <h3>Coming Soon</h3>
        <a href="#" class="btn btn-white">Learn More</a>
      </div>
    </div> -->
    <!-- <div class="col-md-4 case" style="background-image: url('https://images.pexels.com/photos/326505/pexels-photo-326505.jpeg')">
      <div class="case-inner">
        <h3>Our Latest cases</h3>
        <a href="" class="btn btn-white">Learn More</a>
      </div>
    </div>
    <div class="col-md-4 case" style="background-image: url('https://images.pexels.com/photos/244132/pexels-photo-244132.jpeg')">
      <div class="case-inner">
        <h3>Our Latest cases</h3>
        <a href="" class="btn btn-white">Learn More</a>
      </div>
    </div>
    <div class="col-md-4 case" style="background-image: url('https://images.pexels.com/photos/177557/pexels-photo-177557.jpeg')">
      <div class="case-inner">
        <h3>Our Latest cases</h3>
        <a href="" class="btn btn-white">Learn More</a>
      </div>
    </div> -->
  </div>
</div>
<?php get_footer();?>
