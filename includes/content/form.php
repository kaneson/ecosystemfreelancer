<div class="container clearfix">

	<div class="heading-block center">
		<h3>OPTION FOR THE WIZARD TO COLLECT THE PROJECT DETAILS</h3>
	</div>

	<p class="mx-auto center" style="max-width: 800px;">
		This wizard allow you to collect the information necessary to start your business and your projects with next steps:
	</p>

	<form action="php/send_email.php" method="post">

		<details>

			<summary>Personal Information</summary>

			<div class="row">
				<div class="col-6">
					<input type="text" placeholder="Full Name" required="true" name="fullname" />
				</div>
				<div class="col-6">
					<input type="email" placeholder="E-mail" name="email" required="true" />
				</div>
				<div class="col-12">
					<input type="text" placeholder="Address" name="address" />
				</div>
				<div class="col-6">
					<input type="number" placeholder="Postal Code" name="postcode" />
				</div>
				<div class="col-6">
					<input type="text" placeholder="Country" name="country" />
				</div>
				<div class="col-6">
					<input type="number" placeholder="Phone" name="phone" />
				</div>
				<div class="col-6">
					<input type="number" placeholder="VAT number" name="vatnumber" />
				</div>
			</div>

		</details>

		<details>

			<summary>Business or Project Details</summary>

			<div class="row">
				<div class="col-6">
					<input type="text" placeholder="List of Potential Names" name="listpotentialnames" />
				</div>
				<div class="col-6">
					<input type="file" placeholder="CV attachment" name="cv" />
				</div>
				<div class="col-6">
					<input type="text" placeholder="Goal/Objective" name="goal" />
				</div>
				<div class="col-6">
					<input type="text" placeholder="Short Description" name="shortdescription" />
				</div>
			</div>

		</details>

		<details>

			<summary>List of products to delivery</summary>

			<div class="row">
				<div class="col-12">
					<input type="text" placeholder="Category/Kind of products" name="category" />
				</div>
				<div class="col-6">
					<input type="text" placeholder="Short description of products" name="shortproducts" />
				</div>
				<div class="col-6">
					<input type="text" placeholder="Estimate Initial Price" name="estimateinitialprice" />
				</div>
			</div>

		</details>

		<details>

			<summary>Potential Business Costs</summary>

			<div class="row">
				<div class="col-6">
					<input type="text" placeholder="Salaries" name="salaries" />
				</div>
				<div class="col-6">
					<input type="text" placeholder="Potential office" name="potentialoffice" />
				</div>
				<div class="col-6">
					<input type="text" placeholder="Utilities" name="utilities" />
				</div>
				<div class="col-6">
					<input type="text" placeholder="Trips" name="trips" />
				</div>
				<div class="col-12">
					<input type="text" placeholder="IT Hardware and Software" name="it" />
				</div>
			</div>

		</details>

		<details>

			<summary>Potential Clients/Customers</summary>

			<div class="row">
				<div class="col-6">
					<input type="text" placeholder="Target sector" name="targetsector" />
				</div>
				<div class="col-6">
					<input type="text" placeholder="Kind of client" name="kindofclient" />
				</div>
				<div class="col-12">
					<input type="text" placeholder="Existing clients if you have" name="existing" />
				</div>
			</div>

		</details>


		<div align="center">
			<button type="submit" class="button button-border button-rounded button-large button-dark ml-0">Send all form</button>
		</div>

		<div class="line"></div>

	</form>

</div>
</div>