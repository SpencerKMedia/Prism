<?php get_header('small'); ?>

<div class="body-selector">
<div class="container">


<?php
  if(have_posts()) : while(have_posts()) : the_post();?>
  <h3 class="headline"><?php the_title(); ?></h3>
<?php the_content();
  endwhile;endif; wp_reset_postdata();
?>

</div>
</div>
