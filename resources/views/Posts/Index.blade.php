@extends('layouts.app')
@section('title')
  Posts
@endsection
@section('Content')
<a href="{{route('post.create')}}" class="btn btn-success mt-4">create</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Title</th>
      <th scope="col">Posted By</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($posts as $post )
    <tr>
      <th scope="row">{{$post->id}} </th>
      <td>{{$post->title}}</td>
      <td>{{$post->Posted_By}} </td>
      <td>
      <a href="{{route('post.show',$post->id)}}" class="btn btn-primary">view</a>
      <a href="{{route('post.edit',$post->id)}}" class="btn btn-info">update</a>
      <form  style="display: inline" action="{{route('post.destroy',$post->id)}}" method="POST">
        @csrf
        @method('delete')
        <button type="submit" class="btn btn-danger">delete</button>
      </form>
    </td>
    </tr> 
    @endforeach
  </tbody>
</table>
@endsection
      