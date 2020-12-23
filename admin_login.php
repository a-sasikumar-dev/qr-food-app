<?php include "admin_login-register_header.html" ?>
	<section class="login-register-bg">
		<div class="container">
			<div class="login-reg-form-row">
				<div class="login-reg-left-col">
					<div class="login-reg-informations">
						<h2>Welcome</h2>
						<img src="assets/images/persona-profile-vector.png">
					</div>
				</div>
				<div class="login-reg-right-col">
					<div class="admin-panel-form">
						<div class="log-reg-form-header">
							<h2>Login</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
						</div>
                        <form>
                            <div class="row">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                	<div class="form-group">
	                            		<input type="text" class="form-control" placeholder=" ">
	                                	<label class="adminpanel-formlabel">User name</label>        
	                                </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="form-group">
	                                    <input type="password" class="form-control" placeholder=" ">
	                                	<label class="adminpanel-formlabel">Password</label>
	                               	</div>
                                </div>
                            </div>
                            <div class="buttons-adminform text-center">
                                <button class="common-button-admin" type="submit">Login</button>
                            </div>
                        </form>
                        <div class="login-reg-form-footer">
                        	<p>Don't have an account? <a href="admin_register.php">Register</a> here</p>
                        </div>
                    </div>
				</div>
			</div>
		</div>
	</section>
<?php include "admin_login-register_footer.html" ?>