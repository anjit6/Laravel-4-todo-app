<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Basic Page Needs
		================================================== -->
		<meta charset="utf-8" />
		<title>
			@section('title')
			Laravel Sample TODO Application Test
			@show
		</title>
		@section('meta-keywords')
			<meta name="keywords" content="laravel4, sample, todo application" />
		@show
		
		<meta name="author" content="Anjaneyulu Reddy (anji.t6@gmail.com)" />
		
		@section('meta-description')
			<meta name="description" content="Simple TODO application using Laravel PHP framework 4" />
		@show

		<!-- Mobile Specific Metas
		================================================== -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- CSS -->
		<link href="/laravel-todo/public/css/styles.min.css" rel="stylesheet" type="text/css"></link>

		<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
		<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
	</head>

	<body>
		<div class="container">
			<div class="navbar navbar-inverse navbar-fixed-top">
				<div class="navbar-inner">
					<div class="container">
						<span class="app-title">Sample TODO Applicaiton</span>
					</div>
				</div>
			</div>
			<div class="content">
				@yield('content')
			</div>
		</div>

		<!-- JAVASCRIPT -->
		<script type="text/javascript" src="/laravel-todo/public/js/scripts.min.js"></script>

	</body>
</html>
