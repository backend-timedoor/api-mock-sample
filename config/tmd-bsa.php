<?php

return [
    'env_local_only' => env('TMD_BSA_ENV_LOCAL_ONLY', true),
    'default' => [
        'username' => env('TMD_BSA_USERNAME', 'admin'),
        'password' => env('TMD_BSA_PASSWORD', 'admin'),
    ],
    // 'admin' => [
    //     'username' => 'newusername',
    //     'password' => 'newpassword',
    // ],
];