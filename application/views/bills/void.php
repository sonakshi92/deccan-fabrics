<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Create a <?php echo  explode('|',trim($title))[0];?></h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="#"><?php echo  explode('|',trim($title))[0];?></a></li>
						<li class="breadcrumb-item active"> <?php echo date('d/m/Y') ?></li>
					</ol>
				</div>
			</div>
		</div><!-- /.container-fluid -->
	</section>

	<!-- Main content -->
	<section class="content">
		<div class="container-fluid">
			<form method="post">

				<div class="row">
					<div class="col-12">
						<div class="card">
							<div class="card-header">
								<h3 class="card-title">
									<div class="card-body">
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label> Enter Invoice No. </label>
													<input type="text" class="form-control" name="employer_email"
														size="50">
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label>Void Invoice No. </label>
													<input type="text" class="form-control" name="employer_email"
														size="50">
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label> Customer Details </label>
													<input type="text" class="form-control" name="employer_email"
														size="50">
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label> Sales Man </label>
													<select name="salesman" class="form-control" id="">
														<option>Name 1</option>
														<option>Name 2</option>
														<option>Name 3</option>
														<option>Name 4</option>
													</select>
												</div>
											</div>
										</div>
									</div>

									<!-- /.card-header -->
									<div class="card-body">
										<table id="example2" class="table table-bordered table-hover">
											<thead class="table table-dark">
												<tr>
													<th> Item Name </th>
													<th> Brand </th>
													<th> MRP </th>
													<th> Qty </th>
													<th> Net Total </th>
													<th> Discount % </th>
													<th> GST </th>
													<th> Total </th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td> <?php ?> Suiting </td>
													<td> <?php ?> Raymond </td>
													<td> <?php ?> 1000 </td>
													<td> <?php ?> 2 </td>
													<td> <?php ?> 2000 </td>
													<td> <?php ?> 10% </td>
													<td> <?php ?> 5% </td>
													<td> <?php ?> 1800 </td>
												</tr>
												<tr>
													<td> <?php ?> Shirting </td>
													<td> <?php ?> Raymond </td>
													<td> <?php ?> 500 </td>
													<td> <?php ?> 2 </td>
													<td> <?php ?> 1000 </td>
													<td> <?php ?> 10% </td>
													<td> <?php ?> 5% </td>
													<td> <?php ?> 900 </td>
												</tr>
											</tbody>

										</table>
										<div class="card-header">
											<ol class="h2 breadcrumb float-sm-center">
												<li class="breadcrumb-item"> Total </li>
												<li class="breadcrumb-item active"> Rs. 2700 </li>
											</ol>
											<button class="btn btn-danger fa fa-trash"> Void</button>
											<button class="btn btn-primary fa fa-print" onclick="window.print()">
												Print</button>
										</div>
									</div>
							</div>
							<!-- /.card-body -->
							<!-- /.card -->

						</div>
					</div>
				</div>
		</div>
		</div>
