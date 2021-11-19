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
							<div class="card-body">
								<table id="example2" class="table table-bordered table-hover table-striped">
									<thead class="table-dark">
										<tr>
											<th>Account Name</th>
											<th>Account No.</th>
											<th>IFSC Code</th>
											<th>Bank Name</th>
											<th>Branch</th>
											<th>Other Information</th>
											<th>Action:</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>ABC</td>
											<td>4454355</td>
											<td>HDFC0001</td>
											<td>HDFC</td>
											<td>Narayanguda</td>
											<td>closed</td>
											<td><i class="fas fa-edit" style="color:blue"></i>
												<i class="fas fa-trash" style="color:red"></i>
											</td>
										</tr>
										<tr>
											<td>XYZ</td>
											<td>4454355</td>
											<td>PUN0001</td>
											<td>PNB</td>
											<td>Abids</td>
											<td>Working</td>
											<td><i class="fas fa-edit" style="color:blue"></i>
												<i class="fas fa-trash" style="color:red"></i>
											</td>
										</tr>
										<tr>
											<td>AasdadBC</td>
											<td>4454355</td>
											<td>SBIC0001</td>
											<td>SBI</td>
											<td>Abids</td>
											<td>renewal in Jan</td>
											<td><i class="fas fa-edit" style="color:blue"></i>
												<i class="fas fa-trash" style="color:red"></i>
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
</section>
