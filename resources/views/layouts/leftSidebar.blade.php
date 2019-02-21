<!-- Left Sidebar -->
<div class="left main-sidebar">
	<div class="sidebar-inner leftscroll">
		<div id="sidebar-menu">
			<ul>
				<li class="submenu">
					<a href="http://203.157.15.110/BoeApps/" class="pro"><i class="ion-grid" aria-hidden="true"></i><span> ALL Apps</span> </a>
				</li>
				@foreach (Session::get('boeAppGroup') as $key => $value)
					<li class="submenu">
						@if (isset($page) && $page =='home')
							<a href="#nav{{ $key }}"><i class="{{ $value->icon_name }}" aria-hidden="true"></i><span> {{ $value->name_en }}</span> <span class="menu-arrow"></span></a>
						@else
							<a href="{{ route('home') }}#nav{{ $key }}"><i class="{{ $value->icon_name }}" aria-hidden="true"></i><span> {{ $value->name_en }}</span> <span class="menu-arrow"></span></a>
						@endif
					</li>
				@endforeach
			</ul>
			<div class="clearfix"></div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<!-- End Sidebar -->
