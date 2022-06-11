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

	<section class="h-screen grid grid-cols-auto content-center flex justify-center" id="sign-up-form">
		<div>

			<a type="button" class="btn btn-sm pl-0" href="/">
				<i class="fa-solid fa-chevron-left"></i>
				<span class="btn-link">Kembali ke beranda</span>
			</a>

			<div class="card w-96">

				<p class="card-title text-center m-0 py-3">Masuk</p>

				<hr class="m-0">

				<div class="card-body">

					@if ($messages = Session::get('messages'))
						@foreach ($messages as $message)
							<div class="alert alert-{{ $message['type'] }}" role="alert">
								{{ $message['message'] }}
							</div>
						@endforeach
					@endif

					<form class="grid grid-cols-auto gap-2" method="POST" action="/login">
						@csrf

						<div class="form-floating mb-3">
							<input type="email" name="email" class="form-control" id="email" placeholder="name@example.com">
							<label for="email">Email address</label>
						</div>

						<div class="form-floating mb-3">
							<input type="password" name="password" class="form-control" id="password" placeholder="Password">
							<label for="password">Password</label>
						</div>

						<div class="flex justify-center">
							<button type="submit" class="btn btn-primary w-32">Masuk</button>
						</div>

					</form>

				</div>

			</div>

		</div>
	</section>


	<!-- Javascript -->
	<script src="{{ mix('assets/js/manifest.js') }}"></script>
	<script src="{{ mix('assets/js/vendor.js') }}"></script>
	<script src="{{ mix('assets/js/main.js') }}"></script>
</body>

</html>