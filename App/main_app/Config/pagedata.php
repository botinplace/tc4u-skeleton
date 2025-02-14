<?php
// pagedata.php
return [
    'home'=>[
                'id'=>1,
                'baseTemplate' => null,
                'contentFile' => 'Index',        
                'title' => 'Главная страница',
                'titleSpare'=>'Альтернативный Заголовок',
                'description' => 'Описание главной страницы',
                'keywords'=> null,
                'isHidden' => false,
        		'parentId' => null,
        		'layer'=>1,
                'priority'=>0,
            ],
    'about'=>[
                'id'=>2,
                'baseTemplate' => 'base',
                'contentFile' => 'About',       
                'title' => 'О нас',
                'titleSpare'=>'Альтернативный Заголовок',
                'description' => 'Описание страницы О нас',
                'keywords'=> null,
                'isHidden' => false,
                'parentId' => null,
                'layer'=>1,
                'priority'=>0,
            ]
];
