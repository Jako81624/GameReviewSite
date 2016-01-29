<div class="media @if($project->id == 2 ) blizzard @endif">
    <div class="media-heading">
        <button class="btn btn-default btn-xs" type="button" data-toggle="collapse" data-target="#collapse-{{$project->id}}"
                aria-expanded="false" aria-controls="collapseExample"><span class="glyphicon glyphicon-minus"
                                                                            aria-hidden="true"></span></button>
        <span class="label label-info">{{$project->user->name}}</span> {{$project->created_at}} #{{$project->id}} || {{$project->parent_id or 'Root Comment'}} @if($project->id == 2 ) <b>SPECIAl:BLIZZARD</b> @endif
    </div>
    <div class="panel-collapse collapse in" id="collapse-{{$project->id}}">
        <div class="media-left">
            <div class="vote-wrap">
                <div class="save-post">
                    <a href="#"><span class="glyphicon glyphicon-star" aria-label="Kaydet"></span></a>
                </div>
                <div class="vote up">
                    <i class="glyphicon glyphicon-menu-up"></i>
                </div>
                <div class="vote inactive">
                    <i class="glyphicon glyphicon-menu-down"></i>
                </div>
            </div>
            <!-- vote-wrap -->
        </div>
        <!-- media-left -->
        <div class="media-body">
            @if($project->id == 1)
                <img src="https://www.ponythread.com/img/uploads/0340fb639d473f1bb295c2364e7783f4.jpg" style="display: inline-block; max-width: 250px;max-height: 300px;"/>
            @endif
            <p class="comment-text">{{$project->body}}</p>

            <div class="comment-meta">
                <span><a href="#">Delete</a></span>
                <span><a href="#">Report</a></span>
                <span><a href="#">Reply</a></span>
              <span>
                        <a class="" role="button" data-toggle="collapse" href="#replyComment-{{$project->id}}" aria-expanded="false"
                           aria-controls="collapseExample">Reply Drop Down</a>
                      </span>

                <div class="collapse" id="replyComment-{{$project->id}}">
                    <form>
                        <div class="form-group">
                            <label for="comment">Reply Drop Down</label>
                            <textarea name="comment" class="form-control" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-default">Reply</button>
                    </form>
                </div>
            </div>
            <!-- comment-meta -->
            <div class="children">
                @foreach($project->children as $project)
                    @include('partials.comment', $project)
                @endforeach
            </div>
        </div>
    </div>
</div>