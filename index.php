<?php

use App\Controllers\User;
use App\Test;
use Sigit\Router;

require 'vendor/autoload.php';

$test = new Test;

$User = new User;
echo $User->home();
echo $test->getName();

$router = new Router;