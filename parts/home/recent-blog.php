<?php
$args = array('category_name'=>'b','post_per_page'=>3);
$query = new WP_Query($args);
if($query->have_posts()):while($query->have_posts()):$query->the_post();
?>
<div class="col-md-4 recent-blog-post">
  <img class="img-responsive recent-post-thumb" src="<?php the_post_thumbnail_url();?>">
  <h3 class="recent-post-content"><?php the_title();?></h3>
  <p class="recent-post-content">
    <?php echo(get_the_excerpt()); ?>
  </p>
  <a class="recent-blog-link recent-post-content" href="<?php the_permalink(); ?>">Learn More...</a>
</div>
<?php endwhile;endif;wp_reset_postdata();?>
