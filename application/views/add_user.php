<?php include_once('header.php'); ?>

<section id="main-content">
	<section class="wrapper">
		<div class="row">
			<div class="col-lg-8 col-lg-offset-2">
				<section class="panel">
					<header class="panel-heading">Add User</header>
                    <div class="panel-body">
                    	<form role="form">
                    		<div class="form-group">
                            	<label for="full_name">Full Name</label>
                                <input type="text" class="form-control" name="full_name" id="full_name" placeholder="Enter Full Name">
                            </div>
						    <div class="form-group">
                            	<label for="user_name">User Name</label>
                                <input type="text" class="form-control" name="user_name" id="user_name" placeholder="Enter User Name">
                            </div>
                            <div class="form-group">
                            	<label for="password">Password</label>
                                <input type="password" class="form-control" name="password" id="password" placeholder="Enter Password">
                            </div>
                            <div class="form-group">
                            	<label for="password">ReEnter Password</label>
                                <input type="password" class="form-control" name="reenter_password" id="reenter_password" placeholder="ReEnter Password">
                            </div>
                            <div class="form-group">
                            	<label for="sector">Sector</label>
                                <select class="form-control m-bot15" name="sector" id="sector">
									<option></option>
									<option>Administration</option>
									<option>Management</option>
									<option>Governor</option>
									<option>Reception</option>
							    </select>
                            </div>
                            <div class="form-group">
                            	<label for="site_login">Site Login</label>
                                <select class="form-control m-bot15" name="site_login" id="site_login">
									<option></option>
									<option>Enabled</option>
									<option>Disabled</option>
							    </select>
                            </div>
                            <button type="submit" class="btn btn-info">Submit</button>
                        </form>
                    </div>
                </section>
            </div>
        </div>
    </section>
</section>

<?php include_once('footer.php'); ?>
