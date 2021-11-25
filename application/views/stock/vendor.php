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
					<?php if( $this->session->flashdata('message')) { ?>
                    <div class="alert alert-success">
                        <?php echo $this->session->flashdata('message') ?>
						<?php } ?>
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
						<div class="card-header">
							<div class="row">
								<div class="col-md-4">
									<?php echo form_open(''); ?>
									<div class="form-group">
										<label for="code">Vendor Code: </label>
										<input type="text" class="form-control" id="code" name="code">
										<span style="color:red" ><?php echo form_error('code'); ?> </span>
									</div>
								</div>
								<div class="col-md-8">
									<div class="form-group">
										<label for="name">Vendor Name: </label>
										<input type="text" id="name" name="name" class="form-control">
										<span style="color:red"><?php echo form_error('name');?></span>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="address">Address: </label>
										<input type="text" id="address" name="address" class="form-control">
										<span style="color:red"><?php echo form_error('address');?></span>

									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="state">State: </label>
										<input type="text" id="state" name="state" class="form-control">
										<span style="color:red"><?php echo form_error('state');?></span>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="phone">Phone: </label>
										<input type="number" id="phone" name="phone" class="form-control">
										<span style="color:red"><?php echo form_error('phone');?></span>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="gst">GST:</label>
										<input type="text" id="gst" name="gst" class="form-control">
										<span style="color:red"><?php echo form_error('gst');?></span>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="type">Vendor Type: </label>
										<select name="type" id="type" class="form-control" id="">
											<option></option>
											<option>Local</option>
											<option>Other State</option>
										</select>
										<span style="color:red"><?php echo form_error('type');?></span>
									</div>
								</div>
							</div>
							<input type="submit" class="btn btn-primary" value="Add Vendor">
						</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
