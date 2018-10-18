<?php
/**
 * Component: Background COlor
 *
 * @package standard-industries
 */

if ( function_exists( 'acf_add_local_field_group' ) ) {

	acf_add_local_field_group(array(
		'key' => 'group_59bc77d401888',
		'title' => 'Background Color',
		'fields' => array(
			array(
				'key' => 'field_59bc77e1a28c5',
				'label' => 'Background Color',
				'name' => 'background_color',
				'type' => 'select',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'choices' => array(
					'bg-white' => 'White',
					'bg-gray' => 'Gray',
				),
				'default_value' => array(),
				'allow_null' => 0,
				'multiple' => 0,
				'ui' => 0,
				'ajax' => 0,
				'return_format' => 'value',
				'placeholder' => '',
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'post',
				),
			),
		),
		'menu_order' => 0,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => '',
		'active' => 0,
		'description' => '',
	));
}
