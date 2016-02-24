<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>File.io</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- Loading Bootstrap -->
		<link href="/css/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

		<!-- Loading Flat UI -->
		<link href="/css/flat-ui.css" rel="stylesheet">

		<!-- Loading Custom CSS -->
		<link href="/css/custom.css" rel="stylesheet">

		<!-- Loading Lightbox CSS -->
		<link href="/css/ekko-lightbox.min.css" rel="stylesheet">

		<!-- Loading Favicon -->
		<link rel="shortcut icon" href="/img/favicon.ico">

	</head>
	
	<body>
		<!-- Static navbar -->
		<div class="navbar navbar-default navbar-static-top" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
					</button>
					<a class="navbar-brand" href="/">File.io</a>
				</div>
				<div class="navbar-collapse collapse">
					<!-- Navbar Items (Left) -->
					<ul class="nav navbar-nav">
						<li class="active">
							<a href="/">Home</a>
						</li>
						<li>
							<a href="/about">About</a>
						</li>
					</ul>
					<!-- Navbar Items (Right) -->
					<ul class="nav navbar-nav navbar-right">
						<li>
							<a href="/upload">Upload  <span class="fui-plus"></span></a>
						</li>
					</ul>
				</div><!--/.nav-collapse -->
			</div>
		</div> <!-- /navbar -->


		<div class="container"> <!-- Container -->
			<div id="selector"> <!-- Our file selector -->
				<ul class="list-unstyled"> <!-- Here we populate our list with an external call -->
					<?php 
						require_once($_SERVER['DOCUMENT_ROOT'] . '/populate.php');
						populateList();
					?>
				</ul>
			</div> <!-- /File Selector -->
		</div> <!-- /Container -->

		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="/js/vendor/jquery.min.js"></script>
		<!-- Base Flat UI JS -->
		<script src="/js/flat-ui.min.js"></script>
		<!-- Data Toggle JS Handlers -->
		<script src="/js/application.js"></script>
		<!-- JS for our Lightbox -->
		<script src="/js/ekko-lightbox.min.js"></script>
	</body>
</html>
