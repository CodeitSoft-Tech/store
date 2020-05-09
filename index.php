

<?php 
	
	$active = 'Home';
    include("includes/header.php");

 ?>


<!--  Slider -->
 <div class="container" id="slider">
  <div class="col-md-12">
  	<div class="carousel slide" id="myCarousel" data-ride="carousel">
  		<ol class="carousel-indicators">
  			<li class="active" data-target="#myCarousel" data-slide-to="0"></li>
  			<li data-target="#myCarousel" data-slide-to="1"></li>
  			<li data-target="#myCarousel" data-slide-to="2"></li>
  			<li data-target="#myCarousel" data-slide-to="3"></li>
  			<li data-target="#myCarousel" data-slide-to="4"></li>
  		</ol>
  		<div class="carousel-inner">
  		   <?php
  		   $get_slides ="SELECT * FROM slider LIMIT 0,1";
  		   $run_slider =mysqli_query($db, $get_slides);

  		   while($row_slide = mysqli_fetch_array($run_slider))
  		   {
  		   		$slide_name = $row_slide['slide_name'];
  		   		$slide_image = $row_slide['slide_image'];

  		   		echo "
  		   				<div class='item active'>
  		   				<img src='admin_area/slide_images/$slide_image'>
  		   				</div>
  		   		        ";
  		   }

  		   $get_slides ="SELECT * FROM slider LIMIT 1,4";
  		   $run_slide =mysqli_query($db, $get_slides);

  		   while($row_slide = mysqli_fetch_array($run_slide))
  		   {
  		   		$slide_name = $row_slide['slide_name'];
  		   		$slide_image = $row_slide['slide_image'];

  		   		echo "
  		   			<div class='item'>
  		   			<img src='admin_area/slide_images/$slide_image'>
  		   			</div>
  		   		        ";
  		   }



  		    ?>
  		</div>
  		<a href="#myCarousel" class="left carousel-control" data-slide="prev">
  		 <span class="glyphicon glyphicon-chevron-left"></span>
  		 <span class="sr-only">Previous</span>
  		</a> 
  		<a href="#myCarousel" class="right carousel-control" data-slide="next">
  		 <span class="glyphicon glyphicon-chevron-right"></span>
  		 <span class="sr-only">Next</span>
  		</a>
  		</div>
  	</div>
  </div>
 <!-- Slider End -->


 <!-- Shop Description -->
 <div id="advantages">
 	<div class="container">
 		<div class="same-height-row">
 			<div class="col-sm-4">
 				<div class="box same-height">
 					<div class="icon">
 						<i class="fa fa-heart"></i>
 					</div>
 					<h3><a href="#">Best Offers</a></h3>
 					<p>Providing our customers with best services is our top priority. Customers never regret shoppin. with us.</p>
 				</div>
 			</div>
 			<div class="col-sm-4">
 				<div class="box same-height">
 					<div class="icon">
 						<i class="fa fa-tag"></i>
 					</div>
 					<h3><a href="#">Best Prices</a></h3>
 					<p>We have got you covered with our amazing product prices. Get every product at an affordable price</p>
 				</div>
 			</div>
 			<div class="col-sm-4">
 				<div class="box same-height">
 					<div class="icon">
 						<i class="fa fa-thumbs-up"></i>
 					</div>
 					<h3><a href="#"> Original Products</a></h3>
 					<p>We simply provide high quality and original products. We are always satisfying our customers</p>
 				</div>
 			</div>
		</div>
    </div>
 </div>

<!-- Product Category -->

 <div id="hot">
 	<div class="box">
 		<div class="container">
 			<div class="col-md-12">
 				<h2>
 					Our Featured CategorieSs
 				</h2>
 			</div>
 		</div>
 	</div>
 </div>
 <div id="content" class="container">
 	<div class="row">
 		<div class="col-sm-4 col-sm-6 single">
 			<a href="#">
 		    <p id="cat1">Anti-Hypertensives</p></a>
 		</div>
 		<div class="col-sm-4 col-sm-6 single">
 			<a href="#">
 		    <p id="cat2">Anti-Malaria</p></a>
 		</div>
 		<div class="col-sm-4 col-sm-6 single">
 			<a href="#">
 		    <p id="cat3">Dental Health</p></a>
 		</div>
 		<div class="col-sm-4 col-sm-6 single">
 			<a href="#">
 		    <p id="cat4">Neuro Vitamins</p></a>
 		</div>
 		<div class="col-sm-4 col-sm-6 single">
 			<a href="#">
 		    <p id="cat5">Reproductives</p></a>
 		</div>
 		<div class="col-sm-4 col-sm-6 single">
 			<a href="#">
 		    <p id="cat6">Herbal Medicines</p></a>
 		</div>
 		<div class="col-sm-4 col-sm-6 single">
 			<a href="#">
 		    <p id="cat7">Anti-biotics</p></a>
 		</div>
 		<div class="col-sm-4 col-sm-6 single">
 			<a href="#">
 		    <p id="cat8">Anti-Diabetics</p></a>
 		</div>
 	</div>
 </div>

 <!-- Product StoreFront -->
 <div id="hot">
 	<div class="box">
 		<div class="container">
 			<div class="col-md-12">
 				<h2>
 					Our Latest Products
 				</h2>
 			</div>
 		</div>
 	</div>
 </div>
 <div id="content" class="container">
 	<div class="row">
 		<?php getProduct(); ?>	
 	</div>
 </div>







<?php include_once'includes/footer.php'; ?>



<script src="js/jquery-2.1.3.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>