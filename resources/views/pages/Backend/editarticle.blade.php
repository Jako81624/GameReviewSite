@extends('layouts.standard')
@section('content')
    <div class="container nojumbo">
        @include('partials.errors')
        <div class="row">
            <div class="col-md-8">
                <h1>Editing an Article, {{Auth::user()->name}}?</h1>
                {!! Form::model($article, ['method' => 'PATCH', 'action' => ['Admin\ArticleController@update', $article->id], 'class' => 'articleForm']) !!}
                    @include('pages.Backend.partials.article_edit')
                </form>
            </div>
            <div class="col-md-4">
                <h1>Helpful Sidebar</h1>
            </div>
        </div>
    </div>
@endsection