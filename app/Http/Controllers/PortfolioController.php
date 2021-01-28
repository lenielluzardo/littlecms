<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Session\Store;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function getAnimationIndex(Store $session){

        $projectModel = new Portfolio();
        $session->flush();
        $projects = $projectModel->getAnimationProjects($session);
        $project = array_shift($projects);
        $relatedProjects = array_slice($projects, 1, 10);
        unset($projects);

        return view('portfolio.index', ['project' => $project, 'relatedProjects' => $relatedProjects]);
    }
    public function getIllustrationIndex(Store $session){

        $projectModel = new Portfolio();
        $session->flush();
        $projects = $projectModel->getIllustrationProjects($session);
        $project = array_shift($projects);
        $relatedProjects = array_slice($projects, 1, 10);
        unset($projects);

        return view('portfolio.index', ['project' => $project, 'relatedProjects' => $relatedProjects]);
    }
    public function getSoftwareIndex(Store $session){

        $projectModel = new Portfolio();
        $session->flush();
        $projects = $projectModel->getSoftwareProjects($session);
        $project = array_shift($projects);
        $relatedProjects = array_slice($projects, 1, 10);
        unset($projects);

        return view('portfolio.index', ['project' => $project, 'relatedProjects' => $relatedProjects]);
    }

    public function getPostById($id, Store $session){

        $projectModel = new Portfolio();
        $session->flush();
        $projects = $projectModel->getProjects($session);
        $project = array_shift($projects);
        $relatedProjects = array_slice($projects, 1, 10);
        unset($posts);

        return view('portfolio.project', ['project' => $project, 'relatedProjects' => $relatedProjects]);
    }
}
