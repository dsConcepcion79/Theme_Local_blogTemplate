<?php
/**
 * Featured Stories module.
 *
 * @package standard-industries
 */

use Rain\Modules;

$modules = Modules::get_instance();

$modules->add_module('Featured Stories', 'featured-stories', 'page_modules',
	array(
		array(
			'key' => 'field_599e45583b6ac43c',
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
			'key' => 'field_59a5e61895083',
			'label' => 'Featured Stories',
			'name' => 'featured_stories',
			'type' => 'relationship',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'post_type' => array(
				0 => 'post',
			),
			'taxonomy' => array(),
			'filters' => array(
				0 => 'search',
			),
			'elements' => array(
				0 => 'featured_image',
			),
			'min' => '',
			'max' => 3,
			'return_format' => 'id',
		),
	)
);
