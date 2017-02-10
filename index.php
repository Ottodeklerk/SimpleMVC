<?php
/**
 * Created by PhpStorm.
 * User: ottodeklerk
 * Date: 10-02-17
 * Time: 10:25
 */
$loader = require __DIR__ . '/vendor/autoload.php';
$director = new \mvcsystem\RequestDirector();
$director->httpRequest();