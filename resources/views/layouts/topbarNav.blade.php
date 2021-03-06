<!-- top bar navigation -->
<div class="headerbar">
	<!-- LOGO -->
	<div class="headerbar-left">
		<a href="#" class="logo">{{ Html::image('ico/small-moph-logo.png') }} <span>BOE Apps</span></a>
	</div>
	<nav class="navbar-custom">
		<ul class="list-inline float-right mb-0">
			<li class="list-inline-item dropdown notif">
				<a class="nav-link dropdown-toggle nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
					{{ Html::image('assets/images/avatars/admin.png', 'alt=Profile image', ['class'=>'avatar-rounded']) }}
				</a>
				<div class="dropdown-menu dropdown-menu-right profile-dropdown " aria-labelledby="Preview">
					<!-- item-->
					<div class="dropdown-item noti-title">
						<h5 class="text-overflow"><small>Talek team</small> </h5>
					</div>
					<!-- item-->
					<a href="account.php?page=pro-profile" class="dropdown-item notify-item">
						<i class="fa fa-user"></i> <span>Profile</span>
					</a>
					<!-- item-->
					<a href="logout.php" class="dropdown-item notify-item">
						<i class="fa fa-power-off"></i> <span>Logout</span>
					</a>
				</div>
			</li>
		</ul>
		<ul class="list-inline menu-left mb-0">
			<li class="float-left">
				<button class="button-menu-mobile open-left">
					<i class="fa fa-fw fa-bars"></i>
				</button>
			</li>
		</ul>
	</nav>
</div>
<!-- End Navigation -->
