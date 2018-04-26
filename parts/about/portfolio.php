<?php
$args = array('category_name'=> 'port', 'posts_per_page'=>3);
$query = New WP_Query($args);
?>

<?php if($query->have_posts()):while($query->have_posts()):$query->the_post(); ?>
<div class="col-md-4 portfolio-showcase" style="background-image: url('<?php the_post_thumbnail_url(); ?>');">
<div class="text-contained">
  <h4 class="text-center text-title"><?php the_title();?></h4>
  <a href="<?php the_permalink();?>" class="btn btn-hide">View More</a>
</div>
</div>
<?php
endwhile;endif;wp_reset_postdata();?>
