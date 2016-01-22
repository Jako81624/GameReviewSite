<ul class="nav navbar-nav" style="float: right">
    @if(!Auth::check())
        <li><a href="#" class="btn btn-primary btn-lg" role="button" data-toggle="modal" data-target="#login-modal" style="font-size:24px">?</a></li>
    @else
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                ?
                <span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
                <li><a href="#">Welcome {{Auth::user()->name}}</a></li>
                <li role="separator" class="divider"></li>
                <li><a class="alert-danger" href="{{url('/auth/logout')}}">Logout</a></li>
            </ul>
        </li>
    @endif
    <li class="{{ active_class(if_uri(['news'])) }}"><a class="page-scroll" href="/news">News</a></li>
    <li class="{{ active_class(if_uri(['contact'])) }}"><a class="page-scroll" href="/contact">Contact</a></li>
</ul>