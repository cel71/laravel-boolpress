@extends('layouts.app')

@section('content')
    <div class="container form-group">
        <h1 class="titlefirst">NEW POST:</h1>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="button"><a href="{{ route('posts.index') }}">Torna a Post</a></div>
        <form action="{{ route('posts.store') }}" method="POST">
            @csrf

            <div>
                <label for="title">Title:</label>
                <input class="form-control" type="text" name="title" id="title">
            </div>
            <div>
                <label for="abstract">Abstract:</label>
                <input class="form-control" type="text" name="abstract" id="abstract">
            </div>  
            <div>
                <label for="author">Author:</label>
                <input class="form-control" type="text" name="author" id="author">
            </div>
            <div>
                <button type="submit" class="btn btn-primary">Invia</button>
            </div>     
        </form>    
    </div>
@endsection
