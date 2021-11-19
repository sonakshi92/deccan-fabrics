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
						<li class="breadcrumb-item active"><?php echo date('d/m/Y');?></li>
					</ol>
				</div>
			</div>
		</div><!-- /.container-fluid -->
	</section>
	<div class="row">
		<div class="col-12">
			<div class="card">
				<div class="card-header">
					<h3 class="card-title"> Input Files
					<div class="card-body">
						<div class="row">
							<div class="form-group">
								<label> File </label>
								<input type="file" class="form-control" name="c_name" size="50">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
