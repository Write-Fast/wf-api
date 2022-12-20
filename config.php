<?php

$settings = [
    'host' => 'localhost',
    'port' => '3306',
    'name' => 'wf3',
    'username' => 'root',
    'password' => '',
    'charset' => 'utf8'
    ];

$pdo = new PDO(
    sprintf(
    'mysql:host=%s;dbname=%s;port=%s;charset=%s',
    $settings['host'],
    $settings['name'],
    $settings['port'],
    $settings['charset']
    ),
    $settings['username'],
    $settings['password']
);

?>