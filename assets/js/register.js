$(document).ready(function() {

	/* ------------------------------------------------------------- */

	// Initialize
	$('div.second-part').css('display', 'none');

	$('span.inner-first').css('visibility', 'visible');
	$('span.inner-second').css('visibility', 'hidden');
	$('span.inner-third').css('visibility', 'hidden');

	$('button.submit-second').css('display', 'none');
	$('button.submit.pull-left.two').css('display', 'none');
	$('button.submit-last').css('display', 'none');
	$('button.submit.three').css('display', 'none');

	$('h2.part-one').css('display', 'block');
	$('h2.part-two').css('display', 'none');
	$('h2.part-three').css('display', 'none');

	$('p.error-message').css('display', 'none');

	$('input[name="chairs-number"]').css('display', 'none');
	$('div.tables').css('display', 'none');

	$('p.congratulations-message').css('display', 'none');

	$('div#payment.register-through').css('display', 'none');

	/* ------------------------------------------------------------- */

	// Submit Button Number One
	$('button.submit-first').click(function() {
		var rquiredInputs = $(':input.required:visible').filter( function() {
		    return this.value === '';
		});

		if (rquiredInputs.length === 0)
		{
			$('div.first-part').css('display', 'none');
			$('div.second-part').css('display', 'block');

			$('span.inner-first').css('visibility', 'hidden');
			$('span.inner-second').css('visibility', 'visible');
			$('span.inner-third').css('visibility', 'hidden');

			$('span.outer-first').removeClass('active');
			$('span.outer-second').addClass('active');

			$('button.submit-first').css('display', 'none');
			$('button.submit-second').css('display', 'block');
			$('button.submit.pull-left.two').css('display', 'block');
			$('button.submit-last').css('display', 'none');

			$('h2.part-one').css('display', 'none');
			$('h2.part-two').css('display', 'block');

			$('p.error-message').css('display', 'none');
		} 

		else
		{
			$('p.error-message').css('display', 'block');
			$('html, body').animate({scrollTop: $('div.row').offset().top}, 800);
		}
	});

	/* ------------------------------------------------------------- */

	// Submit Button Number Two
	$('button.submit-second').click(function() {
		var emptyElements = $('form.registration-form div.second-part :input:visible').filter( function() {
		    return this.value === '';
		});

		if (emptyElements.length === 0)
		{
			$('div.second-part').css('display', 'none');

			$('span.inner-second').css('visibility', 'hidden');
			$('span.inner-third').css('visibility', 'visible');

			$('button.submit-second').css('display', 'none');
			$('button.submit.pull-left.two').css('display', 'none');
			$('button.submit-last').css('display', 'block');
			$('button.submit.three').css('display', 'block');

			$('span.outer-second').removeClass('active');
			$('span.outer-third').addClass('active');

			$('h2.part-two').css('display', 'none');
			$('h2.part-three').css('display', 'block');

			$('p.error-message').css('display', 'none');

			$('p.congratulations-message').css('display', 'block');

			$('div#payment.register-through').css('display', 'block');
		} 

		else
		{
			$('p.error-message').css('display', 'block');
			$('html, body').animate({scrollTop: $('div.row').offset().top}, 800);
		}
	});

	$('button.submit.two').click(function() {
		$('div.first-part').css('display', 'block');
		$('div.second-part').css('display', 'none');

		$('span.inner-first').css('visibility', 'visible');
		$('span.inner-second').css('visibility', 'hidden');
		$('span.inner-third').css('visibility', 'hidden');

		$('span.outer-first').addClass('active');
		$('span.outer-second').removeClass('active');

		$('button.submit-first').css('display', 'block');
		$('button.submit-second').css('display', 'none');
		$('button.submit.pull-left.two').css('display', 'none');
		$('button.submit-last').css('display', 'block');

		$('h2.part-one').css('display', 'block');
		$('h2.part-two').css('display', 'none');
	});

	$('button.submit.three').click(function() {
		$('div.second-part').css('display', 'block');
		$('div.third-part').css('display', 'none');

		$('span.inner-second').css('visibility', 'visible');
		$('span.inner-third').css('visibility', 'hidden');

		$('span.outer-second').addClass('active');
		$('span.outer-third').removeClass('active');

		$('button.submit-second').css('display', 'block');
		$('button.submit-third').css('display', 'none');
		$('button.submit.pull-left.two').css('display', 'block');
		$('button.submit.three').css('display', 'none');
		$('button.submit-last').css('display', 'none');

		$('h2.part-two').css('display', 'block');
		$('h2.part-three').css('display', 'none');

		$('p.congratulations-message').css('display', 'none');

		$('div#payment.register-through').css('display', 'none');
	});


	$('input[name="chairs-yes"]').on('click', function() {
		$('input[name="chairs-number"]').fadeIn('fast');
		$('input[name="chairs"]').prop('checked', false);
	});

	$('input[name="chairs"]').on('click', function() {
		$('input[name="chairs-number"]').fadeOut('fast');
		$('input[name="chairs-yes"]').prop('checked', false);
	});


	// $('input[name="tables-yes"]').on('click', function() {
	// 	$('input[name="tables-number"]').fadeIn('fast');
	// 	$('input[name="tables"]').prop('checked', false);
	// });

	// $('input[name="tables"]').on('click', function() {
	// 	$('input[name="tables-number"]').fadeOut('fast');
	// 	$('input[name="tables-yes"]').prop('checked', false);
	// });

	/* ------------------------------------------------------------- */

	// Type Of Person Button

	// Competitor
	$('input[type="radio"].competitor').on('click', function()
	{
		$('div.basic-information').show();
		$('div.sound').show();
		$('div.stage').show();
		$('div.lighting').show();

		$('div.auxiliary-resources div.chairs').show();
		$('div.auxiliary-resources div.electricity').show();
		$('div.auxiliary-resources div.smoke-machine').show();
		$('div.tables').show();

		$('div.basic-information input[name="nickname"]').parent().show();
		$('div.basic-information input[name="age"]').parent().show();
		$('div.basic-information input[name="town"]').parent().show();
		$('div.basic-information textarea[name="assistants"]').parent().show();
		$('div.basic-information select[name="category"]').parent().show();
		$('div.basic-information input[name="performance-duration"]').parent().show();
		$('div.basic-information input[name="prepare-duration"]').parent().show();

		$('div.basic-information input[name="phone"]').parent().css('min-width', '35%').css('max-width', '48%').css('margin-left', '4%').css('float', 'left');
	});

	// Dealer
	$('input[type="radio"].dealer').on('click', function()
	{
		$('div.basic-information').show();
		$('div.sound').hide();
		$('div.stage').hide();
		$('div.lighting').hide();

		$('div.auxiliary-resources div.chairs').hide();
		$('div.auxiliary-resources div.electricity').hide();
		$('div.auxiliary-resources div.smoke-machine').hide();
		$('div.tables').show();
		$('input[name="tables-number"]').show();

		$('div.basic-information input[name="nickname"]').parent().hide();
		$('div.basic-information input[name="age"]').parent().hide();
		$('div.basic-information input[name="town"]').parent().hide();
		$('div.basic-information textarea[name="assistants"]').parent().hide();
		$('div.basic-information select[name="category"]').parent().hide();
		$('div.basic-information input[name="performance-duration"]').parent().hide();
		$('div.basic-information input[name="prepare-duration"]').parent().hide();

		$('div.basic-information input[name="phone"]').parent().css('min-width', '0').css('max-width', '100%').css('margin-left', '0').css('float', 'none');
	});

	// Viewer
	$('input[type="radio"].viewer').on('click', function()
	{
		$('div.basic-information').show();
		$('div.sound').hide();
		$('div.stage').hide();
		$('div.lighting').hide();

		$('div.auxiliary-resources div#title').hide();
		$('div.auxiliary-resources div.chairs').hide();
		$('div.auxiliary-resources div.electricity').hide();
		$('div.auxiliary-resources div.smoke-machine').hide();
		$('div.tables').hide();

		$('div.basic-information input[name="nickname"]').parent().hide();
		$('div.basic-information input[name="age"]').parent().hide();
		$('div.basic-information input[name="town"]').parent().hide();
		$('div.basic-information textarea[name="assistants"]').parent().hide();
		$('div.basic-information select[name="category"]').parent().hide();
		$('div.basic-information input[name="performance-duration"]').parent().hide();
		$('div.basic-information input[name="prepare-duration"]').parent().hide();

		$('div.basic-information input[name="phone"]').parent().css('min-width', '0').css('max-width', '100%').css('margin-left', '0').css('float', 'none');
	});

	// Hotel Form
	$('div.form-group.room-prices').hide();
	$('div.form-group.types-of-rooms').hide();
	$('div.form-group.dates').hide();
	$('div.form-group.food').hide();
	$('div.form-group.food-prices').hide();

	$(':radio[name="hotel-prices-yes"]').click(function() {
		$('div.form-group.room-prices').fadeIn('fast');
		$('input[name="hotel-prices"]').prop('checked', false);
	});

	$(':radio[name="hotel-prices"]').click(function() {
		$('div.form-group.room-prices').fadeOut('fast');
		$('div.form-group.types-of-rooms').fadeOut('fast');
		$('div.form-group.dates').fadeOut('fast');
		$('div.form-group.food').fadeOut('fast');
		$('div.form-group.food-prices').fadeOut('fast');
		$('input[name="hotel-prices-yes"]').prop('checked', false);
	});

	$(':radio[name="room-prices"]').click(function() {
		$('div.form-group.dates').fadeIn('fast');
	});

	$(':checkbox[name="dates"]').click(function() {
		$('div.form-group.food').fadeIn('fast');
	});

	$(':radio[name="food"]').click(function() {
		$('div.form-group.food-prices').fadeIn('fast');
	});

	$(':radio[name="food-prices-yes"]').click(function() {
		$('div.form-group.food-prices').fadeIn('fast');
		$('input[name="food-prices"]').prop('checked', false);
	});

	$(':radio[name="food-prices"]').click(function() {
		$('div.form-group.food-prices').fadeOut('fast');
		$('input[name="food-prices-yes"]').prop('checked', false);
	});

	/* ------------------------------------------------------------- */

	// Account sum

	// Adult
	$('button.submit-second').click(function() {
		var adultAccount = 69;

		if ($('input#one-room').is(':checked'))
		{
			if ($('div.dates input[type="checkbox"]#day-27').is(':checked'))
			{
				adultAccount = adultAccount + 38;
			}

			if ($('div.dates input[type="checkbox"]#day-28').is(':checked'))
			{
				adultAccount = adultAccount + 38;
			}

			if ($('div.dates input[type="checkbox"]#day-29').is(':checked'))
			{
				adultAccount = adultAccount + 38;
			}

			if ($('div.food-prices input#dinner-27').is(':checked'))
			{
				adultAccount = adultAccount + 10;
			}

			if ($('div.food-prices input#dinner-28').is(':checked'))
			{
				adultAccount = adultAccount + 10;
			}

			if ($('div.food-prices input#dinner-28').is(':checked'))
			{
				adultAccount = adultAccount + 5;
			}

			if ($('div.food-prices input#lunch-29').is(':checked'))
			{
				adultAccount = adultAccount + 5;
			}

			$('span.adultAccount').text(adultAccount);
		}

		else if ($('input#two-rooms').is(':checked'))
		{
			adultAccount = 69;

			if ($('div.dates input[type="checkbox"]#day-27').is(':checked'))
			{
				adultAccount = adultAccount + 22.50;
			}

			if ($('div.dates input[type="checkbox"]#day-28').is(':checked'))
			{
				adultAccount = adultAccount + 22.50;
			}

			if ($('div.dates input[type="checkbox"]#day-29').is(':checked'))
			{
				adultAccount = adultAccount + 22.50;
			}

			if ($('div.food-prices input#dinner-27').is(':checked'))
			{
				adultAccount = adultAccount + 10;
			}

			if ($('div.food-prices input#dinner-28').is(':checked'))
			{
				adultAccount = adultAccount + 10;
			}

			if ($('div.food-prices input#dinner-28').is(':checked'))
			{
				adultAccount = adultAccount + 5;
			}

			if ($('div.food-prices input#lunch-29').is(':checked'))
			{
				adultAccount = adultAccount + 5;
			}

			$('span.adultAccount').text(adultAccount);
		}

		else if ($('input.hotel-price-no').is(':checked'))
		{
			adultAccount = 69;
			$('span.adultAccount').text(adultAccount);
		}

		$('#amount_value').val(Math.round(adultAccount / 1.93));
	
		var submitForPayment = function () {
			console.log('atan');

			return "https://www.paypal.com/cgi-bin/webscr";
		}


	});

	// Kid
	// var kidAccount = 39;
})


/* REMINDER --------------------------- REMINDER
участник - регистрационна форма, тази дългата

дилър - имена, имейл, телефон,
колко маси ще иска - една или две

наблюдател - имена, имейл, телефон, направо към хотела

Искате ли да ползвате преференциални цени за хотел?
Да -> единична стая за 38лв или място в двойна стая за 22.50 -> нощувки за кои дати искате?

само за 27ми март
само за 28ми март 
или за 27ми и 28ми март

Не -> плащане -> нощувки за кои дати искате?

само за 27ми март
само за 28ми март 
или за 27ми и 28ми март ->

искате ли да ползвате преференциални цени за ядене
Да -> obqd 5 leva - ve4erq 10 leva
Не -> 

Регистрацията ви приключи успешно. Изберете един от двата начина за плащане

Нататък -> възможности за плащане
ПейПал
Наложен ->

Офис на Еконт Габрово
Йордан Белев
0888 888 888

2. Картата на хотела
3. Ако 2-на стаята -> с кого иска да бъде настанн в тази стая (текстово поле)

27 обяд
27 вечеря
28 обяд

шрифта на типа

Дете -> състезател / наблюдател
REMINDER --------------------------- REMINDER */