<div class=" login-page">
	<div class="card card-outline card-primary">
		<div class="card-header text-center">
			<a href="" class="h1"><b>Create New Admin</b></a>
			<?php if($this->session->flashdata('message')) { ?>
			<h6>
			<div class="alert alert-danger"> <?php echo $this->session->flashdata('message'); ?></h3>
				<?php }  ?>
			</div>
			<div class="card-body">
				<p class="login-box-msg">SignUp New Admin</p><br>
				<?php echo form_open(''); ?>
				<div class="input-group mb-3">
					<input type="text" class="form-control" name="name" placeholder="Full Name" value="<?php echo set_value('name'); ?>" autofocus>
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
			
            if ( pswd.length < 8 ) {
                $('#length').show();
            } else {
                $('#length').hide();
            }
//letter
            if ( pswd.match(/[A-z]/) ) {
                $('#letter').hide();
            } else {
                $('#letter').show();
            }
//capital letter
            if ( pswd.match(/[A-Z]/) ) {
                $('#capital').hide();
            } else {
                $('#capital').show();
            }
//special character
            if ( pswd.match(/[^a-zA-Z0-9]/))
            //  if ( pswd.match(/[^a-z]+/g))
            {
                $('#special').hide();
            } else {
                $('#special').show();
            }
//validate number
            if ( pswd.match(/\d/) ) {
                $('#number').hide();
            } else {
                $('#number').show();
            }
            // keyup event code here
		}).focus(function() {
            $('#pswd_info').show();
        }).blur(function() {
            $('#pswd_info').hide();
        });
	});
</script>