<?php
    
    require"layout_header.php";

?>


    <div class="content-page">
	
		<!-- Start content -->
        <div class="content">
            
			<div class="container-fluid">

				

				<div class="row">
	                <div class="col-md-12 text-right">
	                    <div class="breadcrumb-holder">
	                    	<h1 class="main-title float-left pt-0 pb-3">
	                    		<i class="fa fa-fw fa-beer"></i> Create new exercise!
	                    	</h1>
	                        <div class="clearfix"></div>
	                    </div>
	                </div>
	            </div>

	            <div class="col-md-8 offset-md-2 col-sm-8 offset-sm-2 col-12 bg-white"> <!-- START col-md-8 panel form create -->

		            <div class="row pb-4 pt-4">
		            	<div class="col-md-12 col-sm-12 col-12 txtBeauty">
		            		<label class="text-primary">Name</label>
		                    <input type="text" class="form-control" id="name" placeholder="Name...">
		            	</div>
		            </div>

		            <div class="row pb-4">
		            	<div class="col-md-12 col-sm-12 col-12 txtBeauty">
		            		<label class="text-primary">Link youtube</label>
		                    <input type="text" class="form-control" id="linkYT" placeholder="https://www.youtube.com/embed/idVideo">
		            	</div>
		            </div>

		            <div class="row pb-2 pt-2 text-right">
		            	<div class="col-md-12 col-sm-12 col-12 txtBeauty">
		            		<button class="btn btn-secondary" id="btnCancelExercise">Cancel</button>
		            		<button class="btn btn-primary" id="btnSave">Save</button>
		            	</div>
		            </div>


	        	</div> <!-- END col-md-8 panel form create -->
			
            </div>
			<!-- END container-fluid -->

		</div>
		<!-- END content -->

    </div>
	<!-- END content-page -->
    
<?php
    
    require"layout_footer.php";

?>


<script type="text/javascript" src="../js/createExercise.js"></script>