{{-- @extends('backend.layouts.main') --}}
{{-- @extends('layout') --}}
@extends('layouts.admin')
@section('content')

<div class="content-body">
  <div class="container">
 
<div class="card">
  <div class="card-header">Payments</div>
  <div class="card-body">
      
    <label>Enrollment No</label></br>
      <form action="{{ url('payments') }}" method="post">
        {!! csrf_field() !!}
        
        <select name="enrollment_id" id="enrollment_id" class="form-control">
          @foreach($enrollments as $id => $enroll_no)
              <option value="{{ $id }}">{{ $enroll_no }}</option>
          @endforeach
      </select>
      
      

        <label>Paid Date</label></br>
        {{-- <input type="text" name="course_id" id="course_id" class="form-control"></br>
         --}}
         <input type="text" name="paid_date" id="paid_date" class="form-control"></br>

        <label>Amount</label></br>
        <input type="text" name="amount" id="amount" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
</div>
</div>
 
@stop