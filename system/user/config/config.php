<?php

// ExpressionEngine Config Items
// Find more configs and overrides at
// https://docs.expressionengine.com/latest/general/system_configuration_overrides.html

$config['app_version'] = '5.2.2';
$config['encryption_key'] = 'a09c3d8982e1099708cf2189aef328f11b4452c2';
$config['session_crypt_key'] = '661ca33a471635e2858b14a18a80840a8131e14d';
$config['database'] = array(
    'expressionengine' => array(
        'hostname' => 'db',
        'database' => 'site',
        'username' => 'site',
        'password' => 'secret',
        'dbprefix' => 'exp_',
        'char_set' => 'utf8mb4',
        'dbcollat' => 'utf8mb4_unicode_ci',
        'port'     => ''
    ),
);
