<?php

use App\Controllers\UserModel;
use App\Test;
use Sigit\Router;

require 'vendor/autoload.php';

$test = new Test;

$UserModel = new UserModel;
echo $UserModel->home();
echo $test->getName();

$router = new Router;