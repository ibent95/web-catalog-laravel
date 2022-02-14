<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Catalog App</title>
	<!-- HTML5 Shim and Respond.js IE11 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 11]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->

	<link rel="stylesheet" href="assets/css/main.css">
</head>

<body>
	<!-- [ Pre-loader ] start -->
	<div class="loader-bg">
		<div class="loader-fill"></div>
	</div>
	<!-- [ Pre-loader ] End -->

	<!-- Header -->
	@include('header')

	<!-- [ Main Content ] start -->
	<div class="pc-container">

		@include('content')

	</div>
	<!-- [ Main Content ] end -->

	<!-- [ Footer ] start -->
	<div class="pc-container">
		<div class="pcoded-content">
			@include('footer')
		</div>
	</div>
	<!-- [ Footer ] end -->

	<script src="assets/js/main.js"></script>

</body>

</html>