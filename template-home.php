<?php 
/**
 * 
 * Template Name: Home
 * 
 */
get_header();

$options = get_option( 'saiful_options' ); // unique id of the framework 
?>
      <!-- Slider Area Start -->
      <section class="slider-area" id="home">
         <div class="slider owl-carousel">
         <?php
            $arg = array(
               'post_type'=> 'sliders',
               'posts_per_page' => 3
            );
            $query = new WP_Query($arg);
            while($query -> have_posts()){
               $query -> the_post();

               $subtitle = get_field('subtitle');
               $sub_desc = get_field('sub_desc');
               $sub_para = get_field('sub_para');

               ?>

         <div class="single-slide" style="background-image:url(<?php the_post_thumbnail_url(); ?>)">
               <div class="container">
                  <div class="row">
                     <div class="col-xl-12">
                        <div class="slide-table">
                           <div class="slide-tablecell">
                              <h4><?php echo $subtitle; ?></h4>
                              <h2><?php the_title(); ?></h2>
                              <p><?php echo $sub_para; ?></p>
                              <a href="#" class="box-btn"><?php echo $sub_desc; ?><i class="fa fa-angle-double-right"></i></a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>

           
                
               <?php

            }
            wp_reset_postdata();
            ?>
            
            


         </div>
      </section>
      <!-- Slider Area Start -->
      <!-- About Area Start -->
      <section class="about-area pt-100 pb-100" id="about">
         <div class="container">
            <div class="row section-title">
               <div class="col-md-6 text-right">
                  <h3><span><?php echo $options['about_sub_title']; ?></span> <?php echo $options['about_title']; ?></h3>
               </div>
               <div class="col-md-6">
               <?php echo $options['about_desc']; ?>
               </div>
            </div>
            <div class="row">
               <div class="col-md-7">
                  <div class="about">
                     <div class="page-title">
                        <?php 
                        $about_section_switch = $options['about_section_switch'];
                        if($about_section_switch){
                        ?>

                        <h4><?php echo $options['about_heading_title'] ?></h4>
                     </div>
                     <p> <?php echo $options['about_heading_desc'] ?> </p>
                   
                     <a href="<?php echo $options['about_heading_btn_link'] ?>" class="box-btn">read more <i class="fa fa-angle-double-right"></i></a>
                     <?php   }  ?>
                  </div>
               </div>
               <div class="col-md-5">
                           <?php
                              $single_groups = $options['single_group'];
                              if($single_groups){
                              foreach( $single_groups as  $single_group){

                             
                           
                           ?>


                  <div class="single_about">
                     <i class="<?php echo $single_group['single_icon'] ?>"></i>
                     <h4><?php echo $single_group['single_title'] ?></h4>
                     <p><?php echo $single_group['single_desc'] ?></p>
                  </div>

                  <?php 
                  
                              }
                           }
                  
                  ?>
               </div>
            </div>
         </div>
      </section>
      <!-- About Area End -->
      <!-- Choose Area End -->
      <section class="choose">
         <div class="container">
            <div class="row pt-100 pb-100">
               <div class="col-md-6">
                  <div class="faq">
                     <div class="page-title">
                        <h4>faq</h4>
                     </div>
                     <div class="accordion" id="accordionExample">
                        <?php 
                           $about_faq_lists = $options['about_faq_list'];
                           if($about_faq_lists){
                              $i = 0;
                           foreach($about_faq_lists as $about_faq_list){ 
                              $i++;
                          
                        
                        ?>
                        <div class="card">
                           <div class="card-header" id="heading-<?php echo $i ; ?>">
                              <h5 class="mb-0">
                                 <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse-<?php echo $i ; ?>" aria-expanded="true" aria-controls="collapse-<?php echo $i ; ?>">
                                 <?php echo $about_faq_list['faq_title'] ?>
                                 </button>
                              </h5>
                           </div>
                           <div id="collapse-<?php echo $i ; ?>" class="collapse <?php if( $i == 1){echo 'show' ;} ?>" aria-labelledby="heading-<?php echo $i ; ?>" data-parent="#accordionExample">
                              <div class="card-body">
                              <?php echo $about_faq_list['faq_des'] ?>
                              </div>
                           </div>
                        </div>
                        
                        <?php 
                        
                           }
                         }
                        ?>

                     </div>

                  </div>
               </div>
               <div class="col-md-6">
                  <div class="skills">
                     <div class="page-title">

                        <h4>our skills</h4>
                     </div>
                         <?php
                          $about_skill_groups = $options['about_skill_group'];
                         foreach($about_skill_groups as $about_skill_group){

                       
                         ?>
                   
                     <div class="single-skill">
                        <h4><?php echo $about_skill_group['skill_title']; ?></h4>
                        <div class="progress-bar" role="progressbar" style="width: <?php echo $about_skill_group['skill_num']; ?>%;" aria-valuenow="<?php echo $about_skill_group['skill_num']; ?>" aria-valuemin="0" aria-valuemax="100"><?php echo $about_skill_group['skill_num']; ?>%</div>
                     </div>
                     
                           <?php  } ?>

                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Choose Area End -->

      <!-- Services Area Start -->
      <section class="services-area pt-100 pb-50" id="services">
         <div class="container">
            <div class="row section-title">
               <div class="col-md-6 text-right">
                 
                  <h3><span><?php echo $options['services_sub_title']; ?></span> <?php echo $options['services_title']; ?></h3>
               </div>
               <div class="col-md-6">
                  <p><?php echo $options['services_desc']; ?></p>
               </div>
            </div>
            <div class="row">
            <?php
               $arg = array(
                  'post_type' => 'services',
                  'posts_per_page' => 6
               );
               $query = new WP_Query($arg);
               while($query -> have_posts()){
                  $query -> the_post();

                  $font_icon = get_field('font_icon');
                  ?>
                  <div class="col-lg-4 col-md-6">
                  <!-- Single Service -->
                  <div class="single-service">
                     <i class="<?php echo $font_icon;  ?>"></i>
                     <h4><?php the_title(); ?> </h4>
                     <?php the_content(); ?>
                  </div>
               </div>
                  <?php
               }
               wp_reset_postdata(  );
            ?>


              

               
            </div>
         </div>
      </section>
      <!-- Services Area End -->
      
      <!-- Counter Area End -->
      <section class="counter-area">
         <div class="container-fluid">
            <div class="row">
                  <?php
                     $counter_groups = $options['counter_group'];
                     if($counter_groups){
                        foreach($counter_groups as $counter_group){


                    
                  
                  ?>
               <div class="col-md-3">
                  <div class="single-counter">
                     <h4><i class="<?php echo $counter_group['counter_icon'] ;?>"></i><span class="counter"><?php echo $counter_group['counter_num'] ;?></span><?php echo $counter_group['counter_name'] ;?></span></h4>
                  </div>
               </div>

              <?php
              
                     }
                  }
      
              ?>

            </div>
         </div>
      </section>
      <!-- Counter Area End -->
      <!-- Team Area Start -->
      <section class="team-area pb-100 pt-100" id="team">
         <div class="container">
            <div class="row section-title">

            <?php
                        if($options['team_title']){
 
                  ?>
               <div class="col-md-6 text-right">
                 

                  <h3><span><?php echo $options['team_sub_title']; ?></span> <?php echo $options['team_title']; ?></h3>
               </div>
               <div class="col-md-6">
                  <p><?php echo $options['team_desc']; ?></p>
               </div>
                     <?php  } ;?>
            </div>
            <div class="row">
            <?php
               $args = array(
                  'post_type' => 'teams',
               'posts_per_page' => 3
               );
            $query = new WP_Query($args);
            while($query -> have_posts()){
               $query-> the_post();
               $designation = get_field('designation');
               $socail_fb = get_field('socail-fb');
               $socail_tw = get_field('socail-tw');
               $socail_yt = get_field('socail-yt');
               $socail_linkd = get_field('socail-linkd');


               ?>
               <div class="col-md-4">
                  <div class="single-team">
                  <?php the_post_thumbnail();?>
                     <div class="team-hover">
                        <div class="team-content">
                           <h4><?php the_title(); ?> <span><?php echo $designation; ?></span></h4>
                           <ul>
                              <li><a href="<?php echo $socail_linkd; ?>"><i class="fab fa-facebook"></i></a></li>
                              <li><a href="<?php echo $socail_fb; ?>"><i class="fab fa-twitter"></i></a></li>
                              <li><a href="<?php echo $socail_tw; ?>"><i class="fab fa-linkedin"></i></a></li>
                              <li><a href="<?php echo $socail_yt; ?>"><i class="fab fa-google-plus"></i></a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>

         <?php
            }
            wp_reset_postdata();
            ?>



             
              

            </div>
         </div>
      </section>
      <!-- Team Area End -->
     
      <!-- Testimonials Area Start -->
      <section class="testimonial-area pb-100 pt-100" id="testimonials">
         <div class="container">
            <div class="row section-title white-section">

               <div class="col-md-6 text-right">

                  <h3><span><?php echo $options['testimonial_sub_title']; ?></span> <?php echo $options['testimonial_title']; ?></h3>
               </div>
               <div class="col-md-6">
                  <p><?php echo $options['testimonial_desc']; ?></p>
               </div>

            </div>
         </div>
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-12">
                  <div class="testimonials owl-carousel">

                  <?php
                     $args = array(
                        'post_type' => 'testimonials',
                        'posts_per_page' => 3
                     );
                     $query = new WP_Query($args);
                     while($query -> have_posts()){
                        $query -> the_post();
                    
                     $surename = get_field('surename');
                     $desig = get_field('desig');

                  ?>

                     <div class="single-testimonial">
                        <div class="testi-img">
                           <?php the_post_thumbnail(); ?>
                        </div>
                        <?php the_content(); ?>
                        <h4><?php the_title(); ?> <span><?php echo $desig; ?></span></h4>
                     </div>
               <?php 
                  }
               wp_reset_postdata( );

                ?>

                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Testimonilas Area End -->
      <!-- Latest News Area Start -->
      <section class="blog-area pb-100 pt-100" id="blog">
         <div class="container">
            <div class="row section-title">
               <div class="col-md-6 text-right">

                  <h3><span><?php echo $options['blog_sub_title']; ?></span> <?php echo $options['blog_title']; ?></h3>
               </div>
               <div class="col-md-6">
                  <p><?php echo $options['blog_desc']; ?></p>
               </div>
            </div>
            <div class="row">

            <?php 
               $args = [
                  'post_type' => "post",
                  'posts_per_page' => 3
               ];
               $query = new WP_Query( $args);
               while($query -> have_posts()){
                  $query -> the_post();

                  ?>
               <div class="col-md-4">
                  <div class="single-blog">
                     <?php the_post_thumbnail(); ?>
                     <div class="post-content">
                        <div class="post-title">
                           <h4><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h4>
                        </div>
                        <div class="pots-meta">
                           <ul>
                           <li><a href="#"><?php echo get_the_date();?></a></li>
                           <li><a href="#"><?php echo get_the_author();?></a></li>
                           </ul>
                        </div>
                        <?php the_excerpt(); ?>
                        <a href="<?php the_permalink();?>" class="box-btn">read more <i class="fa fa-angle-double-right"></i></a>
                     </div>
                  </div>
               </div>
                  <?php
               }
               wp_reset_postdata( );

            ?>
              
             


            
            </div>
         </div>
      </section>
      <!-- Latest News Area End -->
      
<?php get_footer(); ?>