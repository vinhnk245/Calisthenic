<?php 
	require"menu_header.php"
 ?>

<div class="container">
	<div class="row mt-6"></div>
  <div class="hide" id="userID" data-id="<?php echo $user->id ?>"></div>
	<p class="text-center text-light animated fadeInDown profile-thanks">MVTech thank <?php echo $user->username ?>!</p>
	<p class="text-info mt-5 pt-5">Account management</p>
	<table class="table table-dark table-hover table-radius">
    	<tbody>
      		<tr>  <!-- start row Name-->
    			    <td class="firstRowTable">Name</td>
          		<td class="firstRowTable" id="nameProfile" data-id="<?php echo $user->username ?>"> 
          			<?php echo $user->username ?> 
          		</td>
          		<td class="firstRowTable hide" id="nameProfile2" data-id="<?php echo $user->username ?>"> 
          			<input type="text" value="<?php echo $user->username ?>" class="form-control text-center" id="txtNameProfile"> 
          		</td>
          		<td class="firstRowTable text-right edit-account" id="editNameProfile">
          			<i class="fa fa-edit" title="Edit"></i>
          		</td>
          		<td class="firstRowTable text-right edit-account hide" id="editNameProfile2">
          			<i class="btn btn-success pt-2 pb-2 fa fa-check text-light" title="Save" id="btnSaveChangeNameProfile"></i>
          			&nbsp;<i class="btn btn-danger pt-2 pb-2 fa fa-close text-light" title="Cancel" id="btnCancelEdit"></i>
          		</td>
      		</tr>  <!-- end row Name-->
      		<tr>  <!-- start row email-->
        		<td>Email</td>
        		<td id="emailProfile"> <?php echo $user->email ?> </td>
        		<td class="text-right edit-account">
              <i class="text-danger fa fa-exclamation-circle" data-toggle="tooltip" data-placement="left" title="You can't change."></i>
            </td>
      		</tr>      <!-- end row Email-->
      		<tr>  <!-- start row Account-->
        		<td>Account</td>  
        		<td id="accountProfile"> <?php echo $user->account ?> </td>
        		<td class="text-right edit-account">
              <i class="text-danger fa fa-exclamation-circle" data-toggle="tooltip" data-placement="left" title="You can't change."></i>
            </td>
      		</tr>    <!-- end row Account-->
      		<tr>  <!-- start row password-->
        		<td>Password</td>

		<!-- cột thứ 2. ẩn hiện textbox đổi mật khẩu. lúc show lúc hide. chỉ hiện 1 <td>  -->
        		<td id="passwordProfile">
        			<i class="fa fa-warning text-warning"></i> For security reasons, we can not show your password.
        		</td>
        		<td id="passwordProfile2" class="hide">
        			<input type="password" placeholder="Old password" class="form-control text-center" id="txtOldPassword">
        		</td>
        		<td id="passwordProfile3" class="hide">
        			<div class="input-group">
                        <input type="password" class="form-control text-center mr-1" placeholder="New password" id="txtNewPass">
                        <input type="password" class="form-control text-center" placeholder="Confirm new password" id="txtConfirmNewPass">
                    </div>
                </td>
        <!---------------------->

        	<!-- cột thứ 3. ẩn hiện button Save or Cancel reset Password. lúc show lúc hide. chỉ hiện 1 <td>  -->
        		<td class="text-right edit-account" id="editPasswordProfile">
        			<i class="fa fa-edit" title="Edit"></i>
        		</td>
        		<td class="text-right edit-account hide" id="editPasswordProfile2">
        			<i class="btn btn-info pt-2 pb-2 fa fa-arrow-right text-light" title="Continue" id="btnContinuePassword"></i>
        			&nbsp;<i class="btn btn-danger pt-2 pb-2 fa fa-close text-light" title="Cancel" id="btnCancelEditPass"></i>
        		</td>
        		<td class="text-right edit-account hide" id="editPasswordProfile3">
        			<i class="btn btn-success pt-2 pb-2 fa fa-check text-light" title="Save" id="btnSaveResetPassword"></i>
        			&nbsp;<i class="btn btn-danger pt-2 pb-2 fa fa-close text-light" title="Cancel" id="btnCancelEditPass"></i>
        		</td>
			<!-------------->

      		</tr>  <!-- end row password-->
    	</tbody>
  	</table>
  	<p class="text-info mt-5 pt-5 ">Training results</p>
  	<div class="row">
  		<div class="col-12 col-sm-12 col-md-4 offset-md-0">
  			<table class="table table-dark table-hover table-radius">
		    	<tbody class="text-center">
		      		<tr>
		    			<td class="firstRowTable">Level 1</td>
		      		</tr>
		      		<tr>
		        		<td>Day number: 12</td>
		      		</tr>
		      		<tr>
		        		<td id="trained1">Last day trained: 6</td>
		      		</tr>
		      		<tr>
		        		<td><a href="" id="level1" class="btn btn-primary">Continue training</a></td>
		      		</tr>
		    	</tbody>
  			</table>
  		</div>
  		<div class="col-12 col-sm-12 col-md-4 offset-md-0">
  			<table class="table table-dark table-hover table-radius">
		    	<tbody class="text-center">
		      		<tr>
		    			<td class="firstRowTable">Level 2</td>
		      		</tr>
		      		<tr>
		        		<td>Day number: 12</td>
		      		</tr>
		      		<tr>
		        		<td  id="trained2">Day trained: 6</td>
		      		</tr>
		      		<tr>
		        		<td><a href="" id="level2" class="btn btn-primary">Continue training</a></td>
		      		</tr>
		    	</tbody>
  			</table>
  		</div>
  		<div class="col-12 col-sm-12 col-md-4 offset-md-0">
  			<table class="table table-dark table-hover table-radius">
		    	<tbody class="text-center">
		      		<tr>
		    			<td class="firstRowTable">Level 3</td>
		      		</tr>
		      		<tr>
		        		<td>Day number: 12</td>
		      		</tr>
		      		<tr>
		        		<td id="trained3">Day trained: 6</td>
		      		</tr>
		      		<tr>
		        		<td><a href="" id="level3" class="btn btn-primary">Continue training</a></td>
		      		</tr>
		    	</tbody>
  			</table>
  		</div>
  	</div>
</div>

 <?php 
	require"footer.php"
 ?>

 <script type="text/javascript" src="../js/profilePresenter.js"></script>