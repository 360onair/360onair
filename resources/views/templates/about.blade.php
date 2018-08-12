@extends('app')

@section("metatitle", "Maak kennis met het 360onair team - Gespecialiseerd in 360 graden content - Over 360onair - 360onair")
@section("metadescription", "360onair is een Rotterdams mediabureau dat van aanpakken houdt. We zijn trots op de kennis en kunde van ons jonge en creatieve team. Samen met onze klanten maken we de perfecte 360 graden video of foto, waarbij de klantwens altijd centraal staat.")

@section('content')
	<header>
		<div class="title">
			<div class="fadeInDown">
				<h1>Over 360onair</h1>
				<h2>Maak kennis met 360onair, gespecialiseerd in 360 graden content op verschillende manieren.</h2>
			</div>
		</div>
		<div id="slide" style="background:url('/images/headers/over-360onair.jpg') no-repeat; background-position:50% 0; background-size:cover;"></div>	
	</header>

	<section class="grey space" id="about-introduction">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="text-block text-block-sm">
						<h2>Wij draaien door. Eg wel!</h2>
						<p>
							360onair is een Rotterdams media bureau dat van aanpakken houdt. We zijn trots op de kennis en kunde van ons jonge en creatieve team. Samen met onze klanten maken we de perfecte 360 graden video of foto, waarbij de klantwens altijd centraal staat. Door te blijven ontwikkelen en vernieuwen zorgt 360onair voor gerse content. Nieuwsgierig wat wij kunnen?     
						</p>
						<a class="btn btn-primary scroll" href="#services">bekijk diensten</a>
					</div>
					<div class="white-block" id="process">
						<h2>Hoe werken wij?</h2>
						<ol class="list-process">
							<li>Idee&euml;n bij elkaar brengen</li>
							<li>Offerte per e-mail</li>
							<li>Gerse opnames maken</li>
							<li>Opnames monteren</li>
							<li>Oplevering</li>
							<li>Ondersteuning</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="references" id="about-references">
		@include('partials._references')
	</section>

	<section class="grey space" id="services">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<ul class="list-services">
						<li>
							<div class="service-block">
								<div class="mob-image visible-xs visible-sm">
									<img src="/images/services/google-streetview-trusted-photographer.jpg" alt="Google streetview tour mobile" class="img-fluid" />
								</div>
								<div class="service-short">
									<h2>Google Streetview Tour</h2>
									<p>Met een virtuele tour binnen je bedrijf is Google Streetview de ideale uitkomst. 
									Klanten kunnen elk gewenst tijdstip meekijken om de sfeer te proeven binnen jouw bedrijf. 
									Doordat het laagdrempelig is voor klanten om rond te kijken, trek je klanten die anders niet 
									naar binnen komen. Tevens verhoogt het de kans om hoger in Google te komen, 
									wat weer als gevolg heeft dat je klanten je sneller zullen vinden. 
									Wij zijn erkend Google Streetview fotograaf en dus bevoegd om een rondleiding te 
									plaatsen op Google Maps.</p>

									{{-- <a class="btn btn-primary" href="/projecten">Bekijk projecten</a> --}}
								</div>
								<div class="service-image hidden-xs hidden-sm">
									<img src="/images/services/google-streetview-trusted-photographer.jpg" alt="Google Streetview Tour" />
								</div>
							</div>
						</li>

						<li>
							<div class="service-block">
								<div class="mob-image visible-xs visible-sm">
									<img src="/images/services/360-video.jpg" alt="360 graden video's mobile" class="img-fluid" />
								</div>
								<div class="service-short">
									<h2>360 graden video's</h2>
									<p>Met een 360 graden video wordt jouw unieke moment vastgelegd. 
										Bijzonder aan deze manier van filmen is dat je rondom kan kijken doormiddel van een VR bril, 
										telefoon of tablet. 
										Een 360 graden video kan op veel verschillende manieren worden toegepast, 
										denk bijvoorbeeld aan een bedrijfsvideo ter promotie, bruiloft, festivals, evenementen en vastgoed. 
										De 360 graden video's zijn makkelijk te delen via Social media, Youtube en Facebook zijn een goed medium om hiervoor te gebruiken.
										</p>
										
										{{-- <a class="btn btn-primary" href="/projecten">Bekijk projecten</a> --}}
								</div>
								<div class="service-image hidden-xs hidden-sm">
									<img src="/images/services/360-video-little-planet.gif" alt="360 graden video's" />
								</div>
							</div>
						</li>

						<li>
							<div class="service-block">
								<div class="mob-image visible-xs visible-sm">
									<img src="/images/services/360-livestream.jpg" alt="360 graden livestreamen mobile" class="img-fluid" />
								</div>
								<div class="service-short">
									<h2>360 graden livestreamen</h2>
									<p>Met social media platformen als Youtube en Facebook is het mogelijk om momenten live vast te leggen. 
									Waar 360onair uniek in Nederland is, om dit in 360 graden te doen. 
									Dit biedt kansen voor bijvoorbeeld festivals en concerten om meer kijkers te trekken naar je social media kanaal. 
									Een ander leuk voorbeeld van livestreamen in 360 graden, is een open huis te houden. 
									Hierdoor kunnen potenti&euml;le kopers op afstand meekijken.  
									</p>
									
									{{-- <a class="btn btn-primary" href="/contact">Vraag offerte aan</a> --}}
								</div>
								<div class="service-image hidden-xs hidden-sm">
									<img src="/images/services/360-livestream.jpg" alt="360 graden livestreamen" />
								</div>
							</div>
						</li>

						<li>
							<div class="service-block">
								<div class="mob-image visible-xs visible-sm">
									<img src="/images/services/360-fotografie.jpg" alt="360 graden fotografie mobile" class="img-fluid" />
								</div>
								<div class="service-short">
									<h2>360 graden fotografie</h2>
									<p>360 graden fotografie is sterk in opkomst. Onze experts van 360onair zijn gespecialiseerd in het maken van 
									hoge kwaliteit 360 graden foto's (voor de kenners, de foto's worden geschoten in 12K!). 
									Het is mogelijk om deze foto's interactief te maken, waardoor je door verschillende ruimtes heen kan bewegen. Het fijne van 360 graden fotografie is dat de kijker zelf zijn kijkrichting bepaalt.
									</p>
									
									{{-- <a class="btn btn-primary" href="/contact">Bekijk projecten</a> --}}
								</div>
								<div class="service-image hidden-xs hidden-sm">
									<img src="/images/services/360-fotografie.jpg" alt="360 graden fotografie" />
								</div>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</section>
@endsection	

@section('stylesheets')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
@endsection

@section('scripts')
	<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
	<script type="text/javascript">
        $('.scroll').click(function() {
		    var sectionTo = $(this).attr('href');
		    $('html, body').animate({
		      scrollTop: $(sectionTo).offset().top - 95
		    }, 800);
		});
    </script>
	
@endsection	
