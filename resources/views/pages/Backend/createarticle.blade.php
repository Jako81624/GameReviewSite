@extends('layouts.standard')
@section('content')
    <div class="container nojumbo">
        @include('partials.errors')
        <div class="row">
            <div class="col-md-8">
                <h1>New Article, {{Auth::user()->name}}?</h1>
                {!! Form::open(['action' => ['Admin\ArticleController@store'], 'class' => 'articleForm']) !!}
                    @include('pages.Backend.partials.article_edit')
                </form>
            </div>
            <div class="col-md-4">
                <h1>Helpful Sidebar</h1>
            </div>
        </div>
    </div>
@endsection