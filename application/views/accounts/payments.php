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
						<li class="breadcrumb-item active"> <?php echo date('d/m/Y') ?></li>
					</ol>
				</div>
			</div>
		</div><!-- /.container-fluid -->
<div class="col-12">
    <div class="card">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <div class="card-body">
                            <table id="example2" class="table table-striped table-bordered table-hover">
                                <thead class="table table-dark">
                                    <tr>
                                        <th>Pending Vendors</th>
                                        <th>Invoice No.</th>
                                        <th>Rs.</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>ABC Fabrics</td>
                                        <td>PT/101</td>
                                        <td>50,000</td>
                                        <td> <a href="">Change to Paid</a> </td>
                                    </tr>
                                    <tr>
                                        <td>Raymond PVT LTD</td>
                                        <td>PT/102</td>
                                        <td>2,00,000</td>
                                        <td> <a href="">Change to Paid</a> </td>
                                    </tr>
                                    <tr>
                                        <td><b>Total</b></td>
                                        <td><b>2,50,000 </b></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <table id="example2" class="table table-striped table-bordered table-hover">
                            <thead class="table table-dark">
                                <br>
                                <tr>
                                    <th>Paid Vendors</th>
                                    <th>Invoice No.</th>
                                    <th>Rs.</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>XYZZZZ</td>
                                    <td>PT/82</td>
                                    <td>1,15,000 </td>
                                    <td> <a href="">Change to Pending</a> </td>
                                </tr>
                                <tr>
                                    <td>Fabrics</td>
                                    <td>PT/78</td>
                                    <td>25,00</td>
                                    <td> <a href="">Change to Pending</a> </td>
                                </tr>
                                <tr>
                                    <td>Raymond ltd</td>
                                    <td>PT/98</td>
                                    <td>15,000</td>
                                    <td> <a href="">Change to Pending</a> </td>
                                </tr>
                                
                                    <td><b> Total </b></td>
                                    <td><b>5500 </b></td>
                                    <td> </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
	</section>
</div>

<!-- /.card-body -->
<!-- /.card -->
