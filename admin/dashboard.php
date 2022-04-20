<?php
require_once('../classhandler.php');
$LoginCheck = new IsLogin;
// $str = explode('/',$_SERVER['REQUEST_URI']);
// print_r($str[4]);
// die();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    require_once('../includes/header.php');
    // $_SESSION['CURRENT_URL'] = substr($_SERVER['REQUEST_URI'],25);
    ?>
</head>

<body>
    <div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        <!-- Sidebar Start -->
        <?php require_once('../includes/sidebar.php') ?>
        <!-- Sidebar End -->

        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <?php require_once('../includes/menubar.php') ?>
            <!-- Navbar End -->

            <!-- Main Content Area -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="container-fluid pt-4 px-4">
                        <?php
                        if ($_SESSION['ROLE'] == 1) { ?>
                            <!-- Sale & Revenue Start -->
                            <div class="row g-4 mb-5">
                                <div class="col-sm-6 col-xl-3">
                                    <a href="#!">
                                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                                            <i class="fa fa-chart-line fa-3x text-primary"></i>
                                            <div class="ms-3">
                                                <span class="mb-0 h6">Php Developer</span>
                                                <p class="mb-2 ">Job Opening</p>
                                                <h6 class="mb-0">5</h6>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-sm-6 col-xl-3">
                                    <a href="#!">
                                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                                            <i class="fa fa-chart-line fa-3x text-primary"></i>
                                            <div class="ms-3">
                                                <span class="mb-0 h6">Php Developer</span>
                                                <p class="mb-2 ">Job Opening</p>
                                                <h6 class="mb-0">5</h6>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-sm-6 col-xl-3">
                                    <a href="#!">
                                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                                            <i class="fa fa-chart-line fa-3x text-primary"></i>
                                            <div class="ms-3">
                                                <span class="mb-0 h6">Php Developer</span>
                                                <p class="mb-2 ">Job Opening</p>
                                                <h6 class="mb-0">5</h6>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-sm-6 col-xl-3">
                                    <a href="#!">
                                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                                            <i class="fa fa-chart-line fa-3x text-primary"></i>
                                            <div class="ms-3">
                                                <span class="mb-0 h6">Php Developer</span>
                                                <p class="mb-2 ">Job Opening</p>
                                                <h6 class="mb-0">5</h6>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <!-- Sale & Revenue End -->
                            <!-- Sales Chart Start -->
                            <div class="row g-4  mb-5">
                                <div class="col-sm-12 col-xl-6">
                                    <div class="bg-light text-center rounded p-4">
                                        <div class="d-flex align-items-center justify-content-between mb-4">
                                            <h6 class="mb-0">Worldwide Sales</h6>
                                            <a href="">Show All</a>
                                        </div>
                                        <canvas id="worldwide-sales"></canvas>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-xl-6">
                                    <div class="bg-light text-center rounded p-4">
                                        <div class="d-flex align-items-center justify-content-between mb-4">
                                            <h6 class="mb-0">Salse & Revenue</h6>
                                            <a href="">Show All</a>
                                        </div>
                                        <canvas id="salse-revenue"></canvas>
                                    </div>
                                </div>
                            </div>
                            <!-- Sales Chart End -->
                            <!-- Widgets Start -->
                            <div class="row g-4  mb-5">
                                <div class="col-sm-12 col-md-6 col-xl-4">
                                    <div class="h-100 bg-light rounded p-4">
                                        <div class="d-flex align-items-center justify-content-between mb-2">
                                            <h6 class="mb-0">Messages</h6>
                                            <a href="">Show All</a>
                                        </div>
                                        <div class="d-flex align-items-center border-bottom py-3">
                                            <img class="rounded-circle flex-shrink-0" src="<?= BASE_URL ?>public/img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                            <div class="w-100 ms-3">
                                                <div class="d-flex w-100 justify-content-between">
                                                    <h6 class="mb-0">Jhon Doe</h6>
                                                    <small>15 minutes ago</small>
                                                </div>
                                                <span>Short message goes here...</span>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center border-bottom py-3">
                                            <img class="rounded-circle flex-shrink-0" src="<?= BASE_URL ?>public/img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                            <div class="w-100 ms-3">
                                                <div class="d-flex w-100 justify-content-between">
                                                    <h6 class="mb-0">Jhon Doe</h6>
                                                    <small>15 minutes ago</small>
                                                </div>
                                                <span>Short message goes here...</span>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center border-bottom py-3">
                                            <img class="rounded-circle flex-shrink-0" src="<?= BASE_URL ?>public/img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                            <div class="w-100 ms-3">
                                                <div class="d-flex w-100 justify-content-between">
                                                    <h6 class="mb-0">Jhon Doe</h6>
                                                    <small>15 minutes ago</small>
                                                </div>
                                                <span>Short message goes here...</span>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center pt-3">
                                            <img class="rounded-circle flex-shrink-0" src="<?= BASE_URL ?>public/img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                            <div class="w-100 ms-3">
                                                <div class="d-flex w-100 justify-content-between">
                                                    <h6 class="mb-0">Jhon Doe</h6>
                                                    <small>15 minutes ago</small>
                                                </div>
                                                <span>Short message goes here...</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6 col-xl-4">
                                    <div class="h-100 bg-light rounded p-4">
                                        <div class="d-flex align-items-center justify-content-between mb-4">
                                            <h6 class="mb-0">Calender</h6>
                                            <a href="">Show All</a>
                                        </div>
                                        <div id="calender"></div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6 col-xl-4">
                                    <div class="h-100 bg-light rounded p-4">
                                        <div class="d-flex align-items-center justify-content-between mb-4">
                                            <h6 class="mb-0">To Do List</h6>
                                            <a href="">Show All</a>
                                        </div>
                                        <div class="d-flex mb-2">
                                            <input class="form-control bg-transparent" type="text" placeholder="Enter task">
                                            <button type="button" class="btn btn-primary ms-2">Add</button>
                                        </div>
                                        <div class="d-flex align-items-center border-bottom py-2">
                                            <input class="form-check-input m-0" type="checkbox">
                                            <div class="w-100 ms-3">
                                                <div class="d-flex w-100 align-items-center justify-content-between">
                                                    <span>Short task goes here...</span>
                                                    <button class="btn btn-sm"><i class="fa fa-times"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center border-bottom py-2">
                                            <input class="form-check-input m-0" type="checkbox">
                                            <div class="w-100 ms-3">
                                                <div class="d-flex w-100 align-items-center justify-content-between">
                                                    <span>Short task goes here...</span>
                                                    <button class="btn btn-sm"><i class="fa fa-times"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center border-bottom py-2">
                                            <input class="form-check-input m-0" type="checkbox" checked>
                                            <div class="w-100 ms-3">
                                                <div class="d-flex w-100 align-items-center justify-content-between">
                                                    <span><del>Short task goes here...</del></span>
                                                    <button class="btn btn-sm text-primary"><i class="fa fa-times"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center border-bottom py-2">
                                            <input class="form-check-input m-0" type="checkbox">
                                            <div class="w-100 ms-3">
                                                <div class="d-flex w-100 align-items-center justify-content-between">
                                                    <span>Short task goes here...</span>
                                                    <button class="btn btn-sm"><i class="fa fa-times"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center pt-2">
                                            <input class="form-check-input m-0" type="checkbox">
                                            <div class="w-100 ms-3">
                                                <div class="d-flex w-100 align-items-center justify-content-between">
                                                    <span>Short task goes here...</span>
                                                    <button class="btn btn-sm"><i class="fa fa-times"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Widgets End -->
                        <?php } else { ?>
                            <div class="row g-4 mb-5">
                                <div class="col-sm-6 col-xl-3">
                                    <a href="#!">
                                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                                            <i class="fa fa-chart-line fa-3x text-primary"></i>
                                            <div class="ms-3">
                                                <span class="mb-0 h6">Php Developer</span>
                                                <p class="mb-2 ">Job Opening</p>
                                                <h6 class="mb-0">5</h6>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-sm-6 col-xl-3">
                                    <a href="#!">
                                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                                            <i class="fa fa-chart-bar fa-3x text-primary"></i>
                                            <div class="ms-3">
                                                <p class="mb-2">Total Sale</p>
                                                <h6 class="mb-0">$1234</h6>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-sm-6 col-xl-3">
                                    <a href="#!">
                                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                                            <i class="fa fa-chart-area fa-3x text-primary"></i>
                                            <div class="ms-3">
                                                <p class="mb-2">Today Revenue</p>
                                                <h6 class="mb-0">$1234</h6>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-sm-6 col-xl-3">
                                    <a href="#!">
                                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                                            <i class="fa fa-chart-pie fa-3x text-primary"></i>
                                            <div class="ms-3">
                                                <p class="mb-2">Total Revenue</p>
                                                <h6 class="mb-0">$1234</h6>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        <?php }

                        ?>
                    </div>
                </div>
            </div>
            <!-- Main Content Area End -->

            <!-- Footer Start -->
            <?php require('../includes/footer.php') ?>
            <!-- Footer End -->
        </div>
        <!-- Content End -->

        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>
    <!-- script -->
    <?php require('../includes/script.php') ?>
</body>

</html>