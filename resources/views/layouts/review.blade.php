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
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                    Sections
                    <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="page-scroll" href="#Top">Top</a></li>
                        <li><a class="page-scroll" href="#Gameplay">Gameplay</a></li>
                        <li><a class="page-scroll" href="#Story">Story</a></li>
                        <li><a class="page-scroll" href="#Graphics">Graphics and Settings</a></li>
                        <li><a class="page-scroll" href="#Conclusion">Conclusion</a></li>
                        <li><a class="page-scroll" href="#Screenshots">Screenshots</a></li>
                    </ul>
            </ul>
            @include('partials.navbar-right')
        </div>
    </div>
</div>
@endsection