<?php
  $args = array('category_name'=> 'port', 'posts_per_page' => 1, 'order'=> 'desc');
  $query = New WP_Query($args);
?>
<div class="container-fluid portfolio-container">
  <?php if($query->have_posts()):while($query->have_posts()):$query->the_post();?>
  <div class="col-md-12 piece" style="background-image: url('<?php the_post_thumbnail_url(); ?>')">

    <div class="piece-container">
      <h1><?php the_title();?></h1>
      <h6>By <?php the_author();?></h6>
      <a class="btn btn-white" href="<?php the_permalink(); ?>">View Project</a>
    </div>
  </div>
  <?php endwhile;endif;wp_reset_postdata(); ?>
</div>
