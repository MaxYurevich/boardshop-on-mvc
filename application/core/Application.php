<?php

namespace application\core;

use InvalidArgumentException;
use PDO;

/**
 * Singleton Class Application
 * @package application\core
 */
class Application {

    private static $instance = null;

    private $db;

    private $homeUrl;

    /**
     * Приватный конструктор
     */
    private function __construct() {
    }

    /**
     * Ограничивает клонирование объекта
     */
    protected function __clone() {
    }

    /**
     * Возвращает единственный экземпляр Application
     * @return Application
     */
    public static function getInstance() {
        if (is_null(self::$instance)) {
            self::$instance = new self();
        }
        return self::$instance;
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
    public function getDb() {
        return $this->db;
    }


    /**
     * Конфигурация экземпляра приложения
     * @param array $config - конфигурация
     */
    public function configure($config = []) {
        if (!empty($config)) {
            if (isset($config['db'])) {
                $this->registerConnection($config['db']);
            }
            if (isset($config['homeUrl'])) {
                $this->setHomeUrl($config['homeUrl']);
            }
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
        $this->db = (new Connection($dsn, $username, $password, $attributes))->getConnection();
    }

    /**
     * Возвращает путь к домашней странице, по умолчанию равен '/'
     * @return string домашняя страница приложения
     */
    public function getHomeUrl() {
        if ($this->homeUrl === null) {
            $this->homeUrl = '/';
        }
        return $this->homeUrl;
    }

    /**
     * Устанавливает путь к домашней странице приложения
     * @param string $value
     */
    public function setHomeUrl($value) {
        $this->homeUrl = $value;
    }
}