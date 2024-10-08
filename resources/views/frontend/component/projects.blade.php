<div class="container-xxl py-6 pt-5" id="project">
        <div class="container">
            <div class="row g-5 mb-5 align-items-center wow fadeInUp" data-wow-delay="0.1s">
                <div class="col-lg-6">
                    <h1 class="display-5 mb-0">My Projects</h1>
                </div>
                <div class="col-lg-6 text-lg-end">
                    <ul class="list-inline mx-n3 mb-0" id="portfolio-flters">
                        <li class="mx-3 active" data-filter="*">Tüm Projeler</li>
                        <li class="mx-3" data-filter=".first">Web Siteler</li>
                        <li class="mx-3" data-filter=".second">Masaüstü Uygulamaları</li>
                    </ul>
                </div>
            </div>
            <div class="row g-4 portfolio-container wow fadeInUp" data-wow-delay="0.1s">
                @foreach ($projects as $project )
                 <?php
                 $project_type= $project->content=="website" ? "first" : "second";
                 ?>
                
                <div class="col-lg-4 col-md-6 portfolio-item {{ $project_type}}">
                    <div class="portfolio-img rounded overflow-hidden">
                        <img class="img-fluid" src="{{asset($project->image)}}" alt="">
                        <div class="portfolio-btn">
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="{{asset($project->image)}}" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            @if (!empty($project->link) && $project->link !== '#')
    <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" 
       href="{{ strpos($project->link, 'http') === 0 ? $project->link : 'http://' . $project->link }}" 
       target="_blank">
        <i class="fa fa-link"></i>
    </a>
@endif

                            </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>