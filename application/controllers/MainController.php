<?php

//namespace application\controllers;

use application\core\Controller;

class MainController extends Controller {

    /**
     * Отображает главную страницу сайта
     */
    function actionIndex() {
        $this->view->render('main/index', 'main');
    }
}