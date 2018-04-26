<?php /* Template Name: About Alt */?>
<?php
$title == "Learn About Us At Spencer K Media";
get_header();?>

    <style>
        .img-shadow {
            -webkit-box-shadow: -2px 18px 5px -13px rgba(0, 0, 0, 0.09);
            -moz-box-shadow: -2px 18px 5px -13px rgba(0, 0, 0, 0.09);
            box-shadow: -2px 18px 5px -13px rgba(0, 0, 0, 0.09)
        }
    </style>


    <div id="wwa" class="container-fluid about-container" style="background-color:  #121212;">
        <?php if(have_posts()):while(have_posts()):the_post();?>
        <?php the_content();?>
        <?php endwhile;endif;wp_reset_postdata();?>
        <div class="container client-row">
            <h2 class="text-center color-white">Meet Our Clients</h2>
            <div class="col-md-2">
                <img src="https://www.solodev.com/assets/carousel/image5.png" class="img-responsive" />
            </div>
            <div class="col-md-2">
                <img src="https://www.solodev.com/assets/carousel/image6.png" class="img-responsive" />
            </div>
            <div class="col-md-2">
                <img src="https://www.solodev.com/assets/carousel/image7.png" class="img-responsive" />
            </div>
            <div class="col-md-2">
                <img src="https://www.solodev.com/assets/carousel/image8.png" class="img-responsive" />
            </div>
            <div class="col-md-2">
                <img src="https://www.solodev.com/assets/carousel/image1.png" class="img-responsive" />
            </div>
            <div class="col-md-2">
                <img src="https://www.solodev.com/assets/carousel/image2.png" class="img-responsive" />
            </div>
        </div>
        <div class="container">
            <h2 class="text-center color-white">About Our Skills</h2>
        </div>
        <div class="container skill-container">
            <?php get_template_part( 'parts/about/skills'); ?>
        </div>
    </div>

    <style type="text/css">
        /* override position and transform in 3.3.x */

        .carousel-inner .item.left.active {
            transform: translateX(-33%);
        }

        .carousel-inner .item.right.active {
            transform: translateX(33%);
        }

        .carousel-inner .item.next {
            transform: translateX(33%)
        }

        .carousel-inner .item.prev {
            transform: translateX(-33%)
        }

        .carousel-inner .item.right,
        .carousel-inner .item.left {
            transform: translateX(0);
        }


        .carousel-control.left,
        .carousel-control.right {
            background-image: none;
        }
    </style>
    <div class="container">
        <h3 class="text-center h2">What our clients are saying!</h3>
    </div>

    <div class="container carousel-container">
        <div class="carousel slide" id="myCarousel">
            <div class="carousel-inner">
                <div class="item">
                    <div class="col-md-4">
                        <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(28).jpg" class="img-responsive img-circle" />
                        <h3 class="text-center">Jane Doe</h3>
                        <h4 class="text-center testimonial-title">Marketing Director, Uber</h4>
                        <p><i class="fa fa-quote-left quote"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod eos id officiis hic tenetur quae quaerat ad velit ab hic tenetur.</p>
                        <p class="rating text-center"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></p>
                    </div>
                    <div class="col-md-4">
                        <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(27).jpg" class="img-responsive img-circle" />
                        <h3 class="text-center">Alex Calin</h3>
                        <h4 class="text-center testimonial-title">COO, UX</h4>
                        <p><i class="fa fa-quote-left quote"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod eos id officiis hic tenetur quae quaerat ad velit ab hic tenetur.</p>
                        <p class="rating text-center"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></p>
                    </div>
                    <div class="col-md-4">
                        <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(8).jpg" class="img-responsive img-circle" />
                        <h3 class="text-center">Jonh Doels</h3>
                        <h4 class="text-center testimonial-title">Content Manager, Bisqu</h4>
                        <p><i class="fa fa-quote-left quote"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod eos id officiis hic tenetur quae quaerat ad velit ab hic tenetur.</p>
                        <p class="rating text-center"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i><i class="fa fa-star-o"></i></p>
                    </div>
                </div>
                <div class="item active">
                    <div class="col-md-4">
                        <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(27).jpg" class="img-responsive img-circle" />
                        <h3 class="text-center">Alex Calin</h3>
                        <h4 class="text-center testimonial-title">COO, UX</h4>
                        <p><i class="fa fa-quote-left quote"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod eos id officiis hic tenetur quae quaerat ad velit ab hic tenetur.</p>
                        <p class="rating text-center"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></p>
                    </div>
                    <div class="col-md-4">
                        <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(8).jpg" class="img-responsive img-circle" />
                        <h3 class="text-center">Jonh Doels</h3>
                        <h4 class="text-center testimonial-title">Content Manager, Bisqu</h4>
                        <p><i class="fa fa-quote-left quote"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod eos id officiis hic tenetur quae quaerat ad velit ab hic tenetur.</p>
                        <p class="rating text-center"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i><i class="fa fa-star-o"></i></p>
                    </div>
                    <div class="col-md-4">
                        <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(28).jpg" class="img-responsive img-circle" />
                        <h3 class="text-center">Jane Doe</h3>
                        <h4 class="text-center testimonial-title">Marketing Director, Uber</h4>
                        <p><i class="fa fa-quote-left quote"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod eos id officiis hic tenetur quae quaerat ad velit ab hic tenetur.</p>
                        <p class="rating text-center"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></p>
                    </div>
                </div>
                <div class="item">
                    <div class="col-md-4">
                        <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(8).jpg" class="img-responsive img-circle" />
                        <h3 class="text-center">Jonh Doels</h3>
                        <h4 class="text-center testimonial-title">Content Manager, Bisqu</h4>
                        <p><i class="fa fa-quote-left quote"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod eos id officiis hic tenetur quae quaerat ad velit ab hic tenetur.</p>
                        <p class="rating text-center"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i><i class="fa fa-star-o"></i></p>
                    </div>
                    <div class="col-md-4">
                        <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(28).jpg" class="img-responsive img-circle" />
                        <h3 class="text-center">Jane Doe</h3>
                        <h4 class="text-center testimonial-title">Marketing Director, Uber</h4>
                        <p><i class="fa fa-quote-left quote"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod eos id officiis hic tenetur quae quaerat ad velit ab hic tenetur.</p>
                        <p class="rating text-center"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></p>
                    </div>
                    <div class="col-md-4">
                        <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(27).jpg" class="img-responsive img-circle" />
                        <h3 class="text-center">Alex Calin</h3>
                        <h4 class="text-center testimonial-title">COO, UX</h4>
                        <p><i class="fa fa-quote-left quote"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod eos id officiis hic tenetur quae quaerat ad velit ab hic tenetur.</p>
                        <p class="rating text-center"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></p>
                    </div>
                </div>
            </div>
            <a class="left carousel-control" href="#myCarousel" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
        </div>
    </div>
    <div class="container-fluid map-container">
      <div class="map" id="map"></div>
      <script src="//js.skmcdn.xyz/Sites/SpencerKMedia/map.js"></script>
      <script async defer
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC7c0Z7IEjGLyRDsrMxm45HZUMUVSXV9zo&callback=initMap">
      </script>
    </div>

    <?php if(have_posts()):while(have_posts()):the_post();?>

    <?php the_field('content');?>

    <?php endwhile;endif;wp_reset_postdata();?>

    <script type="text/javascript">
        $(document).ready(function() {
            $('.customer-logos').slick({
                slidesToShow: 4,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 1000,
                arrows: false,
                dots: false,
                pauseOnHover: false,
                responsive: [{
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 3
                    }
                }, {
                    breakpoint: 520,
                    settings: {
                        slidesToShow: 2
                    }
                }]
            });
        });
        $(document).ready(function() {

            $('#myCarousel').carousel({
                interval: 10000
            })

            $('.carousel .item').each(function() {
                var next = $(this).next();
                if (!next.length) {
                    next = $(this).siblings(':first');
                }
                next.children(':first-child').clone().appendTo($(this));

                if (next.next().length > 0) {
                    next.next().children(':first-child').clone().appendTo($(this));
                } else {
                    $(this).siblings(':first').children(':first-child').clone().appendTo($(this));
                }
            });

        });
    </script>

    <?php get_footer();?>
