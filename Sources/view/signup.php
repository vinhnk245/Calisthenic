<?php
    include_once("../config/core.php");
    if(isset($_SESSION['signup_success']) && $_SESSION['signup_success']){
        session_destroy();
        header("Location: {$home_url}login.php");
    }

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Calisthenics</title>
    <link rel="stylesheet" type="text/css" href="../helper/css/style.css">
    <link rel="stylesheet" type="text/css" href="../helper/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../helper/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="../helper/hover/css/hover.css" media="all">
    <script type="text/javascript" src="../helper/jquery/jquery.js"></script>
    <script type="text/javascript" src="../helper/bootstrap/js/bootstrap.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</head>

<body>
    <div class="bg-image"></div>
    <div class="bg-text bg-signup">
        <h2 class="mt-3">TRY HARD</h2>
        <div class="txtLogin row mt-5" id="txtLogin">
            <input type="text" class="form-control col-md-10" placeholder="Email" id="txtEmailSignUp">
            <i class="iconEmailSignUp fa fa-envelope"></i>
        </div>
        <div class="txtLogin row mt-2" id="txtLogin">
            <input type="text" class="form-control col-md-10" placeholder="Full name" id="txtUserNameSignUp">
            <i class="iconFullNameSignUp fa fa-wheelchair"></i>
        </div>
        <div class="txtLogin row mt-2" id="txtLogin">
            <input type="text" class="form-control col-md-10" placeholder="Account" id="txtAccountSignUp">
            <i class="iconUserNameSignUp fa fa-user"></i>
        </div>
        <div class="txtLogin row mt-2" id="txtLogin">
            <input type="password" class="form-control col-md-10" placeholder="Password" id="txtPasswordSignUp">
            <i class="iconPasswordSignUp fa fa-lock"></i>
        </div>
        <div class="txtLogin row mt-2" id="txtLogin">
            <input type="password" class="form-control col-md-10" placeholder="Confirm password" id="txtConfirmPasswordSignUp">
            <i class="iconConfirmPasswordSignUp fa fa-unlock-alt"></i>
        </div>
        <button class="col-md-11 btn btn-default hvr-wobble-top mt-5 mb-3 btnSignUp" id="btnSignUp">SIGN UP</button>
        <div id="signupAlert"></div>
    </div>

    <script type="text/javascript" src="../js/signupPresenter.js"></script>
</body>

</html>
