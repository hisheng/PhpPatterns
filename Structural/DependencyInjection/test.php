<?php
/**
 * Created by PhpStorm.
 * User: work
 * Date: 2017/4/10
 * Time: 19:35
 */
require __DIR__.'/../../vendor/autoload.php';

use Pattern\Structural\DependencyInjection\DatabaseConfiguration;
use Pattern\Structural\DependencyInjection\DatabaseConnection;

$config = new DatabaseConfiguration('localhost', 3306, 'hisheng', '1234');
$connection = new DatabaseConnection($config);
echo $connection->getDsn();