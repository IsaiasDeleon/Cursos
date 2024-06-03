<!doctype html>
<html lang="en">

<head>
    <link rel="stylesheet" href="../../assets/libs/flatpickr/dist/flatpickr.min.css">
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="Codescandy" />

    <!-- Favicon icon-->
    <link rel="shortcut icon" type="image/x-icon" href="../../assets/images/favicon/favicon.ico" />

    <!-- darkmode js -->
    <script src="./js/darkMode.js"></script>

    <!-- Libs CSS -->
    <link href="./css/feather.css" rel="stylesheet" />
    <link href="./css/bootstrap-icons.min.css" rel="stylesheet" />
    <link href="./css/simplebar.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Theme CSS -->
    <link rel="stylesheet" href="./css/theme.min.css">

    <!-- <link rel="canonical" href="https://geeksui.codescandy.com/geeks/pages/dashboard/admin-dashboard.html"> -->
    <link href="./css/tiny-slider.css" rel="stylesheet" />
    <title>Dashboard Administrativo</title>
</head>

<body>
    <!-- Wrapper -->
    <div id="db-wrapper">
        <!-- navbar vertical -->
        <!-- Sidebar -->
<!--MENU-->
<?php include 'componentes/Menu.php' ?>

        <!-- Page Content -->
        <main id="page-content">
            <div class="header">
<!-- navbar -->
<nav class="navbar-default navbar navbar-expand-lg">
    <a id="nav-toggle" href="#">
        <i class="fe fe-menu"></i>
    </a>
    <div class="ms-lg-3 d-none d-md-none d-lg-block">
        <!-- Form -->
        <form class="d-flex align-items-center">
            <span class="position-absolute ps-3 search-icon">
                <i class="fe fe-search"></i>
            </span>
            <input type="search" class="form-control ps-6" placeholder="Search Entire Dashboard" />
        </form>
    </div>
    <!--Navbar nav -->
    <div class="ms-auto d-flex">
        <div class="dropdown">
            <button class="btn btn-light btn-icon rounded-circle d-flex align-items-center" type="button" aria-expanded="false" data-bs-toggle="dropdown" aria-label="Toggle theme (auto)">
                <i class="bi theme-icon-active"></i>
                <span class="visually-hidden bs-theme-text">Toggle theme</span>
            </button>
            <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="bs-theme-text">
                <li>
                    <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="light" aria-pressed="false">
                        <i class="bi theme-icon bi-sun-fill"></i>
                        <span class="ms-2">Light</span>
                    </button>
                </li>
                <li>
                    <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark" aria-pressed="false">
                        <i class="bi theme-icon bi-moon-stars-fill"></i>
                        <span class="ms-2">Dark</span>
                    </button>
                </li>
                <li>
                    <button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="auto" aria-pressed="true">
                        <i class="bi theme-icon bi-circle-half"></i>
                        <span class="ms-2">Auto</span>
                    </button>
                </li>
            </ul>
        </div>
        <ul class="navbar-nav navbar-right-wrap ms-2 d-flex nav-top-wrap">
            <li class="dropdown stopevent">
                <a
                    class="btn btn-light btn-icon rounded-circle indicator indicator-primary"
                    href="#"
                    role="button"
                    id="dropdownNotification"
                    data-bs-toggle="dropdown"
                    aria-haspopup="true"
                    aria-expanded="false">
                    <i class="fe fe-bell"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-lg" aria-labelledby="dropdownNotification">
                    <div>
                        <div class="border-bottom px-3 pb-3 d-flex justify-content-between align-items-center">
                            <span class="h4 mb-0">Notifications</span>
                            <a href="# ">
                                <span class="align-middle">
                                    <i class="fe fe-settings me-1"></i>
                                </span>
                            </a>
                        </div>
                        <!-- List group -->
                        <ul class="list-group list-group-flush" data-simplebar style="max-height: 300px">
                            <li class="list-group-item bg-light">
                                <div class="row">
                                    <div class="col">
                                        <a class="text-body" href="#">
                                            <div class="d-flex">
                                                <img src="../../assets/images/avatar/avatar-1.jpg" alt="" class="avatar-md rounded-circle" />
                                                <div class="ms-3">
                                                    <h5 class="fw-bold mb-1">Kristin Watson:</h5>
                                                    <p class="mb-3">Krisitn Watsan like your comment on course Javascript Introduction!</p>
                                                    <span class="fs-6">
                                                        <span>
                                                            <span class="fe fe-thumbs-up text-success me-1"></span>
                                                            2 hours ago,
                                                        </span>
                                                        <span class="ms-1">2:19 PM</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-auto text-center me-2">
                                        <a href="#" class="badge-dot bg-info" data-bs-toggle="tooltip" data-bs-placement="top" title="Mark as read"></a>
                                        <div>
                                            <a href="#" class="bg-transparent" data-bs-toggle="tooltip" data-bs-placement="top" title="Remove">
                                                <i class="fe fe-x"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col">
                                        <a class="text-body" href="#">
                                            <div class="d-flex">
                                                <img src="../../assets/images/avatar/avatar-2.jpg" alt="" class="avatar-md rounded-circle" />
                                                <div class="ms-3">
                                                    <h5 class="fw-bold mb-1">Brooklyn Simmons</h5>
                                                    <p class="mb-3">Just launched a new Courses React for Beginner.</p>
                                                    <span class="fs-6">
                                                        <span>
                                                            <span class="fe fe-thumbs-up text-success me-1"></span>
                                                            Oct 9,
                                                        </span>
                                                        <span class="ms-1">1:20 PM</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-auto text-center me-2">
                                        <a href="#" class="badge-dot bg-secondary" data-bs-toggle="tooltip" data-bs-placement="top" title="Mark as unread"></a>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col">
                                        <a class="text-body" href="#">
                                            <div class="d-flex">
                                                <img src="../../assets/images/avatar/avatar-3.jpg" alt="" class="avatar-md rounded-circle" />
                                                <div class="ms-3">
                                                    <h5 class="fw-bold mb-1">Jenny Wilson</h5>
                                                    <p class="mb-3">Krisitn Watsan like your comment on course Javascript Introduction!</p>
                                                    <span class="fs-6">
                                                        <span>
                                                            <span class="fe fe-thumbs-up text-info me-1"></span>
                                                            Oct 9,
                                                        </span>
                                                        <span class="ms-1">1:56 PM</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-auto text-center me-2">
                                        <a href="#" class="badge-dot bg-secondary" data-bs-toggle="tooltip" data-bs-placement="top" title="Mark as unread"></a>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col">
                                        <a class="text-body" href="#">
                                            <div class="d-flex">
                                                <img src="../../assets/images/avatar/avatar-4.jpg" alt="" class="avatar-md rounded-circle" />
                                                <div class="ms-3">
                                                    <h5 class="fw-bold mb-1">Sina Ray</h5>
                                                    <p class="mb-3">You earn new certificate for complete the Javascript Beginner course.</p>
                                                    <span class="fs-6">
                                                        <span>
                                                            <span class="fe fe-award text-warning me-1"></span>
                                                            Oct 9,
                                                        </span>
                                                        <span class="ms-1">1:56 PM</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-auto text-center me-2">
                                        <a href="#" class="badge-dot bg-secondary" data-bs-toggle="tooltip" data-bs-placement="top" title="Mark as unread"></a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <div class="border-top px-3 pt-3 pb-0">
                            <a href="../../pages/notification-history.html" class="text-link fw-semibold">See all Notifications</a>
                        </div>
                    </div>
                </div>
            </li>
            <!-- List -->
            <li class="dropdown ms-2">
                <a class="rounded-circle" href="#" role="button" id="dropdownUser" data-bs-toggle="dropdown" aria-expanded="false">
                    <div class="avatar avatar-md avatar-indicators avatar-online">
                        <img alt="avatar" src="../../assets/images/avatar/avatar-1.jpg" class="rounded-circle" />
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownUser">
                    <div class="dropdown-item">
                        <div class="d-flex">
                            <div class="avatar avatar-md avatar-indicators avatar-online">
                                <img alt="avatar" src="../../assets/images/avatar/avatar-1.jpg" class="rounded-circle" />
                            </div>
                            <div class="ms-3 lh-1">
                                <h5 class="mb-1">Annette Black</h5>
                                <p class="mb-0">annette@geeksui.com</p>
                            </div>
                        </div>
                    </div>
                    <div class="dropdown-divider"></div>
                    <ul class="list-unstyled">
                        <li class="dropdown-submenu dropstart-lg">
                            <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="#">
                                <i class="fe fe-circle me-2"></i>
                                Status
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item" href="#">
                                        <span class="badge-dot bg-success me-2"></span>
                                        Online
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">
                                        <span class="badge-dot bg-secondary me-2"></span>
                                        Offline
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">
                                        <span class="badge-dot bg-warning me-2"></span>
                                        Away
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">
                                        <span class="badge-dot bg-danger me-2"></span>
                                        Busy
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a class="dropdown-item" href="../../pages/profile-edit.html">
                                <i class="fe fe-user me-2"></i>
                                Profile
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="../../pages/student-subscriptions.html">
                                <i class="fe fe-star me-2"></i>
                                Subscription
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">
                                <i class="fe fe-settings me-2"></i>
                                Settings
                            </a>
                        </li>
                    </ul>
                    <div class="dropdown-divider"></div>
                    <ul class="list-unstyled">
                        <li>
                            <a class="dropdown-item" href="../../index.html">
                                <i class="fe fe-power me-2"></i>
                                Sign Out
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
</nav>
</div>

            <!-- Container fluid -->
            <section class="container-fluid p-4">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-12 mb-2">
                        <!-- Page header -->
                        <div class="d-lg-flex align-items-center justify-content-between">
                            <div class="mb-2 mb-lg-0">
                                <h1 class="mb-0 h2 fw-bold">Geeks UI - Design & Development</h1>
                            </div>
                            <div class="d-flex align-items-center">
                                <!-- avatar group -->
                                <div class="avatar-group">
                                    <span class="avatar avatar-md">
                                        <!-- avatar  -->
                                        <img alt="avatar" src="../../assets/images/avatar/avatar-1.jpg" class="rounded-circle imgtooltip" data-template="one" />
                                        <span id="one" class="d-none">
                                            <small class="fw-semibold">Paul Haney</small>
                                        </span>
                                    </span>
                                    <!-- avatar  -->
                                    <span class="avatar avatar-md">
                                        <img alt="avatar" src="../../assets/images/avatar/avatar-2.jpg" class="rounded-circle imgtooltip" data-template="two" />
                                        <span id="two" class="d-none">
                                            <small class="fw-semibold">Gali Linear</small>
                                        </span>
                                    </span>
                                    <!-- avatar  -->
                                    <span class="avatar avatar-md">
                                        <img alt="avatar" src="../../assets/images/avatar/avatar-3.jpg" class="rounded-circle imgtooltip" data-template="three" />
                                        <span id="three" class="d-none">
                                            <small class="fw-semibold">Mary Holler</small>
                                        </span>
                                    </span>
                                    <!-- avatar  -->
                                    <span class="avatar avatar-md">
                                        <img alt="avatar" src="../../assets/images/avatar/avatar-4.jpg" class="rounded-circle imgtooltip" data-template="four" />
                                        <span id="four" class="d-none">
                                            <small class="fw-semibold">Lio Nordal</small>
                                        </span>
                                    </span>
                                    <!-- avatar  -->
                                    <span class="avatar avatar-md">
                                        <span class="avatar-initials rounded-circle bg-light text-dark">5+</span>
                                    </span>
                                </div>
                                <!-- icon  -->
                                <a href="#" class="btn btn-icon btn-white border border-2 rounded-circle btn-dashed ms-2">+</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- row  -->
                <div class="row">
                    <div class="col-12 mb-4">
                        <!-- nav  -->
                        <ul class="nav nav-lb-tab">
                            <li class="nav-item ms-0 me-3">
                                <a class="nav-link active" href="project-overview.html">Overview</a>
                            </li>
                            <li class="nav-item mx-3">
                                <a class="nav-link" href="project-task.html">Task</a>
                            </li>
                            <li class="nav-item mx-3">
                                <a class="nav-link" href="project-budget.html">Budget</a>
                            </li>
                            <li class="nav-item mx-3">
                                <a class="nav-link" href="project-files.html">Files</a>
                            </li>
                            <li class="nav-item mx-3">
                                <a class="nav-link" href="project-team.html">Team</a>
                            </li>
                            <li class="nav-item mx-3">
                                <a class="nav-link" href="project-summary.html">Summary</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-xl-8 col-12">
                        <div class="row">
                            <div class="col-12 mb-4">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div>
                                                <h4 class="mb-0">Project Summary</h4>
                                            </div>
                                            <!-- dropdown  -->
                                            <div>
                                                <span class="dropdown dropstart">
                                                    <a
                                                        class="btn-icon btn btn-ghost btn-sm rounded-circle"
                                                        href="#"
                                                        role="button"
                                                        id="DropdownTen"
                                                        data-bs-toggle="dropdown"
                                                        aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <i class="fe fe-more-vertical"></i>
                                                    </a>
                                                    <span class="dropdown-menu" aria-labelledby="DropdownTen">
                                                        <span class="dropdown-header">Settings</span>
                                                        <a class="dropdown-item" href="#">Action</a>
                                                        <a class="dropdown-item" href="#">Another action</a>
                                                        <a class="dropdown-item" href="#">Something else here</a>
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <p>
                                            Give a high-level overview of the product / project you re working on, its goals, etc..Elaborate on the target audience of your project/product, link
                                            out to additional resources. Vivamus pretium laoreet massa eu euismod. Nunc accumsan id odio sed luctus. Suspendisse a lacus sed ex consequat interdum
                                            quis non eros. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis labore nam fuga sapiente vel iste animiicta ab at placeat sint.
                                        </p>

                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item px-0">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div class="d-flex align-items-center">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar4 text-primary" viewBox="0 0 16 16">
                                                            <path
                                                                d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5
                              0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0
                              1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1
                              2-2h1V.5a.5.5 0 0 1 .5-.5zM2 2a1 1 0 0
                              0-1 1v1h14V3a1 1 0 0 0-1-1H2zm13 3H1v9a1
                              1 0 0 0 1 1h12a1 1 0 0 0 1-1V5z" />
                                                        </svg>
                                                        <div class="ms-2">
                                                            <h5 class="mb-0 text-body">Start Date</h5>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <div>
                                                            <p class="text-dark mb-0 fw-semibold">01 Jan, 2021</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item px-0">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div class="d-flex align-items-center">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar4 text-primary" viewBox="0 0 16 16">
                                                            <path
                                                                d="M3.5 0a.5.5 0 0 1
                              .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0
                              1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0
                              1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1
                              .5-.5zM2 2a1 1 0 0 0-1 1v1h14V3a1 1 0
                              0 0-1-1H2zm13 3H1v9a1 1 0 0 0 1 1h12a1
                              1 0 0 0 1-1V5z" />
                                                        </svg>
                                                        <div class="ms-2">
                                                            <h5 class="mb-0 text-body">End Date</h5>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <div>
                                                            <p class="text-dark mb-0 fw-semibold">30 Dec, 2021</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item px-0">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div class="d-flex align-items-center">
                                                        <svg
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            width="18"
                                                            height="18"
                                                            fill="currentColor"
                                                            class="bi bi-clock text-primary"
                                                            viewBox="0 0 16
                        16">
                                                            <path
                                                                d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5
                          0 0 0 .252.434l3.5 2a.5.5 0 0 0
                          .496-.868L8 8.71V3.5z" />
                                                            <path
                                                                d="M8 16A8 8 0 1 0 8 0a8 8 0
                            0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7
                            0 0 1 14 0z" />
                                                        </svg>
                                                        <div class="ms-2">
                                                            <h5 class="mb-0 text-body">Estimate Time</h5>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <div>
                                                            <p class="text-dark mb-0 fw-semibold">30 Days</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item px-0 pb-0">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div class="d-flex align-items-center">
                                                        <svg
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            width="18"
                                                            height="18"
                                                            fill="currentColor"
                                                            class="bi bi-currency-dollar text-primary"
                                                            viewBox="0 0 16 16">
                                                            <path
                                                                d="M4 10.781c.148 1.667
                            1.513 2.85 3.591
                            3.003V15h1.043v-1.216c2.27-.179
                            3.678-1.438 3.678-3.3
                            0-1.59-.947-2.51-2.956-3.028l-.722-.187V3.467c1.122.11
                            1.879.714 2.07
                            1.616h1.47c-.166-1.6-1.54-2.748-3.54-2.875V1H7.591v1.233c-1.939.23-3.27
                            1.472-3.27 3.156 0 1.454.966
                            2.483 2.661
                            2.917l.61.162v4.031c-1.149-.17-1.94-.8-2.131-1.718H4zm3.391-3.836c-1.043-.263-1.6-.825-1.6-1.616
                            0-.944.704-1.641
                            1.8-1.828v3.495l-.2-.05zm1.591
                            1.872c1.287.323 1.852.859
                            1.852 1.769 0 1.097-.826
                            1.828-2.2
                            1.939V8.73l.348.086z" />
                                                        </svg>
                                                        <div class="ms-2">
                                                            <h5 class="mb-0 text-body">Cost</h5>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <div>
                                                            <p class="text-dark mb-0 fw-semibold">$18,000</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12 mb-4">
                                <!-- card -->
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="mb-0">Budget</h4>
                                    </div>
                                    <!-- card body -->

                                    <!-- row -->
                                    <div class="row">
                                        <!-- col -->
                                        <div class="col-lg-4 col-md-12 col-12">
                                            <div class="d-flex align-items-center justify-content-between p-4">
                                                <div>
                                                    <h2 class="h1 fw-bold mb-0">$52,000</h2>
                                                    <p class="mb-0">Total Budget</p>
                                                </div>
                                                <div class="ms-3">
                                                    <div class="icon-shape icon-lg bg-light-primary text-primary rounded-circle">
                                                        <i class="fe fe-dollar-sign fs-3"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- col -->
                                        <div class="col-lg-4 col-md-12 col-12 border-start-md">
                                            <div class="d-flex align-items-center justify-content-between p-4">
                                                <div>
                                                    <h2 class="h1 fw-bold mb-0">$43,230</h2>
                                                    <p class="mb-0">Total Spent</p>
                                                </div>
                                                <div class="ms-3">
                                                    <div class="icon-shape icon-lg bg-light-danger text-danger rounded-circle">
                                                        <i class="fe fe-shopping-cart fs-3"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- col -->
                                        <div class="col-lg-4 col-md-12 col-12 border-start-md">
                                            <div class="d-flex align-items-center justify-content-between p-4">
                                                <div>
                                                    <h2 class="h1 fw-bold mb-0">$8,770</h2>
                                                    <p class="mb-0">Remaining</p>
                                                </div>
                                                <div class="ms-3">
                                                    <div class="icon-shape icon-lg bg-light-success text-success rounded-circle">
                                                        <i class="fe fe-pie-chart fs-3"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 mb-4">
                                <!-- card -->
                                <div class="card">
                                    <!-- card body -->

                                    <div class="card-header">
                                        <h4 class="mb-0">Upcoming Deadlines</h4>
                                    </div>
                                    <!-- table -->
                                    <div class="table-responsive overflow-y-hidden">
                                        <table class="table mb-0 text-nowrap table-hover table-centered">
                                            <thead class="table-light">
                                                <tr>
                                                    <th>Member</th>
                                                    <th>Task</th>
                                                    <th>Deadline</th>
                                                    <th>Workload</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="avatar avatar-sm">
                                                                <img src="../../assets/images/avatar/avatar-2.jpg" alt="" class="rounded-circle" />
                                                            </div>
                                                            <div class="ms-2">
                                                                <h5 class="mb-0">Eleanor Pena</h5>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>Design a Geeks UI Figma</td>
                                                    <td>30 Aug, 2021</td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="progress w-100" style="height: 6px">
                                                                <div
                                                                    class="progress-bar bg-success"
                                                                    role="progressbar"
                                                                    style="width: 62%"
                                                                    aria-valuenow="62"
                                                                    aria-valuemin="0"
                                                                    aria-valuemax="100"></div>
                                                            </div>
                                                            <div class="ms-2"><span>62%</span></div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="avatar avatar-sm">
                                                                <img src="../../assets/images/avatar/avatar-3.jpg" alt="" class="rounded-circle" />
                                                            </div>
                                                            <div class="ms-2">
                                                                <h5 class="mb-0">Marvin McKinney</h5>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>Geeks UI Webpack Workflow</td>
                                                    <td>24 Sept, 2022</td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="progress w-100" style="height: 6px">
                                                                <div
                                                                    class="progress-bar bg-success"
                                                                    role="progressbar"
                                                                    style="width: 45%"
                                                                    aria-valuenow="45"
                                                                    aria-valuemin="0"
                                                                    aria-valuemax="100"></div>
                                                            </div>
                                                            <div class="ms-2"><span>45%</span></div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="avatar avatar-sm">
                                                                <img src="../../assets/images/avatar/avatar-4.jpg" alt="" class="rounded-circle" />
                                                            </div>
                                                            <div class="ms-2">
                                                                <h5 class="mb-0">Wade Warren</h5>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>Geeks UI React version</td>
                                                    <td>30 Sept, 2022</td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="progress w-100" style="height: 6px">
                                                                <div
                                                                    class="progress-bar bg-success"
                                                                    role="progressbar"
                                                                    style="width: 80%"
                                                                    aria-valuenow="80"
                                                                    aria-valuemin="0"
                                                                    aria-valuemax="100"></div>
                                                            </div>
                                                            <div class="ms-2"><span>80%</span></div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="avatar avatar-sm">
                                                                <img src="../../assets/images/avatar/avatar-5.jpg" alt="" class="rounded-circle" />
                                                            </div>
                                                            <div class="ms-2">
                                                                <h5 class="mb-0">Courtney Henry</h5>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>Geeks UI Documents Improve</td>
                                                    <td>20 Dec, 2021</td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="progress w-100" style="height: 6px">
                                                                <div
                                                                    class="progress-bar bg-success"
                                                                    role="progressbar"
                                                                    style="width: 10%"
                                                                    aria-valuenow="10"
                                                                    aria-valuemin="0"
                                                                    aria-valuemax="100"></div>
                                                            </div>
                                                            <div class="ms-2"><span>10%</span></div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="avatar avatar-sm">
                                                                <img src="../../assets/images/avatar/avatar-6.jpg" alt="" class="rounded-circle" />
                                                            </div>
                                                            <div class="ms-2">
                                                                <h5 class="mb-0">Brooklyn Simmons</h5>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>Ecommerce Design Geeks UI</td>
                                                    <td>25 Jan, 2022</td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="progress w-100" style="height: 6px">
                                                                <div
                                                                    class="progress-bar bg-success"
                                                                    role="progressbar"
                                                                    style="width: 8%"
                                                                    aria-valuenow="8"
                                                                    aria-valuemin="0"
                                                                    aria-valuemax="100"></div>
                                                            </div>
                                                            <div class="ms-2"><span>8%</span></div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-xl-4 col-12">
                        <!-- card  -->
                        <div class="card mb-4 bg-primary border-primary">
                            <!-- card body  -->
                            <div class="card-body">
                                <h4 class="card-title text-white">Launch Date</h4>

                                <!-- dropdown  -->
                                <div class="d-flex justify-content-between align-items-center mt-8">
                                    <div>
                                        <h1 class="display-4 text-white mb-1">121 Days</h1>
                                        <p class="mb-0 text-white">15 December, Friday</p>
                                    </div>
                                    <div>
                                        <i class="fe fe-flag fs-1 text-light-primary"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- card  -->
                        <div class="card mb-4">
                            <!-- card body  -->
                            <div class="card-body">
                                <h4 class="card-title">Overall Progress</h4>

                                <div id="progressChart"></div>
                            </div>
                        </div>
                        <div class="card">
                            <!-- Card header -->
                            <div class="card-header card-header-height d-flex justify-content-between align-items-center">
                                <div>
                                    <h4 class="mb-0">Recent Activity</h4>
                                </div>
                                <div><a href="#">View All</a></div>
                            </div>
                            <!-- Card body -->
                            <div class="card-body">
                                <!-- List group -->
                                <ul class="list-group list-group-flush list-timeline-activity">
                                    <li class="list-group-item px-0 pt-0 border-0 pb-6">
                                        <div class="row position-relative">
                                            <div class="col-auto">
                                                <div class="icon-shape icon-md bg-light-primary text-primary rounded-circle">
                                                    <i class="fe fe-check"></i>
                                                </div>
                                            </div>
                                            <div class="col ms-n3">
                                                <h4 class="mb-0 h5">Task Finished</h4>
                                                <p class="mb-0 text-body">Paula finished figma task</p>
                                            </div>
                                            <div class="col-auto">
                                                <span class="fs-6">2 mins ago</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item px-0 pt-0 border-0 pb-6">
                                        <div class="row position-relative">
                                            <div class="col-auto">
                                                <div class="icon-shape icon-md bg-light-primary text-primary rounded-circle">
                                                    <i class="fe fe-message-square"></i>
                                                </div>
                                            </div>
                                            <div class="col ms-n3">
                                                <h4 class="mb-0 h5">New Comment</h4>
                                                <p class="mb-0 text-body">Georg commented on task.</p>
                                            </div>
                                            <div class="col-auto">
                                                <span class="fs-6">1 hour ago</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item px-0 pt-0 border-0 pb-6">
                                        <div class="row position-relative">
                                            <div class="col-auto">
                                                <div class="icon-shape icon-md bg-light-primary text-primary rounded-circle">
                                                    <i class="fe fe-alert-triangle"></i>
                                                </div>
                                            </div>
                                            <div class="col ms-n3">
                                                <h4 class="mb-0 h5">Task Overdue</h4>
                                                <p class="mb-0 text-body">
                                                    Task
                                                    <a href="#"><u>status updatd for board</u></a>
                                                    is overdue.
                                                </p>
                                            </div>
                                            <div class="col-auto">
                                                <span class="fs-6">1 day</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item px-0 pt-0 border-0">
                                        <div class="row position-relative">
                                            <div class="col-auto">
                                                <div class="icon-shape icon-md bg-light-primary text-primary rounded-circle">
                                                    <i class="fe fe-mail"></i>
                                                </div>
                                            </div>
                                            <div class="col ms-n3">
                                                <h4 class="mb-0 h5">Update Send to Client</h4>
                                                <p class="mb-0 text-body">Jitu send email to update design for client Geeks UI.</p>
                                            </div>
                                            <div class="col-auto">
                                                <span class="fs-6">1 day</span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </div>

    <!-- Scripts -->
    <!-- Libs JS -->
    <script src="./js/popper.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/simplebar.min.js"></script>

    <!-- Theme JS -->
    <script src="./js/theme.min.js"></script>

    <!-- Js propio del proveedor -->
    <script src="../../assets/libs/tippy.js/dist/tippy-bundle.umd.min.js"></script>

    <script src="../../assets/js/vendors/tooltip.js"></script>

    <script src="../../assets/libs/apexcharts/dist/apexcharts.min.js"></script>
    <script src="../../assets/js/vendors/chart.js"></script>

</body>

</html>