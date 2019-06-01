<?php

return [
    'db.dsn' => $_ENV['DB_DSN'],
    'db.username' => $_ENV['DB_USERNAME'],
    'db.password' => $_ENV['DB_PASSWORD'],

    'debug.enabled' => $_ENV['DEBUG'],
    'debug.allowedIps' => $_ENV['DEBUG_ALLOWED_IPS'],

    //app
    'app.name' => 'GiveNTake',

//    'logo' => '/img/logo.png',
//    'mailer' => 'mailjet',
];
