@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="titlefirst">POST BLOG:</h1>
        <div class="addPost"><a href="{{ route('posts.create') }}"><i class="bi bi-brush-fill"></i> Aggiungi Post</a></div>
        <table class="table table-success table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Abstract</th>
                    <th scope="col">Author</th>
                    <th scope="col">Select</th>
                    <th scope="col">Modification</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($allPostsDue as $post)
                    <tr>
                        <th scope="row">{{$post->id}}</th>
                        <td class="title-index">{{$post->title}}</td>
                        <td>{{$post->abstract}}</td>
                        <td class="author-index">{{$post->author}}</td>
                        <td class="icon-index"><a href="{{ route('posts.show', $post) }}"><i class="bi bi-book-half"></i></a></td>
                        <td class="icon-index"><a href="{{ route('posts.create', $post) }}"><i class="bi bi-eyeglasses"></i></a></td>
                        <td class="icon-index"><a href=""><i class="bi bi-x-square-fill"></i></a></td>
                    </tr> 
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
