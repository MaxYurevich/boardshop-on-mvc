<?php

namespace application\core;

abstract class Controller {

    protected $view;

    /**
     * При создании конструктора сразу создается объект View
     */
    function __construct() {
        $this->view = new View();
    }
}