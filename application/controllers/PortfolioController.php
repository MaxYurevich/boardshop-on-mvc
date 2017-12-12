<?php

//namespace application\controllers;

use application\core\Controller;
use application\core\View;
use application\models\Portfolio;

class PortfolioController extends Controller {

    public function actionIndex() {
        $model = new Portfolio();
        $data = $model->findAll();
//        $data = $this->model->find(['id', 'name']);
        $this->view->render('portfolio/index', $data);
    }

    public function actionTest() {
//        $this->model->getData();
//        $this->model->insert(['id' => 29,'name' => 'das', 'img' => 'img']);
//        $this->model->delete(['id' => 25, 'name' => 'dasda']);
//        $this->model->update(['name' => 'long', 'img' => 'jn'], ['name' => 'board', 'id' => 13]);
        $this->view->render('portfolio/test');
    }
}