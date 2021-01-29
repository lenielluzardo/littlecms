<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    public function getProjects($discipline, $session)
    {
        $projects = Project::where( 'discipline', "$discipline")->get();
        return $projects;
    }

    private function saveProject($session)
    {
        $project = $this->find;
    }
    private function updateProject($projectId)
    {

    }
    private function getProjectById($discipline, $projectId, $session){

        return Project::where( 'discipline', "$discipline")->where('id', $projectId)->get();

    }
    private function removeProject($projectId){}

}
