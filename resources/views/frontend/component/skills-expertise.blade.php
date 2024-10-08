<div class="container-xxl py-6 pb-5" id="skill">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h1 class="display-5 mb-5">Yetenekler & Deneyimler</h1>
                    <h3 class="mb-4">My Skills</h3>
                    <div class="row align-items-center">
                        <div class="col-md-12">
                          
                        <?php
                    $progress_bar_color = [
                        0 => "bg-danger",
                        1 => "bg-dark",
                        2 => "bg-info",
                    ];
                    ?>
                    @foreach ($skills as $index => $skill)
                        <div class="skill mb-4">
                            <div class="d-flex justify-content-between">
                                <h6 class="font-weight-bold">{{ $skill->title }}</h6>
                                <h6 class="font-weight-bold">{{ $skill->level }}%</h6>
                            </div>
                            <div class="progress">
                                <div class="progress-bar {{ $progress_bar_color[$index % count($progress_bar_color)] }}" role="progressbar" aria-valuenow="{{$skill->level}}" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    @endforeach
                          
                        </div>
                 
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <ul class="nav nav-pills rounded border border-2 border-primary mb-5">
                        <li class="nav-item w-50">
                            <button class="nav-link w-100 py-3 fs-5 active" data-bs-toggle="pill" href="#tab-1">Deneyimler</button>
                        </li>
                        <li class="nav-item w-50">
                            <button class="nav-link w-100 py-3 fs-5" data-bs-toggle="pill" href="#tab-2">Eğitim</button>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div id="tab-1" class="tab-pane fade show p-0 active">
                            <div class="row gy-5 gx-4">
                                @foreach ($careers as $career )
                                <div class="col-sm-6">
                                    <h5>{{$career->title}}</h5>
                                    <hr class="text-primary my-2">
                                    <p class="text-primary mb-1">{{ \Carbon\Carbon::parse($career->start_date)->format('Y') }}
                                    - {{ \Carbon\Carbon::parse($career->end_date)->format('Y') }}
                                    </p>
                                    <h6 class="mb-0">{{$career->company}}</h6>
                                </div>
                                @endforeach
                               
                            </div>
                        </div>
                        <div id="tab-2" class="tab-pane fade show p-0">
                            <div class="row gy-5 gx-4">
                            @foreach ($educations as $education )

                                <div class="col-sm-6">
                                    <h5>{{$education->description}}</h5>
                                    <hr class="text-primary my-2">
                                    <p class="text-primary mb-1">{{ \Carbon\Carbon::parse($education->start_date)->format('Y') }}
                                    - {{ \Carbon\Carbon::parse($education->end_date)->format('Y') }}
                                    </p>                                
                                 <h6 class="mb-0">{{$education->education_title}}</h6>
                                </div>
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>