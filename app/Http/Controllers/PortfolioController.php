<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Session\Store;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function getIndex(Store $session, Project $projectModel){
        $discipline = 'animation';

        $projects = $projectModel->getProjects($discipline, $session);
        $session->flush();

        // $mostRecentProject = array_shift($projects);
        // $relatedProjects = array_slice($projects, 1, 10);
        unset($projects);

        return view('portfolio.index', ['project' => $mostRecentProject, 'relatedProjects' => $relatedProjects]);
    }
}
