@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="titlefirst">POST:</h1>
        <div class="button"><a href="{{ route('posts.index') }}">Torna a Post</a></div>
        <div class="table table-success table-striped">
            <div class="title-show">{{$allPostsTre->title}}</div>
            <div class="abstract-show">{{$allPostsTre->abstract}}</div>
            <div class="author-show">{{$allPostsTre->author}}</div>
        </div>
    </div>
@endsection
