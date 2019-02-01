<!DOCTYPE html>
<html>
<head>
	<title>BOE Apps</title>
	<meta name="description" content="Talek team">
	<meta name="keywords" content="talek team">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Admin Template - For Talek team studio only">
	<meta name="author" content="Talek team - https://www.talekteam.com">
	@include('layouts.mainStyle')
	@yield('customStyle')
	@include('layouts.mainHeadScript')
</head>
<body class="adminbody">
	<div id="main">
		@include('layouts.topbarNav')
		@include('layouts.leftSidebar')
		<div class="content-page">
			@yield('content')
		</div>
		@include('layouts.footer')
	</div>
	<!-- END main -->
	@include('layouts.mainFootscript')
	@yield('customScript')
</body>
</html>
