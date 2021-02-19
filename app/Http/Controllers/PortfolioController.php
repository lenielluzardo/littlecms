<?php

namespace App\Http\Controllers;

use App\Models\Project;

class PortfolioController extends Controller
{
    public function getIndex($section)
    {
        $projectModel = new Project();

        $latest = $projectModel->getLatestProject($section);

        $relateds = $projectModel->getRelatedProjects( $section, $latest->id);

        return view('portfolio.index', ['latest' => $latest, 'relateds' => $relateds]);
    }

    Public function getProjectById($section, $id, Project $projectModel)
    {
        $latest = $projectModel->getProjectById($id);

        $relateds = $projectModel->getRelatedProjects($section, $latest->id, );

        return view('portfolio.project', ['item' => $latest, 'relateds' => $relateds]);
    }
}
