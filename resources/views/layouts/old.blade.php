<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" :class="{ 'theme-dark': dark }" x-data="data()">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title' ?? 'Adonis and Abbey publishing')</title>

    {{-- css  --}}

    <link rel="stylesheet" href="/assets/css/style.css">
    {{-- css  --}}
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <script defer src="https://unpkg.com/alpinejs@3.4.2/dist/cdn.min.js"></script>

    <!-- Scripts -->
    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}
    <style>
        [x-cloak] {
            display: none !important;
        }

        .poppins {
            font-family: 'Poppins', sans-serif !important;
            font-weight: 400 !important;
        }

        .poppins-bold {
            font-family: 'Poppins', sans-serif !important;
            font-weight: 700 !important;
        }

        .poppins-extrabold {
            font-family: 'Poppins', sans-serif !important;
            font-weight: 800 !important;
        }

        .poppins-light,
        body {
            font-family: 'Poppins', sans-serif !important;
            font-weight: 300 !important;
        }

        .poppins-normal {
            font-family: 'Poppins', sans-serif !important;
            font-weight: 400 !important;
        }

        .poppins-medium {
            font-family: 'Poppins', sans-serif !important;
            font-weight: 500 !important;
        }

        .poppins-semibold {
            font-family: 'Poppins', sans-serif !important;
            font-weight: 600 !important;
        }

        .poppins-black {
            font-family: 'Poppins', sans-serif !important;
            font-weight: 900 !important;
        }

        .main {
            width: calc(100% - 240px);
        }

        .nav-active {
            .header-blue {
                background: #059668;
            }
        }

        color: #fff;
        background-color: #059668;
        /* .half-margin {
      margin-top: -30px !important;
    } */
    </style>

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">
    @livewireStyles
</head>

<body>
    <!-- [ Pre-loader ] start -->
    <div class="loader-bg">
        <div class="loader-track">
            <div class="loader-fill"></div>
        </div>
    </div>
    <!-- [ Pre-loader ] End -->
    <!-- [ navigation menu ] start -->
    <nav class="bg-green-600 pcoded-navbar menu-light">
        <div class="navbar-wrapper">
            <div class="navbar-content scroll-div">

                <div class="">
                    <div class="flex flex-col main-menu-header">
                        @if (Auth::user()->image)
                            <img class="object-cover object-center w-12 h-12 mx-auto rounded-full"
                                src="{{ Auth::user()->image }}" alt="{{ Auth::user()->image }}">
                        @else
                            <span
                                class="block w-12 p-2 mx-auto text-2xl font-semibold uppercase rounded-full shadow-inner">{{ Auth::user()->name[0] }}</span>
                        @endif
                        <div class="font-medium user-details">
                            <div id="more-details">{{ Auth::user()->name }} <i class="fa fa-caret-down"></i></div>
                        </div>
                    </div>
                    <div class="collapse" id="nav-user-link">
                        <ul class="list-unstyled">
                            <li class="list-group-item">
                                <a href="/profile"><i class="feather icon-user m-r-5"></i>View Profile</a>
                            </li>
                            {{-- <li class="list-group-item"><a href="#!"><i class="feather icon-settings m-r-5"></i>Settings</a></li> --}}
                            <li class="list-group-item">
                                <a href="route('logout')"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i
                                        class="feather icon-log-out m-r-5"></i>Logout</a>
                                <form class="hidden logout-form" id="logout-form" action="{{ route('logout') }}"
                                    method="POST">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>

                <ul class="nav pcoded-inner-navbar">
                    <li class="nav-item pcoded-menu-caption">
                        <label>Navigation</label>
                    </li>
                    @if (auth()->user()->hasRole(['admin', 'librarian']))
                        <li class="nav-item">
                            <a href="/dashboard"
                                class="nav-link {{ request()->is('/branches') ? 'nav-active' : '' }}"><span
                                    class="pcoded-micon"><i class="feather icon-home"></i></span><span
                                    class="pcoded-mtext">Dashboard</span></a>
                        </li>
                        <li class="nav-item">
                            <a href="/borrowers" class="nav-link {{ request()->is('/borroers') ? 'nav-active' : '' }}">
                                <span class="pcoded-micon">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20"
                                        fill="currentColor">
                                        <path
                                            d="M8 9a3 3 0 100-6 3 3 0 000 6zM8 11a6 6 0 016 6H2a6 6 0 016-6zM16 7a1 1 0 10-2 0v1h-1a1 1 0 100 2h1v1a1 1 0 102 0v-1h1a1 1 0 100-2h-1V7z" />
                                    </svg>
                                </span>
                                <span class="pcoded-mtext">Borrowers History</span>
                            </a>
                        </li>
                    @else
                        <li class="nav-item">
                            <a href="/home" class="nav-link {{ request()->is('admin/cities') ? 'nav-active' : '' }}">
                                <span class="pcoded-micon">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 feather" viewBox="0 0 20 20"
                                        fill="currentColor">
                                        <path
                                            d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z" />
                                    </svg>
                                </span>
                                <span class="pcoded-mtext">Library</span>
                            </a>
                        </li>
                    @endif
                    <li class="nav-item">
                        <a href="/profile" class="nav-link {{ request()->is('profile') ? 'nav-active' : '' }}">
                            <span class="pcoded-micon">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 feather" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path
                                        d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z" />
                                </svg>
                            </span>
                            <span class="pcoded-mtext">Profile</span>
                        </a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>
    <!-- [ navigation menu ] end -->
    <!-- [ Header ] start -->
    <header class="navbar pcoded-header navbar-expand-lg navbar-light header-blue poppins-medium">
        <div class="bg-green-600 m-header">
            <a class="mobile-menu" id="mobile-collapse" href="#!"><span></span></a>
            <a href="#!" class="b-brand">
                <!-- ========   change your logo hear   ============ -->
                <img src="/img/logo.png" alt="" class="w-12 logo">
                <img src="/img/logo-icon.png" alt="" class="logo-thumb">
            </a>
            <a href="#!" class="mob-toggler">
                <i class="feather icon-more-vertical"></i>
            </a>
        </div>
        <div class="bg-green-600 collapse navbar-collapse">
            <ul class="mr-auto navbar-nav">
                <li class="nav-item">
                    {{-- <a href="#!" class="pop-search"><i class="feather icon-search"></i></a> --}}
                    <div class="search-bar">
                        <input type="text" class="border-0 shadow-none form-control" placeholder="Search hear">
                        <button type="button" class="close" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </li>
            </ul>
            <ul class="ml-auto navbar-nav">
                {{-- <li>
					<div class="dropdown">
						<a class="dropdown-toggle" href="#" data-toggle="dropdown"><i class="icon feather icon-bell"></i></a>
						<div class="dropdown-menu dropdown-menu-right notification">
							<div class="noti-head">
								<h6 class="d-inline-block m-b-0">Notifications</h6>
								<div class="float-right">
									<a href="#!" class="m-r-10">mark as read</a>
									<a href="#!">clear all</a>
								</div>
							</div>
							<ul class="noti-body">
								<li class="n-title">
									<p class="m-b-0">NEW</p>
								</li>
								<li class="notification">
									<div class="media">
										<img class="img-radius" src="/assets/images/user/avatar-1.jpg" alt="Generic placeholder image">
										<div class="media-body">
											<p><strong>John Doe</strong><span class="n-time text-muted"><i class="icon feather icon-clock m-r-10"></i>5
													min</span></p>
											<p>New ticket Added</p>
										</div>
									</div>
								</li>
								<li class="n-title">
									<p class="m-b-0">EARLIER</p>
								</li>
								<li class="notification">
									<div class="media">
										<img class="img-radius" src="/assets/images/user/avatar-2.jpg" alt="Generic placeholder image">
										<div class="media-body">
											<p><strong>Joseph William</strong><span class="n-time text-muted"><i
														class="icon feather icon-clock m-r-10"></i>10 min</span></p>
											<p>Prchace New Theme and make payment</p>
										</div>
									</div>
								</li>
								<li class="notification">
									<div class="media">
										<img class="img-radius" src="/assets/images/user/avatar-1.jpg" alt="Generic placeholder image">
										<div class="media-body">
											<p><strong>Sara Soudein</strong><span class="n-time text-muted"><i
														class="icon feather icon-clock m-r-10"></i>12 min</span></p>
											<p>currently login</p>
										</div>
									</div>
								</li>
								<li class="notification">
									<div class="media">
										<img class="img-radius" src="/assets/images/user/avatar-2.jpg" alt="Generic placeholder image">
										<div class="media-body">
											<p><strong>Joseph William</strong><span class="n-time text-muted"><i
														class="icon feather icon-clock m-r-10"></i>30 min</span></p>
											<p>Prchace New Theme and make payment</p>
										</div>
									</div>
								</li>
							</ul>
							<div class="noti-footer">
								<a href="#!">show all</a>
							</div>
						</div>
					</div>
				</li> --}}
                <li>
                    <div class="text-white dropdown drp-user">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="feather icon-user"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right profile-notification">
                            <div class="pro-head">
                                @if (Auth::user()->image)
                                    <img class="object-cover object-center h-10 bg-red-600 rounded-full w-14"
                                        src="{{ asset('storage/' . Auth::user()->image) }}"
                                        alt="{{ Auth::user()->name }}">
                                @else
                                    <span
                                        class="block p-2 mx-auto text-2xl font-semibold uppercase rounded-full shadow-inner max-w-min">{{ Auth::user()->name[0] }}</span>
                                @endif
                                <span>{{ Auth::user()->name }}</span>
                                <a href="route('logout')"
                                    onclick="event.preventDefault(); document.getElementById('logout-form2').submit();"
                                    class="dud-logout" title="Logout">
                                    <i class="feather icon-log-out"></i>
                                </a>
                                <form class="hidden logout-form" id="logout-form2" action="{{ route('logout') }}"
                                    method="POST">
                                    @csrf
                                </form>
                            </div>
                            <ul class="pro-body">
                                <li><a href="/profile" class="dropdown-item"><i class="feather icon-user"></i>
                                        Profile</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
            </ul>
        </div>

    </header>
    <!-- [ Header ] end -->

    <!-- [ Main Content ] start -->
    <div class="pcoded-main-container">
        <div class="pcoded-content">
            {{-- <!-- [ breadcrumb ] start --> --}}
            <div class="page-header">
                <div class="page-block">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <div class="page-header-title">
                                <h5 class="text-lg m-b-10 poppins-medium">Dashboard</h5>
                            </div>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/"><i class="feather icon-home"></i></a>
                                </li>
                                <li class="breadcrumb-item"><a href="#!">Dashboard Analytics</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ breadcrumb ] end -->
            <!-- [ Main Content ] start -->
            {{-- @livewire('board') --}}
            <!-- page statustic card end -->
            <main class="-mt-4 row">
                {{ $slot }}
            </main>
        </div>
        {{-- main content --}}

    </div>
    <!-- Latest Customers end -->

    <!-- Required Js -->
    <script src="/assets/js/vendor-all.min.js"></script>
    <script src="/assets/js/plugins/bootstrap.min.js"></script>
    <script src="/assets/js/ripple.js"></script>
    <script src="/assets/js/pcoded.min.js"></script>

    <!-- Apex Chart -->
    <script src="/assets/js/plugins/apexcharts.min.js"></script>

    <!-- custom-chart js -->
    <script src="/assets/js/pages/dashboard-main.js"></script>

    @livewireScripts
    <script>
        $(document).ready(function() {
            window.addEventListener('closeModal', event => {
                $('#form').modal('hide');
            });
        });
    </script>

    {{-- show modal --}}
    <script>
        $(document).ready(function() {
            window.addEventListener('showModal', event => {
                $('#form').modal('show');
            })
        });
    </script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @yield('scripts')

    <script>
        // success message
        window.addEventListener('swal:success', function(e) {
            Swal.fire(e.detail);
        });

        window.addEventListener('swal:confirm', event => {
            Swal.fire({
                title: 'Are you sure?',
                text: "You wont be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                cancelButtonColor: '#f11',
                confirmButtonText: 'Yes delete it'
            }).then((result) => {
                if (result.isConfirmed) {
                    Livewire.emit('deleteConfirm');
                    // Swal.fire(
                    //   'Deleted!'
                    //   , 'Your file has been deleted'
                    //   , 'success'
                    // )
                }
            });
        });

        $(function() {
            $('[data-toggle="tooltip"]').tooltip()
        })
    </script>

</body>

</html>
