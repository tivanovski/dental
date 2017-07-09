<?php
$db = require(__DIR__ . '/db.php');
$dbopts = parse_url(getenv('DATABASE_URL'));
// test database! Important not to run tests on production or development databases
//$db['dsn'] = 'mysql:host=localhost;dbname=yii2_basic_tests';
$db['dsn'] = 'pgsql:host='.$dbopts["host"].':'.$dbopts["port"].';dbname='.ltrim($dbopts["path"],'/');

return $db;