<h3 align="left">Change Password</h3>
<br><br>


<form id="form1" action="customer_edit_password.php" method="post">

	<!-- <div class="form-group">
	    <label>Old Password</label>
		<input type="password" name="new_pass" placeholder="New Password" class="form-control">
	</div> -->
	
	<div class="form-group">
	    <label>New Password</label>
		<input type="password" name="new_pass" placeholder="New Password" class="form-control">
	</div>

	<div class="form-group">
		<label>Confirm New Password </label>
		<input type="password" name="con_pass" placeholder="Retype New Password" class="form-control">
	</div>

	<div class="form-group">
		<button type="submit" name="update_pass" class="btn btn-primary form-control">UPDATE PASSWORD</button>
	</div>

</form>

