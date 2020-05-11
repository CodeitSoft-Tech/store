
<?php
	include("includes/db.php");
?>
<div id="footer">
 <div class="container">
 	<div class="row">
 		<div class="col-sm-6 col-md-3">
 			<h4>Pages</h4>
 			<ul>
 				<li><a href="cart.php">Shopping Cart</a></li>
				<li><a href="contact.php">Shop</a></li>
				<li><a href="shop.php">Contact Us</a></li>
				<li><a href="customer/my_account.php">My Account</a></li>
 			</ul>
 			<hr>
 			<h4>User Section</h4>
 			<ul>
 				<li><a href="checkout.php">Login</a></li>
 				<li><a href="customer_register.php">Register</a></li>
 			</ul>
 			<hr class="hidden-md hidden-lg hidden-sm">
 		</div>
 		<div class="col-sm-6 col-md-3">
 		  <h4>Top Products Categories</h4>
 			<ul>
 				<?php
 					$get_p_cats = "SELECT * FROM product_category";
 					$run_p_cats = mysqli_query($db, $get_p_cats);

 					while($row_p_cat = mysqli_fetch_array($run_p_cats))
 					{
 						$p_cat_id    = $row_p_cat['p_cat_id'];
 						$p_cat_title = $row_p_cat['p_cat_title'];

 						echo "
 							 <li>
 							 <a href='shop.php?p_cat=$p_cat_id'>$p_cat_title</a>
 							 </li>
 						    ";
 					}

 				?>
 			</ul>
 		   <hr class="hidden-md hidden-lg">
 		</div>
 		<div class="col-sm-6 col-md-3">
 		<h4>Find Us:</h4>
 		<p>
 			<strong>CodeitSoft Technology</strong>	
 			<br/> Ghana
 			<br/> W/R, Tarkwa
 			<br/>0546107823/0540224589
 			<br/>codeitsofttechnology20@gmail.com
 			<br/>CodiStore
 	   </p>
 	   <a href="contact.php">Check our Contact Page</a>
 	    <hr class="hidden-md hidden-lg">
 	</div>
 	<div class="col-sm-6 col-md-3">
 		<h4>Get the latest News</h4>
 		<p class="text-muted">
 			Subsrcibe to be the first to hear from us.
 		<p>
 	  <form action="" method="post">
 		<div class="input-group">
 			<input type="email" name="user_email" class="form-control" placeholder="Email">
 			<span class="input-group-btn">
 				<input type="submit" value="subscribe" name="subscribe" class="btn btn-primary">
 			</span>
 		</div>
 	</form>
 	<hr>
 	<h4>Keep In Touch</h4>
 	<p class="social">
 		<a href="#" class="fa fa-facebook facebook"></a>
 		<a href="#" class="fa fa-twitter twitter"></a>
 		<a href="#" class="fa fa-instagram instagram"></a>
 		<a href="#" class="fa fa-google-plus google"></a>
 		<a href="#" class="fa fa-envelope email"></a>
 	</p>
 </div>
</div>
</div>
</div>


<div id="copyright">
	<div class="container">
		<div class="col-md-6">
			<p class="pull-left">&copy; 2020 CodiStore | All rights reserved</p>
		</div>
		<div class="col-md-6">
			<p class="pull-right">Designed By: <a href="#">CodeitSoft Technology</a> </p>
		</div>
	</div>
</div>
