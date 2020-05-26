<?php
    include_once("../config/core.php");
    include_once("../model/user.php");
    if(isset($_GET["logout"])) {
        session_destroy();
        header("Location: {$home_url}index.php");
    }else if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']){
        $user = unserialize($_SESSION['current_user']);

    } 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Calisthenics</title>
    <script type="text/javascript" src="../helper/jquery/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>  <!--popover tooltip-->
    <script type="text/javascript" src="../helper/bootstrap/js/bootstrap.js"></script>
    <script type="text/javascript" src="../helper/jquery.bootpag.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../helper/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../helper/animate/animate.css">
    <link rel="stylesheet" href="../helper/hover/css/hover.css" media="all">
    <link rel="stylesheet" type="text/css" href="../helper/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="../helper/css/style.css">
</head>

<body>
<div class="container-fluid">

  <nav class="navbar navbar-expand-md navbar-dark menuHead fixed-top justify-content-end">
  <a class= "nav-link animated swing" id="nameCompanyMenu" title="Home" href="index.php">MVTech</a>
  
    
    <?php 

        if(isset($user)){
            if($user->type==1){
                echo ' <ul class="navbar-nav animated swing">
                            <li class="nav-item dropdown">
                              <a class="nav-link dropdown-toggle btnLoginHome" href="#" id="navbardrop" data-toggle="dropdown">
                                '.$user->username.'
                              </a>
                              <div class="dropdown-menu dropdown-menu-right text-center">
                                <a class="dropdown-item padding-item" href="../admin/index.php"><i class="fa fa-cogs"></i>&nbsp; Manage</a>
                                <a class="dropdown-item padding-item" href="profile.php"><i class="fa fa-user"></i>&nbsp; Profile</a>
                                <a class="dropdown-item padding-item dropdown-item-border" href="index.php?logout=true"><i class="fa fa-sign-out"></i>&nbsp; Log out</a>
                              </div>
                            </li>
                        </ul>';
            }else{
                echo ' <ul class="navbar-nav animated swing">
                            <li class="nav-item dropdown">
                              <a class="nav-link dropdown-toggle btnLoginHome" href="#" id="navbardrop" data-toggle="dropdown">
                                '.$user->username.'
                              </a>
                              <div class="dropdown-menu dropdown-menu-right text-center">
                                <a class="dropdown-item padding-item" href="profile.php"><i class="fa fa-user"></i>&nbsp; Profile</a>
                                <a class="dropdown-item padding-item dropdown-item-border" href="index.php?logout=true"><i class="fa fa-sign-out"></i>&nbsp; Log out</a>
                              </div>
                            </li>
                        </ul>';
            }
        }
        else{
            echo '<li class="nav-item animated swing">
                      <a class="nav-link btnLoginHome hvr-rotate" href="login.php">Log in</a>
                  </li>
                  <li class="nav-item animated swing">
                      <a class="nav-link btnSignUpHome hvr-rotate" href="signup.php">Sign up</a>
                  </li>
                  ';
        }
     ?>
                            
</nav>