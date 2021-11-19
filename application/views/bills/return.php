<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1><?php echo  explode('|',trim($title))[0];?></h1>
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

			<div class="row">
				<div class="col-12">
					<div class="card">
						<div class="card-header">
							<h3 class="card-title"> Invoice No:<input type="text" class="form-control">
								<div class="card-body">
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<form method="post" enctype="multipart/form-data"
													action="<?php echo base_url().'user/addContracts';?>">
													<label> Enter Invoice Prefix: </label>
													<input type="text" class="form-control" name="pre" size="50">
													<span style="color:red" class="danger"></span>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label> Enter Invoice No: </label>
												<input type="email" class="form-control" name="employer_email" size="50">
											</div>
										</div>


							</h3>
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
										<th> Action </th>
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
										<td> <?php ?> <i class="fas fa-unlink" style="color:red"></i> change </td>
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
										<td> <?php ?> <i class="fas fa-unlink" style="color:red"></i> change </td>
									</tr>
								</tbody>

							</table>
							<div class="card-header">
								<ol class="h2 breadcrumb float-sm-center">
									<li class="breadcrumb-item"> Total </li>
									<li class="breadcrumb-item active"> Rs. 2700 </li>
								</ol>

							</div>

						</div>

					</div>

					<!-- /.card-body -->
				</div>
				<!-- /.card -->

				<section class="content">
					<div class="container-fluid">
						<div class="row">
							<div class="col-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title"> Return Billing: <?php ?></h3>
									</div>
									<!-- /.card-header -->
									<!-- /.card-header -->
									<div class="card-body">
										<table id="example2" class="table table-bordered table-hover">
											<thead>
												<tr>
													<th> Stock No. </th>
													<th> Item </th>
													<th> MRP </th>
													<th> Qty </th>
													<th> Dicount % </th>
													<th> Dicount Price </th>
													<th> Total </th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<form>
														<td> <input type="text" name="stockno" class="form-control" placeholder="Scan Stock No.">
														</td>
														<!-- Press a key to search for stock no and sort according to Stock no, MRP, style, Quality No, Brand, CP and all fields -->
														<td> <input type="text" class="form-control" name="item" placeholder="Item"> </td>
														<td> <input type="number" class="form-control" name="mrp" placeholder="MRP"> </td>
														<td> <input type="number" class="form-control" name="qty" placeholder="Qty"> </td>
														<td> <input type="number" class="form-control" name="total" placeholder="Net Total"> </td>
														<td> <input type="number" class="form-control" name="disc%" placeholder="Discount %"> </td>
														<td> <input type="number" class="form-control" name="discprice"
																placeholder="Discount Price"> </td>


													</form>

												</tr>
											</tbody>
											<tfoot>

											</tfoot>
										</table>
										<div class="card-header">
											<ol class="h2 breadcrumb float-sm-center">
												<li class="breadcrumb-item"> Total Return Value </li>
												<li class="breadcrumb-item active"> Rs. 2700 </li>
											</ol>
											<button class="btn btn-warning fa fa-unlink"> Return </button>
										</div>
									</div>
									<!-- /.card-body -->
								</div>
								<!-- /.card -->


							</div>
							<!-- /.col -->
						</div>
						<!-- /.row -->
					</div>
					<!-- /.container-fluid -->
				</section>
				<!-- /.content -->
			</div>
