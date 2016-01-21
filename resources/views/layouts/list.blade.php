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
                <li><a class="page-scroll" href="#Home">Top</a></li>
                <li><a class="page-scroll" href="#A">A-E</a></li>
                <li><a class="page-scroll" href="#F">F-J</a></li>
                <li><a class="page-scroll" href="#K">K-O</a></li>
                <li><a class="page-scroll" href="#P">P-T</a></li>
                <li><a class="page-scroll" href="#H">H-L</a></li>
                <li><a class="page-scroll" href="#M">M-Q</a></li>
                <li><a class="page-scroll" href="#R">R-V</a></li>
                <li><a class="page-scroll" href="#W">W-Z</a></li>
            </ul>
        </div>
    </div>
</div>
@endsection