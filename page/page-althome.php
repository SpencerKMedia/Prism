<?php /* Template Name: Alt Home */?>
<?php get_header();?>
<style>
</style>
<?php get_template_part( 'parts/home/landing'); ?>
<?php //get_template_part( 'parts/home/calltoattention'); ?>
<div class="container-fluid" style="padding: 0; background-color: $blue;height: 10px;color: $blue;">

</div>
<div class="container-fluid quality-container">
  <div class="container">
    <div class="col-md-4 col-qualities text-center vertical-center">
      <h1><i class="qualities fa fa-rocket"></i></h1>
      <h4>SPEEDY TURN-AROUNDS</h4>
      <h3>We work fast so you can get up and go as soon as possible, with our knowledge and skills, we can produce high quality products in no time! Perfect for your companies new website or your brand new marketing assets! We have you covered in a timely manner!</h3>
      <a class="btn btn-white" href="...">Learn More</a>
    </div>
    <div class="col-md-4 col-qualities text-center vertical-center">
      <h1><i class="qualities fa fa-television"></i></h1>
      <h4>HIGH QUALITY COMMUNICATION</h4>
      <h3>Have any questions, comments or requests? Feel free to contact us, even if you don't have any projects with us! We will get back to you as soon as possible to answer and questions you have!</h3>
      <a class="btn btn-white" href="...">Learn More</a>
    </div>
    <div class="col-md-4 col-qualities text-center vertical-center">
      <h1><i class="qualities fa fa-bomb"></i></h1>
      <h4>EXPLOSIVE OUTCOMES</h4>
      <h3>With our experince in the industry, our services with have everyone asking where you got them done!</h3><br />
      <a class="btn btn-white" href="...">Learn More</a>
    </div>
  </div>
</div>
<div id="skills" class="container-fluid skills-container">
  <?php get_template_part( 'parts/home/featured-skills'); ?>
</div>
<div class="container-fluid print-block blue" style="">
  <h3>Need designs printed? That's okay, we work hand in hand with print providers around the globe to ensure that you get great quality products no matter where you are!</h3>
</div>

<?php get_template_part( 'parts/home/portfolio-slider'); ?>

<div class="container-fluid market-container">
  <h2>Looking for something premade? Need hosting?</h2>
  <h4>Look at these products</h4>
  <div class="container">

    <?php get_template_part( 'parts/home/featured-products'); ?>
  </div>
  <h1> Or find more at our <a style="color: rgb(19, 152, 105); text-decoration: underline;" href="#" class="">Market</a></h1>
</div>

<?php get_footer();?>
