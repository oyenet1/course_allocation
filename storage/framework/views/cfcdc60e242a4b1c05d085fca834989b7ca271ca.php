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
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <title><?php echo $__env->yieldContent('title' ?? 'Adonis and Abbey publishing'); ?></title>

    

    

    <link href="<?php echo e(mix('css/main.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(mix('css/app.css')); ?>" rel="stylesheet">
    
    <script src="<?php echo e(mix('js/app.js')); ?>" defer></script>

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

        a.active,
        .confirmButton {
            color: white !important;
            background: #0d2364;
        }
    </style>
    <?php echo \Livewire\Livewire::styles(); ?>

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
                                <img src="https://avatars.dicebear.com/v2/initials/john-doe.svg"
                                    alt="<?php echo e(currentUser()->name); ?>" class="rounded-full" />
                            </div>
                            <div class="is-user-name"><span><?php echo e(currentUser()->name); ?></span></div>
                            <span class="icon"><i class="mdi mdi-chevron-down"></i></span>
                        </a>
                        <div class="navbar-dropdown">
                            <a href="<?php echo e(route('profile')); ?>" class="navbar-item">
                                <span class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                        <path fill-rule="evenodd"
                                            d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                                    </svg>
                                </span>
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
                            <a onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                class="navbar-item" href="<?php echo e(route('logout')); ?>">
                                <span class="icon"><i class="mdi mdi-logout"></i></span>
                                <span>Log Out</span>
                            </a>
                        </div>
                        <form class="hidden logout-form" id="logout-form" action="<?php echo e(route('logout')); ?>"
                            method="POST">
                            <?php echo csrf_field(); ?>
                        </form>
                    </div>
                    <a onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                        title="Log out" class="navbar-item hover:text-secondary desktop-icon-only"
                        href="<?php echo e(route('logout')); ?>">
                        <span class="icon"><i class="mdi mdi-logout"></i></span>
                        <span>Log out</span>
                    </a>
                </div>
            </div>
        </nav>

        <aside class="overflow-y-auto bg-white border-r aside is-placed-left is-expanded">
            <div class="aside-tools bg-primary-light">
                <div class="mx-auto font-black text-center uppercase text-primary">Adonis -<b
                        class="font-black text-secondary">
                        Abbey</b>
                </div>
            </div>
            <div class="space-y-1 overflow-y-auto menu is-menu-main">
                <p class="px-4 py-2 capitalize"><?php echo e(greeting() . ', '); ?> <span
                        class="font-medium"><?php echo e(currentUser()->roles[0]->name); ?></span></p>
                <ul class="space-y-1 menu-list">
                    <li class="<?php echo e(request()->is('*/home') ? 'active' : ''); ?>">
                        <a href="/">
                            <span class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    fill="currentColor" class="bi bi-speedometer" viewBox="0 0 16 16">
                                    <path
                                        d="M8 2a.5.5 0 0 1 .5.5V4a.5.5 0 0 1-1 0V2.5A.5.5 0 0 1 8 2zM3.732 3.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 8a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 8zm9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5zm.754-4.246a.389.389 0 0 0-.527-.02L7.547 7.31A.91.91 0 1 0 8.85 8.569l3.434-4.297a.389.389 0 0 0-.029-.518z" />
                                    <path fill-rule="evenodd"
                                        d="M6.664 15.889A8 8 0 1 1 9.336.11a8 8 0 0 1-2.672 15.78zm-4.665-4.283A11.945 11.945 0 0 1 8 10c2.186 0 4.236.585 6.001 1.606a7 7 0 1 0-12.002 0z" />
                                </svg>
                            </span>
                            <span class="menu-item-label">Dashboard</span>
                        </a>
                    </li>
                    <li class="--set-active-profile-html <?php echo e(request()->is('profile') ? 'active' : ''); ?>">
                        <a href="<?php echo e(route('profile')); ?>">
                            <span class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                    <path fill-rule="evenodd"
                                        d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                                </svg>
                            </span>
                            <span class="menu-item-label">Profile</span>
                        </a>
                    </li>
                    <li class="--set-active-profile-html <?php echo e(request()->is('messages') ? 'active' : ''); ?>">
                        <a href="">
                            <span class="icon">
                                <svg style="width:20px;height:20px" viewBox="0 0 24 24">
                                    <path fill="currentColor"
                                        d="M20 2H4C2.9 2 2 2.9 2 4V22L6 18H20C21.1 18 22 17.1 22 16V4C22 2.9 21.1 2 20 2M20 16H5.2L4 17.2V4H20V16M17 11H15V9H17M13 11H11V9H13M9 11H7V9H9" />
                                </svg></span>
                            <span class="menu-item-label">Messages</span>
                        </a>
                    </li>
                </ul>
                <p class="menu-label">User Management</p>
                <ul class="space-y-1 menu-list">
                    <li>
                        <a class="dropdown <?php echo e(request()->is('admin/users') ? 'active' : ''); ?>">
                            <span class="icon">
                                <svg style="width:20px;height:20px" viewBox="0 0 24 24">
                                    <path fill="currentColor"
                                        d="M12,5.5A3.5,3.5 0 0,1 15.5,9A3.5,3.5 0 0,1 12,12.5A3.5,3.5 0 0,1 8.5,9A3.5,3.5 0 0,1 12,5.5M5,8C5.56,8 6.08,8.15 6.53,8.42C6.38,9.85 6.8,11.27 7.66,12.38C7.16,13.34 6.16,14 5,14A3,3 0 0,1 2,11A3,3 0 0,1 5,8M19,8A3,3 0 0,1 22,11A3,3 0 0,1 19,14C17.84,14 16.84,13.34 16.34,12.38C17.2,11.27 17.62,9.85 17.47,8.42C17.92,8.15 18.44,8 19,8M5.5,18.25C5.5,16.18 8.41,14.5 12,14.5C15.59,14.5 18.5,16.18 18.5,18.25V20H5.5V18.25M0,20V18.5C0,17.11 1.89,15.94 4.45,15.6C3.86,16.28 3.5,17.22 3.5,18.25V20H0M24,20H20.5V18.25C20.5,17.22 20.14,16.28 19.55,15.6C22.11,15.94 24,17.11 24,18.5V20Z" />
                                </svg>
                            </span>
                            <span class="menu-item-label">Users</span>
                            <span class="icon"><i class="mdi mdi-plus"></i></span>
                        </a>
                        <ul class="bg-white ">
                            <li
                                class=" <?php echo e(request()->is('admin/users') ? 'bg-primary-200  border-l-4 border-white' : 'bg-white'); ?>">
                                <a href="<?php echo e(route('users')); ?>" class="">
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
                                    <path fill="currentColor"
                                        d="M19 13C19.34 13 19.67 13.04 20 13.09V10C20 8.9 19.11 8 18 8H17V6C17 3.24 14.76 1 12 1S7 3.24 7 6H9C9 4.34 10.34 3 12 3S15 4.34 15 6V8H6C4.89 8 4 8.9 4 10V20C4 21.1 4.89 22 6 22H13.81C13.3 21.12 13 20.1 13 19C13 15.69 15.69 13 19 13M12 17C10.9 17 10 16.11 10 15S10.9 13 12 13 14 13.9 14 15 13.11 17 12 17M22.5 17.25L17.75 22L15 19L16.16 17.84L17.75 19.43L21.34 15.84L22.5 17.25Z" />
                                </svg>
                            </span>
                            <span class="menu-item-label">Manage password</span>
                        </a>
                    </li>
                    <li class="--set-active-profile-html">
                        <a href="">
                            <span class="icon">
                                <svg style="width:20px;height:20px" viewBox="0 0 24 24">
                                    <path fill="currentColor"
                                        d="M17 14H19V17H22V19H19V22H17V19H14V17H17V14M20 12C20 8.64 17.93 5.77 15 4.59V5C15 6.1 14.1 7 13 7H11V9C11 9.55 10.55 10 10 10H8V12H14C14.5 12 14.9 12.35 15 12.81C13.2 13.85 12 15.79 12 18C12 19.5 12.54 20.85 13.44 21.9L12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12L21.9 13.44C21.34 12.96 20.7 12.59 20 12.34L20 12M11 19.93V18C9.9 18 9 17.1 9 16V15L4.21 10.21C4.08 10.78 4 11.38 4 12C4 16.08 7.06 19.44 11 19.93Z" />
                                </svg>
                            </span>
                            <span class="menu-item-label">IP Address Ranges</span>
                        </a>
                    </li>
                </ul>
                <p class="menu-label">Book Management</p>
                <ul class="space-y-1 menu-list">
                    <li>
                        <a class="dropdown <?php echo e(request()->is('admin/books') ? 'active' : ''); ?>"
                            href="<?php echo e(route('books')); ?>">
                            <span class="icon">
                                <svg style="width:20px;height:20px" viewBox="0 0 24 24">
                                    <path fill="currentColor"
                                        d="M19 2L14 6.5V17.5L19 13V2M6.5 5C4.55 5 2.45 5.4 1 6.5V21.16C1 21.41 1.25 21.66 1.5 21.66C1.6 21.66 1.65 21.59 1.75 21.59C3.1 20.94 5.05 20.5 6.5 20.5C8.45 20.5 10.55 20.9 12 22C13.35 21.15 15.8 20.5 17.5 20.5C19.15 20.5 20.85 20.81 22.25 21.56C22.35 21.61 22.4 21.59 22.5 21.59C22.75 21.59 23 21.34 23 21.09V6.5C22.4 6.05 21.75 5.75 21 5.5V19C19.9 18.65 18.7 18.5 17.5 18.5C15.8 18.5 13.35 19.15 12 20V6.5C10.55 5.4 8.45 5 6.5 5Z" />
                                </svg></span>
                            <span class="menu-item-label">Books</span>
                            <span class="icon"><i class="mdi mdi-plus"></i></span>
                        </a>
                        <ul>
                            <li class="bg-white">
                                <a href="#void" class="">
                                    <span class="md:pl-8">Add Books</span>
                                </a>
                            </li>
                            <li class="bg-white">
                                <a href="#void" class="">
                                    <span class="md:pl-8">View Books</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <p class="menu-label">Sales Management</p>
                <ul class="space-y-1 menu-list">
                    <li class="--set-active-profile-html">
                        <a href="">
                            <span class="icon">
                                <svg style="width:20px;height:20px" viewBox="0 0 24 24">
                                    <path fill="currentColor"
                                        d="M5,6H23V18H5V6M14,9A3,3 0 0,1 17,12A3,3 0 0,1 14,15A3,3 0 0,1 11,12A3,3 0 0,1 14,9M9,8A2,2 0 0,1 7,10V14A2,2 0 0,1 9,16H19A2,2 0 0,1 21,14V10A2,2 0 0,1 19,8H9M1,10H3V20H19V22H1V10Z" />
                                </svg>
                            </span>
                            <span class="menu-item-label">Sales</span>
                        </a>
                    </li>
                    <li class="--set-active-profile-html">
                        <a href="">
                            <span class="icon">
                                <svg style="width:20px;height:20px" viewBox="0 0 24 24">
                                    <path fill="currentColor"
                                        d="M12.3 8.93L9.88 6.5H15.5V10H17V5H9.88L12.3 2.57L11.24 1.5L7 5.75L11.24 10L12.3 8.93M12 14A3 3 0 1 0 15 17A3 3 0 0 0 12 14M3 11V23H21V11M19 19A2 2 0 0 0 17 21H7A2 2 0 0 0 5 19V15A2 2 0 0 0 7 13H17A2 2 0 0 0 19 15Z" />
                                </svg>
                            </span>
                            <span class="menu-item-label">Withdrawal Request</span>
                        </a>
                    </li>
                    <li class="--set-active-profile-html">
                        <a href="">
                            <span class="icon">
                                <svg style="width:20px;height:20px" viewBox="0 0 24 24">
                                    <path fill="currentColor"
                                        d="M2,17H22V21H2V17M6.25,7H9V6H6V3H14V6H11V7H17.8C18.8,7 19.8,8 20,9L20.5,16H3.5L4.05,9C4.05,8 5.05,7 6.25,7M13,9V11H18V9H13M6,9V10H8V9H6M9,9V10H11V9H9M6,11V12H8V11H6M9,11V12H11V11H9M6,13V14H8V13H6M9,13V14H11V13H9M7,4V5H13V4H7Z" />
                                </svg>
                            </span>
                            <span class="menu-item-label">Payment History</span>
                        </a>
                    </li>
                    <p class="menu-label">Blog Management</p>
                    <ul class="space-y-1 menu-list">
                        <li class="">
                            <a class="dropdown">
                                <span class="icon">
                                    <svg style="width:20px;height:20px" viewBox="0 0 24 24">
                                        <path fill="currentColor"
                                            d="M4 7V19H19V21H4C2 21 2 19 2 19V7H4M21.3 3H7.7C6.76 3 6 3.7 6 4.55V15.45C6 16.31 6.76 17 7.7 17H21.3C22.24 17 23 16.31 23 15.45V4.55C23 3.7 22.24 3 21.3 3M8 5H13V11H8V5M21 15H8V13H21V15M21 11H15V9H21V11M21 7H15V5H21V7Z" />
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
                    <ul class="space-y-1 menu-list">
                        <li class="">
                            <a class="dropdown">
                                <span class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        fill="currentColor" class="bi bi-journal-richtext" viewBox="0 0 16 16">
                                        <path
                                            d="M7.5 3.75a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0zm-.861 1.542 1.33.886 1.854-1.855a.25.25 0 0 1 .289-.047L11 4.75V7a.5.5 0 0 1-.5.5h-5A.5.5 0 0 1 5 7v-.5s1.54-1.274 1.639-1.208zM5 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5z" />
                                        <path
                                            d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z" />
                                        <path
                                            d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z" />
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

            
        </aside>

        

        <main>
            <?php echo e($slot ?? ''); ?>

        </main>

        <footer class="w-full text-white footer bg-primary">
            <div class="flex flex-col items-center justify-between space-y-3 text-sm md:flex-row md:space-y-0">
                <div></div>
                <div class="flex items-center justify-start space-x-3 uppercase">
                    <div>© All right reserved 2003 - <?php echo e(date('Y')); ?> ADONIS & ABBEY PUBLISHers LTD.</div>



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
    <script type="text/javascript" src="/js/main.min.js"></script>
    
    <?php echo \Livewire\Livewire::scripts(); ?>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    <script>
        // success message
        window.addEventListener('swal:success', function(e) {
            Swal.fire(e.detail);
        });

        window.addEventListener('swal:confirm', event => {
            Swal.fire({
                title: 'Are you sure?',
                text: "You won\'t be able to revert this!",
                icon: 'question',
                showCancelButton: true,
                confirmButtonColor: '#0d2364',
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    
    <script type="text/javascript" src="/js/chart.sample.min.js"></script>


    <!-- Icons below are for demo only. Feel free to use any icon pack. Docs: https://bulma.io/documentation/elements/icon/ -->

    <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.9.95/css/materialdesignicons.min.css" />
    <?php echo $__env->yieldPushContent('scripts'); ?>
    
</body>

</html>
<?php /**PATH C:\laragon\www\adonis-abbey\resources\views/layouts/app.blade.php ENDPATH**/ ?>