<?php
//Custom Theme Code Here - anything that should go inside functions.php

include('theme-options.php');

// Creates all Custom Post Types used throughout the site
// CPT for Slider on front page
function sliders_post_type() {
	$labels = array(
		'name'                  => 'Slides',
		'singular_name'         => 'Slide',
		'menu_name'             => 'Slider',
		'name_admin_bar'        => 'Slide',
		'archives'              => 'Slide Archives',
		'parent_item_colon'     => 'Parent Slide:',
		'all_items'             => 'All Slides',
		'add_new_item'          => 'Add New Slide',
		'add_new'               => 'Add New',
		'new_item'              => 'New Slide',
		'edit_item'             => 'Edit Slide',
		'update_item'           => 'Update Slide',
		'view_item'             => 'View Slide',
		'search_items'          => 'Search Slides',
		'not_found'             => 'No slides found',
		'not_found_in_trash'    => 'No slides found in Trash',
		'featured_image'        => 'Background Image',
		'set_featured_image'    => 'Set background image',
		'remove_featured_image' => 'Remove background image',
		'use_featured_image'    => 'Use as background image',
		'insert_into_item'      => 'Insert into slide',
		'uploaded_to_this_item' => 'Uploaded to this slide',
		'items_list'            => 'Slides list',
		'items_list_navigation' => 'Slides list navigation',
		'filter_items_list'     => 'Filter slide list',
	);
	$args = array(
		'label'                 => 'Slider',
		'description'           => 'Slider Image and Content',
		'labels'                => $labels,
		'supports'              => array('title', 'editor', 'thumbnail', 'revisions',),
		'hierarchical'          => false,
		'public'                => true,
		'menu_position'         => 20,
		'menu_icon'             => 'dashicons-slides',
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => true,
		'publicly_queryable'    => false,
		'capability_type'       => 'page',
	);
	register_post_type('slider', $args);
}
add_action('init', 'sliders_post_type', 0);


// Creates custom post type for Links for News or Events
//Commenting out for now because its prob not needed.
//function our_links_type() {
//	$labels = array(
//		'name'                  => 'Our Links',
//		'singular_name'         => 'Link',
//		'menu_name'             => 'Our Links',
//		'name_admin_bar'        => 'Link',
//		'archives'              => 'Link Archives',
//		'parent_item_colon'     => 'Parent Link:',
//		'all_items'             => 'All Our Links',
//		'add_new_item'          => 'Add New Link',
//		'add_new'               => 'Add New',
//		'new_item'              => 'New Link',
//		'edit_item'             => 'Edit Link',
//		'update_item'           => 'Update Link',
//		'view_item'             => 'View Link',
//		'search_items'          => 'Search Link',
//		'not_found'             => 'No links found',
//		'not_found_in_trash'    => 'No links found in trash',
//		'featured_image'        => 'Featured Image',
//		'set_featured_image'    => 'Set featured image',
//		'remove_featured_image' => 'Remove featured image',
//		'use_featured_image'    => 'Use as featured image',
//		'insert_into_item'      => 'Insert into Link',
//		'uploaded_to_this_item' => 'Uploaded to this Link',
//		'items_list'            => 'List of Links',
//		'items_list_navigation' => 'List of Links Navigation',
//		'filter_items_list'     => 'Filter Links',
//	);
//	$args = array(
//		'label'              => 'Our Links',
//		'description'        => 'Content for the Links section underneath Media on home page',
//		'labels'             => $labels,
//		'supports'           => array( 'title', 'thumbnail' ),
//		'public'             => true,
//		'menu_icon'          => 'dashicons-admin-links',
//		'publicly_queryable' => false,
//	);
//	register_post_type('our_links', $args);
//}
//add_action('init', 'our_links_type', 0);

// CPT for News section
function news_post_type() {
	$labels = array(
		'name'                  => 'Newsletter',
		'singular_name'         => 'Newsletter',
		'menu_name'             => 'Newsletter',
		'name_admin_bar'        => 'Newsletter',
		'archives'              => 'Newsletter Archives',
		'parent_item_colon'     => 'Parent Newsletter:',
		'all_items'             => 'All Newsletter',
		'add_new_item'          => 'Add New Newsletter',
		'add_new'               => 'Add New',
		'new_item'              => 'New Newsletter',
		'edit_item'             => 'Edit Newsletter',
		'update_item'           => 'Update Newsletter',
		'view_item'             => 'View Newsletter',
		'search_items'          => 'Search Newsletter',
		'not_found'             => 'No Newsletter found',
		'not_found_in_trash'    => 'No Newsletter found in trash',
		'featured_image'        => 'Featured Image',
		'set_featured_image'    => 'Set featured image',
		'remove_featured_image' => 'Remove featured image',
		'use_featured_image'    => 'Use as featured image',
		'insert_into_item'      => 'Insert into Newsletter News',
		'uploaded_to_this_item' => 'Uploaded to this Newsletter News',
		'items_list'            => 'List of Newsletter',
		'items_list_navigation' => 'List of Newsletter Navigation',
		'filter_items_list'     => 'Filter Newsletter',
	);
	$args = array(
		'label'              => 'Newsletter',
		'description'        => 'Content for the Newsletter section on home page',
		'labels'             => $labels,
		'supports'           => array( 'title'),
		'public'             => true,
		'menu_icon'          => 'dashicons-analytics',
		'publicly_queryable' => false,
	);
	register_post_type('news_post', $args);
}
add_action('init', 'news_post_type', 0);

// Creates custom post type for Links section possibly for the Past Recipients
// CPT for multi-column custom callouts used across site
function callout_post_type() {
	$labels = array(
		'name'                  => 'Objectives',
		'singular_name'         => 'Objectives',
		'menu_name'             => 'Objectives',
		'name_admin_bar'        => 'Objectives',
		'archives'              => 'Objectives Archives',
		'parent_item_colon'     => 'Parent Objectives:',
		'all_items'             => 'All Objectives',
		'add_new_item'          => 'Add New Objectives',
		'add_new'               => 'Add New',
		'new_item'              => 'New Objectives',
		'edit_item'             => 'Edit Objectives',
		'update_item'           => 'Update Objectives',
		'view_item'             => 'View Objectives',
		'search_items'          => 'Search Objectives',
		'not_found'             => 'No Objectives found',
		'not_found_in_trash'    => 'No Objectives found in trash',
		'featured_image'        => 'Featured Image',
		'set_featured_image'    => 'Set featured image',
		'remove_featured_image' => 'Remove featured image',
		'use_featured_image'    => 'Use as featured image',
		'insert_into_item'      => 'Insert into Objectives',
		'uploaded_to_this_item' => 'Uploaded to this Objectives',
		'items_list'            => 'List of Objectives',
		'items_list_navigation' => 'List of Objectives Navigation',
		'filter_items_list'     => 'Filter Objectives',
	);
	$args = array(
		'label'              => 'Objectives',
		'description'        => 'Content for multi-column custom Objectives used throughout the site',
		'labels'             => $labels,
		'supports'           => array( 'title' ),
		'public'             => true,
		'publicly_queryable' => false,
		'menu_icon'          => 'dashicons-megaphone',
	);
	register_post_type('callout_post', $args);
}
add_action('init', 'callout_post_type', 0);


///////////////////////////////////////////////////////////////////////////////


// Hooks CMB2 into our Custom Post Types
function cmb2_sample_metaboxes() {
	$pre = '_cmb2_';

	// Post / Link box
	$cmb = new_cmb2_box(array(
		'id'           => 'post_or_link',
		'title'        => 'Post or Link?',
		'object_types' => array('news_post'),
		'context'      => 'normal',
		'priority'     => 'high',
		'show_names'   => false
	));
	$cmb->add_field(array(
		'name'             => 'Post or Link',
		'id'               => $pre . 'post_or_link',
		'type'             => 'radio',
		'show_option_none' => false,
		'options'          => array(
			'post' => __('Post', 'cmb2'),
			'link' => __('Link', 'cmb2'),
		),
	));
	// News Content textarea
	$cmb = new_cmb2_box(array(
		'id'           => 'news_post',
		'title'        => 'News Post',
		'object_types' => array('news_post'),
		'context'      => 'normal',
		'priority'     => 'high'
	));
	$cmb->add_field(array(
		'name' => 'Content',
		'id'   => $pre . 'content',
		'type' => 'textarea'
	));
	$cmb->add_field(array(
		'name' => 'Image',
		'id'   => $pre . 'image',
		'type' => 'file',
		'text' => array(
        	'add_upload_file_text' => 'Add or Upload Image'
    	)
	));
	// News link URLs
	$cmb = new_cmb2_box(array(
		'id'           => 'news_link',
		'title'        => 'News Link',
		'object_types' => array('news_post'),
		'context'      => 'normal',
		'priority'     => 'high'
	));
	$cmb->add_field(array(
		'name' => 'URL',
		'id'   => $pre . 'url',
		'type' => 'text_url',
		'desc' => 'The URL to be linked to',
	));
	$cmb->add_field(array(
		'name' => 'Source',
		'id'   => $pre . 'source',
		'type' => 'text',
		'desc' => 'Name of publishing newspaper or website',
	));

// Adds CMB2 metaboxes for slider links
//	$cmb = new_cmb2_box(array(
//		'id'           => 'slider_link',
//		'title'        => 'Link',
//		'object_types' => array('slider'),
//		'context'      => 'normal',
//		'priority'     => 'high',
//		'show_names'   => false,
//	));
//	$cmb->add_field(array(
//		'name' => 'URL',
//		'desc' => 'URL for slide to be linked to (optional)',
//		'id'   => $pre . 'slider_link',
//		'type' => 'text_url',
//	));
	
		// Adds CMB2 metaboxes for bottom slider links
//	$cmb = new_cmb2_box(array(
//		'id'           => 'bottom_slider_link',
//		'title'        => 'Link',
//		'object_types' => array('bottom_slider'),
//		'context'      => 'normal',
//		'priority'     => 'high',
//		'show_names'   => false,
//	));
//	$cmb->add_field(array(
//		'name' => 'URL',
//		'desc' => 'URL for slide to be linked to (optional)',
//		'id'   => $pre . 'bottom_slider_link',
//		'type' => 'text_url',
//	));
	
	// Adds CMB2 metabox for link/news URLs
//	$cmb = new_cmb2_box(array(
//		'id'           => 'link_url',
//		'title'        => __('Page URL', 'cmb2'),
//		'object_types' => array('our_links', 'news_post'),
//		'context'      => 'normal',
//		'priority'     => 'high',
//		'show_names'   => false
//	));
//	$cmb->add_field(array(
//		'name' => __('Page URL', 'cmb2'),
//		'id'   => $pre . 'url',
//		'type' => 'text_url'
//	));


	// Adds CMB2 metaboxes for custom callouts
	// Displays shortcode in sidebar
	$cmb = new_cmb2_box(array(
		'id'           => 'shortcode',
		'title'        => 'Shortcode',
		'object_types' => array('callout_post'),
		'context'      => 'side',
		'priority'     => 'core',
		'show_names'   => false
	));
	$cmb->add_field(array(
		'name'    => 'Shortcode',
		'id'      => $pre . 'shortcode',
		'desc'    => 'Place this shortcode where you want the callouts to appear.',
		'default' => NULL,
		'type'    => 'text',
		'attributes'   => array(
			'readonly' => 'readonly',
		),
	));

	// Show title?
	$cmb = new_cmb2_box(array(
		'id'           => 'title',
		'title'        => 'Show Title?',
		'object_types' => array('callout_post'),
		'context'      => 'normal',
		'priority'     => 'high',
		'show_names'   => false
	));
	$cmb->add_field(array(
		'name' => 'Title',
		'id'   => $pre . 'show_title',
		'type' => 'checkbox',
		'desc' => 'Shows title above callout posts'
	));

	// Column 1
	$cmb = new_cmb2_box(array(
		'id'           => 'column_1',
		'title'        => 'Column 1',
		'object_types' => array('callout_post'),
		'context'      => 'normal',
		'priority'     => 'high'
	));
	$cmb->add_field(array(
		'name' => 'Title',
		'id'   => $pre . 'column_1_title',
		'type' => 'text',
		'desc' => 'Title above column, gets colorful border from below'
	));
	$cmb->add_field(array(
		'name' => 'Image',
		'id'   => $pre . 'column_1_image',
		'type' => 'file',
		'text' => array(
			'add_upload_file_text' => 'Add/Upload Image'
		),
		'desc' => 'Image displayed underneath header'
	));
	$cmb->add_field(array(
		'name' => 'Content',
		'id'   => $pre . 'column_1_content',
		'type' => 'wysiwyg',
		'desc' => 'Main content for this column',
		'options' => array(
        	'media_buttons' => false
        ),
	));
	$cmb->add_field(array(
		'name' => 'Link',
		'id'   => $pre . 'column_1_link',
		'type' => 'text_url',
		'desc' => 'URL for this column to link to, starts with http:// or https://'
	));
	$cmb->add_field(array(
		'name'    => 'Color',
		'id'      => $pre . 'column_1_color',
		'type'    => 'colorpicker',
		'desc'    => 'The color shown to the left of the title',
		'default' => '#FF0000',
	));
	// Column 2
	$cmb = new_cmb2_box(array(
		'id'           => 'column_2',
		'title'        => 'Column 2',
		'object_types' => array('callout_post'),
		'context'      => 'normal',
		'priority'     => 'high'
	));
	$cmb->add_field(array(
		'name' => 'Title',
		'id'   => $pre . 'column_2_title',
		'type' => 'text',
		'desc' => 'Title above column, gets colorful border from below'
	));
	$cmb->add_field(array(
		'name' => 'Image',
		'id'   => $pre . 'column_2_image',
		'type' => 'file',
		'text' => array(
			'add_upload_file_text' => 'Add/Upload Image'
		),
		'desc' => 'Image displayed underneath header'
	));
	$cmb->add_field(array(
		'name' => 'Content',
		'id'   => $pre . 'column_2_content',
		'type' => 'wysiwyg',
		'desc' => 'Main content for this column',
		'options' => array(
        	'media_buttons' => false
        ),
	));
	$cmb->add_field(array(
		'name' => 'Link',
		'id'   => $pre . 'column_2_link',
		'type' => 'text_url',
		'desc' => 'URL for this column to link to, starts with http:// or https://'
	));
	$cmb->add_field(array(
		'name'    => 'Color',
		'id'      => $pre . 'column_2_color',
		'type'    => 'colorpicker',
		'desc'    => 'The color shown to the left of the title',
		'default' => '#FF0000',
	));
	// Column 3
	$cmb = new_cmb2_box(array(
		'id'           => 'column_3',
		'title'        => 'Column 3',
		'object_types' => array('callout_post'),
		'context'      => 'normal',
		'priority'     => 'high'
	));
	$cmb->add_field(array(
		'name' => 'Title',
		'id'   => $pre . 'column_3_title',
		'type' => 'text',
		'desc' => 'Title above column, gets colorful border from below'
	));
	$cmb->add_field(array(
		'name' => 'Image',
		'id'   => $pre . 'column_3_image',
		'type' => 'file',
		'text' => array(
			'add_upload_file_text' => 'Add/Upload Image'
		),
		'desc' => 'Image displayed underneath header'
	));
	$cmb->add_field(array(
		'name' => 'Content',
		'id'   => $pre . 'column_3_content',
		'type' => 'wysiwyg',
		'desc' => 'Main content for this column',
		'options' => array(
        	'media_buttons' => false
        ),
	));
	$cmb->add_field(array(
		'name' => 'Link',
		'id'   => $pre . 'column_3_link',
		'type' => 'text_url',
		'desc' => 'URL for this column to link to, starts with http:// or https://'
	));
	$cmb->add_field(array(
		'name'    => 'Color',
		'id'      => $pre . 'column_3_color',
		'type'    => 'colorpicker',
		'desc'    => 'The color shown to the left of the title',
		'default' => '#FF0000',
	));
	// Column 4
	$cmb = new_cmb2_box(array(
		'id'           => 'column_4',
		'title'        => 'Column 4',
		'object_types' => array('callout_post'),
		'context'      => 'normal',
		'priority'     => 'high'
	));
	$cmb->add_field(array(
		'name' => 'Title',
		'id'   => $pre . 'column_4_title',
		'type' => 'text',
		'desc' => 'Title above column, gets colorful border from below'
	));
	$cmb->add_field(array(
		'name' => 'Image',
		'id'   => $pre . 'column_4_image',
		'type' => 'file',
		'text' => array(
			'add_upload_file_text' => 'Add/Upload Image'
		),
		'desc' => 'Image displayed underneath header'
	));
	$cmb->add_field(array(
		'name' => 'Content',
		'id'   => $pre . 'column_4_content',
		'type' => 'wysiwyg',
		'desc' => 'Main content for this column',
		'options' => array(
        	'media_buttons' => false
        ),
	));
	$cmb->add_field(array(
		'name' => 'Link',
		'id'   => $pre . 'column_4_link',
		'type' => 'text_url',
		'desc' => 'URL for this column to link to, starts with http:// or https://'
	));
	$cmb->add_field(array(
		'name'    => 'Color',
		'id'      => $pre . 'column_4_color',
		'type'    => 'colorpicker',
		'desc'    => 'The color shown to the left of the title',
		'default' => '#FF0000',
	));
	
	// Column 5
	$cmb = new_cmb2_box(array(
		'id'           => 'column_5',
		'title'        => 'Column 5',
		'object_types' => array('callout_post'),
		'context'      => 'normal',
		'priority'     => 'high'
	));
	$cmb->add_field(array(
		'name' => 'Title',
		'id'   => $pre . 'column_5_title',
		'type' => 'text',
		'desc' => 'Title above column, gets colorful border from below'
	));
	$cmb->add_field(array(
		'name' => 'Image',
		'id'   => $pre . 'column_5_image',
		'type' => 'file',
		'text' => array(
			'add_upload_file_text' => 'Add/Upload Image'
		),
		'desc' => 'Image displayed underneath header'
	));
	$cmb->add_field(array(
		'name' => 'Content',
		'id'   => $pre . 'column_5_content',
		'type' => 'wysiwyg',
		'desc' => 'Main content for this column',
		'options' => array(
        	'media_buttons' => false
        ),
	));
	$cmb->add_field(array(
		'name' => 'Link',
		'id'   => $pre . 'column_5_link',
		'type' => 'text_url',
		'desc' => 'URL for this column to link to, starts with http:// or https://'
	));
	$cmb->add_field(array(
		'name'    => 'Color',
		'id'      => $pre . 'column_5_color',
		'type'    => 'colorpicker',
		'desc'    => 'The color shown to the left of the title',
		'default' => '#FF0000',
	));
	// Column 6
	$cmb = new_cmb2_box(array(
		'id'           => 'column_6',
		'title'        => 'Column 6',
		'object_types' => array('callout_post'),
		'context'      => 'normal',
		'priority'     => 'high'
	));
	$cmb->add_field(array(
		'name' => 'Title',
		'id'   => $pre . 'column_6_title',
		'type' => 'text',
		'desc' => 'Title above column, gets colorful border from below'
	));
	$cmb->add_field(array(
		'name' => 'Image',
		'id'   => $pre . 'column_6_image',
		'type' => 'file',
		'text' => array(
			'add_upload_file_text' => 'Add/Upload Image'
		),
		'desc' => 'Image displayed underneath header'
	));
	$cmb->add_field(array(
		'name' => 'Content',
		'id'   => $pre . 'column_6_content',
		'type' => 'wysiwyg',
		'desc' => 'Main content for this column',
		'options' => array(
        	'media_buttons' => false
        ),
	));
	$cmb->add_field(array(
		'name' => 'Link',
		'id'   => $pre . 'column_6_link',
		'type' => 'text_url',
		'desc' => 'URL for this column to link to, starts with http:// or https://'
	));
	$cmb->add_field(array(
		'name'    => 'Color',
		'id'      => $pre . 'column_6_color',
		'type'    => 'colorpicker',
		'desc'    => 'The color shown to the left of the title',
		'default' => '#FF0000',
	));
}
add_action('cmb2_admin_init','cmb2_sample_metaboxes');





///////////////////////////////////////////////////////////////////////////////

// Adds 'no-padding' class to body tag if not on home page
add_filter('body_class', function( $classes ) {
	if (!is_page_template('template-parts/home-page.php'))
		return array_merge($classes, array('no-padding'));
	else
		return array_merge($classes, array(''));
});



// Adds specific JS to News post and custom callout admin pages
function custom_admin_script() {
	global $post_type;
	if('news_post' == $post_type)
 	wp_enqueue_script('news-admin-script', get_template_directory_uri() . '/includes/news_admin.js');
	 else
	if('callout_post' == $post_type)
		wp_enqueue_script('callout-admin-script', get_template_directory_uri() . '/includes/callout_admin.js');
}
add_action('admin_print_scripts-post-new.php', 'custom_admin_script', 11);
add_action('admin_print_scripts-post.php', 'custom_admin_script', 11);



// Creates shortcode for displaying custom callouts
function custom_callout_shortcode($post_id) {
	global $post;

	$posts = new WP_Query(array(
		'post_type'      => 'callout_post',
		'posts_per_page' => 1,
		'post_id'        => $post_id
	));
	
	$num_columns = 0;
	$out = '';

	// var_dump($args);

	if ($posts->have_posts()) {
		while ($posts->have_posts()):
			$posts->the_post();

			// If show title checkbox is checked, output title
			$show_title = esc_html(get_post_meta($post_id['post_id'], '_cmb2_show_title', true));
			if ($show_title == true)
				$out .= '<h3 class="text-upper text-center large-margin-top margin-bottom">' . get_the_title() . '</h3>';
			
			$column_1_display = '';
			$column_1_title   = esc_html(get_post_meta($post_id['post_id'], '_cmb2_column_1_title',   true));
			$column_1_image   = esc_html(get_post_meta($post_id['post_id'], '_cmb2_column_1_image',   true));
			$column_1_content = esc_html(get_post_meta($post_id['post_id'], '_cmb2_column_1_content', true));
			$column_1_link    = esc_html(get_post_meta($post_id['post_id'], '_cmb2_column_1_link',    true));
			$column_1_color   = esc_html(get_post_meta($post_id['post_id'], '_cmb2_column_1_color',   true));

			$column_2_display = '';
			$column_2_title   = esc_html(get_post_meta($post_id['post_id'], '_cmb2_column_2_title',   true));
			$column_2_image   = esc_html(get_post_meta($post_id['post_id'], '_cmb2_column_2_image',   true));
			$column_2_content = esc_html(get_post_meta($post_id['post_id'], '_cmb2_column_2_content', true));
			$column_2_link    = esc_html(get_post_meta($post_id['post_id'], '_cmb2_column_2_link',    true));
			$column_2_color   = esc_html(get_post_meta($post_id['post_id'], '_cmb2_column_2_color',   true));

			$column_3_display = '';
			$column_3_title   = esc_html(get_post_meta($post_id['post_id'], '_cmb2_column_3_title',   true));
			$column_3_image   = esc_html(get_post_meta($post_id['post_id'], '_cmb2_column_3_image',   true));
			$column_3_content = esc_html(get_post_meta($post_id['post_id'], '_cmb2_column_3_content', true));
			$column_3_link    = esc_html(get_post_meta($post_id['post_id'], '_cmb2_column_3_link',    true));
			$column_3_color   = esc_html(get_post_meta($post_id['post_id'], '_cmb2_column_3_color',   true));

			$column_4_display = '';
			$column_4_title   = esc_html(get_post_meta($post_id['post_id'], '_cmb2_column_4_title',   true));
			$column_4_image   = esc_html(get_post_meta($post_id['post_id'], '_cmb2_column_4_image',   true));
			$column_4_content = esc_html(get_post_meta($post_id['post_id'], '_cmb2_column_4_content', true));
			$column_4_link    = esc_html(get_post_meta($post_id['post_id'], '_cmb2_column_4_link',    true));
			$column_4_color   = esc_html(get_post_meta($post_id['post_id'], '_cmb2_column_4_color',   true));
		
			$column_5_display = '';
			$column_5_title   = esc_html(get_post_meta($post_id['post_id'], '_cmb2_column_5_title',   true));
			$column_5_image   = esc_html(get_post_meta($post_id['post_id'], '_cmb2_column_5_image',   true));
			$column_5_content = esc_html(get_post_meta($post_id['post_id'], '_cmb2_column_5_content', true));
			$column_5_link    = esc_html(get_post_meta($post_id['post_id'], '_cmb2_column_5_link',    true));
			$column_5_color   = esc_html(get_post_meta($post_id['post_id'], '_cmb2_column_5_color',   true));
		
			$column_6_display = '';
			$column_6_title   = esc_html(get_post_meta($post_id['post_id'], '_cmb2_column_6_title',   true));
			$column_6_image   = esc_html(get_post_meta($post_id['post_id'], '_cmb2_column_6_image',   true));
			$column_6_content = esc_html(get_post_meta($post_id['post_id'], '_cmb2_column_6_content', true));
			$column_6_link    = esc_html(get_post_meta($post_id['post_id'], '_cmb2_column_6_link',    true));
			$column_6_color   = esc_html(get_post_meta($post_id['post_id'], '_cmb2_column_6_color',   true));



			// Counts the number of column titles filled in, uses that for adjusting grid later
			if (($column_1_title != '') || ($column_1_link != '') || ($column_1_content != '') || ($column_1_image != '')) {
				$num_columns++;
				$column_1_display = true;
			}
			if (($column_2_title != '') || ($column_2_link != '') || ($column_2_content != '') || ($column_2_image != '')) {
				$num_columns++;
				$column_2_display = true;
			}
			if (($column_3_title != '') || ($column_3_link != '') || ($column_3_content != '') || ($column_3_image != '')) {
				$num_columns++;
				$column_3_display = true;
			}
			if (($column_4_title != '') || ($column_4_link != '') || ($column_4_content != '') || ($column_4_image != '')) {
				$num_columns++;
				$column_4_display = true;
			}
			
			if (($column_5_title != '') || ($column_5_link != '') || ($column_5_content != '') || ($column_5_image != '')) {
				$num_columns++;
				$column_5_display = true;
			}
			if (($column_6_title != '') || ($column_6_link != '') || ($column_6_content != '') || ($column_6_image != '')) {
				$num_columns++;
				$column_6_display = true;
			}

			// Based on number of columns, the colspan will be different
			if     ($num_columns == 1) $colspan = "col-md-2 col-sm-4 col-xs-8";
			elseif ($num_columns == 2) $colspan = "col-md-2 col-sm-4 col-xs-8";
			elseif ($num_columns == 3) $colspan = "col-md-2 col-sm-4 col-xs-8";
			elseif ($num_columns == 4) $colspan = "col-md-2 col-sm-4 col-xs-8";
			elseif ($num_columns == 5) $colspan = "col-md-2 col-sm-4 col-xs-8";
			elseif ($num_columns == 6) $colspan = "col-md-2 col-sm-4 col-xs-8";

			// Begin outputting the content
			$out .= '<div class="row" style="margin-bottom:-20px !important;">';

			// if column_x_display is set, then output column
			if ($column_1_display == true) {
				$out .= '<div class="' . $colspan . ' invisible callout thin-inter-padding col-md-offset-1 col-sm-offset-0 col-xs-offset-2">';
				//$out .= 	'<a href="' . $column_1_link . '" class="color-inherit">';
				$out .=		'<img src="' . $column_1_image . '" class="internal-padding center-block" />';
				$out .= 		'<h6 class="font-light margin-bottom callout-title" style="border-color:' . $column_1_color . '">' . $column_1_title . '</h6>';
				//$out .=		'</a>';
				$out .= 	'<p>' . $column_1_content . '</p>';
				$out .= '</div>';
			}
			if ($column_2_display == true) {
				$out .= '<div class="' . $colspan . ' invisible callout thin-inter-padding col-md-offset-0 col-sm-offset-0 col-xs-offset-2">';			
				//$out .= 	'<a href="' . $column_2_link . '" class="color-inherit">';
				$out .=		'<img src="' . $column_2_image . '" class="internal-padding center-block" />';
				$out .= 		'<h6 class="font-light margin-bottom callout-title" style="border-color:' . $column_2_color . '">' . $column_2_title . '</h6>';
				//$out .=		'</a>';
			    $out .= 	'<p>' . $column_2_content . '</p>';
				$out .= '</div>';
			}
			if ($column_3_display == true) {
				$out .= '<div class="' . $colspan . ' invisible callout thin-inter-padding col-md-offset-0 col-sm-offset-0 col-xs-offset-2">';			
				//$out .= 	'<a href="' . $column_3_link . '" class="color-inherit">';
				$out .=		'<img src="' . $column_3_image . '" class="internal-padding center-block" />';
				$out .= 		'<h6 class="font-light margin-bottom callout-title" style="border-color:' . $column_3_color . '">' . $column_3_title . '</h6>';
				//$out .=		'</a>';
				$out .= 	'<p>' . $column_3_content . '</p>';
				$out .= '</div>';
			}
			if ($column_4_display == true) {
				$out .= '<div class="' . $colspan . ' invisible callout thin-inter-padding col-md-offset-0 col-sm-offset-0 col-xs-offset-2">';	
				//$out .= 	'<a href="' . $column_4_link . '" class="color-inherit">';
				$out .=		'<img src="' . $column_4_image . '" class="internal-padding center-block" />';
				$out .= 		'<h6 class="font-light margin-bottom callout-title" style="border-color:' . $column_4_color . '">' . $column_4_title . '</h6>';
				//$out .=		'</a>';
				$out .= 	'<p>' . $column_4_content . '</p>';
				$out .= '</div>';
			}
			if ($column_5_display == true) {
				$out .= '<div class="' . $colspan . ' invisible callout thin-inter-padding col-md-offset-0 col-sm-offset-0 col-xs-offset-2">';	
				//$out .= 	'<a href="' . $column_5_link . '" class="color-inherit">';
				$out .=		'<img src="' . $column_5_image . '" class="internal-padding center-block" />';
				$out .= 		'<h6 class="font-light margin-bottom callout-title" style="border-color:' . $column_5_color . '">' . $column_5_title . '</h6>';
				//$out .=		'</a>';
				$out .= 	'<p>' . $column_5_content . '</p>';
				$out .= '</div>';
			}
			if ($column_6_display == true) {
				$out .= '<div class="' . $colspan . ' invisible callout thin-inter-padding col-md-offset-0 col-sm-offset-0 col-xs-offset-2">';			
				//$out .= 	'<a href="' . $column_6_link . '" class="color-inherit">';
				$out .=		'<img src="' . $column_6_image . '" class="internal-padding center-block" />';
				$out .= 		'<h6 class="font-light margin-bottom callout-title" style="border-color:' . $column_6_color . '">' . $column_6_title . '</h6>';
				//$out .=		'</a>';
				$out .= 	'<p>' . $column_6_content . '</p>';
				$out .= '</div>';
			}

			$out .= '</div>';

		endwhile;
	} else
		return; // no posts found

	wp_reset_query();
	return html_entity_decode($out);
}
add_shortcode('callout', 'custom_callout_shortcode');
