@extends('modal')
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
            <ul class="nav navbar-nav" style="float: right">
                <li><a href="#" class="btn btn-primary btn-lg" role="button" data-toggle="modal" data-target="#login-modal" style="font-size:24px">λ</a></li>
            </ul>
        </div>
    </div>
</div>
@endsection