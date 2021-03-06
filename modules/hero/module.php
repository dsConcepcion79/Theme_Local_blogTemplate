<?php
/**
 * Hero module.
 *
 * @package standard-industries
 */

use Rain\Modules;

$modules = Modules::get_instance();

$modules->add_module('Hero', 'hero', 'page_modules',
	array(
		array(
			'key' => 'field_59048959d093',
			'label' => 'Hero Type',
			'name' => 'hero_type',
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
				'default' => 'Default',
				'company' => 'Company Profile',
				'companies' => 'Companies Overview',
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
			'key' => 'field_598d46f0ea24a',
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
		array(
			'key' => 'field_598d4714ea24b',
			'label' => 'Heading',
			'name' => 'heading',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_59048959d093',
						'operator' => '==',
						'value' => 'default',
					),
				),
				array(
					array(
						'field' => 'field_59048959d093',
						'operator' => '==',
						'value' => 'companies',
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
			'key' => 'field_598d4721ea24c',
			'label' => 'Text',
			'name' => 'text',
			'type' => 'textarea',
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
			'maxlength' => '',
			'rows' => 3,
			'new_lines' => '',
		),
		array(
			'key' => 'field_598d8475ue93',
			'label' => 'Logo Image',
			'name' => 'logo_image',
			'type' => 'image',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_59048959d093',
						'operator' => '==',
						'value' => 'company',
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
		array(
			'key' => 'field_599reeregw082u45',
			'label' => 'Sub-Heading',
			'name' => 'company_info_heading',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_59048959d093',
						'operator' => '==',
						'value' => 'company',
					),
				),
				array(
					array(
						'field' => 'field_59048959d093',
						'operator' => '==',
						'value' => 'companies',
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
			'key' => 'field_59bc830abe0e3',
			'label' => 'Company Color',
			'name' => 'company_color',
			'type' => 'select',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_59048959d093',
						'operator' => '==',
						'value' => 'company',
					),
				),
			),
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
				'#6e9dcc' => 'Winter',
				'#9196a6' => '40 North',
				'#ffffff' => 'Schiedel',
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
			'key' => 'field_59855y51ea24c',
			'label' => 'Sub-text',
			'name' => 'company_info_text',
			'type' => 'textarea',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_59048959d093',
						'operator' => '==',
						'value' => 'company',
					),
				),
				array(
					array(
						'field' => 'field_59048959d093',
						'operator' => '==',
						'value' => 'companies',
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
			'rows' => 3,
			'new_lines' => '',
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
			'key' => 'field_5994436567cf',
			'label' => 'CTA Button Link',
			'name' => 'cta_button_link',
			'type' => 'clone',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_59048959d093',
						'operator' => '==',
						'value' => 'company',
					),
				),
				array(
					array(
						'field' => 'field_59048959d093',
						'operator' => '==',
						'value' => 'companies',
					),
				),
			),
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
		),
		array(
			'key' => 'field_599674504',
			'label' => 'Company Facts',
			'name' => 'company_facts',
			'type' => 'repeater',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_59048959d093',
						'operator' => '==',
						'value' => 'company',
					),
				),
			),
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'collapsed' => '',
			'min' => 0,
			'max' => 0,
			'layout' => 'table',
			'button_label' => 'Add Company Fact',
			'sub_fields' => array(
				array(
					'key' => 'field_594865jeo4',
					'label' => 'Value',
					'name' => 'value',
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
					'key' => 'field_8uewt0487',
					'label' => 'Label',
					'name' => 'label',
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
			),
		),
		array(
			'key' => 'field_59bc800df4775',
			'label' => 'Companies Logos',
			'name' => 'companies_logos',
			'type' => 'repeater',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_59048959d093',
						'operator' => '==',
						'value' => 'companies',
					),
				),
			),
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'collapsed' => '',
			'min' => 0,
			'max' => 0,
			'layout' => 'row',
			'button_label' => 'Add Logo',
			'sub_fields' => array(
				array(
					'key' => 'field_59bc802ff4776',
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
					'key' => 'field_59bc8042f4777',
					'label' => 'Link',
					'name' => 'link',
					'type' => 'page_link',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'post_type' => array(
						0 => 'page',
					),
					'taxonomy' => array(),
					'allow_null' => 0,
					'allow_archives' => 1,
					'multiple' => 0,
				),
				array(
					'key' => 'field_59bc830afd1561be0e3e',
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
						'#6e9dcc' => 'Winter',
						'#9196a6' => '40 North',
						'#ffffff' => 'Schiedel',
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
		),
	)
);
