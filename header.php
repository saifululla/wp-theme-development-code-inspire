<!DOCTYPE html>
<html <?php language_attributes(); ?> >
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- Title -->
     
      <?php
      // Get options
      $options = get_option( 'saiful_options' ); // unique id of the framework 
      ?>
      <?php wp_head(); ?>
   </head>
   <body  <?php body_class(); ?>>
   
   
   <?php wp_body_open(); ?>
	   <section class="header-top">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-sm-12">
                  <?php 
                   $header_op_switch = $options['header_op_switch'];
                   if($header_op_switch){ 
                     ?>
						<div class="header-left">
                     <?php 
                    
                        if($options['header_email']){
                  ?>

                      <a href=""><i class="fa fa-envelope"></i> <?php echo $options['header_email'] ?></a>
                   <?php     
                    } 
                    ?>
                    <?php 
                    if($options['header_phone']){
                     ?>
                     <a href=""><i class="fa fa-phone"></i> <?php echo $options['header_phone'] ?></a>
                     <?php
                    }
                  }
							?>
							
						</div>
					</div>
					<div class="col-md-6 col-sm-12 text-right">
						<div class="header-social">
                     <?php
                 
                     $socail_icons = $options['header_icons'];
                     if($socail_icons){

                    
                     foreach($socail_icons as $socail_icon){
                      ?>
							<a href="<?php echo $socail_icon['social_link']  ?>"><i class="<?php echo $socail_icon['social_icon']  ?>"></i></a>
                        <?php 
                        }
                     }
                        ?>
						</div>
					</div>
				</div>
			</div>
	   </section>
      <!-- Header Area Start -->
      <header class="header header-fixed">
         <div class="container">
            <div class="row">
               <div class="col-xl-12">
                  <nav class="navbar navbar-expand-md navbar-light">
                  <?php
                  $logo = $options['header_logo'];
                  $logo_text = $options['header_logo_text'];
                     if($logo_text){
                  ?>

               <a class="navbar-brand" href="<?php echo site_url();?>"><?php echo $options['header_logo_text']; ?></a>
                    
                          <?php   
                          }else{
                           ?>
                        <a href="<?php echo site_url();?>">
                     <img src="<?php echo $logo['url'];?>" alt="">     
                      </a> 
                       
                        <?php  
                        }
                          ?>
                           
                                 
                                       
                
                     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                     <span class="navbar-toggler-icon"></span>
                     </button>
                     <div class="collapse navbar-collapse ml-auto mainmenu justify-content-end" id= "navbarNav" >
                  <?php 
                  wp_nav_menu(
                     array(
                        'theme_location' => 'main-menu',
                        'menu_class'=>  'navbar-nav ml-auto'
                     )
                  );
                  ?>
                     </div>
                  </nav>
               </div>
            </div>
         </div>
      </header>
      <!-- Header Area Start -->