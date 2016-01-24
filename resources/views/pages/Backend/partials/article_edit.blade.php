<fieldset>

    <!--@TODO ERRORS -->
    <legend>New Article</legend>
    <input name="_articleId" type="hidden" value="0"/>
    <!-- Text input-->
    <div class="form-group col-md-12">
        {!! Form::label('title', 'Title', array('class' => 'col-md-2')) !!}
        <div class="col-md-8">
            {!! Form::text('title', null, ['class' => 'form-control input-md']) !!}
            <span class="help-block">Whats the title of your piece of art?</span>
        </div>
    </div>

    <!-- Text input-->
    <div class="form-group col-md-12">
        {!! Form::label('slug', 'Slug', array('class' => 'col-md-2')) !!}
        <div class="col-md-8">
            {!! Form::text('slug', null, ['class' => 'form-control input-md']) !!}
            <span class="help-block">What shall be the URI for this piece of art</span>
        </div>
    </div>

    <div class="form-group col-md-12">
        {!! Form::label('score', 'Score', array('class' => 'col-md-2')) !!}
        <div class="col-md-8">
            {!! Form::text('score', null, ['class' => 'form-control input-md']) !!}
        </div>
    </div>

    <div class="form-group col-md-12">
        {!! Form::label('score_text_md', 'Score', array('class' => 'col-md-2')) !!}
        <div class="col-md-8">
            {!! Form::textarea('score_text_md', null, ['class' => 'form-control', 'data-provide' => 'markdown']) !!}
        </div>
    </div>
    <!-- Textarea -->
    <div class="form-group col-md-12">
        {!! Form::label('gameplay_md', 'Gameplay', array('class' => 'col-md-2')) !!}
        <div class="col-md-8">
            {!! Form::textarea('gameplay_md', null, ['class' => 'form-control', 'data-provide' => 'markdown']) !!}
        </div>
    </div>

    <!-- Textarea -->
    <div class="form-group col-md-12">
        {!! Form::label('story_md', 'Story', array('class' => 'col-md-2')) !!}
        <div class="col-md-8">
            {!! Form::textarea('story_md', null, ['class' => 'form-control', 'data-provide' => 'markdown']) !!}
        </div>
    </div>

    <!-- Textarea -->
    <div class="form-group col-md-12">
        {!! Form::label('graphics_md', 'Graphics', array('class' => 'col-md-2')) !!}
        <div class="col-md-8">
            {!! Form::textarea('graphics_md', null, ['class' => 'form-control', 'data-provide' => 'markdown']) !!}
        </div>
    </div>

    <!-- Textarea -->
    <div class="form-group col-md-12">
        {!! Form::label('conclusion_md', 'Conclusions', array('class' => 'col-md-2')) !!}
        <div class="col-md-8">
            {!! Form::textarea('conclusion_md', null, ['class' => 'form-control', 'data-provide' => 'markdown']) !!}
        </div>
    </div>

    <!-- Textarea -->
    <div class="form-group col-md-12">
        {!! Form::label('screenshots_md', 'Screenshots', array('class' => 'col-md-2')) !!}
        <div class="col-md-8">
            {!! Form::textarea('screenshots_md', null, ['class' => 'form-control', 'data-provide' => 'markdown']) !!}
        </div>
    </div>


    <div class="form-group col-md-12">
        {!! Form::label('temporary_jumbo_image', 'jumbo image', array('class' => 'col-md-2')) !!}
        <div class="col-md-8">
            {!! Form::text('temporary_jumbo_image', null, ['class' => 'form-control input-md']) !!}
        </div>
    </div>

    <div class="form-group col-md-12">
        {!! Form::label('store', 'store', array('class' => 'col-md-2')) !!}
        <div class="col-md-8">
            {!! Form::text('store', null, ['class' => 'form-control input-md']) !!}
        </div>
    </div>

    <div class="form-group col-md-12">
        {!! Form::label('store_app_id', 'App ID', array('class' => 'col-md-2')) !!}
        <div class="col-md-8">
            {!! Form::text('store_app_id', null, ['class' => 'form-control input-md']) !!}
        </div>
    </div>
    <div class="form-group col-md-12">
        {!! Form::label('subreddit', 'subreddit', array('class' => 'col-md-2')) !!}
        <div class="col-md-8">
            {!! Form::text('subreddit', null, ['class' => 'form-control input-md']) !!}
        </div>
    </div>
    <!-- Button (Double) -->
    <div class="form-group col-md-12" style="margin-bottom: 300px;">
        <label class="col-md-4 control-label" for="save">Save</label>
        <div class="col-md-8">
            {!! Form::submit('Submit!') !!}
        </div>
    </div>

</fieldset>