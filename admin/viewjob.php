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
                    <div class="bg-light rounded p-4">
                        <div class="col-sm-12 mb-5">
                            <?php
                            if ($_SESSION['ROLE'] == 1) { ?>
                                <a href="addjob.php" class="btn btn-primary">Add Job</a>
                            <?php } ?>
                        </div>
                        <div class="col-sm-12">
                            <div class="row">
                                <div class="col-sm-4  mb-4">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4 >PHP And Laravel Developer</h4>
                                        </div>
                                        <div class="card-body">
                                            <div class="small mb-3">Required: in A-83, Okhla Industrial Area Phase-2, New Delhi</div>
                                            <div class="small mb-1"><strong>Salary:</strong> As per company Standards</div>
                                            <div class="small mb-1"><strong> Industry:</strong> IT-Software / Software Services</div>
                                            <div class="small mb-1"><strong>Experience:</strong> 0 - 1 yrs</div>
                                            <div class="small mb-1"><strong> No. of Vacancy:</strong> 1</div>
                                            <div class="small mb-1"><strong>Functional Area:</strong> IT Software – Application Programming , Maintenance</div>
                                            <div class="small mb-1"><strong>Role Category:</strong> Programming &amp; Design</div>
                                            <div class="small mb-1"><strong>Role:</strong> Software Developer</div>
                                            <div class="small mb-1"><strong>Desired Candidate Profile</div>
                                            <div class="small mb-1"><strong>Education– UG:</strong> Any Graduate – Any Specialization</strong></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 mb-4">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4 >Android Developer</h4>
                                        </div>
                                        <div class="card-body">
                                            <div class="small mb-3">Required: in A-83, Okhla Industrial Area Phase-2, New Delhi</div>
                                            <div class="small mb-1"><strong>Salary:</strong> As per company Standards</div>
                                            <div class="small mb-1"><strong> Industry:</strong> IT-Software / Software Services</div>
                                            <div class="small mb-1"><strong>Experience:</strong> 0 - 1 yrs</div>
                                            <div class="small mb-1"><strong> No. of Vacancy:</strong> 1</div>
                                            <div class="small mb-1"><strong>Functional Area:</strong> IT Software – Application Programming , Maintenance</div>
                                            <div class="small mb-1"><strong>Role Category:</strong> Programming &amp; Design</div>
                                            <div class="small mb-1"><strong>Role:</strong> Software Developer</div>
                                            <div class="small mb-1"><strong>Desired Candidate Profile</div>
                                            <div class="small mb-1"><strong>Education– UG:</strong> Any Graduate – Any Specialization</strong></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 mb-4">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4 >IOS Developer</h4>
                                        </div>
                                        <div class="card-body">
                                            <div class="small mb-3">Required: in A-83, Okhla Industrial Area Phase-2, New Delhi</div>
                                            <div class="small mb-1"><strong>Salary:</strong> As per company Standards</div>
                                            <div class="small mb-1"><strong> Industry:</strong> IT-Software / Software Services</div>
                                            <div class="small mb-1"><strong>Experience:</strong> 0 - 1 yrs</div>
                                            <div class="small mb-1"><strong> No. of Vacancy:</strong> 1</div>
                                            <div class="small mb-1"><strong>Functional Area:</strong> IT Software – Application Programming , Maintenance</div>
                                            <div class="small mb-1"><strong>Role Category:</strong> Programming &amp; Design</div>
                                            <div class="small mb-1"><strong>Role:</strong> Software Developer</div>
                                            <div class="small mb-1"><strong>Desired Candidate Profile</div>
                                            <div class="small mb-1"><strong>Education– UG:</strong> Any Graduate – Any Specialization</strong></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 mt-1 mb-3">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4 >Sales Executive</h4>
                                        </div>
                                        <div class="card-body">
                                            <div class="small mb-3">Required: in A-83, Okhla Industrial Area Phase-2, New Delhi</div>
                                            <div class="small mb-1"><strong>Salary:</strong> As per company Standards</div>
                                            <div class="small mb-1"><strong> Industry:</strong> IT-Software / Software Services</div>
                                            <div class="small mb-1"><strong>Experience:</strong> 0 - 1 yrs</div>
                                            <div class="small mb-1"><strong> No. of Vacancy:</strong> 1</div>
                                            <div class="small mb-1"><strong>Functional Area:</strong> IT Software – Application Programming , Maintenance</div>
                                            <div class="small mb-1"><strong>Role Category:</strong> Programming &amp; Design</div>
                                            <div class="small mb-1"><strong>Role:</strong> Software Developer</div>
                                            <div class="small mb-1"><strong>Desired Candidate Profile</div>
                                            <div class="small mb-1"><strong>Education– UG:</strong> Any Graduate – Any Specialization</strong></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 mt-1 mb-3">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4 >Flutter Developer</h4>
                                        </div>
                                        <div class="card-body">
                                            <div class="small mb-3">Required: in A-83, Okhla Industrial Area Phase-2, New Delhi</div>
                                            <div class="small mb-1"><strong>Salary:</strong> As per company Standards</div>
                                            <div class="small mb-1"><strong> Industry:</strong> IT-Software / Software Services</div>
                                            <div class="small mb-1"><strong>Experience:</strong> 0 - 1 yrs</div>
                                            <div class="small mb-1"><strong> No. of Vacancy:</strong> 1</div>
                                            <div class="small mb-1"><strong>Functional Area:</strong> IT Software – Application Programming , Maintenance</div>
                                            <div class="small mb-1"><strong>Role Category:</strong> Programming &amp; Design</div>
                                            <div class="small mb-1"><strong>Role:</strong> Software Developer</div>
                                            <div class="small mb-1"><strong>Desired Candidate Profile</div>
                                            <div class="small mb-1"><strong>Education– UG:</strong> Any Graduate – Any Specialization</strong></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 mt-1 mb-3">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4 >React Developer</h4>
                                        </div>
                                        <div class="card-body">
                                            <div class="small mb-3">Required: in A-83, Okhla Industrial Area Phase-2, New Delhi</div>
                                            <div class="small mb-1"><strong>Salary:</strong> As per company Standards</div>
                                            <div class="small mb-1"><strong> Industry:</strong> IT-Software / Software Services</div>
                                            <div class="small mb-1"><strong>Experience:</strong> 0 - 1 yrs</div>
                                            <div class="small mb-1"><strong> No. of Vacancy:</strong> 1</div>
                                            <div class="small mb-1"><strong>Functional Area:</strong> IT Software – Application Programming , Maintenance</div>
                                            <div class="small mb-1"><strong>Role Category:</strong> Programming &amp; Design</div>
                                            <div class="small mb-1"><strong>Role:</strong> Software Developer</div>
                                            <div class="small mb-1"><strong>Desired Candidate Profile</div>
                                            <div class="small mb-1"><strong>Education– UG:</strong> Any Graduate – Any Specialization</strong></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <nav aria-label="...">
                                <ul class="pagination">
                                    <li class="page-item disabled">
                                        <a class="page-link" href="#" tabindex="-1">Previous</a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item active">
                                        <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">Next</a>
                                    </li>
                                </ul>
                            </nav>
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