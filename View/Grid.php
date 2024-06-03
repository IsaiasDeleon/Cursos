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
                            <div class="mb-3 mb-lg-0">
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
                                        <li class="breadcrumb-item active" aria-current="page">Grid</li>
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
                <div class="row justify-content-md-between mb-4 mb-xl-0">
                    <!-- col -->
                    <div class="col-xl-2 col-lg-4 col-md-6 col-12">
                        <!-- search -->
                        <div class="mb-2 mb-lg-4">
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
                <div class="row">
                    <div class="col-xxl-3 col-xl-4 col-lg-6 col-12 mb-4">
                        <!-- card -->
                        <div class="card h-100">
                            <!-- card body -->
                            <div class="card-body">
                                <!-- heading-->
                                <div class="d-flex align-items-center justify-content-between">
                                    <!-- text-->

                                    <div>
                                        <h4 class="mb-0"><a href="#" class="text-inherit">Web Application Design</a></h4>
                                        <span class="fs-6">Web Design</span>
                                    </div>
                                    <!-- dropdown-->
                                    <div class="d-flex align-items-center">
                                        <div class="dropdown dropstart">
                                            <a
                                                href="#"
                                                class="btn-icon btn btn-ghost btn-sm rounded-circle"
                                                id="dropdownProjectOne"
                                                data-bs-toggle="dropdown"
                                                aria-haspopup="true"
                                                aria-expanded="false">
                                                <i class="bi bi-three-dots-vertical"></i>
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="dropdownProjectOne">
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
                                    </div>
                                </div>
                                <!-- para-->
                                <div class="mt-3 mb-4">
                                    <p class="mb-0">Web application design is an important stage when building a web application...</p>
                                </div>
                                <!-- progress -->
                                <div class="d-flex justify-content-between align-items-center mb-5">
                                    <div class="d-flex align-items-center">
                                        <!-- avatar group -->
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
                                                <img alt="avatar" src="../../assets/images/avatar/avatar-3.jpg" class="rounded-circle imgtooltip" data-template="three ">
                                                <span id="three" class="d-none">
                                                    <small class="fw-semibold">Mary Holler</small>
                                                </span>
                                            </span>
                                            <!-- avatar -->
                                            <span class="avatar avatar-md">
                                                <!-- img -->
                                                <img alt="avatar" src="../../assets/images/avatar/avatar-4.jpg" class="rounded-circle imgtooltip" data-template="nordl">
                                                <span id="nordl" class="d-none">
                                                    <small class="fw-semibold">Lio Nordal</small>
                                                </span>
                                            </span>
                                            <!-- avatar -->
                                            <span class="avatar avatar-md">
                                                <span class="avatar-initials rounded-circle bg-light text-dark">5+</span>
                                            </span>
                                        </div>
                                    </div>
                                    <!-- text -->
                                    <div>
                                        <span class="badge bg-info-soft">In Progress</span>
                                    </div>
                                </div>
                                <div>
                                    <!-- progress bar -->
                                    <div class="progress progress-tooltip" style="height: 6px">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 45%" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100">
                                            <span>45%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- card footer -->
                            <div class="card-footer p-0">
                                <div class="d-flex justify-content-between">
                                    <div class="w-50 py-3 px-4">
                                        <h6 class="mb-0">Due Date:</h6>
                                        <p class="text-dark fs-6 fw-semibold mb-0">1 Jan, 2022</p>
                                    </div>
                                    <div class="border-start w-50 py-3 px-4">
                                        <h6 class="mb-0">Budget:</h6>
                                        <p class="text-dark fs-6 fw-semibold mb-0">$1,23,000</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-4 col-lg-6 col-12 mb-4">
                        <!-- card -->
                        <div class="card h-100">
                            <!-- card body -->
                            <div class="card-body">
                                <!-- heading-->
                                <div class="d-flex align-items-center justify-content-between">
                                    <!-- text-->
                                    <div>
                                        <h4 class="mb-0"><a href="#" class="text-inherit">Task Application Development..</a></h4>
                                        <span class="fs-6">Web Development</span>
                                    </div>
                                    <!-- dropdown-->
                                    <div class="d-flex align-items-center">
                                        <div class="dropdown dropstart">
                                            <a
                                                href="#"
                                                class="btn-icon btn btn-ghost btn-sm rounded-circle"
                                                id="dropdownProjectTwo"
                                                data-bs-toggle="dropdown"
                                                aria-haspopup="true"
                                                aria-expanded="false">
                                                <i class="bi bi-three-dots-vertical"></i>
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="dropdownProjectTwo">
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
                                    </div>
                                </div>
                                <!-- para-->
                                <div class="mt-3 mb-4">
                                    <p class="mb-0">Mauris quis nibh eu tortor blandit lacinia id sed ans dui turpis, semper ac turpis quis</p>
                                </div>

                                <!-- progress -->
                                <div class="d-flex justify-content-between align-items-center mb-5">
                                    <div class="d-flex align-items-center">
                                        <!-- avatar group -->
                                        <div class="avatar-group">
                                            <span class="avatar avatar-md">
                                                <img alt="avatar" src="../../assets/images/avatar/avatar-5.jpg" class="rounded-circle imgtooltip" data-template="four ">
                                                <span id="four" class="d-none">
                                                    <small class="fw-semibold">Gilbert Farr</small>
                                                </span>
                                            </span>
                                            <span class="avatar avatar-md avatar-primary imgtooltip" data-template="textOne">
                                                <span class="avatar-initials rounded-circle h6">GK</span>

                                                <span id="textOne" class="d-none">
                                                    <small class="fw-semibold">Geeks Only</small>
                                                </span>
                                            </span>

                                            <span class="avatar avatar-md">
                                                <img alt="avatar" src="../../assets/images/avatar/avatar-6.jpg" class="rounded-circle imgtooltip" data-template="five ">
                                                <span id="five" class="d-none">
                                                    <small class="fw-semibold">Charlie Holland</small>
                                                </span>
                                            </span>

                                            <span class="avatar avatar-md">
                                                <span class="avatar-initials rounded-circle bg-light text-dark">6+</span>
                                            </span>
                                        </div>
                                    </div>
                                    <!-- text -->
                                    <div>
                                        <span class="badge bg-danger-soft">Cancel</span>
                                    </div>
                                </div>
                                <div>
                                    <!-- progress bar -->

                                    <div class="progress progress-tooltip" style="height: 6px">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 12%" aria-valuenow="12" aria-valuemin="0" aria-valuemax="100">
                                            <span>12%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- card footer -->
                            <div class="card-footer p-0">
                                <div class="d-flex justify-content-between">
                                    <div class="w-50 py-3 px-4">
                                        <h6 class="mb-0">Due Date:</h6>
                                        <p class="text-dark fs-6 fw-semibold mb-0">-</p>
                                    </div>
                                    <div class="border-start w-50 py-3 px-4">
                                        <h6 class="mb-0">Budget:</h6>
                                        <p class="text-dark fs-6 fw-semibold mb-0">$0</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-4 col-lg-6 col-12 mb-4">
                        <!-- card -->
                        <div class="card h-100">
                            <!-- card body -->
                            <div class="card-body">
                                <!-- heading-->
                                <div class="d-flex align-items-center justify-content-between">
                                    <!-- text-->

                                    <div>
                                        <h4 class="mb-0"><a href="#" class="text-inherit">CRM Dashboard</a></h4>
                                        <span class="fs-6">Front End Development</span>
                                    </div>
                                    <!-- dropdown-->
                                    <div class="d-flex align-items-center">
                                        <div class="dropdown dropstart">
                                            <a
                                                href="#"
                                                class="btn-icon btn btn-ghost btn-sm rounded-circle"
                                                id="dropdownProjectThree"
                                                data-bs-toggle="dropdown"
                                                aria-haspopup="true"
                                                aria-expanded="false">
                                                <i class="bi bi-three-dots-vertical"></i>
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="dropdownProjectThree">
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
                                    </div>
                                </div>
                                <!-- para-->
                                <div class="mt-3 mb-4">
                                    <p class="mb-0">Quisque at augue convallis, tincidunt erat et, tristique ssa mollis dignissim eget</p>
                                </div>

                                <!-- progress -->
                                <div class="d-flex justify-content-between align-items-center mb-5">
                                    <div class="d-flex align-items-center">
                                        <!-- avatar group -->
                                        <div class="avatar-group">
                                            <span class="avatar avatar-md avatar-info imgtooltip" data-template="textTwo">
                                                <span class="avatar-initials rounded-circle">GK</span>

                                                <span id="textTwo" class="d-none">
                                                    <small class="fw-semibold">Geeks Only</small>
                                                </span>
                                            </span>
                                            <span class="avatar avatar-md">
                                                <img alt="avatar" src="../../assets/images/avatar/avatar-9.jpg" class="rounded-circle imgtooltip" data-template="eight ">
                                                <span id="eight" class="d-none">
                                                    <small class="fw-semibold">Charlie Holland</small>
                                                </span>
                                            </span>
                                            <span class="avatar avatar-md">
                                                <img alt="avatar" src="../../assets/images/avatar/avatar-10.jpg" class="rounded-circle imgtooltip" data-template="nine ">
                                                <span id="nine" class="d-none">
                                                    <small class="fw-semibold">Jamie Lusar</small>
                                                </span>
                                            </span>
                                            <span class="avatar avatar-md">
                                                <span class="avatar-initials rounded-circle bg-light text-dark">3+</span>
                                            </span>
                                        </div>
                                    </div>
                                    <!-- text -->
                                    <div>
                                        <span class="badge bg-success-soft">Finished</span>
                                    </div>
                                </div>
                                <div>
                                    <!-- progress bar -->

                                    <div class="progress progress-tooltip" style="height: 6px">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                                            <span>100%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- card footer -->
                            <div class="card-footer p-0">
                                <div class="d-flex justify-content-between">
                                    <div class="w-50 py-3 px-4">
                                        <h6 class="mb-0">Due Date:</h6>
                                        <p class="text-dark fs-6 fw-semibold mb-0">1 Sept, 2022</p>
                                    </div>
                                    <div class="border-start w-50 py-3 px-4">
                                        <h6 class="mb-0">Budget:</h6>
                                        <p class="text-dark fs-6 fw-semibold mb-0">$5,200</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-4 col-lg-6 col-12 mb-4">
                        <!-- card -->
                        <div class="card h-100">
                            <!-- card body -->
                            <div class="card-body">
                                <!-- heading-->
                                <div class="d-flex align-items-center justify-content-between">
                                    <!-- text-->
                                    <div>
                                        <h4 class="mb-0"><a href="#" class="text-inherit">Task Application Development..</a></h4>
                                        <span class="fs-6">Web Development</span>
                                    </div>
                                    <!-- dropdown-->
                                    <div class="d-flex align-items-center">
                                        <div class="dropdown dropstart">
                                            <a
                                                href="#"
                                                class="btn-icon btn btn-ghost btn-sm rounded-circle"
                                                id="dropdownProjectEight"
                                                data-bs-toggle="dropdown"
                                                aria-haspopup="true"
                                                aria-expanded="false">
                                                <i class="bi bi-three-dots-vertical"></i>
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="dropdownProjectEight">
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
                                    </div>
                                </div>
                                <!-- para-->
                                <div class="mt-3 mb-4">
                                    <p class="mb-0">Mauris quis nibh eu tortor blandit lacinia id sed ans dui turpis, semper ac turpis quis</p>
                                </div>

                                <!-- progress -->
                                <div class="d-flex justify-content-between align-items-center mb-5">
                                    <div class="d-flex align-items-center">
                                        <!-- avatar group -->
                                        <div class="avatar-group">
                                            <span class="avatar avatar-md">
                                                <img alt="avatar" src="../../assets/images/avatar/avatar-5.jpg" class="rounded-circle imgtooltip" data-template="eighTeen ">
                                                <span id="eighTeen" class="d-none">
                                                    <small class="fw-semibold">Gilbert Farr</small>
                                                </span>
                                            </span>
                                            <span class="avatar avatar-md avatar-primary imgtooltip" data-template="textTen">
                                                <span class="avatar-initials rounded-circle fs-6">GK</span>

                                                <span id="textTen" class="d-none">
                                                    <small class="fw-semibold">Geeks Only</small>
                                                </span>
                                            </span>

                                            <span class="avatar avatar-md">
                                                <img alt="avatar" src="../../assets/images/avatar/avatar-6.jpg" class="rounded-circle imgtooltip" data-template="nineTeen ">
                                                <span id="nineTeen" class="d-none">
                                                    <small class="fw-semibold">Charlie Holland</small>
                                                </span>
                                            </span>

                                            <span class="avatar avatar-md">
                                                <span class="avatar-initials rounded-circle bg-light text-dark">6+</span>
                                            </span>
                                        </div>
                                    </div>
                                    <!-- text -->
                                    <div>
                                        <span class="badge bg-info-soft">In Progress</span>
                                    </div>
                                </div>
                                <div>
                                    <!-- progress bar -->

                                    <div class="progress progress-tooltip" style="height: 6px">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                            <span>50%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- card footer -->
                            <div class="card-footer p-0">
                                <div class="d-flex justify-content-between">
                                    <div class="w-50 py-3 px-4">
                                        <h6 class="mb-0">Due Date:</h6>
                                        <p class="text-dark fs-6 fw-semibold mb-0">22 Sept, 2022</p>
                                    </div>
                                    <div class="border-start w-50 py-3 px-4">
                                        <h6 class="mb-0">Budget:</h6>
                                        <p class="text-dark fs-6 fw-semibold mb-0">$400</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xxl-3 col-xl-4 col-lg-6 col-12 mb-4">
                        <!-- card -->
                        <div class="card h-100">
                            <!-- card body -->
                            <div class="card-body">
                                <!-- heading-->
                                <div class="d-flex align-items-center justify-content-between">
                                    <!-- text-->

                                    <div class="d-flex align-items-center">
                                        <div class="icon-shape icon-lg rounded-3 border p-4">
                                            <i class="fe fe-clipboard fs-3"></i>
                                        </div>
                                        <div class="ms-3">
                                            <h4 class="mb-0"><a href="#" class="text-inherit">File Management App</a></h4>
                                            <span class="fs-6">Web Design</span>
                                        </div>
                                    </div>
                                    <!-- dropdown-->
                                    <div class="d-flex">
                                        <div class="dropdown dropstart">
                                            <a
                                                href="#"
                                                class="btn-icon btn btn-ghost btn-sm rounded-circle"
                                                id="dropdownProjectFour"
                                                data-bs-toggle="dropdown"
                                                aria-haspopup="true"
                                                aria-expanded="false">
                                                <i class="bi bi-three-dots-vertical"></i>
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="dropdownProjectFour">
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
                                    </div>
                                </div>
                                <!-- para-->
                                <div class="mt-4 mb-4">
                                    <p class="mb-0">Quisque at augue convallis, tincidunt erat et, tristique ssa mollis dignissim eget</p>
                                </div>

                                <!-- progress -->
                                <div class="d-flex justify-content-between align-items-center mb-5">
                                    <div class="d-flex align-items-center">
                                        <!-- avatar group -->
                                        <div class="avatar-group">
                                            <span class="avatar avatar-md avatar-warning imgtooltip" data-template="textFour">
                                                <span class="avatar-initials rounded-circle">GK</span>

                                                <span id="textFour" class="d-none">
                                                    <small class="fw-semibold">Geeks Only</small>
                                                </span>
                                            </span>
                                            <span class="avatar avatar-md">
                                                <img alt="avatar" src="../../assets/images/avatar/avatar-12.jpg" class="rounded-circle imgtooltip" data-template="eleven ">
                                                <span id="eleven" class="d-none">
                                                    <small class="fw-semibold">Charlie Holland</small>
                                                </span>
                                            </span>
                                            <span class="avatar avatar-md">
                                                <img alt="avatar" src="../../assets/images/avatar/avatar-13.jpg" class="rounded-circle imgtooltip" data-template="twelve ">
                                                <span id="twelve" class="d-none">
                                                    <small class="fw-semibold">Jamie Lusar</small>
                                                </span>
                                            </span>
                                            <span class="avatar avatar-md">
                                                <span class="avatar-initials rounded-circle bg-light text-dark">2+</span>
                                            </span>
                                        </div>
                                    </div>
                                    <!-- text -->
                                    <div>
                                        <span class="badge bg-info-soft">In Progress</span>
                                    </div>
                                </div>
                                <div>
                                    <!-- progress bar -->

                                    <div class="progress progress-tooltip" style="height: 6px">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="85">
                                            <span>85%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- card footer -->
                            <div class="card-footer p-0">
                                <div class="d-flex justify-content-between">
                                    <div class="w-50 py-3 px-4">
                                        <h6 class="mb-0">Due Date:</h6>
                                        <p class="text-dark fs-6 fw-semibold mb-0">25 Jan, 2022</p>
                                    </div>
                                    <div class="border-start w-50 py-3 px-4">
                                        <h6 class="mb-0">Budget:</h6>
                                        <p class="text-dark fs-6 fw-semibold mb-0">$2,000</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-4 col-lg-6 col-12 mb-4">
                        <!-- card -->
                        <div class="card h-100">
                            <!-- card body -->
                            <div class="card-body">
                                <!-- heading-->
                                <div class="d-flex align-items-center justify-content-between">
                                    <!-- text-->

                                    <div class="d-flex align-items-center">
                                        <div class="icon-shape icon-lg rounded-3 border p-4">
                                            <i class="fe fe-message-square fs-3"></i>
                                        </div>
                                        <div class="ms-3">
                                            <h4 class="mb-0"><a href="#" class="text-inherit">Chat Application Design</a></h4>
                                            <span class="fs-6">Web Design</span>
                                        </div>
                                    </div>
                                    <!-- dropdown-->
                                    <div class="d-flex">
                                        <div class="dropdown dropstart">
                                            <a
                                                href="#"
                                                class="btn-icon btn btn-ghost btn-sm rounded-circle"
                                                id="dropdownProjectFive"
                                                data-bs-toggle="dropdown"
                                                aria-haspopup="true"
                                                aria-expanded="false">
                                                <i class="bi bi-three-dots-vertical"></i>
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="dropdownProjectFive">
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
                                    </div>
                                </div>
                                <!-- para-->
                                <div class="mt-4 mb-4">
                                    <p class="mb-0">Nam gravida vestibulum justo, ac aliquet erat. Pellentesque vitae massa lacus.</p>
                                </div>

                                <!-- progress -->
                                <div class="d-flex justify-content-between align-items-center mb-5">
                                    <div class="d-flex align-items-center">
                                        <!-- avatar group -->
                                        <div class="avatar-group">
                                            <span class="avatar avatar-md">
                                                <img alt="avatar" src="../../assets/images/avatar/avatar-12.jpg" class="rounded-circle imgtooltip" data-template="thirteen ">
                                                <span id="thirteen" class="d-none">
                                                    <small class="fw-semibold">Gilbert Farr</small>
                                                </span>
                                            </span>
                                            <span class="avatar avatar-md">
                                                <img alt="avatar" src="../../assets/images/avatar/avatar-13.jpg" class="rounded-circle imgtooltip" data-template="fourteen ">
                                                <span id="fourteen" class="d-none">
                                                    <small class="fw-semibold">Charlie Holland</small>
                                                </span>
                                            </span>
                                            <span class="avatar avatar-md avatar-success imgtooltip" data-template="textThree">
                                                <span class="avatar-initials rounded-circle">GK</span>

                                                <span id="textThree" class="d-none">
                                                    <small class="fw-semibold">Geeks Only</small>
                                                </span>
                                            </span>
                                            <span class="avatar avatar-md">
                                                <span class="avatar-initials rounded-circle bg-light text-dark">4+</span>
                                            </span>
                                        </div>
                                    </div>
                                    <!-- text -->
                                    <div>
                                        <span class="badge bg-warning-soft">Pending</span>
                                    </div>
                                </div>
                                <div>
                                    <!-- progress bar -->

                                    <div class="progress progress-tooltip" style="height: 6px">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="95">
                                            <span>95%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- card footer -->
                            <div class="card-footer p-0">
                                <div class="d-flex justify-content-between">
                                    <div class="w-50 py-3 px-4">
                                        <h6 class="mb-0">Due Date:</h6>
                                        <p class="text-dark fs-6 fw-semibold mb-0">30 May, 2022</p>
                                    </div>
                                    <div class="border-start w-50 py-3 px-4">
                                        <h6 class="mb-0">Budget:</h6>
                                        <p class="text-dark fs-6 fw-semibold mb-0">$800</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-4 col-lg-6 col-12 mb-4">
                        <!-- card -->
                        <div class="card h-100">
                            <!-- card body -->
                            <div class="card-body">
                                <!-- heading-->
                                <div class="d-flex align-items-center justify-content-between">
                                    <!-- text-->

                                    <div class="d-flex align-items-center">
                                        <div class="icon-shape icon-lg rounded-3 border p-4">
                                            <i class="fe fe-shopping-cart fs-3"></i>
                                        </div>
                                        <div class="ms-3">
                                            <h4 class="mb-0"><a href="#" class="text-inherit">E-Commerce Project</a></h4>
                                            <span class="fs-6">Web Development</span>
                                        </div>
                                    </div>
                                    <!-- dropdown-->
                                    <div class="d-flex">
                                        <div class="dropdown dropstart">
                                            <a
                                                href="#"
                                                class="btn-icon btn btn-ghost btn-sm rounded-circle"
                                                id="dropdownProjectSix"
                                                data-bs-toggle="dropdown"
                                                aria-haspopup="true"
                                                aria-expanded="false">
                                                <i class="bi bi-three-dots-vertical"></i>
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="dropdownProjectSix">
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
                                    </div>
                                </div>
                                <!-- para-->
                                <div class="mt-4 mb-4">
                                    <p class="mb-0">Donec vel tellus nec purus mollis consequat sed at urna. In sit amet vehicula odio.</p>
                                </div>

                                <!-- progress -->
                                <div class="d-flex justify-content-between align-items-center mb-5">
                                    <div class="d-flex align-items-center">
                                        <!-- avatar group -->
                                        <div class="avatar-group">
                                            <span class="avatar avatar-md">
                                                <img alt="avatar" src="../../assets/images/avatar/avatar-15.jpg" class="rounded-circle imgtooltip" data-template="sixteen ">
                                                <span id="sixteen" class="d-none">
                                                    <small class="fw-semibold">Gilbert Farr</small>
                                                </span>
                                            </span>
                                            <span class="avatar avatar-md avatar-danger imgtooltip" data-template="textFive">
                                                <span class="avatar-initials rounded-circle">GK</span>

                                                <span id="textFive" class="d-none">
                                                    <small class="fw-semibold">Geeks Only</small>
                                                </span>
                                            </span>
                                            <span class="avatar avatar-md">
                                                <img alt="avatar" src="../../assets/images/avatar/avatar-17.jpg" class="rounded-circle imgtooltip" data-template="eighteen ">
                                                <span id="eighteen" class="d-none">
                                                    <small class="fw-semibold">Jamie Lusar</small>
                                                </span>
                                            </span>
                                            <span class="avatar avatar-md">
                                                <span class="avatar-initials rounded-circle bg-light text-dark">5+</span>
                                            </span>
                                        </div>
                                    </div>
                                    <!-- text -->
                                    <div>
                                        <span class="badge bg-success-soft">Finished</span>
                                    </div>
                                </div>
                                <div>
                                    <!-- progress bar -->

                                    <div class="progress progress-tooltip" style="height: 6px">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                                            <span>100%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- card footer -->
                            <div class="card-footer p-0">
                                <div class="d-flex justify-content-between">
                                    <div class="w-50 py-3 px-4">
                                        <h6 class="mb-0">Due Date:</h6>
                                        <p class="text-dark fs-6 fw-semibold mb-0">31 June, 2022</p>
                                    </div>
                                    <div class="border-start w-50 py-3 px-4">
                                        <h6 class="mb-0">Budget:</h6>
                                        <p class="text-dark fs-6 fw-semibold mb-0">$2,53,000</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-4 col-lg-6 col-12 mb-4">
                        <!-- card -->
                        <div class="card h-100">
                            <!-- card body -->
                            <div class="card-body">
                                <!-- heading-->
                                <div class="d-flex align-items-center justify-content-between">
                                    <!-- text-->

                                    <div class="d-flex align-items-center">
                                        <div class="icon-shape icon-lg rounded-3 border p-4">
                                            <i class="fe fe-message-square fs-3"></i>
                                        </div>
                                        <div class="ms-3">
                                            <h4 class="mb-0"><a href="#" class="text-inherit">Chat Application Design</a></h4>
                                            <span class="fs-6">Web Design</span>
                                        </div>
                                    </div>
                                    <!-- dropdown-->
                                    <div class="d-flex">
                                        <div class="dropdown dropstart">
                                            <a
                                                href="#"
                                                class="btn-icon btn btn-ghost btn-sm rounded-circle"
                                                id="dropdownProjectEleven"
                                                data-bs-toggle="dropdown"
                                                aria-haspopup="true"
                                                aria-expanded="false">
                                                <i class="bi bi-three-dots-vertical"></i>
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="dropdownProjectEleven">
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
                                    </div>
                                </div>
                                <!-- para-->
                                <div class="mt-4 mb-4">
                                    <p class="mb-0">Nam gravida vestibulum justo, ac aliquet erat. Pellentesque vitae massa lacus.</p>
                                </div>

                                <!-- progress -->
                                <div class="d-flex justify-content-between align-items-center mb-5">
                                    <div class="d-flex align-items-center">
                                        <!-- avatar group -->
                                        <div class="avatar-group">
                                            <span class="avatar avatar-md">
                                                <img alt="avatar" src="../../assets/images/avatar/avatar-12.jpg" class="rounded-circle imgtooltip" data-template="twenty ">
                                                <span id="twenty" class="d-none">
                                                    <small class="fw-semibold">Gilbert Farr</small>
                                                </span>
                                            </span>
                                            <span class="avatar avatar-md">
                                                <img alt="avatar" src="../../assets/images/avatar/avatar-13.jpg" class="rounded-circle imgtooltip" data-template="twentyone ">
                                                <span id="twentyone" class="d-none">
                                                    <small class="fw-semibold">Charlie Holland</small>
                                                </span>
                                            </span>
                                            <span class="avatar avatar-md avatar-success imgtooltip" data-template="textTwelve">
                                                <span class="avatar-initials rounded-circle">GK</span>

                                                <span id="textTwelve" class="d-none">
                                                    <small class="fw-semibold">Geeks Only</small>
                                                </span>
                                            </span>
                                            <span class="avatar avatar-md">
                                                <span class="avatar-initials rounded-circle bg-light text-dark">4+</span>
                                            </span>
                                        </div>
                                    </div>
                                    <!-- text -->
                                    <div>
                                        <span class="badge bg-warning-soft">Pending</span>
                                    </div>
                                </div>
                                <div>
                                    <!-- progress bar -->

                                    <div class="progress progress-tooltip" style="height: 6px">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="95">
                                            <span>95%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- card footer -->
                            <div class="card-footer p-0">
                                <div class="d-flex justify-content-between">
                                    <div class="w-50 py-3 px-4">
                                        <h6 class="mb-0">Due Date:</h6>
                                        <p class="text-dark fs-6 fw-semibold mb-0">30 May, 2022</p>
                                    </div>
                                    <div class="border-start w-50 py-3 px-4">
                                        <h6 class="mb-0">Budget:</h6>
                                        <p class="text-dark fs-6 fw-semibold mb-0">$800</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-4 col-lg-6 col-12 mb-4">
                        <!-- card -->
                        <div class="card h-100">
                            <img src="../../assets/images/background/project-cover-img.jpg" alt="" class="img-fluid rounded-top ">
                            <div class="d-flex position-absolute end-0 pe-3 pt-3">
                                <div class="dropdown dropstart">
                                    <a href="#" class="btn-icon btn btn-ghost btn-sm rounded-circle" id="dropdownProjectTen" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="bi bi-three-dots-vertical"></i>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="dropdownProjectTen">
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
                            </div>
                            <!-- card body -->
                            <div class="card-body">
                                <!-- heading-->

                                <!-- text-->

                                <div class="mb-4">
                                    <h4 class="mb-0"><a href="#" class="text-inherit">CRM Dashboard</a></h4>
                                    <span class="fs-6">Front End Development</span>
                                </div>

                                <!-- progress -->
                                <div class="d-flex justify-content-between align-items-center mb-5">
                                    <div class="d-flex align-items-center">
                                        <!-- avatar group -->
                                        <div class="avatar-group">
                                            <span class="avatar avatar-md avatar-success imgtooltip" data-template="textThirteen">
                                                <span class="avatar-initials rounded-circle">GK</span>

                                                <span id="textThirteen" class="d-none">
                                                    <small class="fw-semibold">Geeks Only</small>
                                                </span>
                                            </span>
                                            <span class="avatar avatar-md">
                                                <img alt="avatar" src="../../assets/images/avatar/avatar-13.jpg" class="rounded-circle imgtooltip" data-template="fifteen ">
                                                <span id="fifteen" class="d-none">
                                                    <small class="fw-semibold">Charlie Holland</small>
                                                </span>
                                            </span>
                                            <span class="avatar avatar-md">
                                                <img alt="avatar" src="../../assets/images/avatar/avatar-14.jpg" class="rounded-circle imgtooltip" data-template="seventeen ">
                                                <span id="seventeen" class="d-none">
                                                    <small class="fw-semibold">Jamie Lusar</small>
                                                </span>
                                            </span>
                                            <span class="avatar avatar-md">
                                                <span class="avatar-initials rounded-circle bg-light text-dark">9+</span>
                                            </span>
                                        </div>
                                    </div>
                                    <!-- text -->
                                    <div>
                                        <span class="badge bg-success-soft">Finished</span>
                                    </div>
                                </div>
                                <div>
                                    <!-- progress bar -->

                                    <div class="progress progress-tooltip" style="height: 6px">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                                            <span>100%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- card footer -->
                            <div class="card-footer p-0">
                                <div class="d-flex justify-content-between">
                                    <div class="w-50 py-3 px-4">
                                        <h6 class="mb-0">Due Date:</h6>
                                        <p class="text-dark fs-6 fw-semibold mb-0">1 Sept, 2022</p>
                                    </div>
                                    <div class="border-start w-50 py-3 px-4">
                                        <h6 class="mb-0">Budget:</h6>
                                        <p class="text-dark fs-6 fw-semibold mb-0">$5,200</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xxl-3 col-xl-4 col-lg-6 col-12 mb-4">
                        <a href="#" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight">
                            <div class="card h-100 border border-2 shadow-none card-dashed-hover p-12">
                                <div class="card-body d-flex flex-column justify-content-center text-center">
                                    <i class="fe fe-plus text-secondary mb-3 fs-2" aria-hidden="true"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </section>
        </main>
    </div>

    <!-- Offcanvas -->

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

    <!-- Js sin manipular -->
    <script src="../../assets/libs/dropzone/dist/min/dropzone.min.js"></script>
    <script src="../../assets/libs/tippy.js/dist/tippy-bundle.umd.min.js"></script>
    <script src="../../assets/js/vendors/tooltip.js"></script>
    <script src="../../assets/libs/flatpickr/dist/flatpickr.min.js"></script>
    <script src="../../assets/js/vendors/flatpickr.js"></script>
    <script src="../../assets/js/vendors/dropzone.js"></script>
    <script src="../../assets/js/vendors/validation.js"></script>

</body>

</html>