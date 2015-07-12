@extends('app')
@section('content')
    <h1>Write a New Article</h1>
    <hr/>
    <form method="POST" action="{{url('articles')}}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="title" class="form-control" />
        </div>
        <div class="form-group">
            <label>Body</label>
            <textarea name="body" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <button class="btn btn-primary">Save</button>
        </div>
    </form>

    {{var_dump($errors)}}
@stop