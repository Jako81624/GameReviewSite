@extends('master')
@section('navbar')
<div class="container-fluid">
    @include('partials.navbar')
</div>
@endsection
@section('modals')
    @if(!Auth::check())
        @include('modals.loginmodal')
    @endif
@endsection