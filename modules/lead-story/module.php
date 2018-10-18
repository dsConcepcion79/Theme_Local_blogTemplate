<?php
/**
 * Lead Story module.
 *
 * @package standard-industries
 */

use Rain\Modules;

$modules = Modules::get_instance();

$modules->add_module('Lead Story', 'lead-story', 'page_modules',
	array(
		array(
			'key' => 'field_598094uj9400ea24a',
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
			'key' => 'field_59add478c06e1',
			'label' => 'Tag line',
			'name' => 'tag_line',
			'type' => 'text',
			'instructions' => 'Optional',
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
			'key' => 'field_59079465hea24b',
			'label' => 'Heading',
			'name' => 'heading',
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
			'key' => 'field_5980847504iea24c',
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
			'clone' => array(
				0 => 'component_button_field_button_type',
				1 => 'component_button_field_button_internal_url',
				2 => 'component_button_field_button_external_url',
			),
			'prefix_label' => 0,
			'prefix_name' => 0,
			'display' => 'group',
			'layout' => 'block',
			'key' => 'field_59874604367cf',
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
		array(
			'key' => 'field_59fohu944c',
			'label' => 'Read-more Text',
			'name' => 'read-more',
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
			'rows' => 2,
			'new_lines' => '',
		),
	)
);
