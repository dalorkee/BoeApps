<!-- Left Sidebar -->
<div class="left main-sidebar">
	<div class="sidebar-inner leftscroll">
		<div id="sidebar-menu">
			<ul>
				<li class="submenu">
					<a href="boeapps.php?page=dashboard" class="pro"><i class="ion-grid" aria-hidden="true"></i><span> ALL Apps</span> </a>
				</li>
				@foreach ($boeAppGroup as $key => $value)
					<li class="submenu">
						<a href="#nav{{ $key }}"><i class="{{ $value->icon_name }}" aria-hidden="true"></i><span> {{ $value->name_en }}</span> <span class="menu-arrow"></span></a>
						<ul class="list-unstyled">
							@foreach ($boeApps as $item => $val)
								@if ($val->group_ref == $value->id)
									<li><a href="{{ $val->app_link }}"><i class="fa fa-angle-double-right" aria-hidden="true" style="font-size:.80em;margin:0;padding:0;"></i> {{ $val->name_en }}</a></li>
								@endif
							@endforeach
						</ul>
					</li>
				@endforeach
			</ul>
			<div class="clearfix"></div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<!-- End Sidebar -->
