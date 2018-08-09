@extends('app')

@section("metatitle", "Contact opnemen met 360onair kan snel en eenvoudig. - Contact - 360onair")
@section("metadescription", "Het 360onair team staat klaar om jouw vraag te beantwoorden. Laat gerust een bericht achter en wij nemen zo snel mogelijk contact op.")

@section('content')
	<header>
		<div class="title">
			<div class="fadeInDown">
				<h1>Ken het zijn dat ik u kan?</h1>
				<h2>Leuk dat je in contact wil komen met het 360onair team. Laat een bericht achter via ons contactformulier en je krijgt binnen 24 uur reactie.</h2>
			</div>
		</div>
		<div id="slide" style="background:url('/images/headers/contact.jpg') no-repeat; background-position:50% 0; background-size:cover;"></div>	
	</header>

	<section class="grey space" id="contact">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="form-container" id="form-contact">
				
						 <form class="form-request" id="contactForm" action="/form/contact" method="POST">
							 <input type="hidden" name="_token" value="{{ csrf_token() }}">
						    
						    <div class="row">
						        <div class="col-md-12 column">

						            <div class="alert alert-danger" role="alert" style="display:none"></div>
						            <div class="alert alert-success" role="alert" style="display:none"></div>
						        </div>
						    </div>
						    <div class="row">
						        <div class="col-md-12">
						            <div class="form-group">
						                <input type="text" class="form-control" name="naam" id="naam" placeholder="Naam*">
						            </div>
						            <div class="form-group">
						                <input type="email" class="form-control" name="email" id="email" placeholder="E-mailadres*">
						            </div>
						            <div class="form-group">
						                <input type="tel" class="form-control" name="telefoon" id="telefoon" placeholder="Telefoonnummer">
						            </div>
						            <div class="form-group">
						                <textarea class="form-control" name="bericht" id="bericht" placeholder="Laat een bericht achter" rows="4"></textarea>
						            </div>
						            <div class="form-group">
						                <button type="submit" class="btn btn-primary">versturen</button>
						            </div>
						        </div>
						    </div>

						</form>
						
					</div>

					<div class="white-block" id="info">
						<h3>Effe bakkie pleur doen?</h3>
						<ul>
							<li><a href="mailto:info@360onair.com">info@360onair.com</a></li>
							<li><a href="tel:0648524240">+31(6) 485 242 40</a></li>
							<li><a href="https://www.facebook.com/360onair-1340754376051203/" target="_blank"><i class="fa fa-facebook"></i></a> <a href="https://www.youtube.com/channel/UC-Kzaa63HT1cJTVR4biThmg" target="_blank"><i class="fa fa-youtube"></i></a> </li>
						</ul>
						<div id="company-details">
							<h3>Bedrijfsgegevens</h3>
							<p>
								KVK: 69627762 <br />
								BTW: NL198749338B01<br />
								IBAN: NL73 RABO 0322 823 374<br />
								<br />
								<a href="/privacyverklaring" target="_blank">Privacyverklaring</a> <br />
								<a href="/disclaimer" target="_blank">Disclaimer</a>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection	

@section('scripts')
	<script>
	   $(window).scroll(function () {
		   $("#slide").css("background-position","50% " + ($(this).scrollTop() / 2) + "px");
	   });
	</script> 

	<script>
		/* FORM */

$('form.form-request').submit(function (e) {
    var errorMessages = [];
    var form = $(this);

    form.find(".has-error").removeClass('has-error');

    if (typeof tinyMCE != 'undefined') tinyMCE.triggerSave();


    $.ajax(
        {
            type: 'POST',
            url: form.attr('action'),
            data: form.serialize(),

            success: function (data) {
                form.find('.alert-danger').hide();

                e.preventDefault();

                if (data.result) {
                    if (data.redirect) {
                        window.location.href = data.redirect;
                        e.preventDefault();
                    } else if (data.alert) {
                        alertify.success(data.alert, 5);
                        e.preventDefault();
                    } else if (data.response) {
                        form.trigger('reset').find(".alert-danger").hide(200).end().find(".alert-success").html(data.response).show(200);
                        e.preventDefault();
                    }

                    return true;
                }

                form.find('.alert-danger').html(data.error).show(200);

                if (data.error_fields) {
                    $.each(data.error_fields, function (key, value) {
                        form.find("input[name='" + value + "'], textarea[name='" + value + "'], select[name='" + value + "'], select[name='" + value + "[]']").parent().addClass('has-error');
                    });
                }

                e.preventDefault();
            },
            error: function (data) {
                form.find(".alert-danger:visible").hide();

                if (data.responseJSON === undefined) {
                    console.log(data);
                    e.preventDefault();
                    return false;
                }

                var errors = data.responseJSON;

                $.each(errors, function (key, value) {
                    keys = key.split('.');

                    errorMessages.push(value[0]);
                    if (keys.length > 1) {
                        form.find("input[name='" + keys[0] + "[" + keys[1] + "]'], select[name='" + keys[0] + "[" + keys[1] + "]']").parent().addClass('has-error');
                    } else {
                        form.find("input[name='" + key + "'], textarea[name='" + key + "'], select[name='" + key + "'], select[name='" + key + "[]']").parent().addClass('has-error');
                    }
                });

                if (errorMessages) {
                    if (errorMessages.length == 1) {
                        form.find('.alert-danger').html(errorMessages[0]).show(200);
                    } else {
                        form.find('.alert-danger').html('<ul></ul>');
                        var errorMessage = '';
                        $.each(errorMessages, function (i, message) {
                            errorMessage += '<li>' + message + '</li>';
                        });

                        form.find('.alert-danger ul').append(errorMessage);
                        form.find('.alert-danger').show(200);
                    }
                }

                e.preventDefault();
            },
            async: false
        }
    );
});

</script>
@endsection
