@extends('app')
@section('content')
    <h1>Write a New Article</h1>
    <hr/>
    <form method="POST" action="{{url('articles')}}">
        @include ('articles.form',['buttonText'=>'Create'])
    </form>

    @include('errors.list')

@stop