<!DOCTYPE html>
<html
    lang="en"
    class="light-style layout-menu-fixed"
    dir="ltr"
    data-theme="theme-default"
    data-assets-path="../assets/"
    data-template="vertical-menu-template-free"
>
<head>
    <meta charset="utf-8" />
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>Dashboard | TroVato HUB</title>

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-FRZFYEXM5Z"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-FRZFYEXM5Z');
</script>
    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{asset('/assets/img/favicon/favicon.ico')}}" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.48.0/apexcharts.min.js" integrity="sha512-wqcdhB5VcHuNzKcjnxN9wI5tB3nNorVX7Zz9NtKBxmofNskRC29uaQDnv71I/zhCDLZsNrg75oG8cJHuBvKWGw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
{{--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.48.0/apexcharts.min.css" integrity="sha512-qc0GepkUB5ugt8LevOF/K2h2lLGIloDBcWX8yawu/5V8FXSxZLn3NVMZskeEyOhlc6RxKiEj6QpSrlAoL1D3TA==" crossorigin="anonymous" referrerpolicy="no-referrer" />--}}
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet"
    />
    <meta http-equiv="refresh" content="600; url=http://admin.asharaloshop.xyz/welcome/{{$id->id}}">
    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="../assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="../assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <link rel="stylesheet" href="../assets/vendor/libs/apex-charts/apex-charts.css" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="../assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../assets/js/config.js"></script>

    <style>
        .apexcharts-tooltip-custom .additional-info {
            color: black; /* Change text color to black */
            font-weight: bold; /* Optional: Adjust font weight */
        }
    </style>
</head>

<body>
<!-- Layout wrapper -->
<div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
        <!-- Menu -->

        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
            <div class="app-brand demo">
                <a href="{{route('welcome',['id'=>$id->id])}}" class="app-brand-link">
              <span class="app-brand-logo ">

                  <img src="{{asset('leaf.PNG')}}" width="50px" height="70px">

                </span>
                </a>
                <span class="app-brand-text menu-text ms-2"><img src="{{asset('logo.PNG')}}" width="130px" height="50px"></span>

                <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
                    <i class="bx bx-chevron-left bx-sm align-middle"></i>
                </a>
            </div>

            <div class="menu-inner-shadow"></div>

            <ul class="menu-inner py-1">
                <!-- Dashboard -->
                <li class="menu-item active">
                    <a href="{{route('welcome',['id'=>$id->id])}}" class="menu-link">
                        <i class="menu-icon tf-icons bx bx-home-circle"></i>
                        <div data-i18n="Analytics">Dashboard</div>
                    </a>
                </li>

                <!-- Layouts -->
                <li class="menu-item">
                    <a href="javascript:void(0);" class="menu-link menu-toggle">
                        <i class="menu-icon tf-icons bx bx-receipt"></i>
                        <div data-i18n="Layouts">Orders</div>
                    </a>

                    <ul class="menu-sub">
                        <li class="menu-item">
                            <a href="{{route('pendingOrders',['id'=>$id->id])}}" class="menu-link">
                                <div data-i18n="Without menu">Pending Orders</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="{{route('deliveredOrders',['id'=>$id->id])}}" class="menu-link">
                                <div data-i18n="Without navbar">Delivered Orders</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="{{route('users',['id'=>$id->id])}}" class="menu-link">
                                <div data-i18n="Container">Users</div>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="menu-header small text-uppercase">
                    <span class="menu-header-text">Category & Sub-Category</span>
                </li>
                <li class="menu-item">
                    <a href="javascript:void(0);" class="menu-link menu-toggle">
                        <i class="menu-icon tf-icons bx bx-category"></i>
                        <div data-i18n="Account Settings">Category</div>
                    </a>
                    <ul class="menu-sub">
                        <li class="menu-item">
                            <a href="{{route('category',['id'=>$id->id])}}" class="menu-link">
                                <div data-i18n="Account">Insert</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="{{route('category-update',['id'=>$id->id])}}" class="menu-link">
                                <div data-i18n="Notifications">Update</div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="menu-item">
                    <a href="javascript:void(0);" class="menu-link menu-toggle">
                        <i class="menu-icon tf-icons bx bx-subdirectory-right"></i>
                        <div data-i18n="Authentications">Sub-Category</div>
                    </a>
                    <ul class="menu-sub">
                        <li class="menu-item">
                            <a href="{{route('sub-category',['id'=>$id->id])}}" class="menu-link">
                                <div data-i18n="Basic">Insert</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="{{route('subcategoryUpdate',['id'=>$id->id])}}" class="menu-link">
                                <div data-i18n="Basic">Update</div>
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- Components -->
                <li class="menu-header small text-uppercase"><span class="menu-header-text">Products</span></li>
                <!-- Cards -->
                <li class="menu-item">
                    <a href="{{route('productsIndex',['id'=>$id->id])}}" class="menu-link">
                        <i class="menu-icon tf-icons bx bxs-package"></i>
                        <div data-i18n="Basic">Add Products</div>
                    </a>
                </li>
                <!-- User interface -->
                <li class="menu-item">
                    <a href="javascript:void(0)" class="menu-link menu-toggle">
                        <i class="menu-icon tf-icons bx bxl-dropbox"></i>
                        <div data-i18n="User interface">Products Details</div>
                    </a>
                    <ul class="menu-sub">
                        <li class="menu-item">
                            <a href="{{route('mostSelling',['id'=>$id->id])}}" class="menu-link">
                                <div data-i18n="Accordion">Most Selling</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="{{route('lessSelling',['id'=>$id->id])}}" class="menu-link">
                                <div data-i18n="Alerts">Less Selling</div>
                            </a>
                        </li>
                    </ul>
                </li>



                <!-- Forms & Tables -->
                <li class="menu-header small text-uppercase"><span class="menu-header-text"></span></li>
                <!-- Forms -->
                <li class="menu-item">

                    <a href="{{route('logout')}}" class="menu-link">
                        <i class="menu-icon tf-icons bx bx-log-out"></i>
                        <div data-i18n="Form Elements">Logout</div>
                    </a>
                </li>
            </ul>
        </aside>
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
            <!-- Navbar -->

            <nav
                class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
                id="layout-navbar"
            >
                <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
                    <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                        <i class="bx bx-menu bx-sm"></i>
                    </a>
                </div>

            </nav>

            <!-- / Navbar -->

            <!-- Content wrapper -->
            <div class="content-wrapper">
                <!-- Content -->

                <div class="container-xxl flex-grow-1 container-p-y">
                    <div class="row">
                        <div class="col-lg-12 mb-4 order-0">
                            <div class="card">
                                <div class="d-flex align-items-end row">
                                    <div class="col-sm-7">
                                        <div class="card-body">
                                            <h5 class="card-title text-primary">Welcome Admin! 🎉</h5>
                                            <p class="mb-4">
                                                Today you have <span class="fw-bold">{{$todayOrder}}</span> order and transaction received <span class="fw-bold">{{$todayPrice}} Tk</span> in bkash, nagad, rocket.
                                                <span class="fw-bold">{{$cash}} Tk On The Way</span> . Check the pending order right now.
                                            </p>

                                            <a href="{{route('pendingOrders',['id'=>$id->id])}}" class="btn btn-sm btn-outline-primary">Orders List</a>
                                        </div>
                                    </div>
                                    <div class="col-sm-5 text-center text-sm-left">
                                        <div class="card-body pb-0 px-0 px-md-4">
                                            <img
                                                src="../assets/img/illustrations/man-with-laptop-light.png"
                                                height="140"
                                                alt="View Badge User"
                                                data-app-dark-img="illustrations/man-with-laptop-dark.png"
                                                data-app-light-img="illustrations/man-with-laptop-light.png"
                                            />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="card-title d-flex align-items-start justify-content-between">
                                                        <div class="avatar flex-shrink-0">
                                                            <img src="{{asset('Bkash.png')}}" alt="chart success" class="rounded">
                                                        </div>
                                                        <div class="dropdown">
                                                            <button class="btn p-0" type="button" id="cardOpt3" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <!-- <i class="bx bx-dots-vertical-rounded"></i> -->
                                                            </button>
                                                            <!-- <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                                                                <a class="dropdown-item" href="javascript:void(0);">View More</a>
                                                                <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                                            </div> -->
                                                        </div>
                                                    </div>
                                                    <span class="fw-semibold d-block mb-1">Bkash</span>
                                                    <h3 class="card-title mb-2">৳{{$total}}</h3>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="card-title d-flex align-items-start justify-content-between">
                                                        <div class="avatar flex-shrink-0">
                                                            <img src="{{asset('Nagad.png')}}" alt="Credit Card" class="rounded">
                                                        </div>
                                                        <div class="dropdown">
                                                            <button class="btn p-0" type="button" id="cardOpt6" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <!-- <i class="bx bx-dots-vertical-rounded"></i> -->
                                                            </button>
                                                            <!-- <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt6">
                                                                <a class="dropdown-item" href="javascript:void(0);">View More</a>
                                                                <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                                            </div> -->
                                                        </div>
                                                    </div>
                                                    <span>Nagad</span>
                                                    <h3 class="card-title text-nowrap mb-1">৳{{$nagad}}</h3>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="card-title d-flex align-items-start justify-content-between">
                                                        <div class="avatar flex-shrink-0">
                                                            <img src="{{asset('Rocket.png')}}" alt="Credit Card" class="rounded">
                                                        </div>
                                                        <div class="dropdown">
                                                            <button class="btn p-0" type="button" id="cardOpt6" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <!-- <i class="bx bx-dots-vertical-rounded"></i> -->
                                                            </button>
                                                            <!-- <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt6">
                                                                <a class="dropdown-item" href="javascript:void(0);">View More</a>
                                                                <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                                            </div> -->
                                                        </div>
                                                    </div>
                                                    <span>Rocket</span>
                                                    <h3 class="card-title text-nowrap mb-1">৳{{$rocket}}</h3>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="card-title d-flex align-items-start justify-content-between">
                                                        <div class="avatar flex-shrink-0">
                                                            <img src="{{asset('COD.png')}}" alt="Credit Card" class="rounded">
                                                        </div>
                                                        <div class="dropdown">
                                                            <button class="btn p-0" type="button" id="cardOpt6" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <!-- <i class="bx bx-dots-vertical-rounded"></i> -->
                                                            </button>
                                                            <!-- <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt6">
                                                                <a class="dropdown-item" href="javascript:void(0);">View More</a>
                                                                <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                                            </div> -->
                                                        </div>
                                                    </div>
                                                    <span>Cash On Delivery</span>
                                                    <h3 class="card-title text-nowrap mb-1">৳{{$cod}}</h3>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Add content for the remaining two cards similar to the above two cards -->
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--/ Total Revenue -->
{{--                        <div class="col-12 col-md-8 col-lg-4 order-3 order-md-2">--}}
{{--                            <div class="row">--}}
{{--                                <div class="col-4 mb-4">--}}
{{--                                    <div class="card">--}}
{{--                                        <div class="card-body">--}}
{{--                                            <div class="card-title d-flex align-items-start justify-content-between">--}}
{{--                                                <div class="avatar flex-shrink-0">--}}
{{--                                                    <img src="../assets/img/icons/unicons/paypal.png" alt="Credit Card" class="rounded" />--}}
{{--                                                </div>--}}
{{--                                                <div class="dropdown">--}}
{{--                                                    <button--}}
{{--                                                        class="btn p-0"--}}
{{--                                                        type="button"--}}
{{--                                                        id="cardOpt4"--}}
{{--                                                        data-bs-toggle="dropdown"--}}
{{--                                                        aria-haspopup="true"--}}
{{--                                                        aria-expanded="false"--}}
{{--                                                    >--}}
{{--                                                        <i class="bx bx-dots-vertical-rounded"></i>--}}
{{--                                                    </button>--}}
{{--                                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt4">--}}
{{--                                                        <a class="dropdown-item" href="javascript:void(0);">View More</a>--}}
{{--                                                        <a class="dropdown-item" href="javascript:void(0);">Delete</a>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <span class="d-block mb-1">Rocket</span>--}}
{{--                                            <h3 class="card-title text-nowrap mb-2">৳{{$rocket}}</h3>--}}
{{--                                            <small class="text-danger fw-semibold"><i class="bx bx-down-arrow-alt"></i> -14.82%</small>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="col-12 mb-4">--}}
{{--                                    <div class="card">--}}
{{--                                        <div class="card-body">--}}
{{--                                            <div class="card-title d-flex align-items-start justify-content-between">--}}
{{--                                                <div class="avatar flex-shrink-0">--}}
{{--                                                    <img src="../assets/img/icons/unicons/cc-primary.png" alt="Credit Card" class="rounded" />--}}
{{--                                                </div>--}}
{{--                                                <div class="dropdown">--}}
{{--                                                    <button--}}
{{--                                                        class="btn p-0"--}}
{{--                                                        type="button"--}}
{{--                                                        id="cardOpt1"--}}
{{--                                                        data-bs-toggle="dropdown"--}}
{{--                                                        aria-haspopup="true"--}}
{{--                                                        aria-expanded="false"--}}
{{--                                                    >--}}
{{--                                                        <i class="bx bx-dots-vertical-rounded"></i>--}}
{{--                                                    </button>--}}
{{--                                                    <div class="dropdown-menu" aria-labelledby="cardOpt1">--}}
{{--                                                        <a class="dropdown-item" href="javascript:void(0);">View More</a>--}}
{{--                                                        <a class="dropdown-item" href="javascript:void(0);">Delete</a>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <span class="fw-semibold d-block mb-1">COD</span>--}}
{{--                                            <h3 class="card-title mb-2">$14,857</h3>--}}
{{--                                            <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +28.14%</small>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                    </div>
                    <div class="row">
                        <!-- Order Statistics -->
                        <div class="col-md-6 col-lg-4 col-xl-4 order-0 mb-4">
                            <div class="card h-100">
                                <div class="card-header d-flex align-items-center justify-content-between pb-0">
                                    <div class="card-title mb-0">
                                        <h5 class="m-0 me-2">Order Statistics</h5>
                                        <small class="text-muted">{{$totalSales}} Total Sales</small>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <div class="d-flex flex-column align-items-center gap-1">
                                            <h2 class="mb-2">{{$totalOrders}}</h2>
                                            <span>Total Orders</span>
                                        </div>
                                        <div id="orderStatisticsChart"></div>
                                    </div>
                                    <ul class="p-0 m-0">
                                        @foreach($most as $mostest)
                                            <li class="d-flex mb-4 pb-1">
                                                <div class="avatar flex-shrink-0 me-3"><span class="avatar-initial rounded bg-label-primary">
                                                        <img src="{{asset('storage/'.$mostest->image)}}">
                                                    </span>
                                                </div>
                                                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                                    <div class="me-2">
                                                        <h6 class="mb-0">{{$mostest->product_name}}</h6>
                                                    </div>
                                                    <div class="user-progress">
                                                        <small class="fw-semibold">{{$mostest->total_sold}}</small>
                                                    </div>
                                                </div>
                                            </li>

                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>





                        <!--/ Order Statistics -->

                        <!-- Expense Overview -->
                        <div class="col-md-6 col-lg-4 order-1 mb-4">
                            <div class="card h-100">
                                <div class="card-header">
                                    <ul class="nav nav-pills" role="tablist">
                                        <li class="nav-item">
                                            <button
                                                type="button"
                                                class="nav-link active"
                                                role="tab"
                                                data-bs-toggle="tab"
                                                data-bs-target="#navs-tabs-line-card-income"
                                                aria-controls="navs-tabs-line-card-income"
                                                aria-selected="true"
                                            >
                                                Income
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                                <div class="card-body px-0">
                                    <div class="tab-content p-0">
                                        <div class="tab-pane fade show active" id="navs-tabs-line-card-income" role="tabpanel">
                                            <div class="d-flex p-4 pt-3">
                                                <div class="avatar flex-shrink-0 me-3">
                                                    <img src="../assets/img/icons/unicons/wallet.png" alt="User" />
                                                </div>
                                                <div>
                                                    <small class="text-muted d-block">Total Balance</small>
                                                    <div class="d-flex align-items-center">
                                                        <h6 class="mb-0 me-1">{{$totalIncome}}</h6>

                                                    </div>
                                                </div>
                                            </div>
                                            <div id="incomeChart"></div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/ Expense Overview -->

                        <!-- Transactions -->
                        <div class="col-md-6 col-lg-4 order-2 mb-4">
                            <div class="card h-100">
                                <div class="card-header d-flex align-items-center justify-content-between">
                                    <h5 class="card-title m-0 me-2">Transactions</h5>

                                </div>
                                <div class="card-body">
                                    <ul class="p-0 m-0">
                                        @foreach($totals as $tota)
                                        <li class="d-flex mb-4 pb-1">
                                            <div class="avatar flex-shrink-0 me-3">
                                                @if($tota->payment == 'bKash')
                                                    <img src="{{asset('Bkash.png')}}" alt="User" class="rounded" />
                                                @elseif($tota->payment == 'nagad')
                                                    <img src="{{asset('Nagad.png')}}" alt="User" class="rounded" />
                                                @elseif($tota->payment == 'rocket')
                                                    <img src="{{asset('Rocket.png')}}" alt="User" class="rounded" />
                                                @elseif($tota->payment == 'cod')
                                                    <img src="{{asset('COD.png')}}" alt="User" class="rounded" />
                                                @endif
                                            </div>
                                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                                <div class="me-2">
{{--                                                    <small class="text-muted d-block mb-1">Paypal</small>--}}
                                                    <h6 class="mb-0">{{$tota->payment}}</h6>
                                                </div>
                                                <div class="user-progress d-flex align-items-center gap-1">
                                                    <h6 class="mb-0">{{$tota->total_amount}}</h6>
                                                    <span class="text-muted">TK</span>
                                                </div>
                                            </div>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--/ Transactions -->
                    </div>
                </div>
                <!-- / Content -->

                <!-- Footer -->
                <footer class="content-footer footer bg-footer-theme">
                    <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                        <div class="mb-2 mb-md-0">
                            ©
                            <script>
                                document.write(new Date().getFullYear());
                            </script>
                            All Copyright Reserved by Ashar Alo Shop || Developed ❤️ by
                            <a href="https://www.trodev.com" target="_blank" class="footer-link fw-bolder">Trodev</a>
                        </div>

                    </div>
                </footer>
                <!-- / Footer -->

                <div class="content-backdrop fade"></div>
            </div>
            <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
    </div>

    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>
</div>
<!-- / Layout wrapper -->



<!-- Core JS -->
<!-- build:js assets/vendor/js/core.js -->
<script src="../assets/vendor/libs/jquery/jquery.js"></script>
<script src="../assets/vendor/libs/popper/popper.js"></script>
<script src="../assets/vendor/js/bootstrap.js"></script>
<script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

<script src="../assets/vendor/js/menu.js"></script>
<!-- endbuild -->

<!-- Vendors JS -->
<script src="../assets/vendor/libs/apex-charts/apexcharts.js"></script>

<!-- Main JS -->
<script src="../assets/js/main.js"></script>

<!-- Page JS -->

<script>
    'use strict';

    const cardColor = config.colors.white;
    const headingColor = config.colors.headingColor;
    const axisColor = config.colors.axisColor;
    const borderColor = config.colors.borderColor;
    let shadeColor;

    const chartOrderStatistics = document.querySelector('#orderStatisticsChart');

    const labels = <?php echo json_encode($most->pluck('product_name')); ?>;
    const series = <?php echo json_encode($most->pluck('total_sold')); ?>;


    const orderChartConfig = {
        chart: {
            height: 165,
            width: 130,
            type: 'donut'
        },
        labels: labels,
        series: series,
        colors: [config.colors.primary, config.colors.secondary, config.colors.info, config.colors.success],
        stroke: {
            width: 5,
            colors: cardColor
        },
        dataLabels: {
            enabled: false,
            formatter: function (val, opt) {
                return parseInt(val) + '%';
            }
        },
        legend: {
            show: false
        },
        grid: {
            padding: {
                top: 0,
                bottom: 0,
                right: 15
            }
        },
        plotOptions: {
            pie: {
                donut: {
                    size: '75%',
                    labels: {
                        show: true,
                        value: {
                            fontSize: '1.5rem',
                            fontFamily: 'Public Sans',
                            color: headingColor,
                            offsetY: -15,
                            formatter: function (val) {
                                return parseInt(val) + '%';
                            }
                        },
                        name: {
                            offsetY: 20,
                            fontFamily: 'Public Sans'
                        },
                        total: {
                            show: true,
                            fontSize: '0.8125rem',
                            color: axisColor,
                            formatter: function (w) {
                                // Convert series values to numbers and then sum them up
                                const total = series.map(Number).reduce((acc, val) => acc + val, 0);
                                return total.toString()+"%";
                            }
                        }
                    }
                }
            }
        }
    };

    if (typeof chartOrderStatistics !== 'undefined' && chartOrderStatistics !== null) {
        const statisticsChart = new ApexCharts(chartOrderStatistics, orderChartConfig);
        statisticsChart.render();
    }



    const incomeChartEl = document.querySelector('#incomeChart');

    const monthlyIncomeData = {!! json_encode($monthlyIncomes) !!};
    const maxIncome = {!! json_encode($maxIncome) !!} ;
    const incomeChartConfig = {
        series: [{
            name: 'Monthly Income',
            data: monthlyIncomeData
        }],
        chart: {
            height: 350,
            type: 'line',
            zoom: {
                enabled: false
            },
            toolbar: {
                show: false
            }
        },
        dataLabels: {
            enabled: false
        },
        stroke: {
            curve: 'smooth',
            width: 3
        },
        markers: {
            size: 5,
            colors: config.colors.primary,
            strokeColors: '#fff',
            strokeWidth: 2,
            hover: {
                sizeOffset: 4
            }
        },
        colors: [config.colors.primary],
        xaxis: {
            categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sept', 'Oct', 'Nov', 'Dec'],
            labels: {
                style: {
                    fontSize: '12px',
                    colors: axisColor
                }
            }
        },
        yaxis: {
            min: 0,
            tickAmount: 5,
            labels: {
                style: {
                    fontSize: '12px',
                    colors: axisColor
                }
            }
        },
        tooltip: {
            theme: 'black',
            marker: {
                show: true
            },
            custom: function({ series, seriesIndex, dataPointIndex, w }) {
                const month = w.globals.labels[dataPointIndex];
                const income = series[seriesIndex][dataPointIndex];
                return '<div class="apexcharts-tooltip-custom">' +
                    '<span>Month: ' + month + '</span>' +
                    '<span>Income: Tk' + income + '</span>' +
                    '<span class="additional-info">Monthly Income: Tk' + income + '</span>' +
                    '</div>';
            }
        },
        grid: {
            borderColor: borderColor,
            strokeDashArray: 3,
            padding: {
                top: 20,
                bottom: 10,
                left: 20,
                right: 20
            }
        }
    };


    if (typeof incomeChartEl !== 'undefined' && incomeChartEl !== null) {
        const incomeChart = new ApexCharts(incomeChartEl, incomeChartConfig);
        incomeChart.render();

        incomeChartEl.addEventListener('mousemove', function(event) {
            const markers = document.querySelectorAll('.apexcharts-marker');

            markers.forEach(marker => {
                marker.addEventListener('mouseenter', function() {
                    // Show additional information when hovering over the marker
                    const customInfo = document.querySelector('#customInfo');
                    customInfo.textContent = 'Monthly Income: Tk.' + monthlyIncomeData[marker.getAttribute('index')]; // Display monthly income
                    customInfo.style.display = 'block';
                });

                marker.addEventListener('mouseleave', function() {
                    // Hide additional information when leaving the marker
                    const customInfo = document.querySelector('#customInfo');
                    customInfo.style.display = 'none';
                });
            });
        });
    }




</script>

<script src="../assets/js/dashboards-analytics.js"></script>

<!-- Place this tag in your head or just before your close body tag. -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
</body>
</html>
