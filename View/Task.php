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
                                <a class="nav-link" href="project-overview.html">Overview</a>
                            </li>
                            <li class="nav-item mx-3">
                                <a class="nav-link active" href="project-task.html">Task</a>
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
                    <div class="col-md-6 col-xl-3 col-12">
                        <!-- card  -->
                        <div class="card mb-4">
                            <!-- card body  -->
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <h4 class="mb-0">Task Summary</h4>
                                    </div>
                                    <!-- dropdown  -->
                                    <div>
                                        <span class="dropdown dropstart">
                                            <a
                                                class="btn-icon btn btn-ghost btn-sm rounded-circle"
                                                href="#"
                                                role="button"
                                                id="DropdownSeven"
                                                data-bs-toggle="dropdown"
                                                aria-haspopup="true"
                                                aria-expanded="false">
                                                <i class="fe fe-more-vertical"></i>
                                            </a>
                                            <span class="dropdown-menu" aria-labelledby="DropdownSeven">
                                                <span class="dropdown-header">Settings</span>
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                            </span>
                                        </span>
                                    </div>
                                </div>
                                <!-- text center  -->
                                <div class="text-center my-4">
                                    <h1 class="display-3 text-primary mb-0 fw-bold">50</h1>
                                    <p class="mb-0">Total Task Count</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3 col-12">
                        <!-- card  -->
                        <div class="card mb-4">
                            <!-- card body  -->
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <h4 class="mb-0">In Progress</h4>
                                    </div>
                                    <div>
                                        <!-- dropdown  -->
                                        <span class="dropdown dropstart">
                                            <a
                                                class="btn-icon btn btn-ghost btn-sm rounded-circle"
                                                href="#"
                                                role="button"
                                                id="DropdownEight"
                                                data-bs-toggle="dropdown"
                                                aria-haspopup="true"
                                                aria-expanded="false">
                                                <i class="fe fe-more-vertical"></i>
                                            </a>
                                            <span class="dropdown-menu" aria-labelledby="DropdownEight">
                                                <span class="dropdown-header">Settings</span>
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                            </span>
                                        </span>
                                    </div>
                                </div>
                                <!-- text center  -->
                                <div class="text-center my-4">
                                    <h1 class="display-3 text-info mb-0 fw-bold">12</h1>
                                    <p class="mb-0">
                                        <span class="text-dark fw-semibold">6</span>
                                        In Progress
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3 col-12">
                        <!-- card  -->
                        <div class="card mb-4">
                            <!-- card body  -->
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <h4 class="mb-0">Completed</h4>
                                    </div>
                                    <!-- dropdown  -->
                                    <div>
                                        <span class="dropdown dropstart">
                                            <a
                                                class="btn-icon btn btn-ghost btn-sm rounded-circle"
                                                href="#"
                                                role="button"
                                                id="DropdownNine"
                                                data-bs-toggle="dropdown"
                                                aria-haspopup="true"
                                                aria-expanded="false">
                                                <i class="fe fe-more-vertical"></i>
                                            </a>
                                            <span class="dropdown-menu" aria-labelledby="DropdownNine">
                                                <span class="dropdown-header">Settings</span>
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                            </span>
                                        </span>
                                    </div>
                                </div>
                                <!-- text center  -->
                                <div class="text-center my-4">
                                    <h1 class="display-3 text-success mb-0 fw-bold">30</h1>
                                    <p class="mb-0">
                                        <span class="text-dark fw-semibold">8</span>
                                        Today Completed
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3 col-12">
                        <!-- card  -->
                        <div class="card mb-4">
                            <!-- card body  -->
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <h4 class="mb-0">Overdue</h4>
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
                                <!-- text center  -->
                                <div class="text-center my-4">
                                    <h1 class="display-3 text-danger mb-0 fw-bold">8</h1>
                                    <p class="mb-0">
                                        <span class="text-dark fw-semibold">4</span>
                                        Yesterday
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- row  -->
                <div class="row">
                    <div class="col-xl-8 col-md-12 col-12 mb-4">
                        <!-- card  -->
                        <div class="card">
                            <!-- card body  -->
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <h4 class="mb-0">Task Summary</h4>
                                    </div>
                                    <!-- dropdown  -->
                                    <div>
                                        <span class="dropdown dropstart">
                                            <a
                                                class="btn-icon btn btn-ghost btn-sm rounded-circle"
                                                href="#"
                                                role="button"
                                                id="DropdownEleven"
                                                data-bs-toggle="dropdown"
                                                aria-haspopup="true"
                                                aria-expanded="false">
                                                <i class="fe fe-more-vertical"></i>
                                            </a>
                                            <span class="dropdown-menu" aria-labelledby="DropdownEleven">
                                                <span class="dropdown-header">Settings</span>
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                            </span>
                                        </span>
                                    </div>
                                </div>
                                <p class="mt-4 mb-0">New vs. Closed</p>
                                <!-- chart  -->
                                <div id="taskSummary"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-12 col-12 mb-4">
                        <!-- card  -->
                        <div class="card h-100">
                            <!-- card body  -->
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <div class="mb-4">
                                        <h4 class="mb-0">Task Completion Status</h4>
                                    </div>
                                    <div>
                                        <!-- dropdown  -->
                                        <span class="dropdown dropstart">
                                            <a
                                                class="btn-icon btn btn-ghost btn-sm rounded-circle"
                                                href="#"
                                                role="button"
                                                id="DropdownTwelve"
                                                data-bs-toggle="dropdown"
                                                aria-haspopup="true"
                                                aria-expanded="false">
                                                <i class="fe fe-more-vertical"></i>
                                            </a>
                                            <span class="dropdown-menu" aria-labelledby="DropdownTwelve">
                                                <span class="dropdown-header">Settings</span>
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                            </span>
                                        </span>
                                    </div>
                                </div>
                                <!-- chart  -->
                                <div id="taskStatus" class="d-flex justify-content-center"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-12 mb-4 mb-xl-0">
                        <!-- card  -->
                        <div class="card h-100">
                            <!-- card body  -->
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <h4 class="mb-0">Task by Sections</h4>
                                    </div>
                                    <div>
                                        <!-- dropdown  -->
                                        <span class="dropdown dropstart">
                                            <a
                                                class="btn-icon btn btn-ghost btn-sm rounded-circle"
                                                href="#"
                                                role="button"
                                                id="DropdownThirteen"
                                                data-bs-toggle="dropdown"
                                                aria-haspopup="true"
                                                aria-expanded="false">
                                                <i class="fe fe-more-vertical"></i>
                                            </a>
                                            <span class="dropdown-menu" aria-labelledby="DropdownThirteen">
                                                <span class="dropdown-header">Settings</span>
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                            </span>
                                        </span>
                                    </div>
                                </div>
                                <!-- chart  -->
                                <div id="taskSectionchart"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 col-12 mb-4 mb-xl-0">
                        <!-- card  -->
                        <div class="card h-100">
                            <!-- card header  -->
                            <div class="card-header">
                                <h4 class="mb-0">Upcoming task by Assignee</h4>
                            </div>
                            <!-- table  -->
                            <div class="table-responsive">
                                <table class="table text-nowrap mb-0 table-hover table-centered">
                                    <thead class="table-light">
                                        <tr>
                                            <th>Tasks</th>
                                            <th>End Date</th>
                                            <th>Status</th>
                                            <th>Progress</th>
                                            <th>Assignee</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Design Wireframes</td>
                                            <td>Set end date</td>
                                            <td><span class="badge bg-light-primary text-primary">In Review</span></td>
                                            <td>
                                                <div class="taskWireframeChart"></div>
                                            </td>
                                            <td><img src="../../assets/images/avatar/avatar-1.jpg" alt="" class="avatar avatar-xs rounded-circle" /></td>
                                            <td>
                                                <span class="dropdown dropstart">
                                                    <a
                                                        class="btn-icon btn btn-ghost btn-sm rounded-circle"
                                                        href="#"
                                                        role="button"
                                                        id="DropdownFourteen"
                                                        data-bs-toggle="dropdown"
                                                        aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <i class="fe fe-more-vertical"></i>
                                                    </a>
                                                    <span class="dropdown-menu" aria-labelledby="DropdownFourteen">
                                                        <span class="dropdown-header">Settings</span>
                                                        <a class="dropdown-item" href="#">Action</a>
                                                        <a class="dropdown-item" href="#">Another action</a>
                                                        <a class="dropdown-item" href="#">Something else here</a>
                                                    </span>
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Prototype design</td>
                                            <td>Aug 15, 2021</td>
                                            <td><span class="badge bg-light-info text-info">In Progress</span></td>
                                            <td>
                                                <div class="taskPrototypeChart"></div>
                                            </td>
                                            <td><img src="../../assets/images/avatar/avatar-2.jpg" alt="" class="avatar avatar-xs rounded-circle" /></td>
                                            <td>
                                                <span class="dropdown dropstart">
                                                    <a
                                                        class="btn-icon btn btn-ghost btn-sm rounded-circle"
                                                        href="#"
                                                        role="button"
                                                        id="DropdownFifteen"
                                                        data-bs-toggle="dropdown"
                                                        aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <i class="fe fe-more-vertical"></i>
                                                    </a>
                                                    <span class="dropdown-menu" aria-labelledby="DropdownFifteen">
                                                        <span class="dropdown-header">Settings</span>
                                                        <a class="dropdown-item" href="#">Action</a>
                                                        <a class="dropdown-item" href="#">Another action</a>
                                                        <a class="dropdown-item" href="#">Something else here</a>
                                                    </span>
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Content Writing</td>
                                            <td>Aug 16, 2021</td>
                                            <td><span class="badge bg-light-danger text-danger">Cancel</span></td>
                                            <td>
                                                <div class="taskContentChart"></div>
                                            </td>

                                            <td><img src="../../assets/images/avatar/avatar-3.jpg" alt="" class="avatar avatar-xs rounded-circle" /></td>
                                            <td>
                                                <span class="dropdown dropstart">
                                                    <a
                                                        class="btn-icon btn btn-ghost btn-sm rounded-circle"
                                                        href="#"
                                                        role="button"
                                                        id="DropdownSixteen"
                                                        data-bs-toggle="dropdown"
                                                        aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <i class="fe fe-more-vertical"></i>
                                                    </a>
                                                    <span class="dropdown-menu" aria-labelledby="DropdownSixteen">
                                                        <span class="dropdown-header">Settings</span>
                                                        <a class="dropdown-item" href="#">Action</a>
                                                        <a class="dropdown-item" href="#">Another action</a>
                                                        <a class="dropdown-item" href="#">Something else here</a>
                                                    </span>
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Figma to Bootstrap Conversion</td>
                                            <td>Aug 18, 2021</td>
                                            <td><span class="badge bg-primary-soft">In Review</span></td>
                                            <td>
                                                <div class="taskFigmaChart"></div>
                                            </td>
                                            <td><img src="../../assets/images/avatar/avatar-5.jpg" alt="" class="avatar avatar-xs rounded-circle" /></td>
                                            <td>
                                                <span class="dropdown dropstart">
                                                    <a
                                                        class="btn-icon btn btn-ghost btn-sm rounded-circle"
                                                        href="#"
                                                        role="button"
                                                        id="DropdownSeventeen"
                                                        data-bs-toggle="dropdown"
                                                        aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <i class="fe fe-more-vertical"></i>
                                                    </a>
                                                    <span class="dropdown-menu" aria-labelledby="DropdownSeventeen">
                                                        <span class="dropdown-header">Settings</span>
                                                        <a class="dropdown-item" href="#">Action</a>
                                                        <a class="dropdown-item" href="#">Another action</a>
                                                        <a class="dropdown-item" href="#">Something else here</a>
                                                    </span>
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>User Interface Design</td>
                                            <td>Aug 18, 2021</td>
                                            <td><span class="badge bg-primary-soft">In Review</span></td>
                                            <td>
                                                <div class="taskInterfaceChart"></div>
                                            </td>
                                            <td><img src="../../assets/images/avatar/avatar-6.jpg" alt="" class="avatar avatar-xs rounded-circle" /></td>
                                            <td>
                                                <span class="dropdown dropstart">
                                                    <a
                                                        class="btn-icon btn btn-ghost btn-sm rounded-circle"
                                                        href="#"
                                                        role="button"
                                                        id="DropdownEighteen"
                                                        data-bs-toggle="dropdown"
                                                        aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <i class="fe fe-more-vertical"></i>
                                                    </a>
                                                    <span class="dropdown-menu" aria-labelledby="DropdownEighteen">
                                                        <span class="dropdown-header">Settings</span>
                                                        <a class="dropdown-item" href="#">Action</a>
                                                        <a class="dropdown-item" href="#">Another action</a>
                                                        <a class="dropdown-item" href="#">Something else here</a>
                                                    </span>
                                                </span>
                                            </td>
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

    <!-- Js propiedad del proveedor -->
    <script src="../../assets/libs/tippy.js/dist/tippy-bundle.umd.min.js"></script>

    <script src="../../assets/js/vendors/tooltip.js"></script>

    <script src="../../assets/libs/apexcharts/dist/apexcharts.min.js"></script>
    <script src="../../assets/js/vendors/chart.js"></script>

</body>

</html>