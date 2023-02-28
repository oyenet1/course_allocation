<!DOCTYPE html>
<html lang="en" class="">

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

    {{-- css  --}}

    <link href="{{ mix('css/main.css') }}" rel="stylesheet">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <script defer src="https://unpkg.com/alpinejs@3.4.2/dist/cdn.min.js"></script>

    <meta name="description" content="Adonis Abbey" />

    <meta property="og:url" content="https://adonis-abbey.com" />
    <meta property="og:site_name" content="JustBoil.me" />
    <meta property="og:title" content="Admin One HTML" />
    <meta property="og:description" content="Adonis Abbey" />
    <meta property="og:image" content="/img/logo.png" />
    <meta property="og:image:type" content="image/png" />
    <meta property="og:image:width" content="1920" />
    <meta property="og:image:height" content="960" />

    <meta property="twitter:card" content="summary_large_image" />
    <meta property="twitter:title" content="Admin One HTML" />
    <meta property="twitter:description" content="Adoni Abbet publishing" />
    <meta property="twitter:image:src" content="logo.png" />
    <meta property="twitter:image:width" content="1920" />
    <meta property="twitter:image:height" content="960" />


    <style>
        [x-cloak] {
            display: none !important;
        }

    </style>
    @livewireStyles
</head>

<body>
    <div id="app" class="relative">
        <nav id="navbar-main" class="navbar is-fixed-top">
            <div class="navbar-brand">
                <a class="navbar-item mobile-aside-button">
                    <span class="icon"><i class="mdi mdi-forwardburger mdi-24px"></i></span>
                </a>
                <div class="navbar-item">
                    <div class="control">
                        <input placeholder="Search everywhere..." class="input" />
                    </div>
                </div>
            </div>
            <div class="navbar-brand is-right">
                <a class="navbar-item --jb-navbar-menu-toggle" data-target="navbar-menu">
                    <span class="icon"><i class="mdi mdi-dots-vertical mdi-24px"></i></span>
                </a>
            </div>
            <div class="navbar-menu" id="navbar-menu">
                <div class="navbar-end">
                    <div class="navbar-item dropdown has-divider has-user-avatar">
                        <a class="navbar-link">
                            <div class="user-avatar">
                                <img src="https://avatars.dicebear.com/v2/initials/john-doe.svg" alt="{{ currentUser()->name }}" class="rounded-full" />
                            </div>
                            <div class="is-user-name"><span>{{ currentUser()->name }}</span></div>
                            <span class="icon"><i class="mdi mdi-chevron-down"></i></span>
                        </a>
                        <div class="navbar-dropdown">
                            <a href="{{ route('profile') }}" class="navbar-item">
                                <span class="icon"><i class="mdi mdi-account"></i></span>
                                <span>My Profile</span>
                            </a>
                            <a class="navbar-item" href="/setting">
                                <span class="icon"><i class="mdi mdi-settings"></i></span>
                                <span>Settings</span>
                            </a>
                            <a class="navbar-item" href="/notifications">
                                <span class="icon"><i class="mdi mdi-email"></i></span>
                                <span>Messages</span>
                            </a>
                            <hr class="navbar-divider" />
                            <a onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="navbar-item" href="{{ route('logout') }}">
                                <span class="icon"><i class="mdi mdi-logout"></i></span>
                                <span>Log Out</span>
                            </a>
                        </div>
                        <form class="hidden logout-form" id="logout-form" action="{{ route('logout') }}" method="POST">
                            @csrf
                        </form>
                    </div>
                    <a onclick="event.preventDefault(); document.getElementById('logout-form').submit();" title="Log out" class="navbar-item hover:text-secondary desktop-icon-only" href="{{ route('logout') }}">
                        <span class="icon"><i class="mdi mdi-logout"></i></span>
                        <span>Log out</span>
                    </a>
                </div>
            </div>
        </nav>

        <aside class="aside is-placed-left is-expanded border-r bg-white ">
            <div class="aside-tools bg-primary-light">
                <div class="font-black uppercase text-primary text-center mx-auto">Adonis -<b class="font-black text-secondary">
                        Abbey</b>
                </div>
            </div>
            <div class="menu is-menu-main space-y-1 overflow-y-auto">
                <p class="px-4 py-2 capitalize">{{ greeting() . ', ' }} <span class="font-medium">{{ currentUser()->roles[0]->name }}</span></p>
                <ul class="menu-list">
                    <li class="active">
                        <a href="/">
                            <span class="icon"><i class="mdi mdi-desktop-mac"></i></span>
                            <span class="menu-item-label">Dashboard</span>
                        </a>
                    </li>
                    <li class="--set-active-profile-html {{ request()->is('profile') ? 'active' : '' }}">
                        <a href="{{ route('profile') }}">
                            <span class="icon"><i class="mdi mdi-account-circle"></i></span>
                            <span class="menu-item-label">Profile</span>
                        </a>
                    </li>
                </ul>
                <p class="menu-label">User Management</p>
                <ul class="menu-list space-y-1">
                    <li>
                        <a class="dropdown">
                            <span class="icon">
                                <svg style="width:20px;height:20px" viewBox="0 0 24 24">
                                    <path fill="currentColor" d="M12,5.5A3.5,3.5 0 0,1 15.5,9A3.5,3.5 0 0,1 12,12.5A3.5,3.5 0 0,1 8.5,9A3.5,3.5 0 0,1 12,5.5M5,8C5.56,8 6.08,8.15 6.53,8.42C6.38,9.85 6.8,11.27 7.66,12.38C7.16,13.34 6.16,14 5,14A3,3 0 0,1 2,11A3,3 0 0,1 5,8M19,8A3,3 0 0,1 22,11A3,3 0 0,1 19,14C17.84,14 16.84,13.34 16.34,12.38C17.2,11.27 17.62,9.85 17.47,8.42C17.92,8.15 18.44,8 19,8M5.5,18.25C5.5,16.18 8.41,14.5 12,14.5C15.59,14.5 18.5,16.18 18.5,18.25V20H5.5V18.25M0,20V18.5C0,17.11 1.89,15.94 4.45,15.6C3.86,16.28 3.5,17.22 3.5,18.25V20H0M24,20H20.5V18.25C20.5,17.22 20.14,16.28 19.55,15.6C22.11,15.94 24,17.11 24,18.5V20Z" />
                                </svg>
                            </span>
                            <span class="menu-item-label">Users</span>
                            <span class="icon"><i class="mdi mdi-plus"></i></span>
                        </a>
                        <ul class="bg-white">
                            <li class="bg-white">
                                <a href="#void" class="">
                                    <span class="md:pl-8">Manage Users</span>
                                </a>
                            </li>
                            <li class="bg-white">
                                <a href="#void" class="">
                                    <span class="md:pl-8">Manage Users Roles</span>
                                </a>
                            </li>

                        </ul>
                    </li>

                    <li class="--set-active-profile-html ">
                        <a href="">
                            <span class="icon">
                                <svg style="width:20px;height:20px" viewBox="0 0 24 24">
                                    <path fill="currentColor" d="M19 13C19.34 13 19.67 13.04 20 13.09V10C20 8.9 19.11 8 18 8H17V6C17 3.24 14.76 1 12 1S7 3.24 7 6H9C9 4.34 10.34 3 12 3S15 4.34 15 6V8H6C4.89 8 4 8.9 4 10V20C4 21.1 4.89 22 6 22H13.81C13.3 21.12 13 20.1 13 19C13 15.69 15.69 13 19 13M12 17C10.9 17 10 16.11 10 15S10.9 13 12 13 14 13.9 14 15 13.11 17 12 17M22.5 17.25L17.75 22L15 19L16.16 17.84L17.75 19.43L21.34 15.84L22.5 17.25Z" />
                                </svg>
                            </span>
                            <span class="menu-item-label">Manage password</span>
                        </a>
                    </li>
                    <li class="--set-active-profile-html">
                        <a href="">
                            <span class="icon">
                                <svg style="width:20px;height:20px" viewBox="0 0 24 24">
                                    <path fill="currentColor" d="M17 14H19V17H22V19H19V22H17V19H14V17H17V14M20 12C20 8.64 17.93 5.77 15 4.59V5C15 6.1 14.1 7 13 7H11V9C11 9.55 10.55 10 10 10H8V12H14C14.5 12 14.9 12.35 15 12.81C13.2 13.85 12 15.79 12 18C12 19.5 12.54 20.85 13.44 21.9L12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12L21.9 13.44C21.34 12.96 20.7 12.59 20 12.34L20 12M11 19.93V18C9.9 18 9 17.1 9 16V15L4.21 10.21C4.08 10.78 4 11.38 4 12C4 16.08 7.06 19.44 11 19.93Z" />
                                </svg>
                            </span>
                            <span class="menu-item-label">IP Address Ranges</span>
                        </a>
                    </li>
                </ul>
                <p class="menu-label">Book Management</p>
                <ul class="menu-list space-y-1">
                    <li>
                        <a class="dropdown" href="{{ route('books') }}">
                            <span class="icon">
                                <svg style="width:20px;height:20px" viewBox="0 0 24 24">
                                    <path fill="currentColor" d="M19 2L14 6.5V17.5L19 13V2M6.5 5C4.55 5 2.45 5.4 1 6.5V21.16C1 21.41 1.25 21.66 1.5 21.66C1.6 21.66 1.65 21.59 1.75 21.59C3.1 20.94 5.05 20.5 6.5 20.5C8.45 20.5 10.55 20.9 12 22C13.35 21.15 15.8 20.5 17.5 20.5C19.15 20.5 20.85 20.81 22.25 21.56C22.35 21.61 22.4 21.59 22.5 21.59C22.75 21.59 23 21.34 23 21.09V6.5C22.4 6.05 21.75 5.75 21 5.5V19C19.9 18.65 18.7 18.5 17.5 18.5C15.8 18.5 13.35 19.15 12 20V6.5C10.55 5.4 8.45 5 6.5 5Z" />
                                </svg></span>
                            <span class="menu-item-label">Books</span>
                            <span class="icon"><i class="mdi mdi-plus"></i></span>
                        </a>
                        <ul>
                            <li>
                                <a href="#void" class="">
                                    <span class="md:pl-8">Add Books</span>
                                </a>
                            </li>
                            <li>
                                <a href="#void" class="">
                                    <span class="md:pl-8">View Books</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <p class="menu-label">Sales Management</p>
                <ul class="menu-list space-y-1">
                    <li class="--set-active-profile-html">
                        <a href="">
                            <span class="icon">
                                <svg style="width:20px;height:20px" viewBox="0 0 24 24">
                                    <path fill="currentColor" d="M5,6H23V18H5V6M14,9A3,3 0 0,1 17,12A3,3 0 0,1 14,15A3,3 0 0,1 11,12A3,3 0 0,1 14,9M9,8A2,2 0 0,1 7,10V14A2,2 0 0,1 9,16H19A2,2 0 0,1 21,14V10A2,2 0 0,1 19,8H9M1,10H3V20H19V22H1V10Z" />
                                </svg>
                            </span>
                            <span class="menu-item-label">Sales</span>
                        </a>
                    </li>
                    <li class="--set-active-profile-html">
                        <a href="">
                            <span class="icon">
                                <svg style="width:20px;height:20px" viewBox="0 0 24 24">
                                    <path fill="currentColor" d="M12.3 8.93L9.88 6.5H15.5V10H17V5H9.88L12.3 2.57L11.24 1.5L7 5.75L11.24 10L12.3 8.93M12 14A3 3 0 1 0 15 17A3 3 0 0 0 12 14M3 11V23H21V11M19 19A2 2 0 0 0 17 21H7A2 2 0 0 0 5 19V15A2 2 0 0 0 7 13H17A2 2 0 0 0 19 15Z" />
                                </svg>
                            </span>
                            <span class="menu-item-label">Withdrawal Request</span>
                        </a>
                    </li>
                    <li class="--set-active-profile-html">
                        <a href="">
                            <span class="icon">
                                <svg style="width:20px;height:20px" viewBox="0 0 24 24">
                                    <path fill="currentColor" d="M2,17H22V21H2V17M6.25,7H9V6H6V3H14V6H11V7H17.8C18.8,7 19.8,8 20,9L20.5,16H3.5L4.05,9C4.05,8 5.05,7 6.25,7M13,9V11H18V9H13M6,9V10H8V9H6M9,9V10H11V9H9M6,11V12H8V11H6M9,11V12H11V11H9M6,13V14H8V13H6M9,13V14H11V13H9M7,4V5H13V4H7Z" />
                                </svg>
                            </span>
                            <span class="menu-item-label">Payment History</span>
                        </a>
                    </li>
                    <p class="menu-label">Blog Management</p>
                    <ul class="menu-list space-y-1">
                        <li class="">
                            <a class="dropdown">
                                <span class="icon">
                                    <svg style="width:20px;height:20px" viewBox="0 0 24 24">
                                        <path fill="currentColor" d="M4 7V19H19V21H4C2 21 2 19 2 19V7H4M21.3 3H7.7C6.76 3 6 3.7 6 4.55V15.45C6 16.31 6.76 17 7.7 17H21.3C22.24 17 23 16.31 23 15.45V4.55C23 3.7 22.24 3 21.3 3M8 5H13V11H8V5M21 15H8V13H21V15M21 11H15V9H21V11M21 7H15V5H21V7Z" />
                                    </svg>
                                </span>
                                <span class="menu-item-label">News/Blogs</span>
                                <span class="icon"><i class="mdi mdi-plus"></i></span>
                            </a>
                            <ul>
                                <li class="bg-white">
                                    <a href="#void" class="">
                                        <span class="md:pl-8">Add News</span>
                                    </a>
                                </li>
                                <li class="bg-white">
                                    <a href="#void" class="">
                                        <span class="md:pl-8">Manage News</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <p class="menu-label">Journals Management</p>
                    <ul class="menu-list space-y-1">
                        <li class="">
                            <a class="dropdown">
                                <span class="icon">
                                    <svg style="width:20px;height:20px" viewBox="0 0 24 24">
                                        <path fill="currentColor" d="M4 7V19H19V21H4C2 21 2 19 2 19V7H4M21.3 3H7.7C6.76 3 6 3.7 6 4.55V15.45C6 16.31 6.76 17 7.7 17H21.3C22.24 17 23 16.31 23 15.45V4.55C23 3.7 22.24 3 21.3 3M8 5H13V11H8V5M21 15H8V13H21V15M21 11H15V9H21V11M21 7H15V5H21V7Z" />
                                    </svg>
                                </span>
                                <span class="menu-item-label">Journals</span>
                                <span class="icon"><i class="mdi mdi-plus"></i></span>
                            </a>
                            <ul>
                                <li class="bg-white">
                                    <a href="#void" class="">
                                        <span class="md:pl-8">Add Journals</span>
                                    </a>
                                </li>
                                <li class="bg-white">
                                    <a href="#void" class="">
                                        <span class="md:pl-8">Manage Journals</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </ul>
            </div>

            <div class="absolute w-full bottom-0 mx-auto rounded-lg flex mb-4 justift-between items-center">
                <img src="/img/adonis.png" alt="Adonis and abbey publishers" class="block lg:w-40 animate w-24 p-4 border-4 rounded-lg border-primary mx-auto">
            </div>
        </aside>

        {{-- <section class="is-title-bar">
            <div class="flex flex-col items-center justify-between space-y-6 md:flex-row md:space-y-0">
                <ul>
                    <li class="capitalize">{{ currentUser()->roles[0]->name }}</li>
        <li>Dashboard</li>
        </ul>
    </div>
    </section>
    <section class="section main-section">
        <div class="grid grid-cols-1 gap-6 mb-6 md:grid-cols-3">
            <div class="card">
                <div class="card-content">
                    <div class="flex items-center justify-between">
                        <div class="widget-label">
                            <h3>Clients</h3>
                            <h1>512</h1>
                        </div>
                        <span class="text-green-500 icon widget-icon"><i class="mdi mdi-account-multiple mdi-48px"></i></span>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-content">
                    <div class="flex items-center justify-between">
                        <div class="widget-label">
                            <h3>Sales</h3>
                            <h1>$7,770</h1>
                        </div>
                        <span class="text-blue-500 icon widget-icon"><i class="mdi mdi-cart-outline mdi-48px"></i></span>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-content">
                    <div class="flex items-center justify-between">
                        <div class="widget-label">
                            <h3>Performance</h3>
                            <h1>256%</h1>
                        </div>
                        <span class="text-red-500 icon widget-icon"><i class="mdi mdi-finance mdi-48px"></i></span>
                    </div>
                </div>
            </div>
        </div>

        <div class="mb-6 card">
            <header class="card-header">
                <p class="card-header-title">
                    <span class="icon"><i class="mdi mdi-finance"></i></span>
                    Performance
                </p>
                <a href="#" class="card-header-icon">
                    <span class="icon"><i class="mdi mdi-reload"></i></span>
                </a>
            </header>
            <div class="card-content">
                <div class="chart-area">
                    <div class="h-full">
                        <div class="chartjs-size-monitor">
                            <div class="chartjs-size-monitor-expand">
                                <div></div>
                            </div>
                            <div class="chartjs-size-monitor-shrink">
                                <div></div>
                            </div>
                        </div>
                        <canvas id="big-line-chart" width="2992" height="1000" class="block chartjs-render-monitor" style="height: 400px; width: 1197px"></canvas>
                    </div>
                </div>
            </div>
        </div>

        <div class="notification blue">
            <div class="flex flex-col items-center justify-between space-y-3 md:flex-row md:space-y-0">
                <div>
                    <span class="icon"><i class="mdi mdi-buffer"></i></span>
                    <b>Responsive table</b>
                </div>
                <button type="button" class="button small textual --jb-notification-dismiss">
                    Dismiss
                </button>
            </div>
        </div>

        <div class="card has-table">
            <header class="card-header">
                <p class="card-header-title">
                    <span class="icon"><i class="mdi mdi-account-multiple"></i></span>
                    Clients
                </p>
                <a href="#" class="card-header-icon">
                    <span class="icon"><i class="mdi mdi-reload"></i></span>
                </a>
            </header>
            <div class="card-content">
                <table>
                    <thead>
                        <tr>
                            <th></th>
                            <th>Name</th>
                            <th>Company</th>
                            <th>City</th>
                            <th>Progress</th>
                            <th>Created</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="image-cell">
                                <div class="image">
                                    <img src="https://avatars.dicebear.com/v2/initials/rebecca-bauch.svg" class="rounded-full" />
                                </div>
                            </td>
                            <td data-label="Name">Rebecca Bauch</td>
                            <td data-label="Company">Daugherty-Daniel</td>
                            <td data-label="City">South Cory</td>
                            <td data-label="Progress" class="progress-cell">
                                <progress max="100" value="79">79</progress>
                            </td>
                            <td data-label="Created">
                                <small class="text-gray-500" title="Oct 25, 2021">Oct 25, 2021</small>
                            </td>
                            <td class="actions-cell">
                                <div class="buttons right nowrap">
                                    <button class="button small green --jb-modal" data-target="sample-modal-2" type="button">
                                        <span class="icon"><i class="mdi mdi-eye"></i></span>
                                    </button>
                                    <button class="button small red --jb-modal" data-target="sample-modal" type="button">
                                        <span class="icon"><i class="mdi mdi-trash-can"></i></span>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="image-cell">
                                <div class="image">
                                    <img src="https://avatars.dicebear.com/v2/initials/felicita-yundt.svg" class="rounded-full" />
                                </div>
                            </td>
                            <td data-label="Name">Felicita Yundt</td>
                            <td data-label="Company">Johns-Weissnat</td>
                            <td data-label="City">East Ariel</td>
                            <td data-label="Progress" class="progress-cell">
                                <progress max="100" value="67">67</progress>
                            </td>
                            <td data-label="Created">
                                <small class="text-gray-500" title="Jan 8, 2021">Jan 8, 2021</small>
                            </td>
                            <td class="actions-cell">
                                <div class="buttons right nowrap">
                                    <button class="button small green --jb-modal" data-target="sample-modal-2" type="button">
                                        <span class="icon"><i class="mdi mdi-eye"></i></span>
                                    </button>
                                    <button class="button small red --jb-modal" data-target="sample-modal" type="button">
                                        <span class="icon"><i class="mdi mdi-trash-can"></i></span>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="image-cell">
                                <div class="image">
                                    <img src="https://avatars.dicebear.com/v2/initials/mr-larry-satterfield-v.svg" class="rounded-full" />
                                </div>
                            </td>
                            <td data-label="Name">Mr. Larry Satterfield V</td>
                            <td data-label="Company">Hyatt Ltd</td>
                            <td data-label="City">Windlerburgh</td>
                            <td data-label="Progress" class="progress-cell">
                                <progress max="100" value="16">16</progress>
                            </td>
                            <td data-label="Created">
                                <small class="text-gray-500" title="Dec 18, 2021">Dec 18, 2021</small>
                            </td>
                            <td class="actions-cell">
                                <div class="buttons right nowrap">
                                    <button class="button small green --jb-modal" data-target="sample-modal-2" type="button">
                                        <span class="icon"><i class="mdi mdi-eye"></i></span>
                                    </button>
                                    <button class="button small red --jb-modal" data-target="sample-modal" type="button">
                                        <span class="icon"><i class="mdi mdi-trash-can"></i></span>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="image-cell">
                                <div class="image">
                                    <img src="https://avatars.dicebear.com/v2/initials/mr-broderick-kub.svg" class="rounded-full" />
                                </div>
                            </td>
                            <td data-label="Name">Mr. Broderick Kub</td>
                            <td data-label="Company">Kshlerin, Bauch and Ernser</td>
                            <td data-label="City">New Kirstenport</td>
                            <td data-label="Progress" class="progress-cell">
                                <progress max="100" value="71">71</progress>
                            </td>
                            <td data-label="Created">
                                <small class="text-gray-500" title="Sep 13, 2021">Sep 13, 2021</small>
                            </td>
                            <td class="actions-cell">
                                <div class="buttons right nowrap">
                                    <button class="button small green --jb-modal" data-target="sample-modal-2" type="button">
                                        <span class="icon"><i class="mdi mdi-eye"></i></span>
                                    </button>
                                    <button class="button small red --jb-modal" data-target="sample-modal" type="button">
                                        <span class="icon"><i class="mdi mdi-trash-can"></i></span>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="image-cell">
                                <div class="image">
                                    <img src="https://avatars.dicebear.com/v2/initials/barry-weber.svg" class="rounded-full" />
                                </div>
                            </td>
                            <td data-label="Name">Barry Weber</td>
                            <td data-label="Company">
                                Schulist, Mosciski and Heidenreich
                            </td>
                            <td data-label="City">East Violettestad</td>
                            <td data-label="Progress" class="progress-cell">
                                <progress max="100" value="80">80</progress>
                            </td>
                            <td data-label="Created">
                                <small class="text-gray-500" title="Jul 24, 2021">Jul 24, 2021</small>
                            </td>
                            <td class="actions-cell">
                                <div class="buttons right nowrap">
                                    <button class="button small green --jb-modal" data-target="sample-modal-2" type="button">
                                        <span class="icon"><i class="mdi mdi-eye"></i></span>
                                    </button>
                                    <button class="button small red --jb-modal" data-target="sample-modal" type="button">
                                        <span class="icon"><i class="mdi mdi-trash-can"></i></span>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="image-cell">
                                <div class="image">
                                    <img src="https://avatars.dicebear.com/v2/initials/bert-kautzer-md.svg" class="rounded-full" />
                                </div>
                            </td>
                            <td data-label="Name">Bert Kautzer MD</td>
                            <td data-label="Company">Gerhold and Sons</td>
                            <td data-label="City">Mayeport</td>
                            <td data-label="Progress" class="progress-cell">
                                <progress max="100" value="62">62</progress>
                            </td>
                            <td data-label="Created">
                                <small class="text-gray-500" title="Mar 30, 2021">Mar 30, 2021</small>
                            </td>
                            <td class="actions-cell">
                                <div class="buttons right nowrap">
                                    <button class="button small green --jb-modal" data-target="sample-modal-2" type="button">
                                        <span class="icon"><i class="mdi mdi-eye"></i></span>
                                    </button>
                                    <button class="button small red --jb-modal" data-target="sample-modal" type="button">
                                        <span class="icon"><i class="mdi mdi-trash-can"></i></span>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="image-cell">
                                <div class="image">
                                    <img src="https://avatars.dicebear.com/v2/initials/lonzo-steuber.svg" class="rounded-full" />
                                </div>
                            </td>
                            <td data-label="Name">Lonzo Steuber</td>
                            <td data-label="Company">Skiles Ltd</td>
                            <td data-label="City">Marilouville</td>
                            <td data-label="Progress" class="progress-cell">
                                <progress max="100" value="17">17</progress>
                            </td>
                            <td data-label="Created">
                                <small class="text-gray-500" title="Feb 12, 2021">Feb 12, 2021</small>
                            </td>
                            <td class="actions-cell">
                                <div class="buttons right nowrap">
                                    <button class="button small green --jb-modal" data-target="sample-modal-2" type="button">
                                        <span class="icon"><i class="mdi mdi-eye"></i></span>
                                    </button>
                                    <button class="button small red --jb-modal" data-target="sample-modal" type="button">
                                        <span class="icon"><i class="mdi mdi-trash-can"></i></span>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="image-cell">
                                <div class="image">
                                    <img src="https://avatars.dicebear.com/v2/initials/jonathon-hahn.svg" class="rounded-full" />
                                </div>
                            </td>
                            <td data-label="Name">Jonathon Hahn</td>
                            <td data-label="Company">Flatley Ltd</td>
                            <td data-label="City">Billiemouth</td>
                            <td data-label="Progress" class="progress-cell">
                                <progress max="100" value="74">74</progress>
                            </td>
                            <td data-label="Created">
                                <small class="text-gray-500" title="Dec 30, 2021">Dec 30, 2021</small>
                            </td>
                            <td class="actions-cell">
                                <div class="buttons right nowrap">
                                    <button class="button small green --jb-modal" data-target="sample-modal-2" type="button">
                                        <span class="icon"><i class="mdi mdi-eye"></i></span>
                                    </button>
                                    <button class="button small red --jb-modal" data-target="sample-modal" type="button">
                                        <span class="icon"><i class="mdi mdi-trash-can"></i></span>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="image-cell">
                                <div class="image">
                                    <img src="https://avatars.dicebear.com/v2/initials/ryley-wuckert.svg" class="rounded-full" />
                                </div>
                            </td>
                            <td data-label="Name">Ryley Wuckert</td>
                            <td data-label="Company">Heller-Little</td>
                            <td data-label="City">Emeraldtown</td>
                            <td data-label="Progress" class="progress-cell">
                                <progress max="100" value="54">54</progress>
                            </td>
                            <td data-label="Created">
                                <small class="text-gray-500" title="Jun 28, 2021">Jun 28, 2021</small>
                            </td>
                            <td class="actions-cell">
                                <div class="buttons right nowrap">
                                    <button class="button small green --jb-modal" data-target="sample-modal-2" type="button">
                                        <span class="icon"><i class="mdi mdi-eye"></i></span>
                                    </button>
                                    <button class="button small red --jb-modal" data-target="sample-modal" type="button">
                                        <span class="icon"><i class="mdi mdi-trash-can"></i></span>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="image-cell">
                                <div class="image">
                                    <img src="https://avatars.dicebear.com/v2/initials/sienna-hayes.svg" class="rounded-full" />
                                </div>
                            </td>
                            <td data-label="Name">Sienna Hayes</td>
                            <td data-label="Company">Conn, Jerde and Douglas</td>
                            <td data-label="City">Jonathanfort</td>
                            <td data-label="Progress" class="progress-cell">
                                <progress max="100" value="55">55</progress>
                            </td>
                            <td data-label="Created">
                                <small class="text-gray-500" title="Mar 7, 2021">Mar 7, 2021</small>
                            </td>
                            <td class="actions-cell">
                                <div class="buttons right nowrap">
                                    <button class="button small green --jb-modal" data-target="sample-modal-2" type="button">
                                        <span class="icon"><i class="mdi mdi-eye"></i></span>
                                    </button>
                                    <button class="button small red --jb-modal" data-target="sample-modal" type="button">
                                        <span class="icon"><i class="mdi mdi-trash-can"></i></span>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="table-pagination">
                    <div class="flex items-center justify-between">
                        <div class="buttons">
                            <button type="button" class="button active">1</button>
                            <button type="button" class="button">2</button>
                            <button type="button" class="button">3</button>
                        </div>
                        <small>Page 1 of 3</small>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <main>
        {{ $slot ?? '' }}
    </main>

    <footer class="footer bg-primary text-white  w-full">
        <div class="flex text-sm flex-col items-center justify-between space-y-3 md:flex-row md:space-y-0">
            <div></div>
            <div class="flex uppercase items-center justify-start space-x-3">
                <div>© All right reserved 2003 - {{ date('Y') }} ADONIS & ABBEY PUBLISHers LTD.</div>



            </div>

            <div>
                <p>
                    Powered By:
                    <a href="https://bonifade.com/" class="text-secondary" target="_blank">Bonifade
                        Technologies</a>
                </p>
            </div>

        </div>
    </footer>
    </div>

    <!-- Scripts below are for demo only -->
    <script type="text/javascript" src="/dashboard/dist/js/main.min.js"></script>
    @livewireScripts
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @yield('scripts')

    <script>
        // success message
        window.addEventListener('swal:success', function(e) {
            Swal.fire(e.detail);
        });

        window.addEventListener('swal:confirm', event => {
            Swal.fire({
                title: 'Are you sure?'
                , text: "You wont be able to revert this!"
                , icon: 'warning'
                , showCancelButton: true
                , cancelButtonColor: '#f11'
                , confirmButtonText: 'Yes delete it'
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

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"></script>
    <script type="text/javascript" src="/dashboard/dist/js/chart.sample.min.js"></script>


    <!-- Icons below are for demo only. Feel free to use any icon pack. Docs: https://bulma.io/documentation/elements/icon/ -->
    <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.9.95/css/materialdesignicons.min.css" />
</body>

</html>
