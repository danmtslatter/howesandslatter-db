<?php $siteRoot = '/'; ?>
	<head>
		<title>Howes &amp; Slatter - Music database</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta http-equiv="Content-Language" content="en-us" />
		<meta http-equiv="imagetoolbar" content="false" />
		<meta name="MSSmartTagsPreventParsing" content="true" />
		<meta name="robots" content="all" />
		<meta name="revisit-after" content="" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<meta name="author" content="ideajunction.co.uk" />
		<meta name="copyright" content="" />
		<meta name="company" content="" />
		<link rel="stylesheet" type="text/css" media="all" href="<?php echo $siteRoot; ?>assets/css/main.css" />
		<script type="text/javascript" src="<?php echo $siteRoot; ?>assets/js/jquery-1.7.1.min.js"></script>
		<script type="text/javascript" src="<?php echo $siteRoot; ?>assets/js/common.js"></script>
		<script type="text/javascript" src="<?php echo $siteRoot; ?>assets/js/jquery.tablesorter.min.js"></script>
		<script type="text/javascript" src="<?php echo $siteRoot; ?>assets/js/jquery.jplayer.min.js"></script>
		<script type="text/javascript" src="http://fast.fonts.com/jsapi/58aa6bf1-3ddf-4f9f-87e6-89377801afcb.js"></script>

		
<?php
	//Get in to JSON to break out the array
	function unwrapJSON($key, $json) {
		$startRemoved = preg_replace('/.*"'.$key.'":"/', '', $json);
		$endRemoved = preg_replace('/([^\\\\])".*/', '$1', $startRemoved);
		return stripslashes($endRemoved);
	}
	
	// Attempt to connect to the My SQL server
	$link = @mysql_connect("localhost", "root", "Ioint3");
	
	// If the connection was unsuccessful
	if (!$link) die("Error connecting to database server");
	
	// Attempt to select database. If unsuccessful print error message
	@mysql_select_db("songs", $link) or die("Couldn't select database");

?>