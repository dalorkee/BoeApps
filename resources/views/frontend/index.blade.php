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
					<div class="card mb-3" id="nav{{ $appGroupVal->id }}">
						<div class="card-header">
							<h3><i class="{{ $appGroupVal->icon_name }}" aria-hidden="true"></i> {{ $appGroupVal->name_en }}</h3>
						</div>
						<div class="card-body">
							<div class="card-deck">
								<div class="row">
									@foreach ($boeApps as $appKey => $appVal)
										@if ($appVal->app_group_ref == $appGroupVal->id)
											@if ($appVal->status == 'normal')
												<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 mb-3">
													<div class="card">

														<!--if ($appVal->app_group_ref == '4')
															- create link to download controller -
															<a href=" URL::route('download', ['id'=>$appVal->id]) }}#dl $appVal->id }}" data-toggle="tooltip" data-html="true" title="<strong> $appVal->desc }}</strong>">
																 Html::image('public/icons/boe_apps/'.$appVal->icon_name, 'alt=R506', ['class'=>'card-img-top']) }}
															</a>
														else -->
															<!-- create normal banner -->
															<a href="{{ $appVal->app_link }}" data-toggle="tooltip" data-html="true" title="<strong>{{ $appVal->desc }}</strong>" target="_blank">
																{{ Html::image('public/icons/boe_apps/'.$appVal->icon_name, 'alt=R506', ['class'=>'card-img-top']) }}
															</a>
														<!--
														<div class="card-body">
															<h4 class="boe-card-title"><a href=" $appVal->app_link }}" title=" $appVal->name_th }}"> $appVal->desc }}</a></h4>
															<p class="card-text"></p>
														</div>
														-->
													</div>
													@if ($appVal->id == 24)
														<div style="width:100%;">
														<ul class="list-group list-group-flush" style="width:80%;margin-left:20px;">
															<li class="list-group-item" style="border-top:none;"><i class="fa fa-angle-right" aria-hidden="true"></i> Software</li>
															<li class="list-group-item"><i class="fa fa-angle-right" aria-hidden="true"></i> Population</li>
															<li class="list-group-item"><i class="fa fa-angle-right" aria-hidden="true"></i> Documents</li>
															<li class="list-group-item"><i class="fa fa-angle-right" aria-hidden="true"></i> Form</li>
															<li class="list-group-item" style="border-bottom:none;"><i class="fa fa-angle-right" aria-hidden="true"></i> Etc</li>
														</ul>
														</div>
													@endif
												</div>
											@endif
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
<script>
jQuery(function( $ ){
	$('#relative-selector').click(function() {
		scrollTop: $('#Surveillance').offset().top
	}, 800);
	$('[data-toggle="tooltip"]').tooltip();
});
</script>
@endsection
