<?php

return 
[
    'driver' => env('MAIL_DRIVER', 'smtp'),
    'host' => env('MAIL_HOST', 'smtp.mailtrap.io'),
    'port' => env('MAIL_PORT', 2525),
    'from' => 
    [
        'address' => env('MAIL_FROM_ADDRESS', 'hello@example.com'),
        'name' => env('MAIL_FROM_NAME', 'Example'),
    ],
    'encryption' => env('MAIL_ENCRYPTION', 'null'),
    'username' => env('f7ea208f168fa4'),
    'password' => env('2a92c931af5667'),
    'sendmail' => '/usr/sbin/sendmail -bs',
    'markdown' => 
    [
        'theme' => 'default',
        'paths' => 
        [
            resource_path('views/vendor/mail'),
        ],
    ],
];

?>