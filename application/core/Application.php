<?php

namespace application\core;

use InvalidArgumentException;
use PDO;

class Application {

    private static $db;

    /**
     * При создании экземпляра приложения оно сразу конфигурируется
     * @param array $config - конфигурация
     */
    public function __construct($config = []) {
        if (!empty($config)) {
            $this->configure($config);
        }
    }

    /**
     * Запуск приложеия
     */
    public function run() {
        Router::start();
    }

    /**
     * Возвращает подключение к Базе данных
     * @return PDO
     */
    public static function getDb() {
        return static::$db;
    }


    /**
     * Конфигурация экземпляра приложения
     * @param array $config - конфигурация
     */
    public function configure($config) {
        if (isset($config['db'])) {
            $this->registerConnection($config['db']);
        }
    }

    /**
     * Регистрирует подключение к Базе Данных
     * @param array $db - конфигурация с данными для подключения к БД
     */
    public function registerConnection($db) {
        if (!isset($db['dsn']) || empty($db['dsn'])) {
            throw new InvalidArgumentException();
        } else {
            $dsn = $db['dsn'];
        }
        $username = null;
        if (!empty($db['username'])) {
            $username = $db['username'];
        }
        $password = null;
        if (!empty($db['password'])) {
            $password = $db['password'];
        }
        $attributes = [];
        if (!empty($db['attributes'])) {
            $attributes = $db['attributes'];
        }
        static::$db = (new Connection($dsn, $username, $password, $attributes))->getConnection();
    }
}