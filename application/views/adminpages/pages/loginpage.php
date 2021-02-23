<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>ODMS Website</title>
        <link rel="shortcut icon" href="<?php echo base_url(); ?>application/assets/images/favicon.ico">
        <!-- Bootstrap 4.5 CSS -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>application/assets/css/bootstrap.min.css">

        <!-- Custom styles for this template -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>application/assets/css/loginpage.css">

        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800&family=Roboto&display=swap" rel="stylesheet">
    </head>

    <body>
        
    
        <div class="container mainbody">
            <div class="row">
                <div class="col-12 col-lg-6 leftside mt-5">
                    <center>
                        <img src="<?php echo base_url(); ?>application/assets/images/logo.jpg" alt="logo"class="px-auto h-100 w-100 my-4">
                        <h1>
                            ODMS Enterprise
                        </h1>
                    </center>
                </div>
                <div class="col-12 col-lg-6 rightside card rounded-lg px-5 mb-5 mb-sm-5 mb-md-5 mb-lg-0">
                    <h4 class="text-center">
                        Welcome to ODMS Enterprise
                    </h4>
                    <form class="my-5 loginform  px-0 px-sm-3 px-md-5 px-lg-5">
                        <div class="form-group">
                            <label for="EmailInput">Email address</label>
                            <input type="email" class="form-control" id="EmailInput" aria-describedby="emailHelp" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <label for="PasswordInput">Password</label>
                            <input type="password" class="form-control" id="PasswordInput" placeholder="Password">
                        </div>
                        <center>
                            <button type="button" class="btn mt-3 px-4 py-2" onclick="window.location.href='<?php echo base_url(); ?>admin/index/dashboard/true'">Submit</button>
                        </center>
                    </form>
                </div>
            </div>
        </div>
    
    
    
    
    <!-- jQuery -->
	<script src="<?php echo base_url(); ?>application/assets/js/jquery-3.5.1.min.js"></script>
	<!-- Bootstrap 4.5 JS -->
	<script src="<?php echo base_url(); ?>application/assets/js/bootstrap.min.js"></script>
	<!-- Popper JS -->
	<script src="<?php echo base_url(); ?>application/assets/js/popper.min.js"></script>
	<!-- Font Awesome -->
	<script src="<?php echo base_url(); ?>application/assets/js/all.min.js"></script>
    <!-- Font Awesome -->
	<script src="<?php echo base_url(); ?>application/assets/js/all.min.js"></script>
</body>

</html>



