@extends('layouts.app')

@section('content')
    <div class="container">
        <table class="table table-success table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Abstract</th>
                    <th scope="col">Author</th>
                    <th scope="col">Select</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($allPostsDue as $post)
                    <tr>
                        <th scope="row">{{$post->id}}</th>
                        <td class="title-index">{{$post->title}}</td>
                        <td>{{$post->abstract}}</td>
                        <td class="author-index">{{$post->author}}</td>
                        <td><a href="{{ route('posts.show', $post) }}"><i class="bi bi-book-half"></i></a></td>
                    </tr> 
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
