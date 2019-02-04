@extends('layouts.index')
@section('customStyle')
<style>
html {
	scroll-behavior: smooth;
}
.card-title {
	font-size: 1em !important;
}
.card-text {
	font-size: .875em !important;
}
/*
.card-deck .card {
	max-width: 236px !important;
}
.card-deck .card img {
	max-width: 236px !important;
}
*/
.main-sidebar {
	position: fixed !important;
}
</style>
@endsection
@section('content')
<div class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-xl-12">
				<div class="breadcrumb-holder">
					<h1 class="main-title float-left"></h1>
					<ol class="breadcrumb float-right">
						<li class="breadcrumb-item">Home</li>
						<li class="breadcrumb-item active">Apps</li>
					</ol>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>

		@foreach ($boeAppGroup as $key => $value)
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
					<div class="card mb-3" id="nav{{ $value->id }}">
						<div class="card-header">
							<h3><i class="{{ $value->icon_name }}" aria-hidden="true"></i> {{ $value->name_en }}</h3>
						</div>
						<div class="card-body">
							<div class="card-deck">
								<div class="row">
									@foreach ($boeApps as $item => $val)
										@if ($val->group_ref == $value->id)
											<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 mb-3">
												<div class="card" style="min-height: 220px;">
													<a href="{{ $val->app_link }}">
													{{ Html::image('public/icons/boe_apps/'.$val->icon_name, 'alt=R506', ['class'=>'card-img-top']) }}
													</a>
													<div class="card-body">
														<h4 class="card-title">{{ $val->desc }}</h4>
														<p class="card-text"></p>
													</div>
												</div>
											</div>
										@endif
									@endforeach
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		@endforeach

	</div><!-- END container-fluid -->
</div><!-- END content -->
@endsection
@section('customScript')
{{ Html::script('public/assets/js/jquery.scrollTo.min.js') }}
<script>
jQuery(function( $ ){
	$('#relative-selector').click(function() {
		scrollTop: $('#Surveillance').offset().top}, 200);
});
</script>
@endsection
