@extends('layouts.my')
@section('content')

<!DOCTYPE html>
<html lang="en">
  <style>
  table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 5px;
  text-align: left;
}
#logo {
  text-align: center;
  margin-bottom: 10px;
}

#logo img {
  width: 50px;
  size: 100px;
}
h1 {
  border-top: 1px solid  #5D6975;
  border-bottom: 1px solid  #5D6975;
  color: #5D6975;
  font-size: 1.4em;
  line-height: 1.4em;
  font-weight: normal;
  text-align: center;
  margin: 0 0 20px 0;
  background: url(dimension.png);
}
h2 {
  color: #5D6975;
  font-size: 1em;
  font-weight: normal;
  text-align: center;
  margin: 0 0 30px 0;
}
footer {
  color: #5D6975;
  width: 100%;
  height: 30px;
  position: absolute;
  bottom: 0;
  border-top: 1px solid #C1CED9;
  padding: 8px 0;
  text-align: center;
}
  </style>
  <body>
    <header class="clearfix">
      <div id="logo">
        <img src="img/logobanner.png">
      </div>
      <h1>Logbook Report - {{ $logbook->student->name }}</h1>
      <h2>Report Date: {{ $logbook->date }}</h2>
      <div id="project">
        <div><span>{{ $logbook->student->name }} is arrived at: </span> {{ $logbook->time }}</div>
        <div><span>{{ $logbook->student->name }} came with: </span> {{ $logbook->sender }}</div>
        <div><span>Additional Notes: </span>{{ $logbook->additional_note }}</div>
        <div class="tab-pane fade" id="health" role="tabpanel" aria-labelledby="tabs-icons-text-2-tab"><span>
          @if($logbook->is_healthy == 'yes')
            <h1 class="badge badge-success badge-lg display-1">{{ $logbook->student->name }} is healthy</h1>
          @else
            <h1 class="badge badge-danger badge-lg display-1">{{ $logbook->student->name }} is not healthy</h1>
          @endif
        </div>
    </header>

      <main>
        <table style="width:100%">
          <thead class="table-info">
            <tr>
              <th class="service" style="text-align: center">ROUTINE</th>
              <th class="desc" style="text-align: center">DESCRIPTION</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td style="font-size: 12px;">List of Items to Bring</td>
              <td style="font-size: 12px;">{{ $logbook->equipment }}</td>
            </tr>
            <tr>
              <td style="font-size: 12px;">List of Medications Brought</td>
              <td style="font-size: 12px;">{{ $logbook->medicine }}</td>
            </tr>
            <tr>
              <td rowspan="2" style="font-size: 12px;">Milk Schedule</td>
              <td style="font-size: 12px;">First Milk: {{ $logbook->milk_1 }}</td>
            </tr>
            <tr>
            <td style="font-size: 12px;">Second Milk: {{ $logbook->milk_2 }}</td>
            </tr>
            <tr>
              <td style="font-size: 12px;">Breakfast</td>
              <td style="font-size: 12px;">{{ $logbook->breakfast }}</td>
            </tr>
            <tr>
              <td style="font-size: 12px;">Lunch</td>
              <td style="font-size: 12px;">{{ $logbook->lunch }}</td>
            </tr>
            <tr>
              <td style="font-size: 12px;">Snack</td>
              <td style="font-size: 12px;">{{ $logbook->teatime }}</td>
            </tr>
            <tr>
              <td style="font-size: 12px;">Outdoor Activity</td>
              <td style="font-size: 12px;">{{ $logbook->outdoor }}</td>
            </tr>
            <tr>
              <td style="font-size: 12px;">Circle Time</td>
              <td style="font-size: 12px;">{{ $logbook->circle_time }}</td>
            </tr>
          </tbody>
</table>
<br>
<table style="width:100%">
          <thead class="table-info">
            <tr>
              <th style="text-align: center">ROUTINE</th>
              <th style="text-align: center">TIME TAKEN</th>
              <th style="text-align: center">REMARKS</th>
            </tr>
          </thead>
          <tbody>
            <tr class="text-left">
              <td style="font-size: 12px;">Diapers Change</td>
              <td class="align-middle">
                @if(in_array('9-12',json_decode($logbook->dypers)))
                <div class="checkbox">
                    <label style="font-size: 12px;">
                      <input type="checkbox" checked disabled> 9 am - 12 noon
                    </label>
                </div>
                @else
                <div class="checkbox">
                    <label style="font-size: 12px;">
                      <input type="checkbox" disabled> 9 am - 12 noon
                    </label>
                </div>
                @endif

                @if(in_array('12-3',json_decode($logbook->dypers)))
                <div class="checkbox">
                    <label style="font-size: 12px;">
                      <input type="checkbox" checked disabled> 12 noon - 3 pm
                    </label>
                </div>
                @else
                <div class="checkbox">
                    <label style="font-size: 12px;">
                      <input type="checkbox" disabled> 12 noon - 3 pm
                    </label>
                </div>
                @endif

                @if(in_array('3-6',json_decode($logbook->dypers)))
                <div class="checkbox">
                    <label style="font-size: 12px;">
                      <input type="checkbox" checked disabled> 3 pm - 6pm
                    </label>
                </div>
                @else
                <div class="checkbox">
                    <label style="font-size: 12px;">
                      <input type="checkbox" disabled> 3 pm - 6pm
                    </label>
                </div>
                @endif
              </td>
              <td style="font-size: 12px;"><b>Diapers Info:</b><br>{{ $logbook->dypers_info }}</td>
            </tr>

            <tr class="text-left">
              <td style="font-size: 12px;">Dental Care</td>
              <td class="align-middle">
                @if(in_array('morning',json_decode($logbook->brush_teeth)))
                <div class="checkbox">
                    <label style="font-size: 12px;">
                      <input type="checkbox" checked disabled> Morning
                    </label>
                </div>
                @else
                <div class="checkbox">
                    <label style="font-size: 12px;">
                      <input type="checkbox" disabled> Morning
                    </label>
                </div>
                @endif

                @if(in_array('noon',json_decode($logbook->brush_teeth)))
                <div class="checkbox">
                    <label style="font-size: 12px;">
                      <input type="checkbox" checked disabled> Noon
                    </label>
                </div>
                @else
                <div class="checkbox">
                    <label style="font-size: 12px;">
                      <input type="checkbox" disabled> Noon
                    </label>
                </div>
                @endif

                @if(in_array('evening',json_decode($logbook->brush_teeth)))
                <div class="checkbox">
                    <label style="font-size: 12px;">
                      <input type="checkbox" checked disabled> Evening
                    </label>
                </div>
                @else
                <div class="checkbox">
                    <label style="font-size: 12px;">
                      <input type="checkbox" disabled> Evening
                    </label>
                </div>
                @endif
              </td>
              <td style="font-size: 12px;">No Remarks Available</td>
            </tr>
            <tr class="text-left">
              <td style="font-size: 12px;">Hygienic Care</td>
              <td class="align-middle">
                @if(in_array('morning',json_decode($logbook->bath)))
                <div class="checkbox">
                    <label style="font-size: 12px;">
                      <input type="checkbox" checked disabled> Morning
                    </label>
                </div>
                @else
                <div class="checkbox">
                    <label style="font-size: 12px;">
                      <input type="checkbox" disabled> Morning
                    </label>
                </div>
                @endif

                @if(in_array('noon',json_decode($logbook->bath)))
                <div class="checkbox">
                    <label style="font-size: 12px;">
                      <input type="checkbox" checked disabled> Noon
                    </label>
                </div>
                @else
                <div class="checkbox">
                    <label style="font-size: 12px;">
                      <input type="checkbox" disabled> Noon
                    </label>
                </div>
                @endif

                @if(in_array('evening',json_decode($logbook->bath)))
                <div class="checkbox">
                    <label style="font-size: 12px;">
                      <input type="checkbox" checked disabled> Evening
                    </label>
                </div>
                @else
                <div class="checkbox">
                    <label style="font-size: 12px;">
                      <input type="checkbox" disabled> Evening
                    </label>
                </div>
                @endif
              </td>
              <td style="font-size: 12px;">No Remarks Available</td>
            </tr>
            <tr class="text-left">
              <td style="font-size: 12px;">Sleep Routine</td>
              <td class="align-middle">
                @if(in_array('9-12',json_decode($logbook->sleep)))
                <div class="checkbox">
                    <label style="font-size: 12px;">
                      <input type="checkbox" checked disabled> 9 am - 12 noon
                    </label>
                </div>
                @else
                <div class="checkbox">
                    <label style="font-size: 12px;">
                      <input type="checkbox" disabled> 9 am - 12 noon
                    </label>
                </div>
                @endif

                @if(in_array('12-3',json_decode($logbook->sleep)))
                <div class="checkbox">
                    <label style="font-size: 12px;">
                      <input type="checkbox" checked disabled> 12 noon - 3 pm
                    </label>
                </div>
                @else
                <div class="checkbox">
                    <label style="font-size: 12px;">
                      <input type="checkbox" disabled> 12 noon - 3 pm
                    </label>
                </div>
                @endif

                @if(in_array('3-6',json_decode($logbook->sleep)))
                <div class="checkbox">
                    <label style="font-size: 12px;">
                      <input type="checkbox" checked disabled> 3 pm - 6pm
                    </label>
                </div>
                @else
                <div class="checkbox">
                    <label style="font-size: 12px;">
                      <input type="checkbox" disabled> 3 pm - 6pm
                    </label>
                </div>
                @endif
              </td>
              <td style="font-size: 12px;">No Remarks Available</td>
            </tr>
          </tbody>
        </table>
      </main>
      <footer>
        Report was created on a computer and is valid without the signature.
      </footer>


@endsection
