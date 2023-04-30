<!doctype html>
<html lang="en" dir="ltr">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ICC Recovery</title>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap" rel="stylesheet">

    <!-- inject:css-->

    <link rel="stylesheet" href="/css/plugin.min.css">

    <link rel="stylesheet" href="/style.css">

    <!-- endinject -->

    <link rel="apple-touch-icon" sizes="180x180" href="/assets/images/favicons/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/images/favicons/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/images/favicons/favicon-16x16.png" />
</head>

<body class="layout-light side-menu overlayScroll">

    <main class="main-content">

        <aside class="sidebar-wrapper">
            <div class="sidebar sidebar-collapse" id="sidebar">
                <div class="sidebar__menu-group">
                    <ul class="sidebar_nav">
                        <li class="menu-title">
                            <span>Main menu</span>
                        </li>
                        <li class="">
                            <a href="{{ route('dashboard') }}" class="active">
                                <span data-feather="home" class="nav-icon"></span>
                                <span class="menu-text">Dashboard</span>

                            </a>

                        </li>



{{--
                        <li>
                            <a href="" class="">
                                <span data-feather="user" class="nav-icon"></span>
                                <span class="menu-text">Profile</span>
                            </a>
                        </li> --}}
                        <li>
                            <a href="{{ route('contact') }}" class="">
                                <span data-feather="message-square" class="nav-icon"></span>
                                <span class="menu-text">File A Complain</span>
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('draw') }}" class="">
                                <span data-feather="dollar-sign" class="nav-icon"></span>
                                <span class="menu-text">Withdrawal</span>
                            </a>
                        </li>



                        <li>
                            <a href="{{ route('logout') }}" class="">
                                <span data-feather="log-out" class="nav-icon"></span>
                                <span class="menu-text">Sign out</span>
                            </a>
                        </li>



                    </ul>
                </div>
            </div>

        </aside>
    </main>


</body>
