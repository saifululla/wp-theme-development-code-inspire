<?php

function inspire_import_files() {
    return [
      [
        'import_file_name'           => 'Demo Import 1',
        'categories'                 => 'Category',
        'local_import_file'            => trailingslashit( get_template_directory() ) . 'demo-data/content-demo.xml',
        'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'demo-data/content-widgets.wie',
        
        'import_preview_image_url'   => 'http://localhost/saiful/wp-content/uploads/2023/01/2.jpg',
        'preview_url'                => 'http://localhost/saiful/wp-content/uploads/2023/01/2.jpg',
      ],
    ];
  }
  add_filter( 'ocdi/import_files', 'inspire_import_files' );

  function inspire_after_import_setup() {
	// Assign menus to their locations.
	$main_menu = get_term_by( 'name', 'Main Menu', 'nav_menu' );

	set_theme_mod( 'nav_menu_locations', array(
			'main-menu' => $main_menu->term_id, // replace 'main-menu' here with the menu location identifier from register_nav_menu() function
		)
	);

	// Assign front page and posts page (blog page).
	$front_page_id = get_page_by_title( 'Home' );
	$blog_page_id  = get_page_by_title( 'Blog' );

	update_option( 'show_on_front', 'page' );
	update_option( 'page_on_front', $front_page_id->ID );
	update_option( 'page_for_posts', $blog_page_id->ID );

}
add_action( 'ocdi/after_import', 'inspire_after_import_setup' );