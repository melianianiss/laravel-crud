@extends('layouts.app')
    @section('title')
     Posts-Show
    @endsection
     @section('Content')
     <div class="card">
        <h5 class="card-header">Post Info</h5>
        <div class="card-body">
          <h5 class="card-title">Title: {{$posts->title}} </h5>
          <h5 class="card-title">Posted By: {{$posts->Posted_By}}</h5>

        </div>
      </div>
     @endsection

