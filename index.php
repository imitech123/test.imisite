<?php
// $hash = password_hash('admin123');
// $hash = password_hash('test123@#');
require_once('classhandler.php');
$Login = new Admin;
if (isset($_SESSION['IS_LOGIN'])) {
    header('Location:' . $Login->BaseUrl() . 'admin/dashboard.php');
    exit;
} else {
    extract($_REQUEST);
    $remb = (isset($_POST['remember']))?true:false;
    if (isset($_POST['username']) && isset($_POST['password']) && isset($_SESSION['Csrf']) && isset($_POST['Csrf_Token']) && $_SESSION['Csrf'] == $_POST['Csrf_Token']) {
        $email = htmlentities(trim(filter_var($_POST['username'], FILTER_SANITIZE_EMAIL)));
        $password = htmlentities(trim(filter_var($_POST['password'], FILTER_SANITIZE_STRING)));
        $CSRF_token = htmlentities(trim(filter_var($_POST['Csrf_Token'], FILTER_SANITIZE_STRING)));
        $msg = $Login->Login($email, $password, $CSRF_token,$remb);
        if ($msg['status'] && $_SESSION['Token']) {
            if (($_SESSION['ROLE'] == 1)) {
                header('Location:' . $Login->BaseUrl() . 'admin/dashboard.php');
            } else {
                header('Location:' . $Login->BaseUrl() . 'admin/dashboard.php');
            }
        }
    }
}
$token = new Token;
$_SESSION['Csrf'] = $token->Csrf(60);
if(isset($_COOKIE['email']) && isset($_COOKIE['pasword']))
{
    $rem_email = $_COOKIE['email'];
    $rem_pass = $_COOKIE['pasword'];
    $select = "checked='checked'";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once('includes/header.php') ?>
    <title>IMI - Sign in</title>
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
        <!-- Sign In Start -->
        <div class="container-fluid">
            <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
                <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                    <form action="<?=$_SERVER['PHP_SELF']?>" method="POST">
                        <div class="bg-light rounded p-4 p-sm-5 my-4 mx-3">
                            <div class="d-flex align-items-center justify-content-center mb-3">
                                <a href="index.php" class="text-center">
                                    <h3 class="text-primary">IMI</h3>
                                    <!-- <i class="fa fa-hashtag me-2"></i> -->
                                </a>
                            </div>
                            <?php if (!empty($msg['error'])) {
                                echo "<div class='alert alert-danger'>" . $msg['error'] . "</div>";
                            }
                            ?>
                            <div class="form-floating mb-3">
                                <input type="hidden" name='Csrf_Token' value="<?= $_SESSION['Csrf'] ?>" class="form-control">
                            </div>
                            <div class="form-floating mb-3">
                                <input type="email" name='username' class="form-control" value="<?=(@$rem_email)? @$rem_email:@$email?>" id="floatingInput" placeholder="name@example.com" data-bs-toggle="tooltip" data-bs-placement="right" title="Enter Your Valid E-mail">
                                <label for="floatingInput">Email address</label>
                            </div>
                            <div class="form-floating mb-4">
                                <input type="password" name='password' class="form-control" value="<?=(@$rem_pass)? @$rem_pass:''?>"  id="floatingPassword" placeholder="Password" data-bs-toggle="tooltip" data-bs-placement="right" title="Enter The Password must be 8 characters long">
                                <label for="floatingPassword">Password</label>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <div class="form-check">
                                    <input type="checkbox" name='remember' <?=@$select?>class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Remember Me</label>
                                </div>
                                <a href="">Forgot Password</a>
                            </div>
                            <button type="submit" class="btn btn-primary w-100 mb-4">Sign In</button>
                            <!-- <p class="text-center mb-0">Don't have an Account? <a href="">Sign Up</a></p> -->
                            <a href="index.php" class="w-100 mb-4 " data-bs-toggle="tooltip" data-bs-placement="right" title="Back To Main Site">Click Here</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Sign In End -->
    </div>

    <!-- JavaScript Libraries -->
    <?php require_once('includes/script.php') ?>
</body>

</html>