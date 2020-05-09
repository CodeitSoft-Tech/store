<?php
	include("includes/db.php");
	include("includes/subscribe.php");
	include("functions/functions.php");
?>

<?php

	// Breadcrumb in order of product and product and their categories

	  if(isset($_GET['pro_id']))
	{
		$product_id = $_GET['pro_id'];
		$get_product = "SELECT * FROM products WHERE product_id = '$product_id'";

		$run_product = mysqli_query($db, $get_product);

		$row_product = mysqli_fetch_array($run_product);

		$p_cat_id = $row_product['p_cat_id'];
		$pro_title = $row_product['product_title'];
		$pro_price =$row_product['product_price'];
		$pro_desc = $row_product['product_desc'];
		$pro_img1 = $row_product['product_img1'];
		$pro_img2 = $row_product['product_img2'];
		$pro_img3 = $row_product['product_img3']; 
		$get_p_cat = "SELECT * FROM product_category WHERE p_cat_id ='$p_cat_id'";
		$run_p_cat = mysqli_query($db, $get_p_cat);
		$row_p_cat = mysqli_fetch_array($run_p_cat);
		$p_cat_title = $row_p_cat['p_cat_title'];


	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> CodeitSoft Technology | Home </title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/fontawesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="style/style.css">
</head>
<style type="text/css">
#cat1 
{
	border: 2px solid #4fbfa8;
	border-radius: 50%;
	background: #4fbfa8;
	margin-top: 50px;
	margin-bottom: 30px;
	padding-top: 40px;
	padding-left: 40px;
	padding-right: 40px;
	padding-bottom: 40px;
	text-align: center;
	font-size: 15px;
	color: #fff; 
	text-transform: uppercase;
	font-weight: 700;
	box-shadow: 0px 2px 5px rgba(0, 0, 0, .3); 
}

.single a 
{
	text-decoration:none;
}

#cat1:hover
{
	transform: scale(1.1);
}

   #cat2
{
	border: 2px solid #ff7f02;
	border-radius: 50%;
	background: #ff7f02;
	text-decoration:none;
	margin-top: 50px;
	margin-bottom: 30px;
	padding-top: 40px;
	padding-left: 40px;
	padding-right: 40px;
	padding-bottom: 40px;
	text-align: center;
	font-size: 15px;
	color: #fff; 
	text-transform: uppercase;
	font-weight: 700;
	box-shadow: 0px 2px 5px rgba(0, 0, 0, .3); 
}

#cat2:hover
{
	transform: scale(1.1);
}


#cat3 
{
	border: 2px solid #ee2a7b;
	border-radius: 50%;
	background: #ee2a7b;
	text-decoration:none;
	margin-top: 50px;
	margin-bottom: 30px;
	padding-top: 40px;
	padding-left: 40px;
	padding-right: 40px;
	padding-bottom: 40px;
	text-align: center;
	font-size: 15px;
	color: #fff; 
	text-transform: uppercase;
	font-weight: 700;
	box-shadow: 0px 2px 5px rgba(0, 0, 0, .3); 

}

#cat3:hover
{
	transform: scale(1.1);
}

#cat4
{
	border: 2px solid #e46425;
	border-radius: 50%;
	background: #e46425;
	text-decoration:none;
	margin-top: 50px;
	margin-bottom: 30px;
	padding-top: 40px;
	padding-left: 40px;
	padding-right: 40px;
	padding-bottom: 40px;
	text-align: center;
	font-size: 15px;
	color: #fff; 
	text-transform: uppercase;
	font-weight: 700;
	box-shadow: 0px 2px 5px rgba(0, 0, 0, .3); 
}

#cat4:hover
{
	transform: scale(1.1);
}

#cat5 
{
	border: 2px solid #662d91;
	border-radius: 50%;
	background: #662d91;
	text-decoration:none;
	margin-top: 50px;
	margin-bottom: 30px;
	padding-top: 40px;
	padding-left: 40px;
	padding-right: 40px;
	padding-bottom: 40px;
	text-align: center;
	font-size: 15px;
	color: #fff; 
	text-transform: uppercase;
	font-weight: 700;
	box-shadow: 0px 2px 5px rgba(0, 0, 0, .3); 
}

#cat5:hover
{
	transform: scale(1.1);
}


#cat6 
{
	border: 2px solid #fcbc2b;
	border-radius: 50%;
	background: #fcbc2b;
	text-decoration:none;
	margin-top: 50px;
	margin-bottom: 30px;
	padding-top: 40px;
	padding-left: 40px;
	padding-right: 40px;
	padding-bottom: 40px;
	text-align: center;
	font-size: 15px;
	color: #fff; 
	text-transform: uppercase;
	font-weight: 700;
	box-shadow: 0px 2px 5px rgba(0, 0, 0, .3); 
}

#cat6:hover
{
	transform: scale(1.1);
}


#cat7 
{
	border: 2px solid #0067b4;
	border-radius: 50%;
	background: #0067b4;
	text-decoration:none;
	margin-top: 50px;
	margin-bottom: 30px;
	padding-top: 40px;
	padding-left: 40px;
	padding-right: 40px;
	padding-bottom: 40px;
	text-align: center;
	font-size: 15px;
	color: #fff; 
	text-transform: uppercase;
	font-weight: 700;
	box-shadow: 0px 2px 5px rgba(0, 0, 0, .3); 
}

#cat7:hover
{
	transform: scale(1.1);
}

#cat8
{
	border: 2px solid #fd643c;
	border-radius: 50%;
	background: #fd643c;
	text-decoration:none;
	margin-top: 50px;
	margin-bottom: 30px;
	padding-top: 40px;
	padding-left: 40px;
	padding-right: 40px;
	padding-bottom: 40px;
	text-align: center;
	font-size: 15px;
	color: #fff; 
	text-transform: uppercase;
	font-weight: 700;
	box-shadow: 0px 2px 5px rgba(0, 0, 0, .3); 
	text-decoration: none;
}

#cat8:hover
{
	transform: scale(1.1);
}

</style>
<body>
	<!-- Top Menu Finish -->
    <div id="top">
    	<div class="container">
    		<div class="col-md-6 offer">
    			<a href="#" class="btn btn-success btn-sm">Welcome</a>
    			<a href="#">4 Items in your cart | Total Price: GHC300.00</a>
    		</div>
    		<div class="col-md-6">
    		  <ul class="menu">
    			<li><a href="customer_register.php">Register</a></li>
    			<li><a href="customer/my_account.php">My Account</a></li>
    			<li><a href="cart.php">Go to Cart</a></li>
    			<li><a href="my_account.php">Login</a></li>
    		  </ul>
    		</div>
    	</div>
    </div>
     <!-- Top Menu Finish -->

     <!-- Main Navbar --> 
    <div id="navbar" class="navbar navbar-default">
    	<div class="container">
    		<div class="navbar-header">
    			<a href="index.php" class="navbar-brand home">
    				<!--
    				<img src="images/logo.jpg" alt="Logo" class="hidden-xs">
					mobile view
					src="images/logo.jpg" alt="Logo" class="visible-xs">
    				-->
    				<p>CodiStore</p>
    			</a>
    			<button class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
    				<span class="sr-only">Toggle Navigation</span>
    				<i class="fa fa-align-justify"></i>
    			</button>
    			<button class="navbar-toggle" data-toggle="collapse" data-target="#search">
    				<span class="sr-only">Toggle Search</span>
    				<i class="fa fa-search"></i>
    			</button>
    		</div>
    		<div class="navbar-collapse collapse" id="navigation">
    			<div class="padding-nav">
    				<ul class="nav navbar-nav left">
					<li class="<?php if($active == 'Home') echo"active"; ?>">
						<a href="index.php">Home</a>
					</li>    		
					 <li class="<?php if($active == 'Shop') echo"active"; ?>">
						<a href="shop.php">Shop</a>
					  </li>
					 <li class="<?php if($active == 'Account') echo"active"; ?>">
						<a href="customer/my_account.php">My Account</a>	
					  </li>	
						<li class="<?php if($active == 'Cart') echo"active"; ?>">
							<a href="cart.php">Order List</a>
						</li>
						<li class="<?php if($active == 'Contact') echo"active"; ?>">
							<a href="contact.php">Contact Us</a>
						</li>	
    				</ul>
    			</div>
    			<a href="cart.php" class="btn navbar-btn btn-primary right">
    				<i class="fa fa-shopping-cart"></i>
    				<span>4 Items in your Cart</span>
    			</a>
    			<!-- Search Bar -->
    			<div class="navbar-collapse collapse right">
    			<button class="btn btn-primary navbar-btn" type="button" data-toggle="collapse" data-target="#search">
    				<span class="sr-only">Toggle search</span>
    				<i class="fa fa-search"></i>
    			</button>
               </div>
             <div class="collapse clearfix" id="search">
             	<form method="get" action="results.php" class="navbar-form">
             	 <div class="input-group">

             	 <input type="text" name="user_query" class="form-control" placeholder="Search" required>

             	 	<span class="input-group-btn">

             	 	<button type="submit" name="search" value="Search" class="btn btn-primary">
             	 		<i class="fa fa-search"></i>
             	 	</button>
             	 	</span>
             		</div>	
             	</form>
             </div>
    	   </div>
    	</div>
    </div> 
 <!-- Main Navbar End -->
 		