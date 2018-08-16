<div class="owl-carousel" id="reference-slider">
	<div class="owl-slide">
		<img src="/images/references/fysiofit.png" height="80" width="150" class="reference-logo" alt="Fysiofit" />
	</div>
    <div class="owl-slide">
        <img src="/images/references/dance-valley.svg" height="105" width="105" class="reference-logo" alt="Dance Valley Festival" />
    </div>
	<div class="owl-slide">
		<img src="/images/references/hallmark.png" height="80" width="143" class="reference-logo" alt="Fysiofit" />
	</div>
	<div class="owl-slide">
		<img src="/images/references/city-of-dance-festival.png" height="80" width="130" class="reference-logo" alt="City Of Dance Festival" />
	</div>
	<div class="owl-slide">
		<img src="/images/references/luminosity-beach-festival.png" height="80" width="154" class="reference-logo" alt="Luminosity Beach Festival" />
	</div>
	<div class="owl-slide">
		<img src="/images/references/verkaaik-boekhandel-gouda.png" height="80" width="150" class="reference-logo" alt="Verkaaik Boeken Gouda" />
	</div>
    <div class="owl-slide">
        <img src="/images/references/njoy-party.png" height="60" width="222" class="reference-logo" alt="Njoy Party" />
    </div>
</div>

@section('scripts')
	@parent

		<script>
			$('#reference-slider').owlCarousel({
            loop: true,
            autoplay: true,
            autoplayTimeout: 5000,
            margin: 0,
            items: 6,
            nav: false,
            dots: false,
            mouseDrag: false,
            animateOut: 'fadeOut',
            animateIn: 'fadeIn',
            responsiveClass: true,
            responsive: {
                0: {
                    items: 3
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 4
                }
            }
        });
		</script>
@endsection