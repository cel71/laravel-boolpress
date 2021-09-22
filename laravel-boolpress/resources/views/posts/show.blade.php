@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="titlefirst">POST:</h1>
        <div class="button2"><a href="{{ route('posts.index') }}">Torna a Post</a></div>
        <div class="table table-success table-striped">
            <h5 class="name-show">Category: {{$allPostsTre->category->name}}</h5>
            <h2 class="title-show">{{$allPostsTre->title}}</h2>
            <p class="abstract-show">{{$allPostsTre->abstract}}</p>
            <h4 class="author-show">{{$allPostsTre->author}}</h4>
        </div>
    </div>
@endsection
