@php $content = (isset($content)) ? $content : 'home' ; @endphp

@if (file_exists(resource_path('/views/contents/' . $content . '.blade.php')))
	@include('contents/' . $content )
@else
	@include('contents/404')
@endif