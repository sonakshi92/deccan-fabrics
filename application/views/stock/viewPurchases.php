<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Purchases</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#"> View Purchases </a></li>
              <li class="breadcrumb-item active"> <?php echo date('d/m/Y') ?></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

 <!-- Main content -->
 <section class="content">
      <div class="container-fluid">
        <div class="row">
        <div class="col-sm-6">
            <h5>Select Date Range</h5>
          </div>
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                        <label>Start Date:</label>
                        <input type="date" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                        <label>End Date:</label>
                        <input type="date" class="form-control">
                        </div>
                    </div>
                    </div>
    <div class="card-body">
        <table id="example2" class="table table-bordered table-hover table-striped">
            <thead class="table-dark">
            <tr>
                <th>Invoice Date</th>
                <th>Vendor Name</th>
                <th>Invoice NO.</th>
                <th>System Entry Date</th>
                <th>Purchases Info</th>
                <th>Total Qty</th>
                <th>Invoice Total</th>
                <th>Action:</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>01/01/2021</td>
                <td>ABC</td>
                <td>PT21/25</td>
                <td>10/01/2021</td>
                <td>Ready Made</td>
                <td>40</td>
                <td>70005</td>
                <td><i class="fas fa-edit" style="color:blue"></i>  
                     <i class="fas fa-trash" style="color:red"></i>
                </td>
            </tr>
            <tr>
                <td>01/01/2021</td>
                <td>XYX</td>
                <td>PT21/26</td>
                <td>10/01/2021</td>
                <td>Raymond</td>
                <td>80</td>
                <td>80000</td>
                <td><i class="fas fa-edit" style="color:blue"></i>  
                     <i class="fas fa-trash" style="color:red"></i>
                </td>
            </tr>
            <tr>
                <td>01/01/2021</td>
                <td>AAA</td>
                <td>PT21/27</td>
                <td>10/01/2021</td>
                <td>Jockey</td>
                <td>100</td>
                <td>9000</td>
                <td><i class="fas fa-edit" style="color:blue"></i>  
                     <i class="fas fa-trash" style="color:red"></i>
                </td>
            </tr>
            </tbody>
        </table>
        </div>
        </div>
        </div>
            </div>
          </div>
        </div>
      </div>
    </section>
