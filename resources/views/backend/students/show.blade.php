{{-- @extends('backend.layouts.main') --}}
{{-- @extends('layout') --}}
@extends('layouts.admin')
@section('content')
<div class="content-body">
  <div class="container">
  
  <div class="card">
    <div class="card-header">Students Page</div>
    <div class="card-body">
    
  
          <div class="card-body">
          <h5 class="card-title">Name : {{ $students->name }}</h5>
          <p class="card-text">Address : {{ $students->address }}</p>
          <p class="card-text">Mobile : {{ $students->mobile }}</p>
    </div>
        
      </hr>
    
    </div>
  </div>
  </div>
</div>
@endsection