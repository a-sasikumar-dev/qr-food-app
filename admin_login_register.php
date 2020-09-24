<?php include "admin_login_header.html" ?>
	<section class="qrfood-login-reg">
		<div class="loginreg-form-section">
			<div class="admin-logo-cont">
				<img src="assets/images/admin-logo.png" alt="Admin Logo">
				<p class="logo-title">qr food</p>
			</div>
			<ul class="nav nav-tabs admin-login-reg_tabs" id="AdminLoginRegTab" role="tablist">
                <li class="nav-item">
                  	<a class="nav-link active" id="admin_login-tab" data-toggle="tab" href="#admin_login" role="tab" aria-controls="admin_login" aria-selected="true">Login</a>
                </li>
                <li class="nav-item">
                  	<a class="nav-link" id="admin_register-tab" data-toggle="tab" href="#admin_register" role="tab" aria-controls="admin_register" aria-selected="false">Register</a>
                </li>
              </ul>
              <div class="tab-content admin-login-reg_content" id="AdminLoginRegContent">
                <div class="tab-pane fade active show" id="admin_login" role="tabpanel" aria-labelledby="admin_login-tab">
                	<div class="admin-form-cont">
                		<form>
                			<div class="form-group">
                				<div class="label-grp">
		                			<label><i class="fas fa-envelope-open"></i> <span class="form-labeltxt">Email</span></label>
		                			<input type="mail" class="form-control" required>
		                		</div>
	                		</div>
	                		<div class="form-group">
	                			<div class="label-grp">
		                			<label><i class="fas fa-lock"></i> <span class="form-labeltxt">Password</span></label>
		                			<input type="password" class="form-control" required>
		                		</div>
	                		</div>
	                		<div class="admin-submit-btn">
	                			<button type="submit">Login</button>
	                		</div>
                		</form>
                		<p class="forget-pw"><a href="#">Forgot Password?</a></p>
                		<h5 class="already-dont-account">Dont have an account? <a href="#">Create one</a></h5>
                	</div>
                </div>
                <div class="tab-pane fade" id="admin_register" role="tabpanel" aria-labelledby="admin_register-tab">
                	<div class="admin-form-cont">
                		<form>
                			<div class="form-group">
                				<div class="label-grp">
		                			<label><i class="fas fa-user"></i> <span class="form-labeltxt">Full Name</span></label>
		                			<input type="text" class="form-control" required>
		                		</div>
	                		</div>
	                		<div class="form-group">
                				<div class="label-grp">
		                			<label><i class="fas fa-envelope-open"></i> <span class="form-labeltxt">Email</span></label>
		                			<input type="mail" class="form-control" required>
		                		</div>
	                		</div>
	                		<div class="form-group">
	                			<div class="label-grp country-code">
                					<label><span class="form-labeltxt">Mobile</span></label>
                					<input id="adminuser-countrycode" type="tel" class="form-control" required>
                				</div>
	                		</div>
	                		<div class="form-group">
	                			<div class="label-grp">
		                			<label><i class="fas fa-lock"></i> <span class="form-labeltxt">Password</span></label>
		                			<input type="password" class="form-control" required>
		                		</div>
	                		</div>
	                		<div class="form-group">
	                			<div class="label-grp">
		                			<label><i class="fas fa-lock"></i> <span class="form-labeltxt">Confirm Password</span></label>
		                			<input type="password" class="form-control" required>
		                		</div>
	                		</div>
	                		<div class="admin-submit-btn">
	                			<button type="submit">Submit</button>
	                		</div>
                		</form>
                		<h5 class="already-dont-account">Already have an account? <a href="#">Login here</a></h5>
                	</div>
                </div>
              </div>
		</div>
	</section>
<?php include "admin_login_footer.html" ?>