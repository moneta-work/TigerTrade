<html>
<head>
	<title><?php $title_for_layout ?></title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge;text/html;charset=utf-8">
	<!-- <link rel="stylesheet" href="/css/main.css" type="text/css" /> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    
    <link href="<?php echo base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/font-awesome.min.css') ?>" rel="stylesheet">

</head>
<body>
	
	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">Project name</a>
			</div>
		</div>
	</nav>	
	
	<div class="container" >
		<?php echo $content_for_layout ?>
	</div>
	
	<div> Footer </div>
	
	<script src="<?php echo base_url('assets/js/jquery.min.js') ?>"></script>
	<script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
</body>
</html>