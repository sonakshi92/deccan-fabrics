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
						<li class="breadcrumb-item"><a href="#"><?php echo  explode('|',trim($title))[0]; ?></a></li>
						<li class="breadcrumb-item active"><?php echo date('d/m/Y');?></li>
					</ol>
				</div>
			</div>
		</div><!-- /.container-fluid -->
	</section>

	<section class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12">
					<div class="card">
						<div class="card-header">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label>Stock No.:</label>
										<input type="text" class="form-control">
									</div>
								</div>
                                <div class="col-md-2">
									<div class="form-group">
										<label>Current Qty No.:</label>
										<input type="text" class="form-control">
									</div>
								</div>

								<table id="example2" class="table table-bordered table-hover table-striped">
									<thead class="table-dark">
										<tr>
											<th>Brand</th>
											<th>Stock No</th>
											<th>Current Qty</th>
											<th>System Qty</th>
											<th>Retail Price</th>
											<th>Purchase Price</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>Raymond</td>
											<td>swewsd1000</td>
											<td>10</td>
											<td>10</td>
											<td>1000</td>
											<td>800</td>
											<td><i class="fas fa-edit" style="color:blue"></i>
												<i class="fas fa-trash" style="color:red"></i>
											</td>
										</tr>
									</tbody>
								</table>
								<div>
									<h4>Total Balance according to Retail Price: 10000</h4>
									<h4>Total Balance according to Purchase Price: 8000</h4>
								</div>

							</div>
							<button class="btn btn-primary">Stock Verification</button>
						</div>
					</div>
				</div>
			</div>
	</section>
</div>
