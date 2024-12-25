<?php
return [
[
        'id' => 1,  
        'method' => 'POST',
        'path' => '/',
		'page_hidden'=>false,
		'page_title'=>'Заголовок',
		'page_title_spare'=>'Альтернативный Заголовок',
		'page_meta_keywords'=> null,
        'page_meta_description'=> null,
        'controller' => [MainApp\Controllers\IndexController::class, 'indexPost'],
        'basetemplate' => null,
		'contentfile'=>null,
        'parent_id_page' => null,
		'needauth' => false,
		'onlyforguest'=> false,
		'priority'=>0,
        'layer' => 1  
    ],
    [
        'id' => 2,
        'method' => 'GET',
        'path' => '/user/{id}',
		'page_hidden'=>false,
		'page_title'=>'Заголовок',
		'page_title_spare'=>'Альтернативный Заголовок',
		'page_meta_keywords'=> null,
        'page_meta_description'=> null,
        'controller' => [],
        'basetemplate' => null,
		'contentfile'=>null,
        'parent_id_page' => null,
		'needauth' => false,
		'onlyforguest'=> false,
		'priority'=>1,
        'layer' => 1		
    ],
    [
        'id' => 3,  
        'method' => 'GET',
        'path' => '/путьнарусском',
		'page_hidden'=>false,
		'page_title'=>'Заголовок',
		'page_title_spare'=>'Альтернативный Заголовок',
		'page_meta_keywords'=> null,
        'page_meta_description'=> null,
        'controller' => [],
        'basetemplate' => null,
		'contentfile'=>null,
        'parent_id_page' => null,
		'needauth' => false,
		'onlyforguest'=> false,
		'priority'=>2,
        'layer' => 1  
    ]    
    
];