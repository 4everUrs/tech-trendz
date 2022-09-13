<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
        <a class="sidebar-brand brand-logo" href="#"><img src="{{asset('collection/images/logo.png')}}" alt="logo" /></a>
        <a class="sidebar-brand brand-logo-mini" href="#"><img src="{{asset('collection/images/logo-mini.png')}}"
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
                        <span>Finance Manager</span>
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
            <a class="nav-link" href="{{route('finance')}}">
                <span class="menu-icon">
                    <i class="mdi mdi-speedometer"></i>
                </span>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        @endif
        <div class="dropdown-divider"></div>
        <li class="nav-item menu-items">
            <a class="nav-link" data-bs-toggle="collapse" href="#budget" aria-expanded="false"
                aria-controls="budget">
                <span class="menu-icon">
                    <i class="mdi mdi-package-variant"></i>
                </span>
                <span class="menu-title">Budget Management</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="budget">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{ route('request') }}">Requests</a></li>
                </ul>
            </div>
        </li>
        <div class="dropdown-divider"></div>
        <li class="nav-item menu-items">
            <a class="nav-link" data-bs-toggle="collapse" href="#disbursement" aria-expanded="false"
                aria-controls="disbursement">
                <span class="menu-icon">
                    <i class="mdi mdi-package-variant"></i>
                </span>
                <span class="menu-title">Disbursement</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="disbursement">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="#">................</a></li>
                </ul>
            </div>
        </li>
        <div class="dropdown-divider"></div>
        <li class="nav-item menu-items">
            <a class="nav-link" data-bs-toggle="collapse" href="#collection" aria-expanded="false" aria-controls="asset">
                <span class="menu-icon">
                    <i class="mdi mdi-package-variant"></i>
                </span>
                <span class="menu-title">Collection</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="collection">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="#">................</a></li>
                </ul>
            </div>
        </li>
        <div class="dropdown-divider"></div>
        <li class="nav-item menu-items">
            <a class="nav-link" data-bs-toggle="collapse" href="#general" aria-expanded="false" aria-controls="general">
                <span class="menu-icon">
                    <i class="mdi mdi-package-variant"></i>
                </span>
                <span class="menu-title">General Ledger</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="general">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="#">................</a></li>
                </ul>
            </div>
        </li>
        <div class="dropdown-divider"></div>
        <li class="nav-item menu-items">
            <a class="nav-link" data-bs-toggle="collapse" href="#apar" aria-expanded="false" aria-controls="apar">
                <span class="menu-icon">
                    <i class="mdi mdi-package-variant"></i>
                </span>
                <span class="menu-title">AP / AR</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="apar">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="#">................</a></li>
                </ul>
            </div>
        </li>
    </ul>

</nav>