{{-- @extends('backend.layouts.main') --}}
{{-- @extends('layout') --}}
@extends('layouts.admin')
@section('content')
<div class="content-body">
  <div class="container">
 
<div class="card">
  <div class="card-header">Batches</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">Name : {{ $batches->name }}</h5>
        <p class="card-text">Course : {{ $batches->course->name }}</p>
        <p class="card-text">Start Date : {{ $batches->start_date }}</p>
  </div>
       
    </hr>
  
  </div>
</div>
</div>
</div>
@endsection