<?php
    include_once("../config/core.php");
    include_once("../model/user.php");
    if(isset($_GET["logout"])) {
        session_destroy();
        header("Location: {$home_url}index.php");
    }else if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']){
        $user = unserialize($_SESSION['current_user']);
    }else{
        $_SESSION['require_login'] = true;
        header("Location: {$home_url}login.php");
        return;
    } 

    if(isset($_GET["level"]) && isset($_GET["day"]) && $_GET["level"]<4 && $_GET["level"]>0 && $_GET["day"] <= 13 && $_GET["day"] >= 0){

        $level = $_GET["level"];
        $day = $_GET["day"];
        if($day==0) header("Location: {$home_url}training.php?level=".$level."&day=1"); //chưa tập lần nào
        else if($day==13 && $level<3) header("Location: {$home_url}training.php?level=".++$level."&day=1"); //nếu ở ngày 12 và bấm finish
        else if($day==13 && $level==3){
            $day--; //lặp lại bài tập ngày 12, chưa nghĩ ra nên làm gì
        }
    }else{
        header("Location: {$home_url}index.php"); //vào training không thông qua modal
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
    <link rel="stylesheet" type="text/css" href="../helper/animate/animate.css">
    <script type="text/javascript" src="../helper/jquery/jquery.js"></script>
    <script type="text/javascript" src="../helper/bootstrap/js/bootstrap.js"></script>
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
             ?>
                                    
        </nav>

        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 headerTraining text-center">
                <button type="button" data-id=<?php echo $level?> style="display:none" id="btnGetLevel"></button> 
                <button type="button" data-id=<?php echo $day?> style="display:none" id="btnGetDay"></button> 
                <button type="button" data-id=<?php echo $user->id?> style="display:none" id="btnGetUserID"></button> 
                
                <div class="btn-group btn-group-lg flex-wrap btnGroupDay animated fadeInUp" id="btnGroup">           
                    <button type="button" data-id="1" class="col-3 col-sm-1 col-md-1 btn hvr-float">01</button> 
                    <button type="button" data-id="2" class="col-3 col-sm-1 col-md-1 btn hvr-float">02</button>
                    <button type="button" data-id="3" class="col-3 col-sm-1 col-md-1 btn hvr-float">03</button>
                    <button type="button" data-id="4" class="col-3 col-sm-1 col-md-1 btn hvr-float">04</button>
                    <button type="button" data-id="5" class="col-3 col-sm-1 col-md-1 btn hvr-float">05</button>
                    <button type="button" data-id="6" class="col-3 col-sm-1 col-md-1 btn hvr-float">06</button>
                    <button type="button" data-id="7" class="col-3 col-sm-1 col-md-1 btn hvr-float">07</button>
                    <button type="button" data-id="8" class="col-3 col-sm-1 col-md-1 btn hvr-float">08</button>
                    <button type="button" data-id="9" class="col-3 col-sm-1 col-md-1 btn hvr-float">09</button>
                    <button type="button" data-id="10" class="col-3 col-sm-1 col-md-1 btn hvr-float">10</button>
                    <button type="button" data-id="11" class="col-3 col-sm-1 col-md-1 btn hvr-float">11</button>
                    <button type="button" data-id="12" class="col-3 col-sm-1 col-md-1 btn hvr-float">12</button>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="textSelectedDay">
                <h2 id="dayNumber" class="text-center text-danger mt-3 mb-3">Day Here</h2>
            </div>
            <div class="row text-center">
                <div class="col-md-12 btnFinishTraining" >
                    <a title="Finish" id="btnFinishTraining" style="cursor: pointer;">
                        <i class="fa fa-trophy"></i>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="backNext col-1 col-sm-1 col-md-1">
                    <a class="col-md-12 " title="Previous" id="btnPrevious">
                        <i class="fa fa-chevron-left"></i>
                    </a>
                </div>
                <div class="backNext col-1 offset-9 col-sm-1 offset-sm-10 col-md-1 offset-md-10 text-right">
                    <a class="col-md-12 " title="Next" id="btnNext">
                        <i class="fa fa-chevron-right"></i>
                    </a>
                </div>
            </div>
            <div class="row mt-5 mb-3">
                <div class="actualyoutube  col-12 col-sm-12 col-md-6 offset-md-1">
                    <iframe class="row" height="315" width="100%" src="https://www.youtube.com/embed/CQ7XUCQ6pbE">
                    </iframe>
                </div>
                <div class="col-md-5 mt-5 text-center" id="infoTraining">
                    <div class="row mt-5">
                        <div class="col-2 col-sm-2 offset-sm-4 col-md-3 offset-md-0">
                            <p class="text-info">Name: </p>
                        </div>
                        <div class="col-10 col-sm-6 col-md-9 text-light text-left">
                            <p id="nameTraining">how to train your dragon</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-2 col-sm-2 offset-sm-4 col-md-3 offset-md-0">
                            <p class="text-info">Set: </p>
                        </div>
                        <div class="col-1 col-sm-1 col-md-1 text-light">
                            <p id="setTraining">2100</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-2 col-sm-2 offset-sm-4 col-md-3 offset-md-0">
                            <p class="text-info">Rep: </p>
                        </div>
                        <div class="col-1 col-sm-1 col-md-1 text-light" id="">
                            <p id="repTraining">2100</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-2 col-sm-2 offset-sm-4 col-md-3 offset-md-0">
                            <p class="text-info">Breaks: </p>
                        </div>
                        <div class="col-1 col-sm-1 col-md-1 text-light">
                            <p id="breaksTraining">2100</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<?php 
        require"footer.php";
 ?>

 <script type="text/javascript" src="../js/trainingPresenter.js"></script>