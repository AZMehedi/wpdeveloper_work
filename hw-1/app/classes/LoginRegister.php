<?php


namespace App\Classes;


class LoginRegister
{
    public function index()
    {
        header('Location: action.php?page=login');
    }
}