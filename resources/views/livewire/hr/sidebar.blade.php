<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
        <a class="sidebar-brand brand-logo" href="#"><img src="{{asset('leave/images/logo.png')}}" alt="logo" /></a>
        <a class="sidebar-brand brand-logo-mini" href="#"><img src="{{asset('leave/images/logo-mini.png')}}"
                alt="logo" /></a>
    </div>
    <ul class="nav">
        <li class="nav-item profile">
            <div class="profile-desc">
                <div class="profile-pic">
                    <div class="count-indicator">
                        <img class="img-xs rounded-circle " src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}>
                    <span class=" count bg-success"></span>
                    </div>
                    <div class="profile-name">
                        <h5 class="mb-0 font-weight-normal">{{ Auth::user()->name }}</h5>
                        @if (Auth::user()->role_id == '0')
                        <span>Administrator</span>
                        @else
                        <span>HR Manager</span>
                        @endif
                    </div>
                </div>
            </div>
        </li>
        <li class="nav-item nav-category">
            <span class="nav-link">Navigation</span>
        </li>
            @if (Auth::user()->role_id =='0')
               <li class="nav-item menu-items">
                    <a class="nav-link" href="{{route('dashboard')}}">
                        <span class="menu-icon">
                            <i class="mdi mdi-speedometer"></i>
                        </span>
                        <span class="menu-title">Dashboard</span>
                    </a>
                </li>
           @else
               <li class="nav-item menu-items">
                    <a class="nav-link" href="{{route('hr')}}">
                        <span class="menu-icon">
                            <i class="mdi mdi-speedometer"></i>
                        </span>
                        <span class="menu-title">Dashboard</span>
                    </a>
                </li>
           @endif
        <div class="dropdown-divider"></div>
        <li class="nav-item menu-items">
            <a class="nav-link" data-bs-toggle="collapse" href="#time" aria-expanded="false"
                aria-controls="time">
                <span class="menu-icon">
                    <i class="mdi mdi-package-variant"></i>
                </span>
                <span class="menu-title">Time & Attendance</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="time">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="#">...............</a></li>
                </ul>
            </div>
        </li>
        <div class="dropdown-divider"></div>
        <li class="nav-item menu-items">
            <a class="nav-link" data-bs-toggle="collapse" href="#timesheet" aria-expanded="false"
                aria-controls="timesheet">
                <span class="menu-icon">
                    <i class="mdi mdi-package-variant"></i>
                </span>
                <span class="menu-title">Timesheet <br>Management</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="timesheet">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="#">...............</a></li>
                </ul>
            </div>
        </li>
        <div class="dropdown-divider"></div>
        <li class="nav-item menu-items">
            <a class="nav-link" data-bs-toggle="collapse" href="#leave" aria-expanded="false" aria-controls="asset">
                <span class="menu-icon">
                    <i class="mdi mdi-package-variant"></i>
                </span>
                <span class="menu-title">Leave Management</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="leave">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="#">...............</a></li>
                </ul>
            </div>
        </li>
        <div class="dropdown-divider"></div>
        <li class="nav-item menu-items">
            <a class="nav-link" data-bs-toggle="collapse" href="#claims" aria-expanded="false" aria-controls="claims">
                <span class="menu-icon">
                    <i class="mdi mdi-package-variant"></i>
                </span>
                <span class="menu-title">Claims & <br>Reimbursement</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="claims">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="#">...............</a></li>
                </ul>
            </div>
        </li>
        <div class="dropdown-divider"></div>
        <li class="nav-item menu-items">
            <a class="nav-link" data-bs-toggle="collapse" href="#payroll" aria-expanded="false" aria-controls="payroll">
                <span class="menu-icon">
                    <i class="mdi mdi-package-variant"></i>
                </span>
                <span class="menu-title">Payroll Management</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="payroll">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="#">...............</a></li>
                </ul>
            </div>
        </li>
        <div class="dropdown-divider"></div>
        <li class="nav-item menu-items">
            <a class="nav-link" data-bs-toggle="collapse" href="#core" aria-expanded="false" aria-controls="core">
                <span class="menu-icon">
                    <i class="mdi mdi-package-variant"></i>
                </span>
                <span class="menu-title">Core Human <br> Capital</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="core">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="#">............</a></li>
                </ul>
            </div>
        </li>
        <div class="dropdown-divider"></div>
        <li class="nav-item menu-items">
            <a class="nav-link" data-bs-toggle="collapse" href="#hr" aria-expanded="false" aria-controls="hr">
                <span class="menu-icon">
                    <i class="mdi mdi-package-variant"></i>
                </span>
                <span class="menu-title">HR Anaylytics</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="hr">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="#">............</a></li>
                </ul>
            </div>
        </li>
        <div class="dropdown-divider"></div>
        <li class="nav-item menu-items">
            <a class="nav-link" data-bs-toggle="collapse" href="#compensation" aria-expanded="false" aria-controls="compensation">
                <span class="menu-icon">
                    <i class="mdi mdi-package-variant"></i>
                </span>
                <span class="menu-title">Compensation <br> Planning</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="compensation">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="#">............</a></li>
                </ul>
            </div>
        </li>
        <div class="dropdown-divider"></div>
        <li class="nav-item menu-items">
            <a class="nav-link" data-bs-toggle="collapse" href="#shift" aria-expanded="false" aria-controls="shift">
                <span class="menu-icon">
                    <i class="mdi mdi-package-variant"></i>
                </span>
                <span class="menu-title">Shift & Schedule</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="shift">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="#">................</a></li>
                </ul>
            </div>
        </li>
    </ul>

</nav>