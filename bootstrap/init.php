<?php
//Define constants.
define("BASE_PATH", __DIR__ . '/../');

//PSR-4 autoloading
require BASE_PATH . 'vendor/autoload.php';

//Loading enviroments vars.
$dotenv = Dotenv\Dotenv::createImmutable(BASE_PATH);
$dotenv->load();

//Include url helpers functions.
include BASE_PATH . 'helpers/url-helpers.php';
