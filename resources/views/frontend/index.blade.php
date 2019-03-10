@extends('layouts.index')
@section('customStyle')
@endsection
@section('content')
<div class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-xl-12">
				<div class="breadcrumb-holder">
					<h1 class="main-title float-left">Home</h1>
					<ol class="breadcrumb float-right">
						<li class="breadcrumb-item">Home</li>
						<li class="breadcrumb-item active">Apps</li>
					</ol>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>

		@foreach (Session::get('boeAppGroup') as $appGroupKey => $appGroupVal)
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
					<div class="boe-app-wrapper" id="nav{{ $appGroupVal->id }}">
						<div class="boe-app-header">
							<h3 class="text-muted"><i class="{{ $appGroupVal->icon_name }}" aria-hidden="true"></i> {{ $appGroupVal->name_en }}</h3>
						</div>
						<div class="boe-app-body">
						@foreach ($boeApps as $appKey => $appVal)
							@if ($appVal->app_group_ref == $appGroupVal->id)
								@if ($appVal->status == 'normal')
									<ol id="photo-thumb">
										<li data-toggle="tooltip" data-html="true" title="<strong>{{ $appVal->desc }}</strong>">
											<a href="{{ route('launch', ['id'=>$appVal->id]) }}" target="_blank">
												{{ Html::image('public/icons/boe_apps/'.$appVal->icon_name, 'alt=R506', ['class'=>'xx']) }}
											</a>
										</li>
									</ol>

									@if ($appVal->id == 24)
										<!--
										<div style="width:100%;">
											<ul class="list-group list-group-flush" style="width:80%;margin-left:20px;">
												<li class="list-group-item">
													<i class="fa fa-angle-right" aria-hidden="true"></i>
													<a href="http://203.157.15.110/boe/software/downloadtab.php?#tab2" target="_blank">&nbsp;โปรแกรมเฝ้าระวัง</a>
												</li>
												<li class="list-group-item">
													<i class="fa fa-angle-right" aria-hidden="true"></i>
													<a href="http://203.157.15.110/boe/software/downloadtab.php?#tab3" target="_blank">&nbsp;ข้อมูลประชากร</a>
												</li>
												<li class="list-group-item">
													<i class="fa fa-angle-right" aria-hidden="true"></i>
													<a href="http://203.157.15.110/boe/software/downloadtab.php?#tab4" target="_blank">&nbsp;แบบฟอร์ม</a>
												</li>
												<li class="list-group-item">
													<i class="fa fa-angle-right" aria-hidden="true"></i>
													<a href="http://203.157.15.110/boe/software/downloadtab.php?#tab5" target="_blank">&nbsp;แบบฟอร์มสอบสวนโรค</a>
												</li>
												<li class="list-group-item" style="border-bottom:none;">
													<i class="fa fa-angle-right" aria-hidden="true"></i>
													<a href="http://203.157.15.110/boe/software/downloadtab.php?#tab6" target="_blank">&nbsp;EIDSS</a>
												</li>
											</ul>
										</div>
										-->
									@endif
								@endif
							@endif
						@endforeach
						</div>
					</div>
				</div>
			</div>
		@endforeach
	</div><!-- END container-fluid -->
</div><!-- END content -->
@endsection
@section('customScript')
<script>
jQuery(function( $ ){
	$('#relative-selector').click(function() {
		scrollTop: $('#Surveillance').offset().top
	}, 800);
	$('[data-toggle="tooltip"]').tooltip();
});
</script>
@endsection
