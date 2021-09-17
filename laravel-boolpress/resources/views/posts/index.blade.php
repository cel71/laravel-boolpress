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
                        <td><a href="{{ route('posts.show', $post) }}"><button type="submit" class="btn icon-index"><i class="bi bi-book-half"></i></button></a></td>
                        <td><a href="{{ route('posts.edit', $post) }}"><button type="submit" class="btn icon-index"><i class="bi bi-eyeglasses"></i></button></a></td>
                        <td>
                            <form action="{{ route('posts.destroy', $post) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn icon-index"><i class="bi bi-x-square-fill"></i></button>
                            </form>
                        </td>
                    </tr> 
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
