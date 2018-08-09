@extends('app')

@section("metatitle", "360 video's en foto's vastleggen - 360 graden livestreamen - Google streetview gecertificeerd - 360onair")
@section("metadescription", "360onair is de specialist in het maken van 360 graden videos en 360 graden fotografie. Wij kunnen met de nieuwste technieken ook 360 graden livestreamen op bijvoorbeeld evenementen, festivals, bruiloften en open huizen.")


@section('content')
	<section id="home-slider">
		@include('partials._slider')
	</section>	

	<section id="home-introduction">
		<div class="text-block">
			<div class="icon icon-onair">
				<img src="/images/icons/360onair.svg" width="90" height="90" alt="360onair" />
			</div>
			<div class="short">
				<h1>360onair is de <strong>specialist</strong> in het maken van <strong>360 graden video’s</strong> en <strong>foto’s</strong></h1>
				<p>360° video live streamen, 360° 3D of een 360° video tot maar liefst 8K, voor ons is niks te gek. Bespreek je idee en wij helpen graag verder om de perfecte 360° video te creëren.</p>
				<a class="btn btn-primary" href="/over-360onair">meer over 360onair</a>
			</div>
		</div>
	</section>

	<section class="references" id="home-references">
		
		@include('partials._references')	
		

		<div class="spotlight">
			<a class="btn-play" href="https://www.youtube.com/watch?v=o1qK9rkaZaE" target="_blank">
				<span class="icon icon-play"><i class="fa fa-youtube-play"></i></span>
				<img src="/images/home/hallmark-popup-store-utrecht.jpg" class="img-responsive" alt="Hallmark Popup Store Utrecht" />
				<h2><span>Opening pop-up store</span><span>Hallmark Utrecht Centraal</span> </h2>
			</a>
		</div>
	</section>


	<section id="home-what-we-do">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="list-what">
						<ul>
							<li>360 graden tour <span>Google Streetview</span></li>
							<li>Vastgoed</li>
							<li>Beurzen</li>
							<li>Evenementen & festivals</li>
							<li>Promotie</li>
							<li>Scholen</li>
							<li>Bruiloften & feesten</li>
							<li>Eigen idee</li>
							<li>Begrafenissen</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="socials-banner">
		<div class="text-center">
			<h3>
				<span>Stay tuned on our socials</span>
				<a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
				<a href="#" target="_blank"><i class="fa fa-youtube"></i></a>
			</h3>
		
		</div>
	</section>

{{--
	<section class="grey" id="home-projects">
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-6">
					<div class="project-item">
						<a href="#" class="btn-project">
							<span class="image">
								<span class="view">
									<span>Bekijk project</span>
								</span>
								<img src="/images/home/hallmark-popup-store-utrecht.jpg" class="img-responsive" alt="" />
							</span>
							<span class="short">
								<h2>360onair is officieel Google Streetview fotograaf</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua.</p>
							</span>
						</a>
					</div>
				</div>

				<div class="col-sm-6">
					<div class="project-item">
						<a href="#" class="btn-project">
							<span class="image">
								<span class="view">
									<span>Bekijk project</span>
								</span>
								<img src="/images/home/hallmark-popup-store-utrecht.jpg" class="img-responsive" alt="" />
							</span>
							<span class="short">
								<h2>360onair is officieel Google Streetview fotograaf</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua.</p>
							</span>
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>
--}}	
@endsection


@section('stylesheets')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
@endsection

@section('scripts')
	<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
	<script>
		$('#slider').owlCarousel({
            loop: true,
            autoplay: true,
            autoplayTimeout: 10000,
            margin: 0,
            items: 1,
            nav: false,
            dots: false,
            mouseDrag: false,
            animateOut: 'fadeOut',
            animateIn: 'fadeIn',
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                1000: {
                    items: 1
                }
            }
        });
	
    </script>
@endsection
