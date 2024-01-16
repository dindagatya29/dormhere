<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @stack('prepend-style')
    <link rel="stylesheet" href="{{ asset("/assets/css/main/app.css") }}">
    <link rel="stylesheet" href="{{ asset("/assets/css/main/app-dark.css") }}">
    <link rel="shortcut icon" href="{{ asset("/assets/images/logo/favicon.svg") }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset("/assets/images/logo/favicon.png") }}" type="image/png">
    <link rel="stylesheet" href="{{ asset("/assets/css/shared/iconly.css") }}">
    @stack('addon-style')
</head>
<body>
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header position-relative">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="logo">
                            <a href="{{ route('pemesanan') }}"><img src="/assets/images/logo.png" alt="Logo" srcset=""></a>
                        </div>

                    </div>
                </div>
                @if(Auth::user()->role == 'pemilik')
                <div class="sidebar-menu">
                    <ul class="menu">
                        <li class="sidebar-title">Menu</li>

                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-collection-fill"></i>
                                <span>Hi, {{ Auth::user()->name }}</span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item {{ (request()->is('/pemilik')) ? 'active' : ''}}">
                                    <a href="">My Profile</a>
                                </li>
                                <li class="submenu-item {{ (request()->is('/pemilik')) ? 'active' : ''}}">
                                    <a href="">Setting account</a>
                                </li>
                                <li class="submenu-item">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                        </li>

                        <li class="sidebar-item {{ (request()->is('dashboard')) ? 'active' : ''}} ">
                            <a href="{{ route('dashboard')}}" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        <li class="sidebar-item {{ (request()->is('data-kost')) ? 'active' : ''}}">
                            <a href="{{ route('data-kost')}}" class='sidebar-link'>
                                <i class="iconly-boldProfile"></i>
                                <span>Data Kost</span>
                            </a>
                        </li>
                        <li class="sidebar-item {{ (request()->is('data-kamar')) ? 'active' : ''}}">
                            <a href="{{ route('data-kamar')}}" class='sidebar-link'>
                               <i class="bi bi-grid-fill"></i>
                                <span>Data Kamar</span>
                            </a>
                        </li>
                        <li class="sidebar-item {{ (request()->is('transaction')) ? 'active' : ''}}">
                            <a href="{{ route('transaction')}}" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>Transaksi</span>
                            </a>
                        </li>
           
                    </ul>
                    <!-- dashboard -->
                </div>
                @elseif(Auth::user()->role == 'pencari')
                <div class="sidebar-menu">
                    <ul class="menu">
                        <li class="sidebar-title">Menu</li>

                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-collection-fill"></i>
                                {{-- <span>Hi, {{ Auth::user()->name }}</span> --}}
                                <span>Hi , {{ Auth::user()->name }}</span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item {{ (request()->is('/pemilik')) ? 'active' : ''}}">
                                    <a href="/">My Profile</a>
                                </li>
                                <li class="submenu-item {{ (request()->is('/pemilik')) ? 'active' : ''}}">
                                    <a href="/">Setting account</a>
                                </li>
                                <li class="submenu-item">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                        </li>

                        <li class="sidebar-item {{ (request()->is('/home-kost')) ? 'active' : ''}} ">
                            <a href="{{ route('Home-Kost')}}" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        <li class="sidebar-item {{ (request()->is('/riwayat-transaction')) ? 'active' : ''}}">
                            <a href="{{ route('riwayat-Kost')}}" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>Riwayat Transaksi</span>
                            </a>
                        </li>
                        
                    </ul>
                    <!-- dashboard -->
                </div>
                @else
                <div class="sidebar-menu">
                    <ul class="menu">
                        <li class="sidebar-title">Menu</li>
                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-collection-fill"></i>
                                <span>Hi, {{ Auth::user()->name }}</span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item {{ (request()->is('/pemilik')) ? 'active' : ''}}">
                                    <a href="/">My Profile</a>
                                </li>
                                <li class="submenu-item {{ (request()->is('/pemilik')) ? 'active' : ''}}">
                                    <a href="/">Setting account</a>
                                </li>
                                
                                <li class="submenu-item">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item  {{ (request()->is('admin')) ? 'active' : ''}} ">
                            <a href="{{ route('dashboard-admin')}}" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        <li class="sidebar-item {{ (request()->is('admin/profile*')) ? 'active' : ''}}">
                            <a href="{{ route('profile.index')}}" class='sidebar-link'>
                                <i class="iconly-boldProfile"></i>
                                <span>Profile Admin</span>
                            </a>
                        </li>
                        <li class="sidebar-item {{ (request()->is('admin/transaction*')) ? 'active' : ''}}">
                            <a href="{{ route('transaction.index')}}" class='sidebar-link'>
                               <i class="bi bi-grid-fill"></i>
                                <span>Transaction</span>
                            </a>
                        </li>
                        <li class="sidebar-item {{ (request()->is('admin/data-kost*')) ? 'active' : ''}}">
                            <a href="{{ route('datakost.index')}}" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>Data Rumah Kost</span>
                            </a>
                        </li>
                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-collection-fill"></i>
                                <span>Users</span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item {{ (request()->is('pemilik')) ? 'active' : ''}}">
                                    <a href="{{ route('data-pemilik.index')}}">Pemilik Kost</a>
                                </li>
                                <li class="submenu-item {{ (request()->is('pencari')) ? 'active' : ''}}">
                                    <a href="{{ route('data-pencari.index')}}">Pencari Kost</a>
                                </li>
                            </ul>
                        </li>
                     
                    </ul>
                    <!-- dashboard -->
                </div>
                @endif
            </div>
        </div>
@yield('content')
    </div>
    @stack('prepend-script')
    <script src="{{ asset('/assets/js/bootstrap.js') }}"></script>
    <script src="{{ asset('/assets/js/app.js') }}"></script>
    <!-- Need: Apexcharts -->
    <script src="{{ asset('/assets/extensions/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('/assets/js/pages/dashboard.js') }}"></script>
    @stack('addon-script')
</body>