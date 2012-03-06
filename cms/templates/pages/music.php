<?php include($_SERVER['DOCUMENT_ROOT'].'/cms/runtime.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<?php include '../assets/includes/head.php'; ?>
	</head>
	
	<body>
		<div id="wrap">
			<div class="main-header"><a href="/"></a></div>
			
			<div class="content">
				<!-- BEGIN CM -->
					<?php perch_content('Track details'); ?>
				<!-- END CM -->
			</div>
			
		</div>
	</body>
</html>