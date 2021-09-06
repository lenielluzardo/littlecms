<?php

namespace App\Services\Admin;

use App\Services\Service;
use App\Models\Entry;
use App\Models\Category;
use App\Models\Module;
use App\ViewModels\Admin\HomeViewModel;
use Carbon\Carbon;

class ModuleService extends Service
{
    public $viewModel;

    public function __construct(HomeViewModel $viewModel)
    {
        $this->viewModel = $viewModel;
    }

    /**
    *  Gets all the model that are shown in the module index page. 
    *  @param string $moduleName
    */
    public function GetIndexModel($module)
    {
        // dd($module);
        $modules = Module::all();

        if($modules == null)
        {  
            //TODO: Return a message telling the user the module name was incorrect.
            //TODO: Log the module enter
            return false;
        }

        $this->viewModel->model = $modules;

        if($this->viewModel->model == null)
        {
            //TODO: Return a message that no model where found?
            $this->viewModel->model = Collect([]);
        }

       return $this->SetViewModelProperties('Home');
    }

    /**
    * Sets the view model based on the model to be updated.
    * @param int $modelId
    * @param string $moduleName
    */
    public function GetEditModel($id, $module)
    {
        $entry = Entry::find($id);

        if($entry == null)
        {
            $this->viewModel->success = false;
            $this->viewModel->error = "The model was not found in the records.";
        }

        $this->viewModel->model = $entry;
        $this->viewModel->entriesCategories = Category::all();
        $this->viewModel->entriesModules = Module::all();

        return $this->SetViewModelProperties($module);
    }
    
    /**
    * Create a new model, passed to the view model for later saving.
    * @param int $modelId
    * @param string $moduleName
    */
    public function GetCreateModel($module)
    {
        $this->viewModel->model = new Entry();
        $this->viewModel->entriesCategories = Category::all();
        $this->viewModel->entriesModules = Module::all();

        return $this->SetViewModelProperties($module);
    }
    
    /**
     *  Create new model if does not exist in the database or update the model the model if exists in the database. 
     *  @param int $modelId
     *  @param string $moduleName
     */
    public function SaveModel($request, $module)
    {
        $isNew = false;
        try
        {
            if($request['id'] == null)
            {
                $this->viewModel->succes = false;
                $this->viewModel->error = "There was an issue with the values on the sent request";
                $this->viewModel->model = Collect([]);
            }
            else
            {
                $moduleToSave = Module::find($request['id']);
                $moduleToSave->active = $request['active'] == null ? false : true;
                $moduleToSave->save();

                $this->viewModel->model = $moduleToSave;
            }
        }
        catch(\Exception $ex)
        {
            $this->ProccessException($ex);
        }
        finally
        {
            return $this->SetViewModelProperties($module);
        }
    }
    
    /**
     *  Deletes the model from the databse. 
     *  @param int $modelId
     *  @param string $moduleName
     */
    public function DeleteModel($id, $module)
    {
               
    }

    // ************ PRIVATE METHODS *****************

     /**
     *  Sets the exception message to the is succces and error message properties of the view model. 
     */
    private function ProccessException($ex)
    {
        $this->viewModel->success = false;
        $this->viewModel->error = $ex;
    }
    /**
     * Sets the view model properties that will be shown in the UI.
     */
    private function SetViewModelProperties($module)
    {
        $this->viewModel->viewTitle = "$module Management";
        $this->viewModel->viewModule = strtolower($module);
        return $this->viewModel;
    }
}
