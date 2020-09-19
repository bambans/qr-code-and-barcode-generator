<?php
	include_once('code_img/code.php');
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Qr Code and Barcode Generator</title>
		<link rel="shortcut icon" href="code_img.ico">
		<meta charset="utf-8">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
		<style>
			body{
				padding-top: 5vh;
			}
		</style>
	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="col-md-4"></div>
				<div class="col-md-4">
					<center>
						<h1>Qr Code and Barcode Generator</h1>
					</center>
				</div>
				<div class="col-md-4"></div>
			</div>
			<hr>
			<form method="post" class="form-group">
				<div class="row">
					<div class="col-md-6">
						<label for="code_data"><h5>Encoder input:</h5></label>
						<input class="form-control" id="code_data" type="text" name="code_data" required="required">
					</div>
					<div class="col-md-6">
						<h5>Text input:</h5>
						<?php
							if(isset($content)){
								echo '<h6>'.$content.'</h6>';
							}
						?>
					</div>
				</div>
				<br>
				<div class="row">
					<div class="col-md-6">
						<label for="code_type"><h5>Encoder type:</h5></label>
						<select class="form-control" name="code_type" id="code_type" required="required">
							<option value="upc-a">upc-a</option>
							<option value="upc-e">upc-e</option>
							<option value="ean-8">ean-8</option>
							<option value="ean-13">ean-13</option>
							<option value="ean-13-pad">ean-13-pad</option>
							<option value="ean-13-nopad">ean-13-nopad</option>
							<option value="ean-128">ean-128</option>
							<option value="code-39">code-39</option>
							<option value="code-39-ascii">code-39-ascii</option>
							<option value="code-93">code-93</option>
							<option value="code-93-ascii">code-93-ascii</option>
							<option value="code-128">code-128</option>
							<option value="codabar">codabar</option>
							<option value="itf">itf</option>
							<option value="qr">qr</option>
							<option value="qr-l">qr-l</option>
							<option value="qr-m">qr-m</option>
							<option value="qr-q">qr-q</option>
							<option value="qr-h">qr-h</option>
							<option value="dmtx">dmtx</option>
							<option value="dmtx-s">mtx-s</option>
							<option value="dmtx-r">dmtx-r</option>
							<option value="gs1-dmtx">gs1-dmtx</option>
							<option value="gs1-dmtx-s">s1-dmtx-s</option>
							<option value="gs1-dmtx-r">gs1-dmtx-r</option>
						</select>
					</div>
					<div class="col-md-6">
						<label for="code_type"><h5>Encoder:</h5></label>
						<button class="btn btn-block btn-outline-dark" type="submit">Generate Code</button>
					</div>
				</div>
				<br>
				<div class="row">
					<div class="col-md-6">
						<label for="code_format"><h5>Output format:</h5></label>
						<select class="form-control" name="code_format" id="code_format" required="required">
							<option value="png">png</option>
							<option value="gif">gif</option>
							<option value="jpeg">jpeg</option>
							<option value="svg">svg</option>
						</select>
					</div>
					<div class="col-md-6">
						<h5>Code output:</h5>
						<center>
							<img src="<?php
								if(isset($code_url)){
									echo $code_url;
								}
							?>">
							<br>
						</center>
					</div>
				</div>
			</form>
			<hr>
			<div class="row">
				<div class="col-md-12">
					<center>
						<footer>
							<span>Made with ❤ by <a class="btn-link" href="https://github.com/otaviobambans">Otávio Rodrigues Bambans</a>.</span>
							<br>
							<span>I want to give a special thanks to <a class="btn-link" href="https://github.com/kreativekorp">Rebecca G. Bettencourt</a> for making this project possible.</span>
						</footer>
						<br>
					</center>
				</div>
			</div>
		</div>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
	</body>
</html>