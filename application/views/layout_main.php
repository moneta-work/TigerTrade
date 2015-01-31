<html>
<head>
	<title><?php $title_for_layout ?></title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge;text/html;charset=utf-8">
	<!-- <link rel="stylesheet" href="/css/main.css" type="text/css" /> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    
    <link href="<?php echo base_url('assets/css/custom.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/font-awesome.min.css') ?>" rel="stylesheet">

</head>
<body>
<!--
	<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">TigerTrade</a>
			</div>
			
			<nav class="collapse navbar-collapse bs-navbar-collapse">
				<ul class="nav navbar-nav">
					<li class="active">
					<a href="#">Home</a>
					</li>
					<li>
					<a href="#">Market</a>
					</li>
					<li>
					<a href="#">About</a>
					</li>
					<li>
					<a href="#">JavaScript</a>
					</li>
					<li>
					<a href="#">Customize</a>
					</li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#">Register</a></li>
					<li><a href="#">Login</a></li>
				</ul>
			</nav>
		</div>
	</nav>	
-->
	<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
		<div class="container">
			<div class="navbar-header">
	    		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example-navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">TigerTrade</a>
			</div>
		</div>
		<div class="collapse navbar-collapse" id="example-navbar-collapse">
			<ul class="nav navbar-nav">
				<li class="active"><a href="#">Home</a></li>
				<li><a href="#">About</a></li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Market</a>
					<ul class="dropdown-menu">
						<li><a href="#">Buy</a></li>
						<li><a href="#">Sell</a></li>
						<li><a href="#">Category</a></li>
						<li class="divider"></li>
						<li><a href="#">Search</a></li>
						<li class="divider"></li>
						<li><a href="#">Filter</a></li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li><a href="#">Register</a></li>
						<li><a href="#">Login</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</nav>
	
	<?php echo $content_for_layout ?>

	<div>Page rendered in <strong>{elapsed_time}</strong> seconds</div>
	
	<script src="<?php echo base_url('assets/js/jquery.min.js') ?>"></script>
	<script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
</body>
</html>