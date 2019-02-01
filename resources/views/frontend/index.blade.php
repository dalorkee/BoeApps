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
						<li class="breadcrumb-item active">BOE Apps</li>
					</ol>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
				<div class="card mb-3" id="surveillance" style="border:none;border-radius:0;">
					<div class="card-header" style="border-top:none;border-right:none;border-left:none;background:white;">
						<h3><i class="ion-cube" aria-hidden="true"></i> Surveillance Database</h3>
					</div>
					<div class="card-body">
						<div class="card-deck">
							<div class="card">
								{{ Html::image('public/icons/boe_apps/icon_r506.jpg', 'alt=R506', ['class'=>'card-img-top']) }}
								<div class="card-body">
									<h4 class="card-title">R506</h4>
									<p class="card-text">This is a R506 Database</p>
								</div>
								<div class="card-footer">
									<i class="fa fa-hand-o-up" aria-hidden="true"></i>
									<small class="text-muted"> 5,000</small>
								</div>
							</div>
							<div class="card">
								{{ Html::image('public/icons/boe_apps/icon_r506 internet.jpg', 'alt=R506', ['class'=>'card-img-top']) }}
								<div class="card-body">
									<h4 class="card-title">R506 Intranet</h4>
									<p class="card-text">โปรแกรม R506 Intranet</p>
								</div>
								<div class="card-footer">
									<i class="fa fa-hand-o-up" aria-hidden="true"></i>
									<small class="text-muted"> 5,000</small>
								</div>
							</div>
							<div class="card">
								{{ Html::image('public/icons/boe_apps/icon_event_provine.jpg', 'alt=R506', ['class'=>'card-img-top']) }}
								<div class="card-body">
									<h4 class="card-title">Event-base</h4>
									<p class="card-text">Event-base for DDC</p>
								</div>
								<div class="card-footer">
									<i class="fa fa-hand-o-up" aria-hidden="true"></i>
									<small class="text-muted"> 5,000</small>
								</div>
							</div>
							<div class="card">
								{{ Html::image('public/icons/boe_apps/icon_event_provine.jpg', 'alt=R506', ['class'=>'card-img-top']) }}
								<div class="card-body">
									<h4 class="card-title">Event-base</h4>
									<p class="card-text">Event-Base for Province</p>
								</div>
								<div class="card-footer">
									<i class="fa fa-hand-o-up" aria-hidden="true"></i>
									<small class="text-muted"> 5,000</small>
								</div>
							</div>
							<div class="card">
								{{ Html::image('public/icons/boe_apps/icon_eidss.jpg', 'alt=R506', ['class'=>'card-img-top']) }}
								<div class="card-body">
									<h4 class="card-title">EIDSS</h4>
									<p class="card-text">โปรแกรม EIDSS</p>
								</div>
								<div class="card-footer">
									<i class="fa fa-hand-o-up" aria-hidden="true"></i>
									<small class="text-muted"> 5,000</small>
								</div>
							</div>
							<div class="card">
								{{ Html::image('public/icons/boe_apps/icon_eidss.jpg', 'alt=R506', ['class'=>'card-img-top']) }}
								<div class="card-body">
									<h4 class="card-title">Mers</h4>
									<p class="card-text">Event-base for DDC</p>
								</div>
								<div class="card-footer">
									<i class="fa fa-hand-o-up" aria-hidden="true"></i>
									<small class="text-muted"> 5,000</small>
								</div>
							</div>
						</div>
					</div>
					<div class="card-body">
						<div class="card-deck">
							<div class="card">
								<img class="card-img-top" src="public/assets/images/sample-image-1.jpg" alt="Card image cap">
								<div class="card-body">
									<h4 class="card-title">R506</h4>
									<p class="card-text">This is a R506 Database</p>
								</div>
								<div class="card-footer">
									<i class="fa fa-hand-o-up" aria-hidden="true"></i>
									<small class="text-muted"> 5,000</small>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div><!-- END row -->
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
				<div class="card mb-3">
					<div class="card-header">
						<h3><i class="fa fa-square-o"></i> E-Learning</h3>
					</div>
					<div class="card-body">
						<div class="card-deck">
							<div class="card">
								<img class="card-img-top" src="public/assets/images/sample-image-1.jpg" alt="Card image cap">
								<div class="card-body">
									<h4 class="card-title">R506</h4>
									<p class="card-text">This is a R506 Database</p>
								</div>
								<div class="card-footer" style="background:white;">
									<small class="text-muted">Last updated 3 mins ago</small>
								</div>
							</div>
							<div class="card">
								<img class="card-img-top" src="public/assets/images/sample-image-3.jpg" alt="Card image cap">
								<div class="card-body">
									<h4 class="card-title">Mers</h4>
									<p class="card-text">Event-base for DDC</p>
								</div>
								<div class="card-footer">
									<small class="text-muted">Last updated 3 mins ago</small>
								</div>
							</div>
						</div>
					</div>
				</div><!-- END card -->
			</div><!-- END column -->
		</div><!-- END row -->
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
