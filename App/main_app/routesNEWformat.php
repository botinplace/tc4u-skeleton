<?php 
return [
    'home' => [        
        'path' => '/',
        'methods' => [
            'GET' => [
                'controller' => [MainApp\Controllers\IndexController::class, 'index'],
                'needauth' => false,
                'onlyforguest' => true,
            ],
            'POST' => [
                'controller' => [MainApp\Controllers\IndexController::class, 'postData'],
                'needauth' => true,
                'onlyforguest' => false,
            ],
        ],
    ],
    'about' => [
        'path' => '/about',
        'methods' => [
            'GET' => [
                'controller' => [MainApp\Controllers\AboutController::class, 'show'],
                'needauth' => false,
                'onlyforguest' => true,
            ],
        ],
    ],
    'contact' => [
        'path' => '/contact2',
        'methods' => [
            'GET' => [
                'controller' => [MainApp\Controllers\ContactController::class, 'show'],
                'needauth' => false,
                'onlyforguest' => true,
            ],
            'POST' => [
                'controller' => [MainApp\Controllers\ContactController::class, 'send'],
                'needauth' => false,
                'onlyforguest' => true,
            ],
        ],
    ],
    'profile' => [
        'path' => '/profile',
        'methods' => [
            'GET' => [
                'controller' => [MainApp\Controllers\ProfileController::class, 'view'],
                'needauth' => true,
                'onlyforguest' => false,
            ],
            'POST' => [
                'controller' => [MainApp\Controllers\ProfileController::class, 'update'],
                'needauth' => true,
                'onlyforguest' => false,
            ],
        ],
    ],
    'admin' => [
        'path' => '/admin',
        'methods' => [
            'GET' => [
                'controller' => [MainApp\Controllers\AdminController::class, 'dashboard'],
                'needauth' => true,
                'onlyforguest' => false,
            ],
            'POST' => [
                'controller' => [MainApp\Controllers\AdminController::class, 'manage'],
                'needauth' => true,
                'onlyforguest' => false,
            ],
        ],
    ],
    'login' => [
        'path' => '/login',
        'methods' => [
            'GET' => [
                'controller' => [MainApp\Controllers\AuthController::class, 'showLoginForm'],
                'needauth' => false,
                'onlyforguest' => true,
            ],
            'POST' => [
                'controller' => [MainApp\Controllers\AuthController::class, 'login'],
                'needauth' => false,
                'onlyforguest' => true,
            ],
        ],
    ],
    'logout' => [
        'path' => '/logout',
        'methods' => [
            'POST' => [
                'controller' => [MainApp\Controllers\AuthController::class, 'logout'],
                'needauth' => true,
                'onlyforguest' => false,
            ],
        ],
    ],
];
