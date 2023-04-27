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

    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon.png">
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
                            <a href="{{ route('board') }}" class="active">
                                <span data-feather="home" class="nav-icon"></span>
                                <span class="menu-text">Dashboard</span>

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
