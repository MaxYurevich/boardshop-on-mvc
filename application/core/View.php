<?php

namespace application\core;

class View {

    // Шаблон страниц по умолчанию
    public $templateView = 'main';

    /**
     * Отображает страницу в шаблоне
     * @param $contentView - view, которое необходимо отобразить
     * @param null $data
     */
    function render($contentView, $data = null) {

        if (is_array($data)) {
            // TODO Преобразуем элементы массива в переменные
            extract($data);
        }

        include 'application/views/layouts/' . $this->templateView . '.php';
    }
}