<?php

namespace App\Services\Admin;

use App\Services\Service;
use App\Models\User;
use App\Models\UserField;
use App\Models\Module;
use App\ViewModels\Admin\AboutViewModel;
use App\Mappers\UserMapper;

class AboutService extends Service
{
    public $viewModel;
    private $userModel;

    public function __construct(AboutViewModel $viewModel, User $model)
    {
        $this->viewModel = $viewModel;
        $this->userModel = $model;
    }

    /**
    *  Gets all the model that are shown in the module index page. 
    *  @param string $moduleName
    */
    public function GetIndexModel($module)
    {
        $entries = Module::where('name', $module)->first()->entries;

        $this->viewModel->model = $entries;                               
        
        return $this->viewModel->SetViewModelProperties('About');
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
                $modelToSave = new UserField();
                $isNew= true;
            }
            else
            {
                $modelToSave = UserField::find($request['id']);
            }

            $modelToSave->thumbnail = $request['thumbnail'];
            $modelToSave->description = $request['description'];
            $modelToSave->experience = $request['experience'];
            $modelToSave->studies = $request['studies'];
            $modelToSave->stack = $request['stack'];
            $modelToSave->interests = $request['interests'];
            $modelToSave->hobbies = $request['hobbies'];
            
            $modelToSave->save();
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
        try
        {
            $entry = Entry::find($id);
            $entry->delete();
        }
        catch(\Exception $ex)
        {
            $this->ProccessException($ex);
        }
        finally
        {
            $this->SetViewModelProperties($module);
            return $this->viewModel;
        }
        
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
