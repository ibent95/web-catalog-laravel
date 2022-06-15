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