{{-- @extends('backend.layouts.main') --}}
{{-- @extends('layout') --}}
@extends('layouts.admin')
@section('content')
<div class="content-body">
  <div class="container">
 
<div class="card">
  <div class="card-header">Payment</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">Enrollment No : {{ $payments->enrollment->enroll_no }}</h5>
        <p class="card-text">Paid Date : {{ $payments->paid_date }}</p>
        <p class="card-text">Amount : {{ $payments->amount }}</p>


  </div>
       
    </hr>
  
  </div>
</div>
</div>
</div>
@endsection