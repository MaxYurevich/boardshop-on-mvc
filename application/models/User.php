<?php

namespace application\models;

use application\core\Model;

class User extends Model{

    const ROLE_USER = 1;
    const ROLE_ADMINISTRATOR = 2;

    private $id;
    private $username;
    private $password;
    private $role;

    /**
     * Return roles as values
     * @return array
     */
    public static function roles() {
        return [
            self::ROLE_USER,
            self::ROLE_ADMINISTRATOR,
        ];
    }

    /**
     * Return roles as value => rolename
     * @return array
     */
    public static function rolesNames() {
        return [
            self::ROLE_ADMINISTRATOR => "Администратор",
            self::ROLE_USER => "Пользователь",
        ];
    }

    /**
     * Возвращает имя таблицы
     * @return string
     */
    public static function getTableName() {
        return 'user';
    }

    /**
     * @return int
     */
    public function getId() {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id) {
        $this->id = $id;
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
     * @return int
     */
    public function getRole() {
        return $this->role;
    }

    /**
     * @param int $role
     */
    public function setRole($role) {
        $this->role = $role;
    }


}