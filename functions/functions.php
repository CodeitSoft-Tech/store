 <?php
	

	include("includes/db.php");

	//Get User Ip address

	function getRealIpUser()
	{
		switch(true)
		{
			case(!empty($_SERVER['HTTP_X_REAL_IP'])) : return $SERVER['HTTP_X_REAL_IP'];
			case(!empty($_SERVER['HTTP_CLIENT_IP'])) : return $SERVER['HTTP_CLIENT_IP'];
			case(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) : return $SERVER['HTTP_X_FORWARDED_FOR'];

			default : return $_SERVER['REMOTE_ADDR'];
			  
		}
	}


	// Add to cart 

	function add_cart()
	{
		global $db;

		if(isset($_GET['add_cart']))
		{
			$ip_add = getRealIpUser();
			$p_id = $_GET['add_cart'];
			$qty = $_POST['product_qty'];
			$size = $_POST['product_size'];

			$check_product ="SELECT * FROM cart WHERE ip_add ='$ip_add' AND p_id = '$p_id'";
			$run_chk = mysqli_query($db, $check_product);

			if(mysqli_num_rows($run_chk)>0)
			{
				echo "<script>alert('Product already exist')</script>";
				echo "<script>window.open('details.php?pro_id=$p_id', '_self')</script>";
			}

			else {
				$query = "INSERT INTO cart(p_id, ip_add, qty, size)
				          VALUES('$p_id','$ip_add','$qty','$size')";
				$run_query = mysqli_query($db, $query);

				if($run_query)
				{
					echo "<script>window.open('details.php?pro_id=$p_id', '_self')</script>";
				}
			}


		}

	}




	function getProduct()
	{
		global $db;

		$get_products = "SELECT * FROM products ORDER BY 1 DESC LIMIT 0,8";
		$run_product = mysqli_query($db, $get_products);

		while($row_product = mysqli_fetch_array($run_product))
		{
			$pro_id = $row_product['product_id'];
			$pro_title = $row_product['product_title'];
			$pro_price = $row_product['product_price'];
			$pro_img1 = $row_product['product_img1'];

			echo "
	<div class='col-md-4 col-sm-6 single'>
	  <div class='product'>
		<a href='details.php?pro_id=$pro_id'>
				<img class='img-responsive' src='admin_area/product_images/$pro_img1'>
			</a>
				<div class='text'>
				<h3>
				<a href='details.php?pro_id=$pro_id'>
				$pro_title 
			    </a>
				</h3>
				<p class='price'>
				 	₵$pro_price.00
				</p> 
				<p class='button'>
				  <a class='btn btn-default' href='details.php?pro_id=$pro_id'>
				  	View Details
				 </a>
				  <a class='btn btn-primary' href='details.php?pro_id=$pro_id'>
				  	<i class='fa fa-shopping-cart'></i> Add to Cart
				 </a>
				</p>
				</div>
				 </div>
				 </div>
				 ";

		}
	}


 // Product Category
	
function getPCats()
{

				global $db;

				$get_p_cat = "SELECT * FROM product_category";
				
				$run_p_cat = mysqli_query($db, $get_p_cat);

				while($row = mysqli_fetch_array($run_p_cat))
				{
					$p_cat_id = $row['p_cat_id'];
					$p_cat_title = $row['p_cat_title'];

					echo "
						 <li>
 							 <a href='shop.php?p_cat=$p_cat_id'>$p_cat_title</a>
 						</li>
					     
					     ";
			  }     
}


function getpcatpro()
{
	global $db;

	if(isset($_GET['p_cat']))
	{
		$p_cat_id = $_GET['p_cat'];
		$get_p_cat = "SELECT * FROM product_category WHERE p_cat_id = '$p_cat_id'";
		$run_p_cat = mysqli_query($db, $get_p_cat);

		$row_p_cat = mysqli_fetch_array($run_p_cat);

		$p_cat_title = $row_p_cat['p_cat_title'];
		$p_cat_desc = $row_p_cat['p_cat_desc'];

		$get_product = "SELECT * FROM products where p_cat_id = '$p_cat_id'";
		$run_product = mysqli_query($db, $get_product);
		$count = mysqli_num_rows($run_product);

		if($count == 0)
		{
			echo "
				<div class='box'>
					<h3><i class='fa fa-dnager'></i> No product found  </h3>
				</div>
			";
		}

		else
		{
			echo "
				<div class='box'>
					<h3>$p_cat_title</h3>
					<p>$p_cat_desc</p>
				</div>
			";
		}

		while($row_product = mysqli_fetch_array($run_product))
		{
			$pro_id = $row_product['product_id'];
			$pro_title = $row_product['product_title'];
			$pro_price = $row_product['product_price'];
			$pro_img1 = $row_product['product_img1'];

				echo "
	<div class='col-md-4 col-sm-6 center-responsive'>
	  <div class='product'>
		<a href='details.php?pro_id=$pro_id'>
				<img class='img-responsive' src='admin_area/product_images/$pro_img1'>
			</a>
				<div class='text'>
				<h3>
				<a href='details.php?pro_id=$pro_id'>
				$pro_title 
			    </a>
				</h3>
				<p class='price'>
				 	₵$pro_price.00
				</p> 
				<p class='button'>
				  <a class='btn btn-default' href='details.php?pro_id=$pro_id'>
				  	View Details
				 </a>
				  <a class='btn btn-primary' href='details.php?pro_id=$pro_id'>
				  	<i class='fa fa-shopping-cart'></i> Add to Cart
				 </a>
				</p>
				</div>
				 </div>
				 </div>
				 ";
		}




	}
}

?>