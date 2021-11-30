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
					<h1><span id="success"></span></h1>
					<?php if( $this->session->flashdata('message')) { ?>
                    <div id="success" class="alert alert-success">
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
					<form id="customerData" method="post">
					<div class="card">
						<div class="card-header">
							<div  class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label for="name">First Name</label>
										<input type="text" class="form-control" id="fname" name="fname" size="40" placeholder="First Name">
										<span style="color:red"><?php echo form_error('fname');?></span>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="lname">Last Name</label>
										<input type="text" class="form-control" id="lname" name="lname" size="40" placeholder="Last Name">
										<span style="color:red"><?php echo form_error('lname');?></span>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label> Email </label>
										<input type="email" class="form-control" name="email" size="40" placeholder="Email">
										<span style="color:red"><?php echo form_error('email');?></span>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label> Phone </label>
										<input type="tel" class="form-control" name="phone" size="40" title="Phone number should start with 7, 8 or 9 and should be valid"  placeholder="(999) 999-9999">
										<!-- <input type="tel" class="form-control" name="phone" size="40" pattern="[7-9]{1}[0-9]{9}" title="Phone number should start with 7, 8 or 9 and should be valid"  placeholder="(999) 999-9999"> -->
										<span style="color:red"><?php echo form_error('phone');?></span>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="birthday">Date Of Birth</label>
										<input type="date" class="form-control" id="birthday" name="birthday" size="40">
										<span style="color:red"><?php echo form_error('birthday');?></span>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="address">Address</label>
										<input type="text" class="form-control" id="address" name="address" size="40" placeholder="Address">
										<span style="color:red"><?php echo form_error('address');?></span>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="landmark">Landmark</label>
										<input type="text" class="form-control" id="landmark" name="landmark" size="40" placeholder="Landmark">
										<span style="color:red"><?php echo form_error('landmark');?></span>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
									<label>Country</label>
									<select name="country" id="country" class="form-control input-lg">
										<option value="101">Select Country</option>
										<option value="101">India</option>
										<?php
										foreach($country as $row)
										{
										echo '<option value="'.$row->id.'">'.$row->name.'</option>';
										}
										?>
										<span style="color:red"><?php echo form_error('country');?></span>
									</select>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
									<label>State</label>
									<select name="state" id="state" class="form-control input-lg">
										<option value="36">Telangana</option>
									</select>
									<span style="color:red"><?php echo form_error('state');?></span>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
									<label>City</label>
									<select name="city" id="city" class="form-control input-lg">
										<option value="4460">Hyderabad</option>
									</select>
									<span style="color:red"><?php echo form_error('city');?></span>
									</div>
								</div>
							</div>
							<button type="submit" name="submit" id="addCust" class="form btn btn-primary fa fa-plus"> Add </button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</section>
</div>
<script>
$(document).ready(function(){
	$('#country').change(function(){
	var country_id = $('#country').val();
	if(country_id != '')
	{
		$.ajax({
			url:"<?php echo base_url(); ?>customer/fetch_state",
			method:"POST",
			data:{country_id:country_id},
			success:function(data)
			{
			$('#state').html(data);
			$('#city').html('<option value="">Select City</option>');
			}
		});
	}else{
		$('#state').html('<option value="">Select State</option>');
		$('#city').html('<option value="">Select City</option>');
		}
	});

	$('#state').change(function(){
	var state_id = $('#state').val();
	if(state_id != '')
	{
		$.ajax({
			url:"<?php echo base_url(); ?>customer/fetch_city",
			method:"POST",
			data:{state_id:state_id},
			success:function(data)
			{
			$('#city').html(data);
			}
		});
	}else{
		$('#city').html('<option value="">Select City</option>');
	}
	});


	//form Validation
	// $('form#customerData').validate();
		// $('#customerData').validate({
		// 	submitHandler: function(form) {
		// 		alert($('form').serialize());
		// 		return false;
		// 	}
		// });

	//insert customer Data to DB
	 $("form#customerData").submit(function(event){
		event.preventDefault();
		var formdata = $('#customerData').serialize();

		$.ajax({
			type: 'POST',
			url: '<?php echo base_url();?>customer/addToDb',
			data: formdata,
			success: function(resp){
				alert(resp);
				if(resp == 'success'){
					$('#customerData').trigger("reset");
					$('#success').html('Customer added successfully !');
				}
				else{
					$('').html(resp);
				}
			}
		});
	 });
	
});
</script>
