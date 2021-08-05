<?php

namespace App\ViewModels;

class ViewModel
{
    public $viewTitle;
    public $viewPath;
    public $viewModule;
    public $model;
    public $success = true;
    public $errors = "";

    public function __construct(){}
}
