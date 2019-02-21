@extends('home')
@section('title','Edit Blog')
@section('content')

    <form method="post" action="{{route('update',$blog->id)}}">
        @csrf
        <p>Name</p>
        <input type="text" name="name" value="{{$blog->name}}">
        <p>Content</p>
        <input type="text" name="content" value="{{$blog->content}}">
        <p>Author</p>
        <input type="text" name="author" value="{{$blog->author}}">
        <p>Description</p>
        <input type="text" name="description" value="{{$blog->description}}">
        <button type="submit">EDIT</button>
    </form>
@endsection