<?php $section = "Portfolio" ?>

<section class="sub-content-container">

    <!-- ===== L A T E S T ===== -->
    <h2 class="section-title">Most Recent Project:</h2>

    <div class="box-list-container project-list-container">

        <ul>

            @foreach($projects as $project)

                <?php $section =  $project->section->name ?>

                <li class="box-container"
                    style="background-image: url({{$project->image1}})"
                >

                <a href="{{route('project', ['section' => strtolower($project->section->name), 'id' => "$project->id"])}}">

                    <article>

                        <div class="project-title-container">

                            <h2 >{{$project->title}}</h2>

                        </div>

                    </article>

                </a>

                </li>

            @endforeach

        </ul>

    </div>

</section>

@section('title') <?php print("$section") ?> @endsection
