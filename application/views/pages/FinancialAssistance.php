<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!-- Page Content -->
<div class="FAheader text-center my-5 py-5">
	<h1>
		Our Client Companies
	</h1>
</div>


<!-- Company Preview -->
	<div class="container companyPreview card px-0">
    	<div class="row">
        	<div class="col-12 col-sm-12 col-md-12 col-lg-5 px-0 mx-0 companyPreviewitem" style="background-color:red;">
            	<img src="<?php echo base_url(); ?>application/assets/images/company1.png" alt="Company1" class="w-100 h-100 border-rounded">
       		</div>
       	    <div class="col-12 col-sm-12 col-md-12 col-lg-7 px-3 py-3 px-md-5 py-md-5 px-lg-5 py-lg-5 companyPreviewitem test">
            	<h1 style="color: #18191a">
               		Company Name
            	</h1>
            	<p class="text-justify py-5" style="color: #18191a">
                	The requirements/needs of the company goes here. 
            	</p>
            	<div class="row">
            		<button type="button" class="FAbtn1" onclick="window.location.href='<?php echo base_url(); ?>main/index/####'"> Website</button>
            		<button type="button" class="FAbtn2"  onclick="window.location.href='<?php echo base_url(); ?>main/index/Transaction'">Go To Transactions
                    </button>
            	</div>
            </div>
        	</div>
    	</div>
	</div>


    <div class="container companyPreview card px-0" style="background-color: #18191a">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-5 px-0 mx-0 companyPreviewitem" style="background-color:red;">
                <img src="<?php echo base_url(); ?>application/assets/images/company2.png" alt="Company2" class="w-100 h-100 border-rounded">
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-7 px-3 py-3 px-md-5 py-md-5 px-lg-5 py-lg-5 companyPreviewitem test">
                <h1 style="color: #FFEA00">
                    Company Name
                </h1>
                <p class="text-justify py-5"  style="color: #FFEA00">
                    The requirements/needs of the company goes here. 
                </p>
                <div class="row">
                    <button type="button" class="FAbtn1" onclick="window.location.href='<?php echo base_url(); ?>main/index/####'"> Website</button>
                    <button type="button" class="FAbtn2"  onclick="window.location.href='<?php echo base_url(); ?>main/index/Transaction'">Go To Transactions
                    </button>
                </div>
            </div>
            </div>
        </div>
    </div>
<!-- End of Company Preview -->