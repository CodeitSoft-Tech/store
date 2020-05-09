

<?php 
    
    $active = 'Cart';
    include("includes/header.php"); ?>


    <!-- Cart -->
    <div id="content">
    <div class="container">
        <div class="col-md-12">
            <ul class="breadcrumb">
                <li>
                    <a href="index.php">Home</a>
                </li>
                <li>
                    Cart
                </li>
            </ul>
        </div>
        <div id="cart" class="col-md-9">
            <div class="box">
               <form action="cart.php" method="post" enctype="multipart/form-data">
                <h1>Shopping Cart</h1>
                <p class="text-muted">You currently have 3 item(s) in your cart</p>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                        <th colspan="2">Product</th>
                        <th>Quantity</th>
                        <th>Unit price</th>
                        <th>Size</th>
                        <th colspan="1">Delete</th>
                        <th colspan="2">Sub-Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                <img class="img-responsive" src="admin_area/product_images/product8.jpg" alt="Product 8">  
                                </td>
                                <td>
                                <a href="#">System Unit</a>
                                </td>
                                <td>
                                  2
                               </td>
                               <td>
                                   GhC1500.00
                               </td>
                               <td>
                                   medium
                               </td>
                               <td>
                                <input type="checkbox" name="remove[]">
                               </td>
                               <td>
                                   GHC3000.00
                               </td>
                            </tr>
                             <tr>
                                <td>
                                <img class="img-responsive" src="admin_area/product_images/product11.jpg" alt="Product 11">  
                                </td>
                                <td>
                                <a href="#">System Unit</a>
                                </td>
                                <td>
                                  1
                               </td>
                               <td>
                                   GhC1500.00
                               </td>
                               <td>
                                   small
                               </td>
                               <td>
                                <input type="checkbox" name="remove[]">
                               </td>
                               <td>
                                   GHC1500.00
                               </td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                        <th colspan="6">Total</th> 
                        <th>GHC4500.00</th>
                            </tr>
                        </tfoot>
                    </table>
                   </div>
                <div class="box-footer">
                    <div class="pull-left">
                        <a href="shop.php" class="btn btn-primary">
                        <i class="fa fa-chevron-left"></i> Continue shopping


                        </a>
                    </div>
                    <div class="pull-right">
                        <button type="submit" name="update" value="Update Cart" class="btn btn-primary">
                           <i class="fa fa-refresh"></i> Update Cart 
                        </button>
                       
                       <a href="checkout.php" class="btn btn-primary">
                           Proceed Checkout <i class="fa fa-chevron-right"></i>
                       </a>
                    </div>
                </div>
               </form> 
            </div>
             <div id="same-height-row">
    <div class="col-md-3 col-sm-6">
        <div class="box same-height headline">
            <h3 class="text-center">Related Products</h3>
        </div>
    </div>

        <div class="col-md-3 col-sm-6 center-responsive">
        <div class="product same-height">
            <a href="">
                <img class="img-responsive" src="admin_area/product_images/product6.jpg" alt="Product 6">
            </a>
            <div class="text">
                <h3><a href="details.php">HP Laptop</a></h3>
                <p class="price">GHC2000.00</p>
            </div>
    </div>
    </div>
    <div class="col-md-3 col-sm-6 center-responsive">
        <div class="product same-height">
            <a href="">
                <img class="img-responsive" src="admin_area/product_images/product4.jpg" alt="Product 4">
            </a>
            <div class="text">
                <h3><a href="details.php">HP Laptop</a></h3>
                <p class="price">GHC1800.00</p>
            </div>
        </div>
    </div><div class="col-md-3 col-sm-6 center-responsive">
        <div class="product same-height">
            <a href="">
                <img class="img-responsive" src="admin_area/product_images/product5.jpg" alt="Product 5">
            </a>
            <div class="text">
                <h3><a href="details.php">HP Laptop</a></h3>
                <p class="price">GHC1700.00</p>
            </div>
        </div>
    </div>
</div>
    </div>
    <div class="col-md-3">
    <div id="order-summary" class="box">
        <div class="box-header">
            <h3>Order Summary</h3>
        </div>
        <p class="text-muted">
            Shipping and additional cost
        </p>
        <div class="table-responsive">
          <table class="table">
              <tbody>
                  <tr>
                      <td>Sub-Total</td>
                      <th>GHC4500.00</th>
                  </tr>
                   <tr>
                    <td>Shipping Fee</td>
                    <td>GHC0.00</td>
                  </tr>
                  <tr>
                    <td>Tax</td>
                    <th>GHC0.00</th>
                  </tr>
                  <tr>
                    <td>Total </td>
                    <th>GHC4500.00</th>
                  </tr>

              </tbody>  
         </table>
     </div>
    </div>
    </div>
    </div>
</div>







<?php include_once'includes/footer.php'; ?>



<script src="js/jquery-2.1.3.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>