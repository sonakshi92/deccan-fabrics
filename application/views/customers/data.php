<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1> Customers List </h1><br>

				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="#"> Customers </a></li>
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
					<div class="card-body">
						<h4>
							Sort By: <select class="form-control">
								<option> Signature </option>
								<!-- earn 4 points on every Rs. 100 and should shop of 30,000 annually -->
								<option> Privilege </option>
								<!-- earn 2 points on every Rs. 100 and should shop of 15,000 annually -->
								<option> Prestige </option>
								<!-- earn 1 points on every Rs. 100 and should shop of 3,000 annually -->
							</select>
						</h4>
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
																<th> Total Loyalty Points </th>
																<th> Current Loyalty Points </th>
																<th> Category </th>
																<th> Action </th>
															</tr>
														</thead>
														<tbody>
															<tr>
																<td> name1 </td>
																<td> 9876543210 </td>
																<td> 30000 </td>
																<td> 100 </td>
																<td> Signature </td>
																<td>
																	<button class="form btn btn-sm btn-info fa fa-envelope"> </button>
																	<button class="form btn btn-sm btn-primary fa fa-pencil"> </button>
																	<button class="form btn btn-sm btn-danger fa fa-trash"> </button>
																</td>
															</tr>
															<tr>
																<td> name2 </td>
																<td> 9876443202 </td>
																<td> 15000 </td>
																<td> 1000 </td>
																<td> Previlege </td>
																<td>
																	<button class="form btn btn-sm btn-info fa fa-envelope"> </button>
																	<button class="form btn btn-sm btn-primary fa fa-pencil"> </button>
																	<button class="form btn btn-sm btn-danger fa fa-trash"> </button>
																</td>
															</tr>
															<tr>
																<td> name3 </td>
																<td> 9876553202 </td>
																<td> 3000 </td>
																<td> 100 </td>
																<td> Prestige </td>
																<td>
																	<button class="form btn btn-sm btn-info fa fa-envelope"> </button>
																	<button class="form btn btn-sm btn-primary fa fa-pencil"> </button>
																	<button class="form btn btn-sm btn-danger fa fa-trash"> </button>
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
