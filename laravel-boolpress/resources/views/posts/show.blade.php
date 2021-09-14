@extends('layouts.app')

@section('content')
    <div class="container table table-success table-striped">
        <div class="title-show">{{$allPostsTre->title}}</div>
        <div class="abstract-show">{{$allPostsTre->abstract}}</div>
        <div class="author-show">{{$allPostsTre->author}}</div>
    </div>
@endsection
