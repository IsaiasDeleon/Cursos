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
                    <div class="col-12 mb-4">
                        <!-- nav -->
                        <ul class="nav nav-lb-tab">
                            <!-- nav-link -->
                            <li class="nav-item ms-0 me-3">
                                <a class="nav-link" href="project-overview.html">Overview</a>
                            </li>
                            <li class="nav-item mx-3">
                                <a class="nav-link" href="project-task.html">Task</a>
                            </li>
                            <!-- nav-link -->
                            <li class="nav-item mx-3">
                                <a class="nav-link" href="project-budget.html">Budget</a>
                            </li>
                            <!-- nav-link -->
                            <li class="nav-item mx-3">
                                <a class="nav-link active" href="project-files.html">Files</a>
                            </li>
                            <!-- nav-link -->
                            <li class="nav-item mx-3">
                                <a class="nav-link" href="project-team.html">Team</a>
                            </li>
                            <!-- nav-link -->
                            <li class="nav-item mx-3">
                                <a class="nav-link" href="project-summary.html">Summary</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- row -->
                <div class="row mb-4 mb-xl-0">
                    <!-- col -->
                    <div class="col-xl-2 col-lg-4 col-md-6 col-12">
                        <!-- search -->
                        <div class="mb-4">
                            <input type="search" class="form-control" placeholder="Search File name" />
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
                                <h4 class="mb-0">Files</h4>
                            </div>
                            <!-- table -->
                            <div class="table-responsive overflow-y-hidden">
                                <table class="table mb-0 text-nowrap table-hover table-centered">
                                    <thead class="table-light">
                                        <tr>
                                            <th>Name</th>
                                            <th>File size</th>
                                            <th>Modified</th>
                                            <th>Uploaded by</th>
                                            <th>Options</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="icon-shape icon-lg rounded-3 bg-light-primary">
                                                        <a href="#">
                                                            <svg
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                width="24"
                                                                height="24"
                                                                fill="currentColor"
                                                                class="bi bi-file-earmark-spreadsheet text-primary"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2V9H3V2a1 1 0 0 1 1-1h5.5v2zM3 12v-2h2v2H3zm0 1h2v2H4a1 1 0 0 1-1-1v-1zm3 2v-2h3v2H6zm4 0v-2h3v1a1 1 0 0 1-1 1h-2zm3-3h-3v-2h3v2zm-7 0v-2h3v2H6z" />
                                                            </svg>
                                                        </a>
                                                    </div>
                                                    <div class="ms-3">
                                                        <h5 class="mb-0">
                                                            <a href="#" class="text-inherit">Admin-Dashboard-Design.excl</a>
                                                        </h5>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>2.3MB</td>
                                            <td>27 Sept, 2021</td>
                                            <td>
                                                <img src="../../assets/images/avatar/avatar-1.jpg" alt="" class="rounded-circle avatar avatar-sm" />
                                            </td>
                                            <td>
                                                <a href="#" class="text-body text-primary-hover texttooltip" data-template="five">
                                                    <i class="fe fe-download fs-5"></i>

                                                    <div id="five" class="d-none">
                                                        <h6 class="mb-0 text-white">Download</h6>
                                                    </div>
                                                </a>
                                                <a href="#" class="text-body text-primary-hover ms-3 texttooltip" data-template="six">
                                                    <i class="fe fe-link fs-5"></i>
                                                    <div id="six" class="d-none">
                                                        <h6 class="mb-0 text-white">Link</h6>
                                                    </div>
                                                </a>
                                            </td>
                                            <td>
                                                <span class="dropdown dropstart">
                                                    <a
                                                        class="btn-icon btn btn-ghost btn-sm rounded-circle"
                                                        href="#"
                                                        role="button"
                                                        id="DropdownOne"
                                                        data-bs-toggle="dropdown"
                                                        aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <i class="fe fe-more-vertical"></i>
                                                    </a>
                                                    <span class="dropdown-menu" aria-labelledby="DropdownOne">
                                                        <span class="dropdown-header">Settings</span>
                                                        <a class="dropdown-item" href="#">Action</a>
                                                        <a class="dropdown-item" href="#">Another action</a>
                                                        <a class="dropdown-item" href="#">Something else here</a>
                                                    </span>
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="icon-shape icon-lg rounded-3 bg-light-info">
                                                        <a href="#">
                                                            <svg
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                width="24"
                                                                height="24"
                                                                fill="currentColor"
                                                                class="bi bi-file-image text-info"
                                                                viewBox="0 0 16 16">
                                                                <path d="M8.002 5.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
                                                                <path
                                                                    d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM3 2a1 1 0 0 1 1-1h8a1 1 0 0 1 1 1v8l-2.083-2.083a.5.5 0 0 0-.76.063L8 11 5.835 9.7a.5.5 0 0 0-.611.076L3 12V2z" />
                                                            </svg>
                                                        </a>
                                                    </div>
                                                    <div class="ms-3">
                                                        <h5 class="mb-0">
                                                            <a href="#" class="text-inherit">Admin-Dashboard-Design.jpeg</a>
                                                        </h5>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>10MB</td>
                                            <td>29 Sept, 2021</td>
                                            <td>
                                                <img src="../../assets/images/avatar/avatar-2.jpg" alt="" class="rounded-circle avatar avatar-sm" />
                                            </td>
                                            <td>
                                                <a href="#" class="text-body text-primary-hover texttooltip" data-template="seven">
                                                    <i class="fe fe-download fs-5"></i>
                                                    <div id="seven" class="d-none">
                                                        <h6 class="mb-0 text-white">Download</h6>
                                                    </div>
                                                </a>
                                                <a href="#" class="text-body text-primary-hover ms-3 texttooltip" data-template="eight">
                                                    <i class="fe fe-link fs-5"></i>
                                                    <div id="eight" class="d-none">
                                                        <h6 class="mb-0 text-white">Link</h6>
                                                    </div>
                                                </a>
                                            </td>
                                            <td>
                                                <span class="dropdown dropstart">
                                                    <a
                                                        class="btn-icon btn btn-ghost btn-sm rounded-circle"
                                                        href="#"
                                                        role="button"
                                                        id="DropdownTwo"
                                                        data-bs-toggle="dropdown"
                                                        aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <i class="fe fe-more-vertical"></i>
                                                    </a>
                                                    <span class="dropdown-menu" aria-labelledby="DropdownTwo">
                                                        <span class="dropdown-header">Settings</span>
                                                        <a class="dropdown-item" href="#">Action</a>
                                                        <a class="dropdown-item" href="#">Another action</a>
                                                        <a class="dropdown-item" href="#">Something else here</a>
                                                    </span>
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="icon-shape icon-lg rounded-3 bg-light-success">
                                                        <a href="#">
                                                            <svg
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                width="24"
                                                                height="24"
                                                                fill="currentColor"
                                                                class="bi bi-file-word text-success"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M4.879 4.515a.5.5 0 0 1 .606.364l1.036 4.144.997-3.655a.5.5 0 0 1 .964 0l.997 3.655 1.036-4.144a.5.5 0 0 1 .97.242l-1.5 6a.5.5 0 0 1-.967.01L8 7.402l-1.018 3.73a.5.5 0 0 1-.967-.01l-1.5-6a.5.5 0 0 1 .364-.606z" />
                                                                <path
                                                                    d="M4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4zm0 1h8a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1z" />
                                                            </svg>
                                                        </a>
                                                    </div>
                                                    <div class="ms-3">
                                                        <h5 class="mb-0">
                                                            <a href="#" class="text-inherit">Geeks UI Description.doc</a>
                                                        </h5>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>45MB</td>
                                            <td>01 Oct, 2021</td>
                                            <td>
                                                <span class="avatar avatar-sm avatar-primary">
                                                    <span class="avatar-initials rounded-circle">GK</span>
                                                </span>
                                            </td>
                                            <td>
                                                <a href="#" class="text-body text-primary-hover texttooltip" data-template="nine">
                                                    <i class="fe fe-download fs-5"></i>
                                                    <div id="nine" class="d-none">
                                                        <h6 class="mb-0 text-white">Download</h6>
                                                    </div>
                                                </a>
                                                <a href="#" class="text-body text-primary-hover ms-3 texttooltip" data-template="ten">
                                                    <i class="fe fe-link fs-5"></i>
                                                    <div id="ten" class="d-none">
                                                        <h6 class="mb-0 text-white">Link</h6>
                                                    </div>
                                                </a>
                                            </td>
                                            <td>
                                                <span class="dropdown dropstart">
                                                    <a
                                                        class="btn-icon btn btn-ghost btn-sm rounded-circle"
                                                        href="#"
                                                        role="button"
                                                        id="DropdownThree"
                                                        data-bs-toggle="dropdown"
                                                        aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <i class="fe fe-more-vertical"></i>
                                                    </a>
                                                    <span class="dropdown-menu" aria-labelledby="DropdownThree">
                                                        <span class="dropdown-header">Settings</span>
                                                        <a class="dropdown-item" href="#">Action</a>
                                                        <a class="dropdown-item" href="#">Another action</a>
                                                        <a class="dropdown-item" href="#">Something else here</a>
                                                    </span>
                                                </span>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="icon-shape icon-lg rounded-3 bg-light-danger">
                                                        <a href="#">
                                                            <svg
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                width="24"
                                                                height="24"
                                                                fill="currentColor"
                                                                class="bi bi-file-ppt text-danger"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2zm10-1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1z" />
                                                                <path d="M6 5a1 1 0 0 1 1-1h1.188a2.75 2.75 0 0 1 0 5.5H7v2a.5.5 0 0 1-1 0V5zm1 3.5h1.188a1.75 1.75 0 1 0 0-3.5H7v3.5z" />
                                                            </svg>
                                                        </a>
                                                    </div>
                                                    <div class="ms-3">
                                                        <h5 class="mb-0">
                                                            <a href="#" class="text-inherit">Geeks-UI-Marketing-Process.ppt</a>
                                                        </h5>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>122MB</td>
                                            <td>04 Oct, 2021</td>
                                            <td>
                                                <img src="../../assets/images/avatar/avatar-4.jpg" alt="" class="rounded-circle avatar avatar-sm" />
                                            </td>
                                            <td>
                                                <a href="#" class="text-body text-primary-hover texttooltip" data-template="eleven">
                                                    <i class="fe fe-download fs-5"></i>
                                                    <div id="eleven" class="d-none">
                                                        <h6 class="mb-0 text-white">Download</h6>
                                                    </div>
                                                </a>
                                                <a href="#" class="text-body text-primary-hover ms-3 texttooltip" data-template="twelve">
                                                    <i class="fe fe-link fs-5"></i>
                                                    <div id="twelve" class="d-none">
                                                        <h6 class="mb-0 text-white">Link</h6>
                                                    </div>
                                                </a>
                                            </td>
                                            <td>
                                                <span class="dropdown dropstart">
                                                    <a
                                                        class="btn-icon btn btn-ghost btn-sm rounded-circle"
                                                        href="#"
                                                        role="button"
                                                        id="DropdownFive"
                                                        data-bs-toggle="dropdown"
                                                        aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <i class="fe fe-more-vertical"></i>
                                                    </a>
                                                    <span class="dropdown-menu" aria-labelledby="DropdownFive">
                                                        <span class="dropdown-header">Settings</span>
                                                        <a class="dropdown-item" href="#">Action</a>
                                                        <a class="dropdown-item" href="#">Another action</a>
                                                        <a class="dropdown-item" href="#">Something else here</a>
                                                    </span>
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="icon-shape icon-lg rounded-3 bg-light-warning">
                                                        <a href="#">
                                                            <svg
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                width="24"
                                                                height="24"
                                                                fill="currentColor"
                                                                class="bi bi-file-text text-warning"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M5 4a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1H5zm-.5 2.5A.5.5 0 0 1 5 6h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5zM5 8a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1H5zm0 2a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1H5z" />
                                                                <path
                                                                    d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2zm10-1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1z" />
                                                            </svg>
                                                        </a>
                                                    </div>
                                                    <div class="ms-3">
                                                        <h5 class="mb-0">
                                                            <a href="#" class="text-inherit">Geeks-UI-Marketing-Process.txt</a>
                                                        </h5>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>43.5MB</td>
                                            <td>06 Oct, 2021</td>
                                            <td>
                                                <span class="avatar avatar-sm avatar-success">
                                                    <span class="avatar-initials rounded-circle">GK</span>
                                                </span>
                                            </td>
                                            <td>
                                                <a href="#" class="text-body text-primary-hover texttooltip" data-template="thirteen">
                                                    <i class="fe fe-download fs-5"></i>
                                                    <div id="thirteen" class="d-none">
                                                        <h6 class="mb-0 text-white">Download</h6>
                                                    </div>
                                                </a>
                                                <a href="#" class="text-body text-primary-hover ms-3 texttooltip" data-template="fourteen">
                                                    <i class="fe fe-link fs-5"></i>
                                                    <div id="fourteen" class="d-none">
                                                        <h6 class="mb-0 text-white">Link</h6>
                                                    </div>
                                                </a>
                                            </td>
                                            <td>
                                                <span class="dropdown dropstart">
                                                    <a
                                                        class="btn-icon btn btn-ghost btn-sm rounded-circle"
                                                        href="#"
                                                        role="button"
                                                        id="DropdownFour"
                                                        data-bs-toggle="dropdown"
                                                        aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <i class="fe fe-more-vertical"></i>
                                                    </a>
                                                    <span class="dropdown-menu" aria-labelledby="DropdownFour">
                                                        <span class="dropdown-header">Settings</span>
                                                        <a class="dropdown-item" href="#">Action</a>
                                                        <a class="dropdown-item" href="#">Another action</a>
                                                        <a class="dropdown-item" href="#">Something else here</a>
                                                    </span>
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="icon-shape icon-lg rounded-3 bg-light-danger">
                                                        <a href="#">
                                                            <svg
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                width="24"
                                                                height="24"
                                                                fill="currentColor"
                                                                class="bi bi-file-earmark-slides text-danger"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M5 6a.5.5 0 0 0-.496.438l-.5 4A.5.5 0 0 0 4.5 11h3v2.016c-.863.055-1.5.251-1.5.484 0 .276.895.5 2 .5s2-.224 2-.5c0-.233-.637-.429-1.5-.484V11h3a.5.5 0 0 0 .496-.562l-.5-4A.5.5 0 0 0 11 6H5zm2 3.78V7.22c0-.096.106-.156.19-.106l2.13 1.279a.125.125 0 0 1 0 .214l-2.13 1.28A.125.125 0 0 1 7 9.778z" />
                                                                <path
                                                                    d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5v2z" />
                                                            </svg>
                                                        </a>
                                                    </div>
                                                    <div class="ms-3">
                                                        <h5 class="mb-0">
                                                            <a href="#" class="text-inherit">Geeks-UI-promo-trailer-template.mov</a>
                                                        </h5>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>115MB</td>
                                            <td>08 Oct, 2021</td>
                                            <td>
                                                <img src="../../assets/images/avatar/avatar-6.jpg" alt="" class="rounded-circle avatar avatar-sm" />
                                            </td>
                                            <td>
                                                <a href="#" class="text-body text-primary-hover texttooltip" data-template="fifteen">
                                                    <i class="fe fe-download fs-5"></i>
                                                    <div id="fifteen" class="d-none">
                                                        <h6 class="mb-0 text-white">Download</h6>
                                                    </div>
                                                </a>
                                                <a href="#" class="text-body text-primary-hover ms-3 texttooltip" data-template="sixteen">
                                                    <i class="fe fe-link fs-5"></i>
                                                    <div id="sixteen" class="d-none">
                                                        <h6 class="mb-0 text-white">Link</h6>
                                                    </div>
                                                </a>
                                            </td>
                                            <td>
                                                <span class="dropdown dropstart">
                                                    <a
                                                        class="btn-icon btn btn-ghost btn-sm rounded-circle"
                                                        href="#"
                                                        role="button"
                                                        id="DropdownSix"
                                                        data-bs-toggle="dropdown"
                                                        aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <i class="fe fe-more-vertical"></i>
                                                    </a>
                                                    <span class="dropdown-menu" aria-labelledby="DropdownSix">
                                                        <span class="dropdown-header">Settings</span>
                                                        <a class="dropdown-item" href="#">Action</a>
                                                        <a class="dropdown-item" href="#">Another action</a>
                                                        <a class="dropdown-item" href="#">Something else here</a>
                                                    </span>
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="icon-shape icon-lg rounded-3 bg-light-success">
                                                        <a href="#">
                                                            <svg
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                width="24"
                                                                height="24"
                                                                fill="currentColor"
                                                                class="bi bi-file-excel text-success"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M5.18 4.616a.5.5 0 0 1 .704.064L8 7.219l2.116-2.54a.5.5 0 1 1 .768.641L8.651 8l2.233 2.68a.5.5 0 0 1-.768.64L8 8.781l-2.116 2.54a.5.5 0 0 1-.768-.641L7.349 8 5.116 5.32a.5.5 0 0 1 .064-.704z" />
                                                                <path
                                                                    d="M4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4zm0 1h8a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1z" />
                                                            </svg>
                                                        </a>
                                                    </div>
                                                    <div class="ms-3">
                                                        <h5 class="mb-0">
                                                            <a href="#" class="text-inherit">Earning-from-Dashboard.xlsx</a>
                                                        </h5>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>55MB</td>
                                            <td>12 Oct, 2021</td>
                                            <td>
                                                <span class="avatar avatar-sm avatar-danger">
                                                    <span class="avatar-initials rounded-circle">GK</span>
                                                </span>
                                            </td>
                                            <td>
                                                <a href="#" class="text-body text-primary-hover texttooltip" data-template="seventeen">
                                                    <i class="fe fe-download fs-5"></i>
                                                    <div id="seventeen" class="d-none">
                                                        <h6 class="mb-0 text-white">Download</h6>
                                                    </div>
                                                </a>
                                                <a href="#" class="text-body text-primary-hover ms-3 texttooltip" data-template="eighteen">
                                                    <i class="fe fe-link fs-5"></i>
                                                    <div id="eighteen" class="d-none">
                                                        <h6 class="mb-0 text-white">Link</h6>
                                                    </div>
                                                </a>
                                            </td>
                                            <td class="align-middle">
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
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="icon-shape icon-lg rounded-3 bg-light-danger">
                                                        <a href="#">
                                                            <svg
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                width="24"
                                                                height="24"
                                                                fill="currentColor"
                                                                class="bi bi-file-ppt text-danger"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2zm10-1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1z" />
                                                                <path d="M6 5a1 1 0 0 1 1-1h1.188a2.75 2.75 0 0 1 0 5.5H7v2a.5.5 0 0 1-1 0V5zm1 3.5h1.188a1.75 1.75 0 1 0 0-3.5H7v3.5z" />
                                                            </svg>
                                                        </a>
                                                    </div>
                                                    <div class="ms-3">
                                                        <h5 class="mb-0">
                                                            <a href="#" class="text-inherit">Geeks-UI-Marketing-Process.ppt</a>
                                                        </h5>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="align-middle">122MB</td>
                                            <td class="align-middle">04 Oct, 2021</td>
                                            <td>
                                                <img src="../../assets/images/avatar/avatar-4.jpg" alt="" class="rounded-circle avatar avatar-sm" />
                                            </td>
                                            <td class="align-middle">
                                                <a href="#" class="text-body text-primary-hover texttooltip" data-template="nineteen">
                                                    <i class="fe fe-download fs-5"></i>
                                                    <div id="nineteen" class="d-none">
                                                        <h6 class="mb-0 text-white">Download</h6>
                                                    </div>
                                                </a>
                                                <a href="#" class="text-body text-primary-hover ms-3 texttooltip" data-template="twenty">
                                                    <i class="fe fe-link fs-5"></i>
                                                    <div id="twenty" class="d-none">
                                                        <h6 class="mb-0 text-white">Link</h6>
                                                    </div>
                                                </a>
                                            </td>
                                            <td class="align-middle">
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
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="icon-shape icon-lg rounded-3 bg-light-warning">
                                                        <a href="#">
                                                            <svg
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                width="24"
                                                                height="24"
                                                                fill="currentColor"
                                                                class="bi bi-file-text text-warning"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M5 4a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1H5zm-.5 2.5A.5.5 0 0 1 5 6h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5zM5 8a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1H5zm0 2a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1H5z" />
                                                                <path
                                                                    d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2zm10-1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1z" />
                                                            </svg>
                                                        </a>
                                                    </div>
                                                    <div class="ms-3">
                                                        <h5 class="mb-0">
                                                            <a href="#" class="text-inherit">Geeks-UI-Marketing-Process.txt</a>
                                                        </h5>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="align-middle">43.5MB</td>
                                            <td class="align-middle">06 Oct, 2021</td>
                                            <td>
                                                <span class="avatar avatar-sm avatar-success">
                                                    <span class="avatar-initials rounded-circle">GK</span>
                                                </span>
                                            </td>
                                            <td class="align-middle">
                                                <a href="#" class="text-body text-primary-hover texttooltip" data-template="twentyOne">
                                                    <i class="fe fe-download fs-5"></i>
                                                    <div id="twentyOne" class="d-none">
                                                        <h6 class="mb-0 text-white">Download</h6>
                                                    </div>
                                                </a>
                                                <a href="#" class="text-body text-primary-hover ms-3 texttooltip" data-template="twentyTwo">
                                                    <i class="fe fe-link fs-5"></i>
                                                    <div id="twentyTwo" class="d-none">
                                                        <h6 class="mb-0 text-white">Link</h6>
                                                    </div>
                                                </a>
                                            </td>
                                            <td class="align-middle">
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
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="icon-shape icon-lg rounded-3 bg-light-danger">
                                                        <a href="#">
                                                            <svg
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                width="24"
                                                                height="24"
                                                                fill="currentColor"
                                                                class="bi bi-file-earmark-slides text-danger"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M5 6a.5.5 0 0 0-.496.438l-.5 4A.5.5 0 0 0 4.5 11h3v2.016c-.863.055-1.5.251-1.5.484 0 .276.895.5 2 .5s2-.224 2-.5c0-.233-.637-.429-1.5-.484V11h3a.5.5 0 0 0 .496-.562l-.5-4A.5.5 0 0 0 11 6H5zm2 3.78V7.22c0-.096.106-.156.19-.106l2.13 1.279a.125.125 0 0 1 0 .214l-2.13 1.28A.125.125 0 0 1 7 9.778z" />
                                                                <path
                                                                    d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5v2z" />
                                                            </svg>
                                                        </a>
                                                    </div>
                                                    <div class="ms-3">
                                                        <h5 class="mb-0">
                                                            <a href="#" class="text-inherit">Geeks-UI-promo-trailer-template.mov</a>
                                                        </h5>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="align-middle">115MB</td>
                                            <td class="align-middle">08 Oct, 2021</td>
                                            <td>
                                                <img src="../../assets/images/avatar/avatar-6.jpg" alt="" class="rounded-circle avatar avatar-sm" />
                                            </td>
                                            <td class="align-middle">
                                                <a href="#" class="text-body text-primary-hover texttooltip" data-template="twentyThree">
                                                    <i class="fe fe-download fs-5"></i>
                                                    <div id="twentyThree" class="d-none">
                                                        <h6 class="mb-0 text-white">Download</h6>
                                                    </div>
                                                </a>
                                                <a href="#" class="text-body text-primary-hover ms-3 texttooltip" data-template="twentyFour">
                                                    <i class="fe fe-link fs-5"></i>
                                                    <div id="twentyFour" class="d-none">
                                                        <h6 class="mb-0 text-white">Link</h6>
                                                    </div>
                                                </a>
                                            </td>
                                            <td class="align-middle">
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

    <!-- Js del proveedor -->
    <script src="../../assets/libs/tippy.js/dist/tippy-bundle.umd.min.js"></script>

    <script src="../../assets/js/vendors/tooltip.js"></script>

</body>

</html>