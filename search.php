<?php
/**
 * The template for displaying search results pages.
 *
 * @package shift8web
 */

get_header(); ?>

<div class="container-fluid container-padded">

<div class="col-md-9 results">

    <?php if ( have_posts() ) : ?>

      <div class="container">
        <form role="search" method="get" id="searchform" action="<?php home_url( '/' ) ?>">
          <div class="input-group">
            <input type="text" name="s" id="s" require class="form-control" placeholder="<?php echo get_search_query(); ?>">
            <div class="input-group-btn">
              <button class="btn btn-default" type="submit">
                Search
              </button>
            </div>
          </div>
        </form>

        <br />

        <span class="search-page-title"><?php printf( esc_html__( 'Search Results for: %s', stackstar ), '<span>' . get_search_query() . '</span>' ); ?></span>
      </div>

      <div class="row">
        <br />
      </div>
      <?php /* Start the Loop */ ?>
      <?php while ( have_posts() ) : the_post(); ?>


        <div class="row search-row">
          <a href="<?php the_permalink(); ?>"><span class="search-post-title"><?php the_title(); ?></span></a><br />
          <a href="<?php the_permalink(); ?>"><?php the_permalink();?></a><br /><br />
          <span class="search-post-excerpt"><?php the_excerpt(); ?></span><br />
          <span>Category: <?php foreach((get_the_category()) as $category){echo $category->name . " ";}?></span><br />
        </div>
      <?php endwhile; ?>

      <?php else : ?>

          <?php echo "There are no blog posts!" ?>

        <div class="container container-padded">
          <form role="search" method="get" id="searchform" action="<?php home_url( '/' ) ?>">
            <div class="input-group">
              <input type="text" name="s" id="s" require class="form-control" placeholder="<?php echo get_search_query(); ?>">
                <div class="input-group-btn">
                  <button class="btn btn-default" type="submit">
                    Search
                  </button>
                </div>
            </div>
          </form>
        </div>

      <?php endif; ?>

</div>
<?php get_sidebar( 'primary' ); ?>
<!-- <div class="col-md-3 sidebar">

  <div class="list-group list-group-snippet">
    <a class="active list-group-item is-menu" href="#preview" id="tab-preview"><span class="glyphicon glyphicon-play-circle"></span>Preview</a>
    <a href="#html" id="tab-html" class="list-group-item  is-menu">
                            <span class="glyphicon glyphicon-list"></span>
                            HTML
                        </a>

    <a href="#css" id="tab-css" class="list-group-item is-menu">
                                <span class="glyphicon glyphicon-leaf"></span>
                                Css
                            </a>

    <a href="#js" id="tab-js" class="list-group-item is-menu">
                                <span class="glyphicon glyphicon-asterisk"></span>
                                Js
                            </a>


    <a class="list-group-item is-menu" href="#comment" id="tab-comment">
                            <span class="glyphicon glyphicon-comment"></span>
                            Comments                        </a>

    <a class="btn-download list-group-item tip" href="/snippets/download/211" title="" data-placement="right" data-original-title="Please login to download this snippet">
                            <span class="glyphicon glyphicon-download-alt"></span>
                            Download                        </a>
    <a class="list-group-item tip" data-original-title="" title="">
      <script async="" type="text/javascript" src="//cdn.carbonads.com/carbon.js?zoneid=1673&amp;serve=C6AILKT&amp;placement=bootdeycom" id="_carbonads_js"></script>
      <div id="carbonads"><span><span class="carbon-wrap"><a href="//srv.carbonads.net/ads/click/x/GTND42QJCEYIP27UCWY4YKQMC6BD6KQMF67DCZ3JCWYIVKJ7CVYDT53KC6BI423JCWSDVK3EHJNCLSIZZRLCP7I35MNFV?segment=placement:bootdeycom;&amp;encredirect=https%3A%2F%2Fad.doubleclick.net%2Fddm%2Ftrackclk%2FN572608.452584BUYSELLADS.COM0%2FB20434536.207699028%3Bdc_trk_aid%3D407455625%3Bdc_trk_cid%3D94245448%3Bdc_lat%3D%3Bdc_rdid%3D%3Btag_for_child_directed_treatment%3D" class="carbon-img" target="_blank" rel="noopener"><img src="https://assets.servedby-buysellads.com/p/manage/asset/id/59964" alt="" border="0" height="100" width="130" style="max-width: 130px;"></a><a href="//srv.carbonads.net/ads/click/x/GTND42QJCEYIP27UCWY4YKQMC6BD6KQMF67DCZ3JCWYIVKJ7CVYDT53KC6BI423JCWSDVK3EHJNCLSIZZRLCP7I35MNFV?segment=placement:bootdeycom;&amp;encredirect=https%3A%2F%2Fad.doubleclick.net%2Fddm%2Ftrackclk%2FN572608.452584BUYSELLADS.COM0%2FB20434536.207699028%3Bdc_trk_aid%3D407455625%3Bdc_trk_cid%3D94245448%3Bdc_lat%3D%3Bdc_rdid%3D%3Btag_for_child_directed_treatment%3D" class="carbon-text" target="_blank" rel="noopener">An e-commerce solution that adapts to the size and seasonality of your business.</a></span>
        <a
          href="http://carbonads.net/?utm_source=bootdeycom&amp;utm_medium=ad_via_link&amp;utm_campaign=in_unit&amp;utm_term=carbon" class="carbon-poweredby" target="_blank" rel="noopener">ads via Carbon</a><img src="https://ad.doubleclick.net/ddm/trackimp/N572608.452584BUYSELLADS.COM0/B20434536.207699028;dc_trk_aid=407455625;dc_trk_cid=94245448;ord=151416131;dc_lat=;dc_rdid=;tag_for_child_directed_treatment=?" border="0" height="1"
      width="1" style="display: none;"><img src="https://pixel.adsafeprotected.com/rfw/st/121175/19648361/skeleton.gif" border="0" height="1" width="1" style="display: none;"></span>
    </div>
    </a>
    <a class="list-group-item is-menu" href="#information" id="tab-information">
                            <span class="glyphicon glyphicon-book"></span>
                            Information                        </a>
    <a class="list-group-item  tip" href="/favorite_snippets/favorite/211" title="" data-placement="right" data-original-title="Please login to favorite this snippet">
                            <span class="glyphicon glyphicon-heart"></span>
                            Favorite                        </a>
  </div>

</div> -->
</div>
</div>
      <?php get_footer();?>
