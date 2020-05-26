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
                        <!-- <ul class="breadcrumb float-right">
                            <li class="">
                                <a href="create_post.php" class="btn btnColorPost"><i class="fa fa-fw fa-plus"></i>Create post</a>
                            </li>
                        </ul> -->
                        <div class="row pb-3 pt-1">
                            <div class="col-md-6">
                                <input type="text" id="input-search" class="form-control" placeholder="search...">
                            </div>
                            <div class="col-md-4">
                                <select class="form-control">
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
                                    <option value="all" selected>--- Select a category ---</option>
                                </select>
                            </div>
                            <div class="col-md-2">
                                <a href="create_post.php" class="col-md-12 btn btnColorPost"><i class="fa fa-fw fa-plus"></i>Create post</a>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>

            <!-- <div class="row py-3">
                <div class="col-md-4">
                    <label for="">Filters</label>
                    <select class="form-control">
                    	<option value="all" selected="">--- Select a category ---</option>
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
                <div class="col-md-8">
                    <label for="">Search...</label>
                    <input type="text" id="input-search" class="form-control">
                </div>
            </div> -->
			
            <div class="row mt-5">
                <div class="col-md-12">
                    <table class="table table-light table-bordered table-hover" id="table">
                        <thead class="text-center headPost">
                            <tr>
                                <th>No.</th>
                                <th>Image</th>
                                <th>Post</th>
                                <th class="widthCate">Category</th>
                                <th class="width2btn"></th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            <tr>
                                <!-- <th class="widthSTT">1</th>
                                <td>
                                    <span>
                                        <img alt="image" class="img-fluid" style="max-width:150px; height:auto;" src="../image/post/bicep2.jpg" />
                                    </span>
                                </td>
                                <td>The .table-responsive class creates a responsive tabing</td>
                                <td class="widthCate">@forearms</td>
                                <td class="width2btn">
                                    <button class="btn btn-info" id="btnEditPost">
                                        <i class="fa fa-pencil"></i>
                                    </button>
                                    <button class="btn btn-danger" id="btnDeletePost">
                                        <i class="fa fa-trash-o"></i>
                                    </button>
                                </td> -->
                            </tr>
                        </tbody>
                    </table>
                </div>                    
            </div>

            <div class="row float-right">
                <div class="col-md-12" id="pag"></div>
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

<script type="text/javascript" src="../js/managePostPresenter.js"></script>