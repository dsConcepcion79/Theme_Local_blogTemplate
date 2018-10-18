<?php
/**
 * Gallery module.
 *
 * @package standard-industries
 */

use Rain\Modules;

$modules = Modules::get_instance();

$modules->add_module('Gallery', 'gallery', 'page_modules',
	array(
		array(
			'key' => 'field_599c8a2bd847b',
			'label' => 'Gallery Images',
			'name' => 'gallery_images',
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
