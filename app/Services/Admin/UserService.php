<?php

namespace App\Services\Admin;

use App\Models\User;
use App\ViewModels\Admin\UserViewModel;

class UserService
{
    public $viewModel;

    public function __construct(UserViewModel $viewModel)
    {
        $this->viewModel = $viewModel;
    }

    public function GetIndexModel($module)
    {
        $this->viewModel->model = User::all();

        return $this->SetViewModelProperties($module);
    }

public function GetEditModel($id, $module)
{
    $entry = User::find($id);

        if($entry == null)
        {
            $this->viewModel->success = false;
            $this->viewModel->error = "The model was not found in the records.";
        }

        $this->viewModel->model = $entry;
        // $this->viewModel->entriesCategories = Category::all();
        // $this->viewModel->entriesModules = Module::all();

        return $this->SetViewModelProperties($module);

}
public function GetCreateModel($module)
{
    $this->viewModel->model = new User();
        // $this->viewModel->entriesCategories = Category::all();
        // $this->viewModel->entriesModules = Module::all();

        return $this->SetViewModelProperties($module);
    
}

public function DeleteModel($id, $module)
{
    try
    {
        $entry = User::find($id);
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
    public function SaveModel($request, $module)
    {
        try
        {
            $userToSave = null;

            if($request['id'] == null)
            {
                // dd($request->input());
                $userToSave = new User();
            }
            else
            {
                dd($request->input());

                $userToSave = User::find($request['id']);
            }
            // dd($request->input());
            $userToSave->name = $request['name'];
            $userToSave->username =$request['username'];
            $userToSave->email = $request['email'];
            $userToSave->secondary_email = $request['secondary_email'];
            $userToSave->password = $request['password'];
            $userToSave->description =$request['description'];
            $userToSave->thumbnail = $request['thumbnail'];
            $userToSave->recovery_email = $request['recovery_email'];
            $userToSave->active = $request['active'] == null ? false : true;
            
            $userToSave->save();
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
