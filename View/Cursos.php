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
                            <div class="border-bottom pb-3 mb-3 d-md-flex align-items-center justify-content-between">
                                <div class="mb-3 mb-md-0">
                                    <h1 class="mb-1 h2 fw-bold">Courses Category</h1>
                                    <!-- Breadcrumb -->
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item">
                                                <a href="../dashboard/admin-dashboard.html">Dashboard</a>
                                            </li>
                                            <li class="breadcrumb-item">
                                                <a href="#">Courses</a>
                                            </li>
                                            <li class="breadcrumb-item active" aria-current="page">Courses Category</li>
                                        </ol>
                                    </nav>
                                </div>
                                <div>
                                    <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#newCatgory">Add New Category</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-12">
                            <!-- Card -->
                            <div class="card mb-4">
                                <!-- Card header -->
                                <div class="card-header border-bottom-0">
                                    <!-- Form -->
                                    <form class="d-flex align-items-center">
                                        <span class="position-absolute ps-3 search-icon">
                                            <i class="fe fe-search"></i>
                                        </span>
                                        <input type="search" class="form-control ps-6" placeholder="Search Course Category">
                                    </form>
                                </div>
                                <!-- Table -->
                                <div class="table-responsive border-0 overflow-y-hidden">
                                    <table class="table mb-0 text-nowrap table-centered table-hover table-with-checkbox">
                                        <thead class="table-light">
                                            <tr>
                                                <th>
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input" id="checkAll">
                                                        <label class="form-check-label" for="checkAll"></label>
                                                    </div>
                                                </th>
                                                <th>Category</th>
                                                <th>Slug</th>
                                                <th>Course</th>
                                                <th>Date Created</th>
                                                <th>Date Updated</th>
                                                <th>Status</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="accordion-toggle collapsed" id="accordion1" data-bs-toggle="collapse" data-bs-parent="#accordion1" data-bs-target="#collapseOne">
                                                <td>
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input" id="categoryCheck1">
                                                        <label class="form-check-label" for="categoryCheck1"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="#" class="text-inherit position-relative">
                                                        <h5 class="mb-0 text-primary-hover">
                                                            <i class="fe fe-chevron-down fs-4 me-2 position-absolute ms-n4 mt-1"></i>
                                                            Courses
                                                        </h5>
                                                    </a>
                                                </td>
                                                <td>desgincourse</td>
                                                <td>1</td>
                                                <td>16 Oct, 2020</td>
                                                <td>16 Nov, 2020</td>
                                                <td>
                                                    <span class="badge bg-success">Live</span>
                                                </td>
                                                <td>
                                                    <span class="dropdown dropstart">
                                                        <a
                                                            class="btn-icon btn btn-ghost btn-sm rounded-circle"
                                                            href="#"
                                                            role="button"
                                                            id="courseDropdown1"
                                                            data-bs-toggle="dropdown"
                                                            data-bs-offset="-20,20"
                                                            aria-expanded="false">
                                                            <i class="fe fe-more-vertical"></i>
                                                        </a>
                                                        <span class="dropdown-menu" aria-labelledby="courseDropdown1">
                                                            <span class="dropdown-header">Action</span>
                                                            <a class="dropdown-item" href="#">
                                                                <i class="fe fe-send dropdown-item-icon"></i>
                                                                Publish
                                                            </a>
                                                            <a class="dropdown-item" href="#">
                                                                <i class="fe fe-inbox dropdown-item-icon"></i>
                                                                Moved Draft
                                                            </a>
                                                            <a class="dropdown-item" href="#">
                                                                <i class="fe fe-trash dropdown-item-icon"></i>
                                                                Delete
                                                            </a>
                                                        </span>
                                                    </span>
                                                </td>
                                            </tr>
                                            <tr id="collapseOne">
                                                <td>
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input" id="categoryCheck2">
                                                        <label class="form-check-label" for="categoryCheck2"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="#" class="text-inherit">
                                                        <h5 class="mb-0 text-primary-hover ms-3">Child Category</h5>
                                                    </a>
                                                </td>
                                                <td>childcategory</td>
                                                <td>4</td>
                                                <td>16 Oct, 2020</td>
                                                <td>16 Nov, 2020</td>
                                                <td>
                                                    <span class="badge bg-warning">Draft</span>
                                                </td>
                                                <td>
                                                    <span class="dropdown dropstart">
                                                        <a
                                                            class="btn-icon btn btn-ghost btn-sm rounded-circle"
                                                            href="#"
                                                            role="button"
                                                            id="courseDropdown2"
                                                            data-bs-toggle="dropdown"
                                                            data-bs-offset="-20,20"
                                                            aria-expanded="false">
                                                            <i class="fe fe-more-vertical"></i>
                                                        </a>
                                                        <span class="dropdown-menu" aria-labelledby="courseDropdown2">
                                                            <span class="dropdown-header">Action</span>
                                                            <a class="dropdown-item" href="#">
                                                                <i class="fe fe-send dropdown-item-icon"></i>
                                                                Publish
                                                            </a>
                                                            <a class="dropdown-item" href="#">
                                                                <i class="fe fe-inbox dropdown-item-icon"></i>
                                                                Moved Draft
                                                            </a>
                                                            <a class="dropdown-item" href="#">
                                                                <i class="fe fe-trash dropdown-item-icon"></i>
                                                                Delete
                                                            </a>
                                                        </span>
                                                    </span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input" id="categoryCheck3">
                                                        <label class="form-check-label" for="categoryCheck3"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="#" class="text-inherit">
                                                        <h5 class="mb-0 text-primary-hover">Workshop</h5>
                                                    </a>
                                                </td>
                                                <td>Workshop</td>
                                                <td>6</td>
                                                <td>16 Oct, 2020</td>
                                                <td>16 Nov, 2020</td>
                                                <td>
                                                    <span class="badge bg-success">Live</span>
                                                </td>
                                                <td>
                                                    <span class="dropdown dropstart">
                                                        <a
                                                            class="btn-icon btn btn-ghost btn-sm rounded-circle"
                                                            href="#"
                                                            role="button"
                                                            id="courseDropdown3"
                                                            data-bs-toggle="dropdown"
                                                            data-bs-offset="-20,20"
                                                            aria-expanded="false">
                                                            <i class="fe fe-more-vertical"></i>
                                                        </a>
                                                        <span class="dropdown-menu" aria-labelledby="courseDropdown3">
                                                            <span class="dropdown-header">Action</span>
                                                            <a class="dropdown-item" href="#">
                                                                <i class="fe fe-send dropdown-item-icon"></i>
                                                                Publish
                                                            </a>
                                                            <a class="dropdown-item" href="#">
                                                                <i class="fe fe-inbox dropdown-item-icon"></i>
                                                                Moved Draft
                                                            </a>
                                                            <a class="dropdown-item" href="#">
                                                                <i class="fe fe-trash dropdown-item-icon"></i>
                                                                Delete
                                                            </a>
                                                        </span>
                                                    </span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input" id="categoryCheck4">
                                                        <label class="form-check-label" for="categoryCheck4"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="#" class="text-inherit">
                                                        <h5 class="mb-0 text-primary-hover">Tutorial</h5>
                                                    </a>
                                                </td>
                                                <td>tutorial</td>
                                                <td>3</td>
                                                <td>16 Oct, 2020</td>
                                                <td>16 Nov, 2020</td>
                                                <td>
                                                    <span class="badge bg-success">Live</span>
                                                </td>
                                                <td>
                                                    <span class="dropdown dropstart">
                                                        <a
                                                            class="btn-icon btn btn-ghost btn-sm rounded-circle"
                                                            href="#"
                                                            role="button"
                                                            id="courseDropdown4"
                                                            data-bs-toggle="dropdown"
                                                            data-bs-offset="-20,20"
                                                            aria-expanded="false">
                                                            <i class="fe fe-more-vertical"></i>
                                                        </a>
                                                        <span class="dropdown-menu" aria-labelledby="courseDropdown4">
                                                            <span class="dropdown-header">Action</span>
                                                            <a class="dropdown-item" href="#">
                                                                <i class="fe fe-send dropdown-item-icon"></i>
                                                                Publish
                                                            </a>
                                                            <a class="dropdown-item" href="#">
                                                                <i class="fe fe-inbox dropdown-item-icon"></i>
                                                                Moved Draft
                                                            </a>
                                                            <a class="dropdown-item" href="#">
                                                                <i class="fe fe-trash dropdown-item-icon"></i>
                                                                Delete
                                                            </a>
                                                        </span>
                                                    </span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input" id="categoryCheck5">
                                                        <label class="form-check-label" for="categoryCheck5"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="#" class="text-inherit">
                                                        <h5 class="mb-0 text-primary-hover">Company</h5>
                                                    </a>
                                                </td>
                                                <td>company</td>
                                                <td>4</td>
                                                <td>16 Oct, 2020</td>
                                                <td>16 Nov, 2020</td>
                                                <td>
                                                    <span class="badge bg-success">Live</span>
                                                </td>
                                                <td>
                                                    <span class="dropdown dropstart">
                                                        <a
                                                            class="btn-icon btn btn-ghost btn-sm rounded-circle"
                                                            href="#"
                                                            role="button"
                                                            id="courseDropdown5"
                                                            data-bs-toggle="dropdown"
                                                            data-bs-offset="-20,20"
                                                            aria-expanded="false">
                                                            <i class="fe fe-more-vertical"></i>
                                                        </a>
                                                        <span class="dropdown-menu" aria-labelledby="courseDropdown5">
                                                            <span class="dropdown-header">Action</span>
                                                            <a class="dropdown-item" href="#">
                                                                <i class="fe fe-send dropdown-item-icon"></i>
                                                                Publish
                                                            </a>
                                                            <a class="dropdown-item" href="#">
                                                                <i class="fe fe-inbox dropdown-item-icon"></i>
                                                                Moved Draft
                                                            </a>
                                                            <a class="dropdown-item" href="#">
                                                                <i class="fe fe-trash dropdown-item-icon"></i>
                                                                Delete
                                                            </a>
                                                        </span>
                                                    </span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input" id="categoryCheck6">
                                                        <label class="form-check-label" for="categoryCheck6"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="#" class="text-inherit">
                                                        <h5 class="mb-0 text-primary-hover">Technology</h5>
                                                    </a>
                                                </td>
                                                <td>technology</td>
                                                <td>6</td>
                                                <td>16 Oct, 2020</td>
                                                <td>16 Nov, 2020</td>
                                                <td>
                                                    <span class="badge bg-success">Live</span>
                                                </td>
                                                <td>
                                                    <span class="dropdown dropstart">
                                                        <a
                                                            class="btn-icon btn btn-ghost btn-sm rounded-circle"
                                                            href="#"
                                                            role="button"
                                                            id="courseDropdown6"
                                                            data-bs-toggle="dropdown"
                                                            data-bs-offset="-20,20"
                                                            aria-expanded="false">
                                                            <i class="fe fe-more-vertical"></i>
                                                        </a>
                                                        <span class="dropdown-menu" aria-labelledby="courseDropdown6">
                                                            <span class="dropdown-header">Action</span>
                                                            <a class="dropdown-item" href="#">
                                                                <i class="fe fe-send dropdown-item-icon"></i>
                                                                Publish
                                                            </a>
                                                            <a class="dropdown-item" href="#">
                                                                <i class="fe fe-inbox dropdown-item-icon"></i>
                                                                Moved Draft
                                                            </a>
                                                            <a class="dropdown-item" href="#">
                                                                <i class="fe fe-trash dropdown-item-icon"></i>
                                                                Delete
                                                            </a>
                                                        </span>
                                                    </span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input" id="categoryCheck7">
                                                        <label class="form-check-label" for="categoryCheck7"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="#" class="text-inherit">
                                                        <h5 class="mb-0 text-primary-hover">Business</h5>
                                                    </a>
                                                </td>
                                                <td>business</td>
                                                <td>2</td>
                                                <td>16 Oct, 2020</td>
                                                <td>16 Nov, 2020</td>
                                                <td>
                                                    <span class="badge bg-warning">Draft</span>
                                                </td>
                                                <td>
                                                    <span class="dropdown dropstart">
                                                        <a
                                                            class="btn-icon btn btn-ghost btn-sm rounded-circle"
                                                            href="#"
                                                            role="button"
                                                            id="courseDropdown7"
                                                            data-bs-toggle="dropdown"
                                                            data-bs-offset="-20,20"
                                                            aria-expanded="false">
                                                            <i class="fe fe-more-vertical"></i>
                                                        </a>
                                                        <span class="dropdown-menu" aria-labelledby="courseDropdown7">
                                                            <span class="dropdown-header">Action</span>
                                                            <a class="dropdown-item" href="#">
                                                                <i class="fe fe-send dropdown-item-icon"></i>
                                                                Publish
                                                            </a>
                                                            <a class="dropdown-item" href="#">
                                                                <i class="fe fe-inbox dropdown-item-icon"></i>
                                                                Moved Draft
                                                            </a>
                                                            <a class="dropdown-item" href="#">
                                                                <i class="fe fe-trash dropdown-item-icon"></i>
                                                                Delete
                                                            </a>
                                                        </span>
                                                    </span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input" id="categoryCheck8">
                                                        <label class="form-check-label" for="categoryCheck8"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="#" class="text-inherit">
                                                        <h5 class="mb-0 text-primary-hover">Technology</h5>
                                                    </a>
                                                </td>
                                                <td>technology</td>
                                                <td>1</td>
                                                <td>16 Oct, 2020</td>
                                                <td>16 Nov, 2020</td>
                                                <td>
                                                    <span class="badge bg-success">Live</span>
                                                </td>
                                                <td>
                                                    <span class="dropdown dropstart">
                                                        <a
                                                            class="btn-icon btn btn-ghost btn-sm rounded-circle"
                                                            href="#"
                                                            role="button"
                                                            id="courseDropdown8"
                                                            data-bs-toggle="dropdown"
                                                            data-bs-offset="-20,20"
                                                            aria-expanded="false">
                                                            <i class="fe fe-more-vertical"></i>
                                                        </a>
                                                        <span class="dropdown-menu" aria-labelledby="courseDropdown8">
                                                            <span class="dropdown-header">Action</span>
                                                            <a class="dropdown-item" href="#">
                                                                <i class="fe fe-send dropdown-item-icon"></i>
                                                                Publish
                                                            </a>
                                                            <a class="dropdown-item" href="#">
                                                                <i class="fe fe-inbox dropdown-item-icon"></i>
                                                                Moved Draft
                                                            </a>
                                                            <a class="dropdown-item" href="#">
                                                                <i class="fe fe-trash dropdown-item-icon"></i>
                                                                Delete
                                                            </a>
                                                        </span>
                                                    </span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input" id="categoryCheck9">
                                                        <label class="form-check-label" for="categoryCheck9"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="#" class="text-inherit">
                                                        <h5 class="mb-0 text-primary-hover">Business</h5>
                                                    </a>
                                                </td>
                                                <td>business</td>
                                                <td>1</td>
                                                <td>16 Oct, 2020</td>
                                                <td>16 Nov, 2020</td>
                                                <td>
                                                    <span class="badge bg-success">Live</span>
                                                </td>
                                                <td>
                                                    <span class="dropdown dropstart">
                                                        <a
                                                            class="btn-icon btn btn-ghost btn-sm rounded-circle"
                                                            href="#"
                                                            role="button"
                                                            id="courseDropdown9"
                                                            data-bs-toggle="dropdown"
                                                            data-bs-offset="-20,20"
                                                            aria-expanded="false">
                                                            <i class="fe fe-more-vertical"></i>
                                                        </a>
                                                        <span class="dropdown-menu" aria-labelledby="courseDropdown9">
                                                            <span class="dropdown-header">Action</span>
                                                            <a class="dropdown-item" href="#">
                                                                <i class="fe fe-send dropdown-item-icon"></i>
                                                                Publish
                                                            </a>
                                                            <a class="dropdown-item" href="#">
                                                                <i class="fe fe-inbox dropdown-item-icon"></i>
                                                                Moved Draft
                                                            </a>
                                                            <a class="dropdown-item" href="#">
                                                                <i class="fe fe-trash dropdown-item-icon"></i>
                                                                Delete
                                                            </a>
                                                        </span>
                                                    </span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input" id="categoryCheck10">
                                                        <label class="form-check-label" for="categoryCheck10"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="#" class="text-inherit">
                                                        <h5 class="mb-0 text-primary-hover">Tutorial</h5>
                                                    </a>
                                                </td>
                                                <td>tutorial</td>
                                                <td>4</td>
                                                <td>16 Oct, 2020</td>
                                                <td>16 Nov, 2020</td>
                                                <td>
                                                    <span class="badge bg-success">Live</span>
                                                </td>
                                                <td>
                                                    <span class="dropdown dropstart">
                                                        <a
                                                            class="btn-icon btn btn-ghost btn-sm rounded-circle"
                                                            href="#"
                                                            role="button"
                                                            id="courseDropdown10"
                                                            data-bs-toggle="dropdown"
                                                            data-bs-offset="-20,20"
                                                            aria-expanded="false">
                                                            <i class="fe fe-more-vertical"></i>
                                                        </a>
                                                        <span class="dropdown-menu" aria-labelledby="courseDropdown10">
                                                            <span class="dropdown-header">Action</span>
                                                            <a class="dropdown-item" href="#">
                                                                <i class="fe fe-send dropdown-item-icon"></i>
                                                                Publish
                                                            </a>
                                                            <a class="dropdown-item" href="#">
                                                                <i class="fe fe-inbox dropdown-item-icon"></i>
                                                                Moved Draft
                                                            </a>
                                                            <a class="dropdown-item" href="#">
                                                                <i class="fe fe-trash dropdown-item-icon"></i>
                                                                Delete
                                                            </a>
                                                        </span>
                                                    </span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input" id="categoryCheck11">
                                                        <label class="form-check-label" for="categoryCheck11"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="#" class="text-inherit">
                                                        <h5 class="mb-0 text-primary-hover">Workshop</h5>
                                                    </a>
                                                </td>
                                                <td>workshop</td>
                                                <td>4</td>
                                                <td>16 Oct, 2020</td>
                                                <td>16 Nov, 2020</td>
                                                <td>
                                                    <span class="badge bg-success">Live</span>
                                                </td>
                                                <td>
                                                    <span class="dropdown dropstart">
                                                        <a
                                                            class="btn-icon btn btn-ghost btn-sm rounded-circle"
                                                            href="#"
                                                            role="button"
                                                            id="courseDropdown11"
                                                            data-bs-toggle="dropdown"
                                                            data-bs-offset="-20,20"
                                                            aria-expanded="false">
                                                            <i class="fe fe-more-vertical"></i>
                                                        </a>
                                                        <span class="dropdown-menu" aria-labelledby="courseDropdown11">
                                                            <span class="dropdown-header">Action</span>
                                                            <a class="dropdown-item" href="#">
                                                                <i class="fe fe-send dropdown-item-icon"></i>
                                                                Publish
                                                            </a>
                                                            <a class="dropdown-item" href="#">
                                                                <i class="fe fe-inbox dropdown-item-icon"></i>
                                                                Moved Draft
                                                            </a>
                                                            <a class="dropdown-item" href="#">
                                                                <i class="fe fe-trash dropdown-item-icon"></i>
                                                                Delete
                                                            </a>
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
        <!-- Modal -->
        <div class="modal fade" id="newCatgory" tabindex="-1" role="dialog" aria-labelledby="newCatgoryLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title mb-0" id="newCatgoryLabel">Create New Category</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form class="needs-validation" novalidate>
                            <div class="mb-3 mb-2">
                                <label class="form-label" for="title">
                                    Title
                                    <span class="text-danger">*</span>
                                </label>
                                <input type="text" class="form-control" placeholder="Write a Category" id="title" required>
                                <small>Field must contain a unique value</small>
                                <div class="invalid-feedback">Please enter category.</div>
                            </div>
                            <div class="mb-3 mb-2">
                                <label class="form-label">Slug</label>
                                <label for="basic-url" class="form-label">Your vanity URL</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon3">https://example.com</span>
                                    <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                                </div>

                                <small>Field must contain a unique value</small>
                            </div>
                            <div class="mb-3 mb-2">
                                <label class="form-label" for="parent">Parent</label>
                                <select class="form-select" id="parent" required>
                                    <option selected value="">Select</option>
                                    <option value="Course">Course</option>
                                    <option value="Tutorial">Tutorial</option>
                                    <option value="Workshop">Workshop</option>
                                    <option value="Company">Company</option>
                                </select>
                            </div>
                            <div class="mb-3 mb-3">
                                <label class="form-label">Description</label>
                                <div id="editor">
                                    <br />
                                    <h4>One Ring to Rule Them All</h4>
                                    <br />
                                    <p>
                                        Three Rings for the
                                        <i>Elven-kingsunder</i>
                                        the sky,
                                        <br />
                                        Seven for the
                                        <u>Dwarf-lords</u>
                                        in halls of stone, Nine for Mortal Men,
                                        <br />
                                        doomed to die, One for the Dark Lord on his dark throne.
                                        <br />
                                        In the Land of Mordor where the Shadows lie.
                                        <br />
                                        <br />
                                    </p>
                                </div>
                            </div>
                            <div class="mb-2">
                                <label class="form-label">Enabled</label>
                                <div class="form-check form-switch">
                                    <input type="checkbox" class="form-check-input" id="customSwitch1" checked >
                                    <label class="form-check-label" for="customSwitch1"></label>
                                </div>
                            </div>
                            <div>
                                <button type="submit" class="btn btn-primary">Add New Category</button>
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    <!-- Script -->

    <!-- Libs JS -->
    <script src="./js/popper.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/simplebar.min.js"></script>

    <!-- Theme JS -->
    <script src="./js/theme.min.js"></script>

    <script src="./js/tiny-slider.js"></script>
    <script src="./js/tnsSlider.js"></script>
    <script src="./js/glightbox.min.js"></script>
    <script src="./js/glight.js"></script>


        <script src="./assets/libs/quill/dist/quill.min.js"></script>
        <script src="./js/vendors/editor.js"></script>
        <script src="./js/vendors/validation.js"></script>
    </body>

</html>