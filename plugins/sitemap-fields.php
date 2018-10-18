<?php
/**
 * Sitemap Page fields.
 *
 * @package standard-industries
 */

if ( function_exists( 'acf_add_local_field_group' ) ) {
	acf_add_local_field_group(array(
		'key' => 'group_59c448d59249d',
		'title' => 'Sitemap',
		'fields' => array(
			array(
				'key' => 'field_59c449d825178',
				'label' => 'Columns',
				'name' => 'columns',
				'type' => 'repeater',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'collapsed' => '',
				'min' => 4,
				'max' => 4,
				'layout' => 'block',
				'button_label' => 'Add Column',
				'sub_fields' => array(
					array(
						'key' => 'field_59c449ec25179',
						'label' => 'Links',
						'name' => 'links',
						'type' => 'repeater',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'collapsed' => '',
						'min' => 0,
						'max' => 0,
						'layout' => 'row',
						'button_label' => 'Add Link',
						'sub_fields' => array(
							array(
								'key' => 'field_59c44a1d2517a',
								'label' => 'Link',
								'name' => 'link',
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
									0 => 'component_button_field_button_type',
									1 => 'component_button_field_button_text',
									2 => 'component_button_field_button_internal_url',
									3 => 'component_button_field_button_external_url',
								),
								'display' => 'seamless',
								'layout' => 'block',
								'prefix_label' => 0,
								'prefix_name' => 0,
							),
							array(
								'key' => 'field_59c44a7e2517b',
								'label' => 'Bold',
								'name' => 'bold',
								'type' => 'true_false',
								'instructions' => '',
								'required' => 0,
								'conditional_logic' => 0,
								'wrapper' => array(
									'width' => '',
									'class' => '',
									'id' => '',
								),
								'message' => '',
								'default_value' => 0,
								'ui' => 0,
								'ui_on_text' => '',
								'ui_off_text' => '',
							),
						),
					),
				),
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'post_template',
					'operator' => '==',
					'value' => 'page-sitemap.php',
				),
			),
		),
		'menu_order' => 0,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => array(
			0 => 'the_content',
		),
		'active' => 1,
		'description' => '',
	));
}
