<h2 class="section-title">Most Recent Project:</h2>
<ul class="project-list">
    @foreach($projects as $project)
    <li>
        <a href="{{route('project', ['section' => strtolower($project->section->name), 'id' => "$project->id"])}}">
            <article class="project-container">
                <div class="project-img-container" style="background: url({{$project->image1}}) no-repeat center; background-size:100%">
                    <div class="project-description-container">
                        <h2 class="publication-title">{{$project->title}}</h2>
                        <p>{{$project->paragraph1}}</p>
                    </div>
                </div>
            </article>
        </a>
    </li>
    @endforeach
</ul>
