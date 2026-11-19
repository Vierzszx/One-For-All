<?php

/*
 * Aset tampilan login per mode (terang / gelap).
 * Semua file ada di public/assets/auth/ (nama file sama seperti sebelumnya).
 *  - light  = set "student-*"
 *  - dark   = set "admin-*"
 */
return [
    'themes' => [
        'light' => [
            'background'   => 'brand-bg-light.jpg',
            'union_mask'   => 'student-imgUnion.svg',
            'photo'        => 'student-imgImage2.png',
            'tile'         => 'student-imgRectangle11.svg',
            'mark'         => 'student-imgVector5.svg',
            'welcome_icon' => 'student-imgVector7.svg',
            'toggle_icon'  => 'student-imgIcon.svg',
            'floats' => [
                'edge'         => 'student-imgVector.svg',
                'small-top'    => 'student-imgVector1.svg',
                'top-right'    => 'student-imgVector2.svg',
                'right-middle' => 'student-imgVector3.svg',
                'small-left'   => 'student-imgVector4.svg',
                'top-left'     => 'student-imgVector8.svg',
            ],
        ],

        'dark' => [
            'background'   => 'brand-bg-dark.jpg',
            'union_mask'   => 'admin-imgUnion.svg',
            'photo'        => 'admin-imgImage2.png',
            'tile'         => 'admin-imgRectangle11.svg',
            'mark'         => 'admin-imgVector1.svg',
            'welcome_icon' => 'admin-imgVector2.svg',
            'toggle_icon'  => 'admin-imgIcon.svg',
            'floats' => [
                'edge'         => 'admin-imgVector.svg',
                'small-top'    => 'admin-imgVector3.svg',
                'top-right'    => 'admin-imgVector4.svg',
                'right-middle' => 'admin-imgVector5.svg',
                'small-left'   => 'admin-imgVector6.svg',
                'top-left'     => 'admin-imgVector7.svg',
            ],
        ],
    ],
];
