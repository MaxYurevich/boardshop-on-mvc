<?php

use application\core\Application;

ini_set('display_errors', 1);

spl_autoload_register();

$config = require(__DIR__ . '/config/config.php');

(new Application($config))->run();