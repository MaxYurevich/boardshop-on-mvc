<?php

namespace application\models;

use application\core\Model;

class Topic extends Model {

    private $id;
    private $name;
    private $author_id;

    /**
     * Возвращает имя таблицы
     * @return string
     */
    public static function getTableName() {
        return 'topic';
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
    public function getName() {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name) {
        $this->name = $name;
    }

    /**
     * @return int
     */
    public function getAuthorId() {
        return $this->author_id;
    }

    /**
     * @param int $author_id
     */
    public function setAuthorId($author_id) {
        $this->author_id = $author_id;
    }


}