<!--
=========================================================
* Argon Dashboard - v1.2.0
=========================================================
* Product Page: https://www.creative-tim.com/product/argon-dashboard


* Copyright  Creative Tim (http://www.creative-tim.com)
* Coded by www.creative-tim.com



=========================================================
* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Babee Hive</title>
  <!-- Favicon -->
  <link rel="icon" href="{{ asset('themes/img/brand/favicon.png') }}" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="{{ asset('themes/vendor/nucleo/css/nucleo.css') }}" type="text/css">
  <link rel="stylesheet" href="{{ asset('themes/vendor/@fortawesome/fontawesome-free/css/all.min.css') }}" type="text/css">
  <!-- Argon CSS -->
  <link rel="stylesheet" href="{{ asset('themes/css/argon.css?v=1.2.0') }}" type="text/css">

  <!-- Core -->
  <script src="{{ asset('themes/vendor/jquery/dist/jquery.min.js') }}"></script>
  <script src="{{ asset('themes/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('themes/vendor/js-cookie/js.cookie.js') }}"></script>
  <script src="{{ asset('themes/vendor/jquery.scrollbar/jquery.scrollbar.min.js') }}"></script>
  <script src="{{ asset('themes/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js') }}"></script>

  @if(isset($formwizard))
  <link href="https://res.cloudinary.com/dxfq3iotg/raw/upload/v1581152092/smartwizard/smart_wizard.min.css" rel="stylesheet" type="text/css" />
  <link href="https://res.cloudinary.com/dxfq3iotg/raw/upload/v1581152091/smartwizard/smart_wizard_theme_arrows.min.css" rel="stylesheet" type="text/css" />
  <script type="text/javascript" src="https://res.cloudinary.com/dxfq3iotg/raw/upload/v1581152197/smartwizard/jquery.smartWizard.min.js"></script>
  @endif
  <link href='assets/css/fullcalendar.css' rel='stylesheet' />
  <link href='assets/css/fullcalendar.print.css' rel='stylesheet' media='print' />
  <script src='assets/js/jquery-1.10.2.js' type="text/javascript"></script>
  <script src='assets/js/jquery-ui.custom.min.js' type="text/javascript"></script>
  <script src='assets/js/fullcalendar.js' type="text/javascript"></script>
  <script>

  	$(document).ready(function() {
  	    var date = new Date();
  		var d = date.getDate();
  		var m = date.getMonth();
  		var y = date.getFullYear();

  		/*  className colors

  		className: default(transparent), important(red), chill(pink), success(green), info(blue)

  		*/


  		/* initialize the external events
  		-----------------------------------------------------------------*/

  		$('#external-events div.external-event').each(function() {

  			// create an Event Object (http://arshaw.com/fullcalendar/docs/event_data/Event_Object/)
  			// it doesn't need to have a start or end
  			var eventObject = {
  				title: $.trim($(this).text()) // use the element's text as the event title
  			};

  			// store the Event Object in the DOM element so we can get to it later
  			$(this).data('eventObject', eventObject);

  			// make the event draggable using jQuery UI
  			$(this).draggable({
  				zIndex: 999,
  				revert: true,      // will cause the event to go back to its
  				revertDuration: 0  //  original position after the drag
  			});

  		});


  		/* initialize the calendar
  		-----------------------------------------------------------------*/

  		var calendar =  $('#calendar').fullCalendar({
  			header: {
  				left: 'title',
  				center: 'agendaDay,agendaWeek,month',
  				right: 'prev,next today'
  			},
  			editable: true,
  			firstDay: 1, //  1(Monday) this can be changed to 0(Sunday) for the USA system
  			selectable: true,
  			defaultView: 'month',

  			axisFormat: 'h:mm',
  			columnFormat: {
                  month: 'ddd',    // Mon
                  week: 'ddd d', // Mon 7
                  day: 'dddd M/d',  // Monday 9/7
                  agendaDay: 'dddd d'
              },
              titleFormat: {
                  month: 'MMMM yyyy', // September 2009
                  week: "MMMM yyyy", // September 2009
                  day: 'MMMM yyyy'                  // Tuesday, Sep 8, 2009
              },
  			allDaySlot: false,
  			selectHelper: true,
  			select: function(start, end, allDay) {
  				var title = prompt('Event Title:');
  				if (title) {
  					calendar.fullCalendar('renderEvent',
  						{
  							title: title,
  							start: start,
  							end: end,
  							allDay: allDay
  						},
  						true // make the event "stick"
  					);
  				}
  				calendar.fullCalendar('unselect');
  			},
  			droppable: true, // this allows things to be dropped onto the calendar !!!
  			drop: function(date, allDay) { // this function is called when something is dropped

  				// retrieve the dropped element's stored Event Object
  				var originalEventObject = $(this).data('eventObject');

  				// we need to copy it, so that multiple events don't have a reference to the same object
  				var copiedEventObject = $.extend({}, originalEventObject);

  				// assign it the date that was reported
  				copiedEventObject.start = date;
  				copiedEventObject.allDay = allDay;

  				// render the event on the calendar
  				// the last `true` argument determines if the event "sticks" (http://arshaw.com/fullcalendar/docs/event_rendering/renderEvent/)
  				$('#calendar').fullCalendar('renderEvent', copiedEventObject, true);

  				// is the "remove after drop" checkbox checked?
  				if ($('#drop-remove').is(':checked')) {
  					// if so, remove the element from the "Draggable Events" list
  					$(this).remove();
  				}

  			},

  			events: [
  				{
  					title: 'All Day Event',
  					start: new Date(y, m, 1)
  				},
  				{
  					id: 999,
  					title: 'Repeating Event',
  					start: new Date(y, m, d-3, 16, 0),
  					allDay: false,
  					className: 'info'
  				},
  				{
  					id: 999,
  					title: 'Repeating Event',
  					start: new Date(y, m, d+4, 16, 0),
  					allDay: false,
  					className: 'info'
  				},
  				{
  					title: 'Meeting',
  					start: new Date(y, m, d, 10, 30),
  					allDay: false,
  					className: 'important'
  				},
  				{
  					title: 'Lunch',
  					start: new Date(y, m, d, 12, 0),
  					end: new Date(y, m, d, 14, 0),
  					allDay: false,
  					className: 'important'
  				},
  				{
  					title: 'Birthday Party',
  					start: new Date(y, m, d+1, 19, 0),
  					end: new Date(y, m, d+1, 22, 30),
  					allDay: false,
  				},
  				{
  					title: 'Click for Google',
  					start: new Date(y, m, 28),
  					end: new Date(y, m, 29),
  					url: 'http://google.com/',
  					className: 'success'
  				}
  			],
  		});


  	});

  </script>
  <style>

  	body {
  		margin-top: 0px;
  		text-align: center;
  		font-size: 14px;
  		font-family: "Helvetica Nueue",Arial,Verdana,sans-serif;
  		background-color: #DDDDDD;
  		}

  	/* #wrap {
  		width: 1100px;
  		margin: 0 auto;
  		} */

  	#external-events {
  		float: left;
  		width: 150px;
  		padding: 0 10px;
  		text-align: left;
  		}

  	#external-events h4 {
  		font-size: 16px;
  		margin-top: 0;
  		padding-top: 1em;
  		}

  	.external-event { /* try to mimick the look of a real event */
  		margin: 10px 0;
  		padding: 2px 4px;
  		background: #3366CC;
  		color: #fff;
  		font-size: .85em;
  		cursor: pointer;
  		}

  	#external-events p {
  		margin: 1.5em 0;
  		font-size: 11px;
  		color: #666;
  		}

  	#external-events p input {
  		margin: 0;
  		vertical-align: middle;
  		}

  	#calendar {
  /* 		float: right; */
          margin: 0 auto;
  		width: 900px;
  		background-color: #FFFFFF;
  		  border-radius: 6px;
          box-shadow: 0 1px 2px #C3C3C3;
  		}

  </style>
</head>

<body>

  <!-- Sidenav -->
  @include('menu.sidenav')
  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->
    <nav class="navbar navbar-top navbar-expand navbar-dark {{ env('BG','bg-primary') }} border-bottom">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav align-items-center  ml-md-auto ">
            <li class="nav-item d-xl-none">
              <!-- Sidenav toggler -->
              <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin" data-target="#sidenav-main">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </div>
            </li>
            <li class="nav-item d-sm-none">
              <a class="nav-link" href="#" data-action="search-show" data-target="#navbar-search-main">
                <i class="ni ni-zoom-split-in"></i>
              </a>
            </li>
          </ul>
          <ul class="navbar-nav align-items-center  ml-auto ml-md-0 ">
            <li class="nav-item dropdown">
              <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="media align-items-center">
                  <div class="media-body  ml-2  d-none d-lg-block">
                    <span class="mb-0 text-sm  font-weight-bold">{{ auth()->user()->name }}</span>
                  </div>
                </div>
              </a>
              <div class="dropdown-menu  dropdown-menu-right ">
                <div class="dropdown-header noti-title">
                  <h6 class="text-overflow m-0">Welcome!</h6>
                </div>
                <a href="{{ url('/profile') }}" class="dropdown-item">
                  <i class="ni ni-single-02"></i>
                  <span>My profile</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#!" class="dropdown-item" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                  <i class="fas fa-sign-out-alt"></i>
                  <span>Signout</span>
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Header -->
    <!-- Header -->
    <div class="header {{ env('BG','bg-primary') }} pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-2 col-4">
              <h6 class="h2 text-white d-inline-block mb-0">Dashboard</h6>
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item"><a href="{{ url('/home') }}">Dashboards</a></li>
                </ol>
              </nav>
            </div>
            <!-- <div class="col-lg-6 col-5 text-right">
              <a href="#" class="btn btn-sm btn-neutral">New</a>
              <a href="#" class="btn btn-sm btn-neutral">Filters</a>
            </div> -->
          </div>
          <!-- Card stats -->
          <div class="row">
            <div class="col-xl-3 col-md-6">
              <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Total Teachers</h5>
                      <span class="h2 font-weight-bold mb-0">{{ $total_teacher }} Teachers</span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">
                        <i class="ni ni-single-02"></i>
                      </div>
                    </div>
                  </div>
                  <!-- <p class="mt-3 mb-0 text-sm">
                    <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                    <span class="text-nowrap">Since last month</span>
                  </p> -->
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6">
              <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Total Students</h5>
                      <span class="h2 font-weight-bold mb-0">{{ $total_students }} Students</span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-orange text-white rounded-circle shadow">
                        <i class="ni ni-single-02"></i>
                      </div>
                    </div>
                  </div>
                  <!-- <p class="mt-3 mb-0 text-sm">
                    <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                    <span class="text-nowrap">Since last month</span>
                  </p> -->
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6">
              <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Total Logbooks</h5>
                      <span class="h2 font-weight-bold mb-0">{{ $total_logbook }} Logbooks</span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-green text-white rounded-circle shadow">
                        <i class="ni ni-collection"></i>
                      </div>
                    </div>
                  </div>
                  <!-- <p class="mt-3 mb-0 text-sm">
                    <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                    <span class="text-nowrap">Since last month</span>
                  </p> -->
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6">
              <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Total Parents</h5>
                      <span class="h2 font-weight-bold mb-0">{{ $total_parent }} Parents</span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-info text-white rounded-circle shadow">
                        <i class="ni ni-single-02"></i>
                      </div>
                    </div>
                  </div>
                  <!-- <p class="mt-3 mb-0 text-sm">
                    <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                    <span class="text-nowrap">Since last month</span>
                  </p> -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="row">
      <div class="col-md-12">
        <div class="card card-stats">
<div class="card-body">
    <div id='calendar'></div>

    <div style='clear:both'></div>
    </div>
    </div>
    </div>
    </div>


      <!-- Footer -->
      <footer class="footer pt-0">
        <div class="row align-items-center justify-content-lg-between">
          <div class="col-lg-6">
            <div class="copyright text-center  text-lg-left  text-muted">
              &copy; 2020 <a href="https://www.creative-tim.com" class="font-weight-bold ml-1" target="_blank">Creative Tim</a>
            </div>
          </div>
          <div class="col-lg-6">
            <ul class="nav nav-footer justify-content-center justify-content-lg-end">
              <li class="nav-item">
                <a href="https://www.creative-tim.com" class="nav-link" target="_blank">Creative Tim</a>
              </li>
              <li class="nav-item">
                <a href="https://www.creative-tim.com/presentation" class="nav-link" target="_blank">About Us</a>
              </li>
              <li class="nav-item">
                <a href="http://blog.creative-tim.com" class="nav-link" target="_blank">Blog</a>
              </li>
              <li class="nav-item">
                <a href="https://github.com/creativetimofficial/argon-dashboard/blob/master/LICENSE.md" class="nav-link" target="_blank">MIT License</a>
              </li>
            </ul>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!-- Argon Scripts -->

  <!-- Optional JS -->
  <script src="{{ asset('themes/vendor/chart.js/dist/Chart.min.js') }}"></script>
  <script src="{{ asset('themes/vendor/chart.js/dist/Chart.extension.js') }}"></script>
  <!-- Argon JS -->
  <script src="{{ asset('themes/js/argon.js?v=1.2.0') }}"></script>
</body>

</html>
