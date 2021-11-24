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
	</section>
        <div class="row">
            <div class="col-md-6">
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
								<?php echo form_open('');
								foreach($getData as $row){
								?>
							<label for="name">Full Name:</label>
							<div class="input-group mb-3">
								<input type="text" class="form-control" id="name" name="name" placeholder="Full Name" value="<?php echo $row->name;?>">
								<div class="input-group-append">
									<div class="input-group-text">
										<span class="fas fa-user"></span>
									</div>
								</div>
							</div>
							<span style="color:red" class="danger"><?php echo form_error('name') ?> </span>

							<label for="">User Name</label>
							<div class="input-group mb-3">
								<input type="text" class="form-control" name="username" placeholder="Admin User Name" value="<?php echo $row->username;?>" disabled>
								<div class="input-group-append">
									<div class="input-group-text">
										<span class="fas fa-user"></span>
									</div>
								</div>
							</div>
							<span style="color:red" class="danger"><?php echo form_error('username'); ?> </span>

								<label for="email">Email</label>
							<div class="input-group mb-3">
								<input type="email" class="form-control" id="email" name="email" placeholder="Email" value="<?php echo $row->email; ?>">
								<div class="input-group-append">
									<div class="input-group-text">
										<span class="fas fa-envelope"></span>
									</div>
								</div>
							</div>
							<span style="color:red"><?php echo form_error('email'); ?>
							</span>

								<label for="password">Change Password</label>
							<div class="input-group mb-3">
								<input type="password" id="password" class="form-control" name="password" placeholder="Change Password">
								<div class="input-group-append">
									<div class="input-group-text">
										<span class="fas fa-lock"></span>
									</div>
								</div>
							</div>
							<span style="color:red"><?php echo form_error('password'); ?>
							
							<div id="pswd_info">
								<p><strong>Password requirements:</strong></p>
								<ul type="square" >
									<li id="letter" >At least <strong>one letter</strong></li>
									<li id="capital">At least <strong>one capital letter</strong></li>
									<li id="number">At least <strong>one number</strong></li>
									<li id="length">At least <strong> 8 charaters</strong></li>
									<li id="len" style="display:none">Not more than  <strong>15 characters</strong></li>
									<li id="special" >At least <strong>one special character</strong></li>
								</ul>
							</div>
							</span>

								<label for="passconf">Confirm Password</label>
							<div class="input-group mb-3">
								<label for=""></label>
								<input type="password" id="passconf" class="form-control" name="passconf" placeholder="Confirm Password"><br>
								<div class="input-group-append">
									<div class="input-group-text">
										<span class="fas fa-lock"></span>
									</div>
								</div>
							</div>
							
							<span style="color:red"><?php echo form_error('passconf'); ?>
							</span>
							
								<label for="phone">Phone Number: </label>
							<div class="input-group mb-3">
								<input type="number" class="form-control" id="phone" name="phone" placeholder="Phone No:" value="<?php echo $row->phone; ?>"><br>
								<div class="input-group-append">
									<div class="input-group-text">
										<span class="fas fa-phone"></span>
									</div>
								</div>
							</div>
							<span style="color:red"><?php echo form_error('phone'); ?>
							</span>
							<?php }?>
							<div class="mb-3">
								<br>
								<button name="signup" class="btn btn-warning btn-block">Update Your Details</button>
							</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="col-md-6">
			<!-- USERS LIST -->
			<div class="card">
				<div class="card-header">
					<h3 class="card-title">Admin Members</h3>

					<div class="card-tools">
						<span class="badge badge-danger"><?php echo $adminsCount?> Total members</span>
						<button type="button" class="btn btn-tool" data-card-widget="collapse">
							<i class="fas fa-minus"></i>
						</button>
						<button type="button" class="btn btn-tool" data-card-widget="remove">
							<i class="fas fa-times"></i>
						</button>
					</div>
				</div>
				<!-- /.card-header -->
				<div class="card-body p-0">
					<ul class="users-list clearfix">
						<?php foreach($allAdmin as $admin): ?>
						<li>
							<a class="users-list-name"><?php echo $admin->name; ?></a>
							<a class="users-list-name"><?php echo $admin->username; ?></a>
							<a class="users-list-name"><?php echo $admin->phone; ?></a>
							<span class="users-list-date"><?php echo $admin->created_at;?></span>
						</li>
						<?php endforeach;?>
					</ul>
					<!-- /.users-list -->
				</div>
				<!-- /.card-body -->
				<div class="card-footer text-center">
					<a href="javascript:"></a>
				</div>
				<!-- /.card-footer -->
			</div>
			<!--/.card -->
		</div>
	</div>
</div>

<script type="text/javascript">
    $(document).ready(function () {
		$('#pswd_info').hide();
		//No space bar allowed
		$('#password').keydown(function() {
			if (event.keyCode == 32) {
				alert("No space bar allowed");
				return false;
			}
		});
	// length
		$('#password').keyup(function() {
            var pswd = $("#password").val();
            if (pswd.length < 8) {
                $('#length').show();
            }else{
                $('#length').hide();
            }

			if (pswd.length > 15) {
                $('#len').show();
            }else{
                $('#len').hide();
            }
	//letter
            if (pswd.match(/[A-z]/)) {
                $('#letter').hide();
            }else{
                $('#letter').show();
            }
	//capital letter
            if (pswd.match(/[A-Z]/)) {
                $('#capital').hide();
            }else{
                $('#capital').show();
            }
	//special character
            if (pswd.match(/[^a-zA-Z0-9]/))
            {
                $('#special').hide();
            }else{
                $('#special').show();
            }
	//num
            if(pswd.match(/\d/) ) {
                $('#number').hide();
            } else {
                $('#number').show();;
            }
		}).focus(function() {
            $('#pswd_info').show();
        }).blur(function() {
            $('#pswd_info').hide();
        });
	});
</script>