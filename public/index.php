<?php

use App\Wcs\Hello;

// echo __DIR__ . "/vendor/autoload.php";

require_once __DIR__ . "/../vendor/autoload.php";;
//Because in public ^^^^^ /..

$hello = new Hello;
$hello->talk();