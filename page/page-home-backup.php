<?php /* Template Name: Home Backup */?>
<?php get_header();?>
<?php get_template_part( 'parts/home/landing'); ?>
<?php //get_template_part( 'parts/home/calltoattention'); ?>
<div id="skills" class="container-fluid skills-container">
  <?php get_template_part( 'parts/home/featured-skills'); ?>
</div>

<div class="container-fluid">
  <?php the_content();?>
</div>
<?php //get_template_part( 'parts/home/portfolio-slider'); ?>
<div class="container-fluid stream-container">
  <div class="col-md-6">
    <h3>Catch us on stream!</h3>
    <p>
      Morbi dapibus massa massa, vel facilisis nisl finibus a. Nullam vitae rhoncus magna. Suspendisse ullamcorper tortor vitae odio pharetra, vitae faucibus ipsum semper. Mauris.
    </p>
    <p>
      Morbi dapibus massa massa, vel facilisis nisl finibus a. Nullam vitae rhoncus magna. Suspendisse ullamcorper tortor vitae odio pharetra, vitae faucibus ipsum semper. Mauris.
    </p>
    <a href="//twitch.tv/spencerkmedia" class="btn btn-white">Watch On Twitch</a>
  </div>
  <div class="col-md-6 twitch-box">
    <iframe src="https://player.twitch.tv/?channel=spencerkmedia&muted=true&autoplay=true" frameborder="0" allowfullscreen="true" scrolling="no" height="378" width="620"></iframe>
  </div>
</div>
<?php get_footer();?>
