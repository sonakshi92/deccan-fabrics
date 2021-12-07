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
						<li class="breadcrumb-item"><a href="#"> Investment and Expenses </a></li>
						<li class="breadcrumb-item active"> <?php echo date('d/m/Y') ?></li>
					</ol>
				</div>
			</div>
		</div><!-- /.container-fluid -->
		<div class="row">
			<div class="col-12">
				<div class="card">
						<div class="card-body">
							<div class="row">
								<div class="col-md-6">
								<div class="form-group">
                  <!-- Button trigger modal -->
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#form_brand">
                    Add Brand
                  </button>
								</div>
								</div>
								<div class="col-md-6">
								<div class="form-group">
								 <!-- Button trigger modal -->
                 <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#form_category">
                    Add Category
                  </button>
								</div>
								</div>
								<div class="col-md-6">
								<div class="form-group">
                    Stock Balance: 
                  </button>
								</div>
								</div>
                <div class="col-md-6">
								<div class="form-group">
                    Products: 
                  </button>
								</div>
								</div>
							</div>
						</div>
					</div>
         </div>
			</div>
     </div>
<!-- Modal -->
<div class="modal fade" id="form_brand" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add New Brand</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="brand_form" onsubmit="return false">
          <div class="form-group">
            <label>Brand Name</label>
            <input type="text" class="form-control" name="brand_name" id="brand_name" placeholder="Enter Brand Name">
            <small id="brand_error" class="form-text text-muted"></small>
          </div>
          <button type="submit" class="btn btn-primary">Add</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


<!-- Modal -->
<div class="modal fade" id="form_category" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Category & Link to Brands </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="category_form" onsubmit="return false">
          <div class="form-group">
            <label>Category Name</label>
            <input type="text" class="form-control" name="category_name" id="category_name"  placeholder="Add New Category">
            <small id="cat_error" class="form-text text-muted"></small>
          </div>
            <label for="exampleInputPassword1">Link to Brands</label>
            <div class="col-sm-6">
            <div class='form-group'>
            <?php
            foreach($brand as $row)
            {?>
                 <div class='form-check'>
                  <input type='checkbox' class='form-check-input' value='<?php echo $row->id; ?>'  id='<?php echo $row->id; ?>' name='<?php echo $row->name;?>'>
                  <label class='form-check-label' for='<?php echo $row->id; ?>'> <?php echo $row->name ?>
                  </label>
                  </div>
           		<?php	} ?> 
            </div>
            
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<script>
  $('document').ready(function(){
    $("#brand_form").on("submit",function(){
		if ($("#brand_name").val() == "") {
			$("#brand_name").addClass("border-danger");
			$("#brand_error").html("<span class='text-danger'>Please Enter Brand Name</span>");
		}else{
			$.ajax({
				url : '<?php echo base_url(); ?>stock/addbrand',
				method : "POST",
				data : $("#brand_form").serialize(),
				success : function(data){
					if (data == "success") {
						$("#brand_name").removeClass("border-danger");
						$("#brand_error").html("<span class='text-success'>New Brand Added Successfully..!</span>");
						$("#brand_name").val("");
						fetch_brand();
					}else{
						// alert(data);
            $("#brand_name").addClass("border-danger");
		      	$("#brand_error").html("<span class='text-danger'>" + data + "</span>");
					}
				}
			})
		}
	  })
    
  })
</script>