<?php defined('BASEPATH') OR exit('No direct script access allowed');
	$this->load->view('templates/_parts/admin_master_header_view'); ?>
		<!-- Content Wrapper. Contains page content -->
      	<div class="content-wrapper">
	        <!-- Content Header (Page header) -->
	        <section class="content-header">
	          	<h1><?php echo $page_title; ?></h1>
	          	<?php echo $this->breadcrumbs->show(); ?>	          	
	        </section>
	        <!-- Main content -->
	        <section class="content">
	        	<?php
					if($this->session->flashdata('message'))
					{
				?>
		          	<div class="alert alert-info alert-dismissible" role="alert">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						<h4><i class="icon fa fa-info"></i> Info</h4>
						<?php echo $this->session->flashdata('message'); ?>
					</div>
				<?php
					}
				?>
	        	<?php echo $the_view_content; ?>
	        </section><!-- /.content -->
      	</div><!-- /.content-wrapper -->
<?php $this->load->view('templates/_parts/admin_master_footer_view'); ?>