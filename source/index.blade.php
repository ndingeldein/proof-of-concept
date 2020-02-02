@extends('_layouts.master')

@section('body')
<section class="section">
	<div class="container">
		<div class="content">
			<h2>Modiphy</h2>
			<ul>
				@foreach ($pages as $page)
		    		<a class="navbar-item" href="/pages/{{ $page->slug }}">
				        {{ $page->title }}
					</a>
		    	@endforeach
			</ul>
		</div>
	</div>
</section>
@endsection
