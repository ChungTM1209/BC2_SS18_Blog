@extends('home')
@section('title','Tạo Blog mới')
@section('content')

    <form method="post" action="{{route('store')}}">
        @csrf
        <p>Name</p>
        <input type="text" name="name" placeholder="Input name">
        <p>Content</p>
        <input type="text" name="content" placeholder="Input Content">
        <p>Author</p>
        <input type="text" name="author" placeholder="Input Author">
        <p>Description</p>
        <input type="text" name="description" placeholder="Input Description">
        <button type="submit">ADD</button>
    </form>
@endsection