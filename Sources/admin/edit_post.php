<?php
    if(isset($_GET['id'])){
    	$id = $_GET['id'];
    }

    require"layout_header.php";

?>


    <div class="content-page">
	
		<!-- Start content -->
        <div class="content">
            
			<div class="container-fluid">

				

				<div class="row">
	                <div class="col-md-12 text-right" data-id='<?php echo $id?>' id='getIdPost'>
	                    <div class="breadcrumb-holder">
	                    	<h1 class="main-title float-left pt-0 pb-3">
	                    		<i class="fa fa-fw fa-newspaper-o"></i> Edit post!
	                    	</h1>
	                        <div class="clearfix"></div>
	                    </div>
	                </div>
	            </div>

	            <div class="col-md-8 offset-md-2 col-sm-8 offset-sm-2 col-12 bg-white" id="startContent"> <!-- START col-md-8 panel form create -->

		            <div class="row pb-4 pt-4">
		            	<div class="col-md-12 col-sm-12 col-12 txtBeauty">
		            		<label class="text-primary">Title</label>
		                    <input type="text" class="form-control" id="title" placeholder="Title...">
		            	</div>
		            </div>

		            <div class="row pb-4">
		            	<div class="col-md-12 col-sm-12 col-12 txtBeauty">
		            		<label class="text-primary">Link youtube</label>
		                    <input type="text" class="form-control" id="linkYT" placeholder="https://www.youtube.com/embed/idVideo">
		            	</div>
		            </div>

		            <div class="row pb-4">
		            	<div class="col-md-12 col-sm-12 col-12 txtBeauty">
		            		<label class="text-primary">Short content</label>
		                    <input type="text" class="form-control" id="shortContent" placeholder="Short content...">
		            	</div>
		            </div>

		            <div class="row pb-4">
		            	<div class="col-md-12 col-sm-12 col-12 txtBeauty">
		            		<label class="text-primary">Content post</label>
		                    <textarea id="contentPost">
							</textarea>
		            	</div>
		            </div>

		            <div class="row pb-4">
		            	<div class="col-md-12 col-sm-12 col-12">
		            		<label class="text-primary">Select a category</label>
		                    <select class="form-control text-center" id="#select">
		                        <option value="bicep">Bicep</option>
		                        <option value="tricep">Tricep</option>
		                        <option value="forearms">Forearms</option>
		                        <option value="shoulder">Shoulder</option>
		                        <option value="abs">Abs</option>
		                        <option value="cardio">Cardio</option>
		                        <option value="chest">Chest</option>
		                        <option value="leg">Leg</option>
		                        <option value="back">Back</option>
		                        <option value="nutrition">Nutrition</option>
		                    </select>
		            	</div>
		            </div>

		            <div class="row pb-4">
						<div class="col-md-12 col-sm-12 col-12" id="divImage">
							<span class="text-primary">
								Image for post...
								<input type="file" class="mb-2" id="imgInp"/>
							</span>
	    					<img id="imgPost" src="#" class="col-md-12 hide" alt="your image" />
		            	</div>
		            </div>

		            <div class="col-md-12 border-form"></div>

		            <div class="row pb-2 pt-2 text-right">
		            	<div class="col-md-12 col-sm-12 col-12 txtBeauty">
		            		<button class="btn btn-secondary" id="btnCancelPost">Cancel</button>
		            		<button class="btn btnColorPost px-4 text-white" id="btnSave">Save</button>
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

<script type="text/javascript" src="../js/editPostPresenter.js"></script>