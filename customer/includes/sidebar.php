<div class="panel panel-default sidebar-menu">
	<div class="panel-heading">
		<center>
			<img class="img-responsive" src="customer_images/user.jpg" alt="">
		</center>
		<br/>
		<h3 align="center" class="panel-title">
			
			Username			

		</h3>
	</div>
	<div class="panel-body">
	<ul class="nav-pills nav-stacked nav">
	<li class="<?php if(isset($_GET['my_orders'])){echo"active";} ?>">
			<a href="my_account.php?my_orders">
				
				<i class="fa fa-list"></i> My Orders 
			</a>
		</li>

	

		

		<li class="<?php if(isset($_GET['change_pass'])){echo"active";} ?>">
			<a href="my_account.php?change_pass">
				
				<i class="fa fa-user"></i> Change Password
			</a>
		</li>

		<li class="<?php if(isset($_GET['delete_account'])){echo"active";} ?>">
			<a href="my_account.php?delete_account">
				
				<i class="fa fa-trash-o"></i> Delete Account 
			</a>
		</li>
		<hr>
		<li>
			<a href="../logout.php">
				<i class="fa fa-sign-out"></i> Logout
			</a>
		</li>			
		</ul>
	</div>
</div>