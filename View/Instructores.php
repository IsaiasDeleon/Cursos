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
                    <!-- Page Header -->
                    <div class="col-lg-12 col-md-12 col-12">
                        <div class="border-bottom pb-3 mb-3 d-flex justify-content-between align-items-center">
                            <div class="mb-2 mb-lg-0">
                                <h1 class="mb-1 h2 fw-bold">
                                    Instructor
                                    <span class="fs-5">(12,105)</span>
                                </h1>
                                <!-- Breadcrumb  -->
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item">
                                            <a href="../dashboard/admin-dashboard.html">Dashboard</a>
                                        </li>
                                        <li class="breadcrumb-item"><a href="#">User</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Instructor</li>
                                    </ol>
                                </nav>
                            </div>
                            <div class="nav btn-group" role="tablist">
                                <button class="btn btn-outline-secondary active" data-bs-toggle="tab" data-bs-target="#tabPaneGrid" role="tab" aria-controls="tabPaneGrid" aria-selected="true">
                                    <span class="fe fe-grid"></span>
                                </button>
                                <button class="btn btn-outline-secondary" data-bs-toggle="tab" data-bs-target="#tabPaneList" role="tab" aria-controls="tabPaneList" aria-selected="false">
                                    <span class="fe fe-list"></span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-12">
                        <!-- Tab -->
                        <div class="tab-content">
                            <!-- Tab pane -->
                            <div class="tab-pane fade show active" id="tabPaneGrid" role="tabpanel" aria-labelledby="tabPaneGrid">
                                <div class="mb-4">
                                    <input type="search" class="form-control" placeholder="Search Instructor" >
                                </div>
                                <div class="row">
                                    <div class="col-xl-3 col-lg-6 col-md-6 col-12">
                                        <!-- Card -->
                                        <div class="card mb-4">
                                            <!-- Card body -->
                                            <div class="card-body">
                                                <div class="text-center">
                                                    <img src="../../assets/images/avatar/avatar-11.jpg" class="rounded-circle avatar-xl mb-3" alt="" >
                                                    <h4 class="mb-0">Wade Warren</h4>
                                                    <p class="mb-0">Web Developer, Designer</p>
                                                </div>
                                                <div class="d-flex justify-content-between border-bottom py-2 mt-4">
                                                    <span>Students</span>
                                                    <span class="text-dark">50,274</span>
                                                </div>
                                                <div class="d-flex justify-content-between border-bottom py-2">
                                                    <span>Instructor Rating</span>
                                                    <span class="text-warning">
                                                        4.5
                                                        <span>
                                                            <svg
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                width="11"
                                                                height="11"
                                                                fill="currentColor"
                                                                class="bi bi-star-fill text-warning"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" >
                                                            </svg>
                                                        </span>
                                                    </span>
                                                </div>
                                                <div class="d-flex justify-content-between pt-2">
                                                    <span>Courses</span>
                                                    <span class="text-dark">12</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-6 col-md-6 col-12">
                                        <!-- Card -->
                                        <div class="card mb-4">
                                            <!-- Card body -->
                                            <div class="card-body">
                                                <div class="text-center">
                                                    <img src="../../assets/images/avatar/avatar-13.jpg" class="rounded-circle avatar-xl mb-3" alt="" >
                                                    <h4 class="mb-0">Dianna Smiley</h4>
                                                    <p class="mb-0">Engineering Architect</p>
                                                </div>
                                                <div class="d-flex justify-content-between border-bottom py-2 mt-4">
                                                    <span>Students</span>
                                                    <span class="text-dark">1,004</span>
                                                </div>
                                                <div class="d-flex justify-content-between border-bottom py-2">
                                                    <span>Instructor Rating</span>
                                                    <span class="text-warning">
                                                        4.5
                                                        <span>
                                                            <svg
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                width="11"
                                                                height="11"
                                                                fill="currentColor"
                                                                class="bi bi-star-fill text-warning"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" >
                                                            </svg>
                                                        </span>
                                                    </span>
                                                </div>
                                                <div class="d-flex justify-content-between pt-2">
                                                    <span>Courses</span>
                                                    <span class="text-dark">42</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-6 col-md-6 col-12">
                                        <!-- Card -->
                                        <div class="card mb-4">
                                            <!-- Card body -->
                                            <div class="card-body">
                                                <div class="text-center">
                                                    <img src="../../assets/images/avatar/avatar-14.jpg" class="rounded-circle avatar-xl mb-3" alt="" >
                                                    <h4 class="mb-0">Esther Howard</h4>
                                                    <p class="mb-0">Developer and Instructor</p>
                                                </div>
                                                <div class="d-flex justify-content-between border-bottom py-2 mt-4">
                                                    <span>Students</span>
                                                    <span class="text-dark">26,060</span>
                                                </div>
                                                <div class="d-flex justify-content-between border-bottom py-2">
                                                    <span>Instructor Rating</span>
                                                    <span class="text-warning">
                                                        4.5
                                                        <span>
                                                            <svg
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                width="11"
                                                                height="11"
                                                                fill="currentColor"
                                                                class="bi bi-star-fill text-warning"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" >
                                                            </svg>
                                                        </span>
                                                    </span>
                                                </div>
                                                <div class="d-flex justify-content-between pt-2">
                                                    <span>Courses</span>
                                                    <span class="text-dark">3</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-6 col-md-6 col-12">
                                        <!-- Card -->
                                        <div class="card mb-4">
                                            <!-- Card body -->
                                            <div class="card-body">
                                                <div class="text-center">
                                                    <img src="../../assets/images/avatar/avatar-15.jpg" class="rounded-circle avatar-xl mb-3" alt="" >
                                                    <h4 class="mb-0">Guy Hawkins</h4>
                                                    <p class="mb-0">Professional Web Developer</p>
                                                </div>
                                                <div class="d-flex justify-content-between border-bottom py-2 mt-4">
                                                    <span>Students</span>
                                                    <span class="text-dark">2,345</span>
                                                </div>
                                                <div class="d-flex justify-content-between border-bottom py-2">
                                                    <span>Instructor Rating</span>
                                                    <span class="text-warning">
                                                        4.5
                                                        <span>
                                                            <svg
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                width="11"
                                                                height="11"
                                                                fill="currentColor"
                                                                class="bi bi-star-fill text-warning"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" >
                                                            </svg>
                                                        </span>
                                                    </span>
                                                </div>
                                                <div class="d-flex justify-content-between pt-2">
                                                    <span>Courses</span>
                                                    <span class="text-dark">2</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-6 col-md-6 col-12">
                                        <!-- Card -->
                                        <div class="card mb-4">
                                            <!-- Card body -->
                                            <div class="card-body">
                                                <div class="text-center">
                                                    <img src="../../assets/images/avatar/avatar-16.jpg" class="rounded-circle avatar-xl mb-3" alt="" >
                                                    <h4 class="mb-0">Jacob Jones</h4>
                                                    <p class="mb-0">Engineering Architect</p>
                                                </div>
                                                <div class="d-flex justify-content-between border-bottom py-2 mt-4">
                                                    <span>Students</span>
                                                    <span class="text-dark">14,994</span>
                                                </div>
                                                <div class="d-flex justify-content-between border-bottom py-2">
                                                    <span>Instructor Rating</span>
                                                    <span class="text-warning">
                                                        4.5
                                                        <span>
                                                            <svg
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                width="11"
                                                                height="11"
                                                                fill="currentColor"
                                                                class="bi bi-star-fill text-warning"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" >
                                                            </svg>
                                                        </span>
                                                    </span>
                                                </div>
                                                <div class="d-flex justify-content-between pt-2">
                                                    <span>Courses</span>
                                                    <span class="text-dark">7</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-6 col-md-6 col-12">
                                        <!-- Card -->
                                        <div class="card mb-4">
                                            <!-- Card body -->
                                            <div class="card-body">
                                                <div class="text-center">
                                                    <img src="../../assets/images/avatar/avatar-17.jpg" class="rounded-circle avatar-xl mb-3" alt="" >
                                                    <h4 class="mb-0">Kristin Watson</h4>
                                                    <p class="mb-0">Web Developer And Teacher</p>
                                                </div>
                                                <div class="d-flex justify-content-between border-bottom py-2 mt-4">
                                                    <span>Students</span>
                                                    <span class="text-dark">1,223</span>
                                                </div>
                                                <div class="d-flex justify-content-between border-bottom py-2">
                                                    <span>Instructor Rating</span>
                                                    <span class="text-warning">
                                                        4.5
                                                        <span>
                                                            <svg
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                width="11"
                                                                height="11"
                                                                fill="currentColor"
                                                                class="bi bi-star-fill text-warning"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" >
                                                            </svg>
                                                        </span>
                                                    </span>
                                                </div>
                                                <div class="d-flex justify-content-between pt-2">
                                                    <span>Courses</span>
                                                    <span class="text-dark">3</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-6 col-md-6 col-12">
                                        <!-- Card -->
                                        <div class="card mb-4">
                                            <!-- Card body -->
                                            <div class="card-body">
                                                <div class="text-center">
                                                    <img src="../../assets/images/avatar/avatar-18.jpg" class="rounded-circle avatar-xl mb-3" alt="" >
                                                    <h4 class="mb-0">Rivao Luke</h4>
                                                    <p class="mb-0">Software Developer, Instructor</p>
                                                </div>
                                                <div class="d-flex justify-content-between border-bottom py-2 mt-4">
                                                    <span>Students</span>
                                                    <span class="text-dark">6,845</span>
                                                </div>
                                                <div class="d-flex justify-content-between border-bottom py-2">
                                                    <span>Instructor Rating</span>
                                                    <span class="text-warning">
                                                        4.5
                                                        <span>
                                                            <svg
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                width="11"
                                                                height="11"
                                                                fill="currentColor"
                                                                class="bi bi-star-fill text-warning"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" >
                                                            </svg>
                                                        </span>
                                                    </span>
                                                </div>
                                                <div class="d-flex justify-content-between pt-2">
                                                    <span>Courses</span>
                                                    <span class="text-dark">5</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-6 col-md-6 col-12">
                                        <!-- Card -->
                                        <div class="card mb-4">
                                            <!-- Card body -->
                                            <div class="card-body">
                                                <div class="text-center">
                                                    <img src="../../assets/images/avatar/avatar-19.jpg" class="rounded-circle avatar-xl mb-3" alt="" >
                                                    <h4 class="mb-0">Nia Sikhone</h4>
                                                    <p class="mb-0">Full Stack Web Developer</p>
                                                </div>
                                                <div class="d-flex justify-content-between border-bottom py-2 mt-4">
                                                    <span>Students</span>
                                                    <span class="text-dark">8,234</span>
                                                </div>
                                                <div class="d-flex justify-content-between border-bottom py-2">
                                                    <span>Instructor Rating</span>
                                                    <span class="text-warning">
                                                        4.5
                                                        <span>
                                                            <svg
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                width="11"
                                                                height="11"
                                                                fill="currentColor"
                                                                class="bi bi-star-fill text-warning"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" >
                                                            </svg>
                                                        </span>
                                                    </span>
                                                </div>
                                                <div class="d-flex justify-content-between pt-2">
                                                    <span>Courses</span>
                                                    <span class="text-dark">12</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-12">
                                        <div class="pt-4">
                                            <!-- Pagination -->
                                            <nav>
                                                <ul class="pagination justify-content-center mb-0">
                                                    <li class="page-item disabled">
                                                        <a class="page-link mx-1 rounded" href="#">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor" class="bi bi-chevron-left" viewBox="0 0 16 16">
                                                                <path
                                                                    fill-rule="evenodd"
                                                                    d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z" >
                                                            </svg>
                                                        </a>
                                                    </li>
                                                    <li class="page-item active">
                                                        <a class="page-link mx-1 rounded" href="#">1</a>
                                                    </li>
                                                    <li class="page-item">
                                                        <a class="page-link mx-1 rounded" href="#">2</a>
                                                    </li>
                                                    <li class="page-item">
                                                        <a class="page-link mx-1 rounded" href="#">3</a>
                                                    </li>
                                                    <li class="page-item">
                                                        <a class="page-link mx-1 rounded" href="#">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                                                                <path
                                                                    fill-rule="evenodd"
                                                                    d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" >
                                                            </svg>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- tab pane -->
                            <div class="tab-pane fade" id="tabPaneList" role="tabpanel" aria-labelledby="tabPaneList">
                                <!-- card -->
                                <div class="card">
                                    <!-- card header -->
                                    <div class="card-header">
                                        <input type="search" class="form-control" placeholder="Search Instructor" >
                                    </div>
                                    <!-- table -->
                                    <div class="table-responsive">
                                        <table class="table mb-0 text-nowrap table-hover table-centered">
                                            <thead class="table-light">
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Topic</th>
                                                    <th>Courses</th>
                                                    <th>Joined</th>
                                                    <th>Students</th>
                                                    <th>Rating</th>

                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <img src="../../assets/images/avatar/avatar-12.jpg" alt="" class="rounded-circle avatar-md me-2" >
                                                            <h5 class="mb-0">Guy Hawkins</h5>
                                                        </div>
                                                    </td>
                                                    <td>Engineering Architect</td>
                                                    <td>6 Courses</td>
                                                    <td>7 July, 2020</td>
                                                    <td>50,274</td>
                                                    <td>
                                                        4.5
                                                        <span class="fs-6 align-top">
                                                            <svg
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                width="11"
                                                                height="11"
                                                                fill="currentColor"
                                                                class="bi bi-star-fill text-secondary"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" >
                                                            </svg>
                                                        </span>
                                                    </td>

                                                    <td>
                                                        <div class="hstack gap-4">
                                                            <a href="#" data-bs-toggle="tooltip" data-placement="top" title="Message"><i class="fe fe-mail"></i></a>
                                                            <a href="#" data-bs-toggle="tooltip" data-placement="top" title="Delete"><i class="fe fe-trash"></i></a>
                                                            <span class="dropdown dropstart">
                                                                <a
                                                                    class="btn-icon btn btn-ghost btn-sm rounded-circle"
                                                                    href="#"
                                                                    role="button"
                                                                    data-bs-toggle="dropdown"
                                                                    data-bs-offset="-20,20"
                                                                    aria-expanded="false">
                                                                    <i class="fe fe-more-vertical"></i>
                                                                </a>
                                                                <span class="dropdown-menu">
                                                                    <span class="dropdown-header">Settings</span>
                                                                    <a class="dropdown-item" href="#">
                                                                        <i class="fe fe-edit dropdown-item-icon"></i>
                                                                        Edit
                                                                    </a>
                                                                    <a class="dropdown-item" href="#">
                                                                        <i class="fe fe-trash dropdown-item-icon"></i>
                                                                        Remove
                                                                    </a>
                                                                </span>
                                                            </span>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <img src="../../assets/images/avatar/avatar-13.jpg" alt="" class="rounded-circle avatar-md me-2" >
                                                            <h5 class="mb-0">Dianna Smiley</h5>
                                                        </div>
                                                    </td>
                                                    <td>Front End Developer</td>
                                                    <td>3 Courses</td>
                                                    <td>6 July, 2020</td>
                                                    <td>26,060</td>
                                                    <td>
                                                        4.5
                                                        <span class="fs-6 align-top">
                                                            <svg
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                width="11"
                                                                height="11"
                                                                fill="currentColor"
                                                                class="bi bi-star-fill text-secondary"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" >
                                                            </svg>
                                                        </span>
                                                    </td>

                                                    <td>
                                                        <div class="hstack gap-4">
                                                            <a href="#" data-bs-toggle="tooltip" data-placement="top" title="Message"><i class="fe fe-mail"></i></a>
                                                            <a href="#" data-bs-toggle="tooltip" data-placement="top" title="Delete"><i class="fe fe-trash"></i></a>
                                                            <span class="dropdown dropstart">
                                                                <a
                                                                    class="btn-icon btn btn-ghost btn-sm rounded-circle"
                                                                    href="#"
                                                                    role="button"
                                                                    data-bs-toggle="dropdown"
                                                                    data-bs-offset="-20,20"
                                                                    aria-expanded="false">
                                                                    <i class="fe fe-more-vertical"></i>
                                                                </a>
                                                                <span class="dropdown-menu">
                                                                    <span class="dropdown-header">Settings</span>
                                                                    <a class="dropdown-item" href="#">
                                                                        <i class="fe fe-edit dropdown-item-icon"></i>
                                                                        Edit
                                                                    </a>
                                                                    <a class="dropdown-item" href="#">
                                                                        <i class="fe fe-trash dropdown-item-icon"></i>
                                                                        Remove
                                                                    </a>
                                                                </span>
                                                            </span>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <img src="../../assets/images/avatar/avatar-17.jpg" alt="" class="rounded-circle avatar-md me-2" >
                                                            <h5 class="mb-0">Nia Sikhone</h5>
                                                        </div>
                                                    </td>
                                                    <td>Web Developer, Designer, and Teacher</td>
                                                    <td>12 Courses</td>
                                                    <td>12 June, 2020</td>
                                                    <td>8,234</td>
                                                    <td>
                                                        4.5
                                                        <span class="fs-6 align-top">
                                                            <svg
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                width="11"
                                                                height="11"
                                                                fill="currentColor"
                                                                class="bi bi-star-fill text-secondary"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" >
                                                            </svg>
                                                        </span>
                                                    </td>

                                                    <td>
                                                        <div class="hstack gap-4">
                                                            <a href="#" data-bs-toggle="tooltip" data-placement="top" title="Message"><i class="fe fe-mail"></i></a>
                                                            <a href="#" data-bs-toggle="tooltip" data-placement="top" title="Delete"><i class="fe fe-trash"></i></a>
                                                            <span class="dropdown dropstart">
                                                                <a
                                                                    class="btn-icon btn btn-ghost btn-sm rounded-circle"
                                                                    href="#"
                                                                    role="button"
                                                                    data-bs-toggle="dropdown"
                                                                    data-bs-offset="-20,20"
                                                                    aria-expanded="false">
                                                                    <i class="fe fe-more-vertical"></i>
                                                                </a>
                                                                <span class="dropdown-menu">
                                                                    <span class="dropdown-header">Settings</span>
                                                                    <a class="dropdown-item" href="#">
                                                                        <i class="fe fe-edit dropdown-item-icon"></i>
                                                                        Edit
                                                                    </a>
                                                                    <a class="dropdown-item" href="#">
                                                                        <i class="fe fe-trash dropdown-item-icon"></i>
                                                                        Remove
                                                                    </a>
                                                                </span>
                                                            </span>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <img src="../../assets/images/avatar/avatar-14.jpg" alt="" class="rounded-circle avatar-md me-2" >
                                                            <h5 class="mb-0">Jacob Jones</h5>
                                                        </div>
                                                    </td>
                                                    <td>Bootstrap Expert</td>
                                                    <td>7 Courses</td>
                                                    <td>2 July, 2020</td>
                                                    <td>14,944</td>
                                                    <td>
                                                        4.5
                                                        <span class="fs-6 align-top">
                                                            <svg
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                width="11"
                                                                height="11"
                                                                fill="currentColor"
                                                                class="bi bi-star-fill text-secondary"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" >
                                                            </svg>
                                                        </span>
                                                    </td>

                                                    <td>
                                                        <div class="hstack gap-4">
                                                            <a href="#" data-bs-toggle="tooltip" data-placement="top" title="Message"><i class="fe fe-mail"></i></a>
                                                            <a href="#" data-bs-toggle="tooltip" data-placement="top" title="Delete"><i class="fe fe-trash"></i></a>
                                                            <span class="dropdown dropstart">
                                                                <a
                                                                    class="btn-icon btn btn-ghost btn-sm rounded-circle"
                                                                    href="#"
                                                                    role="button"
                                                                    data-bs-toggle="dropdown"
                                                                    data-bs-offset="-20,20"
                                                                    aria-expanded="false">
                                                                    <i class="fe fe-more-vertical"></i>
                                                                </a>
                                                                <span class="dropdown-menu">
                                                                    <span class="dropdown-header">Settings</span>
                                                                    <a class="dropdown-item" href="#">
                                                                        <i class="fe fe-edit dropdown-item-icon"></i>
                                                                        Edit
                                                                    </a>
                                                                    <a class="dropdown-item" href="#">
                                                                        <i class="fe fe-trash dropdown-item-icon"></i>
                                                                        Remove
                                                                    </a>
                                                                </span>
                                                            </span>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <img src="../../assets/images/avatar/avatar-15.jpg" alt="" class="rounded-circle avatar-md me-2" >
                                                            <h5 class="mb-0">Kristin Watson</h5>
                                                        </div>
                                                    </td>
                                                    <td>Web Development</td>
                                                    <td>5 Courses</td>
                                                    <td>1 July, 2020</td>
                                                    <td>6,845</td>
                                                    <td>
                                                        4.5
                                                        <span class="fs-6 align-top">
                                                            <svg
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                width="11"
                                                                height="11"
                                                                fill="currentColor"
                                                                class="bi bi-star-fill text-secondary"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" >
                                                            </svg>
                                                        </span>
                                                    </td>

                                                    <td>
                                                        <div class="hstack gap-4">
                                                            <a href="#" data-bs-toggle="tooltip" data-placement="top" title="Message"><i class="fe fe-mail"></i></a>
                                                            <a href="#" data-bs-toggle="tooltip" data-placement="top" title="Delete"><i class="fe fe-trash"></i></a>
                                                            <span class="dropdown dropstart">
                                                                <a
                                                                    class="btn-icon btn btn-ghost btn-sm rounded-circle"
                                                                    href="#"
                                                                    role="button"
                                                                    data-bs-toggle="dropdown"
                                                                    data-bs-offset="-20,20"
                                                                    aria-expanded="false">
                                                                    <i class="fe fe-more-vertical"></i>
                                                                </a>
                                                                <span class="dropdown-menu">
                                                                    <span class="dropdown-header">Settings</span>
                                                                    <a class="dropdown-item" href="#">
                                                                        <i class="fe fe-edit dropdown-item-icon"></i>
                                                                        Edit
                                                                    </a>
                                                                    <a class="dropdown-item" href="#">
                                                                        <i class="fe fe-trash dropdown-item-icon"></i>
                                                                        Remove
                                                                    </a>
                                                                </span>
                                                            </span>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <img src="../../assets/images/avatar/avatar-17.jpg" alt="" class="rounded-circle avatar-md me-2" >
                                                            <h5 class="mb-0">Nia Sikhone</h5>
                                                        </div>
                                                    </td>
                                                    <td>Web Developer, Designer, and Teacher</td>
                                                    <td>12 Courses</td>
                                                    <td>12 June, 2020</td>
                                                    <td>8,234</td>
                                                    <td>
                                                        4.5
                                                        <span class="fs-6 align-top">
                                                            <svg
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                width="11"
                                                                height="11"
                                                                fill="currentColor"
                                                                class="bi bi-star-fill text-secondary"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" >
                                                            </svg>
                                                        </span>
                                                    </td>

                                                    <td>
                                                        <div class="hstack gap-4">
                                                            <a href="#" data-bs-toggle="tooltip" data-placement="top" title="Message"><i class="fe fe-mail"></i></a>
                                                            <a href="#" data-bs-toggle="tooltip" data-placement="top" title="Delete"><i class="fe fe-trash"></i></a>
                                                            <span class="dropdown dropstart">
                                                                <a
                                                                    class="btn-icon btn btn-ghost btn-sm rounded-circle"
                                                                    href="#"
                                                                    role="button"
                                                                    data-bs-toggle="dropdown"
                                                                    data-bs-offset="-20,20"
                                                                    aria-expanded="false">
                                                                    <i class="fe fe-more-vertical"></i>
                                                                </a>
                                                                <span class="dropdown-menu">
                                                                    <span class="dropdown-header">Settings</span>
                                                                    <a class="dropdown-item" href="#">
                                                                        <i class="fe fe-edit dropdown-item-icon"></i>
                                                                        Edit
                                                                    </a>
                                                                    <a class="dropdown-item" href="#">
                                                                        <i class="fe fe-trash dropdown-item-icon"></i>
                                                                        Remove
                                                                    </a>
                                                                </span>
                                                            </span>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <img src="../../assets/images/avatar/avatar-16.jpg" alt="" class="rounded-circle avatar-md me-2" >
                                                            <h5 class="mb-0">Rivao Luke</h5>
                                                        </div>
                                                    </td>
                                                    <td>Web Development</td>
                                                    <td>5 Courses</td>
                                                    <td>1 July, 2020</td>
                                                    <td>6,845</td>
                                                    <td>
                                                        4.5
                                                        <span class="fs-6 align-top">
                                                            <svg
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                width="11"
                                                                height="11"
                                                                fill="currentColor"
                                                                class="bi bi-star-fill text-secondary"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" >
                                                            </svg>
                                                        </span>
                                                    </td>

                                                    <td>
                                                        <div class="hstack gap-4">
                                                            <a href="#" data-bs-toggle="tooltip" data-placement="top" title="Message"><i class="fe fe-mail"></i></a>
                                                            <a href="#" data-bs-toggle="tooltip" data-placement="top" title="Delete"><i class="fe fe-trash"></i></a>
                                                            <span class="dropdown dropstart">
                                                                <a
                                                                    class="btn-icon btn btn-ghost btn-sm rounded-circle"
                                                                    href="#"
                                                                    role="button"
                                                                    data-bs-toggle="dropdown"
                                                                    data-bs-offset="-20,20"
                                                                    aria-expanded="false">
                                                                    <i class="fe fe-more-vertical"></i>
                                                                </a>
                                                                <span class="dropdown-menu">
                                                                    <span class="dropdown-header">Settings</span>
                                                                    <a class="dropdown-item" href="#">
                                                                        <i class="fe fe-edit dropdown-item-icon"></i>
                                                                        Edit
                                                                    </a>
                                                                    <a class="dropdown-item" href="#">
                                                                        <i class="fe fe-trash dropdown-item-icon"></i>
                                                                        Remove
                                                                    </a>
                                                                </span>
                                                            </span>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <img src="../../assets/images/avatar/avatar-17.jpg" alt="" class="rounded-circle avatar-md me-2" >
                                                            <h5 class="mb-0">Nia Sikhone</h5>
                                                        </div>
                                                    </td>
                                                    <td>Web Developer, Designer, and Teacher</td>
                                                    <td>12 Courses</td>
                                                    <td>12 June, 2020</td>
                                                    <td>8,234</td>
                                                    <td>
                                                        4.5
                                                        <span class="fs-6 align-top">
                                                            <svg
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                width="11"
                                                                height="11"
                                                                fill="currentColor"
                                                                class="bi bi-star-fill text-secondary"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" >
                                                            </svg>
                                                        </span>
                                                    </td>

                                                    <td>
                                                        <div class="hstack gap-4">
                                                            <a href="#" data-bs-toggle="tooltip" data-placement="top" title="Message"><i class="fe fe-mail"></i></a>
                                                            <a href="#" data-bs-toggle="tooltip" data-placement="top" title="Delete"><i class="fe fe-trash"></i></a>
                                                            <span class="dropdown dropstart">
                                                                <a
                                                                    class="btn-icon btn btn-ghost btn-sm rounded-circle"
                                                                    href="#"
                                                                    role="button"
                                                                    data-bs-toggle="dropdown"
                                                                    data-bs-offset="-20,20"
                                                                    aria-expanded="false">
                                                                    <i class="fe fe-more-vertical"></i>
                                                                </a>
                                                                <span class="dropdown-menu">
                                                                    <span class="dropdown-header">Settings</span>
                                                                    <a class="dropdown-item" href="#">
                                                                        <i class="fe fe-edit dropdown-item-icon"></i>
                                                                        Edit
                                                                    </a>
                                                                    <a class="dropdown-item" href="#">
                                                                        <i class="fe fe-trash dropdown-item-icon"></i>
                                                                        Remove
                                                                    </a>
                                                                </span>
                                                            </span>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <img src="../../assets/images/avatar/avatar-18.jpg" alt="" class="rounded-circle avatar-md me-2" >

                                                            <h5 class="mb-0">Xiaon Merry</h5>
                                                        </div>
                                                    </td>
                                                    <td>Web Developer, Designer, and Teacher</td>
                                                    <td>9 Courses</td>
                                                    <td>8 June, 2020</td>
                                                    <td>3,242</td>
                                                    <td>
                                                        4.5
                                                        <span class="fs-6 align-top">
                                                            <svg
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                width="11"
                                                                height="11"
                                                                fill="currentColor"
                                                                class="bi bi-star-fill text-secondary"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" >
                                                            </svg>
                                                        </span>
                                                    </td>

                                                    <td>
                                                        <div class="hstack gap-4">
                                                            <a href="#" data-bs-toggle="tooltip" data-placement="top" title="Message"><i class="fe fe-mail"></i></a>
                                                            <a href="#" data-bs-toggle="tooltip" data-placement="top" title="Delete"><i class="fe fe-trash"></i></a>
                                                            <span class="dropdown dropstart">
                                                                <a
                                                                    class="btn-icon btn btn-ghost btn-sm rounded-circle"
                                                                    href="#"
                                                                    role="button"
                                                                    data-bs-toggle="dropdown"
                                                                    data-bs-offset="-20,20"
                                                                    aria-expanded="false">
                                                                    <i class="fe fe-more-vertical"></i>
                                                                </a>
                                                                <span class="dropdown-menu">
                                                                    <span class="dropdown-header">Settings</span>
                                                                    <a class="dropdown-item" href="#">
                                                                        <i class="fe fe-edit dropdown-item-icon"></i>
                                                                        Edit
                                                                    </a>
                                                                    <a class="dropdown-item" href="#">
                                                                        <i class="fe fe-trash dropdown-item-icon"></i>
                                                                        Remove
                                                                    </a>
                                                                </span>
                                                            </span>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <!-- Pagination -->
                                        <div class="card-footer">
                                            <nav>
                                                <ul class="pagination justify-content-center mb-0">
                                                    <li class="page-item disabled">
                                                        <a class="page-link mx-1 rounded" href="#">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor" class="bi bi-chevron-left" viewBox="0 0 16 16">
                                                                <path
                                                                    fill-rule="evenodd"
                                                                    d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z" >
                                                            </svg>
                                                        </a>
                                                    </li>
                                                    <li class="page-item active">
                                                        <a class="page-link mx-1 rounded" href="#">1</a>
                                                    </li>
                                                    <li class="page-item">
                                                        <a class="page-link mx-1 rounded" href="#">2</a>
                                                    </li>
                                                    <li class="page-item">
                                                        <a class="page-link mx-1 rounded" href="#">3</a>
                                                    </li>
                                                    <li class="page-item">
                                                        <a class="page-link mx-1 rounded" href="#">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                                                                <path
                                                                    fill-rule="evenodd"
                                                                    d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" >
                                                            </svg>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </nav>
                                        </div>
                                    </div>
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

</body>

</html>