<?php 
 // Control core classes for avoid errors
if( class_exists( 'CSF' ) ) {

    //
    // Set a unique slug-like ID
    $prefix = 'saiful_options';
  
    //
    // Create options
    CSF::createOptions( $prefix, array(
      'menu_title' => __('Inspire One Options','inspire'),
      'menu_slug'  => 'inspire-one',
      'menu_type'  => 'submenu',
      'sticky_header'  => true,
      'theme'  => 'dark',
      'ajax_save'  => true,
      'menu_parent'  => 'themes.php',
      'framework_title' => __('Inspire One -<small> Saiful Kader </small>','inspire')
    ) );
  
    //
    // Create a section
    CSF::createSection( $prefix, array(
        'id' => 'header_options',
      'title'  => __('Header Options','inspire'),
    ));

CSF::createSection($prefix , array(
    'parent' => 'header_options',
    'title' => __('Header Left','inspire'),
    'fields' => array(
  
        //switcher
        array(
            'id'    => 'header_op_switch',
            'type'  => 'switcher',
            'title' => __('Header Email/Phone','inspire'),
            'default'    => true
          ),
        // A text field
        array(
          'id'    => 'header_email',
          'type'  => 'text',
          'title' => __('Header Email','inspire'),
          'dependency' => array( 'header_op_switch', '==', 'true' ) // check for true/false by field id
        ),
        array(
            'id'    => 'header_phone',
            'type'  => 'text',
            'title' => __('Header Phone','inspire'),
            'dependency' => array( 'header_op_switch', '==', 'true' ) // check for true/false by field id
          ),
  
      )
));


CSF::createSection($prefix , array(
    'parent' => 'header_options',
    'title' => __('Header Right','inspire'),
    'fields' => array(
  
        //
        // A text field
        array(
          'id'    => 'header_icons',
          'type'  => 'group',
          'title' => __('Header Icons','inspire'),
          
          'fields' => array(
            array(
                'id' => 'social_title',
              'title' => __('Header Icons','inspire'),
                'type' => 'text'
            ),
            array(
                'id' => 'social_icon',
                'title' => __('Socail Icon','inspire'),
                'type' => 'icon'
            ),
            array(
                'id' => 'social_link',
                'title' => __('Socail link','inspire'),
                'type' => 'text'
            ),
          )
        )
        
  
      )
));
CSF::createSection($prefix , array(
    'parent' => 'header_options',
    'title' => __('Header Logo','inspire'),
    'fields' => array(
        array(
            'id' => 'header_logo',
            'type' => 'media',
            'title' => __('Upload Your Logo ','inspire'),
            // 'dependency' => array('header_logo_text' ,'==', 'true')
        ),
        array(
            'id' => 'header_logo_text',
            'type' => 'text',
            'title' => __('Write Your Logo Text ','inspire'),
            // 'dependency' => array('header_logo' ,'==', 'true')
        
    ),
    )
));


CSF::createSection($prefix, array(
  'parent' => 'header_options',
  'title' => __('Header Background & Color','inspire'),
  'fields' => array(
    array(
      'id' => 'header_back',
      'type' => 'background',
      'title' => __('Header Background','inspire'),
      'output' => array('.header-top')
    ),
    array(
      'id' => 'header_typography',
      'type' => 'typography',
      'title' => __('Header Typography & Color','inspire'),
      'output' => array('.header-top a')
    ),
    array(
      'id' => 'header_color_hover',
      'type' => 'color',
      'title' => __('Header Hover Color','inspire'),
      'output' => array('.header-top a:hover')
    ),
  )

));
 // Create a about section
 CSF::createSection( $prefix, array(
  'id' => 'about_options',
'title'  => __('About Section','inspire'),
));
CSF::createSection($prefix , array(
      'parent' => 'about_options',
      'title' =>__( 'About Heading','inspire'),
      'fields' => array(
        array(
          'id' => 'about_sub_title',
          'title' => __('About Sub Title','inspire'),
          'type' => 'text',
        ),
        array(
          'id' => 'about_title',
          'title' => __('About Title','inspire'),
          'type' => 'text',
        ),
        array(
          'id' => 'about_desc',
          'title' => __('About Description','inspire'),
          'type' => 'textarea',
        ),

      )
));

CSF::createSection($prefix, array(
  'parent' => 'about_options',
  'title' => __('About Info','inspire'),
  'fields' => array(
    array(
      'id'    => 'about_section_switch',
      'type'  => 'switcher',
      'title' => __('About Section ON/OFF','inspire'),
      'default'    => true
    ),
    array(
      'id' => 'about_heading_title',
      'type' => 'text',
      'title' => __('About Heading Title','inspire'),
      'dependency' => array( 'about_section_switch', '==', 'true' ) // check for true/false by field id
        ),
    array(
      'id' => 'about_heading_desc',
      'type' => 'textarea',
      'title' => __('About Heading Description','inspire'),
      'dependency' => array( 'about_section_switch', '==', 'true' ) // check for true/false by field id
        ),
     array(
       'id' => 'about_heading_btn_text',
        'type' => 'text',
        'title' => __('About Heading Btn Text','inspire'),
        'dependency' => array( 'about_section_switch', '==', 'true' ) // check for true/false by field id
           ),
      array(
        'id' => 'about_heading_btn_link',
        'type' => 'text',
        'title' => __('About Heading Btn Link','inspire'),
        'dependency' => array( 'about_section_switch', '==', 'true' ) // check for true/false by field id
          ),
  )
));
      
    CSF::createSection($prefix , array(
      'parent' => 'about_options',
      'title' => __('Single About Section','inspire'),
      'fields' => array(
        array(
          'id'        => 'single_group',
          'type'      => 'group',
          'title'     => __('Single Section','inspire'),
          'fields'    => array(
            array(
              'id' => 'single_title',
              'type' => 'text',
              'title' => __('About Single Title','inspire')
            ),
            array(
              'id' => 'single_icon',
              'type' => 'icon',
              'title' => __('About Single Icon','inspire')
            ),
            array(
              'id' => 'single_desc',
              'type' => 'textarea',
              'title' => __('About Single Description','inspire')
            )
          )
        )
      )
    ));
CSF::createSection($prefix ,array(
  'parent' => 'about_options',
  'title' => __('About FAQ Section','inspire'),
  'fields' => array(
    array(
      'id' => 'about_faq_list',
      'title' => __('About Faq','inspire'),
      'type' => 'group',
      'button_title' => __('Add New FAQ','inspire'),
      'fields' => array(
          array(
              'id' => 'faq_title',
              'title' => __('Faq Title','inspire'),
              'type' => 'text'
          ),
          array(
              'id' => 'faq_des',
              'title' => __('Faq Description','inspire'), 
              'type' => 'textarea'
          )
      )
  )
    
  )
));


CSF::createSection($prefix, array(
  'parent' => 'about_options',
  'title'=> __('About Skill Section','inspire'),
  'fields' => array(
    array(
      'id' => 'about_skill_group',
    'type' => 'group',
    'title' => __('About Skill Group','inspire'),
    'fields' => array(
      array(
        'id' => 'skill_title',
        'type' => 'text',
        'title' => __('Skill Title','inspire')
      ),
      array(
        'id' => 'skill_num',
        'type' => 'text',
        'title' => __('Skill Number','inspire')
      ),

    )
    )
  )
));
  
 // Create a Services section
 CSF::createSection( $prefix, array(
  'id' => 'services_options',
  'title'  => __('Services Section','inspire'),
));
CSF::createSection($prefix , array(
      'parent' => 'services_options',
      'title' => __('Services Heading','inspire'),
      'fields' => array(
        array(
          'id' => 'services_sub_title',
          'title' => __('Services Sub Title','inspire'),
          'type' => 'text',
        ),
        array(
          'id' => 'services_title',
          'title' => __('Services Title','inspire'),
          'type' => 'text',
        ),
        array(
          'id' => 'services_desc',
          'title' => __('Services Description','inspire'),
          'type' => 'textarea',
        ),

      )
));

  CSF::createSection($prefix , array(
    'id' => 'counter_options',
    'title' => __('Counter Section','inspire')
  ));

  CSF::createSection($prefix , array(
      'parent' => 'counter_options',
      'title' =>__( 'Counter Section','inspire'),
      'fields' => array(
        array(
          'id' => 'counter_group',
        'type' => 'group',
        'title' => __('Counter List','inspire'),
        'fields' => array(
          array(
            'id' => 'counter_name',
           'type' => 'text',
           'title' => __('Counter Name','inspire')
          ),
          array(
            'id' => 'counter_num',
           'type' => 'text',
           'title' => __('Counter Number','inspire')
          ),
          array(
            'id' => 'counter_icon',
           'type' => 'icon',
           'title' => __('Counter Icon','inspire')
          ),
        )
        )
      )

  ));

   // Create a Teams section
 CSF::createSection( $prefix, array(
  'id' => 'team_options',
'title'  => __('Team Section','inspire'),
));
CSF::createSection($prefix , array(
      'parent' => 'team_options',
      'title' => __('Team Heading','inspire'),
      'fields' => array(
        array(
          'id' => 'team_sub_title',
          'title' => __('Team Sub Title','inspire'),
          'type' => 'text',
        ),
        array(
          'id' => 'team_title',
          'title' => __('Team Title','inspire'),
          'type' => 'text',
        ),
        array(
          'id' => 'team_desc',
          'title' => __('Team Description','inspire'),
          'type' => 'textarea',
        ),

      )
));


 // Create a Testimonials section
 CSF::createSection( $prefix, array(
  'id' => 'testimonial_options',
'title'  => __('Testimonial Section','inspire'),
));
CSF::createSection($prefix , array(
      'parent' => 'testimonial_options',
      'title' => __('Testimonial Heading','inspire'),
      'fields' => array(
        array(
          'id' => 'testimonial_sub_title',
          'title' => __('Testimonial Sub Title','inspire'),
          'type' => 'text',
        ),
        array(
          'id' => 'testimonial_title',
          'title' => __('Testimonial Title','inspire'),
          'type' => 'text',
        ),
        array(
          'id' => 'testimonial_desc',
          'title' => __('Testimonial Description','inspire'),
          'type' => 'textarea',
        ),

      )
));

// Create a Blog section
CSF::createSection( $prefix, array(
  'id' => 'blog_options',
'title'  => __('Blog Section','inspire'),
));
CSF::createSection($prefix , array(
      'parent' => 'blog_options',
      'title' => __('Blog Heading','inspire'),
      'fields' => array(
        array(
          'id' => 'blog_sub_title',
          'title' => __('Blog Sub Title','inspire'),
          'type' => 'text',
        ),
        array(
          'id' => 'blog_title',
          'title' => __('Blog Title','inspire'),
          'type' => 'text',
        ),
        array(
          'id' => 'blog_desc',
          'title' => __('Blog Description','inspire'),
          'type' => 'textarea',
        ),

      )
));

      CSF::createSection($prefix, array(
        'id' => 'cta_options',
        'title' => __('CTA OPTION','inspire'),
      ));
      CSF::createSection($prefix, array(
        'parent' => 'cta_options',
        'title' => __('CTA OPTION','inspire'),
        'fields' => array(
          array(
            'id'    => 'cta_switcher',
            'type'  => 'switcher',
            'title' => __('CTA Switcher ON / OFF','inspire'),
            'default'    => true
          ),
          array(
            'id' => 'cta_title',
            'title' => __('CTA Title',''),
            'type' => 'text',
            'dependency' => array( 'cta_switcher', '==', 'true' ) // check for true/false by field id
          ),
          array(
            'id' => 'cta_desc',
            'title' => __('CTA Description','inspire'),
            'type' => 'textarea',
            'dependency' => array( 'cta_switcher', '==', 'true' ) // check for true/false by field id
          ),
          array(
            'id' => 'cta_btn_text',
            'title' => __('CTA Button Text','inspire'),
            'type' => 'text',
            'dependency' => array( 'cta_switcher', '==', 'true' ) // check for true/false by field id
          ),
          array(
            'id' => 'cta_btn_link',
            'title' => __('CTA Button Link','inspire'),
            'type' => 'text',
            'dependency' => array( 'cta_switcher', '==', 'true' ) // check for true/false by field id
          ),
        )
      ));
      CSF::createSection($prefix , array(
        'id' => 'contact_options',
        'title' => __('Contact Options','inspire')

      ));
       // Contact Options
    CSF::createSection($prefix, array(
      'parent' => 'contact_options',
      'title' => __('Contact Options', 'inspire'),
      'icon' => 'fas fa-bullhorn',
      'fields' => array(
          array(
              'id' => 'contact_info',
              'title' => __('Contact Info', 'inspire'),
              'type' => 'group',
              'button_title' => __('Add New Concatc Items', 'inspire'),
              'fields' => array(
                  array(
                      'id' => 'contact_info_title',
                      'type' => 'text',
                      'title' => __('Contact Info Title', 'inspire')
                  ),
                  array(
                      'id' => 'contact_info_icon',
                      'type' => 'icon',
                      'title' => __('Contact Info Icon', 'inspire')
                  ),
                  array(
                      'id' => 'contact_info_des',
                      'type' => 'text',
                      'title' => __('Contact Info Description', 'inspire')
                  )
              )
          ),
          array(
              'id' => 'contact_map',
              'type' => 'map',
              'title' => __('Contact Map', 'inspire')
          )

      )
  ));


      CSF::createSection($prefix , array(
        'id' => 'footer_options',
        'title' => __('Footer Options','')
      ));
      // Footer Options
    CSF::createSection($prefix, array(
      'id' => 'footer_options',
      'title' => __('Footer Options', 'inspire'),
      'icon' => 'fas fa-rocket',
      'fields' => array(
          array(
              'id' => 'footer_text',
              'type' => 'text',
              'title' => __('Copyright Text' , 'inspire'),
              'default' => __('&copy; All Rights Reserved 2020' ,'inspire')
          ),
          array(
              'id' => 'footer_social',
              'type' => 'group',
              'title' => __('Footer Social Links', 'inspire'),
              'button_title' => __('Add New Link', 'inspire'),
              'fields' => array(
                  array(
                      'id' => 'footer_social_title',
                      'type' => 'text',
                      'title' => __('Footer Link Title', 'inspire')
                  ),
                  array(
                      'id' => 'footer_social_icon',
                      'type' => 'icon',
                      'title' => __('Footer Link Icon', 'inspire')
                  ),
                  array(
                      'id' => 'footer_social_url',
                      'type' => 'text',
                      'title' => __('Footer Link URL', 'inspire')
                  )
              )
          ),
          array(
              'id' => 'footer_link_target',
              'type' => 'select',
              'title' => __('Select Link Target', 'inspire'),
              'options' => array(
                  '_self' => __('Open in Same Tab', 'inspire',),
                  '_blank' => __('Open in New Tab', 'inspire',),
                  '_window' => __('Open in New Window', 'inspire',)
              ),
              'default' => '_blank'
          )
      )
  ));


  
  }
  