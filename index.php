<?php 
if (!(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')){
	header("Location: https://squirrelfacts.com");
}
$onlyfact = true;
$includehtml = false;

$seed = rand(0, 1000000);
?>
<!DOCTYPE html>
<html lang="en_GB" dir="ltr">
<head>
	<title>Squirrel Facts</title>
	<link rel="stylesheet" href="stylesheet.css"/>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" type="image/png" href="favicon.png">
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,700,700i" rel="stylesheet"> 
	
	<meta name="twitter:card" content="summary" />
	<meta name="twitter:site" content="@laxynd" />
	<meta name="twitter:title" content="Squirrel Facts" />
	<meta name="twitter:description" content="<?php require 'getfact.php'?>" />
	<meta name="twitter:image" content="https://upload.wikimedia.org/wikipedia/commons/thumb/1/15/Douglas_Squirrel_DSC3742vvc.jpg/1280px-Douglas_Squirrel_DSC3742vvc.jpg" />
</head>

<body>
	<h1>Squirrel Facts</h1>
	
	<div id="factContainer" class="fact">
		<span id="fact"><?php $includehtml = true; require 'getfact.php'?></span>
		<br/><br/>
		<button onclick="return next();">New Fact!</button>
		<br/><br/>
		<a id="share" class="share" href="javascript:void(0);" onclick="alert('https://squirrelfacts.com?fact=<?=$factid?>');">Share this fact</a>
	</div>
	
	<div class="footer"><a href="https://axolotlfacts.com">Also get some Axolotl Facts!</a> - <a href="mailto:squirrelfacts@siblaze.com" target="_blank">Submit facts</a></div>
	
	<script type="text/javascript">
	<?php if ($factid != 420) :?>
		var i = 0;
		
		function next(){
			i++;
			
			var request = new XMLHttpRequest();
			
			request.onload = function(){
				var response = JSON.parse(request.response);
				
				document.getElementById('fact').innerHTML = response.fact;
				document.getElementById('share').onclick = function() {
					alert("https://squirrelfacts.com?fact=" + response.id);
				}
			};

			request.open("POST", "/getfact.php", true);
			request.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
			request.send("s=<?=$seed?>&i=" + i);
			return false;
		}
	<?php else :?>
		var r = 0;
		var g = 120;
		var b = 240;

		window.setInterval(function(){
			r++;
			g++;
			b++;
			
			document.getElementById('factContainer').style.backgroundColor = 'rgb(' + Math.sin(r * Math.PI / 180)*255 + ', ' + Math.sin(g * Math.PI / 180)*255 + ', ' + Math.sin(b * Math.PI / 180)*255 + ')';
		}, 1);
		
		var sound = new Audio("mlg.mp3");
		
		function next(){
			sound.play();
		}
	<?php endif;?>
	</script>
</body>