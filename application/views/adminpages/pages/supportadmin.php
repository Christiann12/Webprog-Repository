<!-- Page content -->
<div class="container-fluid my-5 px-4 py-4 rounded-lg bg-light">
        <!-- Support Heading heading -->
    <div class="suppheader">
    	<h1>
    		Support
    	</h1>
    		<p>Welcome to the Support Admin Page</p>
    </div>        
    <!-- Support Table -->
    <div class="my-3" id="supptable">
        <table class="table table-bordered table-striped table-responsive-lg">
            <thead class="thead-odms">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Company Name</th>
                    <th scope="col">Contact Number</th>
                    <th scope="col">E-mail Address</th>
                    <th scope="col">Street Address</th>
                    <th scope="col">City Address</th>
                    <th scope="col">Subject</th>
                </tr>
            </thead>
                       <tbody id="tbody">
            <script>
                 var temp =  localStorage.getItem('supportMessagecount');
                
                    for (var i = 0; i <= temp; i++){
                        
                    var table1 =  document.getElementById('tbody');
                   
                    
                    var tr = document.createElement('tr');
                    var th1 = document.createElement('th');
                    var td1 = document.createElement('td');
                    var td2 = document.createElement('td');
                    var td3 = document.createElement('td');
                    var td4 = document.createElement('td');
                    var td5 = document.createElement('td');
                    var td6 = document.createElement('td');
                    var td7 = document.createElement('td');

                        var th1text = document.createTextNode(""+(i+1));
                        var td1text = document.createTextNode('Test Value');
                        var td2text = document.createTextNode('Test Value');
                        var td3text = document.createTextNode('Test Value');
                        var td4text = document.createTextNode('Test Value');
                        var td5text = document.createTextNode('Test Value');
                        var td6text = document.createTextNode('Test Value');
                        var td7text = document.createTextNode('Test Value');

                    th1.appendChild(th1text);
                    td1.appendChild(td1text);
                    td2.appendChild(td2text);
                    td3.appendChild(td3text);
                    td4.appendChild(td4text);
                    td5.appendChild(td5text);
                    td6.appendChild(td6text);
                    td7.appendChild(td7text);



                    tr.appendChild(th1);
                    tr.appendChild(td1);
                    tr.appendChild(td2);
                    tr.appendChild(td3);
                    tr.appendChild(td4);
                    tr.appendChild(td5);
                    tr.appendChild(td6);
                    tr.appendChild(td7);

                    table1.appendChild(tr);
                    }
                    
                </script>
                
            </tbody>
        </table>
    </div>
<!-- end of page content -->