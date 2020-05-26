<?php
    
    require"layout_header.php";

?>
<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container-fluid">

            <div class="row mb-5">
                <div class="col-md-12 text-right">
                    <div class="breadcrumb-holder">
                        <div class="row pb-3 pt-1">
                            <div class="col-md-10">
                                <input type="text" id="input-search" class="form-control" placeholder="search...">
                            </div>
                            <div class="col-md-2">
                                <a href="create_exercise.php" class="btn btn-primary"><i class="fa fa-fw fa-plus"></i>Create exercise</a>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
			
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-light table-bordered table-hover" id="table">
                        <thead class="text-center headPost">
                            <tr>
                                <th>No.</th>
                                <th>Name</th>
                                <th>Link Youtube</th>
                                <th class="width2btn"></th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            <tr>
                                <!-- <th></th>
                                <td></td>
                                <td></td>
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

<script type="text/javascript" src="../js/manageExercisePresenter.js"></script>