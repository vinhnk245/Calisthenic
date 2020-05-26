
<?php
    
    require"layout_header.php";

?>

    <div class="content-page">
	
		<!-- Start content -->
        <div class="content">
            
			<div class="container-fluid">



					
				<div class="row">
					<div class="col-xl-12">
						<div class="breadcrumb-holder">
							<h1 class="main-title float-left pb-3">Dashboard</h1>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>

                <div class="row">
                	<div class="col-md-4 col-sm-4 col-12">
						<div class="card-box noradius noborder bg-info">
							<i class="fa fa-user-o float-right text-white"></i>
							<h6 class="text-white text-uppercase m-b-20">Users</h6>
							<h1 class="m-b-20 text-white counter pb-1" id="countUser"></h1>
						</div>
					</div>

					<div class="col-md-4 col-sm-4 col-12">
						<div class="card-box noradius noborder bg-warning">
							<i class="fa fa-newspaper-o float-right text-white"></i>
							<h6 class="text-white text-uppercase m-b-20">Posts</h6>
							<h1 class="m-b-20 text-white counter pb-1" id="countPost"></h1>
						</div>
					</div>

					<div class="col-md-4 col-sm-4 col-12">
						<div class="card-box noradius noborder bg-danger">
							<i class="fa fa-beer float-right text-white"></i>
							<h6 class="text-white text-uppercase m-b-20">Exercises</h6>
							<h1 class="m-b-20 text-white counter pb-1" id="countExercise"></h1>
						</div>
					</div>
				</div>






            </div>
			<!-- END container-fluid -->

		</div>
		<!-- END content -->

    </div>
	<!-- END content-page -->



<?php
    
    require"layout_footer.php";

?>    


<script type="text/javascript" src="../js/dashboard.js"></script>
