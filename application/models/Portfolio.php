<?php

namespace application\models;

use application\core\Application;
use application\core\Model;

class Portfolio extends Model {

    /**
     * Возвращает имя таблицы, исходя из названия модели.
     * @return string
     */
    public static function getTableName() {
        return 'board';
    }

    public function getData() {
//        return array(
//
//            array(
//                'Year' => '2012',
//                'Site' => 'http://DunkelBeer.ru',
//                'Description' => 'Promo site dark beer Lowenbrau'
//            ),
//            array(
//                'Year' => '2012',
//                'Site' => 'http://ZopoMobile.ru',
//                'Description' => 'Russian catalog China phone Zopo'
//            )
//        );

//        try {
//            $pdo = new PDO('mysql:host=localhost;dbname=boardshop', 'boardshop', 'boardshop', ['charset' => 'utf8']);
//            $pdo = new PDO('mysql:host=localhost;dbname=boardshop', null, null, null);
//        } catch (PDOException $e) {
//            print 'Error!: ' . $e->getMessage() . '<br/>';
//            die();
//        }
//
//        $pdo->exec('INSERT INTO board SET name = \'long\'');

//        Application::$app->getDb();

        static::getTableName();
    }
}