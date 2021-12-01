<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1> Customers List </h1><br>

				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="#"> Customers </a></li>
						<li class="breadcrumb-item active"> <?php echo date('d/m/Y') ?></li>
					</ol>
				</div>
			</div>
		</div><!-- /.container-fluid -->
	</section>
	<div class="row">
		<div class="col-12">
			<div class="card">
				<div class="card-header">
					<div class="card-body">
						<h4>Sort By:</h4> 
						<select class="form-control">
							<option> Signature </option>
							<!-- earn 4 points on every Rs. 100 and should shop of 30,000 annually -->
							<option> Privilege </option>
							<!-- earn 2 points on every Rs. 100 and should shop of 15,000 annually -->
							<option> Prestige </option>
							<!-- earn 1 points on every Rs. 100 and should shop of 3,000 annually -->
						</select>
						
						<div class="row">
							<div class="col-md-12">
								<div class="card-body">
									<table id="example2" class="table table-striped table-bordered table-hover">
										<thead class="table table-dark">
											<tr>
												<th> Customer Name </th>
												<th> Phone </th>
												<th> Total Loyalty Points </th>
												<th> Current Loyalty Points </th>
												<th> Category </th>
												<th> Action </th>
											</tr>
										</thead>
										<tbody>
											<?php foreach($allCustomer as $row): ?>
											<tr>
												<td> <?php echo $row->fname. " ". $row->lname; ?> </td>
												<td> <?php echo $row->phone; ?> </td>
												<td> 30000 </td>
												<td> 100 </td>
												<td> Signature </td>
												<td>
													<button class="form btn btn-sm btn-info fa fa-envelope"> </button>
													<button class="form btn btn-sm btn-primary fa fa-pencil"> </button>
													<button class="form btn btn-sm btn-danger fa fa-trash"> </button>
												</td>
											</tr>
											<?php endforeach; ?>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

					<!-- /.card-body -->
					<!-- /.card -->
