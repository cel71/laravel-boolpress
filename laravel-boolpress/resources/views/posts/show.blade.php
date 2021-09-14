@extends('layouts.app')

@section('content')
    <div class="container table table-success table-striped">
        <div>{{$allPostsTre->title}}</div>
        <div>{{$allPostsTre->abstract}}</div>
        <div>{{$allPostsTre->author}}</div>
    </div>
@endsection
