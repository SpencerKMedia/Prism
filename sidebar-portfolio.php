<div class="col-md-3 sidebar" id="primary-sidebar">
  <div class="list-group list-group-snippet">
    <?php do_action( 'before_sidebar' ); ?>
    <?php if ( ! dynamic_sidebar( 'sidebar-primary' ) ) : ?>
      <aside id="pages" class="list-group-item is-menu">
        <h1 class="widget-title"><?php _e( 'Our Menu', 'shape' ); ?></h1>
        <ul class="list-unstyled">
          <?php $args = array(
            'sort_order' => 'asc',
            'sort_column' => 'post_title',
            'hierarchical' => 1,
            'exclude' => '',
            'include' => '',
            'meta_key' => '',
            'meta_value' => '',
            'authors' => '',
            'child_of' => 0,
            'parent' => -1,
            'exclude_tree' => '',
            'number' => '',
            'offset' => 0,
            'post_type' => 'page',
            'post_status' => 'publish'
          );
          $pages = get_pages($args);
          foreach ( $pages as $page ) {
          $option = '<li><a href="' . get_page_link( $page->ID ) . '">';
          $option .= $page->post_title;
          $option .= '</a></li>';
          echo $option;
          }
          ?>
        </ul>

      </aside>
      <aside id="categories" class="list-group-item is-menu">
          <h1 class="widget-title"><?php _e( 'Related Categories', 'shape' ); ?></h1>
          <ul class="list-unstyled">
            <?php wp_list_categories( array(
                'orderby' => 'name',
                'include' => array( 25, 26, 27, 28, 29 ),
                'title_li'=>false
            ) ); ?>
          </ul>
      </aside>
      <a><aside id="ad" class="list-group-item is-menu">
        <div class="advertisement" style="background-image: url('https://placeimg.com/640/480/arch?t=1514342688022')">

        </div>
      </aside></a>
      <aside id="posts" class="list-group-item is-menu">
          <h1 class="widget-title"><?php _e( 'Recent Posts', 'shape' ); ?></h1>
          <ul class="list-unstyled">
            <?php
              $args = array(
              	'numberposts' => 5,
              	'offset' => 0,
              	'category' => '30, 32, 34, 31, 33, 1, 25, 26, 27, 28, 29',
              	'orderby' => 'post_date',
              	'order' => 'DESC',
              	'include' => '',
              	'exclude' => '',
              	'meta_key' => '',
              	'meta_value' =>'',
              	'post_type' => 'post',
              	'post_status' => 'publish, future',
              	'suppress_filters' => true
              );

              $recent_posts = wp_get_recent_posts( $args, ARRAY_A );
              foreach( $recent_posts as $recent ) {
                  printf( '<li><a href="%1$s">%2$s</a></li>',
                      esc_url( get_permalink( $recent['ID'] ) ),
                      apply_filters( 'the_title', $recent['post_title'], $recent['ID'] )
                  );
              }
            ?>
          </ul>
      </aside>
   <?php endif; ?>
   </div>
</div>


<!-- <div class="list-group list-group-snippet">
  <a class="active list-group-item is-menu" href="#preview" id="tab-preview"><span class="glyphicon glyphicon-play-circle"></span>Preview</a>
  <a href="#html" id="tab-html" class="list-group-item  is-menu"><span class="glyphicon glyphicon-list"></span>HTML</a>

  <a href="#css" id="tab-css" class="list-group-item is-menu"><span class="glyphicon glyphicon-leaf"></span>Css</a>

  <a href="#js" id="tab-js" class="list-group-item is-menu"><span class="glyphicon glyphicon-asterisk"></span>Js</a>


  <a class="list-group-item is-menu" href="#comment" id="tab-comment"><span class="glyphicon glyphicon-comment"></span>Comments</a>

  <a class="btn-download list-group-item tip" href="/snippets/download/211" title="" data-placement="right" data-original-title="Please login to download this snippet"><span class="glyphicon glyphicon-download-alt"></span>Download</a>
  <a class="list-group-item tip" data-original-title="" title="">
    <script async="" type="text/javascript" src="//cdn.carbonads.com/carbon.js?zoneid=1673&amp;serve=C6AILKT&amp;placement=bootdeycom" id="_carbonads_js"></script>
    <div id="carbonads"><span><span class="carbon-wrap"><a href="//srv.carbonads.net/ads/click/x/GTND42QJCEYIP27UCWY4YKQMC6BD6KQMF67DCZ3JCWYIVKJ7CVYDT53KC6BI423JCWSDVK3EHJNCLSIZZRLCP7I35MNFV?segment=placement:bootdeycom;&amp;encredirect=https%3A%2F%2Fad.doubleclick.net%2Fddm%2Ftrackclk%2FN572608.452584BUYSELLADS.COM0%2FB20434536.207699028%3Bdc_trk_aid%3D407455625%3Bdc_trk_cid%3D94245448%3Bdc_lat%3D%3Bdc_rdid%3D%3Btag_for_child_directed_treatment%3D" class="carbon-img" target="_blank" rel="noopener"><img src="https://assets.servedby-buysellads.com/p/manage/asset/id/59964" alt="" border="0" height="100" width="130" style="max-width: 130px;"></a>
      <a href="//srv.carbonads.net/ads/click/x/GTND42QJCEYIP27UCWY4YKQMC6BD6KQMF67DCZ3JCWYIVKJ7CVYDT53KC6BI423JCWSDVK3EHJNCLSIZZRLCP7I35MNFV?segment=placement:bootdeycom;&amp;encredirect=https%3A%2F%2Fad.doubleclick.net%2Fddm%2Ftrackclk%2FN572608.452584BUYSELLADS.COM0%2FB20434536.207699028%3Bdc_trk_aid%3D407455625%3Bdc_trk_cid%3D94245448%3Bdc_lat%3D%3Bdc_rdid%3D%3Btag_for_child_directed_treatment%3D" class="carbon-text" target="_blank" rel="noopener">An e-commerce solution that adapts to the size and seasonality of your business.</a></span>
      <a href="http://carbonads.net/?utm_source=bootdeycom&amp;utm_medium=ad_via_link&amp;utm_campaign=in_unit&amp;utm_term=carbon" class="carbon-poweredby" target="_blank" rel="noopener">ads via Carbon</a><img src="https://ad.doubleclick.net/ddm/trackimp/N572608.452584BUYSELLADS.COM0/B20434536.207699028;dc_trk_aid=407455625;dc_trk_cid=94245448;ord=151416131;dc_lat=;dc_rdid=;tag_for_child_directed_treatment=?"
        border="0" height="1" width="1" style="display: none;"><img src="https://pixel.adsafeprotected.com/rfw/st/121175/19648361/skeleton.gif" border="0" height="1" width="1" style="display: none;"></span>
    </div>
  </a>
  <a class="list-group-item is-menu" href="#information" id="tab-information"><span class="glyphicon glyphicon-book"></span>Information</a>
  <a class="list-group-item  tip" href="/favorite_snippets/favorite/211" title="" data-placement="right" data-original-title="Please login to favorite this snippet"><span class="glyphicon glyphicon-heart"></span>Favorite</a></div> -->
