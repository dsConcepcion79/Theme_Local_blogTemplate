<?php
/**
 * Fields for contact us page.
 *
 * @package standard-industries
 */

if ( function_exists( 'acf_add_local_field_group' ) ) {
	acf_add_local_field_group(array(
		'key' => 'group_59c3fde237e73',
		'title' => 'Contact Us',
		'fields' => array(
			array(
				'key' => 'field_59c3fe0d28ee7',
				'label' => 'Left Column',
				'name' => 'left_column',
				'type' => 'group',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '50',
					'class' => '',
					'id' => '',
				),
				'layout' => 'block',
				'sub_fields' => array(
					array(
						'key' => 'field_59c3fe6728ee8',
						'label' => 'Contact Form 7 ID',
						'name' => 'contact_form_7_id',
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
						'key' => 'field_59c3fe7f28ee9',
						'label' => 'Thank You Text',
						'name' => 'thank_you_text',
						'type' => 'wysiwyg',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'default_value' => '',
						'tabs' => 'all',
						'toolbar' => 'basic',
						'media_upload' => 1,
						'delay' => 0,
					),
					array(
						'key' => 'field_59c3fea828eea',
						'label' => 'Company Groups',
						'name' => 'company_groups',
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
						'button_label' => 'Add Group',
						'sub_fields' => array(
							array(
								'key' => 'field_59c41b1428eeb',
								'label' => 'Title',
								'name' => 'title',
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
								'key' => 'field_59c41b1d28eec',
								'label' => 'Companies',
								'name' => 'companies',
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
								'button_label' => '',
								'sub_fields' => array(
									array(
										'key' => 'field_59c41b4a28eed',
										'label' => 'Logo',
										'name' => 'logo',
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
										'key' => 'field_59c41b6428eee',
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
								),
							),
						),
					),
				),
			),
			array(
				'key' => 'field_59c41bf392a14',
				'label' => 'Right Column',
				'name' => 'right_column',
				'type' => 'group',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '50',
					'class' => '',
					'id' => '',
				),
				'layout' => 'block',
				'sub_fields' => array(
					array(
						'key' => 'field_59c41c0e92a15',
						'label' => 'Main Text',
						'name' => 'main_text',
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
						'rows' => '',
						'new_lines' => '',
					),
					array(
						'key' => 'field_59c41c2c92a16',
						'label' => 'Contact Text',
						'name' => 'contact_text',
						'type' => 'wysiwyg',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'default_value' => '',
						'tabs' => 'all',
						'toolbar' => 'basic',
						'media_upload' => 1,
						'delay' => 0,
					),
				),
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'page_template',
					'operator' => '==',
					'value' => 'contact-us.php',
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