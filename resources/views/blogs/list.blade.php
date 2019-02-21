@extends('home')
@section('content')
<h1>Danh sách blogs</h1>
<form>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">STT</th>
            <th scope="col">Name</th>
            <th scope="col">Content</th>
            <th scope="col">Author</th>
            <th scope="col">Created</th>
            <th scope="col">Detail</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
        </tr>
        </thead>
        <tbody>
@foreach($blogs as $key => $blog)
    <tr>
        <th scope="row">{{++$key}}</th>
        <td>{{$blog->name}}</td>
        <td>{{$blog->content}}</td>
        <td>{{$blog->author}}</td>
        <td>{{$blog->created_at}}</td>
        <td><a href="{{route('show',$blog->id)}}">Xem</a></td>
        <td><a href="{{route('edit',$blog->id)}}">Sua</a></td>
        <td><a href="{{route('delete',$blog->id)}}">Xoa</a></td>
    </tr>
    @endforeach
<a href="{{route('create')}}">ADD</a>

        </tbody>
    </table>
</form>


    @endsection