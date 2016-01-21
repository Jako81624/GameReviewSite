@extends('layouts.standard')
@section('content')
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
            <div class="col-md-4">
                <div class="thumbnail">
                    <a href="/games/jc3" style="color:inherit"><h3>Just Cause 3</h3></a>
                    <a href="/games/jc3"><img src="Carousel/JC3.jpg"></a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="thumbnail">
                    <a href="/games/relichunterszero" style="color:inherit"><h3>Relic Hunters Zero</h3>
                    <a href="/games/relichunterszero"><img src="Carousel/RelicHuntersZero/1.jpg"></a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="thumbnail">
                    <a href="/games/rocketleague" style="color:inherit"><h3>Rocket League</h3></a>
                    <a href="/games/rocketleague"><img src="Carousel/RocketLeague/4.jpg"></a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="thumbnail">
                    <a href="/games/bindingofisaac" style="color:inherit"><h3>Binding Of Isaac</h3></a>
                    <a href="/games/bindingofisaac"><img src="Carousel/BindingOfIsaac/1.jpg"></a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="thumbnail">
                    <a href="/games/" style="color:inherit"><h3>Fallout 4</h3></a>
                    <a href="/games/"><img src="Carousel/FO4.jpg"></a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="thumbnail">
                    <a href="/games/riskofrain" style="color:inherit"><h3>Risk Of Rain</h3></a>
                    <a href="/games/riskofrain"><img src="Carousel/RiskOfRain/1.jpg"></a>
                </div>
            </div>
        </div>
    </div>
@endsection