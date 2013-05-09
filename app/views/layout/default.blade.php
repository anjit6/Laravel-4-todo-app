<!DOCTYPE html>
<html lang="en">
<?php
	use Assetic\Asset\AssetCollection;
	use Assetic\Asset\FileAsset;
	use Assetic\Filter\CssMinFilter as CssMinFilter;
	

	$js = new AssetCollection(array(
		new FileAsset('js/jquery/jquery.v1.8.3.min.js'),
		new FileAsset('js/bootstrap/bootstrap.min.js'),
	));

	$css = new AssetCollection(array(
		new FileAsset('assets/css/bootstrap.min.css'),
		new FileAsset('assets/css/bootstrap-responsive.min.css'),
		new FileAsset('assets/css/style.css'),
	));

	/*
	$filters = array(
		"ImportImports"                 => true,
		"RemoveComments"                => true, 
		"RemoveEmptyRulesets"           => true,
		"RemoveEmptyAtBlocks"           => true,
		"ConvertLevel3AtKeyframes"      => true,
		"ConvertLevel3Properties"       => true,
		"Variables"                     => true,
		"RemoveLastDelarationSemiColon" => true
		);

	$plugins = array(
		"Variables"                     => true,
		"ConvertFontWeight"             => true,
		"ConvertHslColors"              => true,
		"ConvertRgbColors"              => true,
		"ConvertNamedColors"            => true,
		"CompressColorValues"           => true,
		"CompressUnitValues"            => true,
		"CompressExpressionValues"      => true
		);

	$cssMinFilter = new CssMinFilter();
	$cssMinFilter->setFilters($filters);
	$cssMinFilter->setPlugins($plugins);

	$css->ensureFilter($cssMinFilter);
	*/
?>

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
			<meta name="keywords" content="your, awesome, keywords, here" />
		@show
		
		<meta name="author" content="Anjaneyulu Reddy" />
		
		@section('meta-description')
			<meta name="description" content="Simple TODO application using Laravel PHP framework 4" />
		@show

		<!-- Mobile Specific Metas
		================================================== -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- CSS -->
		<style type="text/css">
			{{ $css->dump() }}
		</style>
		
		<!-- <link rel="stylesheet" type="text/css" href="{{{ asset('/assets/css/all.css') }}}"> -->

		<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
		<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

		<!-- Favicons
		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{{ asset('assets/ico/apple-touch-icon-144-precomposed.png') }}}">
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{{ asset('assets/ico/apple-touch-icon-114-precomposed.png') }}}">
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{{ asset('assets/ico/apple-touch-icon-72-precomposed.png') }}}">
		<link rel="apple-touch-icon-precomposed" href="{{{ asset('assets/ico/apple-touch-icon-57-precomposed.png') }}}">
		<link rel="shortcut icon" href="{{{ asset('assets/ico/favicon.png') }}}">
		 -->
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

		<!-- JAVASCRIPT FILES -->
		<!--
		<script type="text/javascript" src="{{{ asset('js/jquery/jquery.v1.8.3.min.js') }}}"></script>
		<script type="text/javascript" src="{{{ asset('js/bootstrap/bootstrap.min.js') }}}"></script>
		-->

		<script type="text/javascript">
			{{ $js->dump() }}
		</script>

	</body>
</html>
