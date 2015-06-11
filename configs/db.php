<?php
putenv('SAE_MYSQL_HOST_M','127.0.0.1');
putenv('SAE_MYSQL_PORT','3306');
putenv('SAE_MYSQL_DB','wechatcoder');
putenv('SAE_MYSQL_USER','root');
putenv('SAE_MYSQL_PASS','');

return array(
    'wechat' => array(
        'master' => array(
            'host' => getenv('SAE_MYSQL_HOST_M'),
            'port' => getenv('SAE_MYSQL_PORT'),
            'dbname' => getenv('SAE_MYSQL_DB'),
            'username' => getenv('SAE_MYSQL_USER'),
            'password' => getenv('SAE_MYSQL_PASS')
        ),
        'slave' => array(
            array(
                'host' => getenv('SAE_MYSQL_HOST_M'),
                'port' => getenv('SAE_MYSQL_PORT'),
                'dbname' => getenv('SAE_MYSQL_DB'),
                'username' => getenv('SAE_MYSQL_USER'),
                'password' => getenv('SAE_MYSQL_PASS')
            )
        )
    ),
);
