    <!-- Top Bar Start -->
    <div class="top-bar">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 col-md-3">
                    <div class="logo">
                    <a href="{{ route('pemesanan') }}">
                            <h1><span>DormHere</span></h1>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Top Bar End -->

    <!-- Nav Bar Start -->
    <div class="navbar navbar-expand-lg bg-white navbar-white">
        <div class="container">
            <nav class="navbar navbar-expand-lg bg-white navbar-white">
                    <div class="ml-auto">
                        <ul class="navbar-nav d-lg-flex">
                            <li class="nav-item dropdown">
                                <a href="" class="nav-link" id="navbarDropdown" role="button" data-toggle="dropdown">
                                    Hi, {{Auth::user()->name}}
                                    @if (Auth::check() && Auth::user()->foto)
    <img src="{{ asset('storage/' . Auth::user()->foto) }}" alt="Profile Picture" class="rounded-circle m-0 p-0 profile-picture" width="40px" max-height="50px">
@else
    <img src="{{ asset('images/default-profile.jpg') }}" alt="Default Profile Picture" class="rounded-circle m-0 p-0 profile-picture" height="50px">
@endif

                                    {{-- <img src="{{ Auth::user()->foto }}" alt="" > --}}
                                </a>
                                <div class="dropdown-menu bg-dark">

                                    @if(Auth::user()->role == 'admin')
                                        <a href="{{ route('dashboard-admin') }}" class="dropdown-item text-danger">Dashboard</a>
                                    @endif
                                    @if(Auth::user()->role == 'pemilik')
                                        <a href="{{ route('dashboard') }}" class="dropdown-item text-danger">Dashboard</a>
                                    @endif
                                    @if(Auth::user()->role == 'pencari')
                                        <a href="{{ route('Home-Kost') }}" class="dropdown-item text-danger">Dashboard</a>
                                    @endif
                                    
                                    <div class="dropdown-divider"></div>

                                    <a class="dropdown-item text-danger" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                  document.getElementById('logout-form').submit();">
                                     {{ __('Logout') }}
                                 </a>

                                 <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                     @csrf
                                 </form>
                                </div>
                            </li>
                        </ul>
                    </div>

                </div>
            </nav>
        </div>
    </div>
    <!-- Nav Bar End -->
