<?php

namespace application\core;

abstract class Model {

    /**
     * Возвращает имя таблицы, исходя из названия модели.
     * @return string
     */
    public static function getTableName() {
        // TODO если таблица из 2-х слов и более
        $fullName = explode('\\', get_called_class());
        $tableName = strtolower($fullName[2]);
        return $tableName;
    }

    /**
     * Возвращает подключение к Базе данных.
     * @return \PDO
     */
    public static function getDb() {
        return Application::getInstance()->getDb();
    }

    public function findAll() {
        return $this->find(null);
    }

    public function findOne() {}

    public function find($columns) {
        $query = 'SELECT ';
        if (empty($columns)) {
            $query .= '*';
        } else {
            foreach ($columns as $column) {
                $query .= "$column, ";
            }
            $query = substr($query, 0, -2);
        }
        $query .= ' FROM ' . static::getTableName();

        $db = static::getDb();
        return $db->query($query);
    }

    /**
     * Запись в таблицу.
     * @param $values - ассоциативный массив key => value,
     * где key - название колонки в таблице, value - значение, которое необходимо записать.
     * @return bool|int
     */
    public function insert($values) {
        if (empty($values)) {
            return false;
        }

        // Make the query
        $queryFirstPart = 'INSERT INTO ' . static::getTableName() . '(';
        $querySecondPart = ' VALUES (';
        foreach ($values as $key => $value) {
            $queryFirstPart .= "$key, ";
            $querySecondPart .= "'$value', ";
        }
        $queryFirstPart = substr($queryFirstPart, 0, -2);
        $querySecondPart = substr($querySecondPart, 0, -2);
        $queryFirstPart .= ')';
        $querySecondPart .= ');';
        $query = $queryFirstPart . $querySecondPart;

        // Begin the transaction
        $transaction = static::getDb();
        $transaction->beginTransaction();
        try {
            $result = $transaction->exec($query);
            if ($result === null) {
                $transaction->rollBack();
            } else {
                $transaction->commit();
            }
            return $result;
        } catch (\PDOException $e) {
            $transaction->rollBack();
            echo 'Не удалось добавить данные ' . $e->getMessage();
            throw $e;
        }
    }

    //TODO переделать, так как условия могут быть не только такого вида
    /**
     * Обновление записи в таблице.
     * @param $newValues - ассоциативный массив key => value,
     * где key - название колонки в таблице, value - значение, которое необходимо записать.
     * @param $condition - условие обновления записи в таблице
     * @return bool|int
     * @throws \Exception
     */
    public function update($newValues, $condition) {
        if (empty($newValues) || empty($condition)) {
            return false;
        }

        // Make the query
        $query = 'UPDATE ' . static::getTableName() . ' SET ';
        foreach ($newValues as $key => $value) {
            $query .= "$key='$value', ";
        }
        $query = substr($query, 0, -2);
        $query .= ' WHERE ';
        foreach ($condition as $key => $value) {
            $query .= "$key='$value' AND ";
        }
        $query = substr($query, 0, -5);
        $query .= ';';
        var_dump($query);

        // Begin the transaction
        $transaction = static::getDb();
        $transaction->beginTransaction();
        try {
            $result = $transaction->exec($query);
            if ($result === false) {
                $transaction->rollBack();
            } else {
                $transaction->commit();
            }
            return $result;
        } catch (\Exception $e) {
            $transaction->rollBack();
            echo 'Не удалось обновить данные ' . $e->getMessage();
            throw $e;
        }
    }

    //TODO переделать, так как условия могут быть не только такого вида
    /**
     * Удаление записи из таблицы.
     * @param $condition - условие удаления записи из таблицы
     * @return bool|int
     * @throws \Exception
     */
    public function delete($condition) {
        if (empty($condition)) {
            return false;
        }

        // Make the query
        $query = 'DELETE FROM ' . static::getTableName() . ' WHERE ';
        foreach ($condition as $key => $value) {
            $query .= "$key='$value' AND ";
        }
        $query = substr($query, 0, -5);
        $query .= ';';

        // Begin the transaction
        $transaction = static::getDb();
        $transaction->beginTransaction();
        try {
            $result = $transaction->exec($query);
            if ($result === false) {
                $transaction->rollBack();
            } else {
                $transaction->commit();
            }
            return $result;
        } catch (\Exception $e) {
            $transaction->rollBack();
            echo 'Не удалось удалить данные ' . $e->getMessage();
            throw $e;
        }
    }

}