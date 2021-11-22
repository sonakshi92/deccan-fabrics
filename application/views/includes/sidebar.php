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
				<a href="<?php echo base_url();?>home/dashboard" class="nav-link">Dashboard</a>
			</li>
			<li class="nav-item d-none d-sm-inline-block">
				<a href="#" class="nav-link"> Emergency Contacts</a>
			</li>
		</ul>
		<ul class="navbar-nav ml-auto">
			<li class="nav-item d-none d-sm-inline-block">
				<a href="<?php echo base_url();?>home/signup" class="nav-link">SignUp</a>
			</li>
			<li class="nav-item d-none d-sm-inline-block">
				<a href="<?php echo base_url();?>login/logout" class="nav-link">Logout</a>
			</li>
		</ul>
	</nav>
	<!-- /.navbar -->

	<!-- Main Sidebar Container -->
	<aside class="main-sidebar sidebar-dark-primary elevation-4">
		<!-- Brand Logo -->
		<a href="index3.html" class="brand-link">
			<img src="<?php echo base_url(); ?>assets/theme/dist/img/Raymond.png" alt="Logo"
				class="brand-image img-circle elevation-3" style="opacity: .8">
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
						<a href="#" class="nav-link">
							<i class="nav-icon fas fa-home"></i>
							<p>HOME<i class="right fas fa-angle-left"></i></p>
						</a>
						<ul class="nav nav-treeview">
							<li class="nav-item">
								<p class="nav-link">
									<i class="far fa-circle nav-icon text-primary"></i> <?php echo anchor('home/dashboard', 'Dashboard')?></p>
							</li>
							<li class="nav-item">
								<p class="nav-link">
									<i class="far fa-user nav-icon"></i> <?php echo anchor('home/dayclose', 'Profile')?></p>
							</li>
						</ul>
					</li>
					<li class="nav-item">
						<a href="#" class="nav-link">
							<i class="nav-icon fas fa-calendar"></i> <p>Day Open / Close<i class="right fas fa-angle-left"></i></p>
						</a>
						<ul class="nav nav-treeview">
							<li class="nav-item">
								<p class="nav-link"> <i class="far fa-circle nav-icon text-primary"></i><?php echo anchor('home/dayopen', 'Day Open')?>
								</p>
							</li>
							<li class="nav-item">
								<p class="nav-link"> <i class="far fa-circle nav-icon text-warning"></i><?php echo anchor('home/dayclose', 'Day Close')?>
								</p>
							</li>
						</ul>
					</li>
					<li class="nav-item">
						<a href="#" class="nav-link"> 
							<i class="nav-icon fas fa-table"></i> <p> Bills	<i class="right fas fa-angle-left"></i></p>
						</a>
						<ul class="nav nav-treeview">
							<li class="nav-item">
								<p class="nav-link">
									<i class="nav-icon far fa-circle text-info"></i><?php echo anchor('bill', 'New Billing')?> </p>
								</a>
							</li>
							<li class="nav-item">
								<p class="nav-link">
									<i class="nav-icon far fa-circle text-success"></i><?php echo anchor('bill/exchange', 'Exchange Billing')?>
								</p>
								</a>
							</li>
							<li class="nav-item">
								<p class="nav-link">
									<i class="nav-icon far fa-circle text-warning"></i><?php echo anchor('bill/void', 'Void Billing')?></p>
								</a>
							</li>
							<li class="nav-item">
								<p class="nav-link">
									<i class="nav-icon far fa-circle text-danger"></i><?php echo anchor('bill/return', 'Return via stock')?>
								</p>
								</a>
							</li>
						</ul>
					</li>

					<li class="nav-item">
						<a href="#" class="nav-link">
							<i class="nav-icon fas fa-chart-bar"></i>
							<p>
								Sales Reports
								<i class="right fas fa-angle-left"></i>
							</p>
						</a>
						<ul class="nav nav-treeview">
							<li class="nav-item">
								<p class="nav-link">
									<i class="far fa-circle nav-icon text-info"></i><?php echo anchor('sales/daily', 'Daily Sales Report')?>
								</p>
							</li>
							<li class="nav-item">
								<p class="nav-link">
									<i class="far fa-circle nav-icon text-info"></i><?php echo anchor('sales/monthly', 'Monthly Sales Report')?>
								</p>
							</li>
							<li class="nav-item">
								<p class="nav-link">
									<i class="far fa-circle nav-icon text-info"></i><?php echo anchor('sales/yearly', 'Yearly Report')?>
								</p>
							</li>
							<li class="nav-item">
								<p class="nav-link">
									<i class="far fa-circle nav-icon text-info"></i><?php echo anchor('sales/custom', 'Custom Report')?>
								</p>
							</li>
						</ul>
					</li>

					<li class="nav-item">
						<a href="#" class="nav-link">
							<i class="nav-icon fas fa-rupee"></i>
							<p>
								Accounts
								<i class="right fas fa-angle-left"></i>
							</p>
						</a>
						<ul class="nav nav-treeview">
							<li class="nav-item">
								<p class="nav-link">
									<i class="nav-icon far fa-circle text-success"></i><?php echo anchor('account/cashbook', 'Cash Book')?>
								</p>
							</li>
							<li class="nav-item">
								<p class="nav-link">
									<i class="far fa-circle nav-icon text-success"></i><?php echo anchor('account/monthlybook', 'Monthly Book')?>
								</p>
							</li>
							<li class="nav-item">
								<p class="nav-link">
									<i class="far fa-circle nav-icon text-success"></i><?php echo anchor('account/yearlybook', 'Year Book')?>
								</p>
							</li>
							<li class="nav-item">
								<p class="nav-link">
									<i class="far fa-circle nav-icon text-warning"></i><?php echo anchor('account/payments', 'Payment Details')?>
								</p>
							</li>
							<li class="nav-item">
								<p class="nav-link">
									<i class="far fa-circle nav-icon text-danger"></i><?php echo anchor('account/documents', 'Documents')?>
								</p>
							</li>
							<li class="nav-item">
								<p class="nav-link">
									<i class="far fa-circle nav-icon text-info"></i><?php echo anchor('account/bankdetails', 'View Bank Details')?>
								</p>
							</li>
							<li class="nav-item">
								<p class="nav-link">
									<i class="far fa-circle nav-icon text-info"></i><?php echo anchor('account/addbank', 'Add Bank Details')?>
								</p>
							</li>
							<li class="nav-item">
								<p class="nav-link">
									<i class="far fa-circle nav-icon text-info"></i><?php echo anchor('account/investment', 'Shop Investment')?>
								</p>
							</li>
						</ul>
					</li>

					<li class="nav-item">
						<a href="#" class="nav-link">
							<i class="nav-icon fas fa-users"></i>
							<p>
								Customers
								<i class="right fas fa-angle-left"></i>
							</p>
						</a>
						<ul class="nav nav-treeview">
							<li class="nav-item">
								<p class="nav-link">
									<i class="far fa-circle nav-icon text-success"></i><?php echo anchor('customer', 'List of Customers')?>
								</p>
							</li>
							<li class="nav-item">
								<p class="nav-link">
									<i class="far fa-circle nav-icon text-success"></i><?php echo anchor('customer/add', 'Add Customer')?>
								</p>
							</li>
							<li class="nav-item">
								<p class="nav-link">
									<i class="far fa-circle nav-icon text-success"></i><?php echo anchor('customer/request', 'Customer Request')?>
								</p>
							</li>
							<li class="nav-item">
								<p class="nav-link">
									<i class="far fa-circle nav-icon text-success"></i><?php echo anchor('customer/viewreq', 'View Request')?>
								</p>
							</li>
							<li class="nav-item">
								<p class="nav-link">
									<i class="far fa-circle nav-icon text-success"></i><?php echo anchor('customer/sendemail', 'Send Email')?>
								</p>
							</li>
						</ul>
					<li class="nav-item">
						<a href="#" class="nav-link">
							<i class="nav-icon fas fa-user"></i>
							<p>
								Employees
								<i class="right fas fa-angle-left"></i>
							</p>
						</a>
						<ul class="nav nav-treeview">
							<li class="nav-item">
								<p class="nav-link">
									<i class="far fa-circle nav-icon text-warning"></i><?php echo anchor('employee', 'List of Employees')?>
								</p>
							</li>
							<li class="nav-item">
								<p class="nav-link">
									<i class="far fa-circle nav-icon text-warning"></i><?php echo anchor('employee/add', 'Add Employee')?>
								</p>
							</li>
							<li class="nav-item">
								<p class="nav-link">
									<i class="far fa-circle nav-icon text-warning"></i><?php echo anchor('employee/salaries', 'Salaries')?>
								</p>
							</li>
						</ul>
					<li class="nav-item">
						<a href="#" class="nav-link">
							<i class="nav-icon fas fa-boxes"></i>
							<p>
								Stock
								<i class="right fas fa-angle-left"></i>
							</p>
						</a>
						<ul class="nav nav-treeview">
							<li class="nav-item">
								<p class="nav-link">
									<i class="far fa-circle nav-icon text-primary"></i><?php echo anchor('stock/balance', 'Stock Balance')?>
								</p>
							</li>
							<li class="nav-item">
								<p class="nav-link">
									<i class="far fa-circle nav-icon text-primary"></i><?php echo anchor('stock/missing', 'Stock Missing')?>
								</p>
							</li>
							<li class="nav-item">
								<p class="nav-link">
									<i class="far fa-circle nav-icon text-primary"></i><?php echo anchor('stock/itemMaster', 'Item Master')?>
								</p>
							</li>
							<li class="nav-item">
								<p class="nav-link">
									<i class="far fa-circle nav-icon text-primary"></i><?php echo anchor('stock/inward', 'Purchase')?></p>
							</li>
							<li class="nav-item">
								<p class="nav-link">
									<i class="far fa-circle nav-icon text-primary"></i><?php echo anchor('stock/purchaseDetails', 'View Purchases')?>
								</p>
							</li>
							<li class="nav-item">
								<p class="nav-link">
									<i class="far fa-circle nav-icon text-primary"></i><?php echo anchor('stock/outward', 'Outward')?></p>
							</li>
							<li class="nav-item">
								<p class="nav-link">
									<i class="far fa-circle nav-icon text-primary"></i><?php echo anchor('stock/outwardDetails', 'View Outwards')?>
								</p>
							</li>
							<li class="nav-item">
								<p class="nav-link">
									<i class="far fa-circle nav-icon text-primary"></i><?php echo anchor('stock/yearend', 'Year End')?></p>
							</li>
						</ul>
						<li class="nav-item">
							<p class="nav-link"><i class="nav-icon fas fa-database"></i><?php echo anchor('home/backup', 'Backup')?>
							</p>
							<i class="fas fa-angle-left right"></i>
						</li>
			</nav>
			<!-- /.sidebar-menu -->
		</div>
		<!-- /.sidebar -->
	</aside>
