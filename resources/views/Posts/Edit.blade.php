@extends('layouts.app')
@section('title')
    
@endsection
@section('Content')
<form method="POST" action="{{route('post.Update',$post->id)}}">
    @csrf
    @method('PUT')
        <div class="mb-3">
            <label class="form-label">Title</label>
            <input name="title" value={{$post->title}} type="text" class="form-control" >
        </div>
        <div class="mb-3">
            <label class="form-label">Posted By</label>
            <input name="Posted_By" value="{{$post->Posted_By}}" type="text" class="form-control" >
        </div>
        <button  class="btn btn-primary">Update</button>
 </form>
@endsection