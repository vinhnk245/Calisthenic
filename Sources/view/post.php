<?php 
    include_once("../config/core.php");

    if(isset($_GET["cat"])) {
        $cat = $_GET["cat"];
    }else{
        header("Location: {$home_url}index.php");
    } 

	require "header.php";
 ?>

	<div class="row" data-id="<?php echo $cat ?>" id="container">
		<div class="col-md-10 offset-md-1 mt-3">
			<div class="row" id="content">
				
				<!-- <div class="col-10 offset-1 col-sm-10 offset-sm-1 col-md-4 offset-md-0 mt-3 mb-3 hvr-hang">
					<div class="card colorPost">
						<img class="card-img-top" alt="Bootstrap Thumbnail First" src="image/infor/hoavinh.jpg" />
						<div class="card-block">
							<h5 class="card-title text-info">
								Title
							</h5>
							<p class="card-text">
								Short content...
							</p>
							<a target="_blank" class="btn btn-danger btn-detail">Detail</a>
						</div>
					</div>
				</div>
				<div class="col-10 offset-1 col-sm-10 offset-sm-1 col-md-4 offset-md-0 mt-3 mb-3 hvr-bob">
					<div class="card colorPost">
						<img class="card-img-top" alt="Bootstrap Thumbnail Second" src="image/infor/hoavinh.jpg" />
						<div class="card-block">
							<h5 class="card-title text-info">
								Title
							</h5>
							<p class="card-text">
								Short content...
							</p>
							<a class="btn btn-danger btn-detail">Detail</a>
						</div>
					</div>
				</div>
				<div class="col-10 offset-1 col-sm-10 offset-sm-1 col-md-4 offset-md-0 mt-3 mb-4 hvr-hang">
					<div class="card colorPost">
						<img class="card-img-top" alt="Bootstrap Thumbnail Second" src="image/infor/hoavinh.jpg" />
						<div class="card-block">
							<h5 class="card-title text-info">
								Title
							</h5>
							<p class="card-text">
								Short content...
							</p>
							<a class="btn btn-danger btn-detail">Detail</a>
						</div>
					</div>
				</div>

				<div class="col-10 offset-1 col-sm-10 offset-sm-1 col-md-4 offset-md-0 mt-3 mb-4 hvr-hang">
					<div class="card colorPost">
						<img class="card-img-top" alt="Bootstrap Thumbnail Second" src="image/infor/hoavinh.jpg" />
						<div class="card-block">
							<h5 class="card-title text-info">
								Title
							</h5>
							<p class="card-text">
								Short content...
							</p>
							<a class="btn btn-danger btn-detail">Detail</a>
						</div>
					</div>
				</div> -->
			</div>
			<div id="pag" class="float-right"></div>
			
		</div>

	</div>

 <?php 
	require"footer.php"
 ?>


<script type="text/javascript" src="../js/postPresenter.js"></script>