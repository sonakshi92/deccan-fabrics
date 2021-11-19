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
                                        <label>Select Month:</label>
                                        <select name="month" class="form-control">
                                            <option value="">January</option>
                                            <option value="">February</option>
                                            <option value="">March</option>
                                            <option value="">April</option>
                                            <option value="">May</option>
                                            <option value="">June</option>
                                            <option value="">July</option>
                                            <option value="">August</option>
                                            <option value="">September</option>
                                            <option value="">October</option>
                                            <option value="">November</option>
                                            <option value="">December</option>
                                        </select>
									</div>
								</div>
								<div class="col-md-3">
                                    <div class="form-group">
										<label>Year</label>
                                        <select name="month" class="form-control">
                                            <option value="">2021</option>
                                            <option value="">2020</option>
                                            <option value="">2019</option>
                                            <option value="">2018</option>
                                            <option value="">2017</option>
                                            <option value="">2016</option>
                                            <option value="">2015</option>
                                        </select>
							        </div>
							    </div>
							</div>
							<div class="card-body">
								<table id="example2" class="table table-bordered table-hover table-striped">
									<thead class="table-dark">
										<tr>
											<th>Date</th>
											<th>Cash Payment</th>
											<th>UPI Payment</th>
											<th>Credit Card Payment</th>
											<th>Return</th>
											<th>Bill Total</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>01/01/2021</td>
											<td>4000</td>
											<td></td>
											<td>2000</td>
											<td></td>
											<td>6000</td>
										</tr>
                                        <tr>
											<td>02/01/2021</td>
											<td></td>
											<td>10000</td>
											<td></td>
											<td></td>
											<td>10000</td>
										</tr>
                                        <tr>
											<td>03/01/2021</td>
											<td>8500</td>
											<td>200</td>
											<td></td>
											<td></td>
											<td>8700</td>
										</tr>
                                        <tr>
											<td>04/01/2021</td>
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
