<?php
/**
 * Work Callout module.
 *
 * @package standard-industries
 */

use Rain\Modules;

$modules = Modules::get_instance();

$modules->add_module('Work Callout', 'work-callout', 'page_modules',
	array(
		array(
			'placement' => 'top',
			'endpoint' => 0,
			'key' => 'field_53457375473',
			'label' => 'Options',
			'name' => '',
			'type' => 'tab',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
		),
		array(
			'key' => 'field_5a3833005c1a2',
			'label' => 'Background Image',
			'name' => 'background_image',
			'type' => 'image',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
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
		array(
			'key' => 'field_599wcf2fadc3f',
			'label' => 'Work Callouts',
			'name' => 'work_callouts',
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
			'layout' => 'table',
			'button_label' => 'Add Work Callout',
			'sub_fields' => array(
				array(
					'clone' => array(
						0 => 'component_button_field_button_type',
						1 => 'component_button_field_button_text',
						2 => 'component_button_field_button_internal_url',
						3 => 'component_button_field_button_external_url',
					),
					'prefix_label' => 0,
					'prefix_name' => 0,
					'display' => 'group',
					'layout' => 'block',
					'key' => 'field_5933456537y7549cf',
					'label' => 'CTA Button Link',
					'name' => 'cta_button_link',
					'type' => 'clone',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
				),
			),
		),
		array(
			'clone' => array(
				0 => 'group_component_heading',
			),
			'prefix_label' => 0,
			'prefix_name' => 0,
			'display' => 'seamless',
			'layout' => 'block',
			'key' => 'field_59e547ruu333e8',
			'label' => 'Heading',
			'name' => 'heading',
			'type' => 'clone',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
		),
		array(
			'key' => 'field_39cea2f16d193',
			'label' => 'Image',
			'name' => 'image',
			'type' => 'image',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
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
	)
);
