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
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    	<!-- Ionicons -->
    	<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    	<!-- DataTables -->
    	<link rel="stylesheet" href="<?php echo site_url('assets/admin/plugins/datatables/dataTables.bootstrap.css'); ?>">
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
		        <a href="<?php echo site_url('admin'); ?>" class="logo">
		          	<!-- mini logo for sidebar mini 50x50 pixels -->
		          	<span class="logo-mini"><b>RTR</b></span>
		          	<!-- logo for regular state and mobile devices -->
		          	<span class="logo-lg"><b>RTR</b>Shopp</span>
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
						                            	<img src="<?php echo site_url('assets/admin/dist/img/user2-160x160.jpg'); ?>" class="img-circle" alt="User Image">
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
				                  	<img src="<?php echo site_url('assets/admin/dist/img/user2-160x160.jpg'); ?>" class="user-image" alt="User Image">
				                  	<span class="hidden-xs"><?php print_r($this->ion_auth->user()->row()->first_name.' '.$this->ion_auth->user()->row()->last_name) ;?></span>
				                </a>
				                <ul class="dropdown-menu">
				                  	<!-- User image -->
				                  	<li class="user-header">
					                    <img src="<?php echo site_url('assets/admin/dist/img/user2-160x160.jpg'); ?>" class="img-circle" alt="User Image">
					                    <p><?php print_r($this->ion_auth->user()->row()->first_name.' '.$this->ion_auth->user()->row()->last_name) ;?><small>Member since Nov. 2012</small></p>
				                  	</li>
				                  	<!-- Menu Body -->
				                  	<li class="user-body">
					                    <div class="col-xs-4 text-center">
					                      	<a href="#">###</a>
					                    </div>
					                    <div class="col-xs-4 text-center">
					                      	<a href="#">###</a>
					                    </div>
					                    <div class="col-xs-4 text-center">
					                      	<a href="#">###</a>
					                    </div>
				                  	</li>
				                  	<!-- Menu Footer-->
				                  	<li class="user-footer">
					                    <div class="pull-left">
					                      	<a href="<?php echo site_url('admin/user/profile'); ?>" class="btn btn-default btn-flat">Profile</a>
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
			              	<img src="<?php echo site_url('assets/admin/dist/img/user2-160x160.jpg'); ?>" class="img-circle" alt="User Image">
			            </div>
			            <div class="pull-left info">
			              	<p><?php print_r($this->ion_auth->user()->row()->first_name.' '.$this->ion_auth->user()->row()->last_name) ;?></p>
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
			            <li><a href="<?php echo site_url('admin'); ?>"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
			            <?php
							if($this->ion_auth->is_admin())
							{
						?>
							<li class="treeview">
								<a href="#"><i class="fa fa-sticky-note"></i> <span>Management</span> <i class="fa fa-angle-left pull-right"></i></a>
								<ul class="treeview-menu">
									<li><a href="<?php echo site_url('admin/groups'); ?>"><i class="fa fa-group"></i> <span>Groups</span></a></li>
									<li><a href="<?php echo site_url('admin/users'); ?>"><i class="fa fa-user"></i> <span>Users</span></a></li>
								</ul>
							</li>
						<?php
							}
						?>
						<li><a href="<?php echo site_url('admin/user/profile'); ?>"><i class="fa fa-user"></i> <span>Profile page</span></a></li>
				      	<li><a href="<?php echo site_url('admin/user/logout'); ?>"><i class="fa fa-sign-out"></i> <span>Logout</span></a></li>
			        </ul>
	        	</section>
	        	<!-- /.sidebar -->
      		</aside>
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