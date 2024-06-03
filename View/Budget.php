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
                            <!-- avatar group -->
                            <div class="d-flex align-items-center">
                                <div class="avatar-group">
                                    <!-- avatar -->
                                    <span class="avatar avatar-md">
                                        <!-- img -->
                                        <img alt="avatar" src="../../assets/images/avatar/avatar-1.jpg" class="rounded-circle imgtooltip" data-template="one" />
                                        <span id="one" class="d-none">
                                            <small class="fw-semibold">Paul Haney</small>
                                        </span>
                                    </span>
                                    <!-- avatar -->
                                    <span class="avatar avatar-md">
                                        <!-- img -->
                                        <img alt="avatar" src="../../assets/images/avatar/avatar-2.jpg" class="rounded-circle imgtooltip" data-template="two" />
                                        <span id="two" class="d-none">
                                            <small class="fw-semibold">Gali Linear</small>
                                        </span>
                                    </span>
                                    <!-- avatar -->
                                    <span class="avatar avatar-md">
                                        <!-- img -->
                                        <img alt="avatar" src="../../assets/images/avatar/avatar-3.jpg" class="rounded-circle imgtooltip" data-template="three" />
                                        <span id="three" class="d-none">
                                            <small class="fw-semibold">Mary Holler</small>
                                        </span>
                                    </span>
                                    <!-- avatar -->
                                    <span class="avatar avatar-md">
                                        <!-- img -->
                                        <img alt="avatar" src="../../assets/images/avatar/avatar-4.jpg" class="rounded-circle imgtooltip" data-template="four" />
                                        <span id="four" class="d-none">
                                            <small class="fw-semibold">Lio Nordal</small>
                                        </span>
                                    </span>
                                    <!-- avatar -->
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
                <!-- row -->
                <div class="row">
                    <!-- col -->
                    <div class="col-12 mb-4">
                        <!-- nav -->
                        <ul class="nav nav-lb-tab">
                            <!-- nav link -->
                            <li class="nav-item ms-0 me-3">
                                <a class="nav-link" href="project-overview.html">Overview</a>
                            </li>
                            <li class="nav-item mx-3">
                                <a class="nav-link" href="project-task.html">Task</a>
                            </li>
                            <!-- nav link -->
                            <li class="nav-item mx-3">
                                <a class="nav-link active" href="project-budget.html">Budget</a>
                            </li>
                            <!-- nav link -->
                            <li class="nav-item mx-3">
                                <a class="nav-link" href="project-files.html">Files</a>
                            </li>
                            <!-- nav link -->
                            <li class="nav-item mx-3">
                                <a class="nav-link" href="project-team.html">Team</a>
                            </li>
                            <!-- nav link -->
                            <li class="nav-item mx-3">
                                <a class="nav-link" href="project-summary.html">Summary</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 mb-4">
                        <!-- card -->
                        <div class="card">
                            <!-- card body -->
                            <div>
                                <!-- row -->
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="border-bottom p-4">
                                            <h3 class="mb-4 card-title">Budget</h3>
                                            <div class="d-flex justify-content-between mb-3">
                                                <div>
                                                    <span>
                                                        <span class="text-dark fw-bold">$52,000</span>
                                                        (Total)
                                                    </span>
                                                </div>
                                                <div>
                                                    <span>
                                                        <span class="text-dark fw-bold">$8,770</span>
                                                        Remaining
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="progress" style="height: 8px">
                                                <div class="progress-bar" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                                <div class="progress-bar bg-success" role="progressbar" style="width: 18%" aria-valuenow="18" aria-valuemin="0" aria-valuemax="100"></div>
                                                <div class="progress-bar bg-danger" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                <div class="progress-bar bg-warning" role="progressbar" style="width: 16%" aria-valuenow="16" aria-valuemin="0" aria-valuemax="100"></div>
                                                <div class="progress-bar bg-info" role="progressbar" style="width: 22%" aria-valuenow="22" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- col -->
                                    <div class="col-lg-4 col-md-12 col-12">
                                        <div class="d-flex align-items-center justify-content-between p-4">
                                            <div class="mb-4 mb-lg-0">
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
                                    <div class="col-lg-4 col-md-12 col-12 border-start">
                                        <div class="d-flex align-items-center justify-content-between p-4">
                                            <div class="mb-4 mb-lg-0">
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
                                    <div class="col-lg-4 col-md-12 col-12 border-start">
                                        <div class="d-flex align-items-center justify-content-between p-4">
                                            <div class="mb-4 mb-lg-0">
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
                    </div>
                </div>
                <!-- row -->
                <div class="row">
                    <!-- col -->
                    <div class="col-lg-6 mb-4">
                        <div class="card h-100">
                            <div class="card-body">
                                <h4 class="mb-3">Expenses</h4>
                                <div id="budgetExpenseChart"></div>
                            </div>
                        </div>
                    </div>
                    <!-- col -->
                    <div class="col-lg-6 mb-4">
                        <!-- card -->
                        <div class="card h-100">
                            <!-- card body -->
                            <!-- card header -->
                            <div class="card-header">
                                <h4 class="mb-0">Budget Category</h4>
                            </div>
                            <!-- row -->

                            <!-- table -->
                            <div class="table-responsive">
                                <table class="table text-nowrap mb-0 table-centered table-hover">
                                    <thead class="table-light">
                                        <tr>
                                            <th>Category</th>
                                            <th>Total</th>
                                            <th>Percentage</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" fill="currentColor" class="bi bi-square-fill text-warning me-2" viewBox="0 0 16 16">
                                                    <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2z" />
                                                </svg>
                                                Design
                                            </td>
                                            <td>$9000.00</td>
                                            <td>23%</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" fill="currentColor" class="bi bi-square-fill text-info me-2" viewBox="0 0 16 16">
                                                    <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2z" />
                                                </svg>
                                                Saas Services
                                            </td>
                                            <td>$4500.00</td>
                                            <td>10%</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" fill="currentColor" class="bi bi-square-fill text-danger me-2" viewBox="0 0 16 16">
                                                    <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2z" />
                                                </svg>
                                                Development
                                            </td>
                                            <td>$9030.00</td>
                                            <td>23.5%</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" fill="currentColor" class="bi bi-square-fill text-primary me-2" viewBox="0 0 16 16">
                                                    <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2z" />
                                                </svg>
                                                SEO
                                            </td>
                                            <td>$6800.00</td>
                                            <td>18%</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" fill="currentColor" class="bi bi-square-fill text-info me-2" viewBox="0 0 16 16">
                                                    <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2z" />
                                                </svg>
                                                Entertainment
                                            </td>
                                            <td>$2400.00</td>
                                            <td>4%</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" fill="currentColor" class="bi bi-square-fill text-success me-2" viewBox="0 0 16 16">
                                                    <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2z" />
                                                </svg>
                                                Marketing
                                            </td>
                                            <td>$8320.00</td>
                                            <td>19%</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" fill="currentColor" class="bi bi-square-fill text-info me-2" viewBox="0 0 16 16">
                                                    <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2z" />
                                                </svg>
                                                Extra
                                            </td>
                                            <td>$2000.00</td>
                                            <td>3.5%</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- row -->
                <div class="row">
                    <!-- col -->
                    <div class="col-12">
                        <!-- card -->
                        <div class="card">
                            <!-- card header -->
                            <div class="card-header">
                                <h4 class="mb-0">Budget Details</h4>
                            </div>
                            <!-- table -->
                            <div class="table-responsive">
                                <table class="table text-nowrap mb-0 table-hover table-centered">
                                    <thead class="table-light">
                                        <tr>
                                            <th>Type</th>
                                            <th>Total Budget</th>
                                            <th>Expenses (USD)</th>
                                            <th>Expenses(%)</th>
                                            <th>Remaining(USD)</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" fill="currentColor" class="bi bi-square-fill text-success me-2" viewBox="0 0 16 16">
                                                    <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2z" />
                                                </svg>
                                                Concept
                                            </td>
                                            <td>$12,000</td>
                                            <td>$6,500</td>
                                            <td>
                                                52%
                                                <i class="bi bi-arrow-up text-danger"></i>
                                            </td>
                                            <td>$5500</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" fill="currentColor" class="bi bi-square-fill text-warning me-2" viewBox="0 0 16 16">
                                                    <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2z" />
                                                </svg>
                                                Design
                                            </td>
                                            <td>$18,000</td>
                                            <td>$8,000</td>
                                            <td>
                                                45%
                                                <i class="bi bi-arrow-down text-success"></i>
                                            </td>
                                            <td>$10,000</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" fill="currentColor" class="bi bi-square-fill text-danger me-2" viewBox="0 0 16 16">
                                                    <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2z" />
                                                </svg>
                                                Development
                                            </td>
                                            <td>$64,000</td>
                                            <td>$38,000</td>
                                            <td>
                                                54%
                                                <i class="bi bi-arrow-down text-success"></i>
                                            </td>
                                            <td>$34,000</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" fill="currentColor" class="bi bi-square-fill text-primary me-2" viewBox="0 0 16 16">
                                                    <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2z" />
                                                </svg>
                                                SEO
                                            </td>
                                            <td>$8,000</td>
                                            <td>$3,000</td>
                                            <td>
                                                65%
                                                <i class="bi bi-arrow-down text-success"></i>
                                            </td>
                                            <td>$5,000</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" fill="currentColor" class="bi bi-square-fill text-info me-2" viewBox="0 0 16 16">
                                                    <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2z" />
                                                </svg>
                                                Extra
                                            </td>
                                            <td>$2,000</td>
                                            <td>$1,500</td>
                                            <td>
                                                85%
                                                <i class="bi bi-arrow-up text-danger"></i>
                                            </td>
                                            <td>$500</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" fill="currentColor" class="bi bi-square-fill text-success me-2" viewBox="0 0 16 16">
                                                    <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2z" />
                                                </svg>
                                                Marketing
                                            </td>
                                            <td>$34,500</td>
                                            <td>$24,500</td>
                                            <td>
                                                88%
                                                <i class="bi bi-arrow-up text-danger"></i>
                                            </td>
                                            <td>$10,000</td>
                                        </tr>
                                    </tbody>
                                </table>
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

    <!-- Js del proveedor -->
    <script src="../../assets/libs/tippy.js/dist/tippy-bundle.umd.min.js"></script>

    <script src="../../assets/js/vendors/tooltip.js"></script>

    <script src="../../assets/libs/apexcharts/dist/apexcharts.min.js"></script>
    <script src="../../assets/js/vendors/chart.js"></script>

</body>

</html>