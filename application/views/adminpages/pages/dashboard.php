<!-- Page content -->
<div  class="container-fluid my-5 px-4 py-4 rounded-lg bg-light">
    <!-- Dashboard heading -->
    <div class="dashb-heading col-sm-6">
        <h1>Dashboard</h1>
        <p>Welcome to the Dashboard admin page</p>   
    </div>

    <!-- Charts -->
    <!-- Note to gaby: remove mo yung container later on -->
    <div class="row mx-3">
        <!-- Bar chart -->
        <div class="col-md-6 py-3">
            <div class="chart card">
                <div class="dashb-barchart card-body px-4 py-4">
                    <h2>Active users on site</h2>
                    <canvas class="py-3" id="chBar1" height="155"></canvas>
                </div>
            </div>
        </div>

        <!-- Line chart --> 
        <div class="col-md-6 py-3">
            <div class="chart card">
                <div class="dashb-barchart card-body px-4 py-4">
                    <h2>Transaction Count</h2>
                    <canvas class="py-3" id="chLine" height="155"></canvas>
                </div>
            </div>
        </div>
    </div>

    <div class="row mx-3">
        <!-- Pie chart -->
        <div class="col-md-5 py-3">
            <div class="chart card">
                <div class="dashb-barchart card-body py-4">
                    <h2 class="mb-4">Services/Products Count</h2>
                    <canvas id="chDonut1" height="155"></canvas>
                </div>
            </div>
        </div>

        <!-- Bar chart -->
        <div class="col-md-7 py-3">
            <div class="chart card">
                <div class="dashb-barchart card-body px-4 py-4">
                    <h2>Ping Count</h2>
                    <canvas class="py-3" id="chBar2" height="155"></canvas>
                </div>
            </div>
        </div>

    </div>

</div>
<!-- end of page content -->


