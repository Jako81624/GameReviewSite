@extends('master')
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
                    <h1>Just Cause 3</h1>
                    <p>We go hands-on with Avalanche Studio's latest Open-World Explosion Simulator!</p>
                </div>
            </div>
            <div class="item ad2">
                <div class="carousel-caption">
                    <h1>Ghost Recon Wildlands</h1>
                    <p>We go on an open world romp with the latest Tom Clancy game</p>
                </div>
            </div>
            <div class="item ad3">
                <div class="carousel-caption">
                    <h1>Fallout 4</h1>
                    <p>What's the scoop on Bethesda's latest Post-Apocalyptic Shooter?</p>
                </div>
            </div>
            <div class="item ad4">
                <div class="carousel-caption">
                    <h1>Crysis 3</h1>
                    <p>Can we run Crysis!?</p>
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
                    <h3>Just Cause 3</h3>
                    <img src="Carousel/JC3.jpg">
                </div>
            </div>
            <div class="col-md-4">
                <div class="thumbnail">
                    <h3>Ghost Recon Wildlands</h3>
                    <img src="Carousel/GRW.jpg">
                </div>
            </div>
            <div class="col-md-4">
                <div class="thumbnail">
                    <h3>Fallout 4</h3>
                    <img src="Carousel/FO4.jpg">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="thumbnail">
                    <h3>Crysis 3</h3>
                    <img src="Carousel/C3.jpg">
                </div>
            </div>
        </div>
    </div>
@endsection