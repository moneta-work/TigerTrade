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
					<li><a href='<?= base_url("auth/create_user") ?>'>Register</a></li>
					<li><a href='<?= base_url("auth/") ?>'>Login</a></li>
				</ul>
			</nav>
		</div>
	</nav>	
