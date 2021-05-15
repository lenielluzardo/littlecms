<?php

namespace App\Http\Controllers;

use App\Models\Project;

class PortfolioController extends Controller
{
    public function getIndex($category, Project $project)
    {
        $projects = $project->getAllProjects($category);
        return view('user.content.portfolio.portfolio', ['items' => $projects, 'routeName' => 'project', 'urlSection' => 'software', 'path' => 'Portfolio']);
    }

    // Public function getProjectById($section, $id, Project $projectModel)
    // {
    //     $latest = $projectModel->getProjectById($id);

    //     $relateds = $projectModel->getRelatedProjects($section, $latest->id, );

    //     return view('user.content.portfolio.project', ['item' => $latest, 'relateds' => $relateds]);
    // }
}
