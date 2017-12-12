<?php

namespace application\core;

class Router {

    /**
     * Обработка url запроса и вызов соответсвующего действия
     */
    static function start() {
        // контроллер и действие по умолчанию
        $controller_name = 'Main';
        $action_name = 'index';

        $routes = explode('/', $_SERVER['REQUEST_URI']);

        // получаем имя контроллера
        if (!empty($routes[1])) {
            $controller_name = $routes[1];
        }

        // получаем имя экшена
        if (!empty($routes[2])) {
            $action_name = $routes[2];
        }

        // приводим к нижнему регистру
        $controller_name = strtolower($controller_name);
        $action_name = strtolower($action_name);

        // делаем первую букву в верхнем регистре
        $controller_name = ucfirst($controller_name);
        $action_name = ucfirst($action_name);

        // добавляем префиксы
        $model_name = $controller_name . 'Model';
        $controller_name = $controller_name . 'Controller';
        $action_name = 'action' . $action_name;

        // подцепляем файл с классом модели (файла модели может  не быть)
        $model_file = $model_name . '.php';
        $model_path = 'application/models/' . $model_file;
        if (file_exists($model_path)) {
            include $model_path;
        }

        // подцепляем файл с классом контроллера
        $controller_file = $controller_name . '.php';
        $controller_path = 'application/controllers/' . $controller_file;
        if (file_exists($controller_path)) {
            include $controller_path;
        } else {
            /*
             * правильно было бы кинуть здесь исключение,
             * но для упрощения сразу сделаем редирект на страницу 404
             */
            Router::ErrorPage404();
        }

        // создаем контроллер
        $controller = new $controller_name;
        $action = $action_name;

        if (method_exists($controller, $action)) {
            // вызываем действие контроллера
            $controller->$action();
        } else {
            // здесь также разумнее было бы кинуть исключение
            Router::ErrorPage404();
        }
    }

    /**
     * Редирект на 404 страницу
     */
    function ErrorPage404() {
        $host = 'http://'.$_SERVER['HTTP_HOST'].'/';
        header('HTTP/1.1 404 Not Found');
        header('Status: 404 Not Found');
        header('Location:'.$host.'404');
    }
}
