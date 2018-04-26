<div clas="container-fluid">
<div id="carousel-example-generic" class="carousel slide portfolio-slider" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <?php $slider = get_posts(array('post_type' => 'slider', 'posts_per_page' => 5)); ?>
      <?php $count = 0; ?>
      <?php foreach($slider as $slide): ?>
      <div class="item <?php echo ($count == 0) ? 'active' : ''; ?>">
        <div class="col-md-6 item-image">
          <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($slide->ID)) ?>" draggable="false" class="img-responsive"/>
        </div>
        <div class="col-md-6 item-col">
          <h2 class="item-title"><?php echo $slide->post_title; ?></h2>
          <h4 class="item-url"><?php echo $slide->post_excerpt; ?></h4>
          <p class="item-content">
            <?php echo $slide->post_content; ?>
          </p>
        </div>

      </div>
      <?php $count++; ?>
    <?php endforeach; ?>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
