    <?php 
        require"menu_header.php"
    ?>
        
        <div class="row">
            <div class="carousel slide bgHome" id="carousel-144218" data-ride="carousel">
                <div class="btnSlideHome">
                    <div class="row btnHome col-md-12 animated fadeInUp">
                       
                        <?php showPopupLevel() ?>

                        <a href="post.php?cat=nutrition" class="button hvr-wobble-to-bottom-right healthy col-6 col-sm-4 col-md-4">
                            NUTRITION
                        </a>
                    </div>
                </div>

                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" alt="Carousel Bootstrap First" src="../image/background/bg_slide1.jpg" />
                    </div>
                    <div class="carousel-item ">
                        <img class="d-block w-100" alt="Carousel Bootstrap Third" src="../image/background/bg_slide2.png" />
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" alt="Carousel Bootstrap Second" src="../image/background/bg_slide3.jpg" />
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" alt="Carousel Bootstrap Second" src="../image/background/bg_slide4.jpg" />
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carousel-144218" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span> 
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carousel-144218" role="button" data-slide="next">
                    <span class="carousel-control-next-icon"></span> 
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>


<!-- modal show level -->
        <div class="modal" id="modalLevel" data-id="<?php echo $user->id ?>">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="row">
                        <div class="col-4 col-sm-4 col-md-4 level1">
                            <div class="row">
                                <a href="" class="col-md-12 hvr-float selectLevel" id="selectLevel1">
                                    <p class="text-center text-light">LEVEL 1</p>
                                </a>
                            </div>
                            <div class="row">
                                <p class="col-md-12 pt-3 text-center text-light result" id="resultLevel1">6/30</p>
                            </div>
                        </div>
                        <div class="col-4 col-sm-4 col-md-4 level2">
                            <div class="row">
                                <a href="" class="col-md-12 hvr-float selectLevel" id="selectLevel2">
                                    <p class="text-center text-light">LEVEL 2</p>
                                </a>
                            </div>
                            <div class="row">
                                <p class="col-md-12 pt-3 text-center text-light result" id="resultLevel2">6/30</p>
                            </div>
                        </div>
                        <div class="col-4 col-sm-4 col-md-4 level3">
                            <div class="row">
                                <a href="" class="col-md-12 hvr-float selectLevel" id="selectLevel3">
                                    <p class="text-center text-light">LEVEL 3</p>
                                </a>
                            </div>
                            <div class="row">
                                <p class="col-md-12 pt-3 text-center text-light result" id="resultLevel3">6/30</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <!-- modal Request Login -->
        <div id="modalRequestLogin" class="modal" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body text-center">
                        <p>You must login before start training!</p>
                    </div>
                    <a href="login.php" class="btn btn-success hvr-float-shadow con-md-1 offset-md-5 btnLoginBeforeTrain">OK</a>
                </div>
            </div>
        </div>


 <?php 
    function showPopupLevel(){

        if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']){
            echo '<a href="" data-toggle="modal" data-target="#modalLevel" class="button hvr-wobble-to-bottom-right training col-6 col-sm-4 offset-sm-2 col-md-4 offset-md-2">
                TRAINING
                </a>';

        }else{
            echo '<a href="" data-toggle="modal" data-target="#modalRequestLogin" class="button hvr-wobble-to-bottom-right training col-6 col-sm-4 offset-sm-2 col-md-4 offset-md-2">
                TRAINING
                </a>';
        }

    }
?>

<script>
$('.carousel').carousel({
  interval: 3000
})

</script>
