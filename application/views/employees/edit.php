<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1> Add Employee Details </h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="employee"> Employee </a></li>
						<li class="breadcrumb-item active"> <?php echo date('d/m/Y') ?></li>
					</ol>
				</div>
			</div>
		</div><!-- /.container-fluid -->
	</section>
	<div class="row">
		<div class="col-12">
			<div class="card">
				<div class="card-header">
					<form>
						<h3 class="card-title"> Enter All the Details:
							<div class="card-body">
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label> Employee Name </label>
											<input type="text" class="form-control" name="c_name" size="50">
										</div>
										<div class="form-group">
											<label> DOB </label>
											<input type="date" class="form-control" name="c_dob" size="50">
										</div>
										<div class="form-group">
											<label> Address Proof :</label>
											<input type="file" class="form-control" name="address_proof">
										</div>
										<div class="form-group"> <br>
											<button class="form btn btn-primary fa fa-plus"> Add </button>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label> Phone </label>
											<input type="tel" class="form-control" name="c_phone" size="50">
										</div>
										<div class="form-group">
											<label> Address </label>
											<input type="text" class="form-control" name="c_address" size="50">
										</div>
										<div class="form-group">
											<label> Photo ID Proof :</label>
											<input type="file" class="form-control" name="id_proof">
										</div>
									</div>
								</div>
							</div>
				</div>
				</form>
			</div>
		</div>
	</div>
</div>
