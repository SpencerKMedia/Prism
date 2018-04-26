<?php
$args = array('category_name'=> 'skills');
$query = New WP_Query($args);
?>

<?php if($query->have_posts()):while($query->have_posts()):$query->the_post(); ?>
<div class="skill">
  <div class="skillset" style="width: <?php the_field('percent');?>%">
      <div class="col-md-6 text-left">
        <p><?php the_title();?></p>
      </div>
      <div class="col-md-6 text-right">
        <?php the_excerpt();?>
      </div>
  </div>
</div>
<?php
endwhile;endif;wp_reset_postdata();?>
