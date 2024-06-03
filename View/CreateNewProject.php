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
                            <button class="btn btn-light btn-icon rounded-circle d-flex align-items-center"
                                type="button" aria-expanded="false" data-bs-toggle="dropdown"
                                aria-label="Toggle theme (auto)">
                                <i class="bi theme-icon-active"></i>
                                <span class="visually-hidden bs-theme-text">Toggle theme</span>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="bs-theme-text">
                                <li>
                                    <button type="button" class="dropdown-item d-flex align-items-center"
                                        data-bs-theme-value="light" aria-pressed="false">
                                        <i class="bi theme-icon bi-sun-fill"></i>
                                        <span class="ms-2">Light</span>
                                    </button>
                                </li>
                                <li>
                                    <button type="button" class="dropdown-item d-flex align-items-center"
                                        data-bs-theme-value="dark" aria-pressed="false">
                                        <i class="bi theme-icon bi-moon-stars-fill"></i>
                                        <span class="ms-2">Dark</span>
                                    </button>
                                </li>
                                <li>
                                    <button type="button" class="dropdown-item d-flex align-items-center active"
                                        data-bs-theme-value="auto" aria-pressed="true">
                                        <i class="bi theme-icon bi-circle-half"></i>
                                        <span class="ms-2">Auto</span>
                                    </button>
                                </li>
                            </ul>
                        </div>
                        <ul class="navbar-nav navbar-right-wrap ms-2 d-flex nav-top-wrap">
                            <li class="dropdown stopevent">
                                <a class="btn btn-light btn-icon rounded-circle indicator indicator-primary" href="#"
                                    role="button" id="dropdownNotification" data-bs-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <i class="fe fe-bell"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-lg"
                                    aria-labelledby="dropdownNotification">
                                    <div>
                                        <div
                                            class="border-bottom px-3 pb-3 d-flex justify-content-between align-items-center">
                                            <span class="h4 mb-0">Notifications</span>
                                            <a href="# ">
                                                <span class="align-middle">
                                                    <i class="fe fe-settings me-1"></i>
                                                </span>
                                            </a>
                                        </div>
                                        <!-- List group -->
                                        <ul class="list-group list-group-flush" data-simplebar
                                            style="max-height: 300px">
                                            <li class="list-group-item bg-light">
                                                <div class="row">
                                                    <div class="col">
                                                        <a class="text-body" href="#">
                                                            <div class="d-flex">
                                                                <img src="../../assets/images/avatar/avatar-1.jpg"
                                                                    alt="" class="avatar-md rounded-circle" />
                                                                <div class="ms-3">
                                                                    <h5 class="fw-bold mb-1">Kristin Watson:</h5>
                                                                    <p class="mb-3">Krisitn Watsan like your comment on
                                                                        course Javascript Introduction!</p>
                                                                    <span class="fs-6">
                                                                        <span>
                                                                            <span
                                                                                class="fe fe-thumbs-up text-success me-1"></span>
                                                                            2 hours ago,
                                                                        </span>
                                                                        <span class="ms-1">2:19 PM</span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="col-auto text-center me-2">
                                                        <a href="#" class="badge-dot bg-info" data-bs-toggle="tooltip"
                                                            data-bs-placement="top" title="Mark as read"></a>
                                                        <div>
                                                            <a href="#" class="bg-transparent" data-bs-toggle="tooltip"
                                                                data-bs-placement="top" title="Remove">
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
                                                                <img src="../../assets/images/avatar/avatar-2.jpg"
                                                                    alt="" class="avatar-md rounded-circle" />
                                                                <div class="ms-3">
                                                                    <h5 class="fw-bold mb-1">Brooklyn Simmons</h5>
                                                                    <p class="mb-3">Just launched a new Courses React
                                                                        for Beginner.</p>
                                                                    <span class="fs-6">
                                                                        <span>
                                                                            <span
                                                                                class="fe fe-thumbs-up text-success me-1"></span>
                                                                            Oct 9,
                                                                        </span>
                                                                        <span class="ms-1">1:20 PM</span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="col-auto text-center me-2">
                                                        <a href="#" class="badge-dot bg-secondary"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Mark as unread"></a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="row">
                                                    <div class="col">
                                                        <a class="text-body" href="#">
                                                            <div class="d-flex">
                                                                <img src="../../assets/images/avatar/avatar-3.jpg"
                                                                    alt="" class="avatar-md rounded-circle" />
                                                                <div class="ms-3">
                                                                    <h5 class="fw-bold mb-1">Jenny Wilson</h5>
                                                                    <p class="mb-3">Krisitn Watsan like your comment on
                                                                        course Javascript Introduction!</p>
                                                                    <span class="fs-6">
                                                                        <span>
                                                                            <span
                                                                                class="fe fe-thumbs-up text-info me-1"></span>
                                                                            Oct 9,
                                                                        </span>
                                                                        <span class="ms-1">1:56 PM</span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="col-auto text-center me-2">
                                                        <a href="#" class="badge-dot bg-secondary"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Mark as unread"></a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="row">
                                                    <div class="col">
                                                        <a class="text-body" href="#">
                                                            <div class="d-flex">
                                                                <img src="../../assets/images/avatar/avatar-4.jpg"
                                                                    alt="" class="avatar-md rounded-circle" />
                                                                <div class="ms-3">
                                                                    <h5 class="fw-bold mb-1">Sina Ray</h5>
                                                                    <p class="mb-3">You earn new certificate for
                                                                        complete the Javascript Beginner course.</p>
                                                                    <span class="fs-6">
                                                                        <span>
                                                                            <span
                                                                                class="fe fe-award text-warning me-1"></span>
                                                                            Oct 9,
                                                                        </span>
                                                                        <span class="ms-1">1:56 PM</span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="col-auto text-center me-2">
                                                        <a href="#" class="badge-dot bg-secondary"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Mark as unread"></a>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="border-top px-3 pt-3 pb-0">
                                            <a href="../../pages/notification-history.html"
                                                class="text-link fw-semibold">See all Notifications</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <!-- List -->
                            <li class="dropdown ms-2">
                                <a class="rounded-circle" href="#" role="button" id="dropdownUser"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <div class="avatar avatar-md avatar-indicators avatar-online">
                                        <img alt="avatar" src="../../assets/images/avatar/avatar-1.jpg"
                                            class="rounded-circle" />
                                    </div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownUser">
                                    <div class="dropdown-item">
                                        <div class="d-flex">
                                            <div class="avatar avatar-md avatar-indicators avatar-online">
                                                <img alt="avatar" src="../../assets/images/avatar/avatar-1.jpg"
                                                    class="rounded-circle" />
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
                        <div class="border-bottom pb-3 d-md-flex align-items-center justify-content-between mb-3">
                            <div class="mb-2 mb-lg-0">
                                <h1 class="mb-0 h2 fw-bold">Create New Project</h1>
                                <!-- Breadcrumb -->
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item">
                                            <a href="admin-dashboard.html">Dashboard</a>
                                        </li>
                                        <li class="breadcrumb-item">
                                            <a href="#">Project</a>
                                        </li>
                                        <li class="breadcrumb-item active" aria-current="page">Create Project</li>
                                    </ol>
                                </nav>
                            </div>
                            <!-- button -->
                            <div>
                                <a href="project-grid.html" class="btn btn-primary me-2">Back to Project</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="py-6">
                    <!-- row -->
                    <div class="row">
                        <div class="offset-xl-3 col-xl-6 col-md-12 col-12">
                            <!-- card -->
                            <div class="card">
                                <!-- card body -->
                                <div class="card-body p-lg-6">
                                    <!-- form -->
                                    <form class="row gx-3 needs-validation" novalidate>
                                        <!-- form group -->
                                        <div class="mb-3 col-12">
                                            <label class="form-label">
                                                Name
                                                <span class="text-danger">*</span>
                                            </label>
                                            <input type="text" class="form-control" placeholder="Enter project title"
                                                required />
                                            <div class="invalid-feedback">Please enter first title.</div>
                                        </div>
                                        <!-- form group -->
                                        <div class="mb-3 col-12">
                                            <label class="form-label">Description</label>
                                            <textarea class="form-control" placeholder="Enter brief about project..."
                                                rows="3" required></textarea>
                                            <div class="invalid-feedback">Please enter messages.</div>
                                        </div>
                                        <!-- form group -->
                                        <div class="mb-3 col-md-6 col-12">
                                            <label class="form-label">
                                                Start Date
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="input-group me-3">
                                                <input class="form-control flatpickr" type="text"
                                                    placeholder="Select Date" aria-describedby="basic-addon2" />

                                                <span class="input-group-text" id="basic-addon2"><i
                                                        class="fe fe-calendar"></i></span>
                                            </div>
                                        </div>
                                        <!-- form group -->
                                        <div class="mb-3 col-md-6 col-12">
                                            <label class="form-label">
                                                End Date
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="input-group me-3">
                                                <input class="form-control flatpickr" type="text"
                                                    placeholder="Select Date" aria-describedby="basic-addon3" />

                                                <span class="input-group-text" id="basic-addon3"><i
                                                        class="fe fe-calendar"></i></span>
                                            </div>
                                        </div>
                                        <!-- form group -->
                                        <div class="mb-3 col-md-6 col-12">
                                            <label class="form-label" for="privacy">Privacy</label>
                                            <select class="form-select" id="privacy" required>
                                                <option value="">Select Privacy</option>
                                                <option value="Public to you team">Public to you team</option>
                                                <option value="Private to project members">Private to project members
                                                </option>
                                                <option value="Private to you">Private to you</option>
                                            </select>
                                            <div class="invalid-feedback">Please choose option.</div>
                                        </div>
                                        <!-- form group -->
                                        <div class="mb-3 col-md-6 col-12">
                                            <label class="form-label" for="teamMembers">Team Members</label>
                                            <select class="form-select" id="teamMembers" required>
                                                <option value="">Assign to owner</option>
                                                <option value="Eleanor Pena">Eleanor Pena</option>
                                                <option value="Courtney Henry">Courtney Henry</option>
                                                <option value="Assign to Owner">Assign to Owner</option>
                                            </select>
                                            <div class="invalid-feedback">Please choose option.</div>
                                        </div>
                                        <!-- form group -->
                                        <div class="mb-3 col-md-6 col-12">
                                            <label class="form-label" for="budget">Budget</label>
                                            <select class="form-select" id="budget" required>
                                                <option value="">Project Budget</option>
                                                <option value="Based on Project Amount">Based on Project Amount</option>
                                                <option value="Based on Project Hours">Based on Project Hours</option>
                                            </select>
                                            <div class="invalid-feedback">Please choose option.</div>
                                        </div>
                                        <!-- form group -->
                                        <div class="mb-3 col-md-6 col-12">
                                            <label class="form-label" for="priority">Priority</label>
                                            <select class="form-select" id="priority" required>
                                                <option value="">Set Priority</option>
                                                <option value="High">High</option>
                                                <option value="Medium">Medium</option>
                                                <option value="Low">Low</option>
                                            </select>
                                            <div class="invalid-feedback">Please choose option.</div>
                                        </div>

                                        <div class="col-md-3 col-12 mb-4">
                                            <div>
                                                <!-- logo -->
                                                <h5 class="mb-3">Project Logo</h5>
                                                <div class="icon-shape icon-xxl border rounded position-relative">
                                                    <span class="position-absolute"><i
                                                            class="bi bi-image fs-3"></i></span>
                                                    <input class="form-control border-0 opacity-0" type="file" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 mb-4">
                                            <h5 class="mb-3">Cover Image</h5>

                                            <div id="my-dropzone" class="dropzone mt-4 border-dashed rounded-2 min-h-0">
                                            </div>
                                        </div>
                                        <div class="col-md-8"></div>
                                        <!-- button -->
                                        <div class="col-12">
                                            <button class="btn btn-primary" type="submit">Submit</button>
                                            <button type="button" class="btn btn-outline-primary ms-2"
                                                data-bs-dismiss="offcanvas" aria-label="Close">Close</button>
                                        </div>
                                    </form>
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

    <!-- Js de parte del proveedor -->
    <script src="../../assets/libs/dropzone/dist/min/dropzone.min.js"></script>
    <script src="../../assets/libs/flatpickr/dist/flatpickr.min.js"></script>
    <script src="../../assets/js/vendors/flatpickr.js"></script>
    <script src="../../assets/js/vendors/validation.js"></script>
    <script src="../../assets/js/vendors/dropzone.js"></script>

</body>

</html>