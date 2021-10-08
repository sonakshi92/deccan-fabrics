<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1> Employees List </h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#"> Employee  </a></li>
              <li class="breadcrumb-item active"> <?php echo date('d/m/Y') ?></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
        <form method="post">  
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
    <!-- /.card-header -->
    <div class="row">
    <div class="col-md-12">
                <div class="form-group">
        <div class="card-body">
        <table id="example2" class="table table-striped table-bordered table-hover">
        <thead>
          <tr>
            <th> Employee Name </th>
            <th> Phone </th>
            <th> Join Date </th>
            <th> Status </th>
            <th> Action </th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td> name1 </td>
            <td> 9876543210 </td>
            <td> 10/10/2010 </td>
            <td> 
              <select class="form-control">
                <option> Active </option>
                <option> Deactive </option>
              </select> 
              </td>
            <td> 
            <button class="form btn btn-sm btn-primary fa fa-pencil" > </button>
            <button class="form btn btn-sm btn-danger fa fa-trash" > </button>
            </td>
          </tr>
          <tr>
            <td> name2 </td>
            <td> 9876443202 </td>
            <td> 10/10/2012 </td>
            <td>
              <select class="form-control">
                <option> Active </option>
                <option> Deactive </option>
              </select> 
            </td>
            <td> 
            <button class="form btn btn-sm btn-primary fa fa-pencil" ></button>
            <button class="form btn btn-sm btn-danger fa fa-trash" ></button>
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

      <!-- /.card-body -->
    <!-- /.card -->