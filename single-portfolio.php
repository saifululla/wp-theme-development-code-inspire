<?php

get_header();
?>
      <!-- Header Area Start -->
<section class="breadcumb-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <?php get_template_part('inc/breadcumb');?>
            </div>
        </div>
    </div>
</section>

<section class="portfolio-single pt-100 pb-100">
    <div class="container">
        <div class="row">
            <div class="col-xl-8">
                <h2><?php the_title(); ?></h2>
                <?php the_post_thumbnail(); ?>
                <?php the_content(); ?>

                
                <!-- <div class="row">
                   <div class="col-xl-12">
                     <h4>project gallery</h4>
                   </div>
                   <div class="col-xl-4">
                      <div class="project-gallery">
                         <img src="assets/img/portfolio/1.jpg" alt="">
                      </div>
                   </div>
                   <div class="col-xl-4">
                     <div class="project-gallery">
                        <img src="assets/img/portfolio/2.jpg" alt="">
                     </div>
                  </div>
                  <div class="col-xl-4">
                     <div class="project-gallery">
                        <img src="assets/img/portfolio/3.jpg" alt="">
                     </div>
                  </div>
                </div> -->
                <!-- <br><br> -->
                <!-- <div class="row">
                   <div class="col-xl-12">
                        <h4>project overview</h4>
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/jssO8-5qmag" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                   </div>
                </div>-->
            </div> 
            <div class="col-xl-4">
                <div class="portfolio-sidebar">
                    <h4>Technology Used</h4>
                    <ul>
                        <li><i class="fa fa-arrow-right"></i> Html5</li>
                        <li><i class="fa fa-arrow-right"></i> Css3</li>
                        <li><i class="fa fa-arrow-right"></i> Flexbox</li>
                        <li><i class="fa fa-arrow-right"></i> Bootstrap</li>
                        <li><i class="fa fa-arrow-right"></i> JavaScript</li>
                        <li><i class="fa fa-arrow-right"></i> Php</li>
                        <li><i class="fa fa-arrow-right"></i> MySql</li>
                    </ul>
                </div>
                <div class="portfolio-sidebar">
                    <h4>project features</h4>
                    <ul>
                        <li><i class="fa fa-arrow-right"></i> Shop Setup</li>
                        <li><i class="fa fa-arrow-right"></i> Product Setup</li>
                        <li><i class="fa fa-arrow-right"></i> Purchase System</li>
                        <li><i class="fa fa-arrow-right"></i> Order Tracking</li>
                        <li><i class="fa fa-arrow-right"></i> Ledger System</li>
                        <li><i class="fa fa-arrow-right"></i> Stock</li>
                        <li><i class="fa fa-arrow-right"></i> Customer Database</li>
                        <li><i class="fa fa-arrow-right"></i> and More...</li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</section>
<?php get_footer(); ?>