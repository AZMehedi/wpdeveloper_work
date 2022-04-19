<?php

require_once "vendor/autoload.php";

use App\Classes\LoginRegister;

$home = new LoginRegister();
$home->index();