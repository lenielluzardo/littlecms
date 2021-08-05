<?php

namespace App\Services\Admin;

use App\Services\Service;
use App\Models\Entry;
use App\Models\Category;
use App\Models\Module;
use App\ViewModels\Admin\ContactViewModel;
use Carbon\Carbon;

class ContactService extends Service
{
    public $viewModel;

    public function __construct(ContactViewModel $viewModel)
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
        $module = Module::where('name', $module)->first();

        if($module == null)
        {  
            //TODO: Return a message telling the user the module name was incorrect.
            //TODO: Log the module enter
            return false;
        }

        $this->viewModel->model = $module->entries()->get();

        if($this->viewModel->model == null)
        {
            //TODO: Return a message that no model where found?
            $this->viewModel->model = Collect([]);
        }

       return $this->SetViewModelProperties($module->name);
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
                $entryToSave = new Entry();
                $isNew= true;
            }
            else
            {
                $entryToSave = Entry::find($request['id']);
            }

            $entryToSave->title = $request['title'];
            $entryToSave->thumbnail = $request['thumbnail'];
            $entryToSave->content = $request['content'];
            $entryToSave->active = $request['active'] == null ? false : true;
            $entryToSave->module_id = $request['module_id'];
            $entryToSave->category_id = $request['category_id'];
            $entryToSave->user_id = auth()->user()->id;
            
            if($isNew && $entryToSave->active)
            {
                $entryToSave->published_at = Carbon::now();
            }

            $entryToSave->save();
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
