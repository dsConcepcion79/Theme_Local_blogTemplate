<?php
/**
 * History module.
 *
 * @package standard-industries
 */

use Rain\Modules;

$modules = Modules::get_instance();

$modules->add_module('History', 'history', 'page_modules',
	array(
		array(
			'key' => 'field_59c3e2f86aa83',
			'label' => 'Timeline Items',
			'name' => 'timeline_items',
			'type' => 'repeater',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'collapsed' => 'field_59c3e30b6aa84',
			'min' => 0,
			'max' => 0,
			'layout' => 'row',
			'button_label' => 'Add Item',
			'sub_fields' => array(
				array(
					'key' => 'field_59c3e3696aa87',
					'label' => 'Separator?',
					'name' => 'is_separator',
					'type' => 'radio',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'choices' => array(
						1 => 'Yes',
						0 => 'No',
					),
					'allow_null' => 0,
					'other_choice' => 0,
					'save_other_choice' => 0,
					'default_value' => 0,
					'layout' => 'horizontal',
					'return_format' => 'value',
				),
				array(
					'key' => 'field_59c3e30b6aa84',
					'label' => 'Title',
					'name' => 'title',
					'type' => 'text',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => array(
						array(
							array(
								'field' => 'field_59c3e3696aa87',
								'operator' => '==',
								'value' => '0',
							),
						),
					),
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
				),
				array(
					'key' => 'field_59c3e3206aa85',
					'label' => 'Text',
					'name' => 'text',
					'type' => 'textarea',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => array(
						array(
							array(
								'field' => 'field_59c3e3696aa87',
								'operator' => '==',
								'value' => '0',
							),
						),
					),
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'maxlength' => '',
					'rows' => '',
					'new_lines' => 'br',
				),
				array(
					'key' => 'field_59c3e3306aa86',
					'label' => 'Image',
					'name' => 'image',
					'type' => 'image',
					'instructions' => '(Optional)',
					'required' => 0,
					'conditional_logic' => array(
						array(
							array(
								'field' => 'field_59c3e3696aa87',
								'operator' => '==',
								'value' => '0',
							),
						),
					),
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'return_format' => 'id',
					'preview_size' => 'thumbnail',
					'library' => 'all',
					'min_width' => '',
					'min_height' => '',
					'min_size' => '',
					'max_width' => '',
					'max_height' => '',
					'max_size' => '',
					'mime_types' => '',
				),
			),
		),
	)
);
