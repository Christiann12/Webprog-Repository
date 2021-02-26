<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!--Page Content -->
  <div class="supportbox container my-5 card py-0 py-sm-1 py-md-3 py-lg-5 px-3 px-lg-5">
    <h1 class="header">Want to report something to us?</h1>
    <p class="lead mb-4" >You can also send your concern to our email (companyname@domain.com)
        or through our phone number (09xx-xxx-xxxx).</p>
  </div>
</div>
    <!--Forms Section -->
        <form>
        <div class="support container my-5 card py-5 px-3 px-lg-5" shadow>
        <h1 class="text-center mb-3">Form</h1>
        <div class="form-row">
            <div class="form-group col-md-6 px-3">
                <label for="inputFname">First Name:</label>
                <input type="text" class="form-control" id="inputFname" placeholder="">
            </div>
            <div class="form-group col-md-6 px-3">
                <label for="inputLname">Last Name:</label>
                <input type="text" class="form-control" id="inputLname" placeholder="">
            </div>
            <div class="form-group col-md-6 px-3">
                <label for="inputEmail">Email:</label>
                <input type="email" class="form-control" id="inputEmail" placeholder="">
            </div>
            <div class="form-group col-md-6 px-3">
                <label for="inputPnumber">Phone Number:</label>
                <input type="number" class="form-control" id="inputPnumber" placeholder="">
            </div>
            <div class="form-group col-md-6 px-3"> 
                <label for="inputCname">Company Name:</label>
                <input type="text" class="form-control" id="inputCname" placeholder="">
            </div>
            <div class="form-group col-md-6 px-3"> 
                <label for="StreetAddress">Street Address:</label>
                 <input type="text" class="form-control" id="StreetAddress" placeholder="">
            </div>
            <div class="form-group col-md6 px-3"> 
                <label for="inputCity">City:</label>
                <input type="text" class="form-control" id="inputCity" placeholder="">
            </div>
            <div class="form-group col-md-4 px-3"> 
                <label for="inputStateProvince">State/Province:</label>
                <select id="text" class="form-control">
	                <option selected>Select-Here</option>
	                <option>...</option>
	            </select>
            </div>
            <div class="form-group col-md4 px-3">
                <label for="inputPostalCode">Postal Code:</label>
                <input type="number" class="form-control" id="inputPostalCode" placeholder="">
            </div>
            <div class="form-group col-md-4 px-3">
                <label for="inputSubject">Subject:</label>
                <input type="text" class="form-control" id="inputSubject" rows="3" placeholder="">
            </div>
            <div class="form-group col-md-12 px-3">
                <label for="inputMessage">Message:</label>
                <textarea class="form-control" id="inputMessage" rows="3"></textarea>
            </div>
            <div class="col-12">
        <center>
            <button type="submit" class="btn btn-primary">Submit Form</button>
        </center>
    </div>
        </div>
       
</div>
</form>
</div>