

<?php

function my_theme_setup() {
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'my_theme_setup');


function custom_post_types() {
	
    register_post_type('research_methodology',
        array(
            'labels' => array(
                'name' => __('Методики дослідження'),
                'singular_name' => __('Методика дослідження')
            ),
            'public' => true,
            'has_archive' => true,
            'supports' => array('title', 'editor', 'thumbnail', 'custom-fields'),
        )
    );

    register_post_type('public_reports',
        array(
            'labels' => array(
                'name' => __('Публічні звіти'),
                'singular_name' => __('Публічний звіт')
            ),
            'public' => true,
            'has_archive' => true,
            'supports' => array('title', 'editor', 'thumbnail', 'custom-fields'),
        )
    );

    register_post_type('press_publications',
        array(
            'labels' => array(
                'name' => __('Публікації в пресі'),
                'singular_name' => __('Публікація в пресі')
            ),
            'public' => true,
            'has_archive' => true,
            'supports' => array('title', 'editor', 'custom-fields'),
        )
    );
	
	register_post_type('sci_publications',
        array(
            'labels' => array(
                'name' => __('Наукові публікації'),
                'singular_name' => __('Наукова публікація')
            ),
            'public' => true,
            'has_archive' => true,
            'supports' => array('title', 'editor', 'custom-fields'),
        )
    );
}

add_action('init', 'custom_post_types');


function acf_add_custom_fields() {
    if (function_exists('acf_add_local_field_group')) {
		
        acf_add_local_field_group(array(
            'key' => 'group_research_methodology_fields',
            'title' => 'Поля Методики дослідження',
            'fields' => array(
                array(
                    'key' => 'field_date_research',
                    'label' => 'Дата',
                    'name' => 'date',
                    'type' => 'date_picker',
                    'instructions' => 'Оберіть дату публікації.',
                    'required' => true,
                    'display_format' => 'dd.mm.yyyy',
                    'return_format' => 'Ymd',
                ),
                array(
                    'key' => 'field_authors_research',
                    'label' => 'Автори',
                    'name' => 'authors',
                    'type' => 'text',
                    'instructions' => 'Вкажіть авторів статті.',
                    'required' => true,
                ),
            ),
            'location' => array(
                array(
                    array(
                        'param' => 'post_type',
                        'operator' => '==',
                        'value' => 'research_methodology',
                    ),
                ),
            ),
        ));
		
		acf_add_local_field_group(array(
            'key' => 'group_public_reports_fields',
            'title' => 'Поля Публічні звіти',
            'fields' => array(
                array(
                    'key' => 'field_date_public_reports',
                    'label' => 'Дата',
                    'name' => 'date',
                    'type' => 'date_picker',
                    'instructions' => 'Оберіть дату публікації.',
                    'required' => true,
                    'display_format' => 'dd.mm.yyyy',
                    'return_format' => 'Ymd',
                ),
                array(
                    'key' => 'field_authors_public_reports',
                    'label' => 'Автори',
                    'name' => 'authors',
                    'type' => 'text',
                    'instructions' => 'Вкажіть авторів звіту.',
                    'required' => true,
                ),
            ),
            'location' => array(
                array(
                    array(
                        'param' => 'post_type',
                        'operator' => '==',
                        'value' => 'public_reports',
                    ),
                ),
            ),
        ));
		
		acf_add_local_field_group(array(
            'key' => 'group_press_publications_fields',
            'title' => 'Поля - Публікації в пресі',
            'fields' => array(
                array(
                    'key' => 'field_link_press_publications',
                    'label' => 'Посилання',
                    'name' => 'link',
                    'type' => 'url',
                    'instructions' => 'Введіть посилання публікації.',
                    'required' => true,
                ),
            ),
            'location' => array(
                array(
                    array(
                        'param' => 'post_type',
                        'operator' => '==',
                        'value' => 'press_publications',
                    ),
                ),
            ),
        ));
		
				acf_add_local_field_group(array(
            'key' => 'group_scientific_publications_fields',
            'title' => 'Поля - Наукові публікацій',
            'fields' => array(
                array(
                    'key' => 'field_link_scientific_publications',
                    'label' => 'Посилання',
                    'name' => 'link',
                    'type' => 'url',
                    'instructions' => 'Введіть посилання публікації.',
                    'required' => true,
                ),
            ),
            'location' => array(
                array(
                    array(
                        'param' => 'post_type',
                        'operator' => '==',
                        'value' => 'sci_publications',
                    ),
                ),
            ),
        ));
        
    }
}

add_action('acf/init', 'acf_add_custom_fields');
