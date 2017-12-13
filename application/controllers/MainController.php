<?php

//namespace application\controllers;

use application\core\Controller;

class MainController extends Controller {

    /**
     * Отображает главную страницу сайта
     */
    public function actionIndex() {
        $this->view->render('main/index');
    }

    /**
     *
     */
    public function actionLogin() {
        //TODO проверка
    }
}