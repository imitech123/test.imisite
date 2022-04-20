<?php
require_once('../classhandler.php');
$LoginCheck = new IsLogin;
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
            <div class="container-fluid pt-4 px-4 my-5">
                <div class="row g-4 mb-5">
                    <div class="col-sm-6 m-auto">
                        <form action="" method="POST">
                            <div class="card">
                                <div class="card-header">
                                    Add Job
                                </div>
                                <div class="card-body">
                                    <div class="col-sm-12">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="" class="h6">Job Role :</label>
                                                    <input type="text" class="form-control" name="" placeholder="Enter Your Job Role">
                                                </div>
                                            </div>
                                            <div class="col-sm-6 mb-3">
                                                <div class="form-group">
                                                    <label for="" class="h6">Job Location :</label>
                                                    <textarea type="text" name="" class="form-control" placeholder="Enter Your Job Location"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="" class="h6">Salery :</label>
                                                    <input type="text" class="form-control" name="salery" placeholder="Enter Your Salery">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="" class="h6">Industry :</label>
                                                    <div class="form-group">
                                                        <select name="Industry" id="" class="form-control form-select">
                                                            <option value="" selected>Select Industry</option>
                                                            <option value="0-1">IT-Software / Software Services</option>
                                                            <option value="1-2">Telecom Industry</option>
                                                            <option value="2-3">Sales</option>
                                                            <option value="3-4">Human Resouces</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 mt-3">
                                                <label for="" class="h6">Experience :</label>
                                                <div class="form-group">
                                                    <select name="Experience" id="" class="form-control form-select">
                                                        <option value="" selected>Select Experience</option>
                                                        <option value="0-1">0-1 year</option>
                                                        <option value="1-2">1-2 year</option>
                                                        <option value="2-3">2-3 year</option>
                                                        <option value="3-4">3-4 year</option>
                                                        <option value="4-5">4-5 year</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 mt-3">
                                                <div class="form-group">
                                                    <label for="" class="h6">No. of Vacancy :</label>
                                                    <div class="form-group">
                                                        <select name="Experience" id="" class="form-control form-select">
                                                            <option value="" selected>Select Vacancy</option>
                                                            <option value="1">1 year</option>
                                                            <option value="2">2year</option>
                                                            <option value="3">3 year</option>
                                                            <option value="4">4 year</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 mt-3">
                                                <div class="form-group">
                                                    <input type="text" name="" class="form-control" placeholder="">
                                                </div>
                                            </div>
                                            <div class="col-sm-6 mt-3">
                                                <div class="form-group">
                                                    <input type="text" name="" class="form-control" placeholder="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>

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