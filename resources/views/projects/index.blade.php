@extends('app')

@section('content')
    <header>
        <div class="title">
            <div class="fadeInDown">
                <h1>Gerse projecten hiero!</h1>
                <h2>De opdrachtgevers waar wij voor werken lopen zeer uiteen. Met trots presenteren wij hier een aantal projecten van 360onair.</h2>
            </div>
        </div>
        <div id="slide" style="background:url('/images/headers/over-360onair.jpg') no-repeat; background-position:50% 0; background-size:cover;"></div> 
    </header>

    <section id="projects">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul>
                        @foreach($projects as $project)
                            <li>
                                <div class="project-item">
                                    <div class="project-image">
                                        <img src="{{ $project->projectimage }}" class="img-responsive" alt="" />
                                    </div>
                                    <div class="project-short">
                                        <h2>{{ $project->title }}</h2>
                                        <p>{{ $project->short }}</p>
                                        <a href="/projecten/{{ $project->slug }}">Bekijk project</a>
                                    </div>
                                </div>

                                
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </section>    
        

@endsection

       