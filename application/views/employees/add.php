<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1> Add Employee Details </h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="employee"> Employee </a></li>
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
					<form id="emp">
						<h3 class="card-title"> Enter All the Details:
							<div class="card-body">
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label for="fname"> First Name </label>
											<input type="text" class="form-control" id="fname" name="fname" size="50">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label for="lname"> Last Name </label>
											<input type="text" class="form-control" id="lname" name="lname" size="50">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label for="sales_code">Sales Code </label>
											<input type="int" class="form-control" id="sales_code" name="sales_code" size="50">
										</div>
									</div>
									<div class="col-md-6">
											<div class="form-group">
											<label for="phone"> Phone </label>
											<input type="tel" class="form-control" id="phone" name="phone" size="50">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label for="basic_salary"> Basic Salary </label>
											<input type="text" class="form-control" id="basic_salary" name="basic_salary" size="50">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label for="email">Email</label>
											<input type="text" class="form-control" id="email" name="email" size="50">
										</div>
									</div>
									<div class="col-md-6">
											<div class="form-group">
											<label for="pic"> Profile Picture:</label>
											<input type="file" class="form-control" id="pic" name="image">
										</div>
									</div>
									<div class="col-md-6">
											<div class="form-group">
												<label for="gender">Gender:</label>
											</div>
											<div class="form-check form-check-inline">
												<input type="radio" class="form-check-input" id="gender" value="male" name="gender">Male 
											</div> 
											<div class="form-check form-check-inline">
												<input type="radio" class="form-check-input" id="gender" value="female" name="gender"> Female 
											</div> 
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label for="dob"> Date Of Birth </label>
											<input type="date" class="form-control" id="dob" name="birthday" size="50">
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
											<label for="pincode">Pincode</label>
											<input type="text" class="form-control" id="pincode" name="pincode" size="40" placeholder="500000">
											<span style="color:red"><?php echo form_error('pincode');?></span>
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
										</select>
										</div>
									</div>
									<div class="col-md-6">
									<div class="form-group">
										<label>State</label>
										<select name="state" id="state" class="form-control input-lg">
											<option value="36">Telangana</option>
										</select>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
										<label>City</label>
										<select name="city" id="city" class="form-control input-lg">
											<option value="4460">Hyderabad</option>
										</select>
										</div>
									</div>
										<div class="col-md-6">
											<div class="form-group">
												<label for="a_proof"> Address Proof :</label>
												<input type="file" class="form-control" id="a_proof" name="address_proof">
											</div>
										</div>
										<div class="col-md-6">
												<div class="form-group">
												<label for="id_proof"> Photo ID Proof :</label>
												<input type="file" class="form-control" id="id_proof" name="id_proof">
											</div>
										</div>
										
										<div class="col-md-6">
												<div class="form-group">
												<label for="doj"> Date Of Join</label>
												<input type="date" class="form-control" id="doj" name="birthday" size="50">
											</div>
											<div class="col-md-6">
												<div class="form-group"> <br>
												<button id="addemp" class="form btn btn-primary fa fa-plus"> Add </button>
											</div>
									</div>	</div>
								</div>
							</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<script>
	
$(document).ready(function(){
	$('#success').css('display','none');
	$('#success').css('display','none');
	$('#error').css('display','none');
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


	
	jQuery.extend(jQuery.expr[':'], {
    focusable: function (el, index, selector) {
        return $(el).is('a, button, :input, [tabindex]');
    }
});

	$("form#emp").submit(function(event){
		event.preventDefault();
		var formdata = $('#emp').serialize();
		$('#addemp').html(' Please wait.....');
		$.ajax({
			type: 'POST',
			url: '<?php echo base_url();?>employee/addEmp',
			data: formdata,
			success: function(data){
				alert(data);
				if(data == 'success'){
					$('#addemp').html(' Add New Employee');
					$('#emp').trigger("reset");
					$('#error').css('display','none');
					$('#success').css('display','block');
					$('#success').html('Items added successfully !');
					location.reload();
				}
				else{
					$('#addemp').html(' Add');
					$('#error').css('display','block');
					$('#error').html(data);
					$('#success').css('display','none');
				}
			}
		});
	 });
});
</script>