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
                            <button type="button" class="btn icon-index" data-toggle="modal" data-target="#staticBackdrop"><i class="bi bi-x-square-fill"></i></button>
                            <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="staticBackdropLabel">Delete Post</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            Sei sicuro di voler eliminare il post ?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <form action="{{ route('posts.destroy', $post) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr> 
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
