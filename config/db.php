<?php
$dbopts = parse_url(getenv('DATABASE_URL'));

return [
    'class' => 'yii\db\Connection',
    'dsn' => 'pgsql:host='.$dbopts["host"].';dbname='.ltrim($dbopts["path"],'/'),
    'username' =>  $dbopts["user"],
    'password' =>  $dbopts["pass"],
    'charset' => 'utf8',
];
