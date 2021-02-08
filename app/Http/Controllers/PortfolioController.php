<?php

namespace App\Http\Controllers;

use App\Models\Project;

class PortfolioController extends Controller
{
    public function getIndex($section){
        $projectModel = new Project();

        $latest = $projectModel->getLatestProject($section);
        // if($latest->id)
        // {
            $relateds = $projectModel->getRelatedProjects( $section, $latest->id);
            return view('portfolio.index', ['project' => $latest, 'relateds' => $relateds]);
        // }
        return 'Try Again';
    }

    public function getProjectById($section, $id, Project $projectModel){

        $latest = $projectModel->getProjectById($id);
        if($latest->id)
        {
            $relateds = $projectModel->getRelatedProjects($section, $latest->id, );

            return view('portfolio.project', ['project' => $latest, 'relateds' => $relateds]);
        }

        return 'Try Again';
    }
}
