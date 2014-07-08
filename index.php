<!DOCTYPE html>
<html>
<head>
	<title>Listen</title>
	<meta name="HandheldFriendly" content="True">
        <meta name="MobileOptimized" content="320">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimal-ui">
	<style>
	/*
	 * Copyright (c) 2013 Thibaut Courouble
	 * http://www.cssflow.com
	 * Licensed under the MIT License
	 *
	 * Sass/SCSS source: http://goo.gl/J26vp1
	 * PSD by Ionut Zamfir: http://goo.gl/rSXCdQ
	 */ 

	body {
	  font: 14px/20px 'Helvetica Neue', Helvetica, Arial, sans-serif;
	  color: #404040;
	  background: #2d4259;
	}

	.register-title {
	  width: 270px;
	  line-height: 43px;
	  margin: 20px auto;
	  font-size: 19px;
	  font-weight: 500;
	  color: white;
	  color: rgba(255, 255, 255, 0.95);
	  text-align: center;
	  text-shadow: 0 1px rgba(0, 0, 0, 0.3);
	  background: #d7604b;
	  border-radius: 3px;
	  background-image: -webkit-linear-gradient(top, #dc745e, #d45742);
	  background-image: -moz-linear-gradient(top, #dc745e, #d45742);
	  background-image: -o-linear-gradient(top, #dc745e, #d45742);
	  background-image: linear-gradient(to bottom, #dc745e, #d45742);
	  -webkit-box-shadow: inset 0 1px rgba(255, 255, 255, 0.1), inset 0 0 0 1px rgba(255, 255, 255, 0.05), 0 0 1px 1px rgba(0, 0, 0, 0.1), 0 1px 3px rgba(0, 0, 0, 0.3);
	  box-shadow: inset 0 1px rgba(255, 255, 255, 0.1), inset 0 0 0 1px rgba(255, 255, 255, 0.05), 0 0 1px 1px rgba(0, 0, 0, 0.1), 0 1px 3px rgba(0, 0, 0, 0.3);
	}

	.register {
	  margin: 20px auto 30px;
	  width: 230px;
	  padding: 20px;
	  background: #f4f4f4;
	  border-radius: 3px;
	  -webkit-box-shadow: 0 0 1px 1px rgba(0, 0, 0, 0.1), 0 1px 3px rgba(0, 0, 0, 0.3);
	  box-shadow: 0 0 1px 1px rgba(0, 0, 0, 0.1), 0 1px 3px rgba(0, 0, 0, 0.3);
	}

	input {
	  font-family: inherit;
	  font-size: inherit;
	  color: inherit;
	  -webkit-box-sizing: border-box;
	  -moz-box-sizing: border-box;
	  box-sizing: border-box;
	}

	.register-input {
	  display: block;
	  width: 100%;
	  height: 38px;
	  margin-top: 2px;
	  font-weight: 500;
	  background: none;
	  border: 0;
	  border-bottom: 1px solid #d8d8d8;
	}

	.register-input:focus {
	  border-color: #1e9ce6;
	  outline: 0;
	}

	.register-button {
	  display: block;
	  width: 100%;
	  height: 42px;
	  margin-top: 25px;
	  font-size: 16px;
	  font-weight: bold;
	  color: #494d59;
	  text-align: center;
	  text-shadow: 0 1px rgba(255, 255, 255, 0.5);
	  background: #fcfcfc;
	  border: 1px solid;
	  border-color: #d8d8d8 #d1d1d1 #c3c3c3;
	  border-radius: 2px;
	  cursor: pointer;
	  background-image: -webkit-linear-gradient(top, #fefefe, #eeeeee);
	  background-image: -moz-linear-gradient(top, #fefefe, #eeeeee);
	  background-image: -o-linear-gradient(top, #fefefe, #eeeeee);
	  background-image: linear-gradient(to bottom, #fefefe, #eeeeee);
	  -webkit-box-shadow: inset 0 -1px rgba(0, 0, 0, 0.03), 0 1px rgba(0, 0, 0, 0.04);
	  box-shadow: inset 0 -1px rgba(0, 0, 0, 0.03), 0 1px rgba(0, 0, 0, 0.04);
	}

	.register-button:active {
	  background: #eee;
	  border-color: #c3c3c3 #d1d1d1 #d8d8d8;
	  background-image: -webkit-linear-gradient(top, #eeeeee, #fcfcfc);
	  background-image: -moz-linear-gradient(top, #eeeeee, #fcfcfc);
	  background-image: -o-linear-gradient(top, #eeeeee, #fcfcfc);
	  background-image: linear-gradient(to bottom, #eeeeee, #fcfcfc);
	  -webkit-box-shadow: inset 0 1px rgba(0, 0, 0, 0.03);
	  box-shadow: inset 0 1px rgba(0, 0, 0, 0.03);
	}

	.register-button:focus {
	  outline: 0;
	}

	.register-switch {
	  height: 32px;
	  margin-bottom: 15px;
	  padding: 4px;
	  background: #6db244;
	  border-radius: 2px;
	  background-image: -webkit-linear-gradient(top, #60a83a, #7dbe52);
	  background-image: -moz-linear-gradient(top, #60a83a, #7dbe52);
	  background-image: -o-linear-gradient(top, #60a83a, #7dbe52);
	  background-image: linear-gradient(to bottom, #60a83a, #7dbe52);
	  -webkit-box-shadow: inset 0 1px rgba(0, 0, 0, 0.05), inset 1px 0 rgba(0, 0, 0, 0.02), inset -1px 0 rgba(0, 0, 0, 0.02);
	  box-shadow: inset 0 1px rgba(0, 0, 0, 0.05), inset 1px 0 rgba(0, 0, 0, 0.02), inset -1px 0 rgba(0, 0, 0, 0.02);
	}

	.register-switch-input {
	  display: none;
	}

	.register-switch-label {
	  float: left;
	  width: 50%;
	  line-height: 32px;
	  color: white;
	  text-align: center;
	  text-shadow: 0 -1px rgba(0, 0, 0, 0.2);
	  cursor: pointer;
	}

	.register-switch-input:checked + .register-switch-label {
	  font-weight: 500;
	  color: #434248;
	  text-shadow: 0 1px rgba(255, 255, 255, 0.5);
	  background: white;
	  border-radius: 2px;
	  background-image: -webkit-linear-gradient(top, #fefefe, #eeeeee);
	  background-image: -moz-linear-gradient(top, #fefefe, #eeeeee);
	  background-image: -o-linear-gradient(top, #fefefe, #eeeeee);
	  background-image: linear-gradient(to bottom, #fefefe, #eeeeee);
	  -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, 0.15), 0 0 0 1px rgba(0, 0, 0, 0.1);
	  box-shadow: 0 1px 1px rgba(0, 0, 0, 0.15), 0 0 0 1px rgba(0, 0, 0, 0.1);
	}

	:-moz-placeholder {
	  color: #aaa;
	  font-weight: 300;
	}

	::-moz-placeholder {
	  color: #aaa;
	  font-weight: 300;
	  opacity: 1;
	}

	::-webkit-input-placeholder {
	  color: #aaa;
	  font-weight: 300;
	}

	:-ms-input-placeholder {
	  color: #aaa;
	  font-weight: 300;
	}

	::-moz-focus-inner {
	  border: 0;
	  padding: 0;
	}

	</style>
	<script type="text/javascript" src="jquery.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function($){
			$('#stop').click(function(){
				$('#stopbtn').click();
			});
			$('#play').click(function(){
				$('#playbtn').click();
			});
		});
	</script>
</head>
<body>
<h1 class="register-title">Listen</h1>
<form class="register" action='index.php' method='post'>
	<?php
		$fgc = file_get_contents('id.txt');
		$op = isset($_POST['op']) ? $_POST['op'] : '';
		if($op == '') {
			if($fgc == '0') {
				$op = 'Stop';
			} else {
				$op = 'Play';
			}
		}

		$id = isset($_POST['id']) ? $_POST['id'] : $fgc;

		if($id == '0') {
			$id = '85546898';
		}
	?>
	<div class="register-switch">
		<input type="radio" name="radop" value="Stop" id="stop" class="register-switch-input" <?php echo $op == 'Stop' ? 'checked' : ''; ?> >
		<label for="stop" class="register-switch-label">Stop</label>
		<input type="radio" name="radop" value="Play" id="play" class="register-switch-input" <?php echo $op == 'Play' ? 'checked' : ''; ?>>
		<label for="play" class="register-switch-label">Play</label>
	</div>
	<input name='id' value="<?php echo $id; ?>" type="text" class="register-input" placeholder="Playlist ID">

<input name='op' id='playbtn' value='Play' style='display: none' type='submit'/>
<input name='op' id='stopbtn' value='Stop' style='display: none' type='submit'/>

</form>
<?php
	if($_POST) {
		$fp = fopen('id.txt', 'w');
		switch($_POST['op']) {
			case 'Play':
				//update playlistid
				fwrite($fp, $_POST['id']);
			break;
			case 'Stop':
				//set playlistid to 0
				fwrite($fp, '0');
			break;
		}
		fclose($fp);
	}
?>

</body>
</html>

