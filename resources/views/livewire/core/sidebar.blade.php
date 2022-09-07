<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
        <a class="sidebar-brand brand-logo" href="#"><img src="{{asset('newhire/images/logo.png')}}" alt="logo" /></a>
        <a class="sidebar-brand brand-logo-mini" href="#"><img src="{{asset('newhire/images/logo-mini.png')}}"
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
                        <span>Core Manager</span>
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
            <a class="nav-link" href="{{route('core')}}">
                <span class="menu-icon">
                    <i class="mdi mdi-speedometer"></i>
                </span>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        @endif
        <div class="dropdown-divider"></div>
        <li class="nav-item menu-items">
            <a class="nav-link" data-bs-toggle="collapse" href="#recruitment" aria-expanded="false"
                aria-controls="recruitment">
                <span class="menu-icon">
                    <i class="mdi mdi-package-variant"></i>
                </span>
                <span class="menu-title">Recruitment</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="recruitment">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="#">................</a></li>
                </ul>
            </div>
        </li>
        <div class="dropdown-divider"></div>
        <li class="nav-item menu-items">
            <a class="nav-link" data-bs-toggle="collapse" href="#applicant" aria-expanded="false"
                aria-controls="applicant">
                <span class="menu-icon">
                    <i class="mdi mdi-package-variant"></i>
                </span>
                <span class="menu-title">Applicant Mgmt.</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="applicant">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="#">................</a></li>
                </ul>
            </div>
        </li>
        <div class="dropdown-divider"></div>
        <li class="nav-item menu-items">
            <a class="nav-link" data-bs-toggle="collapse" href="#newhire" aria-expanded="false" aria-controls="asset">
                <span class="menu-icon">
                    <i class="mdi mdi-package-variant"></i>
                </span>
                <span class="menu-title">New Hire <br>on Board</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="newhire">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="#">................</a></li>
                </ul>
            </div>
        </li>
        <div class="dropdown-divider"></div>
        <li class="nav-item menu-items">
            <a class="nav-link" data-bs-toggle="collapse" href="#employee" aria-expanded="false" aria-controls="employee">
                <span class="menu-icon">
                    <i class="mdi mdi-package-variant"></i>
                </span>
                <span class="menu-title">Employee <br>Management</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="employee">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="#">................</a></li>
                </ul>
            </div>
        </li>
        <div class="dropdown-divider"></div>
        <li class="nav-item menu-items">
            <a class="nav-link" data-bs-toggle="collapse" href="#report" aria-expanded="false" aria-controls="report">
                <span class="menu-icon">
                    <i class="mdi mdi-package-variant"></i>
                </span>
                <span class="menu-title">Recruiting Analytics <br>& Reporting</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="report">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="#">................</a></li>
                </ul>
            </div>
        </li>
        <div class="dropdown-divider"></div>
        <li class="nav-item menu-items">
            <a class="nav-link" data-bs-toggle="collapse" href="#positionjob" aria-expanded="false" aria-controls="positionjob">
                <span class="menu-icon">
                    <i class="mdi mdi-package-variant"></i>
                </span>
                <span class="menu-title">Position Job <br> Management</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="positionjob">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="#">................</a></li>
                </ul>
            </div>
        </li>
        <div class="dropdown-divider"></div>
        <li class="nav-item menu-items">
            <a class="nav-link" data-bs-toggle="collapse" href="#payroll" aria-expanded="false" aria-controls="payroll">
                <span class="menu-icon">
                    <i class="mdi mdi-package-variant"></i>
                </span>
                <span class="menu-title">Payroll & Payment <br> Management</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="payroll">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="#">................</a></li>
                </ul>
            </div>
        </li>
        <div class="dropdown-divider"></div>
        <li class="nav-item menu-items">
            <a class="nav-link" data-bs-toggle="collapse" href="#placement" aria-expanded="false" aria-controls="placement">
                <span class="menu-icon">
                    <i class="mdi mdi-package-variant"></i>
                </span>
                <span class="menu-title">Placement Mgmt.</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="placement">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="#">................</a></li>
                </ul>
            </div>
        </li>
        <div class="dropdown-divider"></div>
        <li class="nav-item menu-items">
            <a class="nav-link" data-bs-toggle="collapse" href="#client" aria-expanded="false" aria-controls="client">
                <span class="menu-icon">
                    <i class="mdi mdi-package-variant"></i>
                </span>
                <span class="menu-title">Client Mgmt.</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="client">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="#">................</a></li>
                </ul>
            </div>
        </li>
        <div class="dropdown-divider"></div>
        <li class="nav-item menu-items">
            <a class="nav-link" data-bs-toggle="collapse" href="#contract" aria-expanded="false" aria-controls="contract">
                <span class="menu-icon">
                    <i class="mdi mdi-package-variant"></i>
                </span>
                <span class="menu-title">Client Agreement <br>& Contract Mgmt.</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="contract">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="#">................</a></li>
                </ul>
            </div>
        </li>
    </ul>

</nav>