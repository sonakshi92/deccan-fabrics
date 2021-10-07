<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__wobble" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-dark">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="home" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link"> Emergency Contacts</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
         
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> Events Reminder
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> Customers
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="<?php echo base_url(); ?>assets/theme/dist/img/Raymond.png" alt="Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light"> Deccan Fabrics </span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <!-- <img src="<?php //echo base_url(); ?>assets/theme/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image"> -->
        </div>
        <div class="info">
          <a href="#" class="d-block"> Raymond | Jockey </a>
        </div>
      </div>

      
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <p class="nav-link"><i class="nav-icon fas fa-home"></i><?php echo anchor('login/dashboard', 'Dashboard')?></p>
            <i class="fas fa-angle-left right"></i>
          </li>
      
          <li class="nav-item">
            <p class="nav-link"><i class="nav-icon fas fa-table"></i><?php echo anchor('bill/billing', 'Billing')?><i class="fas fa-angle-left right"></i></p>
            
            <ul class="nav nav-treeview">
              <li class="nav-item">
                  <p class="nav-link"><i class="nav-icon far fa-circle text-info"></i><?php echo anchor('bill/billing', 'New Billing')?> </p>
                </a>
              </li>
              <li class="nav-item">
                  <p class="nav-link"><i class="nav-icon far fa-circle text-success"></i><?php echo anchor('bill/exchange', 'Exchange Billing')?></p>
                </a>
              </li>
              <li class="nav-item">
                  <p class="nav-link"><i class="nav-icon far fa-circle text-warning"></i><?php echo anchor('bill/void', 'Void Billing')?></p>
                </a>
              </li>
              <li class="nav-item">
                  <p class="nav-link"><i class="nav-icon far fa-circle text-danger"></i><?php echo anchor('bill/return', 'Return via stock')?></p>
                </a>
              </li>
              
            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Sales Reports
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <p class="nav-link"><i class="far fa-circle nav-icon"></i><?php echo anchor('report/daily', 'Daily Sales Report')?></p>
              </li>
              <li class="nav-item">
                <p class="nav-link"><i class="far fa-circle nav-icon"></i><?php echo anchor('report/monthly', 'Monthly Sales Report')?></p>
              </li>
              <li class="nav-item">
                <p class="nav-link"><i class="far fa-circle nav-icon"></i><?php echo anchor('report/custom', 'Sales Report')?></p>
              </li>
            </ul>

            <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Accounts
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <p class="nav-link"><i class="far fa-circle nav-icon"></i><?php echo anchor('account/cashbook', 'Cash Book')?></p>
              </li>
              <li class="nav-item">
                <p class="nav-link"><i class="far fa-circle nav-icon"></i><?php echo anchor('account/account', 'Accounts')?></p>
              </li>
              <li class="nav-item">
                <p class="nav-link"><i class="far fa-circle nav-icon"></i><?php echo anchor('account/paid', 'Payments Done')?></p>
              </li>
              <li class="nav-item">
                <p class="nav-link"><i class="far fa-circle nav-icon"></i><?php echo anchor('account/pending', 'Pending payments')?></p>
              </li>
              <li class="nav-item">
                <p class="nav-link"><i class="far fa-circle nav-icon"></i><?php echo anchor('account/documents', 'Documents')?></p>
              </li>
              <li class="nav-item">
                <p class="nav-link"><i class="far fa-circle nav-icon"></i><?php echo anchor('account/bankdeatails', 'View Bank Details')?></p>
              </li>
              <li class="nav-item">
                <p class="nav-link"><i class="far fa-circle nav-icon"></i><?php echo anchor('account/addbank', 'Add Bank Details')?></p>
              </li>
            </ul>
         
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  

