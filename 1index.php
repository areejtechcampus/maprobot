<?php
$connection = [
    'host' => 'localhost'
    'user' => 'root'
    'password' => ''
    'databasename' => 'maprobot'
];
$mysql = new mysqli($connection['host'],$connection['user'],$connection['password'],$connection['databasename']);
$mysql->query(" insert into stop  values (1)')")
$mysql->query(" insert into forward values (2)')")
$mysql->query(" insert into left vaules (3)')")
$mysql->query(" insert into right values (4)')")
$mysql->query(" insert into backward values (5)')")

    
ini_set('display_errors;1);
ini_set('display_startup_errors;1);
error_reporting(E_ALL);
    
?>