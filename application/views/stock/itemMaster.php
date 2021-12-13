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
					<span class="alert alert-success" id="success"></span>
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
					<div class="card">
						<div class="card-header">
							<form id="items">
							<div class="row">
								<div class="col-md-2">
									<div class="form-group">
										<label>Stock No.:</label>
										<input type="text" name="stock" class="form-control" required>
									</div>
								</div>
								<div class="col-md-2">
									<div class="form-group">
										<label>Quality No</label>
										<input type="text" name="quality" class="form-control" required>
									</div>
								</div>
								<div class="col-md-2">
									<div class="form-group">
										<label>Brand</label>
										<select name="brand" id="brand" class="form-control" required>
											<?php
											foreach($brand as $row)
											{
											echo '<option value="'.$row->id.'">'.$row->name.'</option>';
											}
											?>
										</select>
									</div>
								</div>
								<div class="col-md-2">
									<div class="form-group">
										<label>Categories</label>
										<select name="category" id="category" class="form-control" required>
											<option>Select Category</option>
										</select>
									</div>
								</div>
								<div class="col-md-2">
									<div class="form-group">
										<label>Retail Price</label>
										<input type="number" name="retail" class="form-control" required>
									</div>
								</div>
								<div class="col-md-2">
									<div class="form-group">
										<label>Purchase Price</label>
										<input type="number" name="purchase" class="form-control" required>
									</div>
								</div>
								<div class="col-md-2">
									<div class="form-group">
										<label>Item Description</label>
										<input type="text" name="description" class="form-control" required>
									</div>
								</div>
								<div class="col-md-2">
									<div class="form-group">
										<label>Shade</label>
										<input type="text" name="shade" class="form-control" required>
									</div>
								</div>
								<div class="col-md-2">
									<div class="form-group">
										<label>Size</label>
										<input type="text" name="size" class="form-control" required>
									</div>
								</div>
								<div class="col-md-2">
									<div class="form-group">
										<label>Tax</label>
										<input type="number" name="tax" class="form-control" required>
									</div>
								</div>
								<div class="col-md-2">
									<div class="form-group">
										<label>LSQ</label>
										<input type="number" name="lsq" class="form-control" required>
									</div>
								</div>
								<div class="col-md-2">
									<div class="form-group">
										<label>HSN Code</label>
										<input type="number" name="hsn" class="form-control" required>
									</div>
								</div>
								<div class="col-md-2">
									<div class="form-group">
										<br>
										<input type="submit" id="addItems" value="Add Details" class="form-control btn btn-primary">
									</div>
								</div>
							</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<div class="card-body">
		<table id="inventory" class="table table-bordered table-hover table-striped">
			<thead class="table-dark">
				<tr>
					<th>Stock No</th>
					<th>Quality No</th>
					<th>Brand</th>
					<th>Category</th>
					<th>Retail Price</th>
					<th>Purchase Price</th>
					<th>Item Description</th>
					<th>Shade</th>
					<th>Size</th>
					<th>Tax</th>
					<th>HSN Code</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
			<?php
				foreach($this->cart->contents() as $rows)
				{
				?>
				<tr>
					<td><?php echo $rows['id']; ?></td>
					<td><?php echo $rows['quality']; ?></td>
					<td><?php echo $rows['brand']; ?></td>
					<td><?php echo $rows['category']; ?></td>
					<td><?php echo $rows['retail']; ?></td>
					<td><?php echo $rows['price']; ?></td>
					<td><?php echo $rows['name']; ?></td>
					<td><?php echo $rows['shade']; ?></td>
					<td><?php echo $rows['size']; ?></td>
					<td><?php echo $rows['tax']; ?></td>
					<td><?php echo $rows['hsn']; ?></td>
					
					<td><i class="fas fa-edit" style="color:blue"></i>
						<i class="fas fa-trash" style="color:red"></i>
					</td>
				</tr>
				<?php } ?> 
			</tbody>
		</table>
		<input type="submit" id="addToDB" onclick="location.href = '<?php echo base_url(); ?>stock/addToDB';" name="addToDB" value="Store All Products" class="form-control btn btn-primary">
	</div>
</div>
<script>
	
$(document).ready(function(){
	//enter key
	$('#success').css('display','none');
	jQuery.extend(jQuery.expr[':'], {
    focusable: function (el, index, selector) {
        return $(el).is('a, button, :input, [tabindex]');
    }
});

$(document).on('keypress', 'input,select', function (e) {
    if (e.which == 13) {
        e.preventDefault();
        // Get all focusable elements on the page
        var $canfocus = $(':focusable');
        var index = $canfocus.index(document.activeElement) + 1;
        if (index >= $canfocus.length) index = 0;
        $canfocus.eq(index).focus();
    }
});

	$('#brand').change(function(){
	var brand_id = $('#brand').val();
	//alert(brand_id);
	if(brand_id != '')
	{
		$.ajax({
			url:"<?php echo base_url(); ?>stock/fetch_cat",
			method:"POST",
			data:{brand_id:brand_id},
			success:function(data)
			{
			// alert(data);
			$('#category').html(data);
			}
		});
		}
	});

	$("form#items").submit(function(event){
		event.preventDefault();
		var formdata = $('#items').serialize();
		$('#addItems').html(' Please wait.....');
		$.ajax({
			type: 'POST',
			url: '<?php echo base_url();?>stock/addToSess',
			data: formdata,
			success: function(data){
				alert(data);
				if(data == 'success'){
					$('#addItems').html(' Add New Customer');
					$('#items').trigger("reset");
					$('#error').css('display','none');
					$('#success').css('display','block');
					$('#success').html('Items added successfully !');
					// $('#inventory').DataTable().ajax.reload();
					location.reload();
				}
				else{
					$('#addItems').html(' Add');
					$('#error').css('display','block');
					$('#error').html(data);
					$('#success').css('display','none');
				}
			}
		});
	 });
});
</script>