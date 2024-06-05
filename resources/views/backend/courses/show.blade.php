{{-- @extends('backend.layouts.main') --}}
{{-- @extends('layout') --}}
@extends('layouts.admin')
@section('content')
<div class="content-body">
  <div class="container">
 
<div class="card">
  <div class="card-header">Courses Page</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">Name : {{ $courses->name }}</h5>
        <p class="card-text">Syllabus : {{ $courses->syllabus }}</p>
        <p class="card-text">Duration : {{ $courses->duration() }}</p>
  </div>
       
    </hr>
  
  </div>
</div>
@endsection