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
		@foreach($jakoistrash as $key=>$ads)
            <div class="item ad1 @if($key == 0) active @endif ">
			    <img src="{{$ads->temporary_jumbo_image}}" alt="...">
                <div class="carousel-caption right">
                    <a href="/games/{{$ads->slug}}" style="color:inherit"><h1>{{$ads->title}}</h1></a>
                    <p>{{$ads->intro}}!</p>
                </div>
            </div>
        @endforeach  
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
                <div class="thumbnail" style="min:height: 100px; height: 250px; width: 210px">
                    <h4 a href="www.youtube.com/jako81624" style="color:#000">Jako81624</h4>
                    <a href="http://www.youtube.com/jako81624"><img src="/Carousel/Writers/Jako81624.jpg" style="min-height: 100px; height: 200px;"></a>
                </div>
            </div>
            <div class="col-md-2">
                <div class="thumbnail" style="min:height: 100px; height: 250px; width: 210px">
                    <h4 a href="https://www.youtube.com/user/CoolJWR100" style="color:#000">Llama</h4>
                    <a href="https://www.youtube.com/user/CoolJWR100"><img src="/Carousel/Writers/Llama.png" style="min-height: 100px; height: 200px;"></a>
                </div>
            </div>
            <div class="col-md-2">
                <div class="thumbnail" style="min:height: 100px; height: 250px; width: 210px">
                    <h4 a href="https://www.youtube.com/user/genuineparts" style="color:#000">GenuineParts</h4>
                    <a href="https://www.youtube.com/user/genuineparts"><img src="/Carousel/Writers/Genuine.png" style="min-height: 100px; height: 200px;"></a>
                </div>
            </div>
            <div class="col-md-2">
                <div class="thumbnail" style="min:height: 100px; height: 250px; width: 210px">
                    <h4 style="color:#000">Whartzz</h4>
                    <img src="/Carousel/Writers/Whartzz.jpg" style="min-height: 100px; height: 200px;">
                </div>
            </div>
            <div class="col-md-2">
                <div class="thumbnail" style="min:height: 100px; height: 250px; width: 210px">
                    <h4 style="color:#000">Jsull07</h4>
                    <img src="/Carousel/Writers/Jsull07.jpg" style="min-height: 100px; height: 200px;">
                </div>
            </div>
            </div>
            <div class="row">
            <div class="col-md-2">
                <div class="thumbnail" style="min:height: 100px; height: 250px; width: 210px">
                    <h4 a href-"https://soundcloud.com/kieran_tunnicliffe" style="color:#000">KJT</h4>
                    <a href="https://soundcloud.com/kieran_tunnicliffe"><img src="//cdn.ocgr.io/Hn5A0D9saHSp16p7.png" style="min-height: 100px; height: 200px;"></a>
                </div>
            </div>
            <div class="col-md-2">
                <div class="thumbnail" style="min:height: 100px; height: 250px; width: 210px">
                    <h4 style="color:#000">Lugo</h4>
                    <img src="//cdn.ocgr.io/5R5oDN4Vz2yxWaq1.png" style="min-height: 100px; height: 200px;">
                </div>
            </div>
            </div>
        </div>
    </div>
@endsection