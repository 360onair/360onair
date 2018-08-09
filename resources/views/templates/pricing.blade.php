@extends('app')

@section("metatitle", "Vraag een vrijblijvende offerte aan en bekijk onze pakket tarieven - Tarieven - 360onair")
@section("metadescription", "360onair maakt 360 graden video's en foto's op maat. Door deze maatproductie hebben wij nauwelijks vaste prijzen. Op deze pagina vind je wel enkele prijsindicaties van de meest gevraagde 360 graden producties.")

@section('content')
	<header>
		<div class="title">
			<div class="fadeInDown">
				<h1>'t zal me de kop niet kosten</h1>
				<h2>All-in-one pakketten gebaseerd op onze ervaringen tegen een scherpe prijs. Liever een offerte op maat? Stuur ons dan een <a href="/contact">bericht</a>.</h2>
			</div>
		</div>
		<div id="slide" style="background:url('/images/headers/prijzen.jpg') no-repeat; background-position:50% 0; background-size:cover;"></div>	
	</header>

	<section class="grey space" id="pricing-introduction">
		<div class="container">
			<div class="row">
				<div class="col-md-10 offset-md-1">
					<div class="text-block text-center">
						<p>
							Het maken van een 360 graden productie is vaak maatwerk. Misschien is er een eigen idee of specifieke wensen. Hieronder tonen we dan ook een aantal pakketten om een prijsindicatie te geven. Wij staan altijd open voor een gesprek om jouw idee te bespreken. Wil je gelijk een vrijblijvende offerte, dat kan ook! Stuur ons een <a href="mailto:info@360onair.com">e-mail</a> en wij zorgen dat je binnen 48 uur een complete offerte binnen hebt.
						</p>
						<a class="btn btn-primary" href="/contact">vraag offerte aan</a>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="grey space" id="pricing">
		<div class="container">
			<div class="pricing-table">
				<div class="pricing-block">
					<h2>Google Streetview</h2>
					<ul>
						<li>Plaatsing op Google Streetview</li>
						<li>Tot 10 foto's in 8K kwaliteit</li>
						<li>Te plaatsen op Facebook en website</li>
						<li>Stijging in Google zoekresultaten</li>
						<li>Eenmalige kosten</li>
						<li>Gecertificeerde Google fotograaf</li>
						<li>&euro; 299,-</li>
					</ul>
				</div>

				<div class="pricing-block">
					<h2>360&deg; <br />Video's</h2>
					<ul>
						<li>6 uur aanwezig</li>
						<li>3 minuten videobewerking</li>
						<li>4K videokwaliteit</li>
						<li>Te plaatsen op Social media</li>
						<li>1 usb-stick en VR-bril</li>
						<li>Eenmalige kosten</li>
						<li>&euro; 899,-</li>
					</ul>
				</div>

				<div class="pricing-block">
					<h2>360&deg; Livestream</h2>
					<ul>
						<li>4 uur aanwezig</li>
						<li>Direct gestitched</li>
						<li>4K videokwaliteit</li>
						<li>Te bekijken via Youtube</li>
						<li>Eigen Youtube kanaal</li>
						<li>Eenmalige kosten</li>
						<li>&euro; 399,-</li>
					</ul>
				</div>
			</div>
		</div>
	</section>
@endsection