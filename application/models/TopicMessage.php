<?php

namespace application\models;


use application\core\Model;

class TopicMessage extends Model {

    private $id;
    private $topic_message;
    private $author_id;
    private $date;
    private $topic_id;

    /**
     * Возвращает имя таблицы
     * @return string
     */
    public static function getTableName() {
        return 'topic_message';
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
    public function getTopicMessage() {
        return $this->topic_message;
    }

    /**
     * @param string $topic_message
     */
    public function setTopicMessage($topic_message) {
        $this->topic_message = $topic_message;
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

    /**
     * @return date
     */
    public function getDate() {
        return $this->date;
    }

    /**
     * @param date $date
     */
    public function setDate($date) {
        $this->date = $date;
    }

    /**
     * @return int
     */
    public function getTopicId() {
        return $this->topic_id;
    }

    /**
     * @param int $topic_id
     */
    public function setTopicId($topic_id) {
        $this->topic_id = $topic_id;
    }



}