<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-gb" lang="en-gb" dir="ltr">
<head>
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Test animate in</title>
	
	<!-- jquery -->
	<script src="js/jquery-1.11.1.min.js" type="text/javascript"></script>
	
	
	<!-- bootstrap -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	
	<!-- fonts -->
	<link href='http://fonts.googleapis.com/css?family=Roboto:300,400,700,900' rel='stylesheet' type='text/css'>
	
	
	<!-- site -->
	<link rel="stylesheet" href="css/template.css" type="text/css" />
	<script src="js/perspective.js" type="text/javascript"></script>
	
    
</head>

<body>
	<div class="centered">
		<h1 class="page-header">jQuery plugin to animate content when visible</h1>
		<p class="lead">Make elements animate when visible. Add delays, animate childeren of a group, adjust speed and distance and even add counters.</p>
		<p><a href="perspective.zip" target="_blank" class="btn btn-primary">Download ZIP</a></p>
		
		<h3>Perspective</h3>
		<p>Instead of the fade in 'data-perspective="fade"', you can use multiple animation types, shown below (and animated):</p>
		<div class="block" data-perspective="40">Test</div>
		<p>...</p>
		<p>...</p>
		<p>...</p>
		<p>...</p>
		<div class="block" data-perspective="600">Test</div>
		
		<h3>Options</h3>
		<h4>Speed</h4>
		<p>Speed of animation (in miliseconds, default=1500):<pre>data-speed="500"</pre></p>
		<p>...</p>
		<p>...</p>
		<p>...</p>
		<p>...</p>
		<p>...</p>
		<p>...</p>
		<p>...</p>
		<p>...</p>
		<p>...</p>
		<p>...</p>
		<p>...</p>
		<p>...</p>
		<p>...</p>
		<p>...</p>
		<p>...</p>
		<p>...</p>
		<p>...</p>
		<p>...</p>
		<p>...</p>
		<p>...</p>
		<p>...</p>
		<p>...</p>
		<p>...</p>
		<p>...</p>
		<p>...</p>
		<p>...</p>
		<p>...</p>
		<p>...</p>
		<p>...</p>
		<p>...</p>
		<p>...</p>
		<p>...</p>
		<p>...</p>
		<p>...</p>
		<p>...</p>
		<p>...</p>
		<p>...</p>
		<div class="pull-left">
			<div class="block imgbg" data-perspective="20">Test</div>
		</div>
		<div class="pull-left">
			<div class="block imgbg2" data-perspective="100">Test</div>
		</div>
		<div class="pull-left">
			<div class="block imgbg3" data-perspective="500">Test</div>
		</div>
		<div class="pull-left">
			<div class="block imgbg4" data-perspective="200">Test</div>
		</div>
		
		<div class="pull-left">
			<div class="block imgbg" data-perspective="120">Test</div>
		</div>
		<div class="pull-left">
			<div class="block imgbg2" data-perspective="150">Test</div>
		</div>
		<div class="pull-left">
			<div class="block imgbg3" data-perspective="190">Test</div>
		</div>
		<div class="pull-left">
			<div class="block imgbg4" data-perspective="230">Test</div>
		</div>
		
		
		<hr />
		<p>...</p>
		<p>...</p>
		<p>...</p>
		<p>...</p>
		<p>...</p>
		<p>...</p>
		<div class="pull-right">
		<div class="block" data-perspective="100">Test</div>
		</div>
		<p>...</p>
		<p>...</p>
		<p>...</p>
		<p>...</p>
		<p>...</p>
		<p>...</p>
		<p>...</p>
		<p>...</p>
		<p>...</p>
		<p>...</p>
		<p>...</p>
		<p>...</p>
		<p>...</p>
		<p>...</p>
		<p>...</p>
		<p>...</p>
		<p>...</p>
		<p>...</p>
		<p>...</p>
		<p>...</p>
		<p>...</p>
		<p>...</p>
		<p>...</p>
		<p>...</p>
		<p>...</p>
		<p>...</p>
		<p>...</p>
		<p>...</p>
		<p>...</p>
		<p>...</p>
	</div>
</body>
</html>
<?php
function outputcode($code){
	$code=str_replace("&","&amp;",$code);
	$code=str_replace("<","&lt;",$code);
	$code=str_replace(">","&gt;",$code);
	return $code;
}?>