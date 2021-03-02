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
            <tbody id="tbody">
            <script>
                 var temp =  localStorage.getItem('transactioncountservice');
                
                    for (var i = 0; i <= temp; i++){
                        
                    var table1 =  document.getElementById('tbody');
                   
                    
                    var tr = document.createElement('tr');
                    var th1 = document.createElement('th');
                    var td1 = document.createElement('td');
                    var td2 = document.createElement('td');
                    var td3 = document.createElement('td');
                    var td4 = document.createElement('td');
                    var td5 = document.createElement('td');

                        var th1text = document.createTextNode(""+(i+1));
                        var td1text = document.createTextNode('Test Value');
                        var td2text = document.createTextNode('Test Value');
                        var td3text = document.createTextNode('Test Value');
                        var td4text = document.createTextNode('Test Value');
                        var td5text = document.createTextNode('Test Value');

                    th1.appendChild(th1text);
                    td1.appendChild(td1text);
                    td2.appendChild(td2text);
                    td3.appendChild(td3text);
                    td4.appendChild(td4text);
                    td5.appendChild(td5text);

                    tr.appendChild(th1);
                    tr.appendChild(td1);
                    tr.appendChild(td2);
                    tr.appendChild(td3);
                    tr.appendChild(td4);
                    tr.appendChild(td5);
                    

                    table1.appendChild(tr);
                    }
                    
                </script>
                
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
            <tbody id="tbody1">
            <script>
                 var temp =  localStorage.getItem('transactioncountproduct');
                
                    for (var i = 0; i <= temp; i++){
                        
                        var table2 = document.getElementById('tbody1');
                    
                        
                        var tr = document.createElement('tr');
                        var th1 = document.createElement('th');
                        var td1 = document.createElement('td');
                        var td2 = document.createElement('td');
                        var td3 = document.createElement('td');
                        var td4 = document.createElement('td');
                        var td5 = document.createElement('td');

                        var th1text = document.createTextNode(""+(i+1));
                        var td1text = document.createTextNode('Test Value');
                        var td2text = document.createTextNode('Test Value');
                        var td3text = document.createTextNode('Test Value');
                        var td4text = document.createTextNode('Test Value');
                        var td5text = document.createTextNode('Test Value');

                        th1.appendChild(th1text);
                        td1.appendChild(td1text);
                        td2.appendChild(td2text);
                        td3.appendChild(td3text);
                        td4.appendChild(td4text);
                        td5.appendChild(td5text);

                        tr.appendChild(th1);
                        tr.appendChild(td1);
                        tr.appendChild(td2);
                        tr.appendChild(td3);
                        tr.appendChild(td4);
                        tr.appendChild(td5);
                        

                        table2.appendChild(tr);
                    }
                    
                </script>
            </tbody>
        </table>
    </div>
</div>
<!-- end of page content -->