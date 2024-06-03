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
                    <div class="col-lg-12 col-md-12 col-12">
                        <!-- Page header -->
                        <div class="border-bottom pb-3 mb-3 d-md-flex align-items-center justify-content-between">
                            <div class="mb-2 mb-lg-0">
                                <h1 class="mb-0 h2 fw-bold">Projects</h1>
                                <!-- Breadcrumb -->
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item">
                                            <a href="admin-dashboard.html">Dashboard</a>
                                        </li>
                                        <li class="breadcrumb-item">
                                            <a href="#">Project</a>
                                        </li>
                                        <li class="breadcrumb-item active" aria-current="page">List</li>
                                    </ol>
                                </nav>
                            </div>
                            <!-- button -->
                            <div>
                                <a href="#" class="btn btn-primary me-2" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight">Create a Project</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- row -->
                <div class="row justify-content-md-between mb-4 mb-xl-0 gx-3">
                    <!-- col -->
                    <div class="col-xl-2 col-lg-4 col-md-6 col-12">
                        <!-- search -->
                        <div class="mb-lg-4 mb-2">
                            <input type="search" class="form-control" placeholder="Search by project name ">
                        </div>
                    </div>
                    <div class="col-xxl-1 col-lg-2 col-md-6 col-12">
                        <!-- Custom select -->
                        <select class="form-select">
                            <option value="">Filter</option>
                            <option value="In Progress">In Progress</option>
                            <option value="Pending">Pending</option>
                            <option value="Modified">Modified</option>
                            <option value="Finished">Finished</option>
                            <option value="Cancel">Cancel</option>
                        </select>
                    </div>
                </div>
                <!-- row -->
                <div class="row">
                    <!-- col -->
                    <div class="col-12">
                        <!-- card -->
                        <div class="card">
                            <!-- table -->
                            <div class="table-responsive overflow-y-hidden">
                                <table class="table mb-0 text-nowrap table-hover table-centered">
                                    <thead class="">
                                        <tr>
                                            <th>Project Name</th>
                                            <th>Dates</th>
                                            <th>Budget</th>
                                            <th>Task Progress</th>
                                            <th>Status</th>
                                            <th>Team</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="icon-shape icon-lg rounded-3 border p-4">
                                                        <i class="fe fe-layout fs-3"></i>
                                                    </div>
                                                    <div class="ms-3">
                                                        <h4 class="mb-0"><a href="#" class="text-inherit">Web Application Design</a></h4>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>01 Jan, 2022</td>
                                            <td>$22,000</td>

                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="me-2"><span>80%</span></div>
                                                    <div class="progress w-100" style="height: 6px">
                                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <span class="badge bg-info-soft">In Progress</span>
                                            </td>
                                            <td>
                                                <div class="avatar-group">
                                                    <!-- avatar -->
                                                    <span class="avatar avatar-md">
                                                        <!-- img -->
                                                        <img alt="avatar" src="../../assets/images/avatar/avatar-1.jpg" class="rounded-circle imgtooltip" data-template="one ">
                                                        <span id="one" class="d-none">
                                                            <small class="fw-semibold">Paul Haney</small>
                                                        </span>
                                                    </span>
                                                    <!-- avatar -->
                                                    <span class="avatar avatar-md">
                                                        <!-- img -->
                                                        <img alt="avatar" src="../../assets/images/avatar/avatar-2.jpg" class="rounded-circle imgtooltip" data-template="two ">
                                                        <span id="two" class="d-none">
                                                            <small class="fw-semibold">Gali Linear</small>
                                                        </span>
                                                    </span>
                                                    <!-- avatar -->
                                                    <span class="avatar avatar-md">
                                                        <!-- img -->
                                                        <img alt="avatar" src="../../assets/images/avatar/avatar-3.jpg" class="rounded-circle imgtooltip" data-template="holler ">
                                                        <span id="holler" class="d-none">
                                                            <small class="fw-semibold">Mary Holler</small>
                                                        </span>
                                                    </span>
                                                    <!-- avatar -->
                                                    <span class="avatar avatar-md">
                                                        <!-- img -->
                                                        <img alt="avatar" src="../../assets/images/avatar/avatar-4.jpg" class="rounded-circle imgtooltip" data-template="nordal ">
                                                        <span id="nordal" class="d-none">
                                                            <small class="fw-semibold">Lio Nordal</small>
                                                        </span>
                                                    </span>
                                                    <!-- avatar -->
                                                    <span class="avatar avatar-md">
                                                        <span class="avatar-initials rounded-circle bg-light text-dark">5+</span>
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="dropdown dropstart">
                                                    <a
                                                        class="btn-icon btn btn-ghost btn-sm rounded-circle"
                                                        href="#"
                                                        role="button"
                                                        id="Dropdown1"
                                                        data-bs-toggle="dropdown"
                                                        aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <i class="fe fe-more-vertical"></i>
                                                    </a>
                                                    <div class="dropdown-menu" aria-labelledby="Dropdown1">
                                                        <span class="dropdown-header">Settings</span>
                                                        <a class="dropdown-item" href="#">
                                                            <i class="fe fe-edit dropdown-item-icon"></i>
                                                            Edit Details
                                                        </a>

                                                        <a class="dropdown-item" href="#">
                                                            <i class="fe fe-link dropdown-item-icon"></i>
                                                            Copy project link
                                                        </a>
                                                        <a class="dropdown-item" href="#">
                                                            <i class="fe fe-save dropdown-item-icon"></i>
                                                            Save as Default
                                                        </a>
                                                        <a class="dropdown-item" href="#">
                                                            <i class="fe fe-copy dropdown-item-icon"></i>
                                                            Duplicate
                                                        </a>
                                                        <a class="dropdown-item" href="#">
                                                            <i class="fe fe-layout dropdown-item-icon"></i>
                                                            Convert to Template
                                                        </a>

                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="#">
                                                            <i class="fe fe-upload dropdown-item-icon"></i>
                                                            Import
                                                        </a>
                                                        <a class="dropdown-item" href="#">
                                                            <i class="fe fe-printer dropdown-item-icon"></i>
                                                            Export / Print
                                                        </a>
                                                        <a class="dropdown-item" href="#">
                                                            <i class="fe fe-users dropdown-item-icon"></i>
                                                            Move to another team
                                                        </a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="#">
                                                            <i class="fe fe-archive dropdown-item-icon"></i>
                                                            Archive
                                                        </a>
                                                        <a class="dropdown-item" href="#">
                                                            <i class="fe fe-trash dropdown-item-icon"></i>
                                                            Delete Project
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="icon-shape icon-lg rounded-3 border p-4">
                                                        <i class="fe fe-clipboard fs-3"></i>
                                                    </div>
                                                    <div class="ms-3">
                                                        <h4 class="mb-0"><a href="#" class="text-inherit">Task Application Development..</a></h4>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>20 Nov, 2022</td>
                                            <td>$20,000</td>

                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="me-2"><span>100%</span></div>
                                                    <div class="progress w-100" style="height: 6px">
                                                        <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <span class="badge bg-success-soft">Completed</span>
                                            </td>
                                            <td>
                                                <div class="avatar-group">
                                                    <span class="avatar avatar-md avatar-primary imgtooltip" data-template="textFour">
                                                        <span class="avatar-initials rounded-circle">GK</span>

                                                        <span id="textFour" class="d-none">
                                                            <span class="fw-semibold">Geeks Only</span>
                                                        </span>
                                                    </span>

                                                    <span class="avatar avatar-md">
                                                        <img alt="avatar" src="../../assets/images/avatar/avatar-5.jpg" class="rounded-circle imgtooltip" data-template="three ">
                                                        <span id="linear" class="d-none">
                                                            <span class="fw-semibold">Gali Linear</span>
                                                        </span>
                                                    </span>
                                                    <span class="avatar avatar-md">
                                                        <img alt="avatar" src="../../assets/images/avatar/avatar-6.jpg" class="rounded-circle imgtooltip" data-template="holler ">
                                                        <span id="holler" class="d-none">
                                                            <span class="fw-semibold">Mary Holler</span>
                                                        </span>
                                                    </span>
                                                    <span class="avatar avatar-md">
                                                        <span class="avatar-initials rounded-circle bg-light text-dark">8+</span>
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="dropdown dropstart">
                                                    <a
                                                        class="btn-icon btn btn-ghost btn-sm rounded-circle"
                                                        href="#"
                                                        role="button"
                                                        id="Dropdown2"
                                                        data-bs-toggle="dropdown"
                                                        aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <i class="fe fe-more-vertical"></i>
                                                    </a>
                                                    <div class="dropdown-menu" aria-labelledby="Dropdown2">
                                                        <span class="dropdown-header">Settings</span>
                                                        <a class="dropdown-item" href="#">
                                                            <i class="fe fe-edit dropdown-item-icon"></i>
                                                            Edit Details
                                                        </a>

                                                        <a class="dropdown-item" href="#">
                                                            <i class="fe fe-link dropdown-item-icon"></i>
                                                            Copy project link
                                                        </a>
                                                        <a class="dropdown-item" href="#">
                                                            <i class="fe fe-save dropdown-item-icon"></i>
                                                            Save as Default
                                                        </a>
                                                        <a class="dropdown-item" href="#">
                                                            <i class="fe fe-copy dropdown-item-icon"></i>
                                                            Duplicate
                                                        </a>
                                                        <a class="dropdown-item" href="#">
                                                            <i class="fe fe-layout dropdown-item-icon"></i>
                                                            Convert to Template
                                                        </a>

                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="#">
                                                            <i class="fe fe-upload dropdown-item-icon"></i>
                                                            Import
                                                        </a>
                                                        <a class="dropdown-item" href="#">
                                                            <i class="fe fe-printer dropdown-item-icon"></i>
                                                            Export / Print
                                                        </a>
                                                        <a class="dropdown-item" href="#">
                                                            <i class="fe fe-users dropdown-item-icon"></i>
                                                            Move to another team
                                                        </a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="#">
                                                            <i class="fe fe-archive dropdown-item-icon"></i>
                                                            Archive
                                                        </a>
                                                        <a class="dropdown-item" href="#">
                                                            <i class="fe fe-trash dropdown-item-icon"></i>
                                                            Delete Project
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="icon-shape icon-lg rounded-3 border p-4">
                                                        <i class="fe fe-users fs-3"></i>
                                                    </div>
                                                    <div class="ms-3">
                                                        <h4 class="mb-0"><a href="#" class="text-inherit">CRM Dashboard</a></h4>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>23 Dec, 2023</td>
                                            <td>$0</td>

                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="me-2"><span>30%</span></div>
                                                    <div class="progress w-100" style="height: 6px">
                                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="30"></div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <span class="badge bg-danger-soft">Cancel</span>
                                            </td>
                                            <td>
                                                <div class="avatar-group">
                                                    <span class="avatar avatar-md">
                                                        <img alt="avatar" src="../../assets/images/avatar/avatar-7.jpg" class="rounded-circle imgtooltip" data-template="five ">
                                                        <span id="five" class="d-none">
                                                            <span class="fw-semibold">Paul Haney</span>
                                                        </span>
                                                    </span>
                                                    <span class="avatar avatar-md">
                                                        <img alt="avatar" src="../../assets/images/avatar/avatar-8.jpg" class="rounded-circle imgtooltip" data-template="six ">
                                                        <span id="six" class="d-none">
                                                            <span class="fw-semibold">Gali Linear</span>
                                                        </span>
                                                    </span>
                                                    <span class="avatar avatar-md avatar-primary imgtooltip" data-template="textSix">
                                                        <span class="avatar-initials rounded-circle">GK</span>

                                                        <span id="textSix" class="d-none">
                                                            <span class="fw-semibold">Geeks Only</span>
                                                        </span>
                                                    </span>

                                                    <span class="avatar avatar-md">
                                                        <span class="avatar-initials rounded-circle bg-light text-dark">4+</span>
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="dropdown dropstart">
                                                    <a
                                                        class="btn-icon btn btn-ghost btn-sm rounded-circle"
                                                        href="#"
                                                        role="button"
                                                        id="Dropdown3"
                                                        data-bs-toggle="dropdown"
                                                        aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <i class="fe fe-more-vertical"></i>
                                                    </a>
                                                    <div class="dropdown-menu" aria-labelledby="Dropdown3">
                                                        <span class="dropdown-header">Settings</span>
                                                        <a class="dropdown-item" href="#">
                                                            <i class="fe fe-edit dropdown-item-icon"></i>
                                                            Edit Details
                                                        </a>

                                                        <a class="dropdown-item" href="#">
                                                            <i class="fe fe-link dropdown-item-icon"></i>
                                                            Copy project link
                                                        </a>
                                                        <a class="dropdown-item" href="#">
                                                            <i class="fe fe-save dropdown-item-icon"></i>
                                                            Save as Default
                                                        </a>
                                                        <a class="dropdown-item" href="#">
                                                            <i class="fe fe-copy dropdown-item-icon"></i>
                                                            Duplicate
                                                        </a>
                                                        <a class="dropdown-item" href="#">
                                                            <i class="fe fe-layout dropdown-item-icon"></i>
                                                            Convert to Template
                                                        </a>

                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="#">
                                                            <i class="fe fe-upload dropdown-item-icon"></i>
                                                            Import
                                                        </a>
                                                        <a class="dropdown-item" href="#">
                                                            <i class="fe fe-printer dropdown-item-icon"></i>
                                                            Export / Print
                                                        </a>
                                                        <a class="dropdown-item" href="#">
                                                            <i class="fe fe-users dropdown-item-icon"></i>
                                                            Move to another team
                                                        </a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="#">
                                                            <i class="fe fe-archive dropdown-item-icon"></i>
                                                            Archive
                                                        </a>
                                                        <a class="dropdown-item" href="#">
                                                            <i class="fe fe-trash dropdown-item-icon"></i>
                                                            Delete Project
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="icon-shape icon-lg rounded-3 border p-4">
                                                        <i class="fe fe-cpu fs-3"></i>
                                                    </div>
                                                    <div class="ms-3">
                                                        <h4 class="mb-0"><a href="#" class="text-inherit">Marketing Sites</a></h4>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>10 Oct, 2022</td>
                                            <td>$0</td>

                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="me-2"><span>10%</span></div>
                                                    <div class="progress w-100" style="height: 6px">
                                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="10"></div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <span class="badge bg-danger-soft">Cancel</span>
                                            </td>
                                            <td>
                                                <div class="avatar-group">
                                                    <span class="avatar avatar-md">
                                                        <img alt="avatar" src="../../assets/images/avatar/avatar-7.jpg" class="rounded-circle imgtooltip" data-template="seven ">
                                                        <span id="seven" class="d-none">
                                                            <span class="fw-semibold">Paul Haney</span>
                                                        </span>
                                                    </span>
                                                    <span class="avatar avatar-md avatar-primary imgtooltip" data-template="textSeven">
                                                        <span class="avatar-initials rounded-circle">GK</span>

                                                        <span id="textSeven" class="d-none">
                                                            <span class="fw-semibold">Geeks Only</span>
                                                        </span>
                                                    </span>

                                                    <span class="avatar avatar-md">
                                                        <img alt="avatar" src="../../assets/images/avatar/avatar-9.jpg" class="rounded-circle imgtooltip" data-template="eight ">
                                                        <span id="eight" class="d-none">
                                                            <span class="fw-semibold">Mary Holler</span>
                                                        </span>
                                                    </span>
                                                    <span class="avatar avatar-md">
                                                        <span class="avatar-initials rounded-circle bg-light text-dark">7+</span>
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="dropdown dropstart">
                                                    <a
                                                        class="btn-icon btn btn-ghost btn-sm rounded-circle"
                                                        href="#"
                                                        role="button"
                                                        id="Dropdown4"
                                                        data-bs-toggle="dropdown"
                                                        aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <i class="fe fe-more-vertical"></i>
                                                    </a>
                                                    <div class="dropdown-menu" aria-labelledby="Dropdown4">
                                                        <span class="dropdown-header">Settings</span>
                                                        <a class="dropdown-item" href="#">
                                                            <i class="fe fe-edit dropdown-item-icon"></i>
                                                            Edit Details
                                                        </a>

                                                        <a class="dropdown-item" href="#">
                                                            <i class="fe fe-link dropdown-item-icon"></i>
                                                            Copy project link
                                                        </a>
                                                        <a class="dropdown-item" href="#">
                                                            <i class="fe fe-save dropdown-item-icon"></i>
                                                            Save as Default
                                                        </a>
                                                        <a class="dropdown-item" href="#">
                                                            <i class="fe fe-copy dropdown-item-icon"></i>
                                                            Duplicate
                                                        </a>
                                                        <a class="dropdown-item" href="#">
                                                            <i class="fe fe-layout dropdown-item-icon"></i>
                                                            Convert to Template
                                                        </a>

                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="#">
                                                            <i class="fe fe-upload dropdown-item-icon"></i>
                                                            Import
                                                        </a>
                                                        <a class="dropdown-item" href="#">
                                                            <i class="fe fe-printer dropdown-item-icon"></i>
                                                            Export / Print
                                                        </a>
                                                        <a class="dropdown-item" href="#">
                                                            <i class="fe fe-users dropdown-item-icon"></i>
                                                            Move to another team
                                                        </a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="#">
                                                            <i class="fe fe-archive dropdown-item-icon"></i>
                                                            Archive
                                                        </a>
                                                        <a class="dropdown-item" href="#">
                                                            <i class="fe fe-trash dropdown-item-icon"></i>
                                                            Delete Project
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="icon-shape icon-lg rounded-3 border p-4">
                                                        <i class="fe fe-message-square fs-3"></i>
                                                    </div>
                                                    <div class="ms-3">
                                                        <h4 class="mb-0"><a href="#" class="text-inherit">Chat Application Design</a></h4>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>19 Oct, 2022</td>
                                            <td>$20,000</td>

                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="me-2"><span>65%</span></div>
                                                    <div class="progress w-100" style="height: 6px">
                                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="65"></div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <span class="badge bg-warning-soft">Pending</span>
                                            </td>
                                            <td>
                                                <div class="avatar-group">
                                                    <span class="avatar avatar-md avatar-primary imgtooltip" data-template="textEight">
                                                        <span class="avatar-initials rounded-circle">GK</span>

                                                        <span id="textEight" class="d-none">
                                                            <span class="fw-semibold">Geeks Only</span>
                                                        </span>
                                                    </span>

                                                    <span class="avatar avatar-md">
                                                        <img alt="avatar" src="../../assets/images/avatar/avatar-8.jpg" class="rounded-circle imgtooltip" data-template="nine ">
                                                        <span id="nine" class="d-none">
                                                            <span class="fw-semibold">Gali Linear</span>
                                                        </span>
                                                    </span>
                                                    <span class="avatar avatar-md">
                                                        <img alt="avatar" src="../../assets/images/avatar/avatar-9.jpg" class="rounded-circle imgtooltip" data-template="ten ">
                                                        <span id="ten" class="d-none">
                                                            <span class="fw-semibold">Mary Holler</span>
                                                        </span>
                                                    </span>
                                                    <span class="avatar avatar-md">
                                                        <span class="avatar-initials rounded-circle bg-light text-dark">6+</span>
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="dropdown dropstart">
                                                    <a
                                                        class="btn-icon btn btn-ghost btn-sm rounded-circle"
                                                        href="#"
                                                        role="button"
                                                        id="Dropdown5"
                                                        data-bs-toggle="dropdown"
                                                        aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <i class="fe fe-more-vertical"></i>
                                                    </a>
                                                    <div class="dropdown-menu" aria-labelledby="Dropdown5">
                                                        <span class="dropdown-header">Settings</span>
                                                        <a class="dropdown-item" href="#">
                                                            <i class="fe fe-edit dropdown-item-icon"></i>
                                                            Edit Details
                                                        </a>

                                                        <a class="dropdown-item" href="#">
                                                            <i class="fe fe-link dropdown-item-icon"></i>
                                                            Copy project link
                                                        </a>
                                                        <a class="dropdown-item" href="#">
                                                            <i class="fe fe-save dropdown-item-icon"></i>
                                                            Save as Default
                                                        </a>
                                                        <a class="dropdown-item" href="#">
                                                            <i class="fe fe-copy dropdown-item-icon"></i>
                                                            Duplicate
                                                        </a>
                                                        <a class="dropdown-item" href="#">
                                                            <i class="fe fe-layout dropdown-item-icon"></i>
                                                            Convert to Template
                                                        </a>

                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="#">
                                                            <i class="fe fe-upload dropdown-item-icon"></i>
                                                            Import
                                                        </a>
                                                        <a class="dropdown-item" href="#">
                                                            <i class="fe fe-printer dropdown-item-icon"></i>
                                                            Export / Print
                                                        </a>
                                                        <a class="dropdown-item" href="#">
                                                            <i class="fe fe-users dropdown-item-icon"></i>
                                                            Move to another team
                                                        </a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="#">
                                                            <i class="fe fe-archive dropdown-item-icon"></i>
                                                            Archive
                                                        </a>
                                                        <a class="dropdown-item" href="#">
                                                            <i class="fe fe-trash dropdown-item-icon"></i>
                                                            Delete Project
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="icon-shape icon-lg rounded-3 border p-4">
                                                        <i class="fe fe-shopping-cart fs-3"></i>
                                                    </div>
                                                    <div class="ms-3">
                                                        <h4 class="mb-0"><a href="#" class="text-inherit">E-Commerce Project</a></h4>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>5 Nov, 2022</td>
                                            <td>$25,000</td>

                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="me-2"><span>100%</span></div>
                                                    <div class="progress w-100" style="height: 6px">
                                                        <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <span class="badge bg-success-soft">Completed</span>
                                            </td>
                                            <td>
                                                <div class="avatar-group">
                                                    <span class="avatar avatar-md">
                                                        <img alt="avatar" src="../../assets/images/avatar/avatar-7.jpg" class="rounded-circle imgtooltip" data-template="eleven ">
                                                        <span id="eleven" class="d-none">
                                                            <span class="fw-semibold">Paul Haney</span>
                                                        </span>
                                                    </span>
                                                    <span class="avatar avatar-md">
                                                        <img alt="avatar" src="../../assets/images/avatar/avatar-8.jpg" class="rounded-circle imgtooltip" data-template="twelve ">
                                                        <span id="twelve" class="d-none">
                                                            <span class="fw-semibold">Gali Linear</span>
                                                        </span>
                                                    </span>
                                                    <span class="avatar avatar-md">
                                                        <img alt="avatar" src="../../assets/images/avatar/avatar-9.jpg" class="rounded-circle imgtooltip" data-template="thirteen ">
                                                        <span id="thirteen" class="d-none">
                                                            <span class="fw-semibold">Mary Holler</span>
                                                        </span>
                                                    </span>
                                                    <span class="avatar avatar-md">
                                                        <span class="avatar-initials rounded-circle bg-light text-dark">8+</span>
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="dropdown dropstart">
                                                    <a
                                                        class="btn-icon btn btn-ghost btn-sm rounded-circle"
                                                        href="#"
                                                        role="button"
                                                        id="Dropdown6"
                                                        data-bs-toggle="dropdown"
                                                        aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <i class="fe fe-more-vertical"></i>
                                                    </a>
                                                    <div class="dropdown-menu" aria-labelledby="Dropdown6">
                                                        <span class="dropdown-header">Settings</span>
                                                        <a class="dropdown-item" href="#">
                                                            <i class="fe fe-edit dropdown-item-icon"></i>
                                                            Edit Details
                                                        </a>

                                                        <a class="dropdown-item" href="#">
                                                            <i class="fe fe-link dropdown-item-icon"></i>
                                                            Copy project link
                                                        </a>
                                                        <a class="dropdown-item" href="#">
                                                            <i class="fe fe-save dropdown-item-icon"></i>
                                                            Save as Default
                                                        </a>
                                                        <a class="dropdown-item" href="#">
                                                            <i class="fe fe-copy dropdown-item-icon"></i>
                                                            Duplicate
                                                        </a>
                                                        <a class="dropdown-item" href="#">
                                                            <i class="fe fe-layout dropdown-item-icon"></i>
                                                            Convert to Template
                                                        </a>

                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="#">
                                                            <i class="fe fe-upload dropdown-item-icon"></i>
                                                            Import
                                                        </a>
                                                        <a class="dropdown-item" href="#">
                                                            <i class="fe fe-printer dropdown-item-icon"></i>
                                                            Export / Print
                                                        </a>
                                                        <a class="dropdown-item" href="#">
                                                            <i class="fe fe-users dropdown-item-icon"></i>
                                                            Move to another team
                                                        </a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="#">
                                                            <i class="fe fe-archive dropdown-item-icon"></i>
                                                            Archive
                                                        </a>
                                                        <a class="dropdown-item" href="#">
                                                            <i class="fe fe-trash dropdown-item-icon"></i>
                                                            Delete Project
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="icon-shape icon-lg rounded-3 border p-4">
                                                        <i class="fe fe-users fs-3"></i>
                                                    </div>
                                                    <div class="ms-3">
                                                        <h4 class="mb-0"><a href="#" class="text-inherit">CRM Dashboard</a></h4>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>23 Dec, 2023</td>
                                            <td>$0</td>

                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="me-2"><span>30%</span></div>
                                                    <div class="progress w-100" style="height: 6px">
                                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="30"></div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <span class="badge bg-danger-soft">Cancel</span>
                                            </td>
                                            <td>
                                                <div class="avatar-group">
                                                    <span class="avatar avatar-md">
                                                        <img alt="avatar" src="../../assets/images/avatar/avatar-7.jpg" class="rounded-circle imgtooltip" data-template="twentyOne ">
                                                        <span id="twentyOne" class="d-none">
                                                            <span class="fw-semibold">Paul Haney</span>
                                                        </span>
                                                    </span>
                                                    <span class="avatar avatar-md">
                                                        <img alt="avatar" src="../../assets/images/avatar/avatar-8.jpg" class="rounded-circle imgtooltip" data-template="twentyTwo ">
                                                        <span id="twentyTwo" class="d-none">
                                                            <span class="fw-semibold">Gali Linear</span>
                                                        </span>
                                                    </span>
                                                    <span class="avatar avatar-md avatar-primary imgtooltip" data-template="textOne">
                                                        <span class="avatar-initials rounded-circle">GK</span>

                                                        <span id="textOne" class="d-none">
                                                            <span class="fw-semibold">Geeks Only</span>
                                                        </span>
                                                    </span>

                                                    <span class="avatar avatar-md">
                                                        <span class="avatar-initials rounded-circle bg-light text-dark">4+</span>
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="dropdown dropstart">
                                                    <a
                                                        class="btn-icon btn btn-ghost btn-sm rounded-circle"
                                                        href="#"
                                                        role="button"
                                                        id="Dropdown7"
                                                        data-bs-toggle="dropdown"
                                                        aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <i class="fe fe-more-vertical"></i>
                                                    </a>
                                                    <div class="dropdown-menu" aria-labelledby="Dropdown7">
                                                        <span class="dropdown-header">Settings</span>
                                                        <a class="dropdown-item" href="#">
                                                            <i class="fe fe-edit dropdown-item-icon"></i>
                                                            Edit Details
                                                        </a>

                                                        <a class="dropdown-item" href="#">
                                                            <i class="fe fe-link dropdown-item-icon"></i>
                                                            Copy project link
                                                        </a>
                                                        <a class="dropdown-item" href="#">
                                                            <i class="fe fe-save dropdown-item-icon"></i>
                                                            Save as Default
                                                        </a>
                                                        <a class="dropdown-item" href="#">
                                                            <i class="fe fe-copy dropdown-item-icon"></i>
                                                            Duplicate
                                                        </a>
                                                        <a class="dropdown-item" href="#">
                                                            <i class="fe fe-layout dropdown-item-icon"></i>
                                                            Convert to Template
                                                        </a>

                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="#">
                                                            <i class="fe fe-upload dropdown-item-icon"></i>
                                                            Import
                                                        </a>
                                                        <a class="dropdown-item" href="#">
                                                            <i class="fe fe-printer dropdown-item-icon"></i>
                                                            Export / Print
                                                        </a>
                                                        <a class="dropdown-item" href="#">
                                                            <i class="fe fe-users dropdown-item-icon"></i>
                                                            Move to another team
                                                        </a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="#">
                                                            <i class="fe fe-archive dropdown-item-icon"></i>
                                                            Archive
                                                        </a>
                                                        <a class="dropdown-item" href="#">
                                                            <i class="fe fe-trash dropdown-item-icon"></i>
                                                            Delete Project
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="icon-shape icon-lg rounded-3 border p-4">
                                                        <i class="fe fe-cpu fs-3"></i>
                                                    </div>
                                                    <div class="ms-3">
                                                        <h4 class="mb-0"><a href="#" class="text-inherit">Marketing Sites</a></h4>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>10 Oct, 2022</td>
                                            <td>$0</td>

                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="me-2"><span>10%</span></div>
                                                    <div class="progress w-100" style="height: 6px">
                                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="10"></div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <span class="badge bg-danger-soft">Cancel</span>
                                            </td>
                                            <td>
                                                <div class="avatar-group">
                                                    <span class="avatar avatar-md">
                                                        <img alt="avatar" src="../../assets/images/avatar/avatar-7.jpg" class="rounded-circle imgtooltip" data-template="fourteen ">
                                                        <span id="fourteen" class="d-none">
                                                            <span class="fw-semibold">Paul Haney</span>
                                                        </span>
                                                    </span>
                                                    <span class="avatar avatar-md avatar-primary imgtooltip" data-template="textTwo">
                                                        <span class="avatar-initials rounded-circle">GK</span>

                                                        <span id="textTwo" class="d-none">
                                                            <span class="fw-semibold">Geeks Only</span>
                                                        </span>
                                                    </span>

                                                    <span class="avatar avatar-md">
                                                        <img alt="avatar" src="../../assets/images/avatar/avatar-9.jpg" class="rounded-circle imgtooltip" data-template="fifteen ">
                                                        <span id="fifteen" class="d-none">
                                                            <span class="fw-semibold">Mary Holler</span>
                                                        </span>
                                                    </span>
                                                    <span class="avatar avatar-md">
                                                        <span class="avatar-initials rounded-circle bg-light text-dark">7+</span>
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="dropdown dropstart">
                                                    <a
                                                        class="btn-icon btn btn-ghost btn-sm rounded-circle"
                                                        href="#"
                                                        role="button"
                                                        id="Dropdown8"
                                                        data-bs-toggle="dropdown"
                                                        aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <i class="fe fe-more-vertical"></i>
                                                    </a>
                                                    <div class="dropdown-menu" aria-labelledby="Dropdown8">
                                                        <span class="dropdown-header">Settings</span>
                                                        <a class="dropdown-item" href="#">
                                                            <i class="fe fe-edit dropdown-item-icon"></i>
                                                            Edit Details
                                                        </a>

                                                        <a class="dropdown-item" href="#">
                                                            <i class="fe fe-link dropdown-item-icon"></i>
                                                            Copy project link
                                                        </a>
                                                        <a class="dropdown-item" href="#">
                                                            <i class="fe fe-save dropdown-item-icon"></i>
                                                            Save as Default
                                                        </a>
                                                        <a class="dropdown-item" href="#">
                                                            <i class="fe fe-copy dropdown-item-icon"></i>
                                                            Duplicate
                                                        </a>
                                                        <a class="dropdown-item" href="#">
                                                            <i class="fe fe-layout dropdown-item-icon"></i>
                                                            Convert to Template
                                                        </a>

                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="#">
                                                            <i class="fe fe-upload dropdown-item-icon"></i>
                                                            Import
                                                        </a>
                                                        <a class="dropdown-item" href="#">
                                                            <i class="fe fe-printer dropdown-item-icon"></i>
                                                            Export / Print
                                                        </a>
                                                        <a class="dropdown-item" href="#">
                                                            <i class="fe fe-users dropdown-item-icon"></i>
                                                            Move to another team
                                                        </a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="#">
                                                            <i class="fe fe-archive dropdown-item-icon"></i>
                                                            Archive
                                                        </a>
                                                        <a class="dropdown-item" href="#">
                                                            <i class="fe fe-trash dropdown-item-icon"></i>
                                                            Delete Project
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td colspan="7">
                                                <div class="d-flex align-items-center">
                                                    <a href="#" class="border border-2 rounded-3 card-dashed-hover" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight">
                                                        <div class="icon-shape icon-lg">+</div>
                                                    </a>
                                                    <div class="ms-3">
                                                        <h4 class="mb-0"><a href="#" class="text-inherit">New Project</a></h4>
                                                    </div>
                                                </div>
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
    <!-- offcanvas -->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" style="width: 600px">
<div class="offcanvas-body" data-simplebar>
    <div class="offcanvas-header px-2 pt-0">
        <h3 class="offcanvas-title" id="offcanvasExampleLabel">Create Project</h3>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <!-- card body -->
    <div class="container">
        <!-- form -->
        <form class="row needs-validation" novalidate>
            <!-- form group -->
            <div class="mb-3 col-12">
                <label class="form-label" for="projectTitle">
                    Project Title
                    <span class="text-danger">*</span>
                </label>
                <input type="text" class="form-control" id="projectTitle" placeholder="Enter project title" required />
                <div class="invalid-feedback">Please enter project title</div>
            </div>
            <!-- form group -->
            <div class="mb-3 col-12">
                <label class="form-label" for="description">Description</label>
                <textarea class="form-control" id="description" placeholder="Enter brief about project..." rows="3" required></textarea>
                <div class="invalid-feedback">Please enter project description</div>
            </div>
            <!-- form group -->
            <div class="mb-3 col-md-6 col-12">
                <label class="form-label">
                    Start Date
                    <span class="text-danger">*</span>
                </label>
                <div class="input-group me-3">
                    <input class="form-control flatpickr" type="text" placeholder="Select Date" aria-describedby="basic-addon2 ">

                    <span class="input-group-text" id="basic-addon2"><i class="fe fe-calendar"></i></span>
                </div>
            </div>
            <!-- form group -->
            <div class="mb-3 col-md-6 col-12">
                <label class="form-label">
                    End Date
                    <span class="text-danger">*</span>
                </label>
                <div class="input-group me-3">
                    <input class="form-control flatpickr" type="text" placeholder="Select Date" aria-describedby="basic-addon3 ">

                    <span class="input-group-text" id="basic-addon3"><i class="fe fe-calendar"></i></span>
                </div>
            </div>
            <!-- form group -->
            <div class="mb-3 col-md-6 col-12">
                <label class="form-label" for="privacy">Privacy</label>
                <select class="form-select" id="privacy" required>
                    <option selected value="">Select Privacy</option>
                    <option value="Public to you team">Public to you team</option>
                    <option value="Private to project members">Private to project members</option>
                    <option value="Private to you">Private to you</option>
                </select>
                <div class="invalid-feedback">Please choose privacy.</div>
            </div>
            <!-- form group -->
            <div class="mb-3 col-md-6 col-12">
                <label class="form-label" for="teamMember">Team Members</label>
                <select class="form-select" id="teamMember" required>
                    <option selected value="">Assign to owner</option>
                    <option value="Eleanor Pena">Eleanor Pena</option>
                    <option value="Courtney Henry">Courtney Henry</option>
                    <option value="Assign to Owner">Assign to Owner</option>
                </select>
                <div class="invalid-feedback">Please choose member.</div>
            </div>
            <!-- form group -->
            <div class="mb-3 col-md-6 col-12">
                <label class="form-label" for="budget">Budget</label>
                <select class="form-select" id="budget" required>
                    <option selected value="">Project Budget</option>
                    <option value="Based on Project Amount">Based on Project Amount</option>
                    <option value="Based on Project Hours">Based on Project Hours</option>
                </select>
                <div class="invalid-feedback">Please choose member.</div>
            </div>
            <!-- form group -->
            <div class="mb-3 col-md-6 col-12">
                <label class="form-label" for="priority">Priority</label>
                <select class="form-select" id="priority" required>
                    <option selected value="">Set Priority</option>
                    <option value="High">High</option>
                    <option value="Medium">Medium</option>
                    <option value="Low">Low</option>
                </select>
            </div>
            <div class="col-md-3 col-12 mb-4">
                <div>
                    <!-- logo -->
                    <h5 class="mb-3">Project Logo</h5>
                    <div class="icon-shape icon-xxl border rounded position-relative">
                        <span class="position-absolute"><i class="bi bi-image fs-3"></i></span>
                        <input class="form-control border-0 opacity-0" type="file ">
                    </div>
                </div>
            </div>
            <div class="col-12 mb-4">
                <h5 class="mb-3">Cover Image</h5>
                <div id="my-dropzone" class="dropzone mt-4 border-dashed rounded-2 min-h-0"></div>
            </div>
            <div class="col-md-8"></div>
            <!-- button -->
            <div class="col-12">
                <button class="btn btn-primary" type="submit">Submit</button>
                <button type="button" class="btn btn-outline-primary ms-2" data-bs-dismiss="offcanvas" aria-label="Close">Close</button>
            </div>
        </form>
    </div>
</div>
</div>


    <!-- Scripts -->
    <!-- Libs JS -->
    <script src="./js/popper.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/simplebar.min.js"></script>

    <!-- Theme JS -->
    <script src="./js/theme.min.js"></script>

    <!-- Js sin cambios de nuestra parte -->

    <script src="../../assets/libs/dropzone/dist/min/dropzone.min.js"></script>

    <script src="../../assets/libs/tippy.js/dist/tippy-bundle.umd.min.js"></script>

    <script src="../../assets/js/vendors/tooltip.js"></script>
    <script src="../../assets/libs/flatpickr/dist/flatpickr.min.js"></script>
    <script src="../../assets/js/vendors/flatpickr.js"></script>
    <script src="../../assets/js/vendors/validation.js"></script>
    <script src="../../assets/js/vendors/dropzone.js"></script>
</body>

</html>