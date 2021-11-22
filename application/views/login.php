<div class=" login-page">
	<div class="login-box">
		<!-- /.login-logo -->
		<div class="card card-outline card-primary">
			<div class="card-header text-center">
				<a href="" class="h1"><b>LOGIN</b></a>
				<?php if($this->session->flashdata('message')) { ?>
				<h6>
					<div class="alert alert-danger"> <?php echo $this->session->flashdata('message'); ?></h3>
						<?php }  ?>
					</div>
					<div class="card-body">
						<p class="login-box-msg">Sign in to start </p><br>
						<?php echo form_open(''); ?>
							<div class="input-group mb-3">
								<input type="text" class="form-control" name="username" placeholder="User Name"  value="<?php echo set_value('username'); ?>">
								<div class="input-group-append">
									<div class="input-group-text">
										<span class="fas fa-envelope"></span>
									</div>
								</div>
							</div>
							<span style="color:red" class="danger"><?php echo form_error('username'); ?> </span>
							<br>

							<div class="input-group mb-3">
								<input type="password" id="password" class="form-control" name="password" placeholder="Password"><br>
								<div class="input-group-append">
									<div class="input-group-text">
										<span class="fas fa-lock"></span>
									</div>
								</div>
							</div>
							<span style="color:red"><?php echo form_error('password'); ?>
							</span>
							<!-- /.col -->
							<div class="col-8">
								<br>
								<button type="submit" name="login" class="btn btn-primary btn-block">Sign In</button>
							</div>
							<!-- /.col -->
						</form>

					</div>
					<!-- /.card-body -->
			</div>
			<!-- /.card -->
		</div>
		<!-- /.login-box -->
	</div>
	<script type="text/javascript">
		$(document).ready(function () {
			$('#password').keydown(function() {
				if (event.keyCode == 32) {
					alert("No space bar allowed");
					return false;
					}
			});
		});
	</script>