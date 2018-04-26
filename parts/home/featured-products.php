<?php
  $args = array('category_name'=> 'feat-product', 'posts_per_page' => 2, 'order'=> 'desc');
  $query = New WP_Query($args);
?>
<?php if($query->have_posts()):while($query->have_posts()):$query->the_post();
 ?>
  <div class="col-md-6 market-item <?php if(the_field('class') == "disabled"){echo "disabled";}?>">
    <img src="<?php the_post_thumbnail_url(); ?>" class="img-responsive" />
    <div class='tag'> <?php the_field('tag') ?></div>
    <?php the_content();?>
      <a <?php if(the_field('class') == "disabled"){echo "disabled";}?> href="<?php the_permalink();?>" class="btn btn-market">
        Learn More
      </a>
  </div>
<?php endwhile;endif;wp_reset_postdata();?>
