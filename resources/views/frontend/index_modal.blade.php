@extends('layouts.index')
@section('customStyle')
<style>
html {
	scroll-behavior: smooth;
}
.card {
	font-family: 'Prompt' !important;
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
{{ Html::style('public/assets/plugins/datatables/dataTables.bootstrap4.min.css') }}
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
											<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 mb-3">
												<div class="card" style="min-height: 220px;">
													@if ($appVal->app_group_ref == '4')
														<!-- create modal link on banner -->
														<a data-fancybox="modal{{ $appVal->id }}" data-src="#modal{{ $appVal->id }}" href="javascript:;">
															{{ Html::image('public/icons/boe_apps/'.$appVal->icon_name, 'alt=R506', ['class'=>'card-img-top']) }}
														</a>
													@else
														<!-- create normal banner -->
														<a href="{{ $appVal->app_link }}" title="{{ $appVal->name_th }}">
															{{ Html::image('public/icons/boe_apps/'.$appVal->icon_name, 'alt=R506', ['class'=>'card-img-top']) }}
														</a>
													@endif
													<div class="card-body">
														<h4 class="card-title"><a href="{{ $appVal->app_link }}" title="{{ $appVal->name_th }}">{{ $appVal->desc }}</a></h4>
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
	<!-- show modal -->
	@foreach ($boeApps as $appKey => $appVal)
		@if ($appVal->app_group_ref == '4')
			<div id="modal{{ $appVal->id }}" style="display:none;padding:10px 1vw; width:80vw;">
				<div class="card mt-3 mr-4 mb-2 ml-4" style="border:none;">
					<div class="card-header">
						<h3 style="text-align:center;">{{ $appVal->name_en }}</h3>
					</div>
					<div class="card-body">
						<table id="download{{ $appVal->id }}" class="table table-hover display" cellspacing="0" width="100%">
							<thead>
								<tr>
									<th>File</th>
									<th>Type</th>
									<th>DL</th>
								</tr>
							</thead>
							<tfoot></tfoot>
							<tbody>
							@foreach ($fileUpload as $fileKey => $fileVal)
								@if ($fileVal->apps_ref == $appVal->id)
									<tr>
										<td><a href="{{ route('getFile', ['id'=>$fileVal->id]) }}">{{ $fileVal->file_desc }}</a></td>
										<td>{{ $fileVal->type }}</td>
										<td>{{ $fileVal->download }}</td>
									</tr>
								@endif
							@endforeach
							</tbody>
						</table>
					</div>
				</div>
			</div>
		@endif
	@endforeach

</div><!-- END content -->
@endsection
@section('customScript')
{{ Html::script('public/assets/plugins/datatables/jquery.dataTables.min.js') }}
<script>
jQuery(function( $ ){
	$('#relative-selector').click(function() {
		scrollTop: $('#Surveillance').offset().top
	}, 200);
	@foreach ($boeApps as $appKey => $appVal)
		@if ($appVal->app_group_ref == '4')
			$('#download{{ $appVal->id }}').DataTable({
				"searching": false,
				"bPaginate": false,
				"bLengthChange": false,
				"bFilter": true,
				"bInfo": false
			});
		@endif
	@endforeach
});
</script>
@endsection
