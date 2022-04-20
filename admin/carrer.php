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
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <!-- Recent Sales Start -->
                    <div class="bg-light rounded h-100 p-4">
                        <div class="row">
                            <div class="col-sm-6">
                                <h6 class="mb-4">Responsive Table</h6>
                            </div>
                            <div class="col-sm-6 mb-4 d-flex flex-row-reverse">
                               <a href="addjob.php" class="btn btn-primary">Add Job</a>
                            </div>
 
                        </div>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">First Name</th>
                                        <th scope="col">Last Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Country</th>
                                        <th scope="col">ZIP</th>
                                        <th scope="col">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>John</td>
                                        <td>Doe</td>
                                        <td>jhon@email.com</td>
                                        <td>USA</td>
                                        <td>123</td>
                                        <td>Member</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>mark@email.com</td>
                                        <td>UK</td>
                                        <td>456</td>
                                        <td>Member</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>jacob@email.com</td>
                                        <td>AU</td>
                                        <td>789</td>
                                        <td>Member</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                    <!-- Recent Sales End -->
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