@extends('layouts.app')
@section('title')
   Posts-Create 
@endsection

@section('Content') 
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
 
<!-- Create Post Form -->
  <form method="POST" action="{{route('post.Store')}}">
    @csrf
        <div class="mb-3">
            <label class="form-label">Title</label>
            <input name="title" type="text" class="form-control" >
        </div>
        <div class="mb-3">
            <label class="form-label">Posted By</label>
            <input name="Posted_By" type="text" class="form-control" >
        </div>
        <button  class="btn btn-success">Submit</button>
 </form>

    
@endsection