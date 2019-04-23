@extends('layouts.index')
@section('customStyle')
	{{ Html::style('assets/plugins/kartik-v-bootstrap-star-rating/css/star-rating.css') }}
	{{ Html::style('assets/plugins/kartik-v-bootstrap-star-rating/themes/krajee-fa/theme.css') }}
	{{ Html::style('assets/plugins/kartik-v-bootstrap-star-rating/themes/krajee-svg/theme.css') }}
	{{ Html::style('assets/plugins/kartik-v-bootstrap-star-rating/themes/krajee-uni/theme.css') }}
@endsection
@section('customHeadScript')
	{{ Html::script('assets/plugins/kartik-v-bootstrap-star-rating/js/star-rating.js') }}
	{{ Html::script('assets/plugins/kartik-v-bootstrap-star-rating/themes/krajee-fa/theme.js') }}
	{{ Html::script('assets/plugins/kartik-v-bootstrap-star-rating/themes/krajee-svg/theme.js') }}
	{{ Html::script('assets/plugins/kartik-v-bootstrap-star-rating/themes/krajee-uni/theme.js') }}
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
											<li class="mb-4">
												<a href="{{ route('launch', ['id'=>$appVal->id]) }}" target="_blank">
													{{ Html::image('ico/boe_apps/'.$appVal->icon_name, 'alt=icon', ['class'=>'xx']) }}
												</a>
												<div class="app-meta">
													<h6>
														<a href="{{ route('launch', ['id'=>$appVal->id]) }}" target="_blank" data-toggle="tooltip" data-html="true" title="<strong>{{ $appVal->desc }}</strong>">
															{{ mb_substr($appVal->name_en, 0, 15, 'UTF-8') }}
														</a>
													</h6>
													<form>
														<input id="rating{{ $appVal->id }}" name="app-rating{{ $appVal->id }}" type="number" value="{{ $appVal->rating }}" class="kv-fa rating-loading">
													</form>
													<div class="app-view">
														<span><i class="fa fa-thumbs-o-up" aria-hidden="true"></i></span>
														<span>{{ number_format($appVal->clicked) }}</span>
													</div>

												</div>
											</li>
										</ol>
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
$(document).ready(function($) {
	$('#relative-selector').click(function() {
		scrollTop: $('#Surveillance').offset().top
	}, 800);
	$('[data-toggle="tooltip"]').tooltip();
});
</script>
<script>
	$(document).ready(function() {
		$('.kv-fa').rating({
			showCaption: false,
			theme: 'krajee-fa',
			step: '1',
			size: 'xs',
			displayOnly: true

		});
	});
</script>
@endsection
