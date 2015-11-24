<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<title><?php echo $page_title; ?></title>
    	<!-- Tell the browser to be responsive to screen width -->
	    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	    <!-- Bootstrap 3.3.5 -->
	    <link rel="stylesheet" href="<?php echo site_url('assets/admin/bootstrap/css/bootstrap.min.css'); ?>">
	    <!-- Font Awesome -->
	    <link rel="stylesheet" href="<?php echo site_url('assets/admin/dist/css/font-awesome.min.css'); ?>">
	    <!-- Ionicons -->
	    <link rel="stylesheet" href="<?php echo site_url('assets/admin/dist/css/ionicons.min.css'); ?>">
	    <!-- Theme style -->
	    <link rel="stylesheet" href="<?php echo site_url('assets/admin/dist/css/AdminLTE.min.css'); ?>">
	    <!-- AdminLTE Skins. Choose a skin from the css/skins folder instead of downloading all of them to reduce the load. -->
	    <link rel="stylesheet" href="<?php echo site_url('assets/admin/dist/css/skins/_all-skins.min.css'); ?>">
	    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	    <!--[if lt IE 9]>
	        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	    <![endif]-->
		<?php echo $before_head; ?>
	</head>
	<body class="hold-transition skin-blue sidebar-mini">
		<!-- Site wrapper -->
    	<div class="wrapper">
    	<?php
			if($this->ion_auth->logged_in()) 
			{
		?>
    		<header class="main-header">
		        <!-- Logo -->
		        <a href="../../index2.html" class="logo">
		          	<!-- mini logo for sidebar mini 50x50 pixels -->
		          	<span class="logo-mini"><b>A</b>LT</span>
		          	<!-- logo for regular state and mobile devices -->
		          	<span class="logo-lg"><b>Admin</b>LTE</span>
		        </a>
		        <!-- Header Navbar: style can be found in header.less -->
		        <nav class="navbar navbar-static-top" role="navigation">
		          	<!-- Sidebar toggle button-->
		          	<a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
			            <span class="sr-only">Toggle navigation</span>
			            <span class="icon-bar"></span>
			            <span class="icon-bar"></span>
			            <span class="icon-bar"></span>
		          	</a>
		          	<div class="navbar-custom-menu">
			            <ul class="nav navbar-nav">
			              	<!-- Messages: style can be found in dropdown.less-->
			              	<li class="dropdown messages-menu">
				                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
				                  	<i class="fa fa-envelope-o"></i>
				                  	<span class="label label-success">4</span>
				                </a>
				                <ul class="dropdown-menu">
				                  	<li class="header">You have 4 messages</li>
				                  	<li>
					                    <!-- inner menu: contains the actual data -->
					                    <ul class="menu">
					                      	<li><!-- start message -->
						                        <a href="#">
						                          	<div class="pull-left">
						                            	<img src="../../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
						                          	</div>
						                          	<h4>Support Team <small><i class="fa fa-clock-o"></i> 5 mins</small></h4>
						                          	<p>Why not buy a new awesome theme?</p>
						                        </a>
					                      	</li><!-- end message -->
					                    </ul>
				                  	</li>
				                  	<li class="footer"><a href="#">See All Messages</a></li>
				                </ul>
			              	</li>
			              	<!-- Notifications: style can be found in dropdown.less -->
			              	<li class="dropdown notifications-menu">
			                	<a href="#" class="dropdown-toggle" data-toggle="dropdown">
			                  		<i class="fa fa-bell-o"></i>
			                  		<span class="label label-warning">10</span>
			                	</a>
				                <ul class="dropdown-menu">
				                  	<li class="header">You have 10 notifications</li>
				                  	<li>
					                    <!-- inner menu: contains the actual data -->
					                    <ul class="menu">
					                      	<li>
					                        	<a href="#">
					                          		<i class="fa fa-users text-aqua"></i> 5 new members joined today
					                        	</a>
					                      	</li>
					                    </ul>
				                  	</li>
				                  	<li class="footer"><a href="#">View all</a></li>
				                </ul>
			              	</li>
			              	<!-- Tasks: style can be found in dropdown.less -->
			              	<li class="dropdown tasks-menu">
				                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
				                  	<i class="fa fa-flag-o"></i>
				                  	<span class="label label-danger">9</span>
				                </a>
				                <ul class="dropdown-menu">
				                  	<li class="header">You have 9 tasks</li>
				                  	<li>
					                    <!-- inner menu: contains the actual data -->
					                    <ul class="menu">
					                      	<li><!-- Task item -->
						                        <a href="#">
						                          	<h3>
							                            Design some buttons
							                            <small class="pull-right">20%</small>
						                          	</h3>
						                          	<div class="progress xs">
							                            <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
							                              	<span class="sr-only">20% Complete</span>
							                            </div>
						                          	</div>
						                        </a>
					                      	</li><!-- end task item -->
					                    </ul>
				                  	</li>
				                  	<li class="footer">
				                    	<a href="#">View all tasks</a>
				                  	</li>
				                </ul>
			              	</li>
			              	<!-- User Account: style can be found in dropdown.less -->
			              	<li class="dropdown user user-menu">
				                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
				                  	<img src="../../dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
				                  	<span class="hidden-xs">Alexander Pierce</span>
				                </a>
				                <ul class="dropdown-menu">
				                  	<!-- User image -->
				                  	<li class="user-header">
					                    <img src="../../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
					                    <p>
					                      	Alexander Pierce - Web Developer
					                      	<small>Member since Nov. 2012</small>
					                    </p>
				                  	</li>
				                  	<!-- Menu Body -->
				                  	<li class="user-body">
					                    <div class="col-xs-4 text-center">
					                      	<a href="#">Followers</a>
					                    </div>
					                    <div class="col-xs-4 text-center">
					                      	<a href="#">Sales</a>
					                    </div>
					                    <div class="col-xs-4 text-center">
					                      	<a href="#">Friends</a>
					                    </div>
				                  	</li>
				                  	<!-- Menu Footer-->
				                  	<li class="user-footer">
					                    <div class="pull-left">
					                      	<a href="#" class="btn btn-default btn-flat">Profile</a>
					                    </div>
					                    <div class="pull-right">
					                      	<a href="<?php echo site_url('admin/user/logout'); ?>" class="btn btn-default btn-flat">Sign out</a>
					                    </div>
				                  	</li>
				                </ul>
			              	</li>
			              	<!-- Control Sidebar Toggle Button -->
			              	<li>
			                	<a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
			              	</li>
			            </ul>
		          	</div>
		        </nav>
	      	</header>

	      	<!-- Left side column. contains the sidebar -->
      		<aside class="main-sidebar">
	        	<!-- sidebar: style can be found in sidebar.less -->
	        	<section class="sidebar">
		          	<!-- Sidebar user panel -->
		          	<div class="user-panel">
			            <div class="pull-left image">
			              	<img src="../../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
			            </div>
			            <div class="pull-left info">
			              	<p>Alexander Pierce</p>
			              	<a href="#"><i class="fa fa-circle text-success"></i> Online</a>
			            </div>
		          	</div>
		          	<!-- search form -->
		          	<form action="#" method="get" class="sidebar-form">
			            <div class="input-group">
			              	<input type="text" name="q" class="form-control" placeholder="Search...">
			              	<span class="input-group-btn">
			                	<button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
			              	</span>
			            </div>
		          	</form>
		          	<!-- /.search form -->
		          	<!-- sidebar menu: : style can be found in sidebar.less -->
		          	<ul class="sidebar-menu">
			            <li class="header">MAIN NAVIGATION</li>
			            <li class="treeview">
			              	<a href="#">
				                <i class="fa fa-dashboard"></i> <span>Dashboard</span> <i class="fa fa-angle-left pull-right"></i>
			              	</a>
			              	<ul class="treeview-menu">
			                	<li><a href="../../index.html"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
			                	<li><a href="../../index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
			              	</ul>
			            </li>
			            <li class="treeview">
			              	<a href="#">
			                	<i class="fa fa-files-o"></i>
			                	<span>Layout Options</span>
			                	<span class="label label-primary pull-right">4</span>
			              	</a>
			              	<ul closeass="treeview-menu">
			                	<li><a href="../layout/top-nav.html"><i class="fa fa-circle-o"></i> Top Navigation</a></li>
			                	<li><a href="../layout/boxed.html"><i class="fa fa-circle-o"></i> Boxed</a></li>
			                	<li><a href="../layout/fixed.html"><i class="fa fa-circle-o"></i> Fixed</a></li>
			                	<li><a href="../layout/collapsed-sidebar.html"><i class="fa fa-circle-o"></i> Collapsed Sidebar</a></li>
			              	</ul>
			            </li>
			            <li>
			              	<a href="../widgets.html">
			                	<i class="fa fa-th"></i> <span>Widgets</span> <small class="label pull-right bg-green">Hot</small>
			              	</a>
			            </li>
			            <li class="treeview">
			              	<a href="#">
			                	<i class="fa fa-pie-chart"></i>
			                	<span>Charts</span>
			                	<i class="fa fa-angle-left pull-right"></i>
			              	</a>
			              	<ul class="treeview-menu">
			                	<li><a href="../charts/chartjs.html"><i class="fa fa-circle-o"></i> ChartJS</a></li>
			                	<li><a href="../charts/morris.html"><i class="fa fa-circle-o"></i> Morris</a></li>
			                	<li><a href="../charts/flot.html"><i class="fa fa-circle-o"></i> Flot</a></li>
			                	<li><a href="../charts/inline.html"><i class="fa fa-circle-o"></i> Inline charts</a></li>
			              	</ul>
			            </li>
			            <li class="treeview">
			              	<a href="#">
			                	<i class="fa fa-laptop"></i>
			                	<span>UI Elements</span>
			                	<i class="fa fa-angle-left pull-right"></i>
			              	</a>
			              	<ul class="treeview-menu">
			                	<li><a href="../UI/general.html"><i class="fa fa-circle-o"></i> General</a></li>
			                	<li><a href="../UI/icons.html"><i class="fa fa-circle-o"></i> Icons</a></li>
			                	<li><a href="../UI/buttons.html"><i class="fa fa-circle-o"></i> Buttons</a></li>
			                	<li><a href="../UI/sliders.html"><i class="fa fa-circle-o"></i> Sliders</a></li>
			                	<li><a href="../UI/timeline.html"><i class="fa fa-circle-o"></i> Timeline</a></li>
			                	<li><a href="../UI/modals.html"><i class="fa fa-circle-o"></i> Modals</a></li>
			              	</ul>
			            </li>
			            <li class="treeview">
			              	<a href="#">
			                	<i class="fa fa-edit"></i> <span>Forms</span>
			                	<i class="fa fa-angle-left pull-right"></i>
			              	</a>
			              	<ul class="treeview-menu">
			                	<li><a href="../forms/general.html"><i class="fa fa-circle-o"></i> General Elements</a></li>
			                	<li><a href="../forms/advanced.html"><i class="fa fa-circle-o"></i> Advanced Elements</a></li>
			                	<li><a href="../forms/editors.html"><i class="fa fa-circle-o"></i> Editors</a></li>
			              	</ul>
			            </li>
			            <li class="treeview">
			              	<a href="#">
			                	<i class="fa fa-table"></i> <span>Tables</span>
			                	<i class="fa fa-angle-left pull-right"></i>
			              	</a>
			              	<ul class="treeview-menu">
			                	<li><a href="../tables/simple.html"><i class="fa fa-circle-o"></i> Simple tables</a></li>
			                	<li><a href="../tables/data.html"><i class="fa fa-circle-o"></i> Data tables</a></li>
			              	</ul>
			            </li>
			            <li>
			              	<a href="../calendar.html">
			                	<i class="fa fa-calendar"></i> <span>Calendar</span>
			                	<small class="label pull-right bg-red">3</small>
			              	</a>
			            </li>
			            <li>
			              	<a href="../mailbox/mailbox.html">
			                	<i class="fa fa-envelope"></i> <span>Mailbox</span>
			                	<small class="label pull-right bg-yellow">12</small>
			              	</a>
			            </li>
			            <li class="treeview active">
			              	<a href="#">
			                	<i class="fa fa-folder"></i> <span>Examples</span>
			                	<i class="fa fa-angle-left pull-right"></i>
			              	</a>
			              	<ul class="treeview-menu">
				                <li><a href="invoice.html"><i class="fa fa-circle-o"></i> Invoice</a></li>
				                <li><a href="profile.html"><i class="fa fa-circle-o"></i> Profile</a></li>
				                <li><a href="login.html"><i class="fa fa-circle-o"></i> Login</a></li>
				                <li><a href="register.html"><i class="fa fa-circle-o"></i> Register</a></li>
				                <li><a href="lockscreen.html"><i class="fa fa-circle-o"></i> Lockscreen</a></li>
				                <li><a href="404.html"><i class="fa fa-circle-o"></i> 404 Error</a></li>
				                <li><a href="500.html"><i class="fa fa-circle-o"></i> 500 Error</a></li>
				                <li class="active"><a href="blank.html"><i class="fa fa-circle-o"></i> Blank Page</a></li>
			              	</ul>
			            </li>
			            <li class="treeview">
			              	<a href="#">
			                	<i class="fa fa-share"></i> <span>Multilevel</span>
				                <i class="fa fa-angle-left pull-right"></i>
			              	</a>
			              	<ul class="treeview-menu">
				                <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
				                <li>
				                  	<a href="#"><i class="fa fa-circle-o"></i> Level One <i class="fa fa-angle-left pull-right"></i></a>
				                  	<ul class="treeview-menu">
					                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Two</a></li>
					                    <li>
					                      	<a href="#"><i class="fa fa-circle-o"></i> Level Two <i class="fa fa-angle-left pull-right"></i></a>
					                      	<ul class="treeview-menu">
					                        	<li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
					                        	<li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
					                      	</ul>
					                    </li>
				                  	</ul>
				                </li>
				                <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
			              	</ul>
			            </li>
			            <li><a href="../../documentation/index.html"><i class="fa fa-book"></i> <span>Documentation</span></a></li>
			            <li class="header">LABELS</li>
			            <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
			            <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
			            <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>
		          	</ul>
	        	</section>
	        	<!-- /.sidebar -->
      		</aside>

	      	<?php
				if($this->session->flashdata('message'))
				{
			?>
			  	<div class="container" style="padding-top:40px;">
				    <div class="alert alert-info alert-dismissible" role="alert">
				      	<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				      	<?php echo $this->session->flashdata('message'); ?>
				    </div>
			  	</div>
			<?php
				}
			?>
		<?php
			}
		?>

		<!-- <?php
			if($this->ion_auth->logged_in()) {
		?>
				<nav class="navbar navbar-inverse navbar-fixed-top">
				  	<div class="container">
					    <div class="navbar-header">
					      	<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
						        <span class="sr-only">Toggle navigation</span>
						        <span class="icon-bar"></span>
						        <span class="icon-bar"></span>
						        <span class="icon-bar"></span>
					      	</button>
					      	<a class="navbar-brand" href="<?php echo site_url('admin'); ?>"><?php echo $this->config->item('cms_title'); ?></a>
					    </div>
					    <div id="navbar" class="collapse navbar-collapse">
					      	<ul class="nav navbar-nav">
					        	<li><a href="#">A link</a></li>
					        	<li><a href="#">Another link</a></li>
					      	</ul>
					      	<ul class="nav navbar-nav navbar-right">
					      		<li class="dropdown">
								    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><?php print_r($this->ion_auth->user()->row()->username);?> <span class="caret"></span></a>
								    <ul class="dropdown-menu" role="menu">
								    <?php
									    if($this->ion_auth->is_admin())
									    {
									?>
											<li><a href="<?php echo site_url('admin/groups'); ?>">Groups</a></li>
									      	<li><a href="<?php echo site_url('admin/users'); ?>">Users</a></li>
									<?php
									    }
								    ?>
								      	<li><a href="<?php echo site_url('admin/user/profile'); ?>">Profile page</a></li>
								      	<li class="divider"></li>
								      	<li><a href="<?php echo site_url('admin/user/logout'); ?>">Logout</a></li>
								    </ul>
								</li>
      						</ul>
					    </div>
				  	</div>
				</nav>
			<?php
				if($this->session->flashdata('message'))
				{
			?>
			  	<div class="container" style="padding-top:40px;">
				    <div class="alert alert-info alert-dismissible" role="alert">
				      	<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				      	<?php echo $this->session->flashdata('message'); ?>
				    </div>
			  	</div>
			<?php
				}
			?>
		<?php
			}
		?> -->