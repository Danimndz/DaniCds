<!DOCTYPE html>
<html>
	<head>
		<title>Shopping Cart</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/bootstrap.min2.css"/>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/custom2.css"/>		
		<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/stars.css"/>	
	</head>

	<body>
		
		<nav class="navbar">
			<div class="container">
				<a class="navbar-brand" href="<?=base_url()?>P2ventas">Back to store</a>
				<div class="navbar-right">
					<div class="container minicart"></div>
				</div>
			</div>
		</nav>
		
		<div class="container-fluid breadcrumbBox text-center">
			<ol class="breadcrumb">
				<li class="active">Order</a></li>
			</ol>
		</div>
			<div class="col-md-7 col-sm-12 text-left">
				<ul>
					<li class="row list-inline columnCaptions">
						<span>QTY</span>
						<span>ITEM</span>
						<span>Rating</span>	
						<span>Price</span>
					</li>
					<?php foreach($discos as $disco){ ?>
						<li class="row">
							<span class="quantity"><?=$disco['Cantidad']?></span>
							<span class="itemName"><?=$disco['Album']?></span>
							<span class="popbtn"><a class="arrow"></a></span>
							<span class="price">$<?=$disco['Precio']?></span>
						</li>
					<?php } ?>
					<li class="row totals">
						<span class="itemName">Total:</span>
						<span class="price">$<?=$total?></span>
						<span class="order"> <a class="text-center" href="<?=base_url('P2shoppingController/ventasDel')?>">ORDER</a></span>
					</li>
				</ul>
			</div>

		</div>
		<section class='rating-widget'>
  
 			 <!-- Rating Stars Box -->
				<div class='rating-stars text-center'>
					<ul id='stars'>
					<li class='star' title='Poor' data-value='1'>
						<i class='fa fa-star fa-fw'></i>
					</li>
					<li class='star' title='Fair' data-value='2'>
						<i class='fa fa-star fa-fw'></i>
					</li>
					<li class='star' title='Good' data-value='3'>
						<i class='fa fa-star fa-fw'></i>
					</li>
					<li class='star' title='Excellent' data-value='4'>
						<i class='fa fa-star fa-fw'></i>
					</li>
					<li class='star' title='WOW!!!' data-value='5'>
						<i class='fa fa-star fa-fw'></i>
					</li>
					</ul>
				</div>
			</section>

		<!-- The popover content -->

		<div id="popover" style="display: none">
			<a href="#"><span class="glyphicon glyphicon-pencil"></span></a>
			<a href="#"><span class="glyphicon glyphicon-remove"></span></a>
		</div>
		
		<!-- JavaScript includes -->

		<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script> 
		<script src="<?php echo base_url()?>assets/js/bootstrap.min2.js"></script>
		<script src="<?php echo base_url()?>assets/js/customjs2.js"></script>

	</body>
</html>

<script>
	$(document).ready(function(){
	
	/* 1. Visualizing things on Hover - See next part for action on click */
	$('#stars li').on('mouseover', function(){
		var onStar = parseInt($(this).data('value'), 10); // The star currently mouse on
	
		// Now highlight all the stars that's not after the current hovered star
		$(this).parent().children('li.star').each(function(e){
		if (e < onStar) {
			$(this).addClass('hover');
		}
		else {
			$(this).removeClass('hover');
		}
		});
		
	}).on('mouseout', function(){
		$(this).parent().children('li.star').each(function(e){
		$(this).removeClass('hover');
		});
	});
	
	
	/* 2. Action to perform on click */
	$('#stars li').on('click', function(){
		var onStar = parseInt($(this).data('value'), 10); // The star currently selected
		var stars = $(this).parent().children('li.star');
		
		for (i = 0; i < stars.length; i++) {
		$(stars[i]).removeClass('selected');
		}
		
		for (i = 0; i < onStar; i++) {
		$(stars[i]).addClass('selected');
		}
		
		// JUST RESPONSE (Not needed)
		var ratingValue = parseInt($('#stars li.selected').last().data('value'), 10);
		var msg = "";
		if (ratingValue > 1) {
			msg = "Thanks! You rated this " + ratingValue + " stars.";
		}
		else {
			msg = "We will improve ourselves. You rated this " + ratingValue + " stars.";
		}
		responseMessage(msg);
		
	});
	
	
	});


	function responseMessage(msg) {
	$('.success-box').fadeIn(200);  
	$('.success-box div.text-message').html("<span>" + msg + "</span>");
	}
</script>



