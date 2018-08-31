<?php 
class BoomThemeOption{
  // controller : CoursesProductTypologiessController
  function __construct(){
    // add  page
    acf_add_options_page(array(
      'page_title'  => 'Boom.ink - Theme options',
      'icon_url' => 'dashicons-editor-bold',
      'position' => 2.21,
      'menu_title'  => 'Boom - Opzioni tema',
    ));

    $this->generateFields();
  }
  private function generateFields(){
  	$socialList = array(
			'facebook-f' => 'Facebook',
			'linkedin' => 'Linkedin',
			'twitter' => 'Twitter',
			'instagram' => 'Instagram',
			'youtube' => 'Youtube',
		);
		$socialList = apply_filters('boom_theme_social_list', $socialList);

  	$fields =  array(
			array(
				'key' => 'field_5a81b3e382079',
				'label' => 'Footer',
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
				'placement' => 'left',
				'endpoint' => 0,
			),
			array(
				'key' => 'field_590zasxf87cdsv9aksdfjh',
				'label' => 'Pagina Cookie',
				'name' => 'booom_cookie_page',
				'type' => 'post_object',
				'instructions' => '',
				'required' => 1,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '75',
					'class' => '',
					'id' => '',
				),
				'post_type' => array(
					0 => 'page',
				),
				'taxonomy' => array(
				),
				'allow_null' => 0,
				'multiple' => 0,
				'return_format' => 'id',
				'ui' => 1,
			),
			array(
				'key' => 'field_5a81b4098207a',
				'label' => 'Social',
				'name' => 'boom_theme_social',
				'type' => 'repeater',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'collapsed' => 'field_5a81b4268207b',
				'min' => 0,
				'max' => 0,
				'layout' => 'table',
				'button_label' => 'Aggiungi Social',
				'sub_fields' => array(
					array(
						'key' => 'field_5a81b4268207b',
						'label' => 'Social',
						'name' => 'social_name',
						'type' => 'select',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '40',
							'class' => '',
							'id' => '',
						),
						'choices' => $socialList,
						'default_value' => array(
						),
						'allow_null' => 0,
						'multiple' => 0,
						'ui' => 1,
						'ajax' => 0,
						'return_format' => 'value',
						'placeholder' => '',
					),
					array(
						'key' => 'field_5a81b69f8207c',
						'label' => 'Url',
						'name' => 'url',
						'type' => 'text',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '60',
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
				'key' => 'field_5a81b6bc8207d',
				'label' => 'Footer text',
				'name' => 'boom_footer_text',
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
		);

		$fields = apply_filters('boom_theme_fields', $fields);
  	if( function_exists('acf_add_local_field_group') ):

			acf_add_local_field_group(array(
				'key' => 'group_5a81b3d9b53ab',
				'title' => 'Opzioni per il tema',
				'fields' => $fields,
				'location' => array(
					array(
						array(
							'param' => 'options_page',
							'operator' => '==',
							'value' => 'acf-options-boom-opzioni-tema',
						),
					),
				),
				'menu_order' => 0,
				'position' => 'normal',
				'style' => 'default',
				'label_placement' => 'top',
				'instruction_placement' => 'label',
				'hide_on_screen' => '',
				'active' => 1,
				'description' => '',
			));

		endif;
  }
}