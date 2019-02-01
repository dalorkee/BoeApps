<!-- top bar navigation -->
<div class="headerbar">
	<!-- LOGO -->
	<div class="headerbar-left">
		<a href="#" class="logo">{{ Html::image('public/assets/images/logo.png') }} <span>BOE Apps</span></a>
	</div>
	<nav class="navbar-custom">
		<ul class="list-inline float-right mb-0">
			<li class="list-inline-item dropdown notif">
				<a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
					<i class="fa fa-fw fa-envelope-o"></i><span class="notif-bullet"></span>
				</a>
				<div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-lg" aria-labelledby="Preview">
					<!-- item-->
					<div class="dropdown-item noti-title">
						<h5><small><span class="label label-danger pull-xs-right">12</span>Contact Messages</small></h5>
					</div>
					<!-- item-->
					<a href="#" class="dropdown-item notify-item">
						<p class="notify-details ml-0">
							<b>Foxy Johnes</b>
							<span>New message received</span>
							<small class="text-muted">Yesterday, 13:30</small>
						</p>
					</a>
					<!-- All-->
					<a href="#" class="dropdown-item notify-item notify-all">View All</a>
				</div>
			</li>
			<li class="list-inline-item dropdown notif">
				<a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
					<i class="fa fa-fw fa-bell-o"></i><span class="notif-bullet"></span>
				</a>
				<div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-lg" aria-labelledby="Preview">
					<!-- item-->
					<div class="dropdown-item noti-title">
						<h5><small><span class="label label-danger pull-xs-right">5</span>Allerts</small></h5>
					</div>
					<!-- item-->
					<a href="#" class="dropdown-item notify-item">
						<div class="notify-icon bg-faded">
							{{ Html::image('public/assets/images/avatars/avatar2.png', 'alt=img', ['class'=>'rounded-circle img-fluid']) }}
						</div>
						<p class="notify-details">
							<b>John Doe</b>
							<span>User registration</span>
							<small class="text-muted">3 minutes ago</small>
						</p>
					</a>
					<!-- All-->
					<a href="#" class="dropdown-item notify-item notify-all">View All Allerts</a>
				</div>
			</li>
			<li class="list-inline-item dropdown notif">
				<a class="nav-link dropdown-toggle nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
					{{ Html::image('public/assets/images/avatars/avatar4.png', 'alt=Profile image', ['class'=>'avatar-rounded']) }}
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
