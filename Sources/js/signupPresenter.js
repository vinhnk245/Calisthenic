$(document).ready(function(){

	$('#btnSignUp').click(function(){

		var emailSignup = $('#txtEmailSignUp').val();
		var userNameSignup = $('#txtUserNameSignUp').val();
		var accountSignup = $('#txtAccountSignUp').val();
		var passwordSignup = $('#txtPasswordSignUp').val();
		var confirmPasswordSignup = $('#txtConfirmPasswordSignUp').val();

		var emailValid = new RegExp('^[A-z][A-z0-9_.]{5,32}[^.]@[a-z]{2,}(.[a-z]{2,5}){1,2}$');
		var passValid = new RegExp('^(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z])[0-9a-zA-Z]{8,}$');

		if(emailSignup.length == 0 || userNameSignup.length == 0 || accountSignup.length == 0 || passwordSignup.length == 0 || confirmPasswordSignup.length == 0){
			$('#signupAlert').html('<div class="alert alert-danger" style="color: red; font-weight: bolder;">Please fill in the blank. </div>');
            $(".bg-text").height(480);
		} else 
			if( !emailValid.test(emailSignup) ) { 
				$('#txtEmailSignUp').focus();
 				$('#signupAlert').html('<div class="alert alert-danger" style="color: red; font-weight: bolder;">The email invalid.</div>');
	            $(".bg-text").height(480);
			} else 
				if (userNameSignup.trim().length < 6 || userNameSignup.trim().length > 20) {
					$('#txtUserNameSignUp').focus();
					$('#signupAlert').html('<div class="alert alert-danger" style="color: red; font-weight: bolder;">Username must be between 6 and 20 characters.</div>');
	            	$(".bg-text").height(500);
	            } else
	            	if (accountSignup.trim().length < 6 || accountSignup.trim().length > 20) {
	            		$('#txtAccountSignUp').focus();
						$('#signupAlert').html('<div class="alert alert-danger" style="color: red; font-weight: bolder;">Account must be between 6 and 20 characters.</div>');
		            	$(".bg-text").height(500);
		            } else
					if(passwordSignup != confirmPasswordSignup){
						$('#txtPasswordSignUp').focus().val('');
						$('#txtConfirmPasswordSignUp').val('');
						$('#signupAlert').html('<div class="alert alert-danger" style="color: red; font-weight: bolder;">The passwords you entered do not match.</div>');
			            $(".bg-text").height(500);
					}else	
						if( !passValid.test(passwordSignup) ) {
							$('#txtPasswordSignUp').focus().val('');
							$('#txtConfirmPasswordSignUp').val('');
			 				$('#signupAlert').html('<div class="alert alert-danger" style="color: red; font-weight: bolder;">The password must have at least 8 characters, at least 1 digit(s), at least 1 lower case letter(s), at least 1 upper case letter(s)</div>');
				            $(".bg-text").height(550);
						}
						else{
							$.ajax({

								url: "../controller/user/signup.php",
								data: {
									email: emailSignup,
									userName: userNameSignup, 				
									account: accountSignup, 
									password: passwordSignup
								},
								type: "POST",
								success: function(res){
									
									if (res=='existAccount'){
										$('#signupAlert').html('<div class="alert alert-danger" style="color: red; font-weight: bolder; font-size: 15px;">Account already exists!</div>');
							            $(".bg-text").height(480);
									} 
									else if(res=='success'){
										swal({
				                            title: "Thank you!",
				                            text: "Sign up success",
				                            icon: "success"
				                        })
				                        .then((value) => {
				                           location.reload();
				                        });

										
									}
								},
								error: function(xhr, status, errorThrown) {
					                console.log(errorThrown + status + xhr);
					            }
						
							});
					}

	})

})