<?php
    include_once("../config/core.php");
    if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']){
        header("Location: {$home_url}index.php");
    }else if(isset($_SESSION['require_login']) && isset($_SESSION['require_login'])){
        $alertLogin = true;
        session_destroy();
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
</head>

<body>
    <div class="bg-image"></div>
    <?php
        if(isset($alertLogin)){
            echo '<div class="bg-text" style="height:490px">';
        }else{
            echo '<div class="bg-text">';
        }
    ?>
   
        <h2 class="mt-4">TRY HARD</h2>
        
        <div class="txtLogin row mt-6" id="txtLogin">
            <input type="text" class="form-control col-md-10" placeholder="Account" id="txtUserNameLogin" name="">
            <i class="iconUserNameLogin fa fa-user"></i>
        </div>
        <div class="txtLogin row mt-2" id="txtLogin">
            <input type="password" class="form-control col-md-10" placeholder="Password" id="txtPasswordLogin" name="">
            <i class="iconPasswordLogin fa fa-lock"></i>
        </div>
        <!-- <div class="text-right col-md-12 mt-2">
            <a href="" class="text-right hvr-wobble-top forgot-pass">Forgot password?</a>
        </div> -->
        <button class="col-md-11 btn btn-default hvr-wobble-top mt-5 btnLogin" id="btnLogin">LOG IN</button>
        <!-- </form> -->
        <p class="mt-4">Don't have an account? 
            <a href="signup.php" class="hvr-buzz linkSignUp">SIGN UP</a>
        </p>
         <div id="loginAlert">
            <?php 
            if(isset($alertLogin)){
                echo '<div class="alert alert-info" style="color: red; font-weight: bolder;">Please login first.</div>;';
            }
            ?>
             
         </div>
    </div>


    <script type="text/javascript" src="../js/loginPresenter.js"></script>

</body>

</html>