<?php

return [
    'path'=> base_path(). '/app/Modules',
    'base_namespace' => 'App\Modules',
    'groupWithoutPrefix' => 'Pub',
    'groupMidleware' => [
      'Admin'=>[
        'web'=>['auth'],
      ]
    ],
    'modules'=>[
      'Admin'=>[
        'Users',
        'Dashboard'
      ],
      'Pub'=>[
        'Auth',
        'Mfo',
        'Mfocard',
        'Zaimy',
        'Main',
      ]
    ]
];
