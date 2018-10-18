<?php
/**
 * Component: Color Picker.
 *
 * @package standard-industries
 */

if ( function_exists( 'acf_add_local_field_group' ) ) {
	acf_add_local_field_group(array(
		'key' => 'group_599c983e876cf',
		'title' => 'Color Picker',
		'fields' => array(
			array(
				'key' => 'field_599c98469795c',
				'label' => 'Color',
				'name' => 'color',
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
					'#eab600' => 'Yellow',
					'#439d01' => 'Green',
					'#0a4f88' => 'Blue',
					'#00aeef' => 'Light Blue',
					'#2f92b2' => 'Teal',
					'#ec6e06' => 'Orange',
					'#53104c' => 'Plum',
					'#24272c' => 'Black',
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
