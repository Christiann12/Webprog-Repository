<div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="border-right" id="sidebar-wrapper">
    <div class="sidebar-heading mb-3">
        <center>
            <img src="<?php echo base_url(); ?>application/assets/images/logo.jpg" alt="logo"class="px-auto h-100 w-100 my-4">
        </center>
        <p class="text-center">
            ODMS Enterprise
        </p>
    </div>
    <div class="list-group list-group-flush">
    
        <a href="<?php echo base_url(); ?>admin/index/dashboard/true" class="list-group-item list-group-item-action mt-1 active" onclick="setActiveAdmin(1)" id="elementadmin1">Dashboard <i class="fas fa-chevron-right float-right"></i> </a>
        <a href="<?php echo base_url(); ?>admin/index/transactionadmin/true" class="list-group-item list-group-item-action mt-1" onclick="setActiveAdmin(2)" id="elementadmin2">Transactions  <i class="fas fa-chevron-right float-right"></i></a>
        <a href="<?php echo base_url(); ?>admin/index/pingadmin/true" class="list-group-item list-group-item-action mt-1" onclick="setActiveAdmin(3)" id="elementadmin3">Pings <i class="fas fa-chevron-right float-right"></i></a>
        <a href="<?php echo base_url(); ?>admin/index/supportadmin/true" class="list-group-item list-group-item-action mt-1" onclick="setActiveAdmin(4)" id="elementadmin4">Support <i class="fas fa-chevron-right float-right"></i></a>
    </div>
    </div>
    <!-- /#sidebar-wrapper -->

   <!-- Admin Navbar -->
    <div id="page-content-wrapper">

        <nav class="navbar navbar-expand-lg navbar-light bg-light rounded-lg mt-3">
            <button class="btn border-dark" id="menu-toggle"><i class="fas fa-bars"></i></button>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-sign-out-alt"></i></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                <a class="nav-link" href="<?php echo base_url(); ?>admin/index/loginpage">Sign Out <span class="sr-only">(current)</span></a>
                </li>
            </ul>
            </div>
        </nav>
        <!-- Page content -->
        <?php include $page.".php";?>
        <!-- end of page content -->
    </div>
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->

  

