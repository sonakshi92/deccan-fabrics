<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Item Master</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Item Master For Purchases</a></li>
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
                    <div class="col-md-2">
                        <div class="form-group">
                        <label>Stock No.:</label>
                        <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                        <label>Quality No</label>
                        <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                        <label>Brand</label>
                        <select name="type" class="form-control">
                        <option>Raymond</option>
                        <option>Jockey</option>
                        <option>Multi-Brand</option>
                        </select>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                        <label>Categories</label>
                        <select name="type" class="form-control">
                        <option>Suiting</option>
                        <option>Shirting</option>
                        <option>Ready Made</option>
                        <option>Suit/Blazer</option>
                        <option>Vest</option>
                        <option>Brief</option>
                        <option>Accessories</option>
                        <option>Bed & Bath</option>
                        </select>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                        <label>Retail Price</label>
                        <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                        <label>Purchase Price</label>
                        <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                        <label>Item Description</label>
                        <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                        <label>Tax</label>
                        <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                        <label>HSN Code</label>
                        <input type="text" class="form-control">
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
                <th>Brand</th>
                <th>Category</th>
                <th>Retail Price</th>
                <th>Purchase Price</th>
                <th>Item Description</th>
                <th>Tax</th>
                <th>HSN Code</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>454254</td>
                <td>1dfsd5</td>
                <td>Raymond</td>
                <td>Suiting</td>
                <td>1500</td>
                <td>1100</td>
                <td>premium suiting</td>
                <td>5%</td>
                <td>1575</td>
                <td><i class="fas fa-edit" style="color:blue"></i>  
                     <i class="fas fa-trash" style="color:red"></i>
                </td>
            </tr>
            <tr>
                <td>4544353254</td>
                <td>13244dfsd5</td>
                <td>Jockey</td>
                <td>Vest</td>
                <td>500</td>
                <td>400</td>
                <td>Gym Vest</td>
                <td>5%</td>
                <td>150075</td>
                <td><i class="fas fa-edit" style="color:blue"></i>  
                     <i class="fas fa-trash" style="color:red"></i>
                </td>
            </tr>
            <tr>
                <td>22254</td>
                <td>122sd5</td>
                <td>Raymond</td>
                <td>Shirting</td>
                <td>1500</td>
                <td>1100</td>
                <td>100% Cotton</td>
                <td>5%</td>
                <td>1575</td>
                <td><i class="fas fa-edit" style="color:blue"></i>  
                     <i class="fas fa-trash" style="color:red"></i>
                </td>
            </tr>
            </tbody>
        </table>
</div>
</div>