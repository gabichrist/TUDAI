<?php

class AuthHelper
{
    public function __construct()
    {
    }


    public function checkLoggedIn()
    {
        if (!isset($_SESSION))
            session_start();
        if (!isset($_SESSION['ID_USER'])) {
            header('Location: ' . BASE_URL . 'admin');
            die();
        }
    }
}
