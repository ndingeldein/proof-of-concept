@php
  
@endphp
@extends('_layouts.master')
@section('body')
<section class="hero is-primary">
  <div class="hero-body">
    <div class="container">
      <h1 class="title">
        {{ $page->title }}
      </h1>
    </div>
  </div>
</section>
<section class="section">
	<div class="container">
		<div class="content">
			{!! $page->body !!}
		</div>
	</div>
</section>
@endsection