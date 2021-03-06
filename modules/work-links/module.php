<?php
/**
 * Work Links module.
 *
 * @package standard-industries
 */

use Rain\Modules;

$modules = Modules::get_instance();

$modules->add_module('Work Links', 'work-links', 'page_modules',
	array(
		array(
			'placement' => 'top',
			'endpoint' => 0,
			'key' => 'field_0649be1b7f6b0',
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
			'key' => 'field_5b0c8479eeaf2',
			'label' => 'SI Jobs CTA',
			'name' => 'si_jobs_cta',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
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
			'key' => 'field_5b0c848deeaf3',
			'label' => 'SI Jobs URL',
			'name' => 'si_jobs_url',
			'type' => 'url',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
		),
		array(
			'key' => 'field_fcc0451a4efee',
			'label' => 'Work Links',
			'name' => 'work_links',
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
			'button_label' => 'Add Work Link',
			'sub_fields' => array(
				array(
					'key' => 'field_59bc830abe0e3ascjk',
					'label' => 'Company Color',
					'name' => 'company_color',
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
						'#00aeef' => 'BMI',
						'#ed212c' => 'GAF',
						'#084c1d' => 'SGI',
						'#00529c' => 'Siplast',
						'#659bc5' => 'Winter',
					),
					'default_value' => array(),
					'allow_null' => 0,
					'multiple' => 0,
					'ui' => 0,
					'ajax' => 0,
					'return_format' => 'value',
					'placeholder' => '',
				),
				array(
					'key' => 'field_599re345g664c6',
					'label' => 'Logo Image',
					'name' => 'logo_image',
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
			'key' => 'field_cbfff4672a35e',
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
	)
);
