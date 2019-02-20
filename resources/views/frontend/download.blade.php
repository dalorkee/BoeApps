@extends('layouts/index')
@section('content')
<div class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-xl-12">
				<div class="breadcrumb-holder">
					<h1 class="main-title float-left">Download</h1>
					<ol class="breadcrumb float-right">
						<li class="breadcrumb-item">Home</li>
						<li class="breadcrumb-item active">Downloads</li>
					</ol>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid">
		<!-- Population -->
		<div class="row" id="dl19">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
				<div class="card mb-3">
					<div class="card-header">
						<h3 class="text-dark">Population</h3>
					</div>
					<div class="card-body">
						<div class="widget-messages nicescroll" style="height: 400px;">
							@foreach ($file_upload as $key => $value)
								@if ($value->apps_ref == 19)
								<a href="{{ route('getFile', ['id'=>$value->id]) }}">
									<div class="message-item">
										<p class="message-item-user text-primary">{{ $value->file_desc }}</p>
										<p class="message-item-msg text-muted">
											<i class="{{ $file_icons['pdf'] }}" aria-hidden="true"></i>&nbsp;
											{{ number_format(((int)$value->size/1024), 2) }} MB&#44;
											<i class="fa fa-download" aria-hidden="true"></i>
											{{ $value->download }}
										</p>
										<p class="message-item-date">{{ $value->upload_date }}</p>
									</div>
								</a>
								@endif
							@endforeach
						</div>
					</div>
				</div><!-- end card-->
			</div>
		</div>
		<!-- Software -->
		<div class="row" id="dl20">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
				<div class="card mb-3">
					<div class="card-header">
						<h3 class="text-dark">Software</h3>
					</div>
					<div class="card-body">
						<div class="widget-messages nicescroll" style="height: 400px;">
							@foreach ($file_upload as $key => $value)
								@if ($value->apps_ref == 20)
								<a href="{{ route('getFile', ['id'=>$value->id]) }}">
									<div class="message-item">
										<p class="message-item-user text-primary">{{ $value->file_desc }}</p>
										<p class="message-item-msg text-muted">
											<i class="{{ $file_icons['pdf'] }}" aria-hidden="true"></i>&nbsp;
											{{ number_format(((int)$value->size/1024), 2) }} MB&#44;
											<i class="fa fa-download" aria-hidden="true"></i>
											{{ $value->download }}
										</p>
										<p class="message-item-date">{{ $value->upload_date }}</p>
									</div>
								</a>
								@endif
							@endforeach
						</div>
					</div>
				</div><!-- end card-->
			</div>
		</div>
		<!-- Documents -->
		<div class="row" id="dl21">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
				<div class="card mb-3">
					<div class="card-header">
						<h3 class="text-dark">Documents</h3>
					</div>
					<div class="card-body">
						<div class="widget-messages nicescroll" style="height: 400px;">
							@foreach ($file_upload as $key => $value)
								@if ($value->apps_ref == 21)
								<a href="{{ route('getFile', ['id'=>$value->id]) }}">
									<div class="message-item">
										<p class="message-item-user text-primary">{{ $value->file_desc }}</p>
										<p class="message-item-msg text-muted">
											<i class="{{ $file_icons['pdf'] }}" aria-hidden="true"></i>&nbsp;
											{{ number_format(((int)$value->size/1024), 2) }} MB&#44;
											<i class="fa fa-download" aria-hidden="true"></i>
											{{ $value->download }}
										</p>
										<p class="message-item-date">{{ $value->upload_date }}</p>
									</div>
								</a>
								@endif
							@endforeach
						</div>
					</div>
				</div><!-- end card-->
			</div>
		</div>
	</div>
</div>
@endsection
