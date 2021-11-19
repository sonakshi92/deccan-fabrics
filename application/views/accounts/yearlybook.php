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
						<li class="breadcrumb-item"><a href="#"> Investment and Expenses </a></li>
						<li class="breadcrumb-item active"> <?php echo date('d/m/Y') ?></li>
					</ol>
				</div>
			</div>
		</div><!-- /.container-fluid -->
		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-header">
						<h3 class="card-title">Investment:
						<div class="card-body">
							<div class="row">
                            <div class="col-md-2">
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
								<div class="col-md-2">
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
									<label>Earnings</label>
									<input type="text" class="form-control" name="c_reason" size="50">
								</div>
								</div>
								<div class="col-md-3">
								<div class="form-group">
									<label>Expenditure</label>
									<input type="text" class="form-control" name="C_rs" size="50">
								</div>
								</div>
								<div class="col-md-2">
								<div class="form-group"> <br>
									<button class="form btn btn-info fa fa-plus"> Add </button>
								</div>
								</div>
								
							</div>
						</div>
					</div>
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<div class="card-body">
										<table id="example2" class="table table-striped table-bordered table-hover">
											<thead class="table table-dark">
												<tr>
													<th>Month</th>
													<th>Investment</th>
                                                    <th>Expenditure</th>
                                                    <th>Profit</th>
                                                    <th>Loss</th>
                                                    <th>Action</th>
												</tr>
											</thead>
											<tbody>
                                                <tr>
													<td>April</td>
													<td>3,00,000</td>
													<td>2,20,000</td>
													<td>80,000</td>
													<td>0</td>
													<td><i class="fas fa-edit" style="color:blue"></i></td>
												</tr>
                                                <tr>
													<td>May</td>
													<td>4,50,000</td>
													<td>5,00,000</td>
													<td>0</td>
													<td>50,000</td>
													<td><i class="fas fa-edit" style="color:blue"></i>
															 </td>
												</tr>
                                                <tr>
													<td>June</td>
													<td>4,0,000</td>
													<td>4,0,000</td>
													<td>0</td>
													<td>0</td>
													<td><i class="fas fa-edit" style="color:blue"></i>
															 </td>
												</tr>
												<tr>
													<td>July</td>
													<td>3,00,000</td>
													<td>2,20,000</td>
													<td>80,000</td>
													<td>0</td>
													<td><i class="fas fa-edit" style="color:blue"></i></td>
												</tr>
											</tbody>
										</table>
                                        <h4> Total</h4>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>

<!-- /.card-body -->
<!-- /.card -->
