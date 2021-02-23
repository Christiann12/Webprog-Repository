<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!-- Page content -->
<div>
	<!-- Pagination -->
	<div class="tp-pagination container my-5">
		<center>
			<div class="btn-group" role="group" aria-label="Transaction Pagination">
				<button type="button" id="ourservices" onclick="displayPages('svcs-page')" class="btn btn-secondary">Our Services</button>
				<button type="button" id="ourproducts" onclick="displayPages('prdct-page')" class="btn btn-secondary">Our Products</button>
			</div>
		</center>
	</div>
	<!-- End of Pagination -->

	<!-- Services Page -->
	<div class="serv-page container" id="svcs-page">
		<!-- Avail Services Section -->
		<div class="availservices container my-5 card py-5 px-3 px-lg-5 shadow">
			<div class="col-12">
				<h1 class="mb-3">How to Avail our Services</h1>
			</div>
			<div class="infographic col-12">
				<img src="<?php echo base_url(); ?>application/assets/images/Infographic.jpg" alt="Infographic" class="w-100">
			</div>
		</div>

		<!-- Services Section -->
		<div class="serviceshome container card py-5 px-3 px-lg-5 shadow">
			<h1 class="text-center">
				Our Services
			</h1>
			<div class="row">
			
				<div class="col-12 col-md-6 col-lg-6 serviceitem">
					<img src="<?php echo base_url(); ?>application/assets/images/service1.png" alt="Service" class="w-100 h-100">
					<h4 class="text-center pt-4">
						Service Title
					</h4>
					<P class="text-justify pt-0 pt-md-0 pb-5 px-2">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
					Nullam faucibus laoreet sapien. Etiam luctus justo finibus ipsum lacinia, 
					facilisis blandit erat viverra. Quisque porta odio non mattis porttitor. 
					Fusce finibus accumsan massa, bibendum malesuada nisi. 
					Sed at neque in risus interdum malesuada. Cras et laoreet ex, sed imperdiet diam.
					Cras posuere finibus est ac mollis. Praesent lacus nisl, suscipit et maximus in, 
					vehicula vitae ante. Mauris non ipsum ac leo sodales pretium. Phasellus feugiat nisl urna, 
					non cursus mi ultrices ut.
					</P>
				</div>

				<div class="col-12 col-md-6 col-lg-6 serviceitem">
					<img src="<?php echo base_url(); ?>application/assets/images/service2.png" alt="Service" class="w-100 h-100">
					<h4 class="text-center pt-4">
						Service Title
					</h4>
					<P class="text-justify pt-0 pt-md-0 pb-5 px-2">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
					Nullam faucibus laoreet sapien. Etiam luctus justo finibus ipsum lacinia, 
					facilisis blandit erat viverra. Quisque porta odio non mattis porttitor. 
					Fusce finibus accumsan massa, bibendum malesuada nisi. 
					Sed at neque in risus interdum malesuada. Cras et laoreet ex, sed imperdiet diam.
					Cras posuere finibus est ac mollis. Praesent lacus nisl, suscipit et maximus in, 
					vehicula vitae ante. Mauris non ipsum ac leo sodales pretium. Phasellus feugiat nisl urna, 
					non cursus mi ultrices ut.
					</P>
				</div>

				<div class="col-12 col-md-6 col-lg-6 serviceitem">
					<img src="<?php echo base_url(); ?>application/assets/images/service1.png" alt="Service" class="w-100 h-100">
					<h4 class="text-center pt-4">
						Service Title
					</h4>
					<P class="text-justify pt-0 pt-md-0 pb-5 px-2">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
					Nullam faucibus laoreet sapien. Etiam luctus justo finibus ipsum lacinia, 
					facilisis blandit erat viverra. Quisque porta odio non mattis porttitor. 
					Fusce finibus accumsan massa, bibendum malesuada nisi. 
					Sed at neque in risus interdum malesuada. Cras et laoreet ex, sed imperdiet diam.
					Cras posuere finibus est ac mollis. Praesent lacus nisl, suscipit et maximus in, 
					vehicula vitae ante. Mauris non ipsum ac leo sodales pretium. Phasellus feugiat nisl urna, 
					non cursus mi ultrices ut.
					</P>
				</div>

				<div class="col-12 col-md-6 col-lg-6 serviceitem">
					<img src="<?php echo base_url(); ?>application/assets/images/service2.png" alt="Service" class="w-100 h-100">
					<h4 class="text-center pt-4">
						Service Title
					</h4>
					<P class="text-justify pt-0 pt-md-0 pb-5 px-2">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
					Nullam faucibus laoreet sapien. Etiam luctus justo finibus ipsum lacinia, 
					facilisis blandit erat viverra. Quisque porta odio non mattis porttitor. 
					Fusce finibus accumsan massa, bibendum malesuada nisi. 
					Sed at neque in risus interdum malesuada. Cras et laoreet ex, sed imperdiet diam.
					Cras posuere finibus est ac mollis. Praesent lacus nisl, suscipit et maximus in, 
					vehicula vitae ante. Mauris non ipsum ac leo sodales pretium. Phasellus feugiat nisl urna, 
					non cursus mi ultrices ut.
					</P>
				</div>  
			</div>
		</div>

		<!-- Form Section -->
		<div class="formsection container my-5 card py-5 px-3 px-lg-5 shadow">
			<div class="col-12">
				<h1 class="mb-3">Form</h1>
			</div>
			<div class="col-12 px-4 py-4">
					<form>
						<div class="form-row">
							<div class="form-group col-md-6 px-3">
								<label for="inputFirstName">First Name:</label>
								<input type="text" class="form-control" id="inputFirstName" placeholder="">
							</div>
							<div class="form-group col-md-6 px-3">
								<label for="inputLastName">Last Name:</label>
								<input type="text" class="form-control" id="inputLastName" placeholder="">
							</div>
							<div class="form-group col-md-6 px-3">
								<label for="inputEmail">Email:</label>
								<input type="email" class="form-control" id="inputEmail" placeholder="">
							</div>
							<div class="form-group col-md-6 px-3">
								<label for="inputPhoneNum">Phone Number:</label>
								<input type="number" class="form-control" id="inputPhoneNum" placeholder="">
							</div>
							<div class="form-group col-md-4 px-3">
								<label for="inputCompanyName">Company Name:</label>
								<input type="text" class="form-control" id="inputCompanyName" placeholder="">
							</div>
							<div class="form-group col-md-6 col-md-12 px-3">
								<label for="inputAddress">Company Address:</label>
								<input type="text" class="form-control" id="inputAddress" placeholder="">
							</div>
							<div class="form-group col-md-6 px-3">
								<label for="inputCity">City:</label>
								<input type="text" class="form-control" id="inputCity" placeholder="">
							</div>
							<div class="form-group col-md-4 px-3">
								<label for="inputStateAndProv">State/Province:</label>
								<select id="inputStateAndProv" class="form-control">
									<option selected>Select...</option>
									<option>...</option>
								</select>
							</div>
							<div class="form-group col-md-4 px-3">
								<label for="inputPostalCode">Postal Code:</label>
								<input type="number" class="form-control" id="inputPostalCode" placeholder="">
							</div>
							<div class="form-group col-md-12 px-3">
								<label for="inputService">Service to Avail:</label>
								<select id="inputService" class="form-control">
									<option selected>Select...</option>
									<option>Option 1 (Price: Php)</option>
								</select>
							</div>
							<fieldset class="form-group">
								<div class="row">
									<p class="col-sm-12">Need Financial Assistance?</p>
									<div class="col-sm-10">
										<div class="form-check">
											<input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
											<label class="form-check-label" for="gridRadios1">
												Yes
											</label>
										</div>
										<div class="form-check">
											<input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
											<label class="form-check-label" for="gridRadios2">
												No
											</label>
										</div>
									</div>
									<div class="form-group col-md-6 px-3 py-3">
										<label for="inputCompany">If yes, select a company:</label>
										<select id="inputCompany" class="form-control">
											<option selected>Select...</option>
											<option>...</option>
										</select>
									</div>
									<div class="serviceamount col-md-12 px-3 py-5">
										<h2>Service Cost: (Amount)</h2>
									</div>
								</div>
							</fieldset>
							<div class="col-12">
								<center>
									<button type="submit" class="btn btn-primary">Submit Form</button>
								</center>
							</div>
						</div>
					</form>
			</div>
		</div>
	</div>
	<!-- End of Services Page -->

	<!-- Products Page -->
	<div class="prod-page container" id="prdct-page">
		<!-- Avail Products Section -->
		<div class="availproducts container my-5 card py-5 px-3 px-lg-5 shadow">
			<div class="col-12">
				<h1 class="mb-3">How to Avail our Products</h1>
			</div>
			<div class="infographic col-12">
				<img src="<?php echo base_url(); ?>application/assets/images/Infographic.jpg" alt="Infographic" class="w-100">
			</div>
		</div>

		<!-- Services Section -->
		<div class="productsection container card py-5 px-3 px-lg-5 shadow">
			<h1 class="text-center">
				Our Products
			</h1>
			<div class="row">
			
				<div class="col-12 col-md-6 col-lg-6 productitem">
					<img src="<?php echo base_url(); ?>application/assets/images/flashlight.jpeg" alt="Product" class="w-100 h-100">
					<h4 class="text-center pt-4">
						Product Name
					</h4>
					<P class="text-justify pt-0 pt-md-0 pb-5 px-2">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
					Nullam faucibus laoreet sapien. Etiam luctus justo finibus ipsum lacinia, 
					facilisis blandit erat viverra. Quisque porta odio non mattis porttitor. 
					Fusce finibus accumsan massa, bibendum malesuada nisi. 
					Sed at neque in risus interdum malesuada. Cras et laoreet ex, sed imperdiet diam.
					Cras posuere finibus est ac mollis. Praesent lacus nisl, suscipit et maximus in, 
					vehicula vitae ante. Mauris non ipsum ac leo sodales pretium. Phasellus feugiat nisl urna, 
					non cursus mi ultrices ut.
					</P>
				</div>

				<div class="col-12 col-md-6 col-lg-6 productitem">
					<img src="<?php echo base_url(); ?>application/assets/images/cable.jpeg" alt="Product" class="w-100 h-100">
					<h4 class="text-center pt-4">
						Product Name
					</h4>
					<P class="text-justify pt-0 pt-md-0 pb-5 px-2">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
					Nullam faucibus laoreet sapien. Etiam luctus justo finibus ipsum lacinia, 
					facilisis blandit erat viverra. Quisque porta odio non mattis porttitor. 
					Fusce finibus accumsan massa, bibendum malesuada nisi. 
					Sed at neque in risus interdum malesuada. Cras et laoreet ex, sed imperdiet diam.
					Cras posuere finibus est ac mollis. Praesent lacus nisl, suscipit et maximus in, 
					vehicula vitae ante. Mauris non ipsum ac leo sodales pretium. Phasellus feugiat nisl urna, 
					non cursus mi ultrices ut.
					</P>
				</div>

				<div class="col-12 col-md-6 col-lg-6 productitem">
					<img src="<?php echo base_url(); ?>application/assets/images/fluorescent.jpeg" alt="Product" class="w-100 h-100">
					<h4 class="text-center pt-4">
						Product Name
					</h4>
					<P class="text-justify pt-0 pt-md-0 pb-5 px-2">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
					Nullam faucibus laoreet sapien. Etiam luctus justo finibus ipsum lacinia, 
					facilisis blandit erat viverra. Quisque porta odio non mattis porttitor. 
					Fusce finibus accumsan massa, bibendum malesuada nisi. 
					Sed at neque in risus interdum malesuada. Cras et laoreet ex, sed imperdiet diam.
					Cras posuere finibus est ac mollis. Praesent lacus nisl, suscipit et maximus in, 
					vehicula vitae ante. Mauris non ipsum ac leo sodales pretium. Phasellus feugiat nisl urna, 
					non cursus mi ultrices ut.
					</P>
				</div>

				<div class="col-12 col-md-6 col-lg-6 productitem">
					<img src="<?php echo base_url(); ?>application/assets/images/light.jpeg" alt="Product" class="w-100 h-100">
					<h4 class="text-center pt-4">
						Product Name
					</h4>
					<P class="text-justify pt-0 pt-md-0 pb-5 px-2">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
					Nullam faucibus laoreet sapien. Etiam luctus justo finibus ipsum lacinia, 
					facilisis blandit erat viverra. Quisque porta odio non mattis porttitor. 
					Fusce finibus accumsan massa, bibendum malesuada nisi. 
					Sed at neque in risus interdum malesuada. Cras et laoreet ex, sed imperdiet diam.
					Cras posuere finibus est ac mollis. Praesent lacus nisl, suscipit et maximus in, 
					vehicula vitae ante. Mauris non ipsum ac leo sodales pretium. Phasellus feugiat nisl urna, 
					non cursus mi ultrices ut.
					</P>
				</div>  
			</div>
		</div>

		<!-- Form Section -->
		<div class="formsection container my-5 card py-5 px-3 px-lg-5 shadow">
			<div class="col-12">
				<h1 class="mb-3">Form</h1>
			</div>
			<div class="col-12 px-4 py-4">
					<form>
						<div class="form-row">
							<div class="form-group col-md-6 px-3">
								<label for="inputFirstName">First Name:</label>
								<input type="text" class="form-control" id="inputFirstName" placeholder="">
							</div>
							<div class="form-group col-md-6 px-3">
								<label for="inputLastName">Last Name:</label>
								<input type="text" class="form-control" id="inputLastName" placeholder="">
							</div>
							<div class="form-group col-md-6 px-3">
								<label for="inputEmail">Email:</label>
								<input type="email" class="form-control" id="inputEmail" placeholder="">
							</div>
							<div class="form-group col-md-6 px-3">
								<label for="inputPhoneNum">Phone Number:</label>
								<input type="number" class="form-control" id="inputPhoneNum" placeholder="">
							</div>
							<div class="form-group col-md-4 px-3">
								<label for="inputCompanyName">Company Name:</label>
								<input type="text" class="form-control" id="inputCompanyName" placeholder="">
							</div>
							<div class="form-group col-md-6 col-md-12 px-3">
								<label for="inputAddress">Company Address:</label>
								<input type="text" class="form-control" id="inputAddress" placeholder="">
							</div>
							<div class="form-group col-md-6 px-3">
								<label for="inputCity">City:</label>
								<input type="text" class="form-control" id="inputCity" placeholder="">
							</div>
							<div class="form-group col-md-4 px-3">
								<label for="inputStateAndProv">State/Province:</label>
								<select id="inputStateAndProv" class="form-control">
									<option selected>Select...</option>
									<option>...</option>
								</select>
							</div>
							<div class="form-group col-md-4 px-3">
								<label for="inputPostalCode">Postal Code:</label>
								<input type="number" class="form-control" id="inputPostalCode" placeholder="">
							</div>
							<div class="form-group col-md-12 px-3">
								<label for="inputService">Product/s to Avail:</label>
								<select id="inputService" class="form-control">
									<option selected>Select...</option>
									<option>Option 1 (Price: Php)</option>
								</select>
							</div>
							<fieldset class="form-group">
								<div class="row">
									<p class="col-sm-12">Need Financial Assistance?</p>
									<div class="col-sm-10">
										<div class="form-check">
											<input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
											<label class="form-check-label" for="gridRadios1">
												Yes
											</label>
										</div>
										<div class="form-check">
											<input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
											<label class="form-check-label" for="gridRadios2">
												No
											</label>
										</div>
									</div>
									<div class="form-group col-md-6 px-3 py-3">
										<label for="inputCompany">If yes, select a company:</label>
										<select id="inputCompany" class="form-control">
											<option selected>Select...</option>
											<option>...</option>
										</select>
									</div>
									<div class="serviceamount col-md-12 px-3 py-5">
										<h2>Product/s Cost: (Amount)</h2>
									</div>
								</div>
							</fieldset>
							<div class="col-12">
								<center>
									<button type="submit" class="btn btn-primary">Submit Form</button>
								</center>
							</div>
						</div>
					</form>
			</div>
		</div>

	</div>

	<!-- End of Products Page -->
</div>
