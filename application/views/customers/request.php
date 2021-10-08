<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1> Customer Requirements </h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#"> Customer </a></li>
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
             <form>
             <h3 class="card-title"> Enter All the Details:
             <div class="card-body">
               <div class="row">
                    <div class="col-md-6">
                       <div class="form-group">
                            <label> Customer Name </label>
                            <input type="text" class="form-control" name="c_name" size="50">
                        </div>
                        <div class="form-group">
                            <label > Requirements </label>
                            <textarea class="form-control" name="request" rows="4" cols="50">
                            </textarea>
                        </div>
                        <div class="form-group">
                        <label> Email </label>
                            <input type="email" class="form-control" name="c_email" size="50">
                        </div>
                        <div class="form-group"> <br>
                            <button class="form btn btn-primary fa fa-add" > ADD </button>
                        </div>
                    </div>
                    <div class="col-md-6">
                    <div class="form-group">
                        <label> Phone </label>
                        <input type="tel" class="form-control" name="c_phone" size="50">
                    </div>
                    <div class="form-group">
                        <label > Comments </label>
                        <textarea class="form-control" name="c_dob" rows="4" cols="50">
                        </textarea>
                    </div>
                    </div>
                </div>
            </div>
           </div>
           </form>
         </div>
    </div>
 </div>
</div>