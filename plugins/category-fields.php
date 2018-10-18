<?php
/**
 * Post category fields.
 *
 * @package standard-industries
 */

if ( function_exists( 'acf_add_local_field_group' ) ) {
	acf_add_local_field_group(array(
		'key' => 'group_59bffb1369484',
		'title' => 'Story Color',
		'fields' => array(
			array(
				'key' => 'field_59bffb355f173',
				'label' => 'Color',
				'name' => 'category_color',
				'type' => 'clone',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'clone' => array(
					0 => 'field_599c98469795c',
				),
				'display' => 'seamless',
				'layout' => 'block',
				'prefix_label' => 0,
				'prefix_name' => 0,
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'taxonomy',
					'operator' => '==',
					'value' => 'all',
				),
			),
		),
		'menu_order' => 0,
		'position' => 'side',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => '',
		'active' => 1,
		'description' => '',
	));
}
