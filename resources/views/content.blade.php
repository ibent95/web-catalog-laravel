<!-- [ Main Content ] start -->
<div class="flex-grow">
		<div class="grid grid-cols-1 gap-4" id="content">

			@php $content = (isset($content)) ? $content : 'home' ; @endphp

			@if (file_exists(resource_path('/views/contents/' . $content . '.blade.php')))
				@include('contents/' . $content )
			@else
				@include('contents/404-page')
			@endif

	</div>
</div>
<!-- [ Main Content ] end -->