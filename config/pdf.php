<?php

return [
    'mode'                 => '',
    'format'               => 'A4',
    'default_font_size'    => '25',
    'default_font'         => 'Arial',
    'margin_left'          => -5,
    'margin_right'         => -5,
    'margin_top'           => -2,
    'margin_bottom'        => -10,
    'margin_header'        => -5,
    'margin_footer'        => -5,

    'orientation'          => 'P',
    'title'                => 'Althiga',
    'author'               => 'Althiga',
    'watermark'            => '',
    'show_watermark'       => false,
    'watermark_font'       => 'sans-serif',
    'display_mode'         => 'fullpage',
    'watermark_text_alpha' => 0.1,
    'custom_font_dir' => public_path('pdf/fonts/'), // don't forget the trailing slash!
    'custom_font_data' => [
        'cairo' => [
            'R'  => 'Cairo-Regular.ttf',    // regular font
            'B'  => 'Cairo-Bold.ttf',       // optional: bold font
            'I'  => 'Cairo-Italic.ttf',     // optional: italic font
            'BI' => 'Cairo-BoldItalic.ttf', // optional: bold-italic font,
            'useOTL' => 0xFF,
            'useKashida' => 75,
        ]
        // ...add as many as you want.
    ],
    'auto_language_detection'  => true,
    'temp_dir'               => '',
];
