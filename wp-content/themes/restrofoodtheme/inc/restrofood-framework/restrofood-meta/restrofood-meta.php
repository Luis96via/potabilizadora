<?php
/**
 * Include and setup custom metaboxes and fields. (make sure you copy this file to outside the CMB2 directory)
 *
 * Be sure to replace all instances of 'yourprefix_' with your project's prefix.
 * http://nacin.com/2010/05/11/in-wordpress-prefix-everything/
 *
 * @category YourThemeOrPlugin
 * @package  Demo_CMB2
 * @license  http://www.opensource.org/licenses/gpl-license.php GPL v2.0 (or later)
 * @link     https://github.com/WebDevStudios/CMB2
 */


/**
 * Conditionally displays a metabox when used as a callback in the 'show_on_cb' cmb2_box parameter
 *
 * @param  CMB2 object $cmb CMB2 object
 *
 * @return bool             True if metabox should show
 */
function restrofood_show_if_front_page( $cmb ) {
	// Don't show this metabox if it's not the front page template
	if ( $cmb->object_id !== get_option( 'page_on_front' ) ) {
		return false;
	}
	return true;
}

/**
 * Conditionally displays a field when used as a callback in the 'show_on_cb' field parameter
 *
 * @param  CMB2_Field object $field Field object
 *
 * @return bool                     True if metabox should show
 */
function restrofood_hide_if_no_cats( $field ) {
	// Don't show this field if not in the cats category
	if ( ! has_tag( 'cats', $field->object_id ) ) {
		return false;
	}
	return true;
}

/**
 * Manually render a field.
 *
 * @param  array      $field_args Array of field arguments.
 * @param  CMB2_Field $field      The field object
 */
function restrofood_render_row_cb( $field_args, $field ) {
	$classes     = $field->row_classes();
	$id          = $field->args( 'id' );
	$label       = $field->args( 'name' );
	$name        = $field->args( '_name' );
	$value       = $field->escaped_value();
	$description = $field->args( 'description' );
	?>
	<div class="custom-field-row <?php echo esc_attr( $classes ); ?>">
		<p><label for="<?php echo esc_attr( $id ); ?>"><?php echo esc_html( $label ); ?></label></p>
		<p><input id="<?php echo esc_attr( $id ); ?>" type="text" name="<?php echo esc_attr( $name ); ?>" value="<?php echo esc_attr( $value ); ?>"/></p>
		<p class="description"><?php echo esc_html( $description ); ?></p>
	</div>
	<?php
}

/**
 * Manually render a field column display.
 *
 * @param  array      $field_args Array of field arguments.
 * @param  CMB2_Field $field      The field object
 */
function restrofood_display_text_small_column( $field_args, $field ) {
	?>
	<div class="custom-column-display <?php echo esc_attr( $field->row_classes() ); ?>">
		<p><?php echo esc_html( $field->escaped_value() ); ?></p>
		<p class="description"><?php echo esc_attr( $field->args( 'description' ) ); ?></p>
	</div>
	<?php
}

/**
 * Conditionally displays a message if the $post_id is 2
 *
 * @param  array             $field_args Array of field parameters
 * @param  CMB2_Field object $field      Field object
 */
function restrofood_before_row_if_2( $field_args, $field ) {
	if ( 2 == $field->object_id ) {
		echo '<p>Testing <b>"before_row"</b> parameter (on $post_id 2)</p>';
	} else {
		echo '<p>Testing <b>"before_row"</b> parameter (<b>NOT</b> on $post_id 2)</p>';
	}
}
add_action( 'cmb2_admin_init', 'restrofood_register_metabox' );
/**
 * Hook in and add a demo metabox. Can only happen on the 'cmb2_admin_init' or 'cmb2_init' hook.
 */
function restrofood_register_metabox() {
	$prefix 	= '_restrofood_';
	$prefixpage = '_restrofoodpage_';

    /********************************\
        Page Layout
    \********************************/
	$restrofood_meta = new_cmb2_box( array(
		'id'            => $prefixpage . 'page_layout_section',
		'title'         => esc_html__( 'Page Layout', 'restrofood' ),
        'context' 		=> 'side',
        'priority' 		=> 'high',
		'object_types'  => array( 'page' ), // Post type
	) );

	$restrofood_meta->add_field( array(
		'desc'       => esc_html__( 'Set page layout container,container fluid,fullwidth or both. It\'s work only in template builder page.', 'restrofood' ),
		'id'         => $prefix . 'custom_page_layout',
		'type'       => 'radio',
        'options' => array(
            '1' => esc_html__( 'Container','restrofood' ),
            '2' => esc_html__( 'Container Fluid','restrofood' ),
            '3' => esc_html__( 'Fullwidth','restrofood' ),
        ),
	) );
	$restrofood_meta->add_field( array(
		'name' => esc_html__( 'Top and Bottom Padding', 'restrofood' ),
		'id'   => $prefix . 'custom_page_padding',
		'type' => 'own_slider',
		'min'         => '0',
		'max'         => '500',
		'step'        => '1',
		'default'     => '0', // start value
		'value_label' => 'Value:',
        'desc' => esc_html__( 'Set page content wrapper top and bottom padding.', 'restrofood' ),
	));
	// Classic CMB2 declaration
	$restrofood_meta = new_cmb2_box( array(
		'id'           => $prefixpage .'header_option',
		'title'        => esc_html__( 'Custom Page Settings','restrofood' ),
		'closed'	   => true,
		'object_types' => array( 'page' ), // Post type
		'tabs'      => array(
			'restrofood-header-option' => array(
				'label' => esc_html__( 'Page Header Option', 'restrofood' ),
				'icon'  => 'fa fa-info',
			),
		),
		'tab_style'   => 'default',
	) );
	$restrofood_meta->add_field( array(
		'desc'       => esc_html__( 'Want To Show Page Header Click Yes Edit And Update', 'restrofood' ),
		'id'         => $prefix . 'page_header',
		'type'    	 => 'switch',
		'label'      => array(
			'on'	=> 'Yes',
			'off'	=> 'No'
		),
		'tab'  			=> 'restrofood-header-option',
		'render_row_cb' => array( 'CMB2_Tabs', 'tabs_render_row_cb' ),
	) );
	$restrofood_meta->add_field( array(
		'desc'       => esc_html__( 'Choose Setting', 'restrofood' ),
		'id'         => $prefix . 'global_style',
		'type'             => 'select',
		'default'          => 'global',
		'options'          => array(
			'global' 	=> esc_html__( 'Global Setting', 'restrofood' ),
			'single'    => esc_html__( 'Single Page Setting', 'restrofood' ),
		),
		'tab'  			=> 'restrofood-header-option',
		'render_row_cb' => array( 'CMB2_Tabs', 'tabs_render_row_cb' ),
	) );
	$restrofood_meta->add_field( array(
		'desc'       => esc_html__( 'Header Text and Breadcrumb Align', 'restrofood' ),
		'id'         => $prefix . 'content_align',
		'type'             => 'select',
		'default'          => 'center',
		'options'          => array(
			'left' 		=> esc_html__( 'Left', 'restrofood' ),
			'center'    => esc_html__( 'Center', 'restrofood' ),
			'right'    	=> esc_html__( 'Right', 'restrofood' ),
		),
		'tab'  			=> 'restrofood-header-option',
		'render_row_cb' => array( 'CMB2_Tabs', 'tabs_render_row_cb' ),
	) );
	$restrofood_meta->add_field( array(
		'desc'       => esc_html__( 'Page Header Background', 'restrofood' ),
		'id'         => $prefix . 'page_header_bg',
		'type'    	 => 'file',
		'tab'  			=> 'restrofood-header-option',
		'render_row_cb' => array( 'CMB2_Tabs', 'tabs_render_row_cb' ),
	) );
	$restrofood_meta->add_field( array(
		'desc'       => esc_html__( 'Page Header Background Color', 'restrofood' ),
		'id'         => $prefix . 'page_header_bg_color',
		'type'    	 => 'colorpicker',
		'tab'  			=> 'restrofood-header-option',
		'render_row_cb' => array( 'CMB2_Tabs', 'tabs_render_row_cb' ),
	) );
	$restrofood_meta->add_field( array(
		'desc'       => esc_html__( 'Page Header Background Repeat', 'restrofood' ),
		'id'         => $prefix . 'page_header_bg_repeat',
		'type'             => 'select',
		'default'          => 'default',
		'options'          => array(
			'default' 			=> esc_html__( 'Default', 'restrofood' ),
			'norepeat' 			=> esc_html__( 'No Repeat', 'restrofood' ),
			'repeatall'     	=> esc_html__( 'Repeat All', 'restrofood' ),
			'repeathor'    		=> esc_html__( 'Repeat Horizontally', 'restrofood' ),
			'repeatver'    		=> esc_html__( 'Repeat Vertically', 'restrofood' ),
			'inherit'    		=> esc_html__( 'Inherit', 'restrofood' ),
		),
		'tab'  			=> 'restrofood-header-option',
		'render_row_cb' => array( 'CMB2_Tabs', 'tabs_render_row_cb' ),
	) );
	$restrofood_meta->add_field( array(
		'desc'       => esc_html__( 'Page Header Background Size', 'restrofood' ),
		'id'         => $prefix . 'page_header_bg_size',
		'type'             => 'select',
		'default'          => 'default',
		'options'          => array(
			'default' 			=> esc_html__( 'Default', 'restrofood' ),
			'inherit' 			=> esc_html__( 'Inherit', 'restrofood' ),
			'cover'     		=> esc_html__( 'Cover', 'restrofood' ),
			'contain'    		=> esc_html__( 'Contain', 'restrofood' ),
		),
		'tab'  			=> 'restrofood-header-option',
		'render_row_cb' => array( 'CMB2_Tabs', 'tabs_render_row_cb' ),
	) );
	$restrofood_meta->add_field( array(
		'desc'       => esc_html__( 'Page Header Background Attachment', 'restrofood' ),
		'id'         => $prefix . 'page_header_bg_attachment',
		'type'             => 'select',
		'default'          => 'norepeat',
		'options'          => array(
			'default' 			=> esc_html__( 'Default', 'restrofood' ),
			'fixed' 			=> esc_html__( 'Fixed', 'restrofood' ),
			'scroll'     		=> esc_html__( 'Scroll', 'restrofood' ),
			'inherit'    		=> esc_html__( 'Inherit', 'restrofood' ),
		),
		'tab'  			=> 'restrofood-header-option',
		'render_row_cb' => array( 'CMB2_Tabs', 'tabs_render_row_cb' ),
	) );
	$restrofood_meta->add_field( array(
		'desc'       => esc_html__( 'Page Header Background Position', 'restrofood' ),
		'id'         => $prefix . 'page_header_bg_position',
		'type'             => 'select',
		'default'          => 'default',
		'options'          => array(
			'default' 			=> esc_html__( 'Default', 'restrofood' ),
			'lefttop' 			=> esc_html__( 'Left Top', 'restrofood' ),
			'leftcenter' 		=> esc_html__( 'Left Center', 'restrofood' ),
			'leftbottom' 		=> esc_html__( 'Left Bottom', 'restrofood' ),
			'centertop' 		=> esc_html__( 'Center Top', 'restrofood' ),
			'centercenter'     	=> esc_html__( 'Center Center', 'restrofood' ),
			'centerbottom'    	=> esc_html__( 'Center Bottom', 'restrofood' ),
			'righttop'    		=> esc_html__( 'Right Top', 'restrofood' ),
			'rightcenter'    	=> esc_html__( 'Right Center', 'restrofood' ),
			'rightbottom'    	=> esc_html__( 'Right Bottom', 'restrofood' ),
		),
		'tab'  			=> 'restrofood-header-option',
		'render_row_cb' => array( 'CMB2_Tabs', 'tabs_render_row_cb' ),
	) );
	$restrofood_meta->add_field( array(
		'desc'       => esc_html__( 'Show Or Hide Page Header', 'restrofood' ),
		'id'         => $prefix . 'page_header_show_hide',
		'type'    	 => 'switch',
		'label'      => array(
			'on'	=> 'Yes',
			'off'	=> 'No'
		),
		'tab'  			=> 'restrofood-header-option',
		'render_row_cb' => array( 'CMB2_Tabs', 'tabs_render_row_cb' ),
	) );
	$restrofood_meta->add_field( array(
		'desc'       => esc_html__( 'Page Header Text Color', 'restrofood' ),
		'id'         => $prefix . 'page_header_text_color',
		'type'    	 => 'colorpicker',
		'tab'  			=> 'restrofood-header-option',
		'render_row_cb' => array( 'CMB2_Tabs', 'tabs_render_row_cb' ),
	) );
	$restrofood_meta->add_field( array(
		'desc'       => esc_html__( 'Enable Breadcrumb?', 'restrofood' ),
		'id'         => $prefix . 'breadcrumb_enable',
		'type'    	 => 'switch',
		'label'      => array(
			'on'	=> 'Yes',
			'off'	=> 'No'
		),
		'tab'  			=> 'restrofood-header-option',
		'render_row_cb' => array( 'CMB2_Tabs', 'tabs_render_row_cb' ),
	) );
	$restrofood_meta->add_field( array(
		'desc'       => esc_html__( 'Breadcrumb Link Color', 'restrofood' ),
		'id'         => $prefix . 'breadcrumb_link_color',
		'type'    	 => 'colorpicker',
		'tab'  			=> 'restrofood-header-option',
		'render_row_cb' => array( 'CMB2_Tabs', 'tabs_render_row_cb' ),
	) );
	$restrofood_meta->add_field( array(
		'desc'       => esc_html__( 'Breadcrumb Link Hover Color', 'restrofood' ),
		'id'         => $prefix . 'breadcrumb_link_hover_color',
		'type'    	 => 'colorpicker',
		'tab'  			=> 'restrofood-header-option',
		'render_row_cb' => array( 'CMB2_Tabs', 'tabs_render_row_cb' ),
	) );
	$restrofood_meta->add_field( array(
		'desc'       => esc_html__( 'Breadcrumb Active Color', 'restrofood' ),
		'id'         => $prefix . 'breadcrumb_active_color',
		'type'    	 => 'colorpicker',
		'tab'  			=> 'restrofood-header-option',
		'render_row_cb' => array( 'CMB2_Tabs', 'tabs_render_row_cb' ),
	) );
	$restrofood_meta->add_field( array(
		'desc'       => esc_html__( 'Breadcrumb Divider Color', 'restrofood' ),
		'id'         => $prefix . 'breadcrumb_divider_color',
		'type'    	 => 'colorpicker',
		'tab'  			=> 'restrofood-header-option',
		'render_row_cb' => array( 'CMB2_Tabs', 'tabs_render_row_cb' ),
	) );
	/********************************\
		Service Post Type
	\********************************/
	$restrofood_meta = new_cmb2_box( array(
		'id'            => $prefixpage . 'service_post_type',
		'title'         => esc_html__( 'More Data', 'restrofood' ),
		'object_types'  => array( 'restrofood_service' ), // Post type
	) );
	$restrofood_meta->add_field( array(
		'name'    	 => esc_html__( 'Service Thumbnail Image On Hover', 'restrofood' ),
		'desc'       => esc_html__( 'Set Service Thumbnail Image When Hover', 'restrofood' ),
		'id'         => $prefix . 'service_image_type_two',
		'type'       => 'file',
	) );
	$restrofood_meta->add_field( array(
		'name'    	 => esc_html__( 'Read More Button Text', 'restrofood' ),
		'desc'       => esc_html__( 'Insert Read More Button Text.', 'restrofood' ),
		'id'         => $prefix . 'read_more_button_text',
		'type'       => 'text',
	) );
	$restrofood_meta->add_field( array(
		'name'    	 => esc_html__( 'Read More Button Url', 'restrofood' ),
		'desc'       => esc_html__( 'Insert Read More Button Url.', 'restrofood' ),
		'id'         => $prefix . 'read_more_button_url',
		'type'       => 'text',
	) );


	/********************************\
		Pricing Post Type
	\********************************/
	$restrofood_meta = new_cmb2_box( array(
		'id'            => $prefixpage . 'price_tab_nav',
		'title'         => esc_html__( 'Add Price', 'restrofood' ),
		'object_types'  => array( 'restrofood_price' ), // Post type
	) );

	$restrofood_meta->add_field( array(
		'name'    	 => esc_html__( 'Plan Price', 'restrofood' ),
		'desc'       => esc_html__( 'Set Plan Price', 'restrofood' ),
		'id'         => $prefix . 'plan_price',
		'type'       => 'text',
	) );
	$restrofood_meta = new_cmb2_box( array(
		'id'            => $prefixpage . 'price_tab_data',
		'title'         => esc_html__( 'Add Price Description', 'restrofood' ),
		'object_types'  => array( 'restrofood_price' ), // Post type
	) );
	$restrofood_meta->add_field( array(
		'name'    	 => esc_html__( 'Plan Price Title Left Side', 'restrofood' ),
		'desc'       => esc_html__( 'Set Plan Price Title For Left Side', 'restrofood' ),
		'id'         => $prefix . 'left_title',
		'type'       => 'text',
	) );
	$group_field_id = $restrofood_meta->add_field( array(
		'id'          =>  $prefix . 'price_desc_repeat_group_left',
		'type'        => 'group',
		'description' => esc_html__( 'Add Price Table Left Side Point', 'restrofood' ),
		'options'     => array(
			'group_title'       => esc_html__( 'Point {#}', 'restrofood' ), // since version 1.1.4, {#} gets replaced by row number
			'add_button'        => esc_html__( 'Add Another Point', 'restrofood' ),
			'remove_button'     => esc_html__( 'Remove Point', 'restrofood' ),
			'sortable'          => true,
		),
	) );
	$restrofood_meta->add_field( array(
		'name'    	 => esc_html__( 'Plan Price Title Right Side', 'restrofood' ),
		'desc'       => esc_html__( 'Set Plan Price Title For Right Side', 'restrofood' ),
		'id'         => $prefix . 'right_title',
		'type'       => 'text',
	) );
	$restrofood_meta->add_field( array(
		'name'    	 => esc_html__( 'Plan Price Descripton Right Side', 'restrofood' ),
		'desc'       => esc_html__( 'Set Plan Price Descripton For Right Side', 'restrofood' ),
		'id'         => $prefix . 'right_side_description',
		'type'       => 'textarea',
	) );
	// Id's for group's fields only need to be unique for the group. Prefix is not needed.
	$restrofood_meta->add_group_field( $group_field_id, array(
		'name' => 'Point Icon',
		'id'   =>  $prefix . 'left_point_icon',
		'type' => 'fontawesome_icon',
	) );
	$restrofood_meta->add_group_field( $group_field_id, array(
		'name' => 'Point Title',
		'id'   =>  $prefix . 'left_point',
		'type' => 'text',
	) );

	$right_side_group = $restrofood_meta->add_field( array(
		'id'          =>  $prefix . 'price_desc_repeat_group_right_side',
		'type'        => 'group',
		'description' => esc_html__( 'Add Price Table Right Side Point', 'restrofood' ),
		'options'     => array(
			'group_title'       => esc_html__( 'Point {#}', 'restrofood' ), // since version 1.1.4, {#} gets replaced by row number
			'add_button'        => esc_html__( 'Add Another Point', 'restrofood' ),
			'remove_button'     => esc_html__( 'Remove Point', 'restrofood' ),
			'sortable'          => true,
		),
	) );
	$restrofood_meta->add_group_field( $right_side_group, array(
		'name' => 'Point Icon',
		'id'   =>  $prefix . 'right_point_icon',
		'type' => 'fontawesome_icon',
	) );
	// Id's for group's fields only need to be unique for the group. Prefix is not needed.
	$restrofood_meta->add_group_field( $right_side_group, array(
		'name' 		=> 'Point Title',
		'id'   		=>  $prefix . 'right_point',
		'type' 		=> 'text',
		// 'repeatable' => true, // Repeatable fields are supported w/in repeatable groups (for most types)
	) );
	$restrofood_meta->add_field( array(
		'name'    	 => esc_html__( 'Right Side Button Text', 'restrofood' ),
		'desc'       => esc_html__( 'Set Right Side Button Text', 'restrofood' ),
		'id'         => $prefix . 'button_text',
		'type'       => 'text',
	) );
	$restrofood_meta->add_field( array(
		'name'    	 => esc_html__( 'Button Url', 'restrofood' ),
		'desc'       => esc_html__( 'Set Button Url', 'restrofood' ),
		'id'         => $prefix . 'button_url',
		'type'       => 'text',
		'defualt'	 => '#',
	) );

	/********************************\
		Project Post Type
	\********************************/
	$restrofood_meta = new_cmb2_box( array(
		'id'            => $prefixpage . 'project_post',
		'title'         => esc_html__( 'Add Project Data', 'restrofood' ),
		'object_types'  => array( 'restrofood_project' ), // Post type
	) );
	$restrofood_meta->add_field( array(
		'name'    	 => esc_html__( 'Client Name', 'restrofood' ),
		'desc'       => esc_html__( 'Set Client Name', 'restrofood' ),
		'id'         => $prefix . 'client_name',
		'type'       => 'text',
	) );
	$restrofood_meta->add_field( array(
		'name'    	 => esc_html__( 'Button Text', 'restrofood' ),
		'desc'       => esc_html__( 'Set Read More Button Text', 'restrofood' ),
		'id'         => $prefix . 'project_read_more',
		'type'       => 'text',
	) );
	$restrofood_meta->add_field( array(
		'name'    	 => esc_html__( 'Button Url', 'restrofood' ),
		'desc'       => esc_html__( 'Set Read More Button Url. ( Default Is Single Post )', 'restrofood' ),
		'id'         => $prefix . 'project_read_more_url',
		'type'       => 'text',
	) );
	$restrofood_meta->add_field( array(
		'name'    	 => esc_html__( 'Designation', 'restrofood' ),
		'desc'       => esc_html__( 'Client Designation', 'restrofood' ),
		'id'         => $prefix . 'client_designation',
		'type'       => 'text',
	) );
	$restrofood_meta->add_field( array(
		'name'    	 => esc_html__( 'Perspective', 'restrofood' ),
		'desc'       => esc_html__( 'Project Perspective', 'restrofood' ),
		'id'         => $prefix . 'project_perspective',
		'type'       => 'text',
		'repeatable' => true,
	) );
}