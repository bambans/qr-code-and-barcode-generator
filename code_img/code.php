<?php
	if(isset($_POST['code_data'])){
		$format = $_POST['code_format'];
		$symbol = $_POST['code_type'];
		$content = $_POST['code_data'];
	}
	if(isset($content)){
		$path = 'code_img/code_source.php';
		$formats = 'f='.$format;
		$symbology = 's='.$symbol;
		$data = 'd='.$content;
		$options = '&w=200&h=75&ts=3&th=40';
		$code_url = $path.'?'.$formats.'&'.$symbology.'&'.$data;
	}
?>