<?php
/**
 * Our Brands module.
 *
 * @package standard-industries
 */

use Rain\Modules;

$modules = Modules::get_instance();

$modules->add_module('Our Brands', 'our-brands', 'page_modules',
	array(
		array(
			'placement' => 'top',
			'endpoint' => 0,
			'key' => 'field_59533e75733',
			'label' => 'Images',
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
			'key' => 'field_599c8576547b',
			'label' => 'Brands Images',
			'name' => 'brands_images',
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
		array(
			'key' => 'field_59bc78e8cdb37',
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
			'clone' => array(
				0 => 'group_component_heading',
			),
			'prefix_label' => 0,
			'prefix_name' => 0,
			'display' => 'seamless',
			'layout' => 'block',
			'key' => 'field_59573455455448',
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
