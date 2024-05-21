<?php
function nemoest_add_stylesheet() {
    wp_enqueue_style('nemoest-stylesheet', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'nemoest_add_stylesheet');

/*Not necessary:
function nemoest_add_fonts() {
    wp_register_font_collection('nemoest-fonts', [
        'name' => __('Nemoest Fonts', 'nemoest'),
        'description' => __('Fonts used in Nemoest Theme.', 'nemoest'),
        'font_families' => [
            [
                'font_family_settings' => [
                    'name' => __("Neue Regrade", 'nemoest'),
                    'slug' => 'neue-regrade',
                    'fontFamily' => 'Neue Regrade, sans-serif',
                    'fontFace' => [
                        [
                            'src' => get_theme_file_uri('assets/fonts/neue-regrade/neue-regrade-variable.ttf'),
                            'fontWeight' => '300 800',
                            'fontStyle' => 'normal italic',
                            'fontFamily' => 'Neue Regrade'
                        ]
                    ],
                    'categories' => ['nemoest', 'sans-serif']
                ]
            ]
        ],
        'categories' => [
            [
                'name' => __('Nemoest', 'nemoest'),
                'slug' => 'nemoest'
            ],
            [
                'name' => __('Sans-serif', 'nemoest'),
                'slug' => 'sans-serif'
            ]
        ]
    ]);
}
add_action('init', 'nemoest_add_fonts');*/
