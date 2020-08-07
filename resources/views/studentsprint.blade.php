@extends('layouts.my')
@section('content')
<table class="table">

  <tbody>
    <tr>
      <td width="20%">

      </td>
      <td class="align-middle"><h2>{{ $logbook->student->name }}</h2></td>
    </tr>
    <tr>
      <td width="20%" class="align-middle">
        <h4>Arrived at</h4>
      </td>
      <td class="align-middle"><h4>{{ $logbook->time }}</h4></td>
    </tr>
    <tr>
      <td width="20%" class="align-middle">
        <h4>Sent by</h4>
      </td>
      <td class="align-middle"><h4>{{ $logbook->sender }}</h4></td>
    </tr>
    <tr>
      <td width="20%" class="align-middle">
        <h4>Additional info</h4>
      </td>
      <td class="align-middle"><h4>{{ $logbook->additional_note }}</h4></td>
    </tr>
  </tbody>
</table>
<div class="tab-pane fade" id="health" role="tabpanel" aria-labelledby="tabs-icons-text-2-tab">
  @if($logbook->is_healthy == 'yes')
    <h1 class="badge badge-success badge-lg display-1">{{ $logbook->student->name }} is healthy</h1>
  @else
    <h1 class="badge badge-danger badge-lg display-1">{{ $logbook->student->name }} is not healthy</h1>
  @endif

  <p class="mt-3">{{ $logbook->student->name }} Brought : </p>
  <p><b>{{ $logbook->equipment }}</b></p>

  <p class="mt-3">Medications Provided : </p>
  <p><b>{{ $logbook->medicine }}</b></p>
</div>
<div class="tab-pane fade" id="meal" role="tabpanel" aria-labelledby="tabs-icons-text-3-tab">
    <table class="table table-bordered mb-2">
      <thead class="table-info">
        <tr>
          <th width="19%">Milk</th>
          <th width="40%">Milk 1</th>
          <th width="40%">Milk 2</th>
        </tr>
      </thead>
      <tbody>
        <tr class="text-center">
          <td width="19%"></td>
          <td width="40%" class="align-middle">
            <h1>{{ $logbook->milk_1 }}</h1>
          </td>
          <td width="40%" class="align-middle">
            <h1>{{ $logbook->milk_2 }}</h1>
          </td>
          <!-- <td width="30%"></td> -->
        </tr>
      </tbody>
    </table>
    <table class="table table-bordered">
      <thead class="table-info">
        <tr>
          <th width="19%">Food</th>
          <th width="27%">Breakfast</th>
          <th width="27%">Lunch</th>
          <th width="27%">Tea-time</th>
        </tr>
      </thead>
      <tbody>
        <tr class="text-center">
          <td></td>
          <td class="align-middle"><h3>{{ $logbook->breakfast }}</h3></td>
          <td class="align-middle"><h3>{{ $logbook->lunch }}</h3></td>
          <td class="align-middle"><h3>{{ $logbook->teatime }}</h3></td>
        </tr>
      </tbody>
    </table>
</div>
@endsection
