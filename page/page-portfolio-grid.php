<?php
/* Template Name: Portfolio - Grid */

// $title == "Learn About Us At Spencer K Media";
get_header();
?>
<div class="container-fluid" style="padding-top:100px">
<div class="container heading-container">
  <h2 class="text-center">Our Work</h2>
  <div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4"><hr /></div>
    <div class="col-md-4"></div>
  </div>
   <ul class="filter-list">
      <a class="filter-link" href="https://www.spencerk.xyz/c/port/brand/"><li class="filter">Branding</li></a>
      <a class="filter-link" href="https://www.spencerk.xyz/c/port/ui/"><li class="filter">Web & UI Design</li></a>
      <a class="filter-link" href="https://www.spencerk.xyz/c/port/webapp/"><li class="filter">Web & Application Development</li></a>
      <a class="filter-link" href="https://www.spencerk.xyz/c/port/marketing/"><li class="filter">Marketing &amp; Copywriting</li></a>
      <a class="filter-link" href="https://www.spencerk.xyz/c/port/photo/"><li class="filter">Photography</li></a>
    </ul>
</div>
<div id="portfolio" class="container portfolio-container">
  <?php
  $args = array(
    'category_name'=>'brand,marketing,photo,webapp,ui',
    'orderby'=> 'date'
  );
  $query = New WP_Query($args);
  ?>
  <div id="portfolio-list" class="row"><!-- the "UL" -->
    <?php if($query->have_posts()):while($query->have_posts()):$query->the_post();?>
    <div class="col-md-4 portfolio-item all ui ">
      <img src="<?php the_post_thumbnail_url();?>" class="portfolio-image" />
      <div class="item-content">
        <h2><?php the_title();?></h2>
        <p>
          <?php echo get_excerpt();?><br />
          <span class="item-category"><?php the_category(' ');?></span>
        </p>
        <a href="<?php the_permalink();?>" class="btn btn-white">View Details</a>
      </div>
    </div>
    <?php endwhile; endif; wp_reset_postdata();?>
    <div class="col-md-4 portfolio-item all ui ">
      <img src="http://lorempixel.com/300/300" class="portfolio-image" />
      <div class="item-content">
        <h2>The Title</h2>
        <p>
          The Description
        </p>
        <a href="" class="btn btn-white">The Link</a>
      </div>
    </div>

    <div class="col-md-4 portfolio-item all webapp ">
      <img src="http://lorempixel.com/300/300" class="portfolio-image" />
      <div class="item-content">
        <h2>The Title</h2>
        <p>
          The Description
        </p>
        <a href="" class="btn btn-white">The Link</a>
      </div>
    </div>

    <div class="col-md-4 portfolio-item all photography ">
      <img src="http://lorempixel.com/300/300" class="portfolio-image" />
      <div class="item-content">
        <h2>The Title</h2>
        <p>
          The Description
        </p>
        <a href="" class="btn btn-white">The Link</a>
      </div>
    </div>

    <div class="col-md-4 portfolio-item all marketing ">
      <img src="http://lorempixel.com/300/300" class="portfolio-image" />
      <div class="item-content">
        <h2>The Title</h2>
        <p>
          The Description
        </p>
        <a href="" class="btn btn-white">The Link</a>
      </div>
    </div>

    <div class="col-md-4 portfolio-item all branding ">
      <img src="http://lorempixel.com/300/300" class="portfolio-image" />
      <div class="item-content">
        <h2>The Title</h2>
        <p>
          The Description
        </p>
        <a href="" class="btn btn-white">The Link</a>
      </div>
    </div>

  </div>
</div>
</div>
<?php
get_footer();
?>
