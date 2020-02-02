<nav class="navbar is-secondary" role="navigation" aria-label="main navigation">
  <div class="container">
    <div class="navbar-brand">
      <a class="navbar-item" href="/">
        <img src="/assets/images/logo.png">
      </a>
    </div>
    <div class="navbar-menu">
	    <div class="navbar-start">
	    	@foreach ($pages as $page)
	    		<a class="navbar-item" href="/pages/{{ $page->slug }}">
			        {{ $page->title }}
				</a>
	    	@endforeach
	    </div>
	 </div>
  </div>
</nav>