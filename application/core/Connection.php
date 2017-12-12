<?php

namespace application\core;

use PDO;
use PDOException;

class Connection {

    private $pdo;
    private $dsn;
    private $username;
    private $password;
    private $attributes;

    public function __construct($dsn, $username = null, $password = null, $attributes = []) {
        $this->dsn = $dsn;
        $this->username = $username;
        $this->password = $password;
        $this->attributes = $attributes;
    }

    /**
     * @return string
     */
    public function getDsn() {
        return $this->dsn;
    }

    /**
     * @param string $dsn
     */
    public function setDsn($dsn) {
        $this->dsn = $dsn;
    }

    /**
     * @return string
     */
    public function getUsername() {
        return $this->username;
    }

    /**
     * @param string $username
     */
    public function setUsername($username) {
        $this->username = $username;
    }

    /**
     * @return string
     */
    public function getPassword() {
        return $this->password;
    }

    /**
     * @param string $password
     */
    public function setPassword($password) {
        $this->password = $password;
    }

    /**
     * @return array
     */
    public function getAttributes() {
        return $this->attributes;
    }

    /**
     * @param array $attributes
     */
    public function setAttributes($attributes) {
        $this->attributes = $attributes;
    }

    /**
     * Возвращает подключение к Базе данных
     * @return PDO
     */
    public function getConnection() {
        if (empty($this->pdo)) {
            $this->createConnection();
        }
        return $this->pdo;
    }

    /**
     * Создает подключение к Базе данных
     */
    public function createConnection() {
        try {
            $this->pdo = new PDO($this->getDsn(), $this->getUsername(), $this->getPassword(), $this->getAttributes());
        } catch (PDOException $e) {
            die('Connection error!: ' . $e->getMessage() . '<br/>');
        }
    }

}