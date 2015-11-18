		<footer>
			<div class="container">
		  		<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo (ENVIRONMENT === 'development') ? 'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
		  	</div>
		</footer>
		<script src="<?php echo site_url('assets/js/jquery-1.11.3.min.js'); ?>"></script>
		<script src="<?php echo site_url('assets/admin/js/bootstrap.min.js'); ?>"></script>
		<?php echo $before_body; ?>
	</body>
</html>