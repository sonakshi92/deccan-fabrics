<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Welcome <?php echo $_SESSION['name'];?></h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#"><?php echo  explode('|',trim($title))[0]; ?></a></li>
                        <li class="breadcrumb-item active"><?php echo  date('d/m/Y'); ?></li>
                    </ol>
                    <?php if( $this->session->flashdata('message')) { ?>
                    <div class="alert alert-success">
                        <?php echo $this->session->flashdata('message') ?>
                    </div>
                    <?php } ?>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <section class="content">
		<div class="container-fluid">
			<!-- Info boxes -->
			<div class="row">
				<div class="col-12 col-sm-6 col-md-3">
					<div class="info-box">
						<span class="info-box-icon bg-info elevation-1"><i class="fas fa-list-ol"></i></span>
						<div class="info-box-content">
							<span class="info-box-text"> To to List </span>
							<span class="info-box-number">10</span>
						</div>
						<!-- /.info-box-content -->
					</div>
					<!-- /.info-box -->
				</div>
				<!-- /.col -->
				<div class="col-12 col-sm-6 col-md-3">
					<div class="info-box mb-3">
						<span class="info-box-icon bg-danger elevation-1"><i class="fas fa-envelope"></i></span>
						<div class="info-box-content">
							<span class="info-box-text">Mail box</span>
							<span class="info-box-number">30</span>
						</div>
						<!-- /.info-box-content -->
					</div>
					<!-- /.info-box -->
				</div>

				<div class="col-12 col-sm-6 col-md-3">
					<div class="info-box mb-3">
						<span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

						<div class="info-box-content">
							<span class="info-box-text"> Total admins </span>
							<span class="info-box-number">4</span>
						</div>
						<!-- /.info-box-content -->
					</div>
					<!-- /.info-box -->
				</div>
                <div class="col-12 col-sm-6 col-md-3">
					<div class="info-box mb-3">
						<span class="info-box-icon bg-info elevation-1"><i class="fas fa-user"></i></span>

						<div class="info-box-content">
							<span class="info-box-text"> Create New admin </span>
						</div>
						<!-- /.info-box-content -->
					</div>
					<!-- /.info-box -->
				</div>
				<!-- /.col -->
			</div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">View Or Edit Your Details</h5>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
							<div class="row">
								<div class="col-md-8">
									<p class="text-center">
										<strong>Details</strong>
									</p>
				<?php echo form_open(''); ?>
				<div class="input-group mb-3">
					<input type="text" class="form-control" name="name" placeholder="Full Name" value="<?php echo set_value('name');?>" autofocus>
					<div class="input-group-append">
						<div class="input-group-text">
							<span class="fas fa-user"></span>
						</div>
					</div>
				</div>
				<span style="color:red" class="danger"><?php echo form_error('name'); ?> </span>

				<div class="input-group mb-3">
					<input type="text" class="form-control" name="username" placeholder="Admin User Name" value="<?php echo set_value('username'); ?>">
					<div class="input-group-append">
						<div class="input-group-text">
							<span class="fas fa-user"></span>
						</div>
					</div>
				</div>
				<span style="color:red" class="danger"><?php echo form_error('username'); ?> </span>

				<div class="input-group mb-3">
					<input type="email" class="form-control" name="email" placeholder="Email" value="<?php echo set_value('email'); ?>">
					<div class="input-group-append">
						<div class="input-group-text">
							<span class="fas fa-envelope"></span>
						</div>
					</div>
				</div>
				<span style="color:red"><?php echo form_error('email'); ?>
				</span>

				<div class="input-group mb-3">
					<input type="password" id="password" class="form-control" name="password" placeholder="Password">
					<div class="input-group-append">
						<div class="input-group-text">
							<span class="fas fa-lock"></span>
						</div>
					</div>
				</div>
				<span style="color:red"><?php echo form_error('password'); ?>
				
				<div id="pswd_info">
					<p><strong>Password requirements:</strong></p>
					<ul>
						<li id="letter" type="X" >At least <strong>one letter</strong></li>
						<li id="capital">At least <strong>one capital letter</strong></li>
						<li id="number">At least <strong>one number</strong></li>
						<li id="length">Be at least <strong>8 characters</strong></li>
						<li id="special" >At least <strong>one special character</strong></li>
					</ul>
				</div>
				</span>

				<div class="input-group mb-3">
					<input type="password" class="form-control" name="passconf" placeholder="Confirm Password"><br>
					<div class="input-group-append">
						<div class="input-group-text">
							<span class="fas fa-lock"></span>
						</div>
					</div>
				</div>
				
				<span style="color:red"><?php echo form_error('passconf'); ?>
				</span>
				<div class="input-group mb-3">
					<input type="number" class="form-control" name="phone" placeholder="Phone No:" value="<?php echo set_value('phone'); ?>"><br>
					<div class="input-group-append">
						<div class="input-group-text">
							<span class="fas fa-phone"></span>
						</div>
					</div>
				</div>
				<span style="color:red"><?php echo form_error('phone'); ?>
				</span>
				<!-- /.col -->
				<div class="mb-3">
					<br>
					<button name="signup" class="btn btn-warning btn-block">Sign Up</button>
				</div>
			</form>
									
									<!-- /.chart-responsive -->
								</div>