@extends('app')
@section('content')
    <h1>Edit: {!! $article->title !!}</h1>
    <hr/>
    <form method="POST" action="{{url('articles')}}">
        @include ('articles.form',['buttonText'=>'Update'])
    </form>
    @include('errors.list')
@stop
