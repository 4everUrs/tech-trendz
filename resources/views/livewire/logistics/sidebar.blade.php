
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
            <a class="sidebar-brand brand-logo" href="#"><img src="{{asset('assets/images/logo.png')}}" alt="logo" /></a>
            <a class="sidebar-brand brand-logo-mini" href="#"><img src="{{asset('assets/images/logo-mini.png')}}"
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
                                <span>Logistics Manager</span>
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
                    <a class="nav-link" href="{{route('logistics')}}">
                        <span class="menu-icon">
                            <i class="mdi mdi-speedometer"></i>
                        </span>
                        <span class="menu-title">Dashboard</span>
                    </a>
                </li>
           @endif
            <div class="dropdown-divider"></div>
            <li class="nav-item menu-items">
                <a class="nav-link" data-bs-toggle="collapse" href="#procurement" aria-expanded="false"
                    aria-controls="procurement">
                    <span class="menu-icon">
                        <i class="mdi mdi-package-variant"></i>
                    </span>
                    <span class="menu-title">Procurement</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="procurement">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link" href="#">Request Lists</a></li>
                        <li class="nav-item"> <a class="nav-link" href="#">Suppliers Lists</a></li>
                        <li class="nav-item"> <a class="nav-link" href="#">Purchase Order</a></li>
                        <li class="nav-item"> <a class="nav-link" href="#">Procured Item Lists</a></li>
                        <li class="nav-item"> <a class="nav-link" href="#">Reports</a></li>
                        <li class="nav-item"> <a class="nav-link" href="#">Send Request</a></li>
                    </ul>
                </div>
            </li>
            <div class="dropdown-divider"></div>
            <li class="nav-item menu-items">
                <a class="nav-link" data-bs-toggle="collapse" href="#warehouse" aria-expanded="false"
                    aria-controls="warehouse">
                    <span class="menu-icon">
                        <i class="mdi mdi-package-variant"></i>
                    </span>
                    <span class="menu-title">Warehousing</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="warehouse">
                    <ul class="nav flex-column sub-menu">
                        
                        <li class="nav-item menu-items">
                            <a class="nav-link" data-bs-toggle="collapse" href="#test" aria-expanded="false" aria-controls="test">
                                <span class="menu-icon">
                                    <i class="mdi mdi-package-variant"></i>
                                </span>
                                <span class="menu-title">Procurement</span>
                                <i class="menu-arrow"></i>
                            </a>
                            <div class="collapse" id="test">
                                <ul class="nav flex-column sub-menu">
                                    <li class="nav-item"> <a class="nav-link" href="#">Request Lists</a></li>
                                    <li class="nav-item"> <a class="nav-link" href="#">Suppliers Lists</a></li>
                                    <li class="nav-item"> <a class="nav-link" href="#">Purchase Order</a></li>
                                    <li class="nav-item"> <a class="nav-link" href="#">Procured Item Lists</a></li>
                                    <li class="nav-item"> <a class="nav-link" href="#">Reports</a></li>
                                    <li class="nav-item"> <a class="nav-link" href="#">Send Request</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </li>
            <div class="dropdown-divider"></div>
            <li class="nav-item menu-items">
                <a class="nav-link" data-bs-toggle="collapse" href="#assets" aria-expanded="false" aria-controls="asset">
                    <span class="menu-icon">
                        <i class="mdi mdi-package-variant"></i>
                    </span>
                    <span class="menu-title">Assets Management</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="assets">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link" href="#">Request Lists</a></li>
                    </ul>
                </div>
            </li>
            <div class="dropdown-divider"></div>
            <li class="nav-item menu-items">
                <a class="nav-link" data-bs-toggle="collapse" href="#project" aria-expanded="false" aria-controls="project">
                    <span class="menu-icon">
                        <i class="mdi mdi-package-variant"></i>
                    </span>
                    <span class="menu-title">Project Management</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="project">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link" href="#">Request Lists</a></li>
                    </ul>
                </div>
            </li>
            <div class="dropdown-divider"></div>
            <li class="nav-item menu-items">
                <a class="nav-link" data-bs-toggle="collapse" href="#fleet" aria-expanded="false" aria-controls="fleet">
                    <span class="menu-icon">
                        <i class="mdi mdi-package-variant"></i>
                    </span>
                    <span class="menu-title">Fleet Management</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="fleet">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link" href="#">Request Lists</a></li>
                    </ul>
                </div>
            </li>
        </ul>
    
    </nav>
