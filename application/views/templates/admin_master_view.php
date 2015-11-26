<?php defined('BASEPATH') OR exit('No direct script access allowed');
	$this->load->view('templates/_parts/admin_master_header_view'); ?>
		<!-- Content Wrapper. Contains page content -->
      	<div class="content-wrapper">
	        <!-- Content Header (Page header) -->
	        <section class="content-header">
	          	<h1><?php echo $page_title; ?></h1>
	          	<ol class="breadcrumb">
            		<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            		<li><a href="#">Examples</a></li>
            		<li class="active">Blank page</li>
          		</ol>
	        </section>
	        <!-- Main content -->
	        <section class="content">
	        	<?php echo $the_view_content; ?>
	        </section><!-- /.content -->
      	</div><!-- /.content-wrapper -->
<?php $this->load->view('templates/_parts/admin_master_footer_view'); ?>