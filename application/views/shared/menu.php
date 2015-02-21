<?php $user = $this->ion_auth->user()->row(); ?>
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
			<a class="navbar-brand" href='<?= base_url() ?>'>TigerTrade</a>
		</div>
		<!-- MENU OPTIONS -->
		<nav class="collapse navbar-collapse bs-navbar-collapse" id="navbar">
			<ul class="nav navbar-nav">
				<li class="active">
				<a href='<?= base_url() ?>'>Home</a>
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
				<a href='<?= base_url("/user") ?>'>User</a>
				</li>
				<li>
				<a href='<?= base_url("/ad") ?>'>Ad</a>
				</li>
				<li>
				<a href='<?= base_url("/bad-url") ?>'>404 Test</a>
				</li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<?php if (!$this->ion_auth->logged_in()) { ?>
					<li><a href='<?= base_url("auth/create_user") ?>'>Register</a></li>
					<li><a href='<?= base_url("auth/login") ?>'>Login</a></li>
				<?php } else { ?>
				
					<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $user->first_name; ?><b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><a href=""<?php echo base_url('/auth/edit_user/' . $this->ion_auth->get_user_id() ) ?>">Edit Info</a></li>
					</ul>
					</li>
					
				
					<li><a href='<?= base_url("auth/") ?>'><?php echo $user->first_name; ?></a></li>
					<li><a href='<?= base_url("auth/logout") ?>'>Logout</a></li>
				<?php }; ?>
			</ul>
		</nav>
	</div>
</nav>	
