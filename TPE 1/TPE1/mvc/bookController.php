<?php

require_once "bookModel.php";
require_once "bookView.php";

class bookController
{

    private $model;
    private $view;

    public function __construct()
    {
        $this->model = new bookModel();
        $this->view = new bookView();
    }
}
