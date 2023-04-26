<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <!--jQuery-->
    <script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
    <!-- Bootstrap and Bootstrap Rtl -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap-rtl.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <!-- Custom css -->
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
</head>
<body>
        <!-- Start Navbar -->
    <nav class="navbar navbar-expand-sm bg-light navbar-light">
        <div class="container">
            <a href="index.php" class="navbar-brand">تدويناتي</a>
            <button class="navbar-toggler" data-toggle="collapse" data-target="#menu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="menu">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="#" class="nav-link">عن المدونة</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">شروحات</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">منوعات</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">تواصل معنا</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->

