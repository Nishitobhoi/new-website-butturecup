<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="/images/favicon.png">

	<title>Buttercup Advertising studio</title>

	<!-- Bootstrap core CSS -->
	<link href="css/style.css" rel="stylesheet">
	<link rel="stylesheet" href="full-menu.css">
	<link rel="stylesheet" media="all" type="text/css" href="fontawesome-free-5.0.7/css/fontawesome-all.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="icofont/icofont.min.css">
	<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-TF26JM44');</script>
<!-- End Google Tag Manager -->
</head>

<body>

	<!-- Header -->
	<?php include('include/header.php'); ?>
	<!-- Header END -->


	<!-- Content -->
	<div id="content">
		<!-- Section 1 -->
		<section class="row-am thanks text-center">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h3 class="title1 wow fadeInDown animated" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">Thank You</h3>
						<!-- <p>Thanks For submitting, We have received your details.<br> We will get back to you soon.</p>	 -->
						<h4>Thank You for Connecting with us</h4>
						<h4>Your Brand is likely to commence an interesting Journey!</h4>
						<h4>Our Team will communicate with you soon</h4>
					</div>
				</div>
			</div>
		</section>


		<!-- --footer-contact---  -->
		<?php include('include/contact-footer.php'); ?>
		<!-- --footer-contact END---  -->


	</div>
	<!-- Content END -->

	<!-- Footer -->
	<?php include('include/footer.php'); ?>
	<!-- Footer END -->

	<!-- modal request button -->
	<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
		aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content modal-reque home-contact home-contact1">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<form method="post" name="form_contact" id="form123" action="feedback.php"
					enctype="multipart/form-data">
					<h2 class="text-center">Request Free Quote home</h2>
					<p class="text-center">Fill up form below, our team will get back soon</p>
					<input type="hidden" name="config" value="0">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<input type="text" class="form-control" name="name" id="name" placeholder="Name"
									onkeypress="return lettersOnly(event)">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<input type="email" class="form-control" name="email" id="email"
									placeholder="example@gmail.com" onkeypress="return allowSpecialCharacters(event)">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<input type="text" class="form-control" name="phone" placeholder="Phone" onkeypress="return allowNumbersOnly(event)">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<input type="text" class="form-control" name="project" id="project"
									placeholder="Subject" onkeypress="return lettersOnly(event)">
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<textarea class="form-control" type="text" name="message" id="message"
									placeholder="Your message" onkeypress="return lettersOnly(event)"></textarea>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-12 m-0">
							<div class="form-group">
								<div class="captcha">
									<label>We respect your privacy</label>
									<div class="g-recaptcha" data-sitekey="6Ldz758UAAAAAPH1feKIjlsKkRK2XWSSIX3fqNT_"
										id="RecaptchaField1" data-callback="correctCaptcha_form1"
										style="margin-left:50px">
									</div>
									<input type="hidden" class="hiddenRecaptcha required" name="form1_hiddenRecaptcha"
										id="form1_hiddenRecaptcha">
									<div id='html_element'></div>
									<small style="display: none; margin-right:584px;" data-bv-validator="notEmpty"
										data-bv-validator-for="g-recaptcha" id="g-recaptcha-error" class="help-block">
										Please verify you are humann!.
									</small>
								</div>
							</div>
						</div>
						<div class="col-md-12 m-0">
							<div class="form-group">
								<div class="contact-submit"><input type="submit" value="SUBMIT" name="submit"
										id="submit" class="btn btn_pink"></div>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>

	<!-- Bootstrap core JavaScript
================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
	<script>
		window.jQuery || document.write('<script src="js/jquery.min.js"><\/script>')
	</script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/full-menu.js"></script>
	<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery.touchswipe/1.6.4/jquery.touchSwipe.min.js'></script>

	<script src="js/wow.min.js"></script>
	<script>
		new WOW().init();
	</script>
	<script src="https://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js"></script>
	<script src="https://www.google.com/recaptcha/api.js"></script>
	<script src="js/index.js"></script>
	<script src="js/jquery.bxslider.js"></script>
<!-- Added -->
<script>
		var CaptchaCallback = function () {
			var widgetId2;
			widgetId2 = grecaptcha.render('RecaptchaField1', { 'sitekey': '6Ldz758UAAAAAPH1feKIjlsKkRK2XWSSIX3fqNT_', 'callback': correctCaptcha_form1 });
		};
		var correctCaptcha_form1 = function (response) {
			$("#form1_hiddenRecaptcha").val(response);
		};


		<?php include('js/contactform.js'); ?>

		function allowSpecialCharacters(event) {
			var charCode = event.which || event.keyCode;
			var charStr = String.fromCharCode(charCode);
			return /^[A-Za-z0-9\s@.]+$/.test(charStr);
		}

		function allowLettersOnly(event) {
			var charCode = event.which || event.keyCode;
			var charStr = String.fromCharCode(charCode);
			var inputText = event.target.value + charStr;

			// Check if the input has a leading space or consecutive spaces
			if (/^\s|\s\s/.test(inputText)) {
				return falform_contact_commonse;
			}

			return /^[A-Za-z\s]+$/.test(charStr);
		}


		function allowNumbersOnly(event) {
			var charCode = event.which || event.keyCode;
			return /^[0-9]+$/.test(String.fromCharCode(charCode));
		}
	</script>
	<!-- Added -->
	<script>
		jQuery(document).ready(function () {

			$.validator.addMethod("alpha", function (value, element) {
				var val = $.trim(value);
				return this.optional(element) || val == val.match(/^[a-zA-Z\s]+$/);
			});

			$.validator.addMethod("customemail",
				function (value, element) {
					var email = $.trim(value);
					return /^\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/.test(email);
				},

			);

			//  $.validator.addMethod("phonenumber", function(value, element) {

			//  	phone_number = $.trim(value.replace(/\s+/g, ""));
			//    return this.optional(element) || phone_number.length > 9 && 
			//    phone_number.match(/^(\+?1-?)?(\([2-9]\d{2}\)|[2-9]\d{2})-?[2-9]\d{2}-?\d{4}$/);

			// });

			jQuery.validator.addMethod("phonenumber", function (phonenumber, element) {
				phone_number1 = phonenumber.replace(/\s+/g, "");
				var phone_number = $.trim(phone_number1);
				return this.optional(element) || phone_number.length > 9 &&
					phone_number.match(/^((\+[1-9]{1,4}[ \-]*)|(\([0-9]{2,3}\)[ \-]*)|([0-9]{2,4})[ \-]*)*?[0-9]{3,4}?[ \-]*[0-9]{3,4}?$/);
			});

			function recaptchaCallback() {
				jQuery('#hiddenRecaptcha').valid();
			};

		});
	</script>
	<script>
		$(document).ready(function() {
			$(".testimonial .indicators li").click(function() {
				var i = $(this).index();
				var targetElement = $(".testimonial .tabs li");
				targetElement.eq(i).addClass('active');
				targetElement.not(targetElement[i]).removeClass('active');
			});
			$(".testimonial .tabs li").click(function() {
				var targetElement = $(".testimonial .tabs li");
				targetElement.addClass('active');
				targetElement.not($(this)).removeClass('active');
			});
		});
		$(document).ready(function() {
			$(".slider .swiper-pagination span").each(function(i) {
				$(this).text(i + 1).prepend("0");
			});
		});
	</script>
	<script>
		$('.js-anchor-link').click(function(e) {
			e.preventDefault();
			var target = $($(this).attr('href'));
			if (target.length) {
				var scrollTo = target.offset().top;
				$('body, html').animate({
					scrollTop: scrollTo + 'px'
				}, 800);
			}
		});
	</script>

</body>

</html>