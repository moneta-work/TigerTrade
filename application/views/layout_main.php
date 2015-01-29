<html>
<head>
	<title><?php $title_for_layout ?></title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<link rel="stylesheet" href="/css/main.css" type="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    
    <link href="<?php echo base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/font-awesome.min.css') ?>" rel="stylesheet">
    
	<script src="<?php echo base_url('assets/js/jquery.min.js') ?>"></script>
	<script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
</head>
<body>
	<div id="pagewidth" >
		<div id="header" ><img src="/images/header.jpg" width="700" height="200"></div>
		<div id="wrapper" class="clearfix" >
			<div id="twocols" class="clearfix">
				<?php echo $content_for_layout ?>
			</div>
		</div>
		<div id="footer" > Footer </div>
	</div>
</body>
</html>