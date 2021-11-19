<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1><?php echo  explode('|',trim($title))[0]; ?></h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="#"><?php echo  explode('|',trim($title))[0]; ?></a></li>
						<li class="breadcrumb-item active"><?php echo date('d/m/Y');?></li>
					</ol>
				</div>
			</div>
		</div><!-- /.container-fluid -->
	</section>

	<!-- Main content -->
	<section class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-6">
					<h5>Select Date Range</h5>
				</div>
				<div class="col-12">
					<div class="card">
						<div class="card-header">
							<div class="row">
								<div class="col-md-3">
									<div class="form-group">
										<label>Select Date:</label>
										<input type="date" class="form-control">
									</div>
								</div>
							</div>
							<div class="card-body">
								<table id="example2" class="table table-bordered table-hover table-striped">
									<thead class="table-dark">
										<tr>
											<th>Invoice No</th>
											<th>Customer Name</th>
											<th>Qty</th>
											<th>Cash Payment</th>
											<th>UPI Payment</th>
											<th>Credit Card Payment</th>
											<th>Return</th>
											<th>Bill Total</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>CM21/101</td>
											<td>Customer Name 1</td>
											<td>10</td>
											<td>4000</td>
											<td></td>
											<td>2000</td>
											<td></td>
											<td>6000</td>
										</tr>
                                        <tr>
											<td>CM21/101</td>
											<td>Cust Name 2</td>
											<td>3.5</td>
											<td></td>
											<td>10000</td>
											<td></td>
											<td></td>
											<td>10000</td>
										</tr>
                                        <tr>
											<td>CM21/101</td>
											<td>ABC</td>
											<td>5</td>
											<td>8500</td>
											<td>200</td>
											<td></td>
											<td></td>
											<td>8700</td>
										</tr>
                                        <tr>
											<td>RM21/01</td>
											<td>ABC</td>
											<td>5</td>
											<td>8500</td>
											<td>200</td>
											<td></td>
											<td></td>
											<td>-8700</td>
										</tr>
									</tbody>
								</table>
							</div>
                            <h4>Total:10600</h4>
						</div>
					</div>
				</div>
			</div>
		</div>
</div>
</section>
