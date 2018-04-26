<?php
  $args = array('category_name'=> 'feat-skills', 'posts_per_page' => 4, 'order'=> 'asc');
  $query = New WP_Query($args);
?>
<div class="row">
<?php if($query->have_posts()):while($query->have_posts()):$query->the_post(); ?>
  <div  class="col-md-3">
    <div class="skill-box-wrap">
      <div class="skill-icon-box">
        <i style="font-size: 2em;" class="text-right fa fa-<?php the_field('icon');?>"></i>
      </div>
      <div class="skill-text-box">
        <h3><small></small><?php the_title();?></h3>
        <h6><?php the_content(); ?></h6>
      </div>
    </div>

  </div>
<?php endwhile;endif;wp_reset_postdata();?>
</div>
