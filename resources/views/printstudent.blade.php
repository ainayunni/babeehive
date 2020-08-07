@extends('layouts.my')
@section('content')
<center>
<br><br>
<a href="{{ url('/prnpriview') }}" class="btnprn btn">Print Preview</a></center>
<script type="text/javascript">
$(document).ready(function(){
$('.btnprn').printPage();
});
</script>
<center>
<h1>Logbook Report</h1>
<table class="table" >
  <tr>
    <th>Teacher ID</th> <br>
    <th>Student ID</th>
    <th>Student Name</th>
    <th>Time</th>
    <th>Date</th>
    <th>Sender</th>
    <th>Health Condition</th>
    <th>Illness</th>
    <th>Stuff</th>
    <th>Medicine</th>
    <th>Milk 1</th>
    <th>Milk 2</th>
    <th>Breakfast</th>
    <th>Lunch</th>
    <th>Tea Time</th>
    <th>Circle Time</th>
    <th>Outdoor Activities</th>
    <th>Diapers</th>
    <th>Diapers Info</th>
    <th>Dental Care</th>
    <th>Hygienic Care</th>
    <th>Sleeping Time</th>
    <th>Remarks</th>
  </tr>
  @foreach($logbooks as $logbook)
  <tr>
    <td>{{$logbook->teacher_id}}</td>
    <td>{{$logbook->id}}</td>
    <td>{{$logbook->student->name}}</td>
    <td>{{$logbook->time}}</td>
    <td>{{$logbook->date}}</td>
    <td>{{$logbook->sender}}</td>
    <td>{{$logbook->is_healthy}}</td>
    <td>{{$logbook->illness}}</td>
    <td>{{$logbook->equipment}}</td>
    <td>{{$logbook->medicine}}</td>
    <td>{{$logbook->milk_1}}</td>
    <td>{{$logbook->milk_2}}</td>
    <td>{{$logbook->breakfast}}</td>
    <td>{{$logbook->lunch}}</td>
    <td>{{$logbook->teatime}}</td>
    <td>{{$logbook->circle_time}}</td>
    <td>{{$logbook->outdoor}}</td>
    <td>{{$logbook->dypers}}</td>
    <td>{{$logbook->dypers_info}}</td>
    <td>{{$logbook->brush_teeth}}</td>
    <td>{{$logbook->bath}}</td>
    <td>{{$logbook->sleep}}</td>
    <td>{{$logbook->additional_note}}</td>
  </tr>
@endforeach
</center>
@endsection
