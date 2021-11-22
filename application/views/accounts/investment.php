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
								<div class="col-md-3">
									<div class="form-group">
										<label>Date:</label>
										<input type="date" class="form-control">
									</div>
								</div>
                                <div class="col-md-4">
									<div class="form-group">
										<label>Name:</label>
										<input type="text" class="form-control">
									</div>
								</div>
                                <div class="col-md-3">
									<div class="form-group">
										<label>Amount:</label>
										<input type="text" class="form-control">
									</div>
								</div>
								<div class="col-md-2">
									<div class="form-group">
										<button class="btn btn-primary fa fa-plus"> ADD</button>
									</div>
								</div>
								<table id="example2" class="table table-bordered table-hover table-striped">
									<thead class="table-dark">
										<tr>
											<th>Date</th>
											<th>Name</th>
											<th>Amount</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>10/10/2020</td>
											<td>ABC</td>
											<td>10,00,000</td>
											<td><i class="fas fa-edit" style="color:blue"></i>
												<i class="fas fa-trash" style="color:red"></i>
											</td>
										</tr>
                                        <tr>
											<td>10/10/2020</td>
											<td>XYZ</td>
											<td>8,00,000</td>
											<td><i class="fas fa-edit" style="color:blue"></i>
												<i class="fas fa-trash" style="color:red"></i>
											</td>
										</tr>
									</tbody>
								</table>
								<div>
									<h4>Total: 18,00,000</h4>
								</div>

							</div>
						</div>
					</div>
				</div>
			</div>
	</section>
</div>
