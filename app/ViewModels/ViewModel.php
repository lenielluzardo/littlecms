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
    
    /**
     * Sets the view model properties that will be shown in the UI.
     */
    public  function SetViewModelProperties($module)
    {
        $this->viewTitle = "$module Management";
        $this->viewModule = strtolower($module);
        return $this;
    }

}
