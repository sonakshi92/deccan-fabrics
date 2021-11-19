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
										<label>Select the Financial Year</label>
                                        <select name="month" class="form-control">
                                            <option value="">2020-2021</option>
                                            <option value="">2019-2020</option>
                                            <option value="">2018-2019</option>
                                            <option value="">2017-2018</option>
                                            <option value="">2016-2017</option>
                                            <option value="">2015-2016</option>
                                            <option value="">2014-2015</option>
                                        </select>
							        </div>
							    </div>
							</div>
							<div class="card-body">
								<table id="example2" class="table table-bordered table-hover table-striped">
									<thead class="table-dark">
										<tr>
											<th>Month</th>
											<th>Cash Payment</th>
											<th>UPI Payment</th>
											<th>Credit Card Payment</th>
											<th>Return</th>
											<th>Total</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>April</td>
											<td>4000</td>
											<td></td>
											<td>2000</td>
											<td></td>
											<td>6000</td>
										</tr>
                                        <tr>
											<td>May</td>
											<td></td>
											<td>10000</td>
											<td></td>
											<td></td>
											<td>10000</td>
										</tr>
                                        <tr>
											<td>June</td>
											<td>8500</td>
											<td>200</td>
											<td></td>
											<td></td>
											<td>8700</td>
										</tr>
                                        <tr>
											<td>July</td>
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
