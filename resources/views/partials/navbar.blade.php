<div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand page-scroll" href="/">OCGR</a>
</div>
<div>
    <div class="collapse navbar-collapse top-test-enable" id="myNavbar">
        <ul class="nav navbar-nav">
            <li class="{{ active_class(if_uri(['/'])) }}"><a class="page-scroll" href="{{ if_uri(['/']) ? "#featured" : "/" }}">Featured</a></li>
            <li><a class="page-scroll" href="#latest">Latest</a></li>
            <li class="{{ active_class(if_uri(['allgames'])) }}"><a href="/allgames">All Articles</a></li>
        </ul>
        @include('partials.navbar-right')
    </div>
</div>