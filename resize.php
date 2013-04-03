<?php
	
	if(isset($_GET['f'])){
		header('Content-type: image/jpeg');
		require 'cropimage.php';
		$img = new cropimage();

		$path = dirname(__FILE__).DIRECTORY_SEPARATOR;
		$w = isset($_GET['w']) ? $_GET['w'] : 64;
		$h = isset($_GET['h']) ? $_GET['h'] : 64;
		$img->load($path.$_GET['f']);
		$img->resizeTo($w,$h);
		$img->output();
	}
?>