@extends('layouts.standard')
@section('content')
    {{--This really needs to get moved to the db--}}
    <div id="featured" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#featured" data-slide-to="0" class="active"></li>
            <li data-target="#featured" data-slide-to="1"></li>
            <li data-target="#featured" data-slide-to="2"></li>
            <li data-target="#featured" data-slide-to="3"></li>
        </ol>
        <!-- Carousel items -->
        <div class="carousel-inner">
            <div class="item active ad1">
                <div class="carousel-caption">
                    <a href="/games/jc3" style="color:inherit"><h1>Just Cause 3</h1></a>
                    <p>We go hands-on with Avalanche Studio's latest Open-World Explosion Simulator!</p>
                </div>
            </div>
            <div class="item ad2">
                <div class="carousel-caption">
                    <a href="/games/bindingofisaac" style="color:inherit"><h1>The Binding Of Isaac</h1></a>
                    <p>One of our professional reviewers takes on the masterpiece that is "The Binding Of Isaac"</p>
                </div>
            </div>
            <div class="item ad3">
                <div class="carousel-caption">
                    <a href="/games/rocketleague" style="color:inherit"><h1>Rocket League</h1></a>
                    <p>Another one of our hot shot reviewers takes a look at the juggernaut that is Rocket League</p>
                </div>
            </div>
            <div class="item ad4">
                <div class="carousel-caption">
                    <a href="/games/relichunterszero" style="color:inherit"><h1>Relic Hunters Zero</h1></a>
                    <p>One of our highly skilled reviewers looks over a game I am totally unfamiliar with</p>
                </div>
            </div>
            <a class="left carousel-control" href="#featured" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#featured" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    <div id="latest" class="container-fluid">
        <h1 style="font-size: 45px; padding-bottom: 20px">Latest Articles</h1>
        <div class="row">
            @foreach($articles as $article)
            <div class="col-md-4">
                <div class="thumbnail">
                    <a href="/games/{{$article->slug}}"><h3 style="color: #000">{{$article->title}}</h3></a>
                    <a href="/games/{{$article->slug}}"><img src="{{$article->temporary_jumbo_image}}"></a>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <div id="writers" class="container-fluid">
        <h1 style="font-size: 45px; padding-bottom: 20px">Writers</h1>
        <div class="row">
            <div class="col-md-2">
                <div class="thumbnail" style="min:height: 100px; height: 210px; width: 210px">
                    <a href="http://www.youtube.com/jako81624"><img src="/Carousel/Writers/Jako81624.jpg" style="min-height: 100px; height: 200px;"></a>
                </div>
            </div>
            <div class="col-md-2">
                <div class="thumbnail" style="min:height: 100px; height: 210px; width: 210px">
                    <a href="https://www.youtube.com/user/CoolJWR100"><img src="/Carousel/Writers/Llama.png" style="min-height: 100px; height: 200px;"></a>
                </div>
            </div>
            <div class="col-md-2">
                <div class="thumbnail" style="min:height: 100px; height: 210px; width: 210px">
                    <a href="https://www.youtube.com/user/genuineparts"><img src="/Carousel/Writers/Genuine.png" style="min-height: 100px; height: 200px;"></a>
                </div>
            </div>
        </div>
    </div>
@endsection