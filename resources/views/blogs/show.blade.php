@extends('home')
@section('title','Xem chi tiết Blog')
@section('content')
    <form>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Content</th>
                <th scope="col">Author</th>
                <th scope="col">Description</th>
                <th scope="col">Created</th>
                <th scope="col">Updated</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{$blog->name}}</td>
                    <td>{{$blog->content}}</td>
                    <td>{{$blog->author}}</td>
                    <td>{{$blog->description}}</td>
                    <td>{{$blog->created_at}}</td>
                    <td>{{$blog->updated_at}}</td>
                    <td><a href="{{route('edit',$blog->id)}}">Edit</a></td>
                </tr>
            </tbody>
        </table>
    </form>
    @endsection