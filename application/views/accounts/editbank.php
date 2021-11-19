<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1> Add Bank Details </h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="#"> Bank </a></li>
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
											<label> Account Name </label>
											<input type="text" class="form-control" name="acc_name" size="50">
										</div>
										<div class="form-group">
											<label> IFSC Code </label>
											<input type="text" class="form-control" name="acc_ifsc" size="50">
										</div>
										<div class="form-group">
											<label> Branch </label>
											<input type="text   " class="form-control" name="accc_branch" size="50">
										</div>
										<div class="form-group"> <br>
											<button class="form btn btn-primary fa fa-plus"> Add </button>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label> Account No </label>
											<input type="number" class="form-control" name="acc_num" size="50">
										</div>
										<div class="form-group">
											<label> Bank Name </label>
											<input type="text" class="form-control" name="acc_name" size="50">
										</div>
										<div class="form-group">
											<label> Other Info </label>
											<input type="text" class="form-control" name="info" size="50">
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
