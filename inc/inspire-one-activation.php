<?php

/**
 * Include the TGM_Plugin_Activation class.
 */
require_once get_template_directory().'/inc/class-tgm-plugin-activation.php';

function inspire_one_activation() {
    $plugins = array(
        array(
            'name'          => 'Advanced Custom Fields', // The plugin name.
			'slug'          => 'advanced-custom-fields', // The plugin slug (typically the folder name).
            'required'      => true,// If false, the plugin is only 'recommended' instead of required.


        ),
        array(
            'name'          => 'Codestar Framework', // The plugin name.
			'slug'          => 'codestar-framework', // The plugin slug (typically the folder name).
            'source' => 'https://github.com/Codestar/codestar-framework/archive/refs/heads/master.zip',
            'required'      => true,// If false, the plugin is only 'recommended' instead of required.
     

        ),
        array(
            'name'          => 'Contact Form 7', // The plugin name.
			'slug'          => 'contact-form-7', // The plugin slug (typically the folder name).
            'required'      => true,// If false, the plugin is only 'recommended' instead of required.
         

        ),
        array(
            'name'          => 'One Click Demo Import', // The plugin name.
			'slug'          => 'one-click-demo-import', // The plugin slug (typically the folder name).
            'required'      => true,// If false, the plugin is only 'recommended' instead of required.
            // 'source' => 'https://github.com/saifululla/inspire-custom-post/archive/refs/heads/main.zip',
            

        ),
        array(
            'name'          => 'Inspire Custom Post', // The plugin name.
			'slug'          => 'inspire-custom-post', // The plugin slug (typically the folder name).
            'required'      => true,// If false, the plugin is only 'recommended' instead of required.
            'source' => 'https://github.com/saifululla/inspire-custom-post/archive/refs/heads/main.zip',
            

        ),

    );
    $config = array(
        'id'           => 'inspire_one_plugins_activation',
        'menu'         => 'inspire-one-plugins-activation', // Menu slug.
		'parent_slug'  => 'themes.php',            // Parent menu slug.
        'has_notices'  => true,
        

    );
    tgmpa( $plugins, $config );

}

add_action( 'tgmpa_register', 'inspire_one_activation' );


