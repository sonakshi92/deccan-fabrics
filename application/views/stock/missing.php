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
						<li class="breadcrumb-item active"> <?php echo date('d/m/Y'); ?></li>
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

						<div class="card-body">
           
							<table id="example2" class="table table-bordered table-hover table-striped">
								<thead class="table-dark">
									<tr>
										<th>Brand</th>
										<th>Category</th>
										<th>Stock No</th>
										<th>Quantity</th>
										<th>Qty</th>
										<th>Retail Price</th>
										<th>Purchase Price</th>
										<th>Status</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>Raymond</td>
										<td>Suiting</td>
										<td>swewsd1000</td>
										<td>001</td>
										<td>10</td>
										<td>1000</td>
										<td>800</td>
										<td><select name="status" class="form-control" id="">
												<option>Not Found</option>
												<option>Found</option>
											</select>
										</td>
									</tr>
								</tbody>
							</table>
							<h4>Missing Balance according to Retail Price: 1000</h4>
							<h4>Missing Balance according to Purchase Price: 800</h4>
						</div>
					</div>
				</div>
			</div>
		</div>
</div>
</section>
