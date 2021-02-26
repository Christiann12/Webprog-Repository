<!-- Page content -->
<div class="container-fluid my-5 px-4 py-4 rounded-lg bg-light">
    <div class="row">
        <!-- Transaction heading -->
        <div class="transheading col-sm-6">
            <h1>Transaction</h1>
            <p>Welcome to the Transaction admin page</p>
            
        </div>

        <!-- Pagination -->
        <div class="transadmin-pagination col-sm-6">
            <button class="btn btn-secondary mx-4" onclick="displayTables('servicestable')" type="button">Services</button>
            <button class="btn btn-secondary mx-4" onclick="displayTables('productstable')" type="button">Products</button>
        </div>
    </div>

    <!-- Services Table -->
    <div class="my-3" id="servicestable">
        <table class="table table-bordered table-striped table-responsive-lg">
            <thead class="thead-odms">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Company Name</th>
                    <th scope="col">Contact Info</th>
                    <th scope="col">Availed Service</th>
                    <th scope="col">Amount</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Tony Stark</td>
                    <td>Company</td>
                    <td>company@domain.com</td>
                    <td>Service 1</td>
                    <td>XXXXXX</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Peter Parker</td>
                    <td>Company</td>
                    <td>company@domain.com</td>
                    <td>Service 2</td>
                    <td>XXXXXX</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Wanda Maximoff </td>
                    <td>Company</td>
                    <td>company@domain.com</td>
                    <td>Service 3</td>
                    <td>XXXXXX</td>
                </tr>
                <tr>
                    <th scope="row">4</th>
                    <td>Diana Prince</td>
                    <td>Company</td>
                    <td>company@domain.com</td>
                    <td>Service 4</td>
                    <td>XXXXXX</td>
                </tr>
                <tr>
                    <th scope="row">5</th>
                    <td>Max Caulfield</td>
                    <td>Company</td>
                    <td>company@domain.com</td>
                    <td>Service 5</td>
                    <td>XXXXXX</td>
                </tr>
                <tr>
                    <th scope="row">6</th>
                    <td>Bucky Barnes</td>
                    <td>Company</td>
                    <td>company@domain.com</td>
                    <td>Service 6</td>
                    <td>XXXXXX</td>
                </tr>
                <tr>
                    <th scope="row">7</th>
                    <td>Steve Rogers</td>
                    <td>Company</td>
                    <td>company@domain.com</td>
                    <td>Service 7</td>
                    <td>XXXXXX</td>
                </tr>
                <tr>
                    <th scope="row">8</th>
                    <td>Loki Laufeyson</td>
                    <td>Company</td>
                    <td>company@domain.com</td>
                    <td>Service 8</td>
                    <td>XXXXXX</td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- Products Table -->
    <div class="my-3" id="productstable">
        <table class="table table-bordered table-striped table-responsive-lg">
            <thead class="thead-odms">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Company Name</th>
                    <th scope="col">Contact Info</th>
                    <th scope="col">Availed Product</th>
                    <th scope="col">Amount</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Tony Stark</td>
                    <td>Company</td>
                    <td>company@domain.com</td>
                    <td>Product 1</td>
                    <td>XXXXXX</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Peter Parker</td>
                    <td>Company</td>
                    <td>company@domain.com</td>
                    <td>Product 2</td>
                    <td>XXXXXX</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Wanda Maximoff </td>
                    <td>Company</td>
                    <td>company@domain.com</td>
                    <td>Product 3</td>
                    <td>XXXXXX</td>
                </tr>
                <tr>
                    <th scope="row">4</th>
                    <td>Diana Prince</td>
                    <td>Company</td>
                    <td>company@domain.com</td>
                    <td>Product 4</td>
                    <td>XXXXXX</td>
                </tr>
                <tr>
                    <th scope="row">5</th>
                    <td>Max Caulfield</td>
                    <td>Company</td>
                    <td>company@domain.com</td>
                    <td>Product 5</td>
                    <td>XXXXXX</td>
                </tr>
                <tr>
                    <th scope="row">6</th>
                    <td>Bucky Barnes</td>
                    <td>Company</td>
                    <td>company@domain.com</td>
                    <td>Product 6</td>
                    <td>XXXXXX</td>
                </tr>
                <tr>
                    <th scope="row">7</th>
                    <td>Steve Rogers</td>
                    <td>Company</td>
                    <td>company@domain.com</td>
                    <td>Product 7</td>
                    <td>XXXXXX</td>
                </tr>
                <tr>
                    <th scope="row">8</th>
                    <td>Loki Laufeyson</td>
                    <td>Company</td>
                    <td>company@domain.com</td>
                    <td>Product 8</td>
                    <td>XXXXXX</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<!-- end of page content -->