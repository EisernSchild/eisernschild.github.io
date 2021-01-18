<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'themes://grav-coder/grav-coder.yaml',
    'modified' => 1610984146,
    'data' => [
        'enabled' => true,
        'dropdown' => [
            'enabled' => true
        ],
        'navbar' => [
            'title' => 'Eisern Schild Homepage',
            'auth_link' => [
                'enabled' => false,
                'login_slug' => 'login',
                'login_label' => 'Login'
            ]
        ],
        'footer' => [
            'copyright' => 'Denis Reischl'
        ],
        'post' => [
            'navigation' => true,
            'taxonomy' => true
        ],
        'pagination' => [
            'count' => 10
        ]
    ]
];
