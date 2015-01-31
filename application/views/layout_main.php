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
	<!-- MAIN NAVIGATION -->
	<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
		<div class="container">
			<!-- HEADER/MOBILE NAVIGATION TOGGLE -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">TigerTrade</a>
			</div>
			<!-- MENU OPTIONS -->
			<nav class="collapse navbar-collapse bs-navbar-collapse" id="navbar">
				<ul class="nav navbar-nav">
					<li class="active">
					<a href="#">Home</a>
					</li>
					<!-- DROPDOWN BUTTON -->
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Market <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="#">All</a></li>
							<li><a href="#">For Sale</a></li>
							<li><a href="#">Services</a></li>
							<li class="divider"></li>
							<li><a href="#">Search</a></li>
							<li class="divider"></li>
							<li><a href="#">Filter</a></li>
						</ul>
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
	
	<?php echo $content_for_layout ?>
	
    <!-- FOOTER -->
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>
	<footer class="footer">
		<div class="container text-muted">
			<div class="row">
				<div class="col-xs-4">
					<p class="text-center">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
				</div>
				<div class="col-xs-4">
					<p class="text-center"><a href="#">Back to top</a></p>
				</div>
				<div class="col-xs-4">
					<p class="text-center">&copy; 2014 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
				</div>
			</div>
		</div>
	</footer>
	
	<script src="<?php echo base_url('assets/js/jquery.min.js') ?>"></script>
	<script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
</body>
</html>