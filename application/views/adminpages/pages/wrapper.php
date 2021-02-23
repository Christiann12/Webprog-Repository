<div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
    <div class="sidebar-heading">ODMS Enterprise</div>
    <div class="list-group list-group-flush">
        <a href="#" class="list-group-item list-group-item-action bg-light">Dashboard</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Transactions</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Pings</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Support</a>
    </div>
    </div>
    <!-- /#sidebar-wrapper -->

   <!-- Admin Navbar -->
    <div id="page-content-wrapper">

        <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
            <button class="btn btn-primary" id="menu-toggle">Toggle Menu</button>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                <a class="nav-link" href="#">Sign Out <span class="sr-only">(current)</span></a>
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

  

