<?php
/**
 * Full bleed module.
 *
 * @package standard-industries
 */

use Rain\Modules;

$modules = Modules::get_instance();

$modules->add_module('Team Homepage', 'grid-team-homepage', 'page_modules',
	array(
		array(
			'key' => 'field_dad7a63adaaa3',
			'label' => 'Background Color',
			'name' => 'background_color',
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
				0 => 'field_59bc77e1a28c5',
			),
			'display' => 'seamless',
			'layout' => 'block',
			'prefix_label' => 0,
			'prefix_name' => 0,
		),
		array(
			'key' => 'field_411cb96f5a28e',
			'label' => 'Headline',
			'name' => 'headline',
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
			'key' => 'field_5c2cc3aeb7c49',
			'label' => 'Headline Color',
			'name' => 'headline_color',
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
		array(
			'key' => 'field_3a05bbec2d855',
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
			'key' => 'field_2b248faa7b020',
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
			'clone' => array(
				0 => 'component_button_field_button_type',
				1 => 'component_button_field_button_text',
				2 => 'component_button_field_button_internal_url',
				3 => 'component_button_field_button_external_url',
			),
			'display' => 'group',
			'layout' => 'block',
			'prefix_label' => 0,
			'prefix_name' => 0,
		),
		array(
			'key' => 'field_fee456c8963ed',
			'label' => 'Images',
			'name' => 'team_images',
			'type' => 'gallery',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'min' => '',
			'max' => '',
			'insert' => 'append',
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
