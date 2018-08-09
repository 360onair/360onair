@extends('app')

@section('content')
	<header>
		<div class="title">
			<div class="fadeInDown">
				<h1></h1>
				<h2></h2>
			</div>
		</div>
		<div id="slide" style="background:url('/images/headers/prijzen.jpg') no-repeat; background-position:50% 0; background-size:cover;"></div>	
	</header>

	<section class="grey space" id="project-description">
		<div class="container">
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<div class="text-block text-center">
						{{ $project->title }}

					
					
						bla
					</div>
				</div>
			</div>
		</div>
	</section>

@endsection