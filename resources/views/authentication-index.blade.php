<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>CatalogApp - Sign in</title>
	<!-- HTML5 Shim and Respond.js IE11 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 11]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->

	<!-- CSS -->
	<link rel="stylesheet" href="{{ mix('assets/css/main.css') }}">

</head>

<body>

	@include('contents.loader-content')

	@include('content')

	<!-- Javascript -->
	<script src="{{ mix('assets/js/manifest.js') }}"></script>
	<script src="{{ mix('assets/js/vendor.js') }}"></script>
	<script src="{{ mix('assets/js/main.js') }}"></script>
</body>

</html>