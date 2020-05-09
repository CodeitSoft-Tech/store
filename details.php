<?php 

    $active = 'Shop';
   include("includes/header.php"); 

?>

 <!-- Main Shop -->
 <div id="content">
    <div class="container">
        <div class="col-md-12">
            <ul class="breadcrumb">
                <li>
                    <a href="index.php">Home</a>
                </li>
                <li>
                    Details
                </li>
                <li>
                <a href="shop.php?p_cat=<?php echo $p_cat_id; ?>"><?php echo $p_cat_title; ?></a>
                </li>
                <li><?php echo $pro_title; ?></li>
            </ul>
        </div>
        <div class="col-md-3">
            <?php include("includes/sidebar.php"); ?>
        </div>
        <div class="col-md-9">
            <div id="productMain" class="row">
                <div class="col-sm-6">
                    <div id="mainImage">
                        <div id="myCarousel" class="carousel slide">
                    <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                    <div class="item active">
                    <center><img class="img-responsive" src="admin_area/product_images/<?php echo $pro_img1; ?>" alt="product 1"></center>   
                    </div>
                    <div class="item">
                    <center><img class="img-responsive" src="admin_area/product_images/<?php echo $pro_img2; ?>" alt="Product 2"></center>   
                    </div>
                    <div class="item">
                    <center><img class="img-responsive" src="admin_area/product_images/<?php echo $pro_img3; ?>" alt="Product 3"></center>
                    </div>
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
    <div class="col-sm-6">
        <div class="box">
            <h1 class="text-center"><?php echo $pro_title; ?></h1>
            <form action="details.php?add_cart=<?php echo $pro_id; ?>" class="form-horizontal" method="post">
                <div class="form-group">
                    <label for="" class="col-md-5 control-label">Quantity</label>
                
                <div class="col-md-7">
                      <input type="number" class="form-control" name="product_qty" value="1" min="1"  max="100" step="1"/>
                </div>
            </div>
            <div class="form-group">
                  <label class="col-md-5 control-label">Product Size</label>
                  <div class="col-md-7">
                    <select name="product_size" class="form-control" required oninput="setCustomValidity('')" oninvalid ="setCustomValidity('Select product size')">
                    <option disabled selected>Select a size</option>
                    <option>10g</option>
                    <option>20g</option>
                    <option>30g</option> 
                    </select>
                  </div>
              </div>  

            <p class="price"><?php echo '₵'.$pro_price.'.00'; ?></p>
            <p class="text-center">
                <button class="btn btn-primary i fa fa-shopping-cart"> Add to Cart</button>
            </p>
        </form>
    </div>
        <div class="row" id="thumb">
            <div class="col-xs-4">
                <a href="#" class="thumb">
                    <img data-target="#myCarousel" data-slide-to="0" src="admin_area/product_images/<?php echo $pro_img1; ?>" alt="product1" class="img-responsive">
                </a>
            </div>
            <div class="col-xs-4">
                <a href="#" class="thumb">
                    <img data-target="#myCarousel" data-slide-to="1" src="admin_area/product_images/<?php echo $pro_img2; ?>" alt="product2" class="img-responsive">
                </a>
            </div>
            <div class="col-xs-4">
                <a href="#" class="thumb">
                    <img data-target="#myCarousel" data-slide-to="2" src="admin_area/product_images/<?php echo $pro_img3; ?>" alt="product3" class="img-responsive">
               </a>
            </div>
        </div>
    </div>
    </div>


    <div class="box" id="details">
        <h4>Product Details</h4>
        <p>
            <?php echo $pro_desc; ?>
        </p>
        <hr>
        <h4>Size of Drug</h4>
        <p> <!-- Prescriptions goes here --> </p>
        <hr>
        <h4>Prescriptions</h4>
        <p> <!-- Prescriptions goes here --> </p>
        <hr>
    </div>


    <!-- Related Product -->
    <div id="row same-height-row">
        <div class="same-height"  style="background: #fff; padding: 15px; font-size: 15px; font-weight: 700; ">Related Products</div><br><br>
        <?php 
            $get_products = "SELECT * FROM products Order by 1 DESC LIMIT 0,4";
            $run_product = mysqli_query($db, $get_products);

            while($row_product = mysqli_fetch_array($run_product))
            {
                $pro_id = $row_product['product_id'];
                $pro_title = $row_product['product_title'];
                $pro_img1 = $row_product['product_img1'];
                $pro_price = $row_product['product_price'];

                echo "
                     <div class='col-md-3 col-sm-6 center-responsive'>
                     <div class='product same-height'>
                      <a href='details.php?pro_id=$pro_id'>
                     <img class='img-responsive' src='admin_area/product_images/$pro_img1' alt='Related Products'>
                      </a>
                      <div class='text'>
                      <h3>
                        <a href='details.php?pro_id=$pro_id'>$pro_title</a>
                      </h3>
                      <p class='price'>₵$pro_price.00</p>
                      <p class='button'>
                         <a class='btn btn-primary' href='details.php?pro_id=$pro_id'>
                             <i class='fa fa-shopping-cart'></i> Buy Now
                        </a>
                      </p>
                      </div>
                     </div>
                     </div>



                ";
            }


        ?>
     </div>
</div>
</div>
</div>


      
<?php include_once'includes/footer.php'; ?>



<script src="js/jquery-2.1.3.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>