<?php

use application\core\Application;

ini_set('display_errors', 1);

spl_autoload_register();

// Загрузка конфига
$config = require(__DIR__ . '/config/config.php');

// Конфигурирование экземпляра приложения
Application::getInstance()->configure($config);
// Запуск приложения
Application::getInstance()->run();