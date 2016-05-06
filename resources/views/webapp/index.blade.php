<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Gummex Booking</title>

	<!-- Latest compiled and minified CSS -->
	<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css"  crossorigin="anonymous">

	<!-- Main Style -->
	<link rel="stylesheet" href="{{asset('webapp/css/style.css')}}"  crossorigin="anonymous">
	<link rel="stylesheet" href="{{asset('webapp/css/picker/default.css')}}"  crossorigin="anonymous">
	<link rel="stylesheet" href="{{asset('webapp/css/picker/date.theme.css')}}"  crossorigin="anonymous">

	<link rel="stylesheet" href="{{asset('webapp/css/picker/default.time.css')}}"  crossorigin="anonymous">
	<link rel="stylesheet" href="{{asset('webapp/css/smoke.css')}}"  crossorigin="anonymous">

	<!-- Latest compiled select minified CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/css/bootstrap-select.min.css">


</head>
<body>

	<!-- Main Container -->
	<div class="container-fluid">

		<!-- Top Bar -->
		<div class="row top_bar">
			<!-- Logo -->
			<div class="col-xs-3 logo-container">
				Gummex
			</div>
			<!-- End Logo -->

			<!-- Steps-->
			<div class="col-xs-2 top-steps top-step-one step-process">
					1. Date &amp; zip code
			</div>
			<div class="col-xs-2 top-steps top-step-two">
					2. Services
			</div>
			<div class="col-xs-2 top-steps top-step-three">
					3. Address
			</div>
			<div class="col-xs-2 top-steps top-step-four" >
					4. Payment
			</div>
			<div class="col-xs-1 top-steps"></div>
			<!-- End Steps -->
		</div>
		<!-- End Top Bar -->

		<!-- XS MObile Bar -->
		<div class="xs-mobile-bar ">
			<div class="row logo-container">
				<div class="col-xs-6 " style="line-height: 50px; text-align: left">
					Gummex
				</div>
				<div class="col-xs-6 ">
					<h3 class="hidden row_total">&euro; <span class="total"></span></h3>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-3 top-steps top-step-one step-process">
					1
				</div>
				<div class="col-xs-3 top-steps top-step-two ">
					2
				</div>
				<div class="col-xs-3 top-steps top-step-three ">
					3
				</div>
				<div class="col-xs-3 top-steps top-step-four ">
					4
				</div>
			</div>
		</div>
		<!-- End XS Mobile Bar-->
		<div class="row">
			<div class="col-xs-3 sidebar">
				<div class=" row sidebar-section">
					<div class="col-xs-12" >
						<h4>Do you need help?</h4>
					</div>
					<div class="col-xs-12">
						<div class="row single-info">
							<span class="icon"><i class="fa fa-phone fa-1x"></i></span>
							<span class="phone"><font><font>23 34 23</font></font></span>
						</div>
						<div class="row single-info">
							<span class="icon"><i class="fa fa-envelope fa-1x"></i></span>
							<span class="mail"><font><font>kontakt@Gummex.com</font></font></span>
						</div>
						<div class="row single-info ">
							<span class="icon"><i class="fa fa-clock-o fa-1x"></i></span>
							<span class="time"><font><font>Mon-Sat 8-20 pm, Sun 9-18</font></font></span>
						</div>
					</div>
				</div>
				<div class="row sidebar-section">
					<div class="col-xs-12">
						<h4>Your oder</h4>
						<div class="row hidden row_total">
							<div class="col-xs-12 col-md-6">
								<h5 style="line-height: 45px;">Total Price</h5>
							</div>
							<div class="col-xs-12 col-md-6">
								<h3>&euro; <span id="finalTotal" class="total"></span></h3>
							</div>
						</div>
					</div>
				</div>
				<div class="row row_datetime sidebar-section hidden">
					<div class="col-xs-12 col-md-6">
						<strong>Date :</strong>
					</div>
					<div class="col-xs-12 col-md-6 order_date">
						12/02/2016
					</div>
					<div class="col-xs-12 col-md-6">
						<strong>Time :</strong>
					</div>
					<div class="col-xs-12 col-md-6 order_time">
						12:00 AM
					</div>
				</div>
				<div class="row sidebar-section hidden extras_text_container">
					<div class="col-xs-12">
						<h4>Extras</h4>
						<div class="row">
							<div class="col-xs-6 order_extras">

							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-9 col-xs-offset-3 main-content">

				<!-- Step One -->
				<form class="form-horizontal step_one">
				<div class="row">
					<div class="col-xs-12 col-md-6" >
					<h3>Your Postal Code</h3>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12 col-md-6">
						<div class="input-addon" style="height: 45px">
							<span><i class="fa fa-map-marker fa-1x"></i></span>
						</div>

						<select style="margin-left:40px" name="zip" id="zip"  data-live-search="true" title="Enter your postal code" class="form-control selectpicker how-menu-arrow" data-width="90%">

						@foreach($codes as $code)
								<option data-price="{{$code->price}}" >{{$code->code}}</option>
						@endforeach


						</select>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12" >
						<h3>When would you like to do your tier service?</h3>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12 col-md-6">
						<div class="input-addon">
							<span><i class="fa fa-calendar fa-1x"></i></span>
						</div>
						<input type="text" id="date" name="date" class="form-control " placeholder=" Select Date" required="" >
					</div>
				</div>
				<div class="row" style="margin-top: 20px">
					<div class="col-xs-12 col-md-6">
						<div class="input-addon" style="height: 45px">
							<span><i class="fa fa-clock-o fa-1x"></i></span>
						</div>
						<select style="margin-left:40px" name="time" id="time"  data-live-search="true" title="Select Time" class="form-control selectpicker show-menu-arrow dropdown" data-size="8" data-width="90%">
							<?php
							$counter = 0 ;
							for($i=0; $i<25;$i++)
							{
								$t = 0;
								if($counter == 0)
								{
									$counter++;
									$part = ":00";
								}
								else
								{
									$counter = 0 ;
									$part = ":30";
									$i = $i - 1 ;
								}
								echo "<option value='".$i.$part."'> ".$i.$part."</option>";
							}
							?>
						</select>
					</div>
					<div class="col-xs-12 col-md-2 col-md-offset-3">
						<button data-step="one" class="button submit"><font><font 									class="goog-text-highlight">Continue</font></font></button>
					</div>
				</div>
				</form>
				<!-- End Step One -->
				<!-- Step Two -->
				<form class="form-horizontal step_two hidden">
					<!-- How Often -->
					<div class="row">
						<div class="col-xs-12 col-md-4" >
							<h3>How Often ?</h3>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-md-4">
							<div class="input-addon">
								<span><i class="fa fa-refresh fa-1x"></i></span>
							</div>

							<select class="form-control how_often" placeholder="How Often"
							        class="how_often" name="how_often" style="height: 45px" >
								<option data-price="0" value="once"> One Time </option>
								<option data-price="50" value="season"> Next Season</option>
							</select>
						</div>
					</div>
					<!-- End How Often -->
					<!-- Extras -->
					<div class="row">
						<div class="col-xs-12 col-md-4" >
							<h3>Extras ?</h3>
						</div>
					</div>
					<div class="row extras">
						<div class="col-xs-12">
							<div class="extra" data-price="20" data-id="1">
								<div class="extra-icon">
									<span class="icon"><i data-icon="fa-caret-square-o-down" class="fa fa-caret-square-o-down
									fa-1x"></i></span>
								</div>
								<div class="extra-text">
									Tier storage
								</div>
							</div>
							<div class="extra" data-price="20"  data-id="2">
								<div class="extra-icon">
									<span class="icon"><i data-icon="fa-recycle" class="fa fa-recycle fa-1x"></i></span>
								</div>
								<div class="extra-text">
									Tier recycling
								</div>
							</div>

							<div class="extra" data-price="10"  data-id="3">
								<div class="extra-icon">
									<span class="icon"><i data-icon="fa-hand-grab-o" class="fa fa-hand-grab-o fa-1x"></i></span>
								</div>
								<div class="extra-text">
									Rim cleaning
								</div>
							</div>

							<div class="extra" data-price="35"  data-id="4">
								<div class="extra-icon">
									<span class="icon"><i data-icon="fa-wrench" class="fa fa-wrench fa-1x"></i></span>
								</div>
								<div class="extra-text">
									Rim repair
								</div>
							</div>

							<div class="extra" data-price="40"  data-id="5">
								<div class="extra-icon">
									<span class="icon"><i data-icon="fa-car" class="fa fa-car fa-1x"></i></span>
								</div>
								<div class="extra-text">
									Car rental
								</div>
							</div>

						</div>
					</div>
					<!-- End Extras -->
					<div class="row" style="margin-top: 20px">
						<div class="col-xs-8">
							<div class="row">
								<div class="col-xs-12 col-md-1 pull-right">
									<a class="back" href="#">Back&nbsp;</a>
								</div>
							</div>
						</div>
						<div class="col-xs-12 col-md-4 pull-right">
							<button  data-step="two" class="button submit"><font><font 									class="goog-text-highlight">Continue</font></font></button>
						</div>
					</div>
				</form>
				<!-- End Step Two -->
				<!-- Step Three -->
				<form class="form-horizontal step_three hidden">
					<div class="row">
						<div class="col-xs-12" >
							<h3>Where to do the service</h3>
						</div>
					</div>
					<div class="row sep">
						<div class="col-md-5 col-xs-12">
							<div class="input-addon">
								<span><i class="fa fa-user fa-1x"></i></span>
							</div>
							<input type="text" name="name" id="name" class="form-control " placeholder=" Name"
							       required=""  >
						</div>
						<div class="col-md-5 col-xs-12 sep">
							<div class="input-addon">
								<span><i class="fa fa-envelope fa-1x"></i></span>
							</div>
							<input type="text" name="email" id="email" class="form-control " placeholder=" Email"
							       required=""  >
						</div>
					</div>
					<div class="row sep" >
						<div class="col-md-5 col-xs-12">
							<div class="input-addon">
								<span><i class="fa fa-phone fa-1x"></i></span>
							</div>
							<input type="text" name="phone" id="phone" class="form-control " placeholder=" Phone Number"
							       required=""  >
						</div>
						<div class="col-md-5 col-xs-12 sep">
							<div class="input-addon">
								<span><i class="fa fa-map-marker fa-1x"></i></span>
							</div>
							<input type="text" name="address" id="address" class="form-control " placeholder=" Address"
							       required=""  >
						</div>
					</div>
					<div class="row sep" sep>
						<div class="col-md-5 col-xs-12">
							<div class="input-addon">
								<span><i class="fa fa-map-marker fa-1x"></i></span>
							</div>
							<input type="text" name="zip2" id="zip2" class="form-control " placeholder=""
							       required="required" disabled="disabled" >
						</div>
						<div class="col-md-5 col-xs-12">
							<div class="input-addon">
								<span>%</span>
							</div>
							<input type="text" name="coupon" id="coupon" class="form-control " placeholder="Coupon"
							         maxlength="5">
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-md-10 col-lg-10">
							<textarea style="width:100%; height:50px" placeholder="write any notes about your order here" id="order_note"></textarea>
						</div>
					</div>
					<div class="row" style="margin-top: 20px">
						<div class="col-xs-8">
							<div class="row">
								<div class="col-xs-12 col-md-1 pull-right">
									<a class="back" href="#">Back&nbsp;</a>
								</div>
							</div>
						</div>
						<div class="col-xs-12 col-md-4 pull-right">
							<button  data-step="three" class="button submit"><font><font 									class="goog-text-highlight">Continue</font></font></button>
						</div>
					</div>
				</form>
				<!-- End Step Three -->
				<!-- Step Four -->
				<form class="form-horizontal step_four hidden">
					<div class="row">
						<div class="col-xs-12 col-md-11 summary">
							<div class="row">
								<div class="col-xs-12">
									<h3 class="order_header">Your Order</h3>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-12 col-md-6">
									<h5><strong>Date:</strong> <span class="small order_date">20/04/2016</span></h5>
								</div>
								<div class="ol-xs-12 col-md-6">
									<h5><strong>Time:</strong> <span class="small order_time">4:00 PM</span></h5>
								</div>
							</div>
							<div class="row">
								<div class="ol-xs-12 col-md-6">
									<h5><strong>Extras:</strong> <span class="selected_extras small"></span></h5>
								</div>
							</div>
							<div class="row">
								<div class="ol-xs-12 col-md-6">
									<h5><strong>Name:</strong> <span class="order_name small">Sherif
											Mesallam</span></h5>
								</div>
							</div>
							<div class="row">
								<div class="ol-xs-12 col-md-6">
									<h5><strong>Email:</strong> <span class="order_email small">Sherif@mail.com</span></h5>
								</div>
								<div class="ol-xs-12 col-md-6">
									<h5><strong>Phone:</strong> <span class="order_phone small">224234234</span></h5>
								</div>
							</div>
							<div class="row">
								<div class="ol-xs-12 col-md-6">
									<h5><strong>Address:</strong> <span class="order_address small">karataka 65
										</span></h5>
								</div>
								<div class="ol-xs-12 col-md-6">
									<h5><strong>Postal Code:</strong> <span class="order_zip small">15365
										</span></h5>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-12">
									<h5><strong>Order Total: &euro;</strong> <span class="order_total small"> 100
										</span></h5>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-12">
									<h5><strong>Order Note: </strong> <span class="order_note small"> </span></h5>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-12">
									<h3 class="order_header">Choose Your Payment Method</h3>
								</div>
							</div>
							<div class="row">
								<div class="ol-xs-12 col-md-6">
									<input type="radio" name="payment" value="1" class="payment"> <img
										src="{{asset('webapp/images/paypal.png')}}">
									Paypal
								</div>
								<div class="ol-xs-12 col-md-6">
									<input type="radio" checked="checked"  value="2" name="payment" class="payment">
									<img
										src="{{asset('webapp/images/bank.png')}}"> Debit
								</div>
							</div>
							{{--
							<div class="row">
								<div class="ol-xs-12 col-md-6">
									<input type="radio" name="payment" value="3" class="payment" > <img
										src="{{asset('webapp/ages/cards.png')}}">
									Credit Card
								</div>
							</div>
							--}}
							<div class="payment_info row bank_payment">
								<div class="col-xs-12">
									<p>
										How it works: We prefer payment only after cleaning a. That means for you that you bear no risk and can be convinced only by the high quality of services.
									</p><br>
								</div>

								<div class="row bank_payment_row">
									<div class="col-xs-6">
										<h4>Owner:</h4>
									</div>
									<div class="ol-xs-12 col-md-6">
										<input type="text" class="form-control " name="accountName" id="accountName"
										       required="required">
									</div>
								</div>
								<div class="row bank_payment_row">
									<div class="ol-xs-12 col-md-6">
										<h4>IBAN:</h4>
									</div>
									<div class="ol-xs-12 col-md-6">
										<input type="text" class="form-control " name="accountIBAN"
										       id="accountIBAN" required="required">
									</div>
								</div>

								<div class="row bank_payment_row">
									<div class="ol-xs-12 col-md-6">
										<h4>BIC:</h4>
									</div>
									<div class="ol-xs-12 col-md-6">
										<input type="text" class="form-control " name="accountBIC" ID="accountBIC"
										       required="required">
									</div>
								</div>

							</div>
							<div class="payment_info row paypal_payment hidden">
								<div class="col-xs-12">
									<p>
										How it works: Click on the button "PayPal". Then a window opens. There you can log in to your PayPal account and make the payment.
									</p><br>
								</div>
							</div>
							<div class="row" style="margin-top: 20px">
								<div class="col-xs-12">
									<input type="checkbox" id="accept"> I accept to make this payment using my bank
									account, I accept the <a href="#">Terms & Conditions</a>
								</div>
							</div>
							<div class="row" style="margin-top: 20px">
								<div class="col-xs-8">
									<div class="row">
										<div class="col-md-1 pull-right">
											<a class="back" href="#">Back&nbsp;</a>
										</div>
									</div>
								</div>
								<div class="col-xs-12 col-md-4 pull-right">
									<button  disabled data-step="four" id="create_order_button" class="button submit final" 									class="goog-text-highlight"  style="background-color: rgb(189, 189, 189)
									">Continue</button>
								</div>
							</div>
						</div>
					</div>
				</form>
				<!-- End Step Four -->
			</div>
		</div>

	</div>
	<!-- End Main Container -->


	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	<!-- Latest compiled and minified select JavaScript -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/js/bootstrap-select.min.js"></script>
	<script src="{{asset('webapp/js/picker/picker.js')}}"></script>
	<script src="{{asset('webapp/js/picker/picker.date.js')}}"></script>
	<script src="{{asset('webapp/js/picker/picker.time.js')}}"></script>
	<script src="{{asset('webapp/js/smoke.min.js')}}"></script>
	<script src="{{asset('webapp/js/app.js')}}"></script>

</body>
</html>



<script type="text/javascript">

	var paypal_route = "{{route('paypal')}}"
	var api_route = "{{route('APISaveOrder')}}"
	$(document).ready(function(e){
		$('#date').pickadate()


		$('.extra').on('click', function(e){
			app.extra_click($(this));
			app.update_price();
		});
		$('.button').on('click',function(e){
			var step = $(this).attr('data-step');
			switch (step)
			{
				case "one":
					app.handle_steps.one(e);
					break;
				case "two":
					app.handle_steps.two(e);
					break;
				case "three":
					app.handle_steps.three(e);
					break;
				case "four":
					app.handle_steps.four(e);
					break;
			}
			app.update_price();
		});
		$('.back').on('click', function (e) {
			app.handle_steps.back(e);
		})
		$('.how_often').on('change',function(){
			app.update_price();
		});
		$('.bs-searchbox > input').on('change',function(){

		});
		$('.payment').on('click',function(){
			$('.payment_info').addClass('hidden');
			if($('input[name="payment"]:checked').val() == 1)
			{
				$('#accountName').removeAttr('required')
				$('#accountIBAN').removeAttr('required')
				$('#accountBIC').removeAttr('required')
				$(".paypal_payment").removeClass('hidden');
			}
			else if($('input[name="payment"]:checked').val() == 2)
			{
				$('#accountName').attr('required')
				$('#accountIBAN').attr('required')
				$('#accountBIC').attr('required')
				$(".bank_payment").removeClass('hidden');
			}
		})

		$('.selectpicker').selectpicker({
			size: 20,
			style: "bootstrap-select-custom"

		});
		$('.selectpicker').on('hidden.bs.select', function (e) {
			$('#zip2').val($('.selectpicker').val());
			app.update_price();
		});

		$('#accept').on('change',function(e){
			if($('#accept:checked').length > 0 )
			{
				$('.final').prop('disabled',false);
				$('.final').css('background-color',"#00aeef");
			}
			else
			{
				$('.final').prop('disabled',true);
				$('.final').css('background-color',"rgb(189, 189, 189)");
			}
		});

	});


</script>


</body>
</html>