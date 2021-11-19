<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1> Daily Cash Book </h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="#"> Cash Handling </a></li>
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
						<h3 class="card-title"> Credit Details:
							<div class="card-body">
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<label> Cash Credit Reason </label>
											<input type="text" class="form-control" name="c_reason" size="50">
										</div>
									</div>
									<div class="col-md-3">
										<div class="form-group">
											<label> Rs. </label>
											<input type="text" class="form-control" name="C_rs" size="50">
										</div>
									</div>
									<div class="col-md-3">
										<div class="form-group"> <br>
											<button class="form btn btn-info fa fa-plus"> Add </button>
										</div>
									</div>
					</form>
				</div>
			</div>

			<form method="post">
				<h3 class="card-title"> Debit Details:
					<div class="card-body">
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label> Cash Debit Reason </label>
									<input type="text" class="form-control" name="d_reason" size="50">
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<label> Rs. </label>
									<input type="text" class="form-control" name="d_rs" size="50">
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group"> <br>
									<button class="form btn btn-primary fa fa-plus"> Add </button>
								</div>
							</div>
			</form>
		</div>
	</div>
</div>


<!-- Main content -->
<section class="content">
	<div class="container-fluid">
		<!-- /.card-header -->
		<div class="row">
			<div class="col-md-4">
				<div class="form-group">
					<div class="card-body">
						<table id="example2" class="table table-striped table-bordered table-hover">
							<thead class="table table-dark">
								<tr>
									<th> Cash Credit </th>
									<th> Rs. </th>
									<th> Action </th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td> Opening Balance </td>
									<td> Rs. <?php //should be closing balance of previous ?> </td>
									<td></td>
								</tr>
								<tr>
									<td> Cash sale </td>
									<td> 10000 </td>
									<td> <?php ?> <i class="fas fa-trash" style="color:red"></i> </td>
								</tr>

								<tr>
									<td><b> Total </b></td>
									<td><b>10000 </b></td>
									<td> </td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<div class="col-md-5">
				<div class="form-group">
					<table id="example2" class="table table-striped table-hover">
						<thead class="table table-dark">
							<br>
							<tr>
								<th> Cash Debit </th>
								<th> Rs. </th>
								<th> Action </th>
							</tr>
						</thead>
						<tbody>

							<tr>
								<td> bank deposit </td>
								<td> 5000 </td>
								<td> <?php ?> <i class="fas fa-trash" style="color:red"></i> </td>
							</tr>

							<tr>
								<td> lunch </td>
								<td> 500 </td>
								<td> <?php ?> <i class="fas fa-trash" style="color:red"></i> </td>
							</tr>
							<tr>
								<td> Closing Balance </td>
								<td> Rs. <?php //denomination total ?> </td>
								<td> </td>
							</tr>
							<tr>
								<td><b> Total </b></td>
								<td><b>5500 </b></td>
								<td> </td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
			<div class="col-md-3">
				<div class="form-group">
					<table id="example2" class="table table-striped table-hover">
						<thead class="table table-dark">
							<br>
							<tr>
								<th> Denomination </th>
								<th> Rs. </th>
								<th> Total </th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td> <input type="number" min="1" max="1000" step="1"> </td>
								<td> 2000 </td>
								<td> </td>
							</tr>
							<tr>
								<td> <input type="number" min="1" max="1000" step="1"> </td>
								<td> 500 </td>
								<td> </td>
							</tr>
							<tr>
								<td> <input type="number" min="1" max="1000" step="1"> </td>
								<td> 200 </td>
								<td> </td>
							</tr>
							<tr>
								<td> <input type="number" min="1" max="1000" step="1"> </td>
								<td> 100 </td>
								<td> </td>
							</tr>
							<tr>
								<td> <input type="number" min="1" max="1000" step="1"> </td>
								<td> 20 </td>
								<td> </td>
							</tr>
							<tr>
								<td> <input type="number" min="1" max="1000" step="1"> </td>
								<td> 10 </td>
								<td> </td>
							</tr>
							<tr>
								<td> <input type="number" min="1" max="500" step="1"> </td>
								<td> change </td>
								<td> </td>
							</tr>

							<td><b> Closing Total </b></td>
							<td><b>5500 </b></td>
							<td> </td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>

	<!-- /.card-body -->
	<!-- /.card -->
