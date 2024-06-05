{{-- @extends('backend.layouts.main') --}}
{{-- @extends('layout') --}}
@extends('layouts.admin')
@section('content')
<div class="content-body">
  <div class="container">
 
<div class="card">
  <div class="card-header">Teachers Page</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">Name : {{ $teachers->name }}</h5>
        <p class="card-text">Address : {{ $teachers->address }}</p>
        <p class="card-text">Mobile : {{ $teachers->mobile }}</p>
  </div>
       
    </hr>
  
  </div>
</div>
</div>
</div>
@endsection