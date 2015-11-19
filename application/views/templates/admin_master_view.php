<?php defined('BASEPATH') OR exit('No direct script access allowed');
	$this->load->view('templates/_parts/admin_master_header_view'); ?>
		<!-- Content Wrapper. Contains page content -->
      	<div class="content-wrapper">
	        <!-- Content Header (Page header) -->
	        <section class="content-header">
	          	<h1>
	            	Blank page
	            	<small>it all starts here</small>
	          	</h1>
	          	<ol class="breadcrumb">
	            	<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
	            	<li><a href="#">Examples</a></li>
	            	<li class="active">Blank page</li>
	          	</ol>
	        </section>
	        <!-- Main content -->
	        <section class="content">
	        	<?php echo $the_view_content; ?>

	          	<!-- Default box -->
	          	<div class="box">
		            <div class="box-header with-border">
		              	<h3 class="box-title">Title</h3>
		              	<div class="box-tools pull-right">
		                	<button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
		                	<button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
		              	</div>
		            </div>
		            <div class="box-body">
		              	Start creating your amazing application!
		            </div><!-- /.box-body -->
		            <div class="box-footer">
		              	Footer
		            </div><!-- /.box-footer-->
	          	</div><!-- /.box -->
	        </section><!-- /.content -->
      	</div><!-- /.content-wrapper -->	

		<!-- <div class="container">
			<div class="main-content" style="padding-top:40px;">
		  		<?php echo $the_view_content; ?>
		  	</div>
		</div> -->
<?php $this->load->view('templates/_parts/admin_master_footer_view'); ?>