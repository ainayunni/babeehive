<nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header  align-items-center">
        <a class="navbar-brand" href="{{ url('/') }}">
          <img src="{{ asset('img/logobanner.png') }}" class="navbar-brand-img" alt="...">
        </a>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
            @hasrole('admin')
            <li class="nav-item">
              <a class="nav-link @if($active == 'dashboard') active @endif" href="{{ url('/dashboard') }}">
                <i class="ni ni-tv-2 text-yellow"></i>
                <span class="nav-link-text">Dashboard</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link @if($active == 'usermgt') active @endif" href="{{ url('/users') }}">
                <i class="ni ni-single-02 text-yellow"></i>
                <span class="nav-link-text">User Management</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link @if($active == 'logbook') active @endif" href="{{ url('/logbook') }}">
                <i class="ni ni-collection text-yellow"></i>
                <span class="nav-link-text">Logbooks Management</span>
              </a>
            </li>
            @endhasrole

            @hasrole('teacher')
            <li class="nav-item">
              <a class="nav-link @if($active == 'panel') active @endif" href="{{ url('/panel') }}">
                <i class="ni ni-app text-yellow"></i>
                <span class="nav-link-text">Dashboard</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link @if($active == 'students') active @endif" href="{{ url('/students') }}">
                <i class="ni ni-circle-08 text-yellow"></i>
                <span class="nav-link-text">Students Record</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link @if($active == 'parents') active @endif" href="{{ url('/parents') }}">
                <i class="ni ni-single-02 text-yellow"></i>
                <span class="nav-link-text">Parents Record</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link @if($active == 'logbook') active @endif" href="{{ url('/logbook') }}">
                <i class="ni ni-collection text-yellow"></i>
                <span class="nav-link-text">Logbooks Report</span>
              </a>
            </li>
            @endhasrole

            @hasrole('parent')
            <li class="nav-item">
              <a class="nav-link @if($active == 'home') active @endif" href="{{ url('/panel') }}">
                <i class="ni ni-single-02 text-yellow"></i>
                <span class="nav-link-text">Dashboard</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link @if($active == 'logbook') active @endif" href="{{ url('/logbook') }}">
                <i class="ni ni-collection text-yellow"></i>
                <span class="nav-link-text">Logbooks Report</span>
              </a>
            </li>
            @endhasrole
          </ul>
          <!-- Divider -->
          <hr class="my-3">
          <!-- Heading -->
          <h6 class="navbar-heading p-0 text-muted">
            <span class="docs-normal">Others</span>
          </h6>
          <!-- Navigation -->
          <ul class="navbar-nav mb-md-3">
            <!-- @hasrole('teacher')
            <li class="nav-item">
              <a class="nav-link @if($active == 'feedback') active @endif" href="{{ url('/feedback') }}">
                <i class="ni ni-single-copy-04 text-blue"></i>
                <span class="nav-link-text">Students Comment</span>
              </a>
            </li>
            @endhasrole -->
            @hasrole('parent')
            <li class="nav-item">
              <a class="nav-link @if($active == 'inbox') active @endif" href="{{ url('/inbox') }}">
                <i class="ni ni-planet text-blue"></i>
                <span class="nav-link-text">Teachers Comment</span>
              </a>
            </li>
            @endhasrole
            <li class="nav-item">
              <a class="nav-link @if($active == 'profile') active @endif" href="{{ url('/profile') }}">
                <i class="ni ni-user-run text-blue"></i>
                <span class="nav-link-text">My Profile</span>
              </a>
            </li>
            <li class="nav-item" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
              <a class="nav-link active-pro" href="#">
                <i class="fas fa-sign-out-alt text-red"></i>
                <span class="nav-link-text">
                      Signout
                </span>
              </a>
            </li>
          </ul>

          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
          </form>
        </div>
      </div>
    </div>
  </nav>
