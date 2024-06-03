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
                                <a class="nav-link" href="project-budget.html">Budget</a>
                            </li>
                            <!-- nav link -->
                            <li class="nav-item mx-3">
                                <a class="nav-link" href="project-files.html">Files</a>
                            </li>
                            <!-- nav link -->
                            <li class="nav-item mx-3">
                                <a class="nav-link active" href="project-team.html">Team</a>
                            </li>
                            <!-- nav link -->
                            <li class="nav-item mx-3">
                                <a class="nav-link" href="project-summary.html">Summary</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <!-- search  -->
                    <div class="col-xxl-2 col-lg-3 col-md-12 col-12 mb-4">
                        <form>
                            <input type="search" class="form-control" placeholder="Search member" />
                        </form>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-3 col-lg-6 col-12">
                        <!-- card  -->
                        <div class="card mb-4">
                            <!-- card body  -->
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="avatar avatar-lg">
                                        <img src="../../assets/images/avatar/avatar-1.jpg" alt="" class="rounded-circle" />
                                    </div>
                                    <div class="ms-3">
                                        <h4 class="mb-0"><a href="#" class="text-inherit">Jitu Chauhan</a></h4>
                                        <p class="mb-0">Product Manager</p>
                                    </div>
                                </div>
                                <div class="mt-4 lh-1 d-flex align-items-center">
                                    <a href="#" class="text-body text-primary-hover me-3 texttooltip" data-template="phone">
                                        <i class="fe fe-phone-call fs-4"></i>
                                        <!-- text -->
                                        <div id="phone" class="d-none">
                                            <span>Voice Call</span>
                                        </div>
                                    </a>
                                    <a href="#" class="text-body text-primary-hover me-3 texttooltip" data-template="video">
                                        <i class="fe fe-video fs-4"></i>
                                        <!-- text -->
                                        <div id="video" class="d-none">
                                            <span>Video Call</span>
                                        </div>
                                    </a>
                                    <span class="dropdown">
                                        <a
                                            class="btn-icon btn btn-ghost btn-sm rounded-circle"
                                            href="#"
                                            role="button"
                                            id="DropdownOne"
                                            data-bs-toggle="dropdown"
                                            aria-haspopup="true"
                                            aria-expanded="false">
                                            <i class="fe fe-more-horizontal fs-4"></i>
                                        </a>
                                        <span class="dropdown-menu" aria-labelledby="DropdownOne">
                                            <span class="dropdown-header">Settings</span>
                                            <a class="dropdown-item" href="#">
                                                <i class="fe fe-trash-2 dropdown-item-icon"></i>
                                                Remove
                                            </a>
                                            <a class="dropdown-item" href="#">
                                                <i class="fe fe-edit dropdown-item-icon"></i>
                                                Edit
                                            </a>
                                        </span>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-12">
                        <!-- card  -->
                        <div class="card mb-4">
                            <!-- card body  -->
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <!-- avatar  -->
                                    <div class="avatar avatar-lg">
                                        <img src="../../assets/images/avatar/avatar-2.jpg" alt="" class="rounded-circle" />
                                    </div>
                                    <div class="ms-3">
                                        <h4 class="mb-0"><a href="#" class="text-inherit">Anita Parmar</a></h4>
                                        <p class="mb-0">UX Designer</p>
                                    </div>
                                </div>
                                <div class="mt-4 lh-1 d-flex align-items-center">
                                    <a href="#" class="text-body text-primary-hover me-3 texttooltip" data-template="phone1">
                                        <i class="fe fe-phone-call fs-4"></i>
                                        <!-- text -->
                                        <div id="phone1" class="d-none">
                                            <span>Voice Call</span>
                                        </div>
                                    </a>
                                    <a href="#" class="text-body text-primary-hover me-3 texttooltip" data-template="video1">
                                        <i class="fe fe-video fs-4"></i>
                                        <!-- text -->
                                        <div id="video1" class="d-none">
                                            <span>Video Call</span>
                                        </div>
                                    </a>
                                    <!-- dropdown  -->
                                    <span class="dropdown">
                                        <a
                                            class="btn-icon btn btn-ghost btn-sm rounded-circle"
                                            href="#"
                                            role="button"
                                            id="DropdownTwo"
                                            data-bs-toggle="dropdown"
                                            aria-haspopup="true"
                                            aria-expanded="false">
                                            <i class="fe fe-more-horizontal fs-4"></i>
                                        </a>
                                        <span class="dropdown-menu" aria-labelledby="DropdownTwo">
                                            <span class="dropdown-header">Settings</span>
                                            <a class="dropdown-item" href="#">
                                                <i class="fe fe-trash-2 dropdown-item-icon"></i>
                                                Remove
                                            </a>
                                            <a class="dropdown-item" href="#">
                                                <i class="fe fe-edit dropdown-item-icon"></i>
                                                Edit
                                            </a>
                                        </span>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-12">
                        <!-- card  -->
                        <div class="card mb-4">
                            <!-- card body  -->
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="avatar avatar-lg avatar-warning">
                                        <span class="avatar-initials rounded-circle fs-4">FC</span>
                                    </div>
                                    <div class="ms-3">
                                        <h4 class="mb-0"><a href="#" class="text-inherit">Felicia Cordell</a></h4>
                                        <p class="mb-0">Front End Developer</p>
                                    </div>
                                </div>
                                <div class="mt-4 lh-1 d-flex align-items-center">
                                    <a href="#" class="text-body text-primary-hover me-3 texttooltip" data-template="phone2">
                                        <i class="fe fe-phone-call fs-4"></i>
                                        <!-- text -->
                                        <div id="phone2" class="d-none">
                                            <span>Voice Call</span>
                                        </div>
                                    </a>
                                    <a href="#" class="text-body text-primary-hover me-3 texttooltip" data-template="video2">
                                        <i class="fe fe-video fs-4"></i>
                                        <!-- text -->
                                        <div id="video2" class="d-none">
                                            <span>Video Call</span>
                                        </div>
                                    </a>
                                    <!-- dropdown  -->
                                    <span class="dropdown">
                                        <a
                                            class="btn-icon btn btn-ghost btn-sm rounded-circle"
                                            href="#"
                                            role="button"
                                            id="DropdownThree"
                                            data-bs-toggle="dropdown"
                                            aria-haspopup="true"
                                            aria-expanded="false">
                                            <i class="fe fe-more-horizontal fs-4"></i>
                                        </a>
                                        <span class="dropdown-menu" aria-labelledby="DropdownThree">
                                            <span class="dropdown-header">Settings</span>
                                            <a class="dropdown-item" href="#">
                                                <i class="fe fe-trash-2 dropdown-item-icon"></i>
                                                Remove
                                            </a>
                                            <a class="dropdown-item" href="#">
                                                <i class="fe fe-edit dropdown-item-icon"></i>
                                                Edit
                                            </a>
                                        </span>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-12">
                        <!-- card  -->
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="avatar avatar-lg">
                                        <img src="../../assets/images/avatar/avatar-4.jpg" alt="" class="rounded-circle" />
                                    </div>
                                    <div class="ms-3">
                                        <h4 class="mb-0"><a href="#" class="text-inherit">Carl Britton</a></h4>
                                        <p class="mb-0">Full Stack Developer</p>
                                    </div>
                                </div>
                                <div class="mt-4 lh-1 d-flex align-items-center">
                                    <a href="#" class="text-body text-primary-hover me-3 texttooltip" data-template="phone3">
                                        <i class="fe fe-phone-call fs-4"></i>
                                        <!-- text -->
                                        <div id="phone3" class="d-none">
                                            <span>Voice Call</span>
                                        </div>
                                    </a>
                                    <a href="#" class="text-body text-primary-hover me-3 texttooltip" data-template="video3">
                                        <i class="fe fe-video fs-4"></i>
                                        <!-- text -->
                                        <div id="video3" class="d-none">
                                            <span>Video Call</span>
                                        </div>
                                    </a>
                                    <span class="dropdown">
                                        <a
                                            class="btn-icon btn btn-ghost btn-sm rounded-circle"
                                            href="#"
                                            role="button"
                                            id="DropdownFour"
                                            data-bs-toggle="dropdown"
                                            aria-haspopup="true"
                                            aria-expanded="false">
                                            <i class="fe fe-more-horizontal fs-4"></i>
                                        </a>
                                        <span class="dropdown-menu" aria-labelledby="DropdownFour">
                                            <span class="dropdown-header">Settings</span>
                                            <a class="dropdown-item" href="#">
                                                <i class="fe fe-trash-2 dropdown-item-icon"></i>
                                                Remove
                                            </a>
                                            <a class="dropdown-item" href="#">
                                                <i class="fe fe-edit dropdown-item-icon"></i>
                                                Edit
                                            </a>
                                        </span>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-12">
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="avatar avatar-lg">
                                        <img src="../../assets/images/avatar/avatar-5.jpg" alt="" class="rounded-circle" />
                                    </div>
                                    <div class="ms-3">
                                        <h4 class="mb-0"><a href="#" class="text-inherit">Katherine Wadley</a></h4>
                                        <p class="mb-0">HR Manager</p>
                                    </div>
                                </div>
                                <div class="mt-4 lh-1 d-flex align-items-center">
                                    <a href="#" class="text-body text-primary-hover me-3 texttooltip" data-template="phone4">
                                        <i class="fe fe-phone-call fs-4"></i>
                                        <!-- text -->
                                        <div id="phone4" class="d-none">
                                            <span>Voice Call</span>
                                        </div>
                                    </a>
                                    <a href="#" class="text-body text-primary-hover me-3 texttooltip" data-template="video4">
                                        <i class="fe fe-video fs-4"></i>
                                        <!-- text -->
                                        <div id="video4" class="d-none">
                                            <span>Video Call</span>
                                        </div>
                                    </a>
                                    <span class="dropdown">
                                        <a
                                            class="btn-icon btn btn-ghost btn-sm rounded-circle"
                                            href="#"
                                            role="button"
                                            id="DropdownFive"
                                            data-bs-toggle="dropdown"
                                            aria-haspopup="true"
                                            aria-expanded="false">
                                            <i class="fe fe-more-horizontal fs-4"></i>
                                        </a>
                                        <span class="dropdown-menu" aria-labelledby="DropdownFive">
                                            <span class="dropdown-header">Settings</span>
                                            <a class="dropdown-item" href="#">
                                                <i class="fe fe-trash-2 dropdown-item-icon"></i>
                                                Remove
                                            </a>
                                            <a class="dropdown-item" href="#">
                                                <i class="fe fe-edit dropdown-item-icon"></i>
                                                Edit
                                            </a>
                                        </span>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-12">
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="avatar avatar-lg">
                                        <img src="../../assets/images/avatar/avatar-6.jpg" alt="" class="rounded-circle" />
                                    </div>
                                    <div class="ms-3">
                                        <h4 class="mb-0"><a href="#" class="text-inherit">Kbrian Dobbins</a></h4>
                                        <p class="mb-0">UI Designer</p>
                                    </div>
                                </div>
                                <div class="mt-4 lh-1 d-flex align-items-center">
                                    <a href="#" class="text-body text-primary-hover me-3 texttooltip" data-template="phone5">
                                        <i class="fe fe-phone-call fs-4"></i>
                                        <!-- text -->
                                        <div id="phone5" class="d-none">
                                            <span>Voice Call</span>
                                        </div>
                                    </a>
                                    <a href="#" class="text-body text-primary-hover me-3 texttooltip" data-template="video5">
                                        <i class="fe fe-video fs-4"></i>
                                        <!-- text -->
                                        <div id="video5" class="d-none">
                                            <span>Video Call</span>
                                        </div>
                                    </a>
                                    <span class="dropdown">
                                        <a
                                            class="btn-icon btn btn-ghost btn-sm rounded-circle"
                                            href="#"
                                            role="button"
                                            id="DropdownSix"
                                            data-bs-toggle="dropdown"
                                            aria-haspopup="true"
                                            aria-expanded="false">
                                            <i class="fe fe-more-horizontal fs-4"></i>
                                        </a>
                                        <span class="dropdown-menu" aria-labelledby="DropdownSix">
                                            <span class="dropdown-header">Settings</span>
                                            <a class="dropdown-item" href="#">
                                                <i class="fe fe-trash-2 dropdown-item-icon"></i>
                                                Remove
                                            </a>
                                            <a class="dropdown-item" href="#">
                                                <i class="fe fe-edit dropdown-item-icon"></i>
                                                Edit
                                            </a>
                                        </span>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-12">
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="avatar avatar-lg">
                                        <img src="../../assets/images/avatar/avatar-7.jpg" alt="" class="rounded-circle" />
                                    </div>
                                    <div class="ms-3">
                                        <h4 class="mb-0"><a href="#" class="text-inherit">Felicia Cordell</a></h4>
                                        <p class="mb-0">UI Designer</p>
                                    </div>
                                </div>
                                <div class="mt-4 lh-1 d-flex align-items-center">
                                    <a href="#" class="text-body text-primary-hover me-3 texttooltip" data-template="phone6">
                                        <i class="fe fe-phone-call fs-4"></i>
                                        <!-- text -->
                                        <div id="phone6" class="d-none">
                                            <span>Voice Call</span>
                                        </div>
                                    </a>
                                    <a href="#" class="text-body text-primary-hover me-3 texttooltip" data-template="video6">
                                        <i class="fe fe-video fs-4"></i>
                                        <!-- text -->
                                        <div id="video6" class="d-none">
                                            <span>Video Call</span>
                                        </div>
                                    </a>
                                    <span class="dropdown">
                                        <a
                                            class="btn-icon btn btn-ghost btn-sm rounded-circle"
                                            href="#"
                                            role="button"
                                            id="DropdownSeven"
                                            data-bs-toggle="dropdown"
                                            aria-haspopup="true"
                                            aria-expanded="false">
                                            <i class="fe fe-more-horizontal fs-4"></i>
                                        </a>
                                        <span class="dropdown-menu" aria-labelledby="DropdownSeven">
                                            <span class="dropdown-header">Settings</span>
                                            <a class="dropdown-item" href="#">
                                                <i class="fe fe-trash-2 dropdown-item-icon"></i>
                                                Remove
                                            </a>
                                            <a class="dropdown-item" href="#">
                                                <i class="fe fe-edit dropdown-item-icon"></i>
                                                Edit
                                            </a>
                                        </span>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-12">
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="avatar avatar-lg">
                                        <img src="../../assets/images/avatar/avatar-8.jpg" alt="" class="rounded-circle" />
                                    </div>
                                    <div class="ms-3">
                                        <h4 class="mb-0"><a href="#" class="text-inherit">Rosalie Hutton</a></h4>
                                        <p class="mb-0">Full Stack Developer</p>
                                    </div>
                                </div>
                                <div class="mt-4 lh-1 d-flex align-items-center">
                                    <a href="#" class="text-body text-primary-hover me-3 texttooltip" data-template="phone7">
                                        <i class="fe fe-phone-call fs-4"></i>
                                        <!-- text -->
                                        <div id="phone7" class="d-none">
                                            <span>Voice Call</span>
                                        </div>
                                    </a>
                                    <a href="#" class="text-body text-primary-hover me-3 texttooltip" data-template="video7">
                                        <i class="fe fe-video fs-4"></i>
                                        <!-- text -->
                                        <div id="video7" class="d-none">
                                            <span>Video Call</span>
                                        </div>
                                    </a>
                                    <span class="dropdown">
                                        <a
                                            class="btn-icon btn btn-ghost btn-sm rounded-circle"
                                            href="#"
                                            role="button"
                                            id="DropdownEight"
                                            data-bs-toggle="dropdown"
                                            aria-haspopup="true"
                                            aria-expanded="false">
                                            <i class="fe fe-more-horizontal fs-4"></i>
                                        </a>
                                        <span class="dropdown-menu" aria-labelledby="DropdownEight">
                                            <span class="dropdown-header">Settings</span>
                                            <a class="dropdown-item" href="#">
                                                <i class="fe fe-trash-2 dropdown-item-icon"></i>
                                                Remove
                                            </a>
                                            <a class="dropdown-item" href="#">
                                                <i class="fe fe-edit dropdown-item-icon"></i>
                                                Edit
                                            </a>
                                        </span>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-12">
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="avatar avatar-lg">
                                        <img src="../../assets/images/avatar/avatar-9.jpg" alt="" class="rounded-circle" />
                                    </div>
                                    <div class="ms-3">
                                        <h4 class="mb-0"><a href="#" class="text-inherit">Rmichael Marshall</a></h4>
                                        <p class="mb-0">Product Manager</p>
                                    </div>
                                </div>
                                <div class="mt-4 lh-1 d-flex align-items-center">
                                    <a href="#" class="text-body text-primary-hover me-3 texttooltip" data-template="phone8">
                                        <i class="fe fe-phone-call fs-4"></i>
                                        <!-- text -->
                                        <div id="phone8" class="d-none">
                                            <span>Voice Call</span>
                                        </div>
                                    </a>
                                    <a href="#" class="text-body text-primary-hover me-3 texttooltip" data-template="video8">
                                        <i class="fe fe-video fs-4"></i>
                                        <!-- text -->
                                        <div id="video8" class="d-none">
                                            <span>Video Call</span>
                                        </div>
                                    </a>
                                    <span class="dropdown">
                                        <a
                                            class="btn-icon btn btn-ghost btn-sm rounded-circle"
                                            href="#"
                                            role="button"
                                            id="DropdownNine"
                                            data-bs-toggle="dropdown"
                                            aria-haspopup="true"
                                            aria-expanded="false">
                                            <i class="fe fe-more-horizontal fs-4"></i>
                                        </a>
                                        <span class="dropdown-menu" aria-labelledby="DropdownNine">
                                            <span class="dropdown-header">Settings</span>
                                            <a class="dropdown-item" href="#">
                                                <i class="fe fe-trash-2 dropdown-item-icon"></i>
                                                Remove
                                            </a>
                                            <a class="dropdown-item" href="#">
                                                <i class="fe fe-edit dropdown-item-icon"></i>
                                                Edit
                                            </a>
                                        </span>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-12">
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="avatar avatar-lg avatar-info">
                                        <span class="avatar-initials rounded-circle fs-4">CN</span>
                                    </div>
                                    <div class="ms-3">
                                        <h4 class="mb-0"><a href="#" class="text-inherit">Claire Nonnors</a></h4>
                                        <p class="mb-0">Digital Marketing</p>
                                    </div>
                                </div>
                                <div class="mt-4 lh-1 d-flex align-items-center">
                                    <a href="#" class="text-body text-primary-hover me-3 texttooltip" data-template="phone9">
                                        <i class="fe fe-phone-call fs-4"></i>
                                        <!-- text -->
                                        <div id="phone9" class="d-none">
                                            <span>Voice Call</span>
                                        </div>
                                    </a>
                                    <a href="#" class="text-body text-primary-hover me-3 texttooltip" data-template="video9">
                                        <i class="fe fe-video fs-4"></i>
                                        <!-- text -->
                                        <div id="video9" class="d-none">
                                            <span>Video Call</span>
                                        </div>
                                    </a>
                                    <span class="dropdown">
                                        <a
                                            class="btn-icon btn btn-ghost btn-sm rounded-circle"
                                            href="#"
                                            role="button"
                                            id="DropdownTen"
                                            data-bs-toggle="dropdown"
                                            aria-haspopup="true"
                                            aria-expanded="false">
                                            <i class="fe fe-more-horizontal fs-4"></i>
                                        </a>
                                        <span class="dropdown-menu" aria-labelledby="DropdownTen">
                                            <span class="dropdown-header">Settings</span>
                                            <a class="dropdown-item" href="#">
                                                <i class="fe fe-trash-2 dropdown-item-icon"></i>
                                                Remove
                                            </a>
                                            <a class="dropdown-item" href="#">
                                                <i class="fe fe-edit dropdown-item-icon"></i>
                                                Edit
                                            </a>
                                        </span>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-12">
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="avatar avatar-lg">
                                        <img src="../../assets/images/avatar/avatar-10.jpg" alt="" class="rounded-circle" />
                                    </div>
                                    <div class="ms-3">
                                        <h4 class="mb-0"><a href="#" class="text-inherit">Scott Gloria</a></h4>
                                        <p class="mb-0">UX Designer</p>
                                    </div>
                                </div>
                                <div class="mt-4 lh-1 d-flex align-items-center">
                                    <a href="#" class="text-body text-primary-hover me-3 texttooltip" data-template="phone10">
                                        <i class="fe fe-phone-call fs-4"></i>
                                        <!-- text -->
                                        <div id="phone10" class="d-none">
                                            <span>Voice Call</span>
                                        </div>
                                    </a>
                                    <a href="#" class="text-body text-primary-hover me-3 texttooltip" data-template="video10">
                                        <i class="fe fe-video fs-4"></i>
                                        <!-- text -->
                                        <div id="video10" class="d-none">
                                            <span>Video Call</span>
                                        </div>
                                    </a>
                                    <span class="dropdown">
                                        <a
                                            class="btn-icon btn btn-ghost btn-sm rounded-circle"
                                            href="#"
                                            role="button"
                                            id="DropdownEleven"
                                            data-bs-toggle="dropdown"
                                            aria-haspopup="true"
                                            aria-expanded="false">
                                            <i class="fe fe-more-horizontal fs-4"></i>
                                        </a>
                                        <span class="dropdown-menu" aria-labelledby="DropdownEleven">
                                            <span class="dropdown-header">Settings</span>
                                            <a class="dropdown-item" href="#">
                                                <i class="fe fe-trash-2 dropdown-item-icon"></i>
                                                Remove
                                            </a>
                                            <a class="dropdown-item" href="#">
                                                <i class="fe fe-edit dropdown-item-icon"></i>
                                                Edit
                                            </a>
                                        </span>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-12">
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="avatar avatar-lg">
                                        <img src="../../assets/images/avatar/avatar-11.jpg" alt="" class="rounded-circle" />
                                    </div>
                                    <div class="ms-3">
                                        <h4 class="mb-0"><a href="#" class="text-inherit">Virginia Elkins</a></h4>
                                        <p class="mb-0">Full Stack Developer</p>
                                    </div>
                                </div>
                                <div class="mt-4 lh-1 d-flex align-items-center">
                                    <a href="#" class="text-body text-primary-hover me-3 texttooltip" data-template="phone11">
                                        <i class="fe fe-phone-call fs-4"></i>
                                        <!-- text -->
                                        <div id="phone11" class="d-none">
                                            <span>Voice Call</span>
                                        </div>
                                    </a>
                                    <a href="#" class="text-body text-primary-hover me-3 texttooltip" data-template="video11">
                                        <i class="fe fe-video fs-4"></i>
                                        <!-- text -->
                                        <div id="video11" class="d-none">
                                            <span>Video Call</span>
                                        </div>
                                    </a>
                                    <span class="dropdown">
                                        <a
                                            class="btn-icon btn btn-ghost btn-sm rounded-circle"
                                            href="#"
                                            role="button"
                                            id="DropdownThirteen"
                                            data-bs-toggle="dropdown"
                                            aria-haspopup="true"
                                            aria-expanded="false">
                                            <i class="fe fe-more-horizontal fs-4"></i>
                                        </a>
                                        <span class="dropdown-menu" aria-labelledby="DropdownThirteen">
                                            <span class="dropdown-header">Settings</span>
                                            <a class="dropdown-item" href="#">
                                                <i class="fe fe-trash-2 dropdown-item-icon"></i>
                                                Remove
                                            </a>
                                            <a class="dropdown-item" href="#">
                                                <i class="fe fe-edit dropdown-item-icon"></i>
                                                Edit
                                            </a>
                                        </span>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-12">
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="avatar avatar-lg">
                                        <img src="../../assets/images/avatar/avatar-2.jpg" alt="" class="rounded-circle" />
                                    </div>
                                    <div class="ms-3">
                                        <h4 class="mb-0"><a href="#" class="text-inherit">Anita Parmar</a></h4>
                                        <p class="mb-0">UX Designer</p>
                                    </div>
                                </div>
                                <div class="mt-4 lh-1 d-flex align-items-center">
                                    <a href="#" class="text-body text-primary-hover me-3 texttooltip" data-template="phone12">
                                        <i class="fe fe-phone-call fs-4"></i>
                                        <!-- text -->
                                        <div id="phone12" class="d-none">
                                            <span>Voice Call</span>
                                        </div>
                                    </a>
                                    <a href="#" class="text-body text-primary-hover me-3 texttooltip" data-template="video12">
                                        <i class="fe fe-video fs-4"></i>
                                        <!-- text -->
                                        <div id="video12" class="d-none">
                                            <span>Video Call</span>
                                        </div>
                                    </a>
                                    <span class="dropdown">
                                        <a
                                            class="btn-icon btn btn-ghost btn-sm rounded-circle"
                                            href="#"
                                            role="button"
                                            id="DropdownFourteen"
                                            data-bs-toggle="dropdown"
                                            aria-haspopup="true"
                                            aria-expanded="false">
                                            <i class="fe fe-more-horizontal fs-4"></i>
                                        </a>
                                        <span class="dropdown-menu" aria-labelledby="DropdownFourteen">
                                            <span class="dropdown-header">Settings</span>
                                            <a class="dropdown-item" href="#">
                                                <i class="fe fe-trash-2 dropdown-item-icon"></i>
                                                Remove
                                            </a>
                                            <a class="dropdown-item" href="#">
                                                <i class="fe fe-edit dropdown-item-icon"></i>
                                                Edit
                                            </a>
                                        </span>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-12">
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="avatar avatar-lg">
                                        <img src="../../assets/images/avatar/avatar-5.jpg" alt="" class="rounded-circle" />
                                    </div>
                                    <div class="ms-3">
                                        <h4 class="mb-0"><a href="#" class="text-inherit">Katherine Wadley</a></h4>
                                        <p class="mb-0">HR Manager</p>
                                    </div>
                                </div>
                                <div class="mt-4 lh-1 d-flex align-items-center">
                                    <a href="#" class="text-body text-primary-hover me-3 texttooltip" data-template="phone14">
                                        <i class="fe fe-phone-call fs-4"></i>
                                        <!-- text -->
                                        <div id="phone14" class="d-none">
                                            <span>Voice Call</span>
                                        </div>
                                    </a>
                                    <a href="#" class="text-body text-primary-hover me-3 texttooltip" data-template="video14">
                                        <i class="fe fe-video fs-4"></i>
                                        <!-- text -->
                                        <div id="video14" class="d-none">
                                            <span>Video Call</span>
                                        </div>
                                    </a>
                                    <span class="dropdown">
                                        <a
                                            class="btn-icon btn btn-ghost btn-sm rounded-circle"
                                            href="#"
                                            role="button"
                                            id="DropdownSixteen"
                                            data-bs-toggle="dropdown"
                                            aria-haspopup="true"
                                            aria-expanded="false">
                                            <i class="fe fe-more-horizontal fs-4"></i>
                                        </a>
                                        <span class="dropdown-menu" aria-labelledby="DropdownSixteen">
                                            <span class="dropdown-header">Settings</span>
                                            <a class="dropdown-item" href="#">
                                                <i class="fe fe-trash-2 dropdown-item-icon"></i>
                                                Remove
                                            </a>
                                            <a class="dropdown-item" href="#">
                                                <i class="fe fe-edit dropdown-item-icon"></i>
                                                Edit
                                            </a>
                                        </span>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-12">
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="avatar avatar-lg avatar-primary">
                                        <span class="avatar-initials rounded-circle fs-4">FC</span>
                                    </div>
                                    <div class="ms-3">
                                        <h4 class="mb-0"><a href="#" class="text-inherit">Felicia Cordell</a></h4>
                                        <p class="mb-0">Front End Developer</p>
                                    </div>
                                </div>
                                <div class="mt-4 lh-1 d-flex align-items-center">
                                    <a href="#" class="text-body text-primary-hover me-3 texttooltip" data-template="phone19">
                                        <i class="fe fe-phone-call fs-4"></i>
                                        <!-- text -->
                                        <div id="phone19" class="d-none">
                                            <span>Voice Call</span>
                                        </div>
                                    </a>
                                    <a href="#" class="text-body text-primary-hover me-3 texttooltip" data-template="video19">
                                        <i class="fe fe-video fs-4"></i>
                                        <!-- text -->
                                        <div id="video19" class="d-none">
                                            <span>Video Call</span>
                                        </div>
                                    </a>
                                    <span class="dropdown">
                                        <a
                                            class="btn-icon btn btn-ghost btn-sm rounded-circle"
                                            href="#"
                                            role="button"
                                            id="DropdownFifteen"
                                            data-bs-toggle="dropdown"
                                            aria-haspopup="true"
                                            aria-expanded="false">
                                            <i class="fe fe-more-horizontal fs-4"></i>
                                        </a>
                                        <span class="dropdown-menu" aria-labelledby="DropdownFifteen">
                                            <span class="dropdown-header">Settings</span>
                                            <a class="dropdown-item" href="#">
                                                <i class="fe fe-trash-2 dropdown-item-icon"></i>
                                                Remove
                                            </a>
                                            <a class="dropdown-item" href="#">
                                                <i class="fe fe-edit dropdown-item-icon"></i>
                                                Edit
                                            </a>
                                        </span>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="avatar avatar-lg">
                                        <img src="../../assets/images/avatar/avatar-4.jpg" alt="" class="rounded-circle" />
                                    </div>
                                    <div class="ms-3">
                                        <h4 class="mb-0"><a href="#" class="text-inherit">Carl Britton</a></h4>
                                        <p class="mb-0">Full Stack Developer</p>
                                    </div>
                                </div>
                                <div class="mt-4 lh-1 d-flex align-items-center">
                                    <a href="#" class="text-body text-primary-hover me-3 texttooltip" data-template="phone13">
                                        <i class="fe fe-phone-call fs-4"></i>
                                        <!-- text -->
                                        <div id="phone13" class="d-none">
                                            <span>Voice Call</span>
                                        </div>
                                    </a>
                                    <a href="#" class="text-body text-primary-hover me-3 texttooltip" data-template="video13">
                                        <i class="fe fe-video fs-4"></i>
                                        <!-- text -->
                                        <div id="video13" class="d-none">
                                            <span>Video Call</span>
                                        </div>
                                    </a>
                                    <span class="dropdown">
                                        <a
                                            class="btn-icon btn btn-ghost btn-sm rounded-circle"
                                            href="#"
                                            role="button"
                                            id="DropdownEighteen"
                                            data-bs-toggle="dropdown"
                                            aria-haspopup="true"
                                            aria-expanded="false">
                                            <i class="fe fe-more-horizontal fs-4"></i>
                                        </a>
                                        <span class="dropdown-menu" aria-labelledby="DropdownEighteen">
                                            <span class="dropdown-header">Settings</span>
                                            <a class="dropdown-item" href="#">
                                                <i class="fe fe-trash-2 dropdown-item-icon"></i>
                                                Remove
                                            </a>
                                            <a class="dropdown-item" href="#">
                                                <i class="fe fe-edit dropdown-item-icon"></i>
                                                Edit
                                            </a>
                                        </span>
                                    </span>
                                </div>
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

</body>

</html>