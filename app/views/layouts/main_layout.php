<?php
	// Set url Variable From Router Class
	$page_name = Router :: get_page_name();
	$page_action = Router :: get_page_action();
	$page_id = Router :: get_page_id();
	$body_class = "$page_name-" . str_ireplace('list','index', $page_action);
	
	$page_title = $this->get_page_title();
	
?>
<!DOCTYPE html>
<html>
	<head>
		<title><?php echo $page_title; ?></title>
		<meta http-equiv="content-type" content="text/html;charset=utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<link rel="shortcut icon" href="<?php print_link(SITE_FAVICON); ?>" />
		<?php 
			Html ::  page_meta('theme-color',META_THEME_COLOR);
			Html ::  page_meta('author',META_AUTHOR); 
			Html ::  page_meta('keyword',META_KEYWORDS); 
			Html ::  page_meta('description',META_DESCRIPTION); 
			Html ::  page_meta('viewport',META_VIEWPORT);
			Html ::  page_css('font-awesome.min.css');
			Html ::  page_css('animate.css');
			Html ::  page_css('blueimp-gallery.css');
		?>
				<?php 
			Html ::  page_css('bootstrap-theme-pulse-blue.css');
			Html ::  page_css('custom-style.css');
		?>
		<?php
			
			Html ::  page_css('summernote.min.css');
			Html ::  page_css('bootstrap-editable.css');
			Html ::  page_css('dropzone.min.css');
			
			
			
			Html ::  page_js('jquery-3.3.1.min.js');
			
		?>
	</head>
		
	<body id="main" class="<?php echo $body_class ?>">

		<?php 
			$this->render_view('appheader.php'); 
		?>
		
		<div id="main-content">
			<!-- Page Main Content Start -->
				<div id="page-content">
					<?php $this->render_body();?>
				</div>	
			<!-- Page Main Content [End] -->
			
			
	<!-- Page Footer Start -->
		<?php 
			$this->render_view('appfooter.php'); 
		?>
	<!-- Page Footer Ends -->

			
			<div class="flash-msg-container"><?php show_flash_msg(); ?></div>
			
			<div id="main-page-modal" class="modal fade" role="dialog">
				<div class="modal-dialog modal-lg">
					<div class="modal-content">
						<div class="modal-body p-0 reset-grids">
							
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						</div>
					</div>
				</div>
			</div>
			
			<!-- Image Preview Component [Start] -->
			<div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls">
				<div class="slides"></div>
				<h3 class="title"></h3>
				<a class="prev">‹</a>
				<a class="next">›</a>
				<a class="close">×</a>
				<a class="play-pause"></a>
				<ol class="indicator"><div class="ajax-loader"></div></ol>
			</div>
			<!-- Image Preview Component [End] -->
			
			<form method="post" action="<?php print_link('report') ?>" target="_blank" id="exportform">
				<input type="hidden" name="data" id="exportformdata" />
				<input type="hidden" name="title" id="exportformtitle" />
			</form>
			
			
			<template id="page-loading-indicator">
				<div class="p-4 text-center m-4 text-muted">
					<div class="ajax-loader"></div>
					<h4 class="p-3 mt-2 font-weight-light">Loading...</h4>
				</div>
			</template>
			
		</div>
		<script>
			var siteAddr = '<?php echo SITE_ADDR; ?>';
			var defaultPageLimit = <?php echo MAX_RECORD_COUNT; ?>;
			var csrfToken = '<?php echo Csrf :: $token; ?>';
		</script>
		<?php 
			Html ::  page_js('popper.js');
			Html ::  page_js('bootstrap-4.3.1.min.js');
		?>
		
		<?php
			
			
			Html ::  page_js('summernote.min.js');
			
			
			Html ::  page_js('bootstrap-editable.js');
			Html ::  page_js('dropzone.min.js');
			
			
			
			Html ::  page_js('plugins.js'); //boostrapswitch, blueimp-gallery, 
			Html ::  page_js('plugins-init.js');
			Html ::  page_js('page-scripts.js');
		?>
	</body>
</html>