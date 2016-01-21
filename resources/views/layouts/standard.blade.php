@extends('master')
@section('navbar')
<div class="container-fluid">
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
                <li class="{{ active_class(if_uri(['/'])) }}"><a class="page-scroll" href="{{ if_uri(['/']) ? "#featured" : "/#featured" }}">Featured</a></li>
                <li><a class="page-scroll" href="{{ if_uri(['/']) ? "#latest" : "/#latest" }}">Latest</a></li>
                <li class="{{ active_class(if_uri(['allgames'])) }}"><a href="/allgames">All Games</a></li>
            </ul>
            <ul class="nav navbar-nav" style="float: right">
                <li><a class="page-scroll" href="#" style="font-size:24px">λ</a></li>
                <li class="{{ active_class(if_uri(['news'])) }}"><a class="page-scroll" href="/news">News</a></li>
                <li><a class="page-scroll" href="/contact">Contact</a></li>
            </ul>
        </div>
    </div>
</div>
@endsection