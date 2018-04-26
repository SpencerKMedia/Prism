<?php /* Template Name: Portfolio Category */ get_header( 'page'); ?>

<div class="container-fluid" style="padding-top:100px">
    <div class="col-md-9">
      <div class="row">
      <?php if(have_posts()):while(have_posts()):the_post();?>



        <?php if ( has_post_thumbnail() ) {
           $post_thumbnail=get_the_post_thumbnail_url(get_the_id(), 'full');?>
           <a href="<?php the_permalink();?>">
            <div class="category-item background" style="background-image: url('<?php echo $post_thumbnail; ?>')">
              <div class="text-contained">
                <h2 class="text-center text-title"><?php the_title(); ?></h2>
              </div>
            </div>
          </a>
           <?php
           } ?>
      <?php endwhile;endif;wp_reset_postdata();?>

   </div>
    </div>
    <?php get_sidebar( 'portfolio' ); ?>
  </div>

  <?php get_footer( 'page'); ?>
