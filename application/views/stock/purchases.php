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
              <li class="breadcrumb-item"><a href="#"> Purchases From Vendor  </a></li>
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
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                        <label>Vendor Code </label>
                        <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="form-group">
                        <label>Vendor Name </label>
                        <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                        <label>Reason</label>
                        <select name="type" class="form-control">
                        <option>Others</option>
                        <option>Transfer</option>
                        </select>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                        <label>Invoice Prefix </label>
                        <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                        <label>Invoice No. </label>
                        <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                        <label>Date of Purchase </label>
                        <input type="date" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                        <label>Inward From PT File</label>
                        <input type="file" class="form-control">
                        </div>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
        <div class="col-sm-6">
            <h5>Products Entry</h5>
          </div>
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                        <label>Stock NO.:</label>
                        <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                        <label>Actual Qty:</label>
                        <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                        <label>Purchase Qty:</label>
                        <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                        <label>Tax %</label>
                        <select name="tax" class="form-control">
                        <option>5</option>
                        <option>12</option>
                        <option>16</option>
                        <option>18</option>
                        </select>
                        </div>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <div class="card-body">
        <table id="example2" class="table table-bordered table-hover table-striped">
            <thead class="table-dark">
            <tr>
                <th>Stock No</th>
                <th>Quality No</th>
                <th>Quantity</th>
                <th>MRP</th>
                <th>Purchase</th>
                <th>Net Total</th>
                <th>GST</th>
                <th>Total</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>454254 </td>
                <td>1dfsd5 </td>
                <td>10</td>
                <td>100</td>
                <td>150</td>
                <td>1500</td>
                <td>75</td>
                <td>1575</td>
                <td><i class="fas fa-edit" style="color:blue"></i>  
                     <i class="fas fa-trash" style="color:red"></i>
                </td>
            </tr>
            <tr>
                <td>gfh76905687 </td>
                <td>1dfs756567d5 </td>
                <td>10</td>
                <td>100</td>
                <td>150</td>
                <td>1500</td>
                <td>75</td>
                <td>1575</td>
                <td><i class="fas fa-edit" style="color:blue"></i>  
                     <i class="fas fa-trash" style="color:red"></i>
                </td>
            </tr><tr>
                <td>gfh76905687 </td>
                <td>1dfs756567d5 </td>
                <td>10</td>
                <td>100</td>
                <td>150</td>
                <td>1500</td>
                <td>75</td>
                <td>1575</td>
                <td><i class="fas fa-edit" style="color:blue"></i>  
                     <i class="fas fa-trash" style="color:red"></i>
                </td>
            </tr>
            <tr>
                <td>gfh76905687 </td>
                <td>1dfs756567d5 </td>
                <td>10</td>
                <td>100</td>
                <td>150</td>
                <td>1500</td>
                <td>75</td>
                <td>1575</td>
                <td><i class="fas fa-edit" style="color:blue"></i>  
                     <i class="fas fa-trash" style="color:red"></i>
                </td>
            </tr>
            <tr>
                <td>gfh76905687 </td>
                <td>1dfs756567d5 </td>
                <td>10</td>
                <td>100</td>
                <td>150</td>
                <td>1500</td>
                <td>75</td>
                <td>1575</td>
                <td><i class="fas fa-edit" style="color:blue"></i>  
                     <i class="fas fa-trash" style="color:red"></i>
                </td>
            </tr>
            </tbody>
        </table>
    <div class="card-body">
    <table id="example2" class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>TOTAL:<input type="number" class="form-control"></th>
                <th>Discount:<input type="number" class="form-control"></th>
                <th>INVOICE TOTAL:<input type="number" class="form-control"></th>
            </tr>
        </thead>
        </table>
        <input type="submit" class="btn btn-primary" value="ADD Goods">
        </div>
        </div>
</div>