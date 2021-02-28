<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
  	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>ODMS Website</title>
	<link rel="shortcut icon" href="<?php echo base_url(); ?>application/assets/images/favicon.ico">
	<!-- Bootstrap 4.5 CSS -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>application/assets/css/bootstrap.min.css">
	<!-- Style CSS -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>application/assets/css/headerandfooterstyle.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>application/assets/css/homepage.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>application/assets/css/transactionStyle.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>application/assets/css/faqs.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>application/assets/css/tipsStyle.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>application/assets/css/support.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>application/assets/css/ping.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>application/assets/css/FAStyle.css">
	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800&family=Roboto&display=swap" rel="stylesheet">
</head>
<body>

	<!-- Top Bar -->
	<div class="top-bar">
		<div class="container">
			 <div class="row">
				<div class="text col-md-6 col-sm-6 col-6 text-left">
					<p><a href="#">ODMS Enterprise</a></p>
				   
			   </div>
			   
			   <div class="col-md-6 col-sm-6 col-6 text-right">
				   <img src="<?php echo base_url(); ?>application/assets/images/logo.jpg" alt="logo" width="50px" height="45px" class="float-right">
			  </div>
			  
			 </div>
			
		</div>
		
	</div>


	<!-- End Top Bar -->


	<!-- Navigation -->

	<nav class="navbar navbar-light navbar-expand-lg border border-dark bar">
		<div class="container">
			<p class="title"></p>
			<button class="navbar-toggler " id="toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
				<span class="navbar-toggler-icon">

				</span>
			</button>

			<div class="collapse navbar-collapse " id="navbarResponsive">
				
				<ul class="navbar-nav nav-fill w-100 list">
					<li class="nav-item"  onclick="setActive(1)"><a href="<?php echo base_url() ?>main/index/HomePage" class="nav-link" id="element1">Home</a></li>
					<li class="nav-item"  onclick="setActive(2)"><a href="<?php echo base_url() ?>main/index/FAQ" class="nav-link" id="element2">FAQs</a></li>
					<li class="nav-item" onclick="setActive(3)"><a href="<?php echo base_url() ?>main/index/FinancialAssistance" class="nav-link" id="element3">Financial Assistance</a></li>
					<li class="nav-item" onclick="setActive(4)"><a href="<?php echo base_url() ?>main/index/Ping" class="nav-link" id="element4">Ping</a></li>
					<li class="nav-item" onclick="setActive(5)"><a href="<?php echo base_url() ?>main/index/Transaction" class="nav-link" id="element5">Transaction</a></li>
					<li class="nav-item" onclick="setActive(6)"><a href="<?php echo base_url() ?>main/index/Tips" class="nav-link" id="element6">Tips</a></li>
					<li class="nav-item" onclick="setActive(7)"><a href="<?php echo base_url() ?>main/index/Support" class="nav-link" id="element7">Support</a></li>
				</ul>
			</div>
		</div>
	</nav>
