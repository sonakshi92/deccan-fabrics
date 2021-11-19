<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1> View Request of Customers </h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="#"> Requests </a></li>
						<li class="breadcrumb-item active"> <?php echo date('d/m/Y') ?></li>
					</ol>
				</div>
			</div>
		</div><!-- /.container-fluid -->
	</section>
	<form method="post">
		<!-- Main content -->
		<section class="content">
			<div class="container-fluid">
				<!-- /.card-header -->
				<div class="row">
					<div class="col-md-12">
						<div class="form-group">
							<div class="card-body">
								<table id="example2" class="table table-striped table-bordered table-hover">
									<thead>
										<tr>
											<th> Customer Name </th>
											<th> Phone </th>
											<th> Request </th>
											<th> Request Status </th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td> name1 </td>
											<td> 9876543210 </td>
											<td> order for t-shirts of size 44 </td>
											<td> <select class="form-control">
													<option> Pending </option>
													<option> In Process </option>
													<option> Completed </option>
												</select>
											</td>
										</tr>
										<tr>
											<td> name2 </td>
											<td> 9876443210 </td>
											<td> order for Shirts of size 42 </td>
											<td> <select class="form-control">
													<option> Pending </option>
													<option> In Process </option>
													<option> Completed </option>
												</select>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>

</div>

<!-- /.card-body -->
<!-- /.card -->
